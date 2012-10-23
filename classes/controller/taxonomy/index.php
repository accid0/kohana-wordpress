<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Taxonomy_Index
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 23 Tue
*/
class Controller_Taxonomy_Index extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'taxonomy-index';

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

    do_action('get_template_part_index', 'index', '');

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    $this->response->body( $this->execute('portfolio', $this->view ));

  }
}