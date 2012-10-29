<?php

wp_enqueue_style( 'Oswald', 'http://fonts.googleapis.com/css?family=Oswald&v2' ); 

echo $header; ?>

        <div id="primary" class="layout-<?php echo $layout_page ?>">
		    <div class="inner group">
                <?php echo $slogan; ?>
                
                <!-- START CONTENT -->
                <div id="content" class="group">
                  <?php $core->breadcrumb(); ?>

                  <?php echo $content_loop; ?>
                </div>                       
                <!-- END CONTENT -->
                
                <!-- START SIDEBAR -->
                <?php echo $sidebar; ?>
                <!-- END SIDEBAR -->
            
            </div>      
        </div>
        
<?php
echo $footer;
