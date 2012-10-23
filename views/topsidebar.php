<div id="topsidebar" class="<?php echo $layout_page;?>">
  <?php for( $i = 1; $i <= $topsidebar_rows; $i++ ) : ?>
  <div class="group inner topsidebar_row_<?php echo $i ?> topsidebar_cols_<?php echo $topsidebar_cols ?>">
  <?php dynamic_sidebar( "Header Row $i" ) ?>
  </div>
  <?php endfor;?>
</div>
<?php
wp_reset_postdata();
