<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Footer_Big
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Footer_Big extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'footer-big';

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
    $this->response->headers('cache-control', 'public, max-age=3600');
  }
}