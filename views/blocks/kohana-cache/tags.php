<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kohana-cache\tags.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 07 Jul - 02 Mon
 */?>
<div class="postbox" id="<?php echo $blockname?>">
	<div class="inside">
	            
      <div class="form-field form-required">    
        <label for="has_cache_tag"><strong><?php echo __('Enabled Tag', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='checkbox' name = "has_cache_tag" value = "1" <?php echo ($__has_cache_tag) ? 'checked': ''?>
        />
        <p>
        <br/><?php _e( 'Эта опция включает пост обработку html кода полученого в результате работы Wordpress движка. Kohana получает этот код в качестве главного шаблона и обрабатывая ури запроса использует его.', $tpl_tdomain)?>
	    <br/><?php _e( 'При дезактивации все найденые переменные будут стерты из кода.', $tpl_tdomain)?>
        </p>
      </div>        
	            
      <div class="form-field form-required">    
        <label for="cache_tag"><strong><?php echo __('Cache Tag', $tpl_tdomain)?></strong></label>
        <br/>
  	  	<input type='text' name = "cache_tag" value = "<?php echo $__cache_tag?>"/>
        <p><?php _e( 'Метка для определения тега Kohana. Пример:', $tpl_tdomain)?><br/> &lt;!-- &lt;<strong><?php echo $__cache_tag?></strong> <strong>var</strong> = 'your_var' /&gt; --&gt;
        <br/><?php _e( 'Если плагин найдет такой тег где-то в коде, то вместо него будет подставлен код:', $tpl_tdomain)?>
        <code>&lt;?php echo $your_var ?&gt;</code>
        </p>
	  </div>          
              
      <div class="form-field form-required">    
        <label for="kohana_views_prefix"><strong><?php echo __('Prefix to Views Kohanas Files', $tpl_tdomain)?></strong></label>
        <br/>
        <input type="text" name = "kohana_views_prefix" value = "<?php echo $__kohana_views_prefix?>"/>
      </div>        
	  		
	</div>
<?php foreach( $__submits as $submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>" value="<?php echo $submit?>" name="do"
/>
<?php endforeach;?>
</div>