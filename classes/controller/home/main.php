<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Home_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Home_Main extends Controller_Manager{

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

    if ( ( ( is_home() || is_front_page() ) && get_option( 'show_on_front' ) == 'posts'
      || $wp_query->is_posts_page ) || (is_home() && get_option( 'page_for_posts' ) != '0' )) {

      $this->file = NULL;

      $this->response->body( $this->extend('blog'));

      return;
    }

    $this->view->header = $this->execute('header');

    $this->view->slogan = $this->execute('slogan');

    if ( is_home() )
      $this->view->loop_content = $this->execute( 'loop/index' );
    else
      $this->view->loop_content = $this->execute( 'loop/page' );

    $this->view->sidebar = $this->execute('sidebar?' . $this->view->sidebar,
      NULL, ( $this->view->cache_sidebar
        && $this->view->layout_page != 'sidebar-no' ));

    $this->view->extra_content = $this->execute('extra/content?' . $wp->query_string,
      NULL, $this->view->cache_extra_content);

    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

  }
}