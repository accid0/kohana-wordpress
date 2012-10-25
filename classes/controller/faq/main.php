<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Faq_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Faq_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = '';

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

    global $wp_query, $wp;

    $this->view->header = $this->execute('header');

    $this->view->slogan = $this->execute('slogan');

    if ( !is_tax() )
      $this->view->content = $this->execute( 'loop/page' );
    else $this->view->content = '';

    $args = array(
      'post_type'      => $this->view->post_type,
      'posts_per_page' => -1
    );

    if ( is_tax() )
      $args = wp_parse_args( $args, $wp_query->query );

    $faq = new WP_Query( $args );

    $first = TRUE;
    $close_first = FALSE;
    if( $close_first ) $first = FALSE;

    $html = '';


    while( $faq->have_posts() ) : $faq->the_post();

      $title = the_title( '', '', false );
      $content = get_the_content() . ' ' . the_category();
      $attr = '';
      if ( $first ) {
        $attr = ' opened="1"';
        $first = FALSE;
      }

      $html .= do_shortcode( "[toggle title=\"$title\"{$attr}]{$content}[/toggle]" );

    endwhile;

    $this->view->faq = $html;

    wp_reset_query();
    $this->view->sidebar = $this->execute('sidebar?' . $this->view->sidebar,
      NULL, ( $this->view->cache_sidebar
        && $this->view->layout_page != 'sidebar-no' ));

    $this->view->extra_content = $this->execute('extra/content?' . $wp->query_string,
      NULL, $this->view->cache_extra_content);

    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

  }
}