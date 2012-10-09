            <?php 
                wp_reset_query(); 
            ?>                  
			
            <?php if( $layout_page != 'sidebar-no' ) : ?>
		
				<div id="sidebar" class="shop group">
					<?php do_action( 'kwtf_before_sidebar' ) ?>
					<?php do_action( 'kwtf_before_sidebar_' . $current_pagename ) ?>
					
	                <?php 
	                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( 'Shop Sidebar' ) )
	                        get_sidebar( 'default' ) 
	                ?>
			
					<?php do_action( 'kwtf_after_sidebar' ) ?>
					<?php do_action( 'kwtf_after_sidebar_' . $current_pagename ) ?>
				</div>
				
            <?php endif ?>