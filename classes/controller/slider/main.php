<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Slider_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Slider_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'slider';

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

    do_action('get_template_part_slider', 'slider', '');

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( ! $wp_query->is_posts_page && is_string($this->view->slider)
      && $this->view->slider != 'none' && !empty($this->view->slider)){

      $responsive = array( 'unoslider', 'elastic' );

      if ( ! in_array( $this->view->slider, $responsive )
        && $this->view->slider_responsive == 'fixed-image'
        && $this->view->slider != 'fixed-image' ){

        $this->view->has_mobile_slider = TRUE;

        $this->view->mobile_slider = $this->extend('fixed-image');

      }
      else $this->view->has_mobile_slider = FALSE;

      $this->view->slider_body = $this->extend( $this->view->slider);

      $this->response->body( $this->view);

      $this->response->headers('cache-control', 'public, max-age=' . $this->view->lifetime * 3600 );

    }
  }
}