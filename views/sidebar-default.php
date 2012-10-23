		<?php if ( !function_exists('dynamic_sidebar') || ! dynamic_sidebar( 'Default Sidebar' ) ) { ?>
            
            <div class="widget">            
                <h3><?php _e( 'Search', $tpl_tdomain ) ?></h3>
                <?php get_search_form() ?>
            </div>
            
            <div class="widget">
                <h3><?php _e( 'Archives', $tpl_tdomain ) ?></h3>
                <ul>
                    <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
                </ul>
            </div>
            
            <div class="widget">
                <h3><?php _e( 'Categories', $tpl_tdomain ) ?></h3>
                <ul>
                    <?php 
            			$cat_params = Array(
            					'hide_empty'	=>	FALSE,
            					'title_li'		=>	''
            				);
            			if( count( $blog_cats_exclude_sidebar ) > 0 ){
            				$cat_params['exclude'] = implode(',', $blog_cats_exclude_sidebar );
            			}
            			wp_list_categories( $cat_params ); 
                    ?>
                </ul>
            </div>
            
            <div class="widget">
                <h3><?php _e( 'Blogroll', $tpl_tdomain ) ?></h3>
                <ul>
                    <?php wp_list_bookmarks( 'title_li=&categorize=0' ) ?>
                </ul>
            </div>
        <?php
        }
        else wp_reset_postdata();?>