<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\othernbspoptions.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section" id="footer-backlink-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Footers Backlink', $tpl_tdomain)?>
      </h3>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="disable_backlink-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="disable_backlink"><strong><?php _e('Disable backlink in the blog footer:', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='disable_backlink' name = "disable_backlink" value="1"  <?php checked($__disable_backlink, 1)?>/>
        </div>
        <small><?php _e('Choose if you want to disable footers backlink.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>

<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>