
        <!-- START SLIDER -->
        <div id="slider" class="slider_elegant group inner">
            <ul class="group">
                <?php while( $core->have_slide() ) : ?>
                    <li class="group">
                        <div class="slider-featured group">
                        <?php $core->slide_the( 'featured-content', array(
                                 'container' => false,
                                 'video_width' => 439,
                                 'video_height' => 245
                              ) )
                        ?> 
                        </div>
                        
                        <?php if( $core->slide_get( 'content' ) ): ?>
                        <div class="slider-caption caption-<?php echo $slider_elegant_caption_position ?>">
                                <h2><?php $core->slide_the( 'slide_title' ) ?></h2>
                                <h4><?php $core->slide_the( 'subtitle' ) ?></h4>
                                <?php $core->slide_the( 'content' ) ?>
                        </div>
                        <?php endif ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div> 
        <!-- END SLIDER --> 