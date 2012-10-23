<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Map_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Map_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'map';

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

    do_action('get_template_part_map', 'map', '');

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( $this->view->show_map == 'yes' && !empty($this->view->src)){

      $this->view->opened = get_post_meta( get_the_ID(), '_map_opened', true );

      $this->response->body( $this->view);

    }
  }
}