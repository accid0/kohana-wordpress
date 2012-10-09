            <?php wp_reset_query() ?>                  
			
            <?php if( $layout_page != 'sidebar-no' ) : ?>
		
				<div id="sidebar" class="group one-fourth<?php if ( $layout_page == 'sidebar-right' ) echo ' last' ?>">
					<?php do_action( 'kwtf_before_sidebar' ) ?>
					<?php do_action( 'kwtf_before_sidebar_' . $current_pagename ) ?>
					
	                <?php 
	                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( get_post_meta( get_the_ID(), '_sidebar_choose_page', true ) ) )
	                        get_sidebar( 'default' ) 
	                ?>
			
					<?php do_action( 'kwtf_after_sidebar' ) ?>
					<?php do_action( 'kwtf_after_sidebar_' . $current_pagename ) ?>
				</div>
				
            <?php endif ?>