<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\filters.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 01 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="reject"><strong><?php echo __('URI to Reject', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<textarea wrap="off" rows="4" cols="70" name = "reject"><?php echo $__reject?></textarea>
        <p>
        <?php _e('Write one URI per line, each URI has to start with a slash.', $tpl_tdomain); ?>
        <?php _e('A specified URI will match the requested URI if the latter starts with the former.', $tpl_tdomain); ?>
        <?php _e('If you want to specify a stric matching, surround the URI with double quotes.', $tpl_tdomain); ?>

        <?php
        $languages = get_option('gltr_preferred_languages');
        if (is_array($languages))
        {
            echo '<br />';
            $home = get_option('home');
            $x = strpos($home, '/', 8); // skips http://
            $base = '';
            if ($x !== false) $base = substr($home, $x);
            echo 'It seems you have Global Translator installed. The URI prefixes below can be added to avoid double caching of translated pages:<br />';
            foreach($languages as $l) echo $base . '/' . $l . '/ ';
        }
        ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="reject_agents"><strong><?php echo __('Agents to Reject', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<textarea wrap="off" rows="4" cols="70" name = "reject_agents"><?php echo $__reject_agents?></textarea>
        <p>
        <?php _e('Write one agent per line.', $tpl_tdomain); ?>
        <?php _e('A specified agent will match the client agent if the latter contains the former. The matching is case insensitive.', $tpl_tdomain); ?></p>
	  </div>        
	            
      <div class="form-field form-required">    
        <label for="reject_cookies"><strong><?php echo __('Cookies Matching', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<textarea wrap="off" rows="4" cols="70" name = "reject_cookies"><?php echo $__reject_cookies?></textarea>
        <p>
        <?php _e('Write one cookie name per line.', $tpl_tdomain); ?>
        <?php _e('When a specified cookie will match one of the cookie names sent bby the client the cache stops.', $tpl_tdomain); ?>
        <?php if (defined('FBC_APP_KEY_OPTION')) { ?>
        <br />
        <?php _e('It seems you have Facebook Connect plugin installed. Add this cookie name to make it works
        with Hyper Cache:', $tpl_tdomain); ?>
        <br />
        <strong><?php echo get_option(FBC_APP_KEY_OPTION); ?>_user</strong>
        <?php } ?></p>
	  </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>