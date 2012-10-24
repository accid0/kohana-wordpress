<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Portfolio_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Portfolio_Main extends Controller_Manager{

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

    global $post;

    $this->view->portfolio_type = ! get_post_meta( get_the_ID(), 'portfolio_type', true )
      ? ( isset( $this->view->portfolio[$this->view->post_type]['layout'] )
        ? $this->view->portfolio[$this->view->post_type]['layout'] : '' )
      : get_post_meta( get_the_ID(), 'portfolio_type', true );

    $portfolio_types = array(
      'no_sidebar' => array('3cols', 'slider', 'big_image'),
      'sidebar'    => array('full_desc', 'filterable')
    );

    // enqueue necessary scripts
    if ( $this->view->portfolio_type == 'filterable' )
      wp_enqueue_script( 'jquery-quicksand',  $this->view->uri_theme . "/js/jquery.quicksand.js", array('jquery'));

    $this->view->layout_type = (is_tax())? $this->view->portfolio_layout_page : $this->view->layout_page;
    $this->view->layout_type = ( in_array($this->view->portfolio_type, $portfolio_types['no_sidebar']) )
      ? 'sidebar-no' : $this->view->layout_type;

    $this->view->sidebar_type = (is_tax()) ? $this->view->portfolio[$this->view->post_type]['title'] . ' Sidebar' : '';

    $cat_params = Array(
      'hide_empty'    =>  FALSE,
      'title_li'      =>  ''
    );

    $this->view->cats = get_terms( $this->view->portfolio[$this->view->post_type]['tax'], $cat_params );

    $this->view->_active_title = get_post_meta( $post->ID, '_show_title_page', true );

    $this->view->header = $this->execute('header');

    $this->view->slogan = $this->execute('slogan');

    if ( ! is_tax() && $this->view->portfolio_type != 'filterable' )
      $this->view->loop_page = $this->execute(
        $this->view->portfolio_type == 'full_desc' ? 'loop/portfolio' : 'loop/page' );

    if ( ! empty( $this->view->portfolio_type ) )
      $this->view->content = $this->extend( $this->view->portfolio_type );

    if ( $this->view->layout_type != 'sidebar-no')
      $this->view->sidebar = $this->execute('sidebar');
    else $this->view->sidebar = '';

    $this->view->extra_content = $this->execute('extra/content');

    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

    //$this->response->headers('cache-control', 'public, max-age=3600');

  }
}