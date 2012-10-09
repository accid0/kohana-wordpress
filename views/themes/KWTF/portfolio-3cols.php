            <ul id="portfolio">         
                <?php
                    $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => $portfolio[$post_type]['items'],
                        'paged' => $paged
                    );                                  
                    
                    if ( is_tax() )   
                       $args = wp_parse_args( $args, $wp_query->query );

                    $_portfolio = new WP_Query( $args );
                    $i = 1;

                    while( $_portfolio->have_posts() ) : $_portfolio->the_post();
                        global $more;
                        $more = 0;

                        if($i % 3 == 0) {
                            $classes = 'last group';
                        } elseif($i % 3 == 1) {
                            $classes = 'first';
                        } else {
                            $classes = '';
                        }
                        
                        
                        $classes .= " one-third";
                ?>     

                <li <?php post_class( $classes ) ?>>
                    <?php   
                        if( $thumb = get_post_meta(get_the_ID(), '_portfolio_video', true) ) {
                            $class = 'video';
                        } else {
                            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
                            $thumb = $thumb[0];
                            $class = 'img';
                        }

                    ?>

                    <?php if( has_post_thumbnail() ) : ?>
                        <?php if ( $click_event == 'lightbox' ) : ?>
                        <a class="thumb <?php echo $class ?>" href="<?php echo $thumb ?>" rel="prettyPhoto[movies]"><?php the_post_thumbnail('thumb_portfolio_3cols') ?></a>
                        <?php elseif ( $click_event == 'item-page' ) : ?>
                        <a class="thumb" href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb_portfolio_3cols') ?></a>
                        <?php elseif ( $click_event == 'nothing' ) : ?>
                        <a class="thumb"><?php the_post_thumbnail('thumb_portfolio_3cols') ?></a>
                        <?php endif ?>
                    <?php endif ?>  

                    <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
                    <?php echo $content ?>
                </li>       
                <?php $i++; endwhile ?>        
            </ul>                             

            <?php if( $pagination = $core->pagination( $_portfolio->max_num_pages, 10, FALSE )) : echo $pagination; else : ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link(__('Next &raquo;', $tpl_tdomain)) ?></div>
                    <div class="alignright"><?php previous_posts_link(__('&laquo; Back', $tpl_tdomain)) ?></div>
                </div>
            <?php endif; ?>
