<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 26.10.12
 * Time : 22:07
 * File : objectfile.php
 * @name Kohana_Cache_ObjectFile
 * @packages Wordpress/ThemeFramework/Kohana_Cache_ObjectFile
 * @subpackage
 * @category
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Kohana_Cache_ObjectFile extends Cache_File implements Cache_Arithmetic
{
  private $getted = 0;
  private $setted = 0;
  private $rejected = 0;
  /**
   * Retrieve a cached value entry by id.
   *
   *     // Retrieve cache entry from file group
   *     $data = Cache::instance('file')->get('foo');
   *
   *     // Retrieve cache entry from file group and return 'bar' if miss
   *     $data = Cache::instance('file')->get('foo', 'bar');
   *
   * @param   string   id of cache to entry
   * @param   string   default value to return if cache miss
   * @return  mixed
   * @throws  Cache_Exception
   */
  public function get($id, $default = NULL)
  {
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
        return $default;
      }
      else
      {

        $data     = $file->openFile();
        ob_start();
        $data->fpassthru();
        $cache  = unserialize( ob_get_clean());

        // Test the expiry
        if ( ( $cache['ttl'] !== 0 && $cache['ttl'] < time() ) || $cache['data'] === NULL )
        {
          // Delete the file
          $this->rejected++;
          $this->_delete_file($file, NULL, TRUE);
          return $default;
        }
        else
        {
          $this->getted++;
          return $cache['data'];
        }
      }

    }
    catch (ErrorException $e)
    {
      // Handle ErrorException caused by failed unserialization
      if ($e->getCode() === E_NOTICE)
      {
        throw new Cache_Exception(__METHOD__.' failed to unserialize cached object with message : '.$e->getMessage());
      }

      // Otherwise throw the exception
      throw $e;
    }
  }

  /**
   * Set a value to cache with id and lifetime
   *
   *     $data = 'bar';
   *
   *     // Set 'bar' to 'foo' in file group, using default expiry
   *     Cache::instance('file')->set('foo', $data);
   *
   *     // Set 'bar' to 'foo' in file group for 30 seconds
   *     Cache::instance('file')->set('foo', $data, 30);
   *
   * @param   string   id of cache entry
   * @param   string   data to set to cache
   * @param   integer  lifetime in seconds
   * @return  boolean
   */
  public function set($id, $data, $lifetime = NULL)
  {
    $filename = Cache_File::filename($this->_sanitize_id($id));
    $directory = $this->_resolve_directory($filename);

    // If lifetime is NULL
    if ($lifetime === NULL)
    {
      // Set to the default expiry
      $lifetime = Arr::get($this->_config, 'default_expire', Cache::DEFAULT_EXPIRE);
    }

    // Open directory
    $dir = new SplFileInfo($directory);

    // If the directory path is not a directory
    if ( ! $dir->isDir())
    {
      // Create the directory
      if ( ! mkdir($directory, 0777, TRUE))
      {
        throw new Cache_Exception(__METHOD__.' unable to create directory : :directory', array(':directory' => $directory));
      }

      // chmod to solve potential umask issues
      chmod($directory, 0777);
    }

    // Open file to inspect
    $resouce = new SplFileInfo($directory.$filename);
    $file = $resouce->openFile('w');

    try
    {
      $expirationTS = $lifetime ? time() + $lifetime : 0;
      $data = serialize(array( 'ttl' => $expirationTS, 'data' => $data));
      $file->fwrite($data, strlen($data));
      $this->setted++;
      return (bool) $file->fflush();
    }
    catch (ErrorException $e)
    {
      // If serialize through an error exception
      if ($e->getCode() === E_NOTICE)
      {
        // Throw a caching error
        throw new Cache_Exception(__METHOD__.' failed to serialize data for caching with message : '.$e->getMessage());
      }

      // Else rethrow the error exception
      throw $e;
    }
  }

  /**
   * Set a value to cache with id and lifetime
   *
   *     $data = 'bar';
   *
   *     // Set 'bar' to 'foo' in file group, using default expiry
   *     Cache::instance('file')->set('foo', $data);
   *
   *     // Set 'bar' to 'foo' in file group for 30 seconds
   *     Cache::instance('file')->set('foo', $data, 30);
   *
   * @param   string   id of cache entry
   * @param   string   data to set to cache
   * @param   integer  lifetime in seconds
   * @return  boolean
   */
  public function add($id, $data, $lifetime = NULL)
  {
    $filename = Cache_File::filename($this->_sanitize_id($id));
    $directory = $this->_resolve_directory($filename);

    // If lifetime is NULL
    if ($lifetime === NULL)
    {
      // Set to the default expiry
      $lifetime = Arr::get($this->_config, 'default_expire', Cache::DEFAULT_EXPIRE);
    }

    // Open directory
    $dir = new SplFileInfo($directory);

    // If the directory path is not a directory
    if ( ! $dir->isDir())
    {
      // Create the directory
      if ( ! mkdir($directory, 0777, TRUE))
      {
        throw new Cache_Exception(__METHOD__.' unable to create directory : :directory', array(':directory' => $directory));
      }

      // chmod to solve potential umask issues
      chmod($directory, 0777);
    }

    // Open file to inspect
    $resouce = new SplFileInfo($directory.$filename);
    if ( !$resouce->isFile() )
      return $this->set( $id, $data, $lifetime);
  }

  /**
   * Increments a given value by the step value supplied.
   * Useful for shared counters and other persistent integer based
   * tracking.
   *
   * @param   string    id of cache entry to increment
   * @param   int       step value to increment by
   * @return  integer
   * @return  boolean
   */
  public function increment($id, $step = 1){
    $i = $this->get($id);
    if ( $i == NULL) $i = 0;
    $this->set( $id, $i + $step, 0);
    return $i + $step;
  }

  /**
   * Decrements a given value by the step value supplied.
   * Useful for shared counters and other persistent integer based
   * tracking.
   *
   * @param   string    id of cache entry to decrement
   * @param   int       step value to decrement by
   * @return  integer
   * @return  boolean
   */
  public function decrement($id, $step = 1){
    $i = $this->get($id);
    if ( $i == NULL) $i = 0;
    $this->set( $id, $i - $step, 0);
    return $i + $step;
  }

  /**
   * @return int
   */
  public function getGetted(){
    return $this->getted;
  }

  /**
   * @return int
   */
  public function getSetted(){
    return $this->setted;
  }

  /**
   * @return int
   */
  public function getRejected(){
    return $this->rejected;
  }
}
