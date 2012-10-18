<?php
/**
 * Created by JetBrains PhpStorm.
 * User : Andrew Scherbakov
 * Date : 18.10.12
 * Time : 22:31
 * File : topsidebar.php
 * @name ${NAME}
 * @packages
 * @subpackage
 * @category
 * @author Andrew Scherbakov
 * @version 0.1
 * @copyright ®©Andrew Scherbakov
 * To change this template use File | Settings | File Templates.
 */
if ( $use_sidebar):
?>
<div id="topsidebar" class="<?php echo $layout_page;?>">
    <?php for( $i = 1; $i <= $topsidebar_rows; $i++ ) : ?>
<div class="group inner topsidebar_row_<?php echo $i ?> topsidebar_cols_<?php echo $topsidebar_cols ?>">
  <?php dynamic_sidebar( "Header Row $i" ) ?>
</div>
<?php endfor; ?>
</div>
<?php endif;