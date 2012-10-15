<?php
//if ( !yiw_can_show_slider() )
//    return;
global $post, $wp_query;

$responsive = array( 'unoslider', 'elastic' );
                                    
if ( $wp_query->is_posts_page )
    return;

if( is_string($slider) && $slider != 'none' && !empty($slider)){
    get_template_part( 'slider', $slider );
  }
else return;
    if ( ! in_array( $slider, $responsive ) && $slider_responsive == 'fixed-image' && $slider != 'fixed-image' ) : ?>
        <div class="slider-mobile">
           <?php get_template_part( 'slider', 'fixed-image' ); ?>    
        </div>   
    <?php endif; 
?>