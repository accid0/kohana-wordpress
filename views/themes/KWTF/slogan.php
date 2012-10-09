            <?php 
            global $wp_query;
            $post_id = ( $wp_query->is_posts_page ) ? get_option('page_for_posts') : get_the_ID();
            if( get_post_meta( $post_id, '_slogan_page', true ) ): ?>
            <div id="slogan">
                <h2><?php echo get_post_meta( $post_id, '_slogan_page', true ); ?></h2>
                <h3><?php echo get_post_meta( $post_id, '_subslogan_page', true ); ?></h3>
            </div>
            <?php endif ?>