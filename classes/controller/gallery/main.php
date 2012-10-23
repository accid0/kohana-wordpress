<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Gallery_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Gallery_Main extends Controller_Manager{

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

    global $post, $wp_query;


    // enqueue necessary scripts
    wp_enqueue_script( 'jquery-quicksand',  $this->view->uri_theme . "/js/jquery.quicksand.js", array('jquery'));

    $this->view->header = $this->execute('header');

    $cat_params = Array(
      'hide_empty'    =>  FALSE,
      'title_li'      =>  ''
    );

    $this->view->cats = get_terms( 'category-photo', $cat_params );

    $this->view->_active_title = get_post_meta( $post->ID, '_show_title_page', true );

    $this->view->slogan = $this->execute('slogan');

    $args = array(
      'post_type'      => $this->view->post_type,
      'posts_per_page' => -1
    );

    if ( is_tax() )
      $args = wp_parse_args( $args, $wp_query->query );

    $this->view->gallery = new WP_Query( $args );

    $this->view->postsPerRow = ($this->view->layout_page != 'sidebar-no') ? 3 : 4;

    if($this->view->layout_page != 'sidebar-no')
      $this->view->sidebar = $this->execute('sidebar');
    else
      $this->view->sidebar = '';

    $this->view->extra_content = $this->execute('extra/content');

    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

  }
}