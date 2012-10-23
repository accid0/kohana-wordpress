<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Woocommerce_Archiveproduct_Content
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Woocommerce_Archiveproduct_Content extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'woocommerce/content-product';

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

    global $wp_query, $woocommerce_loop, $product;

    do_action('get_template_part_content', 'content', 'product');

    $this->view->set($wp_query->query_vars);

    // Store loop count we're currently on
    if ( empty( $woocommerce_loop['loop'] ) )
      $woocommerce_loop['loop'] = 0;

    // Store column count for displaying the grid
    if ( empty( $woocommerce_loop['columns'] ) )
      $woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

    if (!$product->is_visible()) return;

    $woocommerce_loop['loop']++;

    $loop_class_li = $this->view->class_li;

    if ( ! isset( $woocommerce_loop['setLast'] ) && $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ==0 )
      $loop_class_li[] = 'last';

    if ( ! isset( $woocommerce_loop['setFirst'] ) && ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 )
      $loop_class_li[] = 'first';

    if ( ! empty( $loop_class_li ) )
      $this->view->class = ' class="' . implode( ' ', $loop_class_li ) . '"';
    else
      $this->view->class = '';

  }
}