<?php
/**
 * @package WordPress
 * @subpackage Impero
 * @since Impero 1.0
 */                

if ( $is_portfolio_tax )
    get_template_part( 'portfolio' );
else if ( get_query_var('taxonomy') == 'category-photo' )  
    get_template_part( 'gallery' );
else
    get_template_part( 'index' );