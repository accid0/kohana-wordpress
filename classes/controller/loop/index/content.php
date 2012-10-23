<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Loop_Index_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Loop_Index_Content extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'loop';

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

    global $wp_query, $more;

    do_action('get_template_part_loop', 'loop', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->view->have_posts  = have_posts();

    $content_loop = '';

    while (have_posts()) : the_post();

      if ( !is_single() )
        $more = 0;

      if ( ( get_post_type() == 'post' && ( is_single() || is_search() ) ) && get_post_type() != 'bl_testimonials' ) {

        if( $this->view->blog_type == 'small' )
          $this->view->core->set_var( WordpressTheme::OPT_BLOG_TYPE, 'big');
        $this->view->blog_type = 'big';
      }

      if( get_post_type() == 'bl_testimonials'){
        $this->view->core->set_var( WordpressTheme::OPT_BLOG_TYPE, 'big');
        $this->view->blog_type = 'big';
      }

      $content_loop .= $this->extend( 'blog-' . $this->view->blog_type );

    endwhile;

    $this->view->content_loop = $content_loop;

  }
}