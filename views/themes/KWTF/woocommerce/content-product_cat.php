<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 ) - 1;

// Increase loop count
$woocommerce_loop['loop']++;

$loop_class_li = array_diff( get_query_var('class_li'), array('border'));
$loop_class_li[] = 'category';
$title_position = get_query_var('title_position');

if ( ! isset( $woocommerce_loop['setLast'] ) && $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ==0 )
  $loop_class_li[] = 'last';

if ( ! isset( $woocommerce_loop['setFirst'] ) && ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] == 0 )
  $loop_class_li[] = 'first';

if ( ! empty( $loop_class_li ) )
  $class = ' class="' . implode( ' ', $loop_class_li ) . '"';
else
  $class = '';

$a_class = (in_array( 'shadow', $loop_class_li)) ? 'class="shadow"' : '';
?>
<li <?php echo $class; ?>>

	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>

	<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" <?php echo $a_class?>>

    <?php
			/**
			 * woocommerce_before_subcategory_title hook
			 *
			 * @hooked woocommerce_subcategory_thumbnail - 10
			 */
			do_action( 'woocommerce_before_subcategory_title', $category );
		?>

    <?php if ( get_query_var( 'shop_show_name' ) ) : ?>
    <h3 class="<?php echo $title_position ?>"><?php echo $category->name; ?>

      <?php if ( $category->count > 0 ) : ?>
        <mark class="count">(<?php echo $category->count; ?>)</mark>
      <?php endif; ?>

    </h3>
    <?php endif ?>
		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>

	</a>

	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</li>