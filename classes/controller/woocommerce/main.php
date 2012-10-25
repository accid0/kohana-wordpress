<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Woocommerce_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Woocommerce_Main extends Controller_Manager{

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

    $this->view->header = $this->execute('header/shop');

    $this->view->search_title = sprintf(__('Search Results: &ldquo;%s&rdquo;', 'woocommerce'), get_search_query());

    $this->view->tax_title = single_term_title("", FALSE);

    $this->view->shop_page = get_post(woocommerce_get_page_id('shop'));

    $this->view->shop_page_title = apply_filters('the_title',
      ($shop_page_title = get_option('woocommerce_shop_page_title'))
        ? $shop_page_title : $this->view->shop_page->post_title);

    $this->view->paged_title = sprintf(__('&nbsp;&ndash; Page %s', 'woocommerce'), $this->view->paged);

    $this->view->have_posts = have_posts();

    if ( !is_singular( 'product' ) ) {
      ob_start();
      woocommerce_product_subcategories();
      $content = ob_get_clean();
    }
    else $content = '';

    while (have_posts()){
      the_post();
      $content .= $this->extend('content/product');
    }

    $this->view->content = $content;

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

    if ( $this->view->layout_page != 'sidebar-no' ){
      $sidebar = $this->execute('sidebar?' . $this->view->sidebar,
        NULL, $this->view->cache_sidebar );
    }

    ob_start();
    do_action('woocommerce_sidebar');
    $sidebar .= ob_get_clean();

    $this->view->sidebar = $sidebar;

    $this->view->footer = $this->execute('footer/shop');

    $this->response->body( $this->view);
  }
}