<?php
/**
 * Description Tab
 */
 
global $woocommerce, $post;
?>
<div class="panel" id="tab-description">

	<?php $heading = apply_filters('woocommerce_product_description_heading', __('Product Description', 'woocommerce')); ?>
	
	<!--<h2><?php echo $heading; ?></h2>-->
	
	<?php the_content();
  woocommerce_template_single_sharing();?>

</div>