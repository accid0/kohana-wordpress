<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Single_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Single_Main extends Controller_Manager{

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

    do_action('get_template_part_single', 'single', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    wp_enqueue_style( 'Oswald', 'http://fonts.googleapis.com/css?family=Oswald&v2' );

    $this->view->header = $this->execute('header');

    $this->view->slogan = $this->execute('slogan');

    if ( $this->view->is_portfolio_post_type ){

      $this->view->content = $this->execute('loop/portfolio');

    }
    else{

      $this->view->content = $this->execute('loop/index');

    }

    $this->view->sidebar = $this->execute('sidebar/blog?' . $this->view->sidebar,
      NULL, ( $this->view->cache_sidebar
        && $this->view->layout_page != 'sidebar-no' ));

    $this->view->extra_content = $this->execute('extra/content?' . $wp->query_string,
      NULL, $this->view->cache_extra_content);

    $this->view->footer = $this->execute('footer');

  }
}