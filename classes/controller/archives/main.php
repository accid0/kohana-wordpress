<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Archives_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Archives_Main extends Controller_Manager{

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

    $this->view->header = $this->execute('header');

    $this->response->body( $this->view);

    $this->view->slogan = $this->execute('slogan');

    $this->view->sidebar = $this->execute('sidebar?' . $this->view->sidebar,
      NULL, ( $this->view->cache_sidebar
        && $this->view->layout_page != 'sidebar-no' ) );

    wp_reset_postdata();
    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

  }
}