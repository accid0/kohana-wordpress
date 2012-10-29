<div class="clear"></div>

<?php if ( $have_posts ) : ?>
<?php /* If this is a category archive */
  if (is_category()) { ?>
  <h3
    class="red-normal"><?php printf(__('Archive for the &#8216;%s&#8217; Category', $tpl_tdomain), single_cat_title('', FALSE)); ?></h3>
  <?php /* If this is a tag archive */
  } elseif (is_tag()) { ?>
  <h3
    class="red-normal"><?php printf(__('Posts Tagged &#8216;%s&#8217;', $tpl_tdomain), single_tag_title('', FALSE)); ?></h3>
  <?php /* If this is a daily archive */
  } elseif (is_day()) { ?>
  <h3
    class="red-normal"><?php printf(__('Archive for %s | Daily archive page', $tpl_tdomain), get_the_time(__('F jS, Y', $tpl_tdomain))); ?></h3>
  <?php /* If this is a monthly archive */
  } elseif (is_month()) { ?>
  <h3
    class="red-normal"><?php printf(__('Archive for %s | Monthly archive page', $tpl_tdomain), get_the_time(__('F Y', $tpl_tdomain))); ?></h3>
  <?php /* If this is a yearly archive */
  } elseif (is_year()) { ?>
  <h3
    class="red-normal"><?php printf(__('Archive for %s | Yearly archive page', $tpl_tdomain), get_the_time(__('Y', $tpl_tdomain))); ?></h3>
  <?php /* If this is a yearly archive */
  } elseif (is_search()) { ?>
  <h3
    class="red-normal"><?php printf(__('Search Results for: %s', $tpl_tdomain), '<span>' . get_search_query() . '</span>'); ?></h3>
  <?php /* If this is an author archive */
  } elseif (is_author()) { ?>
  <h3 class="red-normal"><?php _e('Author Archive', $tpl_tdomain); ?></h3>
  <?php /* If this is a paged archive */
  } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
  <h3 class="red-normal"><?php _e('Blog Archives', $tpl_tdomain); ?></h3>
  <?php
  }

  echo $content_loop;

else : ?>

<div id="post-0" class="post error404 not-found group">
  <h1 class="entry-title"><?php _e('Not Found', $tpl_tdomain); ?></h1>

  <div class="entry-content">
    <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', $tpl_tdomain); ?></p>
    <?php get_search_form(); ?>
  </div>
  <!-- .entry-content -->
</div><!-- #post-0 -->

<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php if ($pagination) : echo $pagination; else : ?>

<div class="navigation group">
  <div class="alignleft"><?php next_posts_link(__('Next &raquo;', $tpl_tdomain)) ?></div>
  <div class="alignright"><?php previous_posts_link(__('&laquo; Back', $tpl_tdomain)) ?></div>
</div>

<?php endif; ?>

<?php comments_template(); ?>