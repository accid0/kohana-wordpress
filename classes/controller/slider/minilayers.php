<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Slider_Minilayers
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Slider_Minilayers extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'slider-minilayers';

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

    do_action('get_template_part_slider', 'slider', 'minilayers');

    $this->view->set($wp_query->query_vars);

    $this->view->slider_body = do_shortcode('[layerslider id="'.$this->view->slider.'"]');

    $static_title = $this->view->core->slide_get( 'static_title' );
    $static_title = str_replace(
      array( '[', ']'),
      array( '<span>', '</span>' ),
      $static_title
    );

    $this->view->static_title = $static_title;

    $short_text = $this->view->core->slide_get( 'static_short_text' );
    $short_text = str_replace( array( '[', ']' ), array( '<strong>', '</strong>' ), $short_text );
    $this->view->short_text = $short_text;

  }
}