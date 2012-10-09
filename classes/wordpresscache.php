<?php defined('SYSPATH') or die('No direct script access.');
#     /* 
#     Plugin Name: Kohana Cache  
#     Plugin URI: http://www.fuelphp-framework.ru/
#     Description: Cache Plugin for Kohana Framework. Allowed to insert Kohana request into cached page. Fork Hyper Cache v2.9.0.3
#     Author: Andrew Scherbakov 
#     Version: 0.1.0
#     Author URI: http://www.mysite
#     */ 

/**
 *
 *
 *@name wordpressCache.php
 *@packages Wordpress/Plugin
 *@subpackage Plugin
 *@category Plugin
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */

class WordpressCache extends Kohana_WordpressCache {
  /**
   * @return WordpressCache
   */
  public static function getInstance(){
    return parent::getInstance();
  }
}