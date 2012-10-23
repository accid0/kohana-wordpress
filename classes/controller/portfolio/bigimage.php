<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Portfolio_Bigimage
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Portfolio_Bigimage extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'portfolio-big-image';

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

    do_action('get_template_part_portfolio', 'portfolio', 'big_image');

    $this->view->set($wp_query->query_vars);

    $args = array(
      'post_type' => $this->view->post_type,
      'posts_per_page' => $this->view->portfolio[$this->view->post_type]['items'],
      'paged' => $this->view->paged
    );

    if ( is_tax() )
      $args = wp_parse_args( $args, $wp_query->query );

    $this->view->_portfolio = new WP_Query( $args );

  }
}