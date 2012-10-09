<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 22.09.12
 * Time : 19:04
 * File : contactInfo.php
 * @name contactInfo
 * @packages Wordpress/ThemeFramework/contactInfo
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_ContactInfo extends WPWidget
{

  function __construct()
  {
    $widget_ops = array(
      'classname' => 'contact-info',
      'description' => __( 'Widget with a simple contact information.', self::$meta[WordpressTheme::OPT_WIDGET_TDOMAIN] )
    );

    $control_ops = array( 'id_base' => 'contact-info' );

    parent::__construct( 'contact-info', $widget_ops, $control_ops );
  }

  function form( $instance )
  {
    global $icons_name;

    /* Impostazioni di default del widget */
    $defaults = array(
      'title' => __( 'Contacts', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ),
      'address' => '',
      'phone' => '',
      'fax' => ''
    );

    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

  <p>
    <label>
      <strong><?php _e( 'Title', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:</strong><br />
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
    </label>
  </p>

  <p>
    <label><?php _e( 'Address', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:
      <input type="text" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" value="<?php echo $instance['address']; ?>" />
    </label>
  </p>

  <p>
    <label><?php _e( 'Phone', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:
      <input type="text" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" value="<?php echo $instance['phone']; ?>" />
    </label>
  </p>

  <p>
    <label><?php _e( 'Fax', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:
      <input type="text" id="<?php echo $this->get_field_id( 'fax' ); ?>" name="<?php echo $this->get_field_name( 'fax' ); ?>" value="<?php echo $instance['fax']; ?>" />
    </label>
  </p>

  <?php
  }

  function widget( $args, $instance )
  {
    extract( $args );

    $title = apply_filters('widget_title', $instance['title'] );

    echo $before_widget;

    if ( $title ) echo $before_title . $title . $after_title;

    $text = '<div class="sidebar-nav">';
    $text .= '  <ul>';
    $text .= '    <li class="phone-icon"><span>' . $instance['address'] . '</span></li>';
    $text .= '    <li class="phone-icon">'. __( 'Phone', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) .': <span>' . $instance['phone'] . '</span></li>';
    $text .= '    <li class="fax-icon">'. __( 'Fax', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) .': <span>' . $instance['fax'] . '</span></li>';
    $text .= '  </ul>';
    $text .= '</div>';

    echo $text . $after_widget;
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );

    $instance['phone'] = $new_instance['phone'];

    $instance['address'] = $new_instance['address'];

    $instance['fax'] = $new_instance['fax'];

    return $instance;
  }


}
