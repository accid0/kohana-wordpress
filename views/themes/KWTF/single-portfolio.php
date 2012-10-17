<?php       
/**
 * @package WordPress
 * @since 1.0
 */                           


get_header() ?>           

        <div id="primary" class="layout-<?php echo $portfolio_layout_page ?>">
		    <div class="inner group">

                <?php if( get_post_meta( get_the_ID(), '_slogan_page', true ) ): ?>
                <div id="slogan">
                    <h2><?php echo get_post_meta( get_the_ID(), '_slogan_page', true ); ?></h2>
                    <h3><?php echo get_post_meta( get_the_ID(), '_subslogan_page', true ); ?></h3>
                </div>
                <?php endif ?>
    
                <!-- START CONTENT -->
                <div id="content" class="group"><?php
                    global $wp_query;
                    $tmp_query = $wp_query;



                    if ( !is_singular( $post_type ) )
                        query_posts( 'post_type=' . $post_type . '&posts_per_page=1' );
    
                    get_template_part( 'loop', 'portfolio' );    
    
                    $wp_query = $tmp_query;       
                    wp_reset_postdata();
                ?>  
                </div>
                <!-- END CONTENT -->
    
                <?php get_sidebar('portfolio'); ?>
            </div>    
        </div>

<?php get_footer() ?>