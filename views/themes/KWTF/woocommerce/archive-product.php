<?php get_header('shop'); ?>

<?php do_action('woocommerce_before_main_content'); ?>


<?php


?>
<h1 class="page-title">
  <?php if (is_search()) : ?>
  <?php printf(__('Search Results: &ldquo;%s&rdquo;', 'woocommerce'), get_search_query()); ?>
  <?php elseif (is_tax()) : ?>
  <?php echo single_term_title("", FALSE); ?>
  <?php else : ?>
  <?php
  $shop_page = get_post(woocommerce_get_page_id('shop'));

  echo apply_filters('the_title', ($shop_page_title = get_option('woocommerce_shop_page_title')) ? $shop_page_title : $shop_page->post_title);
  ?>
  <?php endif; ?>

  <?php if (get_query_var('paged')) : ?>
  <?php printf(__('&nbsp;&ndash; Page %s', 'woocommerce'), get_query_var('paged')); ?>
  <?php endif; ?>
</h1>

<?php do_action('woocommerce_archive_description'); ?>

<?php if (is_tax()) : ?>
<?php do_action('woocommerce_taxonomy_archive_description'); ?>
<?php elseif (!empty($shop_page) && is_object($shop_page)) : ?>
<?php do_action('woocommerce_product_archive_description', $shop_page); ?>
<?php endif; ?>

<?php if (have_posts()) : ?>

<?php do_action('woocommerce_before_shop_loop'); ?>

<ul class="products <?php echo get_query_var('product_style')?>">

  <?php woocommerce_product_subcategories(); ?>

  <?php while (have_posts()) : the_post(); ?>

  <?php woocommerce_get_template_part('content', 'product'); ?>

  <?php endwhile; // end of the loop. ?>

</ul>
<div class="clear"></div>

<?php do_action('woocommerce_after_shop_loop'); ?>

<?php else : ?>

<?php if (!woocommerce_product_subcategories(array('before' => '<ul class="products">',
                                                   'after'  => '</ul>'))
  ) : ?>

  <p><?php _e('No products found which match your selection.', 'woocommerce'); ?></p>

  <?php endif; ?>

<?php endif; ?>

<div class="clear"></div>

<?php do_action('woocommerce_pagination');

?>

<?php do_action('woocommerce_after_main_content'); ?>

<?php do_action('woocommerce_sidebar'); ?>

<?php get_footer('shop'); ?>