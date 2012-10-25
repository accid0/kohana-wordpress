<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Topsidebar_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Topsidebar_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'topsidebar';

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

    do_action('get_template_part_topsidebar', 'topsidebar', '');

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( $this->view->use_topsidebar && $this->view->use_topsidebar !== 'no'){

      $this->response->body( $this->view);

      $this->response->headers('cache-control', 'public, max-age=3600');

    }

  }
}