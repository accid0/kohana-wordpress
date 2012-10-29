<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 28.10.12
 * Time : 10:51
 * File : objectfiletag.php
 * @name Kohana_Cache_ObjectFileTag
 * @packages Wordpress/ThemeFramework/Kohana_Cache_ObjectFileTag
 * @subpackage
 * @category
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Kohana_Cache_ObjectFileTag extends Cache_ObjectFile implements Cache_Tagging
{

  /**
   *
   */
  const TAG_PREFIX    = 'tag-';

  /**
   *
   */
  const LOCK_PREFIX   = 'lock-';

  /**
   *
   */
  const MAX_LOOP_LOCK = 10;

  /**
   * @var array
   */
  protected $tags = array();

  /**
   * @var string
   */
  protected $_tags_dir = NULL;

  /**
   * @var string
   */
  protected $_parts_dir = NULL;

  /**
   * @var string
   */
  protected $blog_id = '';

  /**
   * @var array
   */
  protected $global_tags = array();

  /**
   * @var bool
   */
  private $_istag = FALSE;

  /**
   * @var bool
   */
  private $_ispart = FALSE;

  /**
   * @param $sid
   * @return string
   */
  private function id_tag($sid){
    if ( !in_array( $sid, $this->global_tags))
      $sid .= '_' . $this->blog_id;
    return $this->getKey( self::TAG_PREFIX . $sid);
  }

  /**
   * @param array $config
   */
  protected function __construct( array $config ){

    //wp_load_translations_early();

    // Setup parent
    parent::__construct( $config );

    $this->_tags_dir = $this->initDir( 'tags_dir', $config );

    $this->_partrs_dir = $this->initDir( 'parts_dir', $config );

    $this->blog_id = isset($GLOBALS['blog_id']) ? (int) $GLOBALS['blog_id'] : 0;

  }

  /**
   * Resolves the cache directory real path from the filename
   *
   *      // Get the realpath of the cache folder
   *      $realpath = $this->_resolve_directory($filename);
   *
   * @param   string   filename to resolve
   * @return  string
   */
  protected function _resolve_directory($filename)
  {
    if ( $this->_istag )
      return $this->_tags_dir->getRealPath().DIRECTORY_SEPARATOR.$filename[0].$filename[1].DIRECTORY_SEPARATOR;
    elseif( $this->_ispart )
      return $this->_partrs_dir->getRealPath().DIRECTORY_SEPARATOR.$filename[0].$filename[1].DIRECTORY_SEPARATOR;
    else
      return $this->_cache_dir->getRealPath().DIRECTORY_SEPARATOR.$filename[0].$filename[1].DIRECTORY_SEPARATOR;
  }

  /**
   * @param $sid
   * @return string
   */
  protected function getKey( $sid){
    return $sid;
  }

  /**
   * @param $id
   * @return bool|int
   * @throws ErrorException
   * @throws Cache_Exception
   */
  protected function getMTime( $id ){
    $filename = Cache_File::filename($this->_sanitize_id($id));
    $directory = $this->_resolve_directory($filename);
    // Wrap operations in try/catch to handle notices
    try
    {
      // Open file
      $file = new SplFileInfo($directory.$filename);

      // If file does not exist
      if ( ! $file->isFile())
      {
        // Return default value
        return FALSE;
      }
      else
      {
        return $file->getMTime();
      }

    }
    catch (ErrorException $e)
    {
      if ($e->getCode() === E_NOTICE)
      {
        throw new Cache_Exception(__METHOD__.' failed time of last modification : '.$e->getMessage());
      }

      // Otherwise throw the exception
      throw $e;
    }
  }

  /**
   * @param $sid
   * @return bool
   */
  public function lock($sid){
    return TRUE;
  }

  /**
   * @param $sid
   * @return bool
   */
  public function unlock( $sid){
    return TRUE;
  }

  /**
   * @param $sid
   */
  public function delete_tag( $sid){
    if( $this->lock( $sid)){
      $key = $this->id_tag($sid);
      $this->_istag = TRUE;
      $this->_cache->increment( $key, 1);
      $this->_istag = FALSE;
      $this->unlock($sid);
    }
  }

  /**
   * @param $sid
   * @return int
   */
  public function tag( $sid ){
    $p = $this->_istag;
    $this->_istag = TRUE;
    $k = $this->id_tag( $sid);
    $time = $this->getMTime( $k );
    if ( !(array_key_exists( $k, $this->tags) && $this->tags[$k]['time'] === $time) )
    {
      $t = $this->get( $k, NULL );
      if ( $t === NULL ){

        if ($this->set( $k, 0, 0))  $t = 0;

      }

      $this->tags[$k]['time'] = $time;
      $this->tags[$k]['value'] = $t;
    }
    $this->_istag = $p;
    return $this->tags[$k]['value'];
  }

  /**
   * Set a value based on an id. Optionally add tags.
   *
   * Note : Some caching engines do not support
   * tagging
   *
   * @param   string   id
   * @param   mixed    data
   * @param   integer  lifetime [Optional]
   * @param   array    tags [Optional]
   * @return  boolean
   */
  public function set_with_tags($id, $data, $lifetime = NULL, array $tags = NULL){
    $d = array( 'tags' => array(), 'data' => &$data );
    foreach( $tags as $tag){

      $d['tags'][$tag] = $this->tag($tag);
    }
    return $this->set( $id, $d, $lifetime);
  }

  /**
   * Find cache entries based on a tag
   *
   * @param   string   tag
   * @return  void
   * @throws  Cache_Exception
   */
  public function find($tag)
  {
    throw new Cache_Exception('Object File Tags does not support finding by tag');
  }

  /**
   * @param $id
   * @param null $default
   * @return mixed|null
   */
  public function get($id, $default = NULL){
    $v = parent::get( $id, $default);
    if ( isset( $v['tags']) && isset( $v['data'])){
      foreach( $v['tags'] as $tag => $value){
        if ( $value !== $this->tag($tag)){
          return $default;
        }
      }
      return $v['data'];
    }
    else
      return $v;
  }

  /**
   * @param array $groups
   */
  public function addGlobalTags(array $tags)
  {
    if (!is_array($this->global_tags)) {
      $this->global_tags = array();
    }

    $this->global_tags = array_merge(
      array_values($this->global_tags),
      $tags
    );

    $this->global_tags = array_unique($this->global_tags);
    $this->global_tags = array_combine($this->global_tags, $this->global_tags);
  }

  /**
   * @param null $m
   * @return bool
   */
  public function parts( $m = NULL){
    if ( $m !== NULL && is_bool($m) )
      $this->_ispart = $m;
    return $this->_ispart;
  }

}
