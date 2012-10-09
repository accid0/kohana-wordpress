<?php      
/**
 * @package WordPress
 * @subpackage Beauty & Clean
 * @since 1.0
 */

get_header() ?>           
         
    <div class="p404 group">   
        <h1><strong>404</strong> <?php _e('error', $tpl_tdomain) ?></h1>
        <h3><?php _e('Page not found', $tpl_tdomain) ?> <img src="<?php echo $uri_theme ?>/images/icons/search.png" alt="<?php _e('Page not found', $tpl_tdomain) ?>" /></h3>
    
        <p>
            <?php _e('We are sorry but the page you are looking for does not exist.', $tpl_tdomain) ?><br/>
            <?php _e('You could retourn to the ', $tpl_tdomain) ?> <a href="<?php echo home_url() ?>">homepage</a> <?php _e('or search using the search box below', $tpl_tdomain) ?>
        </p>
        
        <!-- START SEARCH -->
        <form method="get" id="searchform" action="<?php echo home_url(); ?>/">
            <fieldset>
                <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" />
                <input type="submit" id="searchsubmit" value="GO" />
            </fieldset>
        </form>             
        <!-- END SEARCH -->
    </div>
    
<?php get_footer() ?>
