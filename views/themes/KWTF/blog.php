<?php       
/**
 * @package WordPress
 * @since 1.0
 */
 
/*
Template Name: Blog
*/                     

wp_enqueue_style( 'Oswald', 'http://fonts.googleapis.com/css?family=Oswald&v2' ); 


get_header() ?>           
        


        <div id="primary" class="layout-<?php echo $layout_page ?>">
		    <div class="inner group">
                <?php get_template_part('slogan') ?>
                
                <?php query_posts('cat=' . $exclude_categories . '&posts_per_page=' . get_option('posts_per_page') . '&paged=' . $paged) ?>
                
                <!-- START CONTENT -->
                <div id="content" class="group">
                    <?php get_template_part('loop', 'index') ?>
                </div>                       
                <!-- END CONTENT -->
                
                <!-- START LATEST NEWS -->
                <?php get_sidebar('blog') ?>
                <!-- END LATEST NEWS -->   
            
            </div>      
        </div>
        
<?php

get_footer();
