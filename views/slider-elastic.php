<?php 

if ( $core->is_empty() )
    return;

$thumbs = '';
?>
 
 		<!-- BEGIN #slider -->
        <div id="slider" class="ei-slider elastic<?php if ( $slider_responsive != 'leave' ) : ?> not-for-mobile<?php endif; ?>">
            <div class="ei-slider-loading">Loading</div>
            <ul class="ei-slider-large">
            
                <?php while( $core->have_slide() ) :
                    global $_wp_additional_image_sizes;
				    $w = $_wp_additional_image_sizes['thumb-slider-elastic']['width'];
				    $h = $_wp_additional_image_sizes['thumb-slider-elastic']['height'];
                        
			        $thumbnail = explode( '.', basename( $core->slide_get('image_url') ) );
			        $thumbnail = str_replace( basename( $core->slide_get('image_url') ), $thumbnail[0] . "-{$w}x{$h}." . $thumbnail[1], $core->slide_get('image_url') );
                    
                    $thumbs .= "<li><a href=\"#\">".$core->slide_get( 'slide_title' )." - ".strip_tags($core->slide_get( 'clean-content' ))."</a><img src=\"$thumbnail\" alt=\"".$core->slide_get( 'slide_title' )." - ".strip_tags($core->slide_get( 'clean-content' ))."\" /></li>\n"; ?>
                    
                <li<?php $core->slide_class( 'slide align-' . $core->slide_get( 'layout_slide' ) ) ?>>
                    <?php $core->slide_the( 'featured-content', array(
                         'container' => false
                      ) ) ?> 
                    <div class="ei-title">
                        <?php $core->string_( '<h2>', $core->slide_get( 'slide_title' ), '</h2>' ) ?>
                        <?php $core->string_( '<h3>', $core->slide_get( 'clean-content' ), '</h3>' ) ?>
                    </div>
                </li>
                <?php endwhile; ?> 
            </ul><!-- ei-slider-large -->
            <ul class="ei-slider-thumbs">
                <li class="ei-slider-element">Current</li>
                <?php echo $thumbs ?>
            </ul><!-- ei-slider-thumbs -->    
            
            <div class="shadow"></div>
        </div><!-- ei-slider -->    
 		<!-- END #slider -->