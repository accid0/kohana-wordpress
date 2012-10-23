<?php
if ( $core->is_empty() )
    return;
?>
 
<!-- START SLIDER -->
<div id="slider" class="thumbnails group inner">
    <div class="showcase group">  
    <?php while( $core->have_slide() ) :

                            $thumbnail = explode( '.', basename( $core->slide_get('image_url') ) );
                            $thumbnail = str_replace( basename( $core->slide_get('image_url') ), $thumbnail[0] . '-150x150.' . $thumbnail[1], $core->slide_get('image_url') );
            ?>

            <div class="showcase-slide">
                <div class="showcase-content">
                        <!-- If the slide contains multiple elements you should wrap them in a div with the class
                        .showcase-content-wrapper. We usually wrap even if there is only one element,
                        because it looks better. -->
                        <div class="showcase-content-wrapper">
                            <?php $core->slide_the( 'featured-content', array( 'container' => false ) ) ?>
                        </div>
                    </div>
                    <!-- Put the caption content in a div with the class .showcase-caption -->
                    <?php $core->string_( '<div class="showcase-caption"><p class="">', $core->slide_get( 'clean-content' ), '</p></div>' ) ?>

                    <div class="showcase-thumbnail">
                        <img src="<?php echo $thumbnail ?>" />
                    </div>

                    <!-- Put the tooltips in a div with the class .showcase-tooltips. -->
                    <?php if ( $core->slide_get('extra_tooltip_x_pos') != '' && $core->slide_get('extra_tooltip_y_pos') != '' && $core->slide_get('extra_tooltip_content') != '' ) ?>
            <div class="showcase-tooltips">
                <!-- Each anchor in .showcase-tooltips represents a tooltip.
                The coords attribute represents the position of the tooltip. -->
                <a href="<?php $core->slide_the('extra_tooltip_url') ?>" coords="<?php $core->slide_the('extra_tooltip_x_pos') ?>,<?php $core->slide_the('extra_tooltip_y_pos') ?>">
                    <?php if ( $core->slide_get('extra_tooltip_image') != '' ) : ?>
                    <img src="<?php $core->slide_the('extra_tooltip_image') ?>" />
                    <?php endif; ?>
                    <!-- The content of the anchor-tag is displayed in the tooltip. -->
                    <?php $core->slide_the('extra_tooltip_content') ?>
                </a>
            </div>
        </div>

    <?php endwhile; ?>
    </div>
</div> 
<!-- END SLIDER --> 