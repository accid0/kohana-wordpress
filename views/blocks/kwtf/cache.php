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
      <div id="cache_menu_top_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_menu_top_ttl"><strong><?php echo __('Lifetime Top Menu (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_menu_top_ttl-feedback" class="feedback"><strong><?php echo $__cache_menu_top_ttl?></strong></span>
          <div id="cache_menu_top_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_menu_top_ttl" value = "<?php echo $__cache_menu_top_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_menu_top_ttl').each(function(e){
              var val = <?php echo $__cache_menu_top_ttl ? $__cache_menu_top_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_menu_top_ttl"]' ).val( ui.value );
                  $( '#cache_menu_top_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_menu_main_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_menu_main_ttl"><strong><?php echo __('Lifetime Main Menu (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_menu_main_ttl-feedback" class="feedback"><strong><?php echo $__cache_menu_main_ttl?></strong></span>
          <div id="cache_menu_main_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_menu_main_ttl" value = "<?php echo $__cache_menu_main_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_menu_main_ttl').each(function(e){
              var val = <?php echo $__cache_menu_main_ttl ? $__cache_menu_main_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_menu_main_ttl"]' ).val( ui.value );
                  $( '#cache_menu_main_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_scripts_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_scripts_ttl"><strong><?php echo __('Lifetime Scripts (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_scripts_ttl-feedback" class="feedback"><strong><?php echo $__cache_scripts_ttl?></strong></span>
          <div id="cache_scripts_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_scripts_ttl" value = "<?php echo $__cache_scripts_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_scripts_ttl').each(function(e){
              var val = <?php echo $__cache_scripts_ttl ? $__cache_scripts_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_scripts_ttl"]' ).val( ui.value );
                  $( '#cache_scripts_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_slider_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_slider_ttl"><strong><?php echo __('Lifetime Sliders (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_slider_ttl-feedback" class="feedback"><strong><?php echo $__cache_slider_ttl?></strong></span>
          <div id="cache_slider_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_slider_ttl" value = "<?php echo $__cache_slider_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_slider_ttl').each(function(e){
              var val = <?php echo $__cache_slider_ttl ? $__cache_slider_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_slider_ttl"]' ).val( ui.value );
                  $( '#cache_slider_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_topsidebar_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_topsidebar_ttl"><strong><?php echo __('Lifetime Top Widgtes Bar (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_topsidebar_ttl-feedback" class="feedback"><strong><?php echo $__cache_topsidebar_ttl?></strong></span>
          <div id="cache_topsidebar_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_topsidebar_ttl" value = "<?php echo $__cache_topsidebar_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_topsidebar_ttl').each(function(e){
              var val = <?php echo $__cache_topsidebar_ttl ? $__cache_topsidebar_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_topsidebar_ttl"]' ).val( ui.value );
                  $( '#cache_topsidebar_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_map_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_map_ttl"><strong><?php echo __('Lifetime Maps (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_map_ttl-feedback" class="feedback"><strong><?php echo $__cache_map_ttl?></strong></span>
          <div id="cache_map_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_map_ttl" value = "<?php echo $__cache_map_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_map_ttl').each(function(e){
              var val = <?php echo $__cache_map_ttl ? $__cache_map_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_map_ttl"]' ).val( ui.value );
                  $( '#cache_map_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_sidebar_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_sidebar_ttl"><strong><?php echo __('Lifetime Sidebars (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_sidebar_ttl-feedback" class="feedback"><strong><?php echo $__cache_sidebar_ttl?></strong></span>
          <div id="cache_sidebar_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_sidebar_ttl" value = "<?php echo $__cache_sidebar_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_sidebar_ttl').each(function(e){
              var val = <?php echo $__cache_sidebar_ttl ? $__cache_sidebar_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_sidebar_ttl"]' ).val( ui.value );
                  $( '#cache_sidebar_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_big_footer_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_big_footer_ttl"><strong><?php echo __('Lifetime Footer Widgets (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_big_footer_ttl-feedback" class="feedback"><strong><?php echo $__cache_big_footer_ttl?></strong></span>
          <div id="cache_big_footer_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_big_footer_ttl" value = "<?php echo $__cache_big_footer_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_big_footer_ttl').each(function(e){
              var val = <?php echo $__cache_big_footer_ttl ? $__cache_big_footer_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_big_footer_ttl"]' ).val( ui.value );
                  $( '#cache_big_footer_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
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
      <div id="cache_extra_content_ttl-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="cache_extra_content_ttl"><strong><?php echo __('Lifetime Extra Contents (h)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">720</span>
          <span id="cache_extra_content_ttl-feedback" class="feedback"><strong><?php echo $__cache_extra_content_ttl?></strong></span>
          <div id="cache_extra_content_ttl" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="cache_extra_content_ttl" value = "<?php echo $__cache_extra_content_ttl?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#cache_extra_content_ttl').each(function(e){
              var val = <?php echo $__cache_extra_content_ttl ? $__cache_extra_content_ttl : 1;?>;
              var minValue = 1;
              var maxValue = 720;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.25,
                slide: function( event, ui ) {
                  $( 'input[name="cache_extra_content_ttl"]' ).val( ui.value );
                  $( '#cache_extra_content_ttl-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the lifetime cache, expressed in hours.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
</div>