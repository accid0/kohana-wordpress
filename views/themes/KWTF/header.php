<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage YIW Themes
 * @since 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if ( ! $isIpad ) : ?>
<meta name="viewport" content="width=device-width" />
<?php endif ?>
<title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );
    
    // Add description, if is home
    if ( is_home() || is_front_page() )
        echo ' | ' . get_bloginfo( 'description' );

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', $tpl_tdomain ), max( $paged, $page ) );

    ?></title>          
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />                              
	
	<?php if ( $responsive ) : ?>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?php echo get_template_directory_uri(); ?>/css/lessthen960.css" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?php echo get_template_directory_uri(); ?>/css/lessthen600.css" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php echo get_template_directory_uri(); ?>/css/lessthen480.css" />
	<?php endif; ?>
    
    <?php
        // styles 
        wp_enqueue_style( 'prettyPhoto',        get_template_directory_uri()."/css/prettyPhoto.css" );  
        wp_enqueue_style( 'tipsy',        get_template_directory_uri()."/css/tipsy.css" );

        // scripts    
        wp_enqueue_script( 'jquery-easing' );
        wp_enqueue_script( 'jquery-prettyPhoto' );
        wp_enqueue_script( 'jquery-tipsy' );  
        wp_enqueue_script( 'jquery-tweetable' );           
        wp_enqueue_script( 'jquery-nivo' ); 
        wp_enqueue_script( 'jquery-cycle' );    
        wp_enqueue_script( 'jquery-jcarousel' );   
        
        if( $topbar_content == 'twitter' ) {
            wp_enqueue_script( 'jquery-flexislider',        get_template_directory_uri()."/js/jquery.flexslider.min.js" );
        }

        if( !in_array( $slider_type, array('none','fixed-image')) ) {

                if( !in_array( $slider_type, array('carousel')) )
                    wp_enqueue_style( 'slider-' . $slider_type,        get_template_directory_uri()."/css/slider-". $slider_type .".css" );  
            
                // cycle
                if ( $slider_type == 'cycle' ) {
                    wp_enqueue_script('swfobject');
                    
                } 
                
                // flash
		elseif ( $slider_type == 'flash' ){
                    wp_enqueue_script( 'swfobject' );
                }
                
                // thumbnails
                elseif ( $slider_type == 'thumbnails' ){
                    wp_enqueue_script( 'jquery-aw-showcases', get_template_directory_uri()."/js/jquery.aw-showcase.js" );
                }
                
                //unoslider
                elseif( $slider_type == 'unoslider' ) {
                    wp_enqueue_style( 'slider-' . $slider_type . '-', get_template_directory_uri()."/css/unoslider-themes/$slider_theme/theme.css" );  
                    wp_enqueue_script( 'unoslider', get_template_directory_uri()."/js/unoslider.js" );
                }   
	    
                // elastic
                elseif ( $slider_type == 'elastic' ) {                                                                                       
                    wp_enqueue_style( 'Playfair', 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' ); 
                    wp_enqueue_script( 'jquery-elastic', get_template_directory_uri()."/js/jquery.eislideshow.js", array('jquery'), '1.0' );   
                }                    
        }                             


        // custom
        wp_enqueue_script( 'jquery-custom',      get_template_directory_uri()."/js/jquery.custom.js", array('jquery'), '1.0', true); 
                                                                                
        if( $font_type == 'cufon' )
        {                      
            wp_enqueue_script('cufon');
            //wp_enqueue_script('cufon-' . $actual_font, get_template_directory_uri()."/fonts/{$actual_font}.font.js");   
        }    
                           
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );        
                                                                
        $body_class = '';
        if ( ( $responsive  && ! $GLOBALS['is_IE'] ) || ( $responsive && $ieversion >= 9 ) )
            $body_class = ' responsive';     
                                         
        if ( ! is_user_logged_in() )
            $body_class .= ' not-logged-in';
		
		$src = get_post_meta( get_the_ID(), '_map_url', true );
        if ( get_post_meta( get_the_ID(), '_show_map', true ) == 'yes' && ! empty( $src ) ) 
    		wp_localize_script( 'jquery-custom', 'header_map', array(
            	'tab_open'  => __( 'Open map', $tpl_tdomain ),
            	'tab_close' => __( 'Close map', $tpl_tdomain ),
            ) );
            
    ?>


    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
    <link rel="icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
    <!-- [favicon] end -->  
    
    <?php wp_head() ?>
</head>

<body <?php body_class( "no_js" . $body_class ) ?>>   
                             
    <!-- START SHADOW WRAPPER -->
    <div class="bg-shadow group">        
                             
        <!-- START WRAPPER -->
        <div class="wrapper group">        
            
            <!-- START HEADER -->
            <div id="header" class="group">   
        
                <!-- TOPBAR -->
                <?php get_template_part( 'topbar' ) ?>
                <!-- END TOPBAR -->  
                
                <div class="group inner">
                    <!-- START LOGO -->
                    <?php if ( !empty( $logo)):?>
                    <div id="logo" class="group">
                        <?php if( $use_logo ): ?>
                            <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>"> 

                                <img src="<?php echo $logo  ?>" alt="<?php _e('Logo', $tpl_tdomain)?> <?php bloginfo('name') ?>"  />
                            </a>
                        <?php else: ?>
                            <a class="logo-text" href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a>
                        <?php endif ?>
                        <?php if ( $logo_use_description ) :
                        
                            $description = get_bloginfo('description');
                            $description = str_replace( '[', '<strong>', $description );
                            $description = str_replace( ']', '</strong>', $description );
                            
                            echo '<p class="logo-description">', $description, '</p>';
                                                                                        
                        endif; ?>
                    </div>
                    <?php endif?>
                    <!-- END LOGO -->  
                
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <?php  
                            $nav_args = array(
                                'theme_location' => 'nav',
                                'container' => 'none',
                                'menu_class' => 'level-1',
                                'depth' => 3,   
                                //'fallback_fb' => false,
                                //'walker' => new description_walker()
                            );
                            
                            wp_nav_menu( $nav_args ); 
                        ?>    
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>   
            <!-- END HEADER -->
            
            <!-- SLIDER -->
            <?php get_template_part( 'slider' ); ?>
            <!-- /SLIDER -->                        
        	    
        	<?php get_template_part( 'map' ); ?> 