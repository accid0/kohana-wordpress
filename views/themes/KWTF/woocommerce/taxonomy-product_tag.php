<?php echo $header ?>

<?php do_action('woocommerce_before_main_content'); ?>

<h1 class="page-title">
  <?php if (is_search()) : ?>
  <?php echo $search_title; ?>
  <?php elseif (is_tax()) : ?>
  <?php echo $tax_title; ?>
  <?php else : ?>
  <?php echo $shop_page_title; ?>
  <?php endif; ?>

  <?php if ($paged) : ?>
  <?php echo $paged_title; ?>
  <?php endif; ?>
</h1>

<?php do_action('woocommerce_archive_description'); ?>

<?php if (is_tax()) : ?>
<?php do_action('woocommerce_taxonomy_archive_description'); ?>
<?php elseif (!empty($shop_page) && is_object($shop_page)) : ?>
<?php do_action('woocommerce_product_archive_description', $shop_page); ?>
<?php endif; ?>

<?php if ( $have_posts ) : ?>

<?php do_action('woocommerce_before_shop_loop'); ?>

<ul class="products <?php echo $product_style?>">

  <?php echo ($content) ? $content : __('No products found which match your selection.', 'woocommerce');?>

</ul>
<div class="clear"></div>

<?php do_action('woocommerce_after_shop_loop'); ?>

<?php endif; ?>

<div class="clear"></div>

<?php do_action('woocommerce_pagination');?>

<?php do_action('woocommerce_after_main_content'); ?>

<?php echo $sidebar; ?>

<?php echo $footer; ?>