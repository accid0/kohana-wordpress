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
  protected $debug = FALSE;

  /**
   * @desc To stay compatible with SimpleTags
   */
  protected $cache_enabled = TRUE;

  /**
   * @var Cache_ObjectFile|NULL
   */
  private $_cache = NULL;
  private $getted = 0;
  private $setted = 0;
  private $flushed = array();
  private $rejected = 0;
  private $deleted = 0;
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
    //$np_g             = array('users', 'posts', 'post_meta', 'usermeta', 'user_meta');

    $options          = Arr::merge($options, array('persist'                => TRUE,
                                                   'enabled'                => TRUE,
                                                   'ttl'                    => NULL,
                                                   'debug'                  => FALSE,
                                                   'blog_id'                => isset($GLOBALS['blog_id']) ? (int) $GLOBALS['blog_id'] : 0,
                                                   //'addNonPersistentGroups' => $np_g,
    ));

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
   * @param bool|null $blog_id
   *
   * @return bool|null
   */
  public function blog_id($blog_id = NULL)
  {
    if ($blog_id !== NULL)
      $this->blog_id = $blog_id;
    $return = $this->blog_id;
    return $return;
  }

  /**
   * @param bool|null $blog_id
   *
   * @return bool|null
   */
  public function debug($mod = NULL)
  {
    if ($mod !== NULL)
      $this->debug = $mod;
    $return = $this->debug;
    return $return;
  }

  /**
   * Getter and setter for the internal caching engine,
   * used to cache responses if available and valid.
   *
   * @param   Cache_ObjectFile  cache engine to use for caching
   *
   * @return  Cache_ObjectFile
   */
  public function cache( Cache_ObjectFile $cache = NULL)
  {
    if ($cache === NULL)
      return $this->_cache;

    $this->_cache = $cache;
    return $this;
  }

  /**
   * @param $sid
   *
   * @return string
   */
  protected function getKey($sid, $group = array())
  {
    if (!is_array($group)) $group = array($group);
    $tags = implode( '_', $group);
    $loc = TRUE;
    foreach( $group as $tag)
      $loc = $loc && !in_array($tag, $this->global_groups);
    if ( $loc )
      $tags .= '_' . $this->blog_id;

    return $sid . '_' . $tags;
  }

  /**
   * @param $data
   * @param array $sids
   *
   * @return array
   */
  protected function encode($key, &$data, $sids, $ttl )
  {
    if ( !is_array($sids)) $sids = array($sids);
    return $this->_cache->set_with_tags( $this->getKey($key, $sids), $data, $ttl, $sids);
  }

  /**
   * @param array $data
   *
   * @return array
   */
  protected function decode( $key, $group)
  {
    return $this->_cache->get($this->getKey( $key, $group));
  }

  /**
   * @param $key
   *
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
    if ('enabled' === $key) {
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
    global $_wp_using_ext_object_cache;

    $_wp_using_ext_object_cache = $this->persist;

    return true;
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   * @param int|NULL $ttl
   *
   * @return bool
   */
  public function add($key, &$data, $group, $ttl = NULL)
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
        foreach ($tags as $group => $ttl) {
          if (!in_array($group, $this->np_groups) && $this->lock($group)) {
            $v =& $this->cache[$group][$key];
            if ($v !== NULL) {

              if ($this->encode($key, $v, $group, $ttl)){
                $this->setted++;
              }
            }
            $this->unlock($group);
          }
        }
      }
    }
    $this->dirty = array();
    if ( $this->debug) DB::log( $this->info());
  }

  /**
   * @param $key
   * @param $group
   *
   * @return bool
   */
  public function delete($key, $group)
  {
    if (!in_array($group, $this->np_groups)) {
      $this->_cache->delete($this->getKey($key, $group));
      $this->deleted++;
    }
    unset($this->cache[$group][$key]);
    unset($this->dirty[$key][$group]);
    return TRUE;
  }

  /**
   *
   */
  public function flush()
  {

    foreach ($this->cache as $group => &$keys) {
      if (in_array($group, $this->np_groups)) {
        foreach (array_keys($keys) as $key) {
          unset($this->dirty[$key][$group]);
        }
        unset($this->cache[$group]);
        unset($keys);
      }
    }
    //$this->_cache->delete_all();
    $trace = debug_backtrace();
    $trace = $trace[2]['class'] . '.' . $trace[2]['function'] . ',';
    if (!isset($this->flushed[$trace])) $this->flushed[$trace] = 1;
    else $this->flushed[$trace]++;
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   * @param int|NULL $ttl
   *
   * @return bool
   */
  public function set($key, &$data, $group, $ttl = NULL)
  {
    if (!$this->enabled) {
      return FALSE;
    }

    if ($ttl === NULL)
      $ttl = $this->maxttl;

    if (!is_array($group)) $group = array($group);
    foreach ($group as $tag){
      $this->dirty[$key][$tag] = $ttl;
    }
    $this->fast_set($key, $data, $group);
    return TRUE;
  }

  /**
   * @param $key
   * @param $data
   * @param $group
   */
  protected function fast_set($key, &$data, $group)
  {

    if (is_object($data)) {
      $data = clone($data);
    }

    foreach ($group as $tag)
      $this->cache[$tag][$key] = $data;
  }

  /**
   * @param $key
   * @param $group
   *
   * @return bool
   */
  public function get($key, $group)
  {
    $result = NULL;

    if (!$this->enabled) {
      return $result;
    }

    $result = $this->fast_get($key, $group);
    if (FALSE !== $result) {

      return $result;
    }

    if ($this->persist && !in_array($group, $this->np_groups)) {
      $this->getted++;

      if ($this->lock($group)) {
        $data = $this->decode( $key, $group);

        $this->unlock($group);
      }
      if ($data === NULL) {
        return $result;
      }
      $add                       = is_object($data) ? clone($data) : $data;
      $this->cache[$group][$key] = $add;
      $result                    = $data;
    }
    return $result;
  }

  /**
   * @param $sid
   *
   * @return bool
   */
  public function lock($sids = array())
  {
    /*if ( !is_array( $sids)) $sids = array( $sids);
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
    return (bool)$lock;  */

    return TRUE;
  }

  /**
   * @param $sid
   *
   * @return bool
   */
  public function unlock($sids = array())
  {
    /*
    if ( !is_array( $sids)) $sids = array( $sids);
    foreach( $sids as $tag){
      $key = $this->getKey( self::LOCK_PREFIX . $tag);
      $this->_cache->decrement( $key, 1);
    }*/
    return TRUE;
  }

  /**
   * @param $key
   * @param $group
   *
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
   *
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
   *
   * @return bool
   */
  public function replace($key, &$data, $group, $ttl = NULL)
  {
    if ($this->enabled && is_array($this->cache[$group]) && array_key_exists( $key, $this->cache[$group])) {
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
    $this->_cache->addGlobalTags( $groups);
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

  public function info()
  {
    $set      = $this->_cache->getSetted();
    $get      = $this->_cache->getGetted();
    $rejected = $this->_cache->getRejected();
    $flush    = '';
    foreach ($this->flushed as $trace => $num)
      $flush .= "$num/$trace, ";
    $npg = implode(",", $this->np_groups);
    $pg  = implode(",", $this->global_groups);
    $og  = implode(",", array_diff(array_keys($this->cache), Arr::merge($this->np_groups, $this->global_groups)));
    return <<<EOF

==      Object Cache Work Info        ==
== from file get        = $this->getted
== new set              = $this->setted
== flushed              = $flush
== deleted              = $this->deleted
== operation set        = $set
== operation get        = $get
== reject by ttl        = $rejected
== reject by tag        = $this->rejected
== non persist group    = $npg
== global group         = $pg
== other group          = $og

EOF;

  }
}

/**
 * wp_cache_add() - Adds data to the cache, if the cache key doesn't aleady exist
 *
 * @param int|string $key The cache ID to use for retrieval later
 * @param mixed $data The data to add to the cache store
 * @param string $flag The group to add the cache to
 * @param int $expire When the cache data should be expired
 * @return unknown
 */
function wp_cache_add($key, $data, $flag = '', $expire = NULL)
{
  global $wp_object_cache;
  if (empty($flag)) { $flag = 'default'; }
  return $wp_object_cache->add($key, $data, $flag, $expire);
}

/**
 * wp_cache_close() - Closes the cache
 *
 * @return bool Always returns True
 */
function wp_cache_close()
{
  global $wp_object_cache;
  $wp_object_cache->close();
  return true;
}

/**
 * wp_cache_delete() - Removes the cache contents matching ID and flag
 *
 * @param int|string $id What the contents in the cache are called
 * @param string $flag Where the cache contents are grouped
 * @return bool True on successful removal, false on failure
 */
function wp_cache_delete($id, $flag = '')
{
  global $wp_object_cache;
  if (empty($flag)) { $flag = 'default'; }
  return $wp_object_cache->delete($id, $flag);
}

/**
 * wp_cache_flush() - Removes all cache items
 *
 * @return bool Always returns true
 */
function wp_cache_flush()
{
  global $wp_object_cache;
  $wp_object_cache->flush();
  return true;
}

/**
 * wp_cache_get() - Retrieves the cache contents from the cache by ID and flag
 *
 * @param int|string $id What the contents in the cache are called
 * @param string $flag Where the cache contents are grouped
 * @return bool|mixed False on failure to retrieve contents or the cache contents on success
 */
function wp_cache_get($id, $flag = '')
{
  global $wp_object_cache;
  if (empty($flag)) { $flag = 'default'; }
  return $wp_object_cache->get($id, $flag);
}

function wp_cache_init()
{
  static $initialized = false;
  if ($initialized) {
    wp_cache_reset();
    return;
  }

  $initialized = true;

  $options = array();

  if (!isset($_SERVER['HTTP_HOST'])) {
    $_SERVER['HTTP_HOST'] = null;
    $options['persist'] = false;
  }

  $GLOBALS['wp_object_cache'] = LazyCache::instance('tag-file',$options);
}

/**
 * Reset internal cache keys and structures. If the cache backend uses global blog or site IDs as part of its cache keys,
 * this function instructs the backend to reset those keys and perform any cleanup since blog or site IDs have changed since cache init.
 */
function wp_cache_reset()
{
  global $wp_object_cache;
  if (is_object($wp_object_cache))
    $wp_object_cache->reset();
  else
    wp_cache_init();
}

/**
 * wp_cache_replace() - Replaces the contents of the cache with new data
 *
 * @param int|string $id What to call the contents in the cache
 * @param mixed $data The contents to store in the cache
 * @param string $flag Where to group the cache contents
 * @param int $expire When to expire the cache contents
 * @return bool False if cache ID and group already exists, true on success
 */
function wp_cache_replace($key, $data, $flag = '', $expire = NULL)
{
  global $wp_object_cache;
  if (empty($flag)) { $flag = 'default'; }
  return $wp_object_cache->replace($key, $data, $flag, $expire);
}

/**
 * wp_cache_set() - Saves the data to the cache
 *
 * @param int|string $id What to call the contents in the cache
 * @param mixed $data The contents to store in the cache
 * @param string $flag Where to group the cache contents
 * @param int $expire When to expire the cache contents
 * @return bool False if cache ID and group already exists, true on success
 */
function wp_cache_set($key, $data, $flag = '', $expire = NULL)
{
  global $wp_object_cache;
  if (empty($flag)) { $flag = 'default'; }
  return $wp_object_cache->set($key, $data, $flag, $expire);
}

/**
 * Adds a group or set of groups to the list of global groups.
 *
 * @param string|array $groups A group or an array of groups to add
 */
function wp_cache_add_global_groups($groups)
{
  global $wp_object_cache;
  if (!is_array($groups)) {
    $groups = array($groups);
  }

  $wp_object_cache->addGlobalGroups($groups);
}

/**
 * Adds a group or set of groups to the list of non-persistent groups.
 *
 * @param string|array $groups A group or an array of groups to add
 */
function wp_cache_add_non_persistent_groups($groups)
{
  global $wp_object_cache;
  if (!is_array($groups)) {
    $groups = array($groups);
  }

  $wp_object_cache->addNonPersistentGroups($groups);
}
