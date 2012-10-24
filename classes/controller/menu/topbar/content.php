<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Menu_Topbar_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 24 Wed
*/
class Controller_Menu_Topbar_Content extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = '';

  /**
   * (non-PHPdoc)
   * @see Controller_Manager::initialize()
   */
  protected function initialize(){

  }

  /**
   * (non-PHPdoc)
   * @see Controller_Manager::finalize()
   */
  protected function finalize(){

  }

  /**
   * (non-PHPdoc)
   * @see Controller_Manager::do_action()
   */
  protected function do_action(){

    $nav_args = array(
      'theme_location' => 'topbar',
      'items_wrap' => '%3$s',
      'container' => 'none',
      'menu_class' => 'topbar-level-1',
      'depth' => 2,
      'fallback_cb' => ''
    );

    ob_start();
    wp_nav_menu( $nav_args );
    $nav = ob_get_clean();
    $this->response->body( $nav);

  }
}