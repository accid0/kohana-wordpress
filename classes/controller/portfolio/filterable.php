<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Portfolio_Filterable
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Portfolio_Filterable extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'portfolio-filterable';

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

    do_action('get_template_part_portfolio', 'portfolio', 'filterable');

    $this->view->set($wp_query->query_vars);

    $args = array(
      'post_type'      => $this->view->post_type,
      'posts_per_page' => -1,
    );

    if ( is_tax())
      $args['tax_query'] = array(
        array(
          'taxonomy' => $this->view->taxonomy,
          'field' => 'slug',
          'terms' => $this->view->term
        )
      );
    $this->view->gallery = new WP_Query( $args );

    $this->view->postsPerRow = ( $this->view->layout_page != 'sidebar-no') ? 3 : 4;

  }
}