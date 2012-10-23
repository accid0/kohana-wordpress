<?php
/*
Template Name: Gallery
*/
echo $header;
?>  

        <div id="primary" class="layout-<?php echo $layout_page ?>">
            <div class="inner group">

                <?php echo $slogan;?>
                <?php if ( is_tax() ) : ?>
                <div id="slogan">
                    <h2><?php echo ucfirst( $term); ?><?php _e( ' category', $tpl_tdomain ) ?></h2>
                </div>
                <?php endif; ?>    
                
                <!-- FILTERS -->
                <div class="gallery-filters">
                    <?php if ( $_active_title == 'yes' || !$_active_title ) the_title( '<h1>', '</h1>' ) ?>
                    <?php if ( $gallery_show_filters ) : ?>
                    <ul class="filters gallery-categories">
                        <li class="segment-1 first"><a data-value="all" href="#"><?php _e('All', $tpl_tdomain) ?></a></li><?php
                        foreach( $cats as $cat )
                        {
                            if( $cat->count > 0 ) :
                                ?><li class="segment-<?php echo $cat->term_id ?>"><a href="#" data-value="<?php echo strtolower(preg_replace('/\s+/', '-', urldecode($cat->slug))) ?>"><?php echo $cat->name ?></a></li><?php
                            else :
                                ?><li><?php echo $cat->name ?></li><?php
                            endif;
                        }
                    ?></ul>
                    <?php endif ?>
                </div>
                <!-- END FILTERS -->
    
                <!-- START CONTENT -->
                <div id="content" class="group">

                    <?php $core->breadcrumb(); ?>

                    <div id="portfolio-gallery" class="internal_page_items internal_page_gallery">
                        <ul class="gallery-wrap image-grid group">
                        <?php
                        $i = 0;
                        while( $gallery->have_posts() ) : $gallery->the_post(); ?>
                        
                            <?php 
                                $classes = "";
                                $terms = get_the_terms( get_the_ID(), sanitize_title( 'category-photo' ) );                         
                                
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
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'thumb_gallery', array( 'class' => 'picture' ) ) ?></a>
                                    <div class="overlay">                            
                                        <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                                        <p><?php echo $core->excerpt( 12, '', false ) ?></p>
                                        <div class="controls">
                                            <a class="icon-zoom" href="<?php echo $image[0] ?>" rel="prettyPhoto" title="<?php the_title() ?>"><?php _e( 'Zoom', $tpl_tdomain ) ?></a>
                                            <?php if ( $gallery_details_icon ) : ?>
                        					<a class="icon-more" href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php _e( 'View More', $tpl_tdomain ) ?></a>
                        					<?php endif ?>
                    					</div>
                                    </div>
                                </div>
                                
                            </li>
                        <?php 
                            endwhile; 
                            wp_reset_query(); 
                        ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                </div>
                <!-- END CONTENT -->
    
                <?php echo $sidebar; ?>

                <!-- START EXTRA CONTENT -->
                <?php echo $extra_content; ?>
                <!-- END EXTRA CONTENT -->    
            </div>
        </div>

<?php
echo $footer;