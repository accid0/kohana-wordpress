<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks/kwtf/cache.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 10 Oct - 25 Thu
 */?>
<div class="postbox" id="<?php echo $blockname?>">
  <div class="rm_section" id="features-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Partial Cache System', $tpl_tdomain)?>
      </h3>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="cache_menu_top-option" class="rm_option rm_input rm_on_off">
        <label for="cache_menu_top"><strong><?php _e('Top Menu', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_menu_top' name = "cache_menu_top" value="1"  <?php checked($__cache_menu_top, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache top menu', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_menu_main-option" class="rm_option rm_input rm_on_off">
        <label for="cache_menu_main"><strong><?php _e('Main Menu', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_menu_main' name = "cache_menu_main" value="1"  <?php checked($__cache_menu_main, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache main menu', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_scripts-option" class="rm_option rm_input rm_on_off">
        <label for="cache_scripts"><strong><?php _e('Scripts', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_scripts' name = "cache_scripts" value="1"  <?php checked($__cache_scripts, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache scripts', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_slider-option" class="rm_option rm_input rm_on_off">
        <label for="cache_slider"><strong><?php _e('Sliders', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_slider' name = "cache_slider" value="1"  <?php checked($__cache_slider, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache sliders', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_topsidebar-option" class="rm_option rm_input rm_on_off">
        <label for="cache_topsidebar"><strong><?php _e('Top Sidebar Widgets', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_topsidebar' name = "cache_topsidebar" value="1"  <?php checked($__cache_topsidebar, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache top sidebar widgets', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_map-option" class="rm_option rm_input rm_on_off">
        <label for="cache_map"><strong><?php _e('Maps', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_map' name = "cache_map" value="1"  <?php checked($__cache_map, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache maps', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_sidebar-option" class="rm_option rm_input rm_on_off">
        <label for="cache_sidebar"><strong><?php _e('Main Sidebar Widgets', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_sidebar' name = "cache_sidebar" value="1"  <?php checked($__cache_sidebar, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache main sidebar widgets', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_big_footer-option" class="rm_option rm_input rm_on_off">
        <label for="cache_big_footer"><strong><?php _e('Footer Sidebar Widgets', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_big_footer' name = "cache_big_footer" value="1"  <?php checked($__cache_big_footer, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache footer sidebar widgets', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="cache_extra_content-option" class="rm_option rm_input rm_on_off">
        <label for="cache_extra_content"><strong><?php _e('Extra Contents', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='cache_extra_content' name = "cache_extra_content" value="1"  <?php checked($__cache_extra_content, 1);?>/>
        </div>
        <small><?php _e('Select if you want to active or not the cache extra contents', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
    </div>
  </div>
</div>