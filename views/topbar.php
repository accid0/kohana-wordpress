
    <div id="top">
			<div class="inner">
                <div class="topbar-left">
                <?php if( $topbar_content == 'static' ) : ?>
                    <p><?php echo do_shortcode( stripslashes( $topbar_text ) ) ?></p>
                <?php endif; ?>
                
                <?php if( $topbar_content == 'twitter' ) : ?>
                <!-- START TWITTER -->
		        <div id="twitter-slider" class="group">
			        <div class="tweets-list"></div>                    
                    <script type="text/javascript">
                        jQuery(function($){

                            var twitterSlider = function(){      
                                $('.tweets-list ul').addClass('slides');
                                $('.tweets-list').flexslider({
                                    animation: "fade",
                                    slideshowSpeed: <?php echo $topbar_twitter_interval; ?> * 1000,
                                    animationDuration: 700,
                                    directionNav: false,             
                                    controlNav: false,
                                    keyboardNav: false
                                });
                            };
                            
                            
                            $('#twitter-slider .tweets-list').tweetable({
                                username: '<?php echo $topbar_twitter_username ?>',
                                items: <?php echo $topbar_twitter_items ?>,
                                time: false,
                                loaded: twitterSlider
                            });
                            
                            $( document ).ready( function() {
                                var rightWidth = $( '.topbar-right' ).width() + $( '#cart' ).width();
                                
                                $( '#twitter-slider' ).css( 'max-width', ( 940 - 40 - rightWidth ) + 'px' );  
                            });  
                        });
                    </script>	
							    
				</div>       
		        <!-- END TWITTER -->
                <?php endif; ?>
                </div>
                <div class="topbar-right"<?php if ( ! $show_ribbon ) : ?> style="right:0;"<?php endif ?>>
                    <ul class="topbar-level-1">
                        <?php
                        $nav_args = array(
                            'theme_location' => 'topbar',  
						                'items_wrap' => '%3$s',
                            'container' => 'none',
                            'menu_class' => 'topbar-level-1',
                            'depth' => 2,
                            'fallback_cb' => ''
                        );
                        
                        wp_nav_menu( $nav_args );
                        ?>
                        <?php
                        if( !$topbar_login ) :
                            if( is_user_logged_in() ) :
                        ?>
                        <li><a href="<?php echo wp_logout_url( home_url() ); ?>"><?php _e( 'Logout', $tpl_tdomain ); ?></a></li>
                        <?php
                            else :
                                if ( $is_woocommerce ) {
                                    $my_account_url = get_permalink( get_option('woocommerce_myaccount_page_id') );
                                    $label = array();
                                    if ( !$topbar_login )
                                        $label[] = __( 'Login', $tpl_tdomain );
                                    if ( !$topbar_register && get_option('woocommerce_enable_myaccount_registration')=='yes' )
                                        $label[] = __( 'Register', $tpl_tdomain );
                                    
                                    if ( empty( $label ) )
                                        $label = '';
                                    else
                                        $label = implode( '/', $label );
                                } else {
                                    $my_account_url = get_permalink( get_option('jigoshop_myaccount_page_id') );
                                    $label = __( 'Login', $tpl_tdomain );
                                }
                                
                        ?>
                       <li><a href="<?php echo $my_account_url; ?>"><?php echo $label; ?></a></li>
                        <?php
                            endif;
                        endif;
                        
                        if( !$is_woocommerce AND !$topbar_login AND !$topbar_register ) {
                            echo ' | ';
                        }
                        
                        if( !$is_woocommerce && !$topbar_register ) :
                            echo '<li>';
                            wp_register( '', '' );             
                            echo '</li>';
                        endif;
                        ?>
                    </ul>
                
                </div>
				<?php if ( $show_ribbon ) : ?>
                <div id="cart">
					<?php echo $minicart ?>
				</div><!-- #cart -->
				<?php endif ?>
			</div><!-- .inner -->
		</div><!-- #top -->