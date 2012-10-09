<?php 
/**
 * @package WordPress
 * @subpackage Impero
 * @since 1.0
*/
?>

    <!-- START SLIDER -->
    <!--<div class="slider-wrapper theme-default">
        <div class="ribbon"></div>--> 
        <div id="slider" class="inner mobile">
            <ul class="unoslider">
                <?php while( $core->have_slide() ) : ?>
                    <li><?php if ( $core->slide_get('slide_title') != '' ) : ?><div class='unoslider_caption'><?php $core->slide_the('slide_title') ?></div><?php endif;
                      $core->slide_the( 'featured-content', array( 'container' => false ) ); ?></li>
                <?php endwhile; ?>
            </ul>                    
        </div>
    <!--</div>-->