
                    <div id="post-<?php the_ID(); ?>" <?php post_class('hentry-post group blog-' . $blog_type . ( ( ! $has_thumbnail ) ? ' without-thumbnail' : '' ) ); ?>>
                              
                        <div class="thumbnail">
                            <?php if ( $has_thumbnail ) the_post_thumbnail( 'blog_small' ); ?>
                            <?php if( $blog_show_date ) : ?>
                            <p class="date">
                                <span class="month"><?php echo get_the_time('M') ?></span>
                                <span class="day"><?php echo get_the_time('d') ?></span>
                            </p>
                            <?php endif; ?>
                        </div>      
                            
                        <?php 
                            $link = get_permalink();
                            if ( is_single() )  the_title( "<h1 class=\"post-title\"><a href=\"$link\">", "</a></h1>" ); 
                            else                the_title( "<h2 class=\"post-title\"><a href=\"$link\">", "</a></h2>" ); 
                        ?>
                        
                        <div class="meta-bottom">
                        <?php if( $blog_show_author OR $blog_show_categories  OR $blog_show_comments OR $blog_show_socials ) : ?>
                            <div class="meta group">
                                <?php if( $blog_show_author ) : ?><p class="author"><span><?php _e( 'by', $tpl_tdomain ) ?> <?php the_author_posts_link() ?></span></p><?php endif; ?>
                                <?php if( $blog_show_categories ) : ?><p class="categories"><span>In: <?php the_category( ', ' ) ?></span></p><?php endif; ?>
                                <?php if( $blog_show_comments ) : ?><p class="comments"><span><?php comments_popup_link(__('No comments', $tpl_tdomain), __('1 comment', $tpl_tdomain), __('% comments', $tpl_tdomain)); ?></span></p><?php endif; ?>
                                <?php if( $blog_show_socials ) : ?>
                                <p class="socials">
                                    <span><?php _e( 'Share on', $tpl_tdomain ); ?></span>
                                    <span>
                                        <a title="<?php _e( 'Like', $tpl_tdomain ); ?>" class="socials facebook-small" href="https://www.facebook.com/plugins/like.php?href=<?php echo the_permalink(); ?>&font=lucida%20grande&layout=button_count&node_type=link&sdk=joey&send=false&show_faces=true">Facebook</a>
                                        <a title="<?php _e( 'Tweet', $tpl_tdomain); ?>" class="socials twitter-small" href="https://twitter.com/intent/tweet?source=tweetbutton&text=<?php echo urlencode( the_title() ); ?>&url=<?php echo urlencode( the_permalink() ); ?>">Twitter</a>
                                    </span>
                                </p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <?php if ( is_single() ) : ?>
                        <div class="the-content"><?php the_content( str_replace( '->', '&rarr;', $blog_read_more_text ) ) ?></div>
                        <?php wp_link_pages(); ?>
                        <?php endif; ?>
                        
						<?php edit_post_link( __( 'Edit', $tpl_tdomain ), '<p class="edit-link">', '</p>' ); ?>
					
						<?php if( is_single() ) the_tags( '<p class="list-tags">Tags: ', ', ', '</p>' ) ?>    
                    
                    </div>         