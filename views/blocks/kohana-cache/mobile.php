<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\mobile.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 01 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="mobile"><strong><?php echo __('Detect Mobile Devices', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "mobile" <?php echo ($__mobile)? 'checked':''?> />
        <p>
        <?php _e('When enabled mobile devices will be detected and the cached page stored under different name.', $tpl_tdomain); ?>
        <?php _e('This makes blogs with different themes for mobile devices to work correctly.', $tpl_tdomain); ?>
        </p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="plugin_mobile_pack"><strong><?php echo __('WordPress Mobile Pack', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "plugin_mobile_pack" <?php echo ($__plugin_mobile_pack)? 'checked':''?>/>
        <p><?php _e('Enbale integration with <a href="http://wordpress.org/extend/plugins/wordpress-mobile-pack/">WordPress Mobile Pack</a> plugin. If you have that plugin, Hyper Cache use it to detect mobile devices and caches saparately
    the different pages generated.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="mobile_agents"><strong><?php echo __('Mobile Agent List', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<textarea wrap="off" rows="4" cols="70" name = "mobile_agents" ><?php echo $__mobile_agents?></textarea>
        
        <?php _e('One per line mobile agents to check for when a page is requested.', $tpl_tdomain); ?>
        <?php _e('The mobile agent string is matched against the agent a device is sending to the server.', $tpl_tdomain); ?>
        
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>