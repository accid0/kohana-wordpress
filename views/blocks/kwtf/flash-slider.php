<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\flash-slider.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section section_effect" id="Transitions-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Transitions', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_flash_Pieces-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_Pieces"><strong><?php echo __('Pieces', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">40</span>
          <span id="slider_flash_Pieces-feedback" class="feedback"><strong><?php echo $__slider_flash_Pieces?></strong></span>
          <div id="slider_flash_Pieces" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_Pieces" value = "<?php echo $__slider_flash_Pieces?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_Pieces').each(function(e){
              var val = <?php echo $__slider_flash_Pieces?>;
              var minValue = 0;
              var maxValue = 40;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_Pieces"]' ).val( ui.value );
                  $( '#slider_flash_Pieces-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Number of pieces to which the image is sliced', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_Time-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_Time"><strong><?php echo __('Time', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_flash_Time-feedback" class="feedback"><strong><?php echo $__slider_flash_Time?></strong></span>
          <div id="slider_flash_Time" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_Time" value = "<?php echo $__slider_flash_Time?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_Time').each(function(e){
              var val = <?php echo $__slider_flash_Time?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_Time"]' ).val( ui.value );
                  $( '#slider_flash_Time-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Time for one cube to turn', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_Transition-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_flash_Transition"><strong><?php echo __('Transition', $tpl_tdomain)?></strong></label>
        <select name = "slider_flash_Transition" id='slider_flash_Transition'>
          <?php foreach ( $options_easing as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_flash_Transition, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Transition type of the Tweener class', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_DepthOffset-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_DepthOffset"><strong><?php echo __('Depth Offset', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">100</span>
          <span class="maxCaption">1000</span>
          <span id="slider_flash_DepthOffset-feedback" class="feedback"><strong><?php echo $__slider_flash_DepthOffset?></strong></span>
          <div id="slider_flash_DepthOffset" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_DepthOffset" value = "<?php echo $__slider_flash_DepthOffset?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_DepthOffset').each(function(e){
              var val = <?php echo $__slider_flash_DepthOffset?>;
              var minValue = 100;
              var maxValue = 1000;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 50,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_DepthOffset"]' ).val( ui.value );
                  $( '#slider_flash_DepthOffset-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The offset during transition on the z-axis. Value between 100 and 1000 are recommended.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_CubeDistance-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_CubeDistance"><strong><?php echo __('Cube Distance', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">5</span>
          <span class="maxCaption">50</span>
          <span id="slider_flash_CubeDistance-feedback" class="feedback"><strong><?php echo $__slider_flash_CubeDistance?></strong></span>
          <div id="slider_flash_CubeDistance" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_CubeDistance" value = "<?php echo $__slider_flash_CubeDistance?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_CubeDistance').each(function(e){
              var val = <?php echo $__slider_flash_CubeDistance?>;
              var minValue = 5;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_CubeDistance"]' ).val( ui.value );
                  $( '#slider_flash_CubeDistance-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The distance between the cubes during transition. Values between 5 and 50 are recommended.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="general-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('General Configuration', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_flash_LoaderColor-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_LoaderColor"><strong><?php echo __('Loader Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_LoaderColor" id='slider_flash_LoaderColor' value="<?php echo $__slider_flash_LoaderColor?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of the cubes before the first image appears, also the color of the back sides of the cube, which become visible at some transition types', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InnerSideColor-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_InnerSideColor"><strong><?php echo __('Loader Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_InnerSideColor" id='slider_flash_InnerSideColor' value="<?php echo $__slider_flash_InnerSideColor?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of the inner sides of the cube when sliced', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_Autoplay-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_Autoplay"><strong><?php echo __('Autoplay', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">20</span>
          <span id="slider_flash_Autoplay-feedback" class="feedback"><strong><?php echo $__slider_flash_Autoplay?></strong></span>
          <div id="slider_flash_Autoplay" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_Autoplay" value = "<?php echo $__slider_flash_Autoplay?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_Autoplay').each(function(e){
              var val = <?php echo $__slider_flash_Autoplay?>;
              var minValue = 0;
              var maxValue = 20;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_Autoplay"]' ).val( ui.value );
                  $( '#slider_flash_Autoplay-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Number of seconds from one transition to another, if not stopped. Set to 0 to disable autoplay', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="Shadow-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Shadow', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_flash_SideShadowAlpha-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_SideShadowAlpha"><strong><?php echo __('Side Shadow Alpha', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_SideShadowAlpha-feedback" class="feedback"><strong><?php echo $__slider_flash_SideShadowAlpha?></strong></span>
          <div id="slider_flash_SideShadowAlpha" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_SideShadowAlpha" value = "<?php echo $__slider_flash_SideShadowAlpha?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_SideShadowAlpha').each(function(e){
              var val = <?php echo $__slider_flash_SideShadowAlpha?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_SideShadowAlpha"]' ).val( ui.value );
                  $( '#slider_flash_SideShadowAlpha-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Sides get darker when moved away from the front. This is the degree of darkness - 0 == no change, 1 == 100% black.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_DropShadowAlpha-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_DropShadowAlpha"><strong><?php echo __('Drop Shadow Alpha', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_DropShadowAlpha-feedback" class="feedback"><strong><?php echo $__slider_flash_DropShadowAlpha?></strong></span>
          <div id="slider_flash_DropShadowAlpha" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_DropShadowAlpha" value = "<?php echo $__slider_flash_DropShadowAlpha?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_DropShadowAlpha').each(function(e){
              var val = <?php echo $__slider_flash_DropShadowAlpha?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_DropShadowAlpha"]' ).val( ui.value );
                  $( '#slider_flash_DropShadowAlpha-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Alpha of the drop shadow - 0 == no shadow, 1 == opaque', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_DropShadowDistance-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_DropShadowDistance"><strong><?php echo __('Drop Shadow Distance', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">100</span>
          <span id="slider_flash_DropShadowDistance-feedback" class="feedback"><strong><?php echo $__slider_flash_DropShadowDistance?></strong></span>
          <div id="slider_flash_DropShadowDistance" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_DropShadowDistance" value = "<?php echo $__slider_flash_DropShadowDistance?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_DropShadowDistance').each(function(e){
              var val = <?php echo $__slider_flash_DropShadowDistance?>;
              var minValue = 0;
              var maxValue = 100;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_DropShadowDistance"]' ).val( ui.value );
                  $( '#slider_flash_DropShadowDistance-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Distance of the shadow from the bottom of the image', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_DropShadowScale-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_DropShadowScale"><strong><?php echo __('Drop Shadow Scale', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">100</span>
          <span id="slider_flash_DropShadowScale-feedback" class="feedback"><strong><?php echo $__slider_flash_DropShadowScale?></strong></span>
          <div id="slider_flash_DropShadowScale" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_DropShadowScale" value = "<?php echo $__slider_flash_DropShadowScale?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_DropShadowScale').each(function(e){
              var val = <?php echo $__slider_flash_DropShadowScale?>;
              var minValue = 0;
              var maxValue = 100;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_DropShadowScale"]' ).val( ui.value );
                  $( '#slider_flash_DropShadowScale-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('As the shadow is blurred, it appears wider that the actual image, when not resized. Thus it\'s a good idea to make it slightly smaller. - 1 would be no resizing at all.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_DropShadowBlurX-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_DropShadowBlurX"><strong><?php echo __('Drop Shadow Blur X', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">200</span>
          <span id="slider_flash_DropShadowBlurX-feedback" class="feedback"><strong><?php echo $__slider_flash_DropShadowBlurX?></strong></span>
          <div id="slider_flash_DropShadowBlurX" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_DropShadowBlurX" value = "<?php echo $__slider_flash_DropShadowBlurX?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_DropShadowBlurX').each(function(e){
              var val = <?php echo $__slider_flash_DropShadowBlurX?>;
              var minValue = 0;
              var maxValue = 200;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_DropShadowBlurX"]' ).val( ui.value );
                  $( '#slider_flash_DropShadowBlurX-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Blur of the drop shadow on the x-axis', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    <div id="slider_flash_DropShadowBlurY-option" class="rm_option rm_input slider_control yiw-deps">
      <label for="slider_flash_DropShadowBlurY"><strong><?php echo __('Drop Shadow Blur Y', $tpl_tdomain)?></strong></label>
      <div class="ui-slider">
        <span class="minCaption">0</span>
        <span class="maxCaption">200</span>
        <span id="slider_flash_DropShadowBlurY-feedback" class="feedback"><strong><?php echo $__slider_flash_DropShadowBlurY?></strong></span>
        <div id="slider_flash_DropShadowBlurY" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
          <input type="hidden" name="slider_flash_DropShadowBlurY" value = "<?php echo $__slider_flash_DropShadowBlurY?>" />
        </div>
      </div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          $('#slider_flash_DropShadowBlurY').each(function(e){
            var val = <?php echo $__slider_flash_DropShadowBlurY?>;
            var minValue = 0;
            var maxValue = 200;
            $(this).slider({
              value: val,
              min: minValue,
              max: maxValue,
              range: 'min',
              step: 1,
              slide: function( event, ui ) {
                $( 'input[name="slider_flash_DropShadowBlurY"]' ).val( ui.value );
                $( '#slider_flash_DropShadowBlurY-feedback strong' ).text( ui.value + '' );
              }
            });
          });
        });
      </script>

      <small><?php _e('Blur of the drop shadow on the y-axis', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
    </div>
    <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="Menu-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Menu', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_flash_MenuDistanceX-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_MenuDistanceX"><strong><?php echo __('Menu Distance X', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_MenuDistanceX-feedback" class="feedback"><strong><?php echo $__slider_flash_MenuDistanceX?></strong></span>
          <div id="slider_flash_MenuDistanceX" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_MenuDistanceX" value = "<?php echo $__slider_flash_MenuDistanceX?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_MenuDistanceX').each(function(e){
              var val = <?php echo $__slider_flash_MenuDistanceX?>;
              var minValue = 0;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_MenuDistanceX"]' ).val( ui.value );
                  $( '#slider_flash_MenuDistanceX-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Distance between two menu items (from center to center).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_MenuDistanceY-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_MenuDistanceY"><strong><?php echo __('Menu Distance Y', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_MenuDistanceY-feedback" class="feedback"><strong><?php echo $__slider_flash_MenuDistanceY?></strong></span>
          <div id="slider_flash_MenuDistanceY" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_MenuDistanceY" value = "<?php echo $__slider_flash_MenuDistanceY?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_MenuDistanceY').each(function(e){
              var val = <?php echo $__slider_flash_MenuDistanceY?>;
              var minValue = 0;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_MenuDistanceY"]' ).val( ui.value );
                  $( '#slider_flash_MenuDistanceY-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Distance of the menu from the bottom of the image.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_MenuColor1-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_MenuColor1"><strong><?php echo __('Menu Color Inactive Item', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_MenuColor1" id='slider_flash_MenuColor1' value="<?php echo $__slider_flash_MenuColor1?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of an inactive menu item.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_MenuColor2-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_MenuColor2"><strong><?php echo __('Menu Color Active Item', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_MenuColor2" id='slider_flash_MenuColor2' value="<?php echo $__slider_flash_MenuColor2?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of an active menu item.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_MenuColor3-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_MenuColor3"><strong><?php echo __('Menu Color Inner Circle od Active Item', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_MenuColor3" id='slider_flash_MenuColor3' value="<?php echo $__slider_flash_MenuColor3?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of the inner circle of an active menu item. Should equal the background color of the whole thing.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="Controls-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Controls', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_flash_ControlSize-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlSize"><strong><?php echo __('Control Size', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_ControlSize-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlSize?></strong></span>
          <div id="slider_flash_ControlSize" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlSize" value = "<?php echo $__slider_flash_ControlSize?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlSize').each(function(e){
              var val = <?php echo $__slider_flash_ControlSize?>;
              var minValue = 0;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlSize"]' ).val( ui.value );
                  $( '#slider_flash_ControlSize-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the controls, which appear on rollover (play, stop, info, link)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlDistance-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlDistance"><strong><?php echo __('Control Distance', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_ControlDistance-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlDistance?></strong></span>
          <div id="slider_flash_ControlDistance" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlDistance" value = "<?php echo $__slider_flash_ControlDistance?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlDistance').each(function(e){
              var val = <?php echo $__slider_flash_ControlDistance?>;
              var minValue = 0;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlDistance"]' ).val( ui.value );
                  $( '#slider_flash_ControlDistance-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Distance between the controls (from the borders).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlColor1-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_ControlColor1"><strong><?php echo __('Bg Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_ControlColor1" id='slider_flash_ControlColor1' value="<?php echo $__slider_flash_ControlColor1?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Background color of the controls', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlColor2-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_ControlColor2"><strong><?php echo __('Font Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_ControlColor2" id='slider_flash_ControlColor2' value="<?php echo $__slider_flash_ControlColor2?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Font color of the controls', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlAlpha-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlAlpha"><strong><?php echo __('Control Alpha', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_ControlAlpha-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlAlpha?></strong></span>
          <div id="slider_flash_ControlAlpha" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlAlpha" value = "<?php echo $__slider_flash_ControlAlpha?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlAlpha').each(function(e){
              var val = <?php echo $__slider_flash_ControlAlpha?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.05,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlAlpha"]' ).val( ui.value );
                  $( '#slider_flash_ControlAlpha-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Alpha of a control, when mouse is not over', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlAlphaOver-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlAlphaOver"><strong><?php echo __('Control Alpha Hover status', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_ControlAlphaOver-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlAlphaOver?></strong></span>
          <div id="slider_flash_ControlAlphaOver" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlAlphaOver" value = "<?php echo $__slider_flash_ControlAlphaOver?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlAlphaOver').each(function(e){
              var val = <?php echo $__slider_flash_ControlAlphaOver?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.05,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlAlphaOver"]' ).val( ui.value );
                  $( '#slider_flash_ControlAlphaOver-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Alpha of a control, when mouse is hover.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlsX-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlsX"><strong><?php echo __('Control X', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">960</span>
          <span id="slider_flash_ControlsX-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlsX?></strong></span>
          <div id="slider_flash_ControlsX" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlsX" value = "<?php echo $__slider_flash_ControlsX?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlsX').each(function(e){
              var val = <?php echo $__slider_flash_ControlsX?>;
              var minValue = 0;
              var maxValue = 960;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlsX"]' ).val( ui.value );
                  $( '#slider_flash_ControlsX-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('X-position of the point, which aligns the controls (measured from [0,0] of the image)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlsY-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_ControlsY"><strong><?php echo __('Control Y', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">350</span>
          <span id="slider_flash_ControlsY-feedback" class="feedback"><strong><?php echo $__slider_flash_ControlsY?></strong></span>
          <div id="slider_flash_ControlsY" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_ControlsY" value = "<?php echo $__slider_flash_ControlsY?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_ControlsY').each(function(e){
              var val = <?php echo $__slider_flash_ControlsY?>;
              var minValue = 0;
              var maxValue = 350;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_ControlsY"]' ).val( ui.value );
                  $( '#slider_flash_ControlsY-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Y-position of the point, which aligns the controls (measured from [0,0] of the image)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_ControlsAlign-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_flash_ControlsAlign"><strong><?php echo __('Controls Align', $tpl_tdomain)?></strong></label>
        <select name = "slider_flash_ControlsAlign" id='slider_flash_ControlsAlign'>
          <?php foreach ( $options_align as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_flash_ControlsAlign, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Type of alignment from the point [controlsX, controlsY]', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="Tooltip-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Tooltip', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_flash_TooltipHeight-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipHeight"><strong><?php echo __('Tooltip Height', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">200</span>
          <span id="slider_flash_TooltipHeight-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipHeight?></strong></span>
          <div id="slider_flash_TooltipHeight" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipHeight" value = "<?php echo $__slider_flash_TooltipHeight?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipHeight').each(function(e){
              var val = <?php echo $__slider_flash_TooltipHeight?>;
              var minValue = 0;
              var maxValue = 200;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipHeight"]' ).val( ui.value );
                  $( '#slider_flash_TooltipHeight-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Height of the tooltip surface in the menu', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipColor-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_TooltipColor"><strong><?php echo __('Tooltip Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_TooltipColor" id='slider_flash_TooltipColor' value="<?php echo $__slider_flash_TooltipColor?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of the tooltip surface in the menu', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipTextY-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipTextY"><strong><?php echo __('Tooltip Text Y', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">200</span>
          <span id="slider_flash_TooltipTextY-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipTextY?></strong></span>
          <div id="slider_flash_TooltipTextY" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipTextY" value = "<?php echo $__slider_flash_TooltipTextY?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipTextY').each(function(e){
              var val = <?php echo $__slider_flash_TooltipTextY?>;
              var minValue = 0;
              var maxValue = 200;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipTextY"]' ).val( ui.value );
                  $( '#slider_flash_TooltipTextY-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Y-distance of the tooltip text field from the top of the tooltip', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipTextColor-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_TooltipTextColor"><strong><?php echo __('Tooltip Text Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_TooltipTextColor" id='slider_flash_TooltipTextColor' value="<?php echo $__slider_flash_TooltipTextColor?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('Color of the tooltip text', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipMarginLeft-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipMarginLeft"><strong><?php echo __('Tooltip Margin Left', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">50</span>
          <span id="slider_flash_TooltipMarginLeft-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipMarginLeft?></strong></span>
          <div id="slider_flash_TooltipMarginLeft" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipMarginLeft" value = "<?php echo $__slider_flash_TooltipMarginLeft?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipMarginLeft').each(function(e){
              var val = <?php echo $__slider_flash_TooltipMarginLeft?>;
              var minValue = 0;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipMarginLeft"]' ).val( ui.value );
                  $( '#slider_flash_TooltipMarginLeft-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Margin of the text to the left end of the tooltip', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipMarginRight-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipMarginRight"><strong><?php echo __('Tooltip Margin Right', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">50</span>
          <span id="slider_flash_TooltipMarginRight-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipMarginRight?></strong></span>
          <div id="slider_flash_TooltipMarginRight" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipMarginRight" value = "<?php echo $__slider_flash_TooltipMarginRight?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipMarginRight').each(function(e){
              var val = <?php echo $__slider_flash_TooltipMarginRight?>;
              var minValue = 0;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipMarginRight"]' ).val( ui.value );
                  $( '#slider_flash_TooltipMarginRight-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Margin of the text to the right end of the tooltip', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipTextSharpness-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipTextSharpness"><strong><?php echo __('Tooltip Text Sharpness', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">-400</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_TooltipTextSharpness-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipTextSharpness?></strong></span>
          <div id="slider_flash_TooltipTextSharpness" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipTextSharpness" value = "<?php echo $__slider_flash_TooltipTextSharpness?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipTextSharpness').each(function(e){
              var val = <?php echo $__slider_flash_TooltipTextSharpness?>;
              var minValue = -400;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipTextSharpness"]' ).val( ui.value );
                  $( '#slider_flash_TooltipTextSharpness-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Sharpness of the tooltip text (-400 to 400)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_TooltipTextThickness-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_TooltipTextThickness"><strong><?php echo __('Tooltip Text Thickness', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">-400</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_TooltipTextThickness-feedback" class="feedback"><strong><?php echo $__slider_flash_TooltipTextThickness?></strong></span>
          <div id="slider_flash_TooltipTextThickness" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_TooltipTextThickness" value = "<?php echo $__slider_flash_TooltipTextThickness?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_TooltipTextThickness').each(function(e){
              var val = <?php echo $__slider_flash_TooltipTextThickness?>;
              var minValue = -400;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_TooltipTextThickness"]' ).val( ui.value );
                  $( '#slider_flash_TooltipTextThickness-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Thickness of the tooltip text (-400 to 400)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="Info-Box-flash-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Info Box', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_flash_InfoWidth-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_InfoWidth"><strong><?php echo __('Info Width', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">960</span>
          <span id="slider_flash_InfoWidth-feedback" class="feedback"><strong><?php echo $__slider_flash_InfoWidth?></strong></span>
          <div id="slider_flash_InfoWidth" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_InfoWidth" value = "<?php echo $__slider_flash_InfoWidth?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_InfoWidth').each(function(e){
              var val = <?php echo $__slider_flash_InfoWidth?>;
              var minValue = 0;
              var maxValue = 960;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_InfoWidth"]' ).val( ui.value );
                  $( '#slider_flash_InfoWidth-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The width of the info text field', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InfoBackground-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="slider_flash_InfoBackground"><strong><?php echo __('Info Background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "slider_flash_InfoBackground" id='slider_flash_InfoBackground' value="<?php echo $__slider_flash_InfoBackground?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
        </div>
        <small><?php _e('The background color of the info text field', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InfoBackgroundAlpha-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_InfoBackgroundAlpha"><strong><?php echo __('Info Background Alpha', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_InfoBackgroundAlpha-feedback" class="feedback"><strong><?php echo $__slider_flash_InfoBackgroundAlpha?></strong></span>
          <div id="slider_flash_InfoBackgroundAlpha" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_InfoBackgroundAlpha" value = "<?php echo $__slider_flash_InfoBackgroundAlpha?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_InfoBackgroundAlpha').each(function(e){
              var val = <?php echo $__slider_flash_InfoBackgroundAlpha?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.05,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_InfoBackgroundAlpha"]' ).val( ui.value );
                  $( '#slider_flash_InfoBackgroundAlpha-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The alpha of the background of the info text, the image shines through, when smaller than 1', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InfoMargin-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_InfoMargin"><strong><?php echo __('Info Margin', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">1</span>
          <span id="slider_flash_InfoMargin-feedback" class="feedback"><strong><?php echo $__slider_flash_InfoMargin?></strong></span>
          <div id="slider_flash_InfoMargin" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_InfoMargin" value = "<?php echo $__slider_flash_InfoMargin?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_InfoMargin').each(function(e){
              var val = <?php echo $__slider_flash_InfoMargin?>;
              var minValue = 0;
              var maxValue = 1;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.05,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_InfoMargin"]' ).val( ui.value );
                  $( '#slider_flash_InfoMargin-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The margin of the text field in the info section to all sides', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InfoTextSharpness-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_InfoTextSharpness"><strong><?php echo __('Info Text Sharpness', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">-400</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_InfoTextSharpness-feedback" class="feedback"><strong><?php echo $__slider_flash_InfoTextSharpness?></strong></span>
          <div id="slider_flash_InfoTextSharpness" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_InfoTextSharpness" value = "<?php echo $__slider_flash_InfoTextSharpness?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_InfoTextSharpness').each(function(e){
              var val = <?php echo $__slider_flash_InfoTextSharpness?>;
              var minValue = -400;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_InfoTextSharpness"]' ).val( ui.value );
                  $( '#slider_flash_InfoTextSharpness-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Sharpness of the Info text (-400 to 400)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_flash_InfoTextThickness-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_flash_InfoTextThickness"><strong><?php echo __('Info Text Thickness', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">-400</span>
          <span class="maxCaption">400</span>
          <span id="slider_flash_InfoTextThickness-feedback" class="feedback"><strong><?php echo $__slider_flash_InfoTextThickness?></strong></span>
          <div id="slider_flash_InfoTextThickness" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_flash_InfoTextThickness" value = "<?php echo $__slider_flash_InfoTextThickness?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_flash_InfoTextThickness').each(function(e){
              var val = <?php echo $__slider_flash_InfoTextThickness?>;
              var minValue = -400;
              var maxValue = 400;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_flash_InfoTextThickness"]' ).val( ui.value );
                  $( '#slider_flash_InfoTextThickness-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Thickness of the Info text (-400 to 400)', $tpl_tdomain)?></small><div class="clearfix"></div>
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