
<div id="footer" class="<?php echo $layout_page;?>">
    <?php for( $i = 1; $i <= $footer_rows; $i++ ) : ?>
    <div class="group inner footer_row_<?php echo $i ?> footer_cols_<?php echo $footer_cols ?>">
                <?php dynamic_sidebar( "Footer Row $i" ) ?>
    </div>
    <?php endfor; ?>         
</div>
