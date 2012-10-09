<?php

global $woocommerce_loop, $product;

//$woocommerce_loop['show_products'] = true;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
  $woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
  $woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

if (!$product->is_visible()) return;

$woocommerce_loop['loop']++;

$loop_class_li = get_query_var('class_li');
$title_position = get_query_var('title_position');

if ( ! isset( $woocommerce_loop['setLast'] ) && $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ==0 )
  $loop_class_li[] = 'last';

if ( ! isset( $woocommerce_loop['setFirst'] ) && ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 )
  $loop_class_li[] = 'first';

if ( ! empty( $loop_class_li ) )
  $class = ' class="' . implode( ' ', $loop_class_li ) . '"';
else
  $class = '';

?>
<li<?php echo $class; ?>>

  <?php do_action('woocommerce_before_shop_loop_item'); ?>

  <a href="<?php the_permalink(); ?>">

    <div class="thumbnail">
      <?php do_action('woocommerce_before_shop_loop_item_title'); ?>

      <div class="thumb-shadow"></div>

      <?php if ( get_query_var( 'shop_show_name' ) ) : ?><strong class="<?php echo $title_position ?>"><?php the_title(); ?></strong><?php endif ?>
    </div>

    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>

  </a>

  <?php do_action('woocommerce_after_shop_loop_item'); ?>

</li>