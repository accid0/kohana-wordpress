<?php
/*
Template Name: Portfolio
*/
                                              
echo $header; ?>

        <div id="primary" class="layout-<?php echo $layout_type ?>">
		    <div class="inner group">

                <div id="slogan">
                    <h2><?php echo __('Category', $tpl_tdomain) . ': ' . Utf8::ucfirst( $term ); ?></h2>
                </div>
                               
                <?php if ( $portfolio_type == 'filterable' ) : ?>
                <!-- FILTERS -->
                <div class="gallery-filters">
                    <?php if ( $_active_title == 'yes' || !$_active_title ) the_title( '<h1>', '</h1>' ) ?>
                    <?php if ( $portfolio_show_filters ) : ?>
                    <ul class="filters gallery-categories">
                        <li class="segment-1 first"><a data-value="all" href="#"><?php _e('All', $tpl_tdomain) ?></a></li><?php
                        foreach( $cats as $cat )
                        {
                            if( $cat->count > 0 ) :
                                ?><li class="segment-<?php echo $cat->term_id ?>"><a href="#" data-value="<?php echo strtolower(preg_replace('/\s+/', '-', urldecode( $cat->slug))) ?>"><?php echo $cat->name ?></a></li><?php
                            else :
                                ?><li><?php echo $cat->name ?></li><?php
                            endif;
                        }
                    ?></ul>
                    <?php endif ?>
                </div>
                <!-- END FILTERS --> 
                <?php endif ?>
    
                <!-- START CONTENT -->
                <div id="content" class="group">

                  <?php $core->breadcrumb(); ?>
                  <?php echo $loop_page; ?>
                  <?php echo $content; ?>
                </div>
                <!-- END CONTENT -->
    
                <?php echo $sidebar; ?>
    
                <!-- START EXTRA CONTENT -->
                <?php echo $extra_content; ?>
                <!-- END EXTRA CONTENT -->            
            </div>
        </div>

<?php echo $footer;