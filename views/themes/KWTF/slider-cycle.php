<?php 
/**
 * @package WordPress
 * @subpackage Sheeva
 * @since 1.0
 */
?>

        <div id="slider" class="cycle group inner">
                
                <div class="images">
                    <?php while( $core->have_slide() ) : ?>
                    <!-- START PANEL -->
                    <div<?php $core->slide_class( 'panel' ) ?>>
                        <?php $core->slide_the( 'featured-content', array(
                                 'container' => false,
                                 'video_width' => 439,
                                 'video_height' => 245
                              ) ) ?>                        
                        <div class="hentry">
                            <h2><?php $core->slide_the( 'title' ) ?></h2>
                                                                                       
                            <?php $core->slide_the( 'content' ) ?>
                        </div>
                    </div>
                    <!-- END PANEL -->
                    <?php endwhile; ?>
                </div> 

                <!-- START PAGINATION -->
                <div class="controls">
                    <a href="#" title="Pause" id="slider-pause"><img src="<?php echo $uri_theme . '/images/icons/slider-pause.png' ?>" alt="Pause" /></a>
                    <a href="#" title="Play" id="slider-play"><img src="<?php echo $uri_theme . '/images/icons/slider-play.png' ?>" alt="Play" /></a>
                </div>
                <div class="pagination"></div>
                <!-- END PAGINATION -->  
        </div> 