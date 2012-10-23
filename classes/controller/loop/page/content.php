<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Loop_Page_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Loop_Page_Content extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'loop-page';

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

    global $wp_query, $post;

    do_action('get_template_part_loop', 'loop', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->view->have_posts  = have_posts();

    $content_loop = '';

    add_filter( 'the_title', array( $this->view->core, 'filter_bloginfo') );

    while (have_posts()) : the_post();

      $wpautop = get_post_meta( get_the_ID(), '_page_remove_wpautop', true );

      if( $wpautop )
        remove_filter( 'the_content', 'wpautop' );

      $this->view->_active_title = get_post_meta( $post->ID, '_show_title_page', true );

      $content_loop .= $this->extend('page');

      if( $wpautop )
        add_filter( 'the_content', 'wpautop' );

    endwhile;

    $this->view->content_loop = $content_loop;

  }
}