<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Sidebar_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Sidebar_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'sidebar';

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

    global $wp_query;

    do_action('get_sidebar', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( $this->view->layout_page != 'sidebar-no' ){

      wp_reset_query();

      $sidebar = '';

      if ( function_exists('dynamic_sidebar')){
        ob_start();
        dynamic_sidebar( $this->view->sidebar );
        $sidebar = ob_get_clean();
        wp_reset_postdata();
      }

      if ( empty($sidebar) ) $sidebar = $this->extend('default');

      $this->view->sidebar = $sidebar;

      $this->response->body( $this->view);

    }

  }
}