<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 22.09.12
 * Time : 19:26
 * File : portfolioCategories.php
 * @name portfolioCategories
 * @packages Wordpress/ThemeFramework/portfolioCategories
 * @subpackage Widget
 * @category Widget
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
class Widget_PortfolioCategories extends WPWidget
{


  function __construct()

  {

    $widget_ops = array(

      'classname' => 'portfolio-categories',

      'description' => __('Get list of portfolio categories, created on portfolio custom type.', self::$meta[WordpressTheme::OPT_WIDGET_TDOMAIN])

    );



    $control_ops = array( 'id_base' => 'portfolio-categories' );



    parent::__construct( 'portfolio-categories', $widget_ops, $control_ops );

  }



  function form( $instance )

  {

    /* Impostazioni di default del widget */

    $defaults = array(

      'title' => 'Portfolio Categories'

    );



    $instance = wp_parse_args( (array) $instance, $defaults ); ?>



  <p><label>

    <strong><?php _e( 'Widget Title', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?>:</strong><br />

    <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />

  </label></p>



  <p>

    <label for="<?php echo $this->get_field_id( 'project_post_type' ); ?>">Portfolio:

      <select id="<?php echo $this->get_field_id( 'project_post_type' ); ?>" name="<?php echo $this->get_field_name( 'project_post_type' ); ?>">

        <?php

        $portfolios = $this->_plugin->portfolios();

        foreach( $portfolios as $post_type => $the_ )

        {

          $select = '';

          if( isset( $instance['project_post_type']) && $instance['project_post_type'] == $post_type) $select = ' selected="selected"';

          echo "<option value=\"$post_type\"$select>$the_[title]</option>\n";

        }

        ?>

      </select>

    </label>

  </p>

  <p><?php _e( 'Show a list of portfolio categories, for portfolio custom types.', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN] ) ?></p>

  <?php

  }



  function widget( $args, $instance )

  {

    extract( $args );



    $title = apply_filters('widget_title', $instance['title'] );

    $project_post_types = isset( $instance['project_post_type']) ? $instance['project_post_type'] : 'portfolio';



    echo $before_widget;

    echo $before_title . $title . $after_title;


    $portfolios = $this->_plugin->portfolios();



    echo '<ul id="gallery_categories_widget">';

    //echo '    <li class="segment-1"><a data-value="all" href="' . get_permalink( $this->_plugin->get_pageID_by_pagename( 'portfolio' ) ) . '">'.__('All', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN]).'</a></li>';

    if ( ! is_tax() && ! is_single() )
      echo '    <li class="segment-1"><a data-value="all" href="#">'.__('All', $this->_meta[WordpressTheme::OPT_WIDGET_TDOMAIN]).'</a></li>';



    $cat_params = Array(

      'hide_empty'    =>  FALSE,

      'title_li'      =>  ''

    );



    $cats = get_terms( sanitize_title( $portfolios[$project_post_types]['tax'] ), $cat_params );


    foreach( $cats as $cat )

    {

      if( $cat->count > 0 ) :

        $url = ( is_tax() || is_single() ) ? get_term_link( $cat, $portfolios[$project_post_types]['tax'] ) : '#';

        ?><li class="segment-<?php echo $cat->term_id ?>"><a href="<?php echo $url ?>" data-value="<?php echo $cat->slug ?>"><?php echo $cat->name ?></a></li><?php

      else :

        ?><li><?php echo $cat->name ?></li><?php

      endif;

    }



    echo '</ul>';

    echo $after_widget;

  }



  function update( $new_instance, $old_instance )

  {

    $instance = $old_instance;



    $instance['title'] = strip_tags( $new_instance['title'] );

    $instance['project_post_type'] = $new_instance['project_post_type'];



    return $instance;

  }




}
