<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Scripts_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 24 Wed
*/
class Controller_Scripts_Main extends Controller_Manager{

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

    do_action('get_template_part_scripts', 'scripts', $this->request->param('query'));

    $this->response->body($this->extend('content', FALSE));

    $this->response->headers('cache-control', 'public, max-age=' . get_query_var('lifetime') * 3600 );

  }
}