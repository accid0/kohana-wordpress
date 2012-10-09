<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\config.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 01 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="count"><strong><?php echo __('Files in Cache (Valid and Expired)', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='text' readonly value='<?php echo $count?>' />
	  </div>
	            
      <div class="form-field form-required">    
        <label for="path"><strong><?php echo __('Path to Cache Files', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='text' name = "path" value = "<?php echo $__path?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="charset"><strong><?php echo __('Charser for Cache', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='text' name = "charset" value = "<?php echo $__charset?>"/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="comment"><strong><?php echo __('Disable Cache for Commenters', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' name = "comment" value = "1" <?php echo ($__comment)? 'checked':''?>/>
        <p><?php _e('When users leave comments, WordPress show pages with their comments even if in moderation
        (and not visible to others) and pre-fills the comment form.', $tpl_tdomain); ?>
        <?php _e('If you want to keep those features, enable this option.', $tpl_tdomain); ?>
        <?php _e('The caching system will be less efficient but the blog more usable.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="expire_type"><strong><?php echo __('Cache Invalidation Mode', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<select name = "expire_type">
          <option value='all' <?php echo ($__expire_type == 'all')? 'selected':''?>><?php echo __('All cached pages', $tpl_tdomain); ?></option>
          <option value='post' <?php echo ($__expire_type == 'post')? 'selected':''?>><?php echo __('Only modified posts', $tpl_tdomain); ?></option>
          <option value='none' <?php echo ($__expire_type == 'none')? 'selected':''?>><?php echo __('Nothing', $tpl_tdomain); ?></option>
        </select>
        <p><?php _e('"Invalidation" is the process of deleting cached pages when they are no more valid.', $tpl_tdomain); ?>
        <?php _e('Invalidation process is started when blog contents are modified (new post, post update, new comment,...) so
        one or more cached pages need to be refreshed to get that new content.', $tpl_tdomain); ?>
        <?php _e('A new comment submission or a comment moderation is considered like a post modification
        where the post is the one the comment is relative to.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="archive"><strong><?php echo __('Invalidate home, archives, categories on single post invalidation', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='checkbox' name = "archive" value = "1" <?php echo ($__archive)? 'checked':''?>/>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="timeout"><strong><?php echo __('Cached Pages Timeout', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='text' name = "timeout" value = "<?php echo $__timeout?>"/>(<?php _e('minutes', $tpl_tdomain); ?>)
        <p><?php _e('Minutes a cached page is valid and served to users. A zero value means a cached page is
        valid forever.', $tpl_tdomain); ?>
        <?php _e('If a cached page is older than specified value (expired) it is no more used and
        will be regenerated on next request of it.', $tpl_tdomain); ?>
        <?php _e('720 minutes is half a day, 1440 is a full day and so on.', $tpl_tdomain); ?></p>
	  </div>        
              
      <div class="form-field form-required">    
        <label for="browsercache"><strong><?php echo __('Allow Browser Caching', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='checkbox' value = "1" name = "browsercache" <?php echo ($__browsercache) ? 'checked' : ''?>/>
        <p><?php _e('Allow browser caching.', $tpl_tdomain); ?></p>
      </div>        
	            
      <div class="form-field form-required">    
        <label for="feed"><strong><?php echo __('Feeds Caching', $tpl_tdomain)?></strong></label>
        <br/>
        <input type='checkbox' name = "feed" value = "1" <?php echo ($__feed)? 'checked':''?>/>
        <p><?php _e('When enabled the blog feeds will be cache as well.', $tpl_tdomain); ?>
        <?php _e('Usually this options has to be left unchecked but if your blog is rather static,
        you can enable it and have a bit more efficiency', $tpl_tdomain); ?></p>
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>