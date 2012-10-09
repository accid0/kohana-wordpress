<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kadapter\othernbspoptions.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 02 Mon
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="disable_backlink"><strong><?php echo __('Disable backlink in the blog footer:', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type="checkbox" name = "disable_backlink" value = "1" <?php if ( $__disable_backlink) echo 'checked'?>/>
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>