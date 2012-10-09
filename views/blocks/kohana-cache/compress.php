<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\compress.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 01 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="gzip"><strong><?php echo __('Send Compressed Pages', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "gzip" <?php echo ($__gzip)? 'checked':''?>/>
        <p>
        <?php _e('When possible (i.e. if the browser accepts compression and the page was cached compressed) the page will be sent compressed to save bandwidth.', $tpl_tdomain); ?>
        <?php _e('Only the textual part of a page can be compressed, not images, so a photo
        blog will consume a lot of bandwidth even with compression enabled.', $tpl_tdomain); ?>
        <?php _e('Leave the options disabled if you note malfunctions, like blank pages.', $tpl_tdomain); ?>
        <br />
        <?php _e('If you enable this option, the option below will be available as well.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="gzip_on_the_fly"><strong><?php echo __('On-The-Fly Compression', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "gzip_on_the_fly" <?php echo ($__gzip_on_the_fly)? 'checked':''?>/>
        
        <?php _e('When possible (i.e. if the browser accepts compression) use on-the-fly compression to save bandwidth when sending pages which are not compressed.', $tpl_tdomain); ?>
        <?php _e('Serving of such pages will be a little less performant.', $tpl_tdomain); ?>
        <?php _e('Leave the options disabled if you note malfunctions, like blank pages.', $tpl_tdomain); ?>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="store_compressed"><strong><?php echo __('Store Compressed Pages', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "store_compressed" <?php echo ($__store_compressed)? 'checked':''?>/>
        <p>
        <?php _e('Enable this option to minimize disk space usage and make sending of compressed pages possible with the option below.', $tpl_tdomain); ?>
        <?php _e('The cache will be a little less performant.', $tpl_tdomain); ?>
        <?php _e('Leave the options disabled if you note malfunctions, like blank pages.', $tpl_tdomain); ?>
        <br />
        <?php _e('If you enable this option, the option below will be available as well.', $tpl_tdomain); ?></p>
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>