        <!-- SIDEBAR -->
				<div id="sidebar" class="group one-fourth<?php if ( $layout_page == 'sidebar-right' ) echo ' last' ?>">
					<?php do_action( 'kwtf_before_sidebar' ) ?>
					<?php do_action( 'kwtf_before_sidebar_' . $current_pagename ) ?>
					
	                <?php echo $sidebar;?>
			
					<?php do_action( 'kwtf_after_sidebar' ) ?>
					<?php do_action( 'kwtf_after_sidebar_' . $current_pagename ) ?>
				</div>
        <!-- /SIDEBAR -->