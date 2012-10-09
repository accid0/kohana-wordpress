<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\advanced.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 01 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="notranslation"><strong><?php echo __('Translation', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "notranslation" <?php echo ($__notranslation) ? 'checked' : ''?>/>
        <p><?php _e('DO NOT show this panel translated.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="nocache"><strong><?php echo __('Allow Browser to Bypass Cache', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "nocache" <?php echo ($__nocache) ? 'checked' : ''?>/>
        <p>
        <?php _e('Do not use cache if browser sends no-cache header (e.g. on explicit page reload).', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="redirects"><strong><?php echo __('Redirect Caching', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "redirects" <?php echo ($__redirects) ? 'checked' : ''?>/>
        <p>
        <?php _e('Cache WordPress redirects.', $tpl_tdomain); ?>
        <?php _e('WordPress sometime sends back redirects that can be cached to avoid further processing time.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="notfound"><strong><?php echo __('Page Not Found Caching (HTTP 404)', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "notfound" <?php echo ($__notfound) ? 'checked' : ''?>/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="home"><strong><?php echo __('Home Caching', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "home" <?php echo ($__home) ? 'checked' : ''?>/>
        <p>
        <?php _e('DO NOT cache the home page so it is always fresh.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="cache_qs"><strong><?php echo __('URL With Parameters', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "cache_qs" <?php echo ($__cache_qs) ? 'checked' : ''?>/>
        <p>
        <?php _e('Cache requests with query string (parameters).', $tpl_tdomain); ?>
        <?php _e('This option has to be enabled for blogs which have post URLs with a question mark on them.', $tpl_tdomain); ?>
        <?php _e('This option is disabled by default because there is plugins which use
        URL parameter to perform specific action that cannot be cached', $tpl_tdomain); ?>
        <?php _e('For who is using search engines friendly permalink format is safe to
        leave this option disabled, no performances will be lost.', $tpl_tdomain); ?></p>
        
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="strip_qs"><strong><?php echo __('Strip Query String', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "strip_qs" <?php echo ($__strip_qs) ? 'checked' : ''?>/>
        <p>
           <?php _e('This is a really special case, usually you have to kept it disabled. When enabled, URL with query string will be
    reduced removing the query string. So the URL http://www.domain.com/post-title and
    http://www.domain.com/post-title?a=b&amp;c=d are cached as a single page.<br />
    Setting this option disable the next one.', $tpl_tdomain); ?>
          <br />
        <?php _e('<strong>Many plugins can stop to work correctly with this option enabled
        (eg. my <a href="http://www.satollo.net/plugins/newsletter">Newsletter plugin</a>)</strong>', $tpl_tdomain); ?></p>
        
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="lastmodified"><strong><?php echo __('Disable Last-Modified Header', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' value = "1" name = "lastmodified" <?php echo ($__lastmodified) ? 'checked' : ''?>/>
        <p>
        <?php _e('Disable some HTTP headers (Last-Modified) which improve performances but some one is reporting they create problems which some hosting configurations.',$tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="clean_interval"><strong><?php echo __('Clean Interval', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='text' readonly value = "<?php echo $__clean_interval?>" name="clean_interval" />
        <p><?php _e('The cleaning process runs hourly and it\'s ok to run it hourly: that grant you an efficient cache. If above there is not a valid next run time, wait 10 seconds and reenter this panel. If nothing change, try to deactivate and reactivate Hyper Cache.',$tpl_tdomain)?></p>
	  </div>
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>