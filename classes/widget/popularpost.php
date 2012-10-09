<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 22.09.12
 * Time : 18:46
 * File : popularPost.php
 * @name popularPost
 * @packages Wordpress/ThemeFramework/popularPost
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_PopularPost extends WPWidget
{

  function __construct()
  {
    $widget_ops = array(
      'classname' => 'popular-posts',
      'description' => __('Show a list of popular posts, in order of comments, with a preview thumb.', self::$meta[WordpressTheme::OPT_WIDGET_TDOMAIN])
    );

    $control_ops = array( 'id_base' => 'popular-posts' );

    parent::__construct( 'popular-posts', $widget_ops, $control_ops );
  }

  function widget( $args, $instance )
  {
    extract( $args );

    /* User-selected settings. */
    if( !isset( $instance['title'] ) )
      $instance['title'] = '';

    $title = apply_filters('widget_title', $instance['title'] );

    $items = isset( $instance['items']) ? $instance['items'] : '';
    $more_text = isset( $instance['more_text']) ? $instance['more_text'] : '';
    $show_thumb = isset( $instance['show_thumb'] ) ? $instance['show_thumb'] : 'yes';
    $excerpt_length = isset( $instance['excerpt_length'] ) ? $instance['excerpt_length'] : 10;
    $date = ( isset( $instance['date_excerpt']) && $instance['date_excerpt']=='date' ) ? "true" : 'false';

    echo $before_widget;

    if ( $title ) echo $before_title . $title . $after_title;

    echo do_shortcode( "[popularpost items=\"$items\" more_text=\"$more_text\" show_thumb=\"$show_thumb\" excerpt=\"$excerpt_length\" date=\"$date\"]" );

    echo $after_widget;
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );

    $instance['show_thumb'] = $new_instance['show_thumb'];

    $instance['items'] = $new_instance['items'];

    $instance['more_text'] = $new_instance['more_text'];

    $instance['excerpt_length'] = $new_instance['excerpt_length'];

    $instance['date_excerpt'] = $new_instance['date_excerpt'];

    return $instance;
  }

  function form( $instance )
  {
    global $icons_name, $yiw_fxs, $yiw_easings;


    /* Impostazioni di default del widget */
    $defaults = array(
      'title' => 'Popular Posts',
      'items' => 3,
      'show_thumb' => 'no',
      'more_text' => '|| ' . __( 'Read More', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ),
      'excerpt_length' => '10',
      'date_excerpt' => 'date'
    );

    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

  <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" class="widefat" />
    </label>
  </p>

  <p>
    <label for="<?php echo $this->get_field_id( 'show_thumb' ); ?>"><?php _e( 'Show thumbnail', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:
      <select id="<?php echo $this->get_field_id( 'show_thumb' ); ?>" name="<?php echo $this->get_field_name( 'show_thumb' ); ?>">
        <option value="yes" <?php selected( $instance['show_thumb'], 'yes' ) ?>><?php _e( 'Yes', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?></option>
        <option value="no" <?php selected( $instance['show_thumb'], 'no' ) ?>><?php _e( 'No', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?></option>
      </select>
    </label>
  </p>

  <p>
    <label for="<?php echo $this->get_field_id( 'items' ); ?>">Items:
      <input type="text" id="<?php echo $this->get_field_id( 'items' ); ?>" name="<?php echo $this->get_field_name( 'items' ); ?>" value="<?php echo $instance['items']; ?>" size="3" />
    </label>
  </p>

  <!--
        <p>
            <label for="<?php echo $this->get_field_id( 'more_text' ); ?>">More Text:
                 <input type="text" id="<?php echo $this->get_field_id( 'more_text' ); ?>" name="<?php echo $this->get_field_name( 'more_text' ); ?>" value="<?php echo $instance['more_text']; ?>" class="widefat" />
            </label>
        </p>
        -->

  <p>
    <label for="<?php echo $this->get_field_id( 'date_excerpt' ); ?>"><?php _e( 'Show Post Date or Excerpt', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:
      <select id="<?php echo $this->get_field_id( 'date_excerpt' ); ?>" name="<?php echo $this->get_field_name( 'date_excerpt' ); ?>">
        <option value="date" <?php selected( $instance['date_excerpt'], 'date' ) ?>><?php _e( 'Date', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?></option>
        <option value="excerpt" <?php selected( $instance['date_excerpt'], 'excerpt' ) ?>><?php _e( 'Excerpt', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?></option>
      </select>
    </label>
  </p>


  <p>
    <label for="<?php echo $this->get_field_id( 'excerpt_length' ); ?>">Excerpt Lenght:
      <input type="text" id="<?php echo $this->get_field_id( 'excerpt_length' ); ?>" name="<?php echo $this->get_field_name( 'excerpt_length' ); ?>" value="<?php echo $instance['excerpt_length']; ?>"  size="3" />
    </label>
  </p>
  <?php
  }

}
