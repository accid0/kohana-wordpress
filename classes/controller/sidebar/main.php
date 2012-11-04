<?php defined('SYSPATH') or die('No direct script access.');
/**
*@name Controller_Sidebar_Main
*@packages Manager/Controllers
*@subpackage Controllers
*@category Controllers
*@author Andrew Scherbakov
*@version 1.0
*@copyright created  2012 - 10 Oct - 21 Sun
*/
class Controller_Sidebar_Main extends Controller_Manager{

  /**
   * view file for action
   * @var string
   */
  protected $template = 'sidebar';

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
   * Display dynamic sidebar.
   *
   * By default it displays the default sidebar or 'sidebar-1'. The 'sidebar-1' is
   * not named by the theme, the actual name is '1', but 'sidebar-' is added to
   * the registered sidebars for the name. If you named your sidebar 'after-post',
   * then the parameter $index will still be 'after-post', but the lookup will be
   * for 'sidebar-after-post'.
   *
   * It is confusing for the $index parameter, but just know that it should just
   * work. When you register the sidebar in the theme, you will use the same name
   * for this function or "Pay no heed to the man behind the curtain." Just accept
   * it as an oddity of WordPress sidebar register and display.
   *
   * @since 2.2.0
   *
   * @param int|string $index Optional, default is 1. Name or ID of dynamic sidebar.
   * @return bool True, if widget sidebar was found and called. False if not found or not called.
   */
  protected function dynamic_sidebar($index = 1, $cache_widgets = array(), $lifetime = NULL) {
    global $wp_registered_sidebars, $wp_registered_widgets;

    if ( is_int($index) ) {
      $index = "sidebar-$index";
    } else {
      $index = sanitize_title($index);
      foreach ( (array) $wp_registered_sidebars as $key => $value ) {
        if ( sanitize_title($value['name']) == $index ) {
          $index = $key;
          break;
        }
      }
    }

    $sidebars_widgets = wp_get_sidebars_widgets();
    if ( empty( $sidebars_widgets ) )
      return false;

    if ( empty($wp_registered_sidebars[$index]) || !array_key_exists($index, $sidebars_widgets) || !is_array($sidebars_widgets[$index]) || empty($sidebars_widgets[$index]) )
      return false;

    $sidebar = $wp_registered_sidebars[$index];

    $did_one = false;
    $cache = Cache::instance('tag-file');

    foreach ( (array) $sidebars_widgets[$index] as $id ) {

      if ( !isset($wp_registered_widgets[$id]) ) continue;

      $key = '';
      if ($cache){
        if ( is_array($wp_registered_widgets[$id]['callback']))
          $key = strtolower( get_class($wp_registered_widgets[$id]['callback'][0]). '_' . $wp_registered_widgets[$id]['callback'][1]);
        else $key = strtolower($widget['callback']);
        DB::log($key);
        if ( in_array( $key, $cache_widgets )){
          $widget = $cache->get($key . '_' . $index . '_' . $id);
          if ( $widget )  {
            echo $widget;
            $did_one = TRUE;
            continue;
          }
        }
      }

      $params = array_merge(
        array( array_merge( $sidebar, array('widget_id' => $id, 'widget_name' => $wp_registered_widgets[$id]['name']) ) ),
        (array) $wp_registered_widgets[$id]['params']
      );

      // Substitute HTML id and class attributes into before_widget
      $classname_ = '';
      foreach ( (array) $wp_registered_widgets[$id]['classname'] as $cn ) {
        if ( is_string($cn) )
          $classname_ .= '_' . $cn;
        elseif ( is_object($cn) )
          $classname_ .= '_' . get_class($cn);
      }
      $classname_ = ltrim($classname_, '_');
      $params[0]['before_widget'] = sprintf($params[0]['before_widget'], $id, $classname_);

      $params = apply_filters( 'dynamic_sidebar_params', $params );

      $callback = $wp_registered_widgets[$id]['callback'];

      do_action( 'dynamic_sidebar', $wp_registered_widgets[$id] );

      ob_start();
      if ( is_callable($callback) ) {
        call_user_func_array($callback, $params);
        $did_one = true;
      }
      $widget = ob_get_clean();
      echo $widget;

      if ( $cache && in_array( $key, $cache_widgets )){
        $cache->set_with_tags( $key . '_' . $index . '_' . $id, $widget, $lifetime, array('parts', 'widgets'));
      }

    }

    return $did_one;
  }

  /**
   * (non-PHPdoc)
   * @see Controller_Manager::do_action()
   */
  protected function do_action(){

    global $wp_query;

    do_action('get_sidebar', $this->request->param('query'));

    $this->view->set($wp_query->query_vars);

    $this->auto_render = FALSE;

    if ( $this->view->layout_page != 'sidebar-no' ){

      wp_reset_query();

      $sidebar = '';

      ob_start();
      $this->dynamic_sidebar( $this->view->sidebar, $this->view->cache_widgets, $this->view->lifetime_widgets );
      $sidebar = ob_get_clean();
      wp_reset_postdata();

      if ( empty($sidebar) || $sidebar === FALSE){
        ob_start();
        $this->dynamic_sidebar( 'Default Sidebar', $this->view->cache_widgets, $this->view->lifetime_widgets );
        $sidebar = ob_get_clean();
        wp_reset_postdata();
      }

      if ( empty($sidebar) || $sidebar === FALSE) $sidebar = $this->extend('default');

      $this->view->sidebar = $sidebar;

      $this->response->body( $this->view);

      $this->response->headers('cache-control', 'public, max-age=' . $this->view->lifetime * 3600 );

    }

  }
}