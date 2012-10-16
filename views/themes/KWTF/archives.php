<?php
/*
Template Name: Archives
*/
get_header() ?>
        <div id="primary" class="layout-<?php echo $layout_page ?>">
          <div class="inner group">
            <?php get_template_part('slogan') ?>

            <?php query_posts('posts_per_page=30') ?>

            <!-- START CONTENT -->
            <div id="content" class="group">
              <div class = 'archive-list'>
                <h3 class="no-cufon"><?php _x('Last %d posts:', 30, $tpl_tdomain);?></h3>
                <ul class='archive-posts group'>
                <?php while( have_posts()): the_post();?>
                  <li>
                    <a href='<?php the_permalink() ?>' title='<?php the_title();?>' rel='bookmark'>
                      <span class="comments_number"><?php comments_number('0', '1', '%');?></span>
                      <span class="archdate"><?php the_date( 'd.m.y');?></span>
                      <?php the_title();?>
                    </a>
                  </li>
                <?php endwhile;?>
                </ul>
                <h3 class="no-cufon"><?php _e('Archives by Month:')?></h3>
                <ul class='archive-monthly group'>
                  <?php wp_get_archives('type=monthly'); ?>
                </ul>
                <h3 class="no-cufon"><?php _e('Archives by Subject:');?></h3>
                <ul>
                  <?php wp_list_categories(); ?>
                </ul>
              </div>
			      </div>
            <!-- END CONTENT -->
            <!-- START SIDEBAR -->
            <?php
            wp_reset_query();
            get_sidebar()
            ?>
            <!-- END SIDEBAR -->

            </div>
        </div>

<?php
wp_reset_query();
get_footer();