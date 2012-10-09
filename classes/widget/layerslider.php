<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 23.09.12
 * Time : 7:21
 * File : layerSlider.php
 * @name layerSlider
 * @packages Wordpress/ThemeFramework/layerSlider
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_LayerSlider extends WPWidget
{


  function __construct() {

    $widget_ops = array( 'classname' => 'layerslider_widget', 'description' => __('LayerSlider Widget', self::$meta[WordpressTheme::OPT_WIDGET_TDOMAIN]) );
    $control_ops = array( 'id_base' => 'layerslider_widget' );
    parent::__construct( 'layerslider_widget', $widget_ops, $control_ops );
  }

  function widget( $args, $instance ) {
    extract( $args );

    $title = apply_filters('widget_title', $instance['title'] );


    echo $before_widget;

    if ( $title )
      echo $before_title . $title . $after_title;

    // Call layerslider_init to show the slider
    echo do_shortcode('[layerslider id="'.$instance['id'].'"]');

    echo $after_widget;
  }

  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    /* Strip tags for title and name to remove HTML (important for text inputs). */
    $instance['id'] = strip_tags( $new_instance['id'] );
    $instance['title'] = strip_tags( $new_instance['title'] );
    return $instance;
  }

  function form( $instance ) {

    $defaults = array( 'title' => __('LayerSlider', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN]));
    $instance = wp_parse_args( (array) $instance, $defaults );
    $slides = $this->_plugin->get_var( WordpressTheme::VAR_LAYERSLIDER_SLIDES);  ?>

  <p>
    <label for="<?php echo $this->get_field_id( 'id' ); ?>">Choose a slider:</label><br>
    <select id="<?php echo $this->get_field_id( 'id' ); ?>" name="<?php echo $this->get_field_name( 'id' ); ?>">
      <?php foreach((array)$slides as $key => $val) : ?>
      <?php if( isset($instance['id']) && ($key+1) == $instance['id']) { ?>
        <option value="<?php echo ($key+1)?>" selected="selected">LayerSlider #<?php echo ($key+1)?></option>
        <?php } else { ?>
        <option value="<?php echo ($key+1)?>">LayerSlider #<?php echo ($key+1)?></option>
        <?php } ?>
      <?php endforeach; ?>
    </select>
  </p>

  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
    <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
  </p>


  <?php
  }

}
