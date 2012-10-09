       				<div class="clear"></div>
                    
                    <?php      
						global $wp_query, $post, $more;
						
						$tmp_query = $wp_query;
						
                if (have_posts()) : 
                    
                    $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                    <?php /* If this is a category archive */ if (is_category()) { ?>
                  <h3 class="red-normal"><?php printf(__('Archive for the &#8216;%s&#8217; Category', $tpl_tdomain), single_cat_title('', false)); ?></h3>
                    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                  <h3 class="red-normal"><?php printf(__('Posts Tagged &#8216;%s&#8217;', $tpl_tdomain), single_tag_title('', false) ); ?></h3>
                    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                  <h3 class="red-normal"><?php printf(__('Archive for %s | Daily archive page', $tpl_tdomain), get_the_time(__('F jS, Y', $tpl_tdomain ))); ?></h3>
                    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                  <h3 class="red-normal"><?php printf(__('Archive for %s | Monthly archive page', $tpl_tdomain), get_the_time(__('F Y', $tpl_tdomain))); ?></h3>
                    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                  <h3 class="red-normal"><?php printf(__('Archive for %s | Yearly archive page', $tpl_tdomain), get_the_time(__('Y', $tpl_tdomain))); ?></h3>
                    <?php /* If this is a yearly archive */ } elseif (is_search()) { ?>
                  <h3 class="red-normal"><?php printf( __( 'Search Results for: %s', $tpl_tdomain ), '<span>' . get_search_query() . '</span>' ); ?></h3>
                   <?php /* If this is an author archive */ } elseif (is_author()) { ?>               
                  <h3 class="red-normal"><?php _e('Author Archive', $tpl_tdomain); ?></h3>
                    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                  <h3 class="red-normal"><?php _e('Blog Archives', $tpl_tdomain); ?></h3>
                    <?php }   
                                                       
                        while (have_posts()) : the_post(); 
                        
                            if ( !is_single() ) 
                                $more = 0;
                            
                            
                            $title = is_null( the_title( '', '', false ) ) ? __( '(this post has no title)', $tpl_tdomain ) : the_title( '', '', false );
                            
                            if ( ( get_post_type() == 'post' && ( is_single() || is_search() ) ) && get_post_type() != 'bl_testimonials' ) {
                            
                                if( $blog_type == 'small' )
                                    $core->set_var( WordpressTheme::OPT_BLOG_TYPE, 'big');
                                    $blog_type = 'big';
                            } 
                            
                            if( get_post_type() == 'bl_testimonials'){
                              $core->set_var( WordpressTheme::OPT_BLOG_TYPE, 'big');
                              $blog_type = 'big';
                            }
                            
                            get_template_part( 'loop', 'blog-' . $blog_type );
                        
                        
                        endwhile;
						
                else : ?>
						
							<div id="post-0" class="post error404 not-found group">
								<h1 class="entry-title"><?php _e( 'Not Found', $tpl_tdomain ); ?></h1>
								<div class="entry-content">
									<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', $tpl_tdomain ); ?></p>
									<?php get_search_form(); ?>
								</div><!-- .entry-content -->
							</div><!-- #post-0 -->
						
						<?php
						endif;
						 
						$wp_query = $tmp_query;
						wp_reset_postdata();
					?>    
                
                    <?php 
                    if( $pagination) : echo $pagination; else : ?>
            
                        <div class="navigation group">
                            <div class="alignleft"><?php next_posts_link(__('Next &raquo;', $tpl_tdomain)) ?></div>
                            <div class="alignright"><?php previous_posts_link(__('&laquo; Back', $tpl_tdomain)) ?></div>
                        </div>
                    
                    <?php endif; ?>       
        
                    <?php comments_template(); ?>