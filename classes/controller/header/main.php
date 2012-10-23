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

    $this->view->src = get_post_meta( get_the_ID(), '_map_url', true );

    $this->view->show_map = get_post_meta( get_the_ID(), '_show_map', true );

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