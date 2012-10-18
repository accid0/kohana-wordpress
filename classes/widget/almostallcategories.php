<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 22.09.12
 * Time : 17:32
 * File : almostAllCategories.php
 * @name almostAllCategories
 * @packages Wordpress/ThemeFramework/almostAllCategories
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_AlmostAllCategories extends WPWidget
{
  /**
   *
   */
  function __construct()
  {
    $widget_ops = array(
      'classname' => 'almost-all-categories',
      'description' => __('Get list of categories, without categories excluded from options panel.', self::$meta[ WPPlugin::OPT_WIDGET_TDOMAIN])
    );

    $control_ops = array( 'id_base' => 'almost-all-categories' );

    parent::__construct( 'almost-all-categories', $widget_ops, $control_ops );
  }

  function form( $instance )
  {
    /* Impostazioni di default del widget */
    $defaults = array(
      'title' => 'Categories',
      'show_count' => 1
    );

    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

  <p><label>
    <strong><?php _e( 'Widget Title', $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ) ?>:</strong><br />
    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
  </label></p>

  <p>
    <label for="<?php echo $this->get_field_id( 'show_count' ); ?>"><?php _e( 'Toggles the display of the current count of posts in each category', $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ) ?>:
      <select id="<?php echo $this->get_field_id( 'show_count' ); ?>" name="<?php echo $this->get_field_name( 'show_count' ); ?>">
        <option value="1" <?php selected( $instance['show_count'], '1' ) ?>><?php _e( 'Yes', $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ) ?></option>
        <option value="0" <?php selected( $instance['show_count'], '0' ) ?>><?php _e( 'No', $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ) ?></option>
      </select>
    </label>
  </p>

  <p><?php _e( 'Configure this widget on the Theme Option Admin, to exclude the categories from this list.', $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ) ?></p>
  <?php
  }

  function widget( $args, $instance )
  {
    extract( $args );

    /* Impostazioni di default del widget */
    $defaults = array(
      'title' => 'Categories',
      'show_count' => 1
    );

    $instance = wp_parse_args( (array) $instance, $defaults );

    $title = apply_filters('widget_title', $instance['title'] );

    echo $before_widget;
    echo $before_title . $title . $after_title;

    echo '<ul id="almost_all_categories_widget">';
    $cat_params = Array(
      'hide_empty'    =>  FALSE,
      'title_li'      =>  '',
      'show_count'    =>  $instance['show_count']
    );
    $ex = $this->_plugin->get_option( WordpressTheme::VAR_BLOG_CATS_EXCLUDE_SIDEBAR );
    $ex = implode(',', $ex);
    if( ! empty( $ex ) && strlen( trim( $ex ) ) > 0 ){
      $cat_params['exclude'] = trim( $ex );
    }
    wp_list_categories( $cat_params );
    echo '</ul>';
    echo $after_widget;
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );
    $instance['show_count'] = $new_instance['show_count'];

    return $instance;
  }
}
