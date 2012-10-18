<?php
/**
 * @package WordPress
 * @subpackage Impero
 * @since Impero 1.0
 */

/*
Template Name: Gallery
*/                   

get_header();


?>  

        <div id="primary" class="layout-faq">
            <div class="inner group">

            <?php get_template_part( 'slogan' ) ?>
                <div id="content" class="group">

                <?php $core->breadcrumb(); ?>

                <?php if ( !is_tax() ) get_template_part( 'loop', 'page' ); 
                    
                    $args = array(
                        'post_type'      => $post_type,
                        'posts_per_page' => -1
                    );                   
                    
                    if ( is_tax() )   
                       $args = wp_parse_args( $args, $wp_query->query ); 
                    
                    $faq = new WP_Query( $args );   
                    
                    $first = TRUE;
                    $close_first = FALSE;
                    if( $close_first ) $first = FALSE;
    
                    $html = '';
                    
                    
                    while( $faq->have_posts() ) : $faq->the_post(); 
                        
                        $title = the_title( '', '', false );
                        $content = get_the_content() . ' ' . the_category();
        
                        $attr = '';
            
                        echo do_shortcode( "[toggle title=\"$title\"{$attr}]{$content}[/toggle]" );
            
                        
                    
                    endwhile; 
                    wp_reset_query(); 
                    ?>
                </div> 
                

                
                
            </div>
        </div>

                

<?php get_footer() ?>