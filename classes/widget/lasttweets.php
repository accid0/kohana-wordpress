<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 22.09.12
 * Time : 18:37
 * File : lastTweets.php
 * @name lastTweets
 * @packages Wordpress/ThemeFramework/lastTweets
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_LastTweets extends WPWidget
{

  function __construct()
  {
    $widget_ops = array(
      'classname' => 'last-tweets',
      'description' => __('Retrieve the last tweets.', self::$meta[WordpressTheme::OPT_WIDGET_TDOMAIN])
    );

    $control_ops = array( 'id_base' => 'last-tweets' );

    parent::__construct( 'last-tweets', $widget_ops, $control_ops );
  }

  function form( $instance )
  {
    /* Impostazioni di default del widget */
    $defaults = array(
      'title' => 'Last Tweets',
      'username' => '',
      'limit' => 3,
      'time' => 'true',
      'replies' => 'true'
    );

    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

  <p>
    <label>
      Title:<br />
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
    </label>
  </p>

  <p>
    <label>
      Username:<br />
      <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'username' ); ?>" name="<?php echo $this->get_field_name( 'username' ); ?>" value="<?php echo $instance['username']; ?>" />
    </label>
  </p>

  <p>
    <label>
      Limit:
      <select id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>">

        <?php for( $i = 1; $i <= 10; $i++ ) : $selected = ( $instance['limit'] == $i ) ? ' selected="selected"' : '' ?>
        <option value="<?php echo $i ?>"<?php echo $selected ?>><?php echo $i ?></option>
        <?php endfor ?>

      </select>
    </label>
  </p>

  <p>
    <label>
      <?php $checked = ( $instance['time'] == 'true' ) ? ' checked=""' : '' ?>
      <input type="checkbox" id="<?php echo $this->get_field_id( 'time' ); ?>" name="<?php echo $this->get_field_name( 'time' ); ?>" value="true"<?php echo $checked ?> />
      Show Time
    </label>
  </p>

  <p>
    <label>
      <?php $checked = ( $instance['replies'] == 'true' ) ? ' checked=""' : '' ?>
      <input type="checkbox" id="<?php echo $this->get_field_id( 'replies' ); ?>" name="<?php echo $this->get_field_name( 'replies' ); ?>" value="true"<?php echo $checked ?> />
      Show Replies
    </label>
  </p>
  <?php
  }

  function widget( $args, $instance )
  {
    extract( $args );

    $title = apply_filters('widget_title', $instance['title'] );

    echo $before_widget;
    echo $before_title . $title . $after_title;

    echo '<div class="list-tweets' . '-' . $this->number . '"></div>';

    $time = ( $instance['time'] != 'true' ) ? 'false' : 'true';
    $replies = ( $instance['replies'] != 'true' ) ? 'false' : 'true';

    //script
    echo "<script type=\"text/javascript\">
				jQuery(function($){
					$('#" . $this->id_base . '-' . $this->number . ' .list-tweets-' . $this->number . "').tweetable({
						listClass: 'tweets-widget-$this->number',
						username: '$instance[username]',
						time: $time,
						limit: $instance[limit],
						replies: $replies
					});
				});
				</script>";

    echo $after_widget;
  }

  function update( $new_instance, $old_instance )
  {
    $instance = $old_instance;

    $instance['title'] = strip_tags( $new_instance['title'] );

    $instance['username'] = strip_tags( $new_instance['username'] );

    $instance['time'] = strip_tags( $new_instance['time'] );

    $instance['limit'] = strip_tags( $new_instance['limit'] );

    $instance['replies'] = strip_tags( $new_instance['replies'] );

    return $instance;
  }


}
