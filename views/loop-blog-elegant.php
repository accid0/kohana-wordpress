
                    <div id="post-<?php the_ID(); ?>" <?php post_class('hentry-post group blog-' . $blog_type ); ?>>
                        
                        <div class="the_post group">     
                            <?php
                            //if is_single(), elegant style requires the title outside .blog-elegant-left
                            $link = get_permalink();
                            if ( is_single() AND get_post_type() != 'bl_testimonials' )  the_title( "<h1 class=\"post-title\"><a href=\"$link\">", "</a></h1>" ); 
                            ?>
                            <div class="blog-elegant-left">
                                <?php  
                                // title       
                                if( !is_single() OR get_post_type() == 'bl_testimonials' ) the_title( "<h2 class=\"post-title\"><a href=\"$link\">", "</a></h2>" );
                                ?>
                        
                                <div class="meta group">
                                    <?php if( $blog_show_date ) : ?><p class="date"><?php echo the_time( str_replace( 'F', 'M', get_option('date_format') ) ); ?></p><?php endif; ?>
                                    <?php if( $blog_show_author ) : ?><p class="author"><span><?php _e( 'by', $tpl_tdomain ) ?> <?php the_author_posts_link() ?></span></p><?php endif; ?>
                                    <?php if( $blog_show_categories ) : ?><p class="categories"><span>In: <?php the_category( ', ' ) ?></span></p><?php endif; ?>
                                </div>
                                
                                <?php if( $blog_show_comments ) : ?><p class="comments"><span><?php comments_popup_link(__('No comments', $tpl_tdomain), __('1 comment', $tpl_tdomain), __('% comments', $tpl_tdomain)); ?></span></p><?php endif; ?>
                                <?php if( $blog_show_socials ) : ?>
                                <div class="blog-elegant-socials">
                                    <p><?php _e( 'Share on', $tpl_tdomain ); ?></p>
                                    <a title="<?php _e( 'Like', $tpl_tdomain ); ?>" class="socials facebook-small" href="https://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>&font=lucida%20grande&layout=button_count&node_type=link&sdk=joey&send=false&show_faces=true">Facebook</a>
                                    <a title="<?php _e( 'Tweet', $tpl_tdomain ); ?>" class="socials twitter-small" href="https://twitter.com/intent/tweet?source=tweetbutton&text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>">Twitter</a>
                                </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="blog-elegant-right">
                            <?php                            
                            // thumbnail
                            if ( $has_thumbnail ) the_post_thumbnail( 'blog_elegant' );
                            
                            // content
                            if( !is_single() OR get_post_type() == 'bl_testimonials' ) {
                                if ( is_category() || is_archive() || is_search() || is_home() )
                                    the_excerpt();
                                else
                                    the_content( str_replace( '->', '&rarr;', $blog_read_more_text ) );

                            }
                            ?>
                            </div>                            
                       </div>
                       
                        <?php
                        if( is_single() AND get_post_type() != 'bl_testimonials' ) {
                            echo '<div class="the_content">', the_content(), '</div>';
                        }
                        
                        wp_link_pages();
                        
                        edit_post_link( __( 'Edit', $tpl_tdomain ), '<p class="edit-link">', '</p>' );
                        ?>
                    </div>         