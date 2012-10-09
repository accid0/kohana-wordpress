<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 *@name kadapter.php
 *@packages Wordpress/Plugin
 *@subpackage Plugin
 *@category Plugin
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */

class Kadapter extends Kohana_Kadapter {
  public static function getInstance(){
    return parent::getInstance();
  }
}