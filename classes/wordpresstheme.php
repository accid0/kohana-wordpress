<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 *@name wordpressTheme.php
 *@packages Wordpress/Theme
 *@subpackage Theme
 *@category Theme
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */

class WordpressTheme extends Kohana_WordpressTheme {
  /**
   * @return WordpressTheme
   */
  public static function getInstance(){
    return parent::getInstance();
  }
}