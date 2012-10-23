
                    <div id="post-<?php the_ID(); ?>" <?php post_class('hentry-post group blog-' . $blog_type ); ?>>
                              
                        <div class="<?php if ( ! $has_thumbnail ) echo 'without ' ?>thumbnail">
                            <div class="image-wrap">
                                <?php if ( $has_thumbnail ) the_post_thumbnail( 'blog_big' ); ?>          
                                
                                <?php if ( get_post_type() == 'post' AND $blog_show_date ) : ?>
                                <p class="date">
                                    <span class="month"><?php echo get_the_time('M') ?></span>
                                    <span class="day"><?php echo get_the_time('d') ?></span>
                                </p>
                                <?php endif ?>
                            </div>
                            
                            <?php 
                                $link = get_permalink();
                                if ( is_single() )  the_title( "<h1 class=\"post-title\"><a href=\"$link\">", "</a></h1>" ); 
                                else                the_title( "<h2 class=\"post-title\"><a href=\"$link\">", "</a></h2>" ); 
                            ?>
                        </div>
                        
                        <?php if ( get_post_type() == 'post' ) : ?>
                        <div class="meta group">
                            <?php if( $blog_show_author ) : ?><p class="author"><span><?php _e( 'by', $tpl_tdomain ) ?> <?php the_author_posts_link() ?></span></p><?php endif; ?>
                            <?php if( $blog_show_categories ) : ?><p class="categories"><span>In: <?php the_category( ', ' ) ?></span></p><?php endif; ?>
                            <?php if( $blog_show_comments ) : ?><p class="comments"><span><?php comments_popup_link(__('No comments', $tpl_tdomain), __('1 comment', $tpl_tdomain), __('% comments', $tpl_tdomain)); ?></span></p><?php endif; ?>
                        </div>   
                        <?php endif ?>
                        
                        <div class="the-content"><?php
                            if ( is_category() || is_archive() || is_search() || is_home() )
                                the_excerpt();
                            else
                                the_content( str_replace( '->', '&rarr;', $blog_read_more_text ) );
                        ?></div>
                        
                        <?php wp_link_pages(); ?>
                        
						<?php edit_post_link( __( 'Edit', $tpl_tdomain ), '<span class="edit-link">', '</span>' ); ?>
					
						<?php if( is_single() ) the_tags( '<p class="list-tags">Tags: ', ', ', '</p>' ) ?>    
                    
                    </div>         