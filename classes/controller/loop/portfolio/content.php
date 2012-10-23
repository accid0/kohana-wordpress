<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Loop_Portfolio_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Loop_Portfolio_Content extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'loop-portfolio';

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

    do_action('get_template_part_loop', 'loop', 'portfolio');

    $this->view->set($wp_query->query_vars);

    if ( !is_singular( $this->view->post_type ) )
      query_posts( 'post_type=' . $this->view->post_type . '&posts_per_page=1' );
  }
}