<?php
//if ( !yiw_can_show_slider() )
//    return;
global $post, $wp_query;

$responsive = array( 'unoslider', 'elastic' );
                                    
if ( $wp_query->is_posts_page )
    return;

if( isset($post->ID) && $_slider = get_post_meta( get_the_ID(), 'slider_type', true ) ) {
                                                                         
    if( is_string($_slider) && $_slider != 'none' && !empty($_slider) )
        get_template_part( 'slider', $_slider );
                                                                 

} elseif( is_home() || is_front_page() || is_page_template('home.php') ) {

  if( is_string($slider) && $slider != 'none' && !empty($slider)){
    get_template_part( 'slider', $slider );
  }
} else return;
    if ( ! in_array( $slider, $responsive ) && $slider_responsive == 'fixed-image' && $slider != 'fixed-image' ) : ?>
        <div class="slider-mobile">
           <?php get_template_part( 'slider', 'fixed-image' ); ?>    
        </div>   
    <?php endif; 
?>