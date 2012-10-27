<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 26.10.12
 * Time : 9:57
 * File : lazycache.php
 *
 * @name Kohana_LazyCache
 * @packages Wordpress/ThemeFramework/Kohana_LazyCache
 * @subpackage
 * @category
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
abstract class Kohana_LazyCache
{

  const TAG_PREFIX    = 'tag-';
  const LOCK_PREFIX   = 'lock-';
  const MAX_LOOP_LOCK = 10;
  protected $cache = array();
  protected $dirty = array();
  protected $enabled = TRUE;
  protected $persist = TRUE;
  protected $maxttl = NULL;
  protected $np_groups = array();
  protected $global_groups = array();
  protected $blog_id;

  /**
   * @desc To stay compatible with SimpleTags
   */
  protected $cache_enabled = TRUE;

  /**
   * @var Cache|NULL
   */
  private $_cache = NULL;
  private static $instance = NULL;

  /**
   * Factory method for HTTP_Cache that provides a convenient dependency
   * injector for the Cache library.
   *
   *      // Create HTTP_Cache with named cache engine
   *      $http_cache = HTTP_Cache::factory('memcache', array(
   *          'allow_private_cache' => FALSE
   *          )
   *      );
   *
   *      // Create HTTP_Cache with supplied cache engine
   *      $http_cache = HTTP_Cache::factory(Cache::instance('memcache'),
   *          array(
   *              'allow_private_cache' => FALSE
   *          )
   *      );
   *
   * @uses    [Cache]
   *
   * @param   mixed    cache engine to use
   * @param   array    options to set to this class
   *
   * @return  Kohana_LazyCache
   */
  public static function instance($cache, array $options = array())
  {
    if (self::$instance) {
      return self::$instance;
    }

    if (!$cache instanceof Cache) {
      $cache = Cache::instance($cache);
    }

    $options['cache'] = $cache;

    $options = Arr::merge($options, array('persist' => TRUE,
                                          'enabled' => TRUE,
                                          'ttl'     => NULL));

    return self::$instance = new LazyCache($options);
  }

  /**
   * Constructor method for this class. Allows dependency injection of the
   * required components such as `Cache` and the cache key generator.
   *
   * @param   array $options
   */
  private function __construct(array $options = array())
  {
    foreach ($options as $key => $value) {
      if (method_exists($this, $key)) {
        $this->$key($value);
      }
    }
    $this->reset();
  }

  /**
   * @param bool|null $persist
   *
   * @return bool|null
   */
  public function persist($persist = NULL)
  {
    if ($persist !== NULL)
      $this->persist = $persist;
    $return = $this->persist;
    return $return;
  }

  /**
   * @param bool|null $enabled
   *
   * @return bool|null
   */
  public function enabled($enabled = NULL)
  {
    if ($enabled !== NULL)
      $this->enabled = $enabled;
    $return = $this->enabled;
    return $return;
  }

  /**
   * @param bool|null $ttl
   *
   * @return bool|null
   */
  public function ttl($ttl = NULL)
  {
    if ($ttl !== NULL)
      $this->maxttl = $ttl;
    $return = $this->maxttl;
    return $return;
  }

  /**
   * Getter and setter for the internal caching engine,
   * used to cache responses if available and valid.
   *
   * @param   Kohana_Cache  cache engine to use for caching
   *
   * @return  Kohana_Cache
   * @return  Kohana_Request_Client
   */
  public function cache(Cache $cache = NULL)
  {
    if ($cache === NULL)
      return $this->_cache;

    $this->_cache = $cache;
    return $this;
  }

  /**
   * @param $sid
   * @return string
   */
  protected function getKey($sid)
  {
    return sha1($sid);
  }

  /**
   * @param $data
   * @param array $sids
   * @return array
   */
  protected function encode( $data, $sids = array()){
    if ( !is_array($sids))  $sids = array( $sids);
    $tags = array();
    foreach( $sids as $tag){
      $key = $this->getKey( self::TAG_PREFIX . $tag);
      $v = $this->_cache->get( $key);
      if ( !$v) {
        $this->_cache->add( $key, 0, $this->maxttl);
        $v = 0;
      }
      $tags[$tag] = $v;
    }
    return array( 'value' => $data, 'tags' => $tags);
  }

  /**
   * @param array $data
   * @return array
   */
  protected function decode( $data = NULL){
    if ( !is_array($data) || !array_key_exists('tags', $data) )
      $data = array( 'tags' => array(), 'value' => $data);
    $tags = array();
    foreach( $data['tags'] as $tag => $value){
      $v = $this->_cache->get( $this->getKey(self::TAG_PREFIX . $tag));
      if ( $v && $v === $value )
        $tags[$tag] = $v;
      else{
        $tags = array();
        break;
      }
    }
    $data['tags'] = $tags;
    return $data;
  }

  /**
   * @param $key
   * @return null
   */
  public function __get($key)
  {
    static $keys = array('global_groups' => 'global_groups',
                         'cache_enabled' => 'cache_enabled',
                         'enabled'       => 'enabled');
    return isset($keys[$key]) ? $this->$key : NULL;
  }

  /**
   * @param $key
   * @param $val
   */
  public function __set($key, $val)
  {
    if ('enabled' == $key) {
      if (!$val) {
        $this->close();
        $this->persist = FALSE;
      }

      $this->enabled = $val;
    }
  }

  /**
   *
   */
  public function reset()
  {
    $this->close();
    if ($this->cache) {
      foreach ($this->cache as $group => &$x) {
        if (!in_array($group, $this->global_groups)) {
          unset($this->cache[$group]);
          unset($x);
        }
      }

    }

    $this->blog_id = $GLOBALS['blog_id'];
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   * @param int|NULL $ttl
   * @return bool
   */
  public function add($key, $data, $group, $ttl = NULL)
  {
    if (!isset($this->cache[$group][$key])) {
      return $this->set($key, $data, $group, $ttl);
    }

    return FALSE;
  }

  /**
   *
   */
  public function close()
  {
    if (!empty($this->dirty) && $this->persist) {
      foreach ($this->dirty as $key => $tags) {
        $t = array();
        $v = FALSE;
        $_ttl = NULL;
        foreach( $tags as $group => $ttl){
          if (!isset($this->np_groups[$group]) && $this->lock($group)) {
            $t[] = $group;
            if ( !$v) $v = $this->cache[$group][$key];
            if ( $ttl > $_ttl ) $_ttl = $ttl;
          }
        }
        if ($v){
          $this->_cache->set( $this->getKey($key), $this->encode( $v, $t), $_ttl);
        }
        $this->unlock($t);
      }
    }
    $this->dirty = array();
  }

  /**
   * @param $key
   * @param $group
   * @return bool
   */
  public function delete($key, $group)
  {
    unset($this->cache[$group][$key]);
    unset($this->dirty[$key][$group]);
    return true;
  }

  /**
   *
   */
  public function flush()
  {
    $this->cache = array();
    $this->dirty = array();
    $this->_cache->delete_all();
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   * @param int|NULL $ttl
   * @return bool
   */
  public function set($key, $data, $group, $ttl = NULL)
  {
    if (!$this->enabled) {
      return FALSE;
    }

    if (!$ttl && $this->maxttl) {
      $ttl = $this->maxttl;
    }
    if ( !is_array($group)) $group = array($group);
    foreach( $group as $tag)
      $this->dirty[$key][$tag] = $ttl;
    $this->fast_set($key, $data, $group);
    return TRUE;
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   */
  protected function fast_set($key, $data, $group)
  {
    if (is_object($data)) {
      $data = clone($data);
    }

    foreach( $group as $tag)
      $this->cache[$tag][$key] = $data;
  }

  /**
   * @param $key
   * @param $group
   * @return bool
   */
  public function get($key, $group)
  {
    $result = FALSE;

    if (!$this->enabled) {
      return $result;
    }

    $result = $this->fast_get($key, $group);
    if (false !== $result) {
      return $result;
    }

    if ($this->persist && !isset($this->np_groups[$group]) && !isset($this->cache[$group])){

      if( $this->lock($group)){
        $data = $this->decode( $this->_cache->get( $this->getKey($key) ) );

        $this->unlock($group);
      }
      if ( !in_array( $group, (array)array_keys($data['tags'])))  return $result;
      $add = is_object($data['value'])? clone( $data['value']) : $data['value'];
      foreach( $data['tags'] as $group)
        $this->cache[$group][$key] = $add;
      $result = $data['value'];
    }

    return $result;
  }

  /**
   * @param $sid
   * @return bool
   */
  public function lock( $sids = array()){
    if ( !is_array( $sids)) $sids = array( $sids);
    $lock = TRUE;
    foreach( $sids as $tag){
      $key = $this->getKey( self::LOCK_PREFIX . $tag);
      $loop = 0;
      while( $lock = $this->_cache->increment( $key, 1 ) ){
        if ( $lock === 1) break;
        if ( $loop++ >= self::MAX_LOOP_LOCK){
          $this->flush();
          throw new Cache_Exception('Lock Fatal Error: Max number loops overhead.');
        }
        $this->_cache->decrement( $key, 1 );
      }
    }
    return (bool)$lock;
  }

  /**
   * @param $sid
   * @return bool
   */
  public function unlock( $sids = array()){
    if ( !is_array( $sids)) $sids = array( $sids);
    foreach( $sids as $tag){
      $key = $this->getKey( self::LOCK_PREFIX . $tag);
      $this->_cache->decrement( $key, 1);
    }
  }

  /**
   * @param $key
   * @param $group
   * @return bool
   */
  protected function fast_get($key, $group)
  {
    if (isset($this->cache[$group][$key])) {
      $result = $this->cache[$group][$key];
      return is_object($result) ? clone($result) : $result;
    }

    return FALSE;
  }

  /**
   * @param $group
   * @return bool
   */
  protected function has_group($group)
  {
    return isset($this->cache[$group]);
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   * @param int $ttl
   * @return bool
   */
  public function replace($key, $data, $group, $ttl = NULL)
  {
    if ($this->enabled && isset($this->cache[$group][$key])) {
      return $this->set($key, $data, $group, $ttl);
    }

    return FALSE;
  }

  /**
   * @param array $groups
   */
  public function addNonPersistentGroups(array $groups)
  {
    $this->np_groups = array_merge(
      array_values($this->np_groups),
      $groups
    );

    $this->np_groups = array_unique($this->np_groups);
    $this->np_groups = array_combine($this->np_groups, $this->np_groups);
  }

  /**
   * @param array $groups
   */
  public function addGlobalGroups(array $groups)
  {
    if (!is_array($this->global_groups)) {
      $this->global_groups = array();
    }

    $this->global_groups = array_merge(
      array_values($this->global_groups),
      $groups
    );

    $this->global_groups = array_unique($this->global_groups);
    $this->global_groups = array_combine($this->global_groups, $this->global_groups);
  }

  /**
   *
   */
  public function clearGlobalGroups()
  {
    $this->global_groups = array();
  }

  /**
   *
   */
  public function clearNonPersistentGroups()
  {
    $this->np_groups = array();
  }

}
