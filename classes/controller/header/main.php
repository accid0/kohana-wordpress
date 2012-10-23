<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Header_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Header_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'header';

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

    global $wp_query, $page, $paged;

    do_action('get_header', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    if( !in_array( $this->view->slider_type, array('none','fixed-image')) ) {

      if( !in_array( $this->view->slider_type, array('carousel', 'flash')) )
        wp_enqueue_style( 'slider-' . $this->view->slider_type, $this->view->uri_theme . "/css/slider-". $this->view->slider_type .".css" );

      // cycle
      if ( $this->view->slider_type == 'cycle' ) {
        wp_enqueue_script('swfobject');

      }

      // flash
      elseif ( $this->view->slider_type == 'flash' ){
        wp_enqueue_script( 'swfobject' );
      }

      // thumbnails
      elseif ( $this->view->slider_type == 'thumbnails' ){
        wp_enqueue_script( 'jquery-aw-showcases', $this->view->uri_theme . "/js/jquery.aw-showcase.js" );
      }

      //unoslider
      elseif( $this->view->slider_type == 'unoslider' ) {
        wp_enqueue_style( 'slider-' . $this->view->slider_type . '-', $this->view->uri_theme . "/css/unoslider-themes/" . $this->view->slider_theme . "/theme.css" );
        wp_enqueue_script( 'unoslider', $this->view->uri_theme . "/js/unoslider.js" );
      }

      // elastic
      elseif ( $this->view->slider_type == 'elastic' ) {
        wp_enqueue_style( 'Playfair', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' );
        wp_enqueue_script( 'jquery-elastic', $this->view->uri_theme . "/js/jquery.eislideshow.js", array('jquery'), '1.0' );
      }
    }
    if( $this->view->font_type == 'cufon' )
    {
      wp_enqueue_script('cufon');
      //wp_enqueue_script('cufon-' . $actual_font, get_template_directory_uri()."/fonts/{$actual_font}.font.js");
    }

    /* We add some JavaScript to pages with the comment form
    * to support sites with threaded comments (when in use).
    */
    if ( is_singular() && get_option( 'thread_comments' ) )
      wp_enqueue_script( 'comment-reply' );

    $this->view->src = get_post_meta( get_the_ID(), '_map_url', true );

    $this->view->show_map = get_post_meta( get_the_ID(), '_show_map', true );

    if ( $this->view->show_map == 'yes' && ! empty( $this->view->src ) )
      wp_localize_script( 'jquery-custom', 'header_map', array(
        'tab_open'  => __( 'Open', $this->view->tpl_tdomain ),
        'tab_close' => __( 'Close', $this->view->tpl_tdomain ),
      ) );

    ob_start();
    wp_head();
    $this->view->scripts = ob_get_clean();

    // Add description, if is home
    $this->view->description = ( is_home() || is_front_page() )
        ? get_bloginfo( 'description' ) : '';

    // Add a page number if necessary:
    $this->view->page = ( $paged >= 2 || $page >= 2 )
        ? ' | ' . sprintf( __( 'Page %s', $this->view->tpl_tdomain ), max( $paged, $page ) )
        : '';

    $body_class = '';
    if ( ( $this->view->responsive  && ! $GLOBALS['is_IE'] ) || ( $this->view->responsive && $this->view->ieversion >= 9 ) )
      $body_class = ' responsive';

    if ( ! is_user_logged_in() )
      $body_class .= ' not-logged-in';

    $this->view->body_class = $body_class;

    $description = str_replace( '[', '<strong>', $this->view->description );

    $this->view->description_logo = str_replace( ']', '</strong>', $description );

    $this->view->nav_args = array(
      'theme_location' => 'nav',
      'container' => 'none',
      'menu_class' => 'level-1',
      'depth' => 3,
      //'fallback_fb' => false,
      //'walker' => new description_walker()
    );

    $this->view->topbar = $this->execute('topbar');

    $this->view->slider_body = $this->execute('slider');

    $this->view->topsidebar = $this->execute('topsidebar');

    $this->view->map = $this->execute('map', $this->view);

  }
}