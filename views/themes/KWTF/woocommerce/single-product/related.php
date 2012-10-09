<?php
/**
 * Related Products
 */

global $product, $woocommerce_loop;

$related = $product->get_related();

if (sizeof($related) == 0) return;

$args = array(
  'post_type'            => 'product',
  'ignore_sticky_posts'  => 1,
  'no_found_rows' 		=> 1,
  'posts_per_page'       => $posts_per_page,
  'orderby'              => $orderby,
  'post__in'             => $related
);
$args = apply_filters('woocommerce_related_products_args', $args);

$products = new WP_Query( $args );

$woocommerce_loop['columns'] = $columns;
if ( $products->have_posts() ) : ?>
<div class="related products"><!--<h2><?php _e('Related Products', 'woocommerce'); ?></h2>-->

  <ul class="products <?php echo get_query_var('product_style')?>">

  <?php while ($products->have_posts()) : $products->the_post(); ?>

  <?php woocommerce_get_template_part('content', 'product'); ?>

  <?php endwhile; // end of the loop. ?>

  </ul>
</div>
<?php endif;
wp_reset_postdata();