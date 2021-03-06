<div id="portfolio-gallery" class="internal_page_items internal_page_gallery" xmlns="http://www.w3.org/1999/html">
    <ul class="gallery-wrap image-grid group">
    <?php
    $i = 0;
    
    while( $gallery->have_posts() ) : $gallery->the_post(); ?>
    
        <?php 
            $classes = "";
            $terms = get_the_terms( get_the_ID(), $portfolio[$post_type]['tax'] );
            
            if(!empty($terms)) {
                foreach( $terms as $index=>$term) {
                    $classes .= " segment-".$index;
                }
            }

        ?>
    
        <?php $isFirstInRow = ( ++$i==1 | ($i % $postsPerRow) == 1 ) ? 1 : 0; ?>
        <?php $isLastInRow = ( ($i % $postsPerRow) == 0 ) ? 1 : 0; ?>

        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); ?>
        <li data-id="id-<?php echo $i; ?>" class="<?php if(!empty($terms)) foreach ($terms as $term) { echo strtolower(preg_replace('/\s+/', '-', urldecode($term->slug))) . ' '; }  ?>">
        
            <div class="internal_page_item internal_page_item_gallery">
                <?php the_post_thumbnail( 'thumb_gallery', array( 'class' => 'picture' ) ) ?>
                <div class="overlay">                            
                    <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                    <p><?php echo $core->excerpt( 12, '', false ) ?></p>
                    <div class="controls">
                        <a class="icon-zoom" href="<?php echo $image[0] ?>" rel="prettyPhoto" title="<?php the_title() ?>"><?php _e('Zoom', $tpl_tdomain)?></a>
                        <?php if ( $portfolio_details_icon ) : ?>
    					<a class="icon-more" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php _e( 'View More', $tpl_tdomain ) ?></a>
    					<?php endif ?>
    				</div>
                </div>
            </div>
            
        </li>
    <?php  endwhile;  ?>
    <?php  wp_reset_query(); ?>
    </ul>
    <div class="clear"></div>
</div>

