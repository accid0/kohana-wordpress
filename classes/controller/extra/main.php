<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Extra_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Extra_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'extra-content';

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

    do_action('get_template_part_extra', 'extra', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    wp_reset_query();

    $post_id = get_the_ID();

    $extra_content = do_shortcode( get_post_meta( $post_id, '_page_extra_content', true ) );

    if( get_post_meta( $post_id, '_page_extra_content_autop', true ) )
      $extra_content = apply_filters( 'the_content', $extra_content );

    $this->view->extra_content = $extra_content;

    $this->auto_render = FALSE;

    if ( $extra_content != ''){

      $this->response->body( $this->view);

      $this->response->headers('cache-control', 'public, max-age=3600');

    }

  }
}