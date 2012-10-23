<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Taxonomy_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 22 Mon
*/
class Controller_Taxonomy_Main extends Controller_Manager{

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

    $this->file = NULL;

    if ( $this->view->is_portfolio_tax ){

      $this->response->body( $this->extend('portfolio'));

    }
    elseif ( $this->view->taxonomy == 'category-photo' ){

      $this->response->body( $this->extend('gallery'));

    }
    else{

      $this->response->body( $this->extend('index'));

    }

  }
}