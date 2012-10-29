<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Home_Blog
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 29 Mon
*/
class Controller_Home_Blog extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'blog';

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

    do_action('get_template_part_blog', 'blog', '');

    $this->view->set( $wp_query->query_vars);

    $this->response->body($this->execute('blog', $this->view));

  }
}