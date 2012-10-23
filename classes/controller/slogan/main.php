<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Slogan_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Slogan_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'slogan';

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

    do_action('get_template_part_slogan', 'slogan', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $post_id = ( $wp_query->is_posts_page ) ? get_option('page_for_posts') : get_the_ID();

    $this->auto_render = FALSE;

    if ( $this->view->slogan = get_post_meta( $post_id, '_slogan_page', true )){

      $this->view->subslogan = get_post_meta( $post_id, '_subslogan_page', true );

      $this->response->body( $this->view);

    }

  }
}