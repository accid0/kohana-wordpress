<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Footer_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Footer_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'footer';

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

    do_action('get_footer', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    if( strpos($this->view->footer_type, "big") !== false ){

      $this->view->footer_big = $this->extend('big?footer=' . $this->view->footer_type,
        $this->view->cache_big_footer);
    }
    else $this->view->footer_big = '';

    $this->view->scripts = $this->execute('scripts/footer?' . $wp->query_string,
      NULL, $this->view->cache_scripts );

    //$this->response->headers('cache-control', 'public, max-age=3600');

  }
}