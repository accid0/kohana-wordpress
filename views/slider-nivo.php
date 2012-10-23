
        <!-- BEGIN NIVO SLIDER -->
        <div id="slider" class="nivo group inner mobile">
            <div class="slider-images">
            <?php
            while( $core->have_slide() ) :
              $core->slide_the( 'featured-content', array(
                    'container' => false
                ));
            endwhile; ?>
            </div>
            <div class="slider-nivo-static">
                <h3>
                <?php
                $static_title = $core->slide_get( 'static_title' );
                $static_title = str_replace(
                    array( '[', ']'),
                    array( '<span>', '</span>' ),
                    $static_title
                );
                
                echo $static_title;
                ?>
                </h3>
                <p><?php $core->slide_the( 'text' ); ?></p>
                <?php
                $short_text = $core->slide_get( 'static_short_text' );
                $short_text = str_replace( array( '[', ']' ), array( '<strong>', '</strong>' ), $short_text );
                
                
                if( !empty( $short_text ) ) {
                    echo '<p class="short-text">', $short_text, '</p>';
                }
                ?>
            </div>
        </div>
        <!-- END NIVO SLIDER -->