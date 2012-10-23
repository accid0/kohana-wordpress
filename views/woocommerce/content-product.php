<li<?php echo $class; ?>>

  <?php do_action('woocommerce_before_shop_loop_item'); ?>

  <a href="<?php the_permalink(); ?>">

    <div class="thumbnail">
      <?php do_action('woocommerce_before_shop_loop_item_title'); ?>

      <div class="thumb-shadow"></div>

      <?php if ( $shop_show_name ) : ?><strong class="<?php echo $title_position ?>"><?php the_title(); ?></strong><?php endif ?>
    </div>

    <?php do_action('woocommerce_after_shop_loop_item_title'); ?>

  </a>

  <?php do_action('woocommerce_after_shop_loop_item'); ?>

</li>