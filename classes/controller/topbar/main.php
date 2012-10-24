<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Topbar_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Topbar_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'topbar';

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

    do_action('get_template_part_topbar', 'topbar', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( $this->view->show_topbar ){

      $this->view->menu = $this->execute('menu/topbar');

      $this->response->body( $this->view);

    }

  }
}