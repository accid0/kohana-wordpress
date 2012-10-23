<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Blog_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Blog_Main extends Controller_Manager{

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

    $this->view->slogan = $this->execute('slogan');

    query_posts('cat=' . $this->view->exclude_categories . '&posts_per_page='
      . get_option('posts_per_page') . '&paged=' . $this->view->paged);

    $this->view->content_loop = $this->execute('loop/index');

    wp_reset_query();
    $this->view->sidebar = $this->execute('sidebar');

    wp_reset_postdata();
    $this->view->footer = $this->execute('footer');

    $this->response->body( $this->view);

  }
}