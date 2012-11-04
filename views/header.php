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

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );
    
    // Add description, if is home
    echo ' | ' . $description;

    // Add a page number if necessary:
    echo ($page) ? ' | ' . $page : '';

    ?></title>          
    
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php if ( $responsive ) : ?>
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="<?php echo $uri_theme; ?>/css/lessthen960.css" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="<?php echo $uri_theme; ?>/css/lessthen600.css" />
	<link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="<?php echo $uri_theme; ?>/css/lessthen480.css" />
	<?php endif; ?>
  <!-- [favicon] begin -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
  <link rel="icon" type="image/x-icon" href="<?php echo $favicon; ?>" />
  <!-- [favicon] end -->
    
  <?php echo $scripts; ?>

</head>

<body <?php body_class( "no_js" . $body_class ) ?>>   
                             
    <!-- START SHADOW WRAPPER -->
    <div class="bg-shadow group">        
                             
        <!-- START WRAPPER -->
        <div class="wrapper group">        
            
            <!-- START HEADER -->
            <div id="header" class="group">   
        
                <!-- TOPBAR -->
                <?php echo $topbar; ?>
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
                            
                            echo '<p class="logo-description">', $description_logo, '</p>';
                                                                                        
                        endif; ?>
                    </div>
                    <?php endif?>
                    <!-- END LOGO -->  
                
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <?php echo $menu; ?>
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>   
            <!-- END HEADER -->
            
            <!-- SLIDER -->
            <?php echo $slider_body; ?>
            <!-- /SLIDER -->

            <!-- HEADER SIDEBAR -->
            <?php echo $topsidebar; ?>
            <!--/HEADER SIDEBAR -->

            <!-- MAP -->
            <?php echo $map; ?>
            <!--/MAP -->