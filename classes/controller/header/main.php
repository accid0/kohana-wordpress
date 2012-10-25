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

    global $wp_query, $page, $paged, $wp;

    do_action('get_header', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->view->scripts = $this->execute('scripts/header?' . $wp->query_string,
      NULL, $this->view->cache_scripts);

    // Add description, if is home
    $this->view->description =  get_bloginfo( 'description' );

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

    $this->view->menu = $this->execute('menu/main?' . $wp->query_string,
      NULL, $this->view->cache_menu_main);

    $this->view->topbar = $this->execute('topbar');

    $this->view->slider_body = $this->execute('slider?' . $this->view->slider_type,
      NULL, ( $this->view->cache_slider
        && $this->view->slider_type != 'none'
        && ! $wp_query->is_posts_page ) );

    $this->view->topsidebar = $this->execute('topsidebar',
      NULL, ( $this->view->cache_topsidebar
        && $this->view->use_topsidebar
        && ( $this->view->use_topsidebar === 'yes' ) ) );

    $this->view->map = $this->execute('map?' . $wp->query_string,
      $this->view, ( $this->view->cache_map
        && !empty($this->view->src)
        && ( $this->view->show_map === 'yes' ) ) );

    //$this->response->headers('cache-control', 'public, max-age=3600');

  }
}