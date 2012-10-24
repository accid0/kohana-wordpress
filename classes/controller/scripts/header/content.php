<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Scripts_Header_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 24 Wed
*/
class Controller_Scripts_Header_Content extends Controller_Manager{

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

    ob_start();
    do_action('kwtf_wp_head');
    $scripts = ob_get_clean();
    $this->response->body($scripts);

  }
}