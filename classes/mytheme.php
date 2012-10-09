<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 06.10.12
 * Time : 8:13
 * File : mytheme.php
 * @name MyTheme
 * @packages Wordpress/ThemeFramework/MyTheme
 * @subpackage ThemeFramework
 * @category ThemeFramework
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class MyTheme extends WordpressTheme
{
  protected $_options = array(
    self::OPT_NAME                                                 => 'mytheme',
    self::OPT_PLUGIN_NAME                                          => 'mytheme',
  );

  public static function getInstance(){
    return parent::getInstance();
  }
}
