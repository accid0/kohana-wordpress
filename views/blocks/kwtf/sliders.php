<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\sliders.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section" id="config-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Select slider to show or configure', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_type-option" class="rm_option rm_input">
        <label for="slider_type"><strong><?php _e('Default Header image type', $tpl_tdomain)?></strong></label>
        <div class="rm_radio">
          <?php foreach( $sliders as $sid => $title):?>
          <label class="radio-inline">
            <input type="radio" name="slider_type" id="slider_type" value="<?php echo $sid?>" <?php checked( $__slider_type, $sid)?> /><?php echo $title?>
          </label>
          <?php endforeach?>
        </div>
        <small><?php _e('Select the default header type for homepage pages. <br />Note: for "Fixed Image", you can configure it on Appearance -> Header.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
    <!-- option -->
      <div id="slider_choosen-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_choosen"><strong><?php echo __('Configure slider.', $tpl_tdomain)?></strong></label>
        <select name = "slider_choosen" id='slider_choosen'>
          <?php foreach ( $sliders as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_choosen, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <span class="submit"><input type="submit" name='do' value="Configure" /></span>
        <small><?php _e('Choose a slider and save, to configure below your slider choosen.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_responsive-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_responsive"><strong><?php echo __('Responsive Behavior', $tpl_tdomain)?></strong></label>
        <select name = "slider_responsive" id='slider_responsive'>
          <?php foreach ( $option_responsive as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_responsive, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Say what you want to do when the website is loaded by lower resolution screen. <br /><br /><b>NB:</b> The option "Leave the slider" is available only for "elastic" slider, because is the only one that has a correct responsive behavior. If you use another slider type, the slider will be hidden in lower resolutions.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="elegant-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Elegant Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_elegant_effect-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_elegant_effect"><strong><?php echo __('Effect', $tpl_tdomain)?></strong></label>
        <select name = "slider_elegant_effect" id='slider_elegant_effect'>
          <?php foreach ( $options_effect as $option) : ?>
          <option value="<?php echo $option ?>" <?php selected( $__slider_elegant_effect, $option ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the effect you want for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_elegant_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_elegant_show_more_text' name = "slider_elegant_show_more_text" value="1"  <?php checked($__slider_elegant_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_elegant_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_elegant_more_text" id='slider_elegant_more_text' value = "<?php echo $__slider_elegant_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_easing-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_elegant_easing"><strong><?php echo __('Easing', $tpl_tdomain)?></strong></label>
        <select name = "slider_elegant_easing" id='slider_elegant_easing'>
          <?php foreach ( $options_easing as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_elegant_easing, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the easing for effect transition.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_elegant_speed"><strong><?php echo __('Speed (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_elegant_speed-feedback" class="feedback"><strong><?php echo $__slider_elegant_speed?></strong></span>
          <div id="slider_elegant_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_elegant_speed" value = "<?php echo $__slider_elegant_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_elegant_speed').each(function(e){
              var val = <?php echo $__slider_elegant_speed?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_elegant_speed"]' ).val( ui.value );
                  $( '#slider_elegant_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of transiction between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_timeout-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_elegant_timeout"><strong><?php echo __('Timeout (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">20</span>
          <span id="slider_elegant_timeout-feedback" class="feedback"><strong><?php echo $__slider_elegant_timeout?></strong></span>
          <div id="slider_elegant_timeout" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_elegant_timeout" value = "<?php echo $__slider_elegant_timeout?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_elegant_timeout').each(function(e){
              var val = <?php echo $__slider_elegant_timeout?>;
              var minValue = 0;
              var maxValue = 20;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_elegant_timeout"]' ).val( ui.value );
                  $( '#slider_elegant_timeout-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_caption_position-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_elegant_caption_position"><strong><?php echo __('Caption position', $tpl_tdomain)?></strong></label>
        <select name = "slider_elegant_caption_position" id='slider_elegant_caption_position'>
          <?php foreach ( $options_position as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_elegant_caption_position, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the position of caption.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elegant_caption_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_elegant_caption_speed"><strong><?php echo __('Caption (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_elegant_caption_speed-feedback" class="feedback"><strong><?php echo $__slider_elegant_caption_speed?></strong></span>
          <div id="slider_elegant_caption_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_elegant_caption_speed" value = "<?php echo $__slider_elegant_caption_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_elegant_caption_speed').each(function(e){
              var val = <?php echo $__slider_elegant_caption_speed?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_elegant_caption_speed"]' ).val( ui.value );
                  $( '#slider_elegant_caption_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of caption appearance.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="thumbnails-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Thumbnails Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_thumbnails_effect-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_thumbnails_effect"><strong><?php echo __('Effect', $tpl_tdomain)?></strong></label>
        <select name = "slider_thumbnails_effect" id='slider_thumbnails_effect'>
          <?php foreach ( $options_thumb as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_thumbnails_effect, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the effect you want for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_thumbnails_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_thumbnails_speed"><strong><?php echo __('Speed (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_thumbnails_speed-feedback" class="feedback"><strong><?php echo $__slider_thumbnails_speed?></strong></span>
          <div id="slider_thumbnails_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_thumbnails_speed" value = "<?php echo $__slider_thumbnails_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_thumbnails_speed').each(function(e){
              var val = <?php echo $__slider_thumbnails_speed?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_thumbnails_speed"]' ).val( ui.value );
                  $( '#slider_thumbnails_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of transiction between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_thumbnails_timeout-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_thumbnails_timeout"><strong><?php echo __('Timeout (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">20</span>
          <span id="slider_thumbnails_timeout-feedback" class="feedback"><strong><?php echo $__slider_thumbnails_timeout?></strong></span>
          <div id="slider_thumbnails_timeout" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_thumbnails_timeout" value = "<?php echo $__slider_thumbnails_timeout?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_thumbnails_timeout').each(function(e){
              var val = <?php echo $__slider_thumbnails_timeout?>;
              var minValue = 0;
              var maxValue = 20;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_thumbnails_timeout"]' ).val( ui.value );
                  $( '#slider_thumbnails_timeout-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_thumbnails_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_thumbnails_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_thumbnails_show_more_text' name = "slider_thumbnails_show_more_text" value="1"  <?php checked($__slider_thumbnails_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_thumbnails_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_thumbnails_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_thumbnails_more_text" id='slider_thumbnails_more_text' value = "<?php echo $__slider_thumbnails_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="cycle-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Cycle Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_cycle_easing-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_cycle_easing"><strong><?php echo __('Easing', $tpl_tdomain)?></strong></label>
        <select name = "slider_cycle_easing" id='slider_cycle_easing'>
          <?php foreach ( $options_easing as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_cycle_easing, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the easing for effect transition.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_cycle_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_cycle_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_cycle_show_more_text' name = "slider_cycle_show_more_text" value="1"  <?php checked($__slider_cycle_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_cycle_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_cycle_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_cycle_more_text" id='slider_cycle_more_text' value = "<?php echo $__slider_cycle_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_cycle_effect-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_cycle_effect"><strong><?php echo __('Effect', $tpl_tdomain)?></strong></label>
        <select name = "slider_cycle_effect" id='slider_cycle_effect'>
          <?php foreach ( $options_effect as $option) : ?>
          <option value="<?php echo $option ?>" <?php selected( $__slider_cycle_effect, $option ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the effect you want for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_cycle_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_cycle_speed"><strong><?php echo __('Speed (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_cycle_speed-feedback" class="feedback"><strong><?php echo $__slider_cycle_speed?></strong></span>
          <div id="slider_cycle_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_cycle_speed" value = "<?php echo $__slider_cycle_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_cycle_speed').each(function(e){
              var val = <?php echo $__slider_cycle_speed?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_cycle_speed"]' ).val( ui.value );
                  $( '#slider_cycle_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of transiction between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_cycle_timeout-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_cycle_timeout"><strong><?php echo __('Timeout (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">20</span>
          <span id="slider_cycle_timeout-feedback" class="feedback"><strong><?php echo $__slider_cycle_timeout?></strong></span>
          <div id="slider_cycle_timeout" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_cycle_timeout" value = "<?php echo $__slider_cycle_timeout?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_cycle_timeout').each(function(e){
              var val = <?php echo $__slider_cycle_timeout?>;
              var minValue = 0;
              var maxValue = 20;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_cycle_timeout"]' ).val( ui.value );
                  $( '#slider_cycle_timeout-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="layers-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Layers Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="slider_layers_choose-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_layers_choose"><strong><?php echo __('Select the slider', $tpl_tdomain)?></strong></label>
        <select name = "slider_layers_choose" id='slider_layers_choose'>
          <?php foreach ( $layer_sliders as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_layers_choose, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the slider you want to show in home page.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div class="rm_option rm_input rm_text" style="text-align:center;">
        <p><strong><?php _e('You can set this slider in <a href="%s">this page</a> and configure it, adding your slides in that page. Then, select above the slider that you can want to show in the homepage.')?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="minilayers-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Minilayers Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_minilayers_choose-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_minilayers_choose"><strong><?php echo __('Select the slider', $tpl_tdomain)?></strong></label>
        <select name = "slider_minilayers_choose" id='slider_minilayers_choose'>
          <?php foreach ( $layer_sliders as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_minilayers_choose, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the slider you want to show in home page. <b>We suggest to set the slider 608x271px size</b>', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div class="rm_option rm_input rm_text" style="text-align:center;">
        <p><strong><?php _e('You can set this slider in <a href="%s">this page</a> and configure it, adding your slides in that page. Then, select above the slider that you can want to show in the homepage.')?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_minilayers_static_title-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_minilayers_static_title"><strong><?php echo __('Title', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_minilayers_static_title" id='slider_minilayers_static_title' value = "<?php echo $__slider_minilayers_static_title?>">
        <small><?php _e('This title will be shown up to the text (see next box for text details).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_minilayers_static_text-option" class="rm_option rm_input rm_textarea yiw-deps">
        <label for="slider_minilayers_static_text"><strong><?php echo __('Text', $tpl_tdomain)?></strong></label>
        <textarea  type="textarea" name = "slider_minilayers_static_text" id='slider_minilayers_static_text'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__slider_minilayers_static_text?>
        </textarea>
        <small><?php _e('The static text of the slider.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_minilayers_static_short_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_minilayers_static_short_text"><strong><?php echo __('Short text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_minilayers_static_short_text" id='slider_minilayers_static_short_text' value = "<?php echo $__slider_minilayers_static_short_text?>">
        <small><?php _e('This text will be shown under the text (see previous box for text details).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="fixed-image-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Fixed Image Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div class="rm_option rm_input rm_text" style="text-align:center;">
        <p><strong><?php _e('You can set a static image in <a href="%s">Appareance -> Header</a>.')?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="nivo-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Nivo Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_nivo_pause-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_nivo_pause"><strong><?php echo __('Pause between slides (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">10</span>
          <span id="slider_nivo_pause-feedback" class="feedback"><strong><?php echo $__slider_nivo_pause?></strong></span>
          <div id="slider_nivo_pause" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_nivo_pause" value = "<?php echo $__slider_nivo_pause?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_nivo_pause').each(function(e){
              var val = <?php echo $__slider_nivo_pause?>;
              var minValue = 0;
              var maxValue = 10;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_nivo_pause"]' ).val( ui.value );
                  $( '#slider_nivo_pause-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_nivo_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_nivo_show_more_text' name = "slider_nivo_show_more_text" value="1"  <?php checked($__slider_nivo_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_nivo_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_nivo_more_text" id='slider_nivo_more_text' value = "<?php echo $__slider_nivo_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_nivo_speed"><strong><?php echo __('Animation speed (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">2</span>
          <span id="slider_nivo_speed-feedback" class="feedback"><strong><?php echo $__slider_nivo_speed?></strong></span>
          <div id="slider_nivo_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_nivo_speed" value = "<?php echo $__slider_nivo_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_nivo_speed').each(function(e){
              var val = <?php echo $__slider_nivo_speed?>;
              var minValue = 0;
              var maxValue = 2;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_nivo_speed"]' ).val( ui.value );
                  $( '#slider_nivo_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('The speed of the animation between two slide, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_effect-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_nivo_effect"><strong><?php echo __('Effect', $tpl_tdomain)?></strong></label>
        <select name = "slider_nivo_effect" id='slider_nivo_effect'>
          <?php foreach ( $options_nivo_efect as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_nivo_effect, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the effect you want for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_static_title-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_nivo_static_title"><strong><?php echo __('Title', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_nivo_static_title" id='slider_nivo_static_title' value = "<?php echo $__slider_nivo_static_title?>">
        <small><?php _e('This title will be shown up to the text (see next box for text details).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_text-option" class="rm_option rm_input rm_textarea yiw-deps">
        <label for="slider_nivo_text"><strong><?php echo __('Text', $tpl_tdomain)?></strong></label>
        <textarea  type="textarea" name = "slider_nivo_text" id='slider_nivo_text'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__slider_nivo_text?>
        </textarea>
        <small><?php _e('The static text of the slider.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_nivo_static_short_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_nivo_static_short_text"><strong><?php echo __('Short text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_nivo_static_short_text" id='slider_nivo_static_short_text' value = "<?php echo $__slider_nivo_static_short_text?>">
        <small><?php _e('This text will be shown under the text (see previous box for text details).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="unoslider-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Unoslider Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_unoslider_width-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_unoslider_width"><strong><?php echo __('Width', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_unoslider_width" id='slider_unoslider_width' value = "<?php echo $__slider_unoslider_width?>">
        <small><?php _e('Set the width of the slider', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_height-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_unoslider_height"><strong><?php echo __('Height', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_unoslider_height" id='slider_unoslider_height' value = "<?php echo $__slider_unoslider_height?>">
        <small><?php _e('Set the height of the slider', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_theme-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_theme"><strong><?php echo __('Theme slider', $tpl_tdomain)?></strong></label>
        <select name = "slider_unoslider_theme" id='slider_unoslider_theme'>
          <?php foreach ( $options_themes_unoslider as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_unoslider_theme, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the theme for the slider', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_indicator-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_indicator"><strong><?php _e('Indicator', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_indicator' name = "slider_unoslider_indicator" value="1"  <?php checked($__slider_unoslider_indicator, 1)?>/>
        </div>
        <small><?php _e('Say if you want to show the indicators', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_autohide_indicator-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_autohide_indicator"><strong><?php _e('Autohide Indicator', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_autohide_indicator' name = "slider_unoslider_autohide_indicator" value="1"  <?php checked($__slider_unoslider_autohide_indicator, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the indicators will hide automatically', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_navigation-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_navigation"><strong><?php _e('Navigation', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_navigation' name = "slider_unoslider_navigation" value="1"  <?php checked($__slider_unoslider_navigation, 1)?>/>
        </div>
        <small><?php _e('Say if you want to show the navigation', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_autohide_navigation-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_autohide_navigation"><strong><?php _e('Autohide Navigation', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_autohide_navigation' name = "slider_unoslider_autohide_navigation" value="1"  <?php checked($__slider_unoslider_autohide_navigation, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the navigation will hide automatically', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_enable_slideshow-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_enable_slideshow"><strong><?php _e('Enable Slideshow', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_enable_slideshow' name = "slider_unoslider_enable_slideshow" value="1"  <?php checked($__slider_unoslider_enable_slideshow, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the slider play automatically', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_pause_on_mouseover-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_pause_on_mouseover"><strong><?php _e('Pause on mouse over', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_pause_on_mouseover' name = "slider_unoslider_pause_on_mouseover" value="1"  <?php checked($__slider_unoslider_pause_on_mouseover, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the slider will pause when the mouse is over', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_continuous-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_continuous"><strong><?php _e('Continuous', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_continuous' name = "slider_unoslider_continuous" value="1"  <?php checked($__slider_unoslider_continuous, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the slider will restart again if it finish', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_timebar-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_timebar"><strong><?php _e('Timebar', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_timebar' name = "slider_unoslider_timebar" value="1"  <?php checked($__slider_unoslider_timebar, 1)?>/>
        </div>
        <small><?php _e('Say if you want to show the timebar', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_infinite_loop-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_infinite_loop"><strong><?php _e('Infinite Loop', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_infinite_loop' name = "slider_unoslider_infinite_loop" value="1"  <?php checked($__slider_unoslider_infinite_loop, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the loop must be infinitive', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_autostart-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_autostart"><strong><?php _e('Autostart', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_autostart' name = "slider_unoslider_autostart" value="1"  <?php checked($__slider_unoslider_autostart, 1)?>/>
        </div>
        <small><?php _e('Say if you want that the slider start automatically after loading', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_interval-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_unoslider_interval"><strong><?php echo __('Change interval (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">10</span>
          <span id="slider_unoslider_interval-feedback" class="feedback"><strong><?php echo $__slider_unoslider_interval?></strong></span>
          <div id="slider_unoslider_interval" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_unoslider_interval" value = "<?php echo $__slider_unoslider_interval?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_unoslider_interval').each(function(e){
              var val = <?php echo $__slider_unoslider_interval?>;
              var minValue = 0;
              var maxValue = 10;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_unoslider_interval"]' ).val( ui.value );
                  $( '#slider_unoslider_interval-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div class="rm_option rm_input rm_text" style="text-align:center;">
        <p><strong><?php _e('Blocks')?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_vertical_blocks-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_unoslider_vertical_blocks"><strong><?php echo __('Vertical blocks (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">30</span>
          <span id="slider_unoslider_vertical_blocks-feedback" class="feedback"><strong><?php echo $__slider_unoslider_vertical_blocks?></strong></span>
          <div id="slider_unoslider_vertical_blocks" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_unoslider_vertical_blocks" value = "<?php echo $__slider_unoslider_vertical_blocks?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_unoslider_vertical_blocks').each(function(e){
              var val = <?php echo $__slider_unoslider_vertical_blocks?>;
              var minValue = 0;
              var maxValue = 30;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_unoslider_vertical_blocks"]' ).val( ui.value );
                  $( '#slider_unoslider_vertical_blocks-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the number of blocks in vertical.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_horizontal_blocks-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_unoslider_horizontal_blocks"><strong><?php echo __('Horizontal blocks (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">30</span>
          <span id="slider_unoslider_horizontal_blocks-feedback" class="feedback"><strong><?php echo $__slider_unoslider_horizontal_blocks?></strong></span>
          <div id="slider_unoslider_horizontal_blocks" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_unoslider_horizontal_blocks" value = "<?php echo $__slider_unoslider_horizontal_blocks?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_unoslider_horizontal_blocks').each(function(e){
              var val = <?php echo $__slider_unoslider_horizontal_blocks?>;
              var minValue = 0;
              var maxValue = 30;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_unoslider_horizontal_blocks"]' ).val( ui.value );
                  $( '#slider_unoslider_horizontal_blocks-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the number of blocks in horizontal.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div class="rm_option rm_input rm_text" style="text-align:center;">
        <p><strong><?php _e('Transitions / Animation')?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_use_preset-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_use_preset"><strong><?php _e('Use preset', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_use_preset' name = "slider_unoslider_use_preset" value="1"  <?php checked($__slider_unoslider_use_preset, 1)?>/>
        </div>
        <small><?php _e('You can select an animation preset or configure a own configuration.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_preset-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_preset"><strong><?php echo __('Animation', $tpl_tdomain)?></strong></label>
        <select multiple size="15" name = "slider_unoslider_preset[]" id='slider_unoslider_preset'>
          <?php foreach ( $options_animations as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( in_array( $val, $__slider_unoslider_preset), TRUE ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('You can choose more than one animation to use randomly in the slider. If you want to use all randomly, don\'t select any effect.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_unoslider_speed"><strong><?php echo __('Transition Speed (ms)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">200</span>
          <span class="maxCaption">2000</span>
          <span id="slider_unoslider_speed-feedback" class="feedback"><strong><?php echo $__slider_unoslider_speed?></strong></span>
          <div id="slider_unoslider_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_unoslider_speed" value = "<?php echo $__slider_unoslider_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_unoslider_speed').each(function(e){
              var val = <?php echo $__slider_unoslider_speed?>;
              var minValue = 200;
              var maxValue = 2000;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_unoslider_speed"]' ).val( ui.value );
                  $( '#slider_unoslider_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of transiction between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_delay_blocks-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_unoslider_delay_blocks"><strong><?php echo __('Delay between blocks (ms)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">500</span>
          <span id="slider_unoslider_delay_blocks-feedback" class="feedback"><strong><?php echo $__slider_unoslider_delay_blocks?></strong></span>
          <div id="slider_unoslider_delay_blocks" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_unoslider_delay_blocks" value = "<?php echo $__slider_unoslider_delay_blocks?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_unoslider_delay_blocks').each(function(e){
              var val = <?php echo $__slider_unoslider_delay_blocks?>;
              var minValue = 0;
              var maxValue = 500;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 10,
                slide: function( event, ui ) {
                  $( 'input[name="slider_unoslider_delay_blocks"]' ).val( ui.value );
                  $( '#slider_unoslider_delay_blocks-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between the blocks.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_transition-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_transition"><strong><?php echo __('Transition', $tpl_tdomain)?></strong></label>
        <select name = "slider_unoslider_transition" id='slider_unoslider_transition'>
          <?php foreach ( $options_transitions as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_unoslider_transition, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the effect you want for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_variation-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_variation"><strong><?php echo __('Variation', $tpl_tdomain)?></strong></label>
        <select name = "slider_unoslider_variation" id='slider_unoslider_variation'>
          <?php foreach ( $options_variation as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_unoslider_variation, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the variation for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_pattern-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_pattern"><strong><?php echo __('Pattern', $tpl_tdomain)?></strong></label>
        <select name = "slider_unoslider_pattern" id='slider_unoslider_pattern'>
          <?php foreach ( $options_unoslider_pattern as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_unoslider_pattern, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the pattern for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_direction-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_unoslider_direction"><strong><?php echo __('Direction', $tpl_tdomain)?></strong></label>
        <select name = "slider_unoslider_direction" id='slider_unoslider_direction'>
          <?php foreach ( $options_direction as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_unoslider_direction, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the direction for slides transiction.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_unoslider_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_unoslider_show_more_text' name = "slider_unoslider_show_more_text" value="1"  <?php checked($__slider_unoslider_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_unoslider_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_unoslider_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_unoslider_more_text" id='slider_unoslider_more_text' value = "<?php echo $__slider_unoslider_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="elastic-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slider Elastic Settings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slider_elastic_height-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_elastic_height"><strong><?php echo __('Height of slider', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_elastic_height" id='slider_elastic_height' value = "<?php echo $__slider_elastic_height?>">
        <small><?php _e('Select the height of the slider, in base of the images that you want to add.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_autoplay-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_elastic_autoplay"><strong><?php _e('Autoplay', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_elastic_autoplay' name = "slider_elastic_autoplay" value="1"  <?php checked($__slider_elastic_autoplay, 1)?>/>
        </div>
        <small><?php _e('Select if you want that the slider change the slide automatically.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_animation-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="slider_elastic_animation"><strong><?php echo __('Animation', $tpl_tdomain)?></strong></label>
        <select name = "slider_elastic_animation" id='slider_elastic_animation'>
          <?php foreach ( $options_elastic_animation as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__slider_elastic_animation, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Animation types -> "sides" : new slides will slide in from left / right; "center": new slides will appear in the center.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_speed-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_elastic_speed"><strong><?php echo __('Speed (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">5</span>
          <span id="slider_elastic_speed-feedback" class="feedback"><strong><?php echo $__slider_elastic_speed?></strong></span>
          <div id="slider_elastic_speed" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_elastic_speed" value = "<?php echo $__slider_elastic_speed?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_elastic_speed').each(function(e){
              var val = <?php echo $__slider_elastic_speed?>;
              var minValue = 0;
              var maxValue = 5;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.1,
                slide: function( event, ui ) {
                  $( 'input[name="slider_elastic_speed"]' ).val( ui.value );
                  $( '#slider_elastic_speed-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the speed of transiction between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_timeout-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="slider_elastic_timeout"><strong><?php echo __('Timeout (s)', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">0</span>
          <span class="maxCaption">20</span>
          <span id="slider_elastic_timeout-feedback" class="feedback"><strong><?php echo $__slider_elastic_timeout?></strong></span>
          <div id="slider_elastic_timeout" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="slider_elastic_timeout" value = "<?php echo $__slider_elastic_timeout?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#slider_elastic_timeout').each(function(e){
              var val = <?php echo $__slider_elastic_timeout?>;
              var minValue = 0;
              var maxValue = 20;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                step: 0.5,
                slide: function( event, ui ) {
                  $( 'input[name="slider_elastic_timeout"]' ).val( ui.value );
                  $( '#slider_elastic_timeout-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Select the delay between slides, expressed in seconds.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_show_more_text-option" class="rm_option rm_input rm_on_off yiw-deps">
        <label for="slider_elastic_show_more_text"><strong><?php _e('Show more text', $tpl_tdomain)?></strong></label>
        <div class="iphone-check">
          <input class="on_off" type='checkbox' id='slider_elastic_show_more_text' name = "slider_elastic_show_more_text" value="1"  <?php checked($__slider_elastic_show_more_text, 1)?>/>
        </div>
        <small><?php _e('Select if you want to show more text link.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="slider_elastic_more_text-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="slider_elastic_more_text"><strong><?php echo __('More text', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "slider_elastic_more_text" id='slider_elastic_more_text' value = "<?php echo $__slider_elastic_more_text?>">
        <small><?php _e('Select the text for more link', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <?php if ( $configs):?>
  <div class="rm_section" id="slides-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php printf( __('Slides for %s slider', $tpl_tdomain) , $__slider_choosen)?>
      </h3>
      <span class="submit"><input type="submit" name='do' value="<?php echo __('Add/Edit slides', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="slides-option" class="rm_option rm_input rm_slides yiw-deps">
        <ul id="SlideShow">
          <?php foreach( $slides as $id => $field ) : ?>
          <li class="isSortable slide-item noNesting">
            <div class="sortItem">
              <table width="100%" cellspacing="0" cellpadding="3">
                <tbody>
                <tr>
                  <td class="handle">
                    <br/>
                    &nbsp;<strong><?php _e( 'Order', $tpl_tdomain ) ?>:</strong>
                    <input type="text" name="slides[<?php echo $id ?>][order]" class="item_order_value" value="<?php echo $id ?>" />
                    <div></div>
                  </td>
                  <td>
                    <?php if( isset( $field['content_type'] ) AND in_array('video', $configs) AND $field['content_type'] == 'video' ) : ?>
                    <div class="ss-ImageSample"><img src="<?php echo $uri_theme ?>/images/video-preview.png" /></div>
                    <?php else: ?>
                    <img class="ss-ImageSample" src="<?php echo isset( $field['image_url'] ) ? $field['image_url'] : '' ?>">
                    <?php endif ?>
                    <table width="100%" cellspacing="5" cellpadding="0">
                      <tbody>
                        <?php foreach( $configs as $config ) : switch( trim( $config ) ) {
                        case 'title' : ?>
                        <tr>
                          <td colspan="4">&nbsp;<strong><?php _e('Slide Title', $tpl_tdomain) ?>:</strong><br>
                            <input type="text" value="<?php echo isset( $field['slide_title'] ) ? stripslashes( $field['slide_title'] ) : '' ?>" alt="<?php _e('Slide Title', $tpl_tdomain) ?>" class="ss-ImageTitle" name="slides[<?php echo $id ?>][slide_title]">
                          </td>
                        </tr>
                          <?php break;
                        case 'caption' : ?>
                        <tr>
                          <td colspan="4">&nbsp;<strong><?php _e('Tooltip Content', $tpl_tdomain) ?></strong> <em class="small">(<?php _e('HTML Tags allowed', $tpl_tdomain) ?>)</em><br>
                            <textarea alt="<?php _e('Tooltip Content', $tpl_tdomain) ?>" class="ss-ImageDesc" name="slides[<?php echo $id ?>][tooltip_content]" type="text"><?php echo isset( $field['tooltip_content'] ) ? stripslashes( $field['tooltip_content'] ) : '' ?></textarea>
                          </td>
                        </tr>
                          <?php break;
                        case 'image-position' : ?>
                        <tr>
                          <td colspan="4">&nbsp;<strong><?php _e('Image position', $tpl_tdomain) ?></strong> <em class="small">(<?php _e('Values must be expressed in pixels', $tpl_tdomain) ?>)</em><br />
                            <div class="positions">
                              <div class="position-top position"><label><strong><?php _e('Top', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_image_position_top]" value="<?php echo isset( $field['slide_image_position_top'] ) ? $field['slide_image_position_top'] : '' ?>" /></label></div>
                              <div class="position-left position"><label><strong><?php _e('Left', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_image_position_left]" value="<?php echo isset( $field['slide_image_position_left'] ) ? $field['slide_image_position_left'] : '' ?>" /></label></div>
                              <div class="position-right position"><label><strong><?php _e('Right', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_image_position_right]" value="<?php echo isset( $field['slide_image_position_right'] ) ? $field['slide_image_position_right'] : '' ?>" /></label></div>
                              <div class="position-bottom position"><label><strong><?php _e('Bottom', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_image_position_bottom]" value="<?php echo isset( $field['slide_image_position_bottom'] ) ? $field['slide_image_position_bottom'] : '' ?>" /></label></div>
                            </div>
                          </td>
                        </tr>
                          <?php break;
                        case 'text-position' : ?>
                        <tr>
                          <td colspan="4">&nbsp;<strong><?php _e('Text position', $tpl_tdomain) ?></strong> <em class="small">(<?php _e('Values must be expressed in pixels', $tpl_tdomain) ?>)</em><br />
                            <div class="positions">
                              <div class="position-top position"><label><strong><?php _e('Top', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_text_position_top]" value="<?php echo isset( $field['slide_text_position_top'] ) ? $field['slide_text_position_top'] : '' ?>" /></label></div>
                              <div class="position-left position"><label><strong><?php _e('Left', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_text_position_left]" value="<?php echo isset( $field['slide_text_position_left'] ) ? $field['slide_text_position_left'] : '' ?>" /></label></div>
                              <div class="position-right position"><label><strong><?php _e('Right', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_text_position_right]" value="<?php echo isset( $field['slide_text_position_right'] ) ? $field['slide_text_position_right'] : '' ?>" /></label></div>
                              <div class="position-bottom position"><label><strong><?php _e('Bottom', $tpl_tdomain) ?></strong><br /><input type="text" name="slides[<?php echo $id ?>][slide_text_position_bottom]" value="<?php echo isset( $field['slide_text_position_bottom'] ) ? $field['slide_text_position_bottom'] : '' ?>" /></label></div>
                            </div>
                          </td>
                        </tr>
                          <?php break;
                        case 'color-picker' : ?>
                        <tr>
                          <td colspan="4">
                            <div class="rm_option rm_input rm_color">
                              <div class="double">
                                <label for="slides[<?php echo $id ?>][background_color]"><strong>Background color</strong></label>
                                <input name="slides[<?php echo $id ?>][background_color]" id="<?php yiw_option_name( $value['id'] ); ?>[<?php echo $id ?>][background_color]" type="text" value="<?php if ( isset( $field['background_color'] ) ) echo trim( stripslashes_deep( $field['background_color'] ) ); ?>" />
                                &nbsp;<img src="<?php echo $uri_theme ?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
                                <div class="clearfix"></div>
                              </div>
                              <small>This background color should be used when the image uploaded is smaller than 1920px</small><div class="clearfix"></div>
                              <div class="colorpicker"></div>
                              <div class="clearfix"></div>
                            </div>
                          </td>
                        </tr>
                          <?php break;
                        case 'image' : ?>
                        <tr>
                          <td align="left" colspan="3" class="rm_upload">
                            <label style="color:#333;float:none;display:inline;line-height:1em;">
                              &nbsp;<input type="radio" name="slides[<?php echo $id ?>][content_type]" id="slides-contentimage-<?php echo $id ?>" value="image"<?php if( !isset( $field['content_type'] ) OR ( $field['content_type'] == '' OR $field['content_type'] == 'image' ) ) : ?> checked=""<?php endif ?> />
                              <strong><?php _e('Image URL', $tpl_tdomain) ?>:</strong>
                            </label><br>
                            <input type="text" alt="<?php _e('Image URL', $tpl_tdomain) ?>" class="ss-Image" name="slides[<?php echo $id ?>][image_url]" value="<?php echo isset( $field['image_url'] ) ? $field['image_url'] : '' ?>" rel="slides-contentimage-<?php echo $id ?>" />
                            <input type="button" class="button-secondary" value="<?php _e('Upload Image', $tpl_tdomain) ?>" id="slides-upload" />
                            <input type="hidden" name="slides[<?php echo $id ?>][image_id]" value="<?php echo isset( $field['image_id'] ) ? $field['image_id'] : '' ?>" class="idattachment" />
                          </td>
                        </tr>
                          <?php break;
                        case 'video' : ?>
                        <tr>
                          <td align="left" colspan="3">
                            <label style="color:#333;float:none;display:inline;line-height:1em;">
                              &nbsp;<input type="radio" name="slides[<?php echo $id ?>][content_type]" id="slides-contentvideo-<?php echo $id ?>" value="video"<?php if( isset( $field['content_type'] ) && $field['content_type'] == 'video' ) : ?> checked=""<?php endif ?> />
                              <strong><?php _e('URL Video', $tpl_tdomain) ?>:</strong>
                            </label>
                            <em class="small">(<?php _e( 'url by Youtube or Vimeo', $tpl_tdomain ) ?>)</em><br>
                            <input type="text" alt="<?php _e('URL Video', $tpl_tdomain) ?>" name="slides[<?php echo $id ?>][url_video]" value="<?php if( isset( $field['url_video'] ) ) echo stripslashes_deep( $field['url_video'] ) ?>" rel="slides-contentvideo-<?php echo $id ?>" />
                          </td>
                        </tr>
                          <?php break;
                        default :

                      } endforeach; ?>
                      <tr>
                      <td colspan="2" align="left" style="white-space: nowrap;">
                        <?php if( in_array('link', $configs) ) : ?>
                        <br/>
                        <label style="color:#333">&nbsp;<strong><?php _e('Slide Link', $tpl_tdomain) ?>:</strong></label>

                        <?php $types = array(	'page' => __('page', $tpl_tdomain),
                                               'category' => __('category', $tpl_tdomain),
                          //'post' => __('post', 'yiw'),
                                               'url' => __('url', $tpl_tdomain),
                                               'none' => __('none', $tpl_tdomain) ) ?>

                        <?php
                        $check = FALSE;
                        foreach($types as $type => $title_type) :
                          if( ( ( isset( $field['link_type'] ) AND $field['link_type'] == $type ) OR $type == 'none' ) AND !$check )
                          {
                            $checked_class = 'checked ';
                            $checked = 'checked ';
                            $check = TRUE;
                          }
                          else
                          {
                            $checked_class = '';
                            $checked = '';
                          }
                          ?>
                          <label class="<?php echo $checked_class ?>radioLink">
                            <input type="radio" value="<?php echo $type ?>" id="slides-<?php echo $id . '-' . $type ?>" name="slides[<?php echo $id ?>][link_type]" <?php echo $checked ?>/>&nbsp;<?php echo ucfirst($title_type) ?>
                          </label>
                          <?php endforeach ?>

                        <?php foreach($types as $type => $title_type) :
                          if( isset( $field['link_type'] ) AND $field['link_type'] == $type )
                          {
                            $checked = 'style="display: block;" ';
                          }
                          else
                          {
                            $checked = '';
                          }

                          switch($type) {

                            case 'page' : ?>
                              <?php $pags = get_pages('orderby=name&use_desc_for_title=1&hierarchical=1&style=0&hide_empty=0'); ?>
                              <select <?php echo $checked ?>name="slides[<?php echo $id ?>][link_page]" class="ss-Link <?php echo $type ?>">
                                <option value=""><?php _e('Choose a page...', $tpl_tdomain) ?></option>
                                <?php foreach( $pags as $page ) : if ( ! isset( $field['link_page']  )) $field['link_page'] = false; ?>
                                <option value="<?php echo $page->ID ?>"<?php selected( $page->ID, $field['link_page'] ) ?>><?php echo $page->post_title ?></option>
                                <?php endforeach ?>
                              </select>
                              <?php break; ?>

                              <?php case 'category' : ?>
                            <select <?php echo $checked ?>name="slides[<?php echo $id ?>][link_category]" class="ss-Link <?php echo $type ?>">
                              <?php foreach( $wp_cats as $slug => $cat ) : if ( ! isset( $field['link_category'] ) ) $field['link_category'] = false; ?>
                              <option value="<?php echo $slug ?>"<?php selected( $slug, $field['link_category'] ) ?>><?php echo $cat ?></option>
                              <?php endforeach ?>
                            </select>
                            <?php break; ?>

                            <?php case 'url' : ?>
                            <input type="text" <?php echo $checked ?>class="ss-Link <?php echo $type ?>" value="<?php echo isset( $field['link_url'] ) ? $field['link_url'] : '' ?>" name="slides[<?php echo $id ?>][link_url]" />
                            <?php break; ?>

                            <?php } endforeach; ?>
                        <?php endif ?>
                        <?php if( in_array('tooltip', $configs) ) : ?>
                      <tr>
                        <td colspan="4">&nbsp;<strong><?php _e('Extra Tooltip', $tpl_tdomain) ?></strong> <br/><em class="small">(<?php _e('The tooltip that you can add inside the image. Leave empty the content to not use', $tpl_tdomain) ?>)</em><br>
                          <textarea alt="<?php _e('Extra Tooltip', $tpl_tdomain) ?>" class="ss-ImageDesc" name="slides[<?php echo $id ?>][extra_tooltip_content]" type="text"><?php echo isset( $field['extra_tooltip_content'] ) ? stripslashes( $field['extra_tooltip_content'] ) : '' ?></textarea>
                          <br/><strong>Image</strong>: <input type="text" name="slides[<?php echo $id ?>][extra_tooltip_image]" value="<?php echo isset( $field['extra_tooltip_image'] ) ? stripslashes( $field['extra_tooltip_image'] ) : '' ?>" style="width:194px;">
                          <input type="button" class="upload-button button-secondary" value="Upload Image" />
                          <br/><strong>URL</strong>: <input type="text" name="slides[<?php echo $id ?>][extra_tooltip_url]" value="<?php echo isset( $field['extra_tooltip_url'] ) ? stripslashes( $field['extra_tooltip_url'] ) : '' ?>" style="width:306px;">
                          <strong>Coords</strong>: x <input type="text" name="slides[<?php echo $id ?>][extra_tooltip_x_pos]" value="<?php echo isset( $field['extra_tooltip_x_pos'] ) ? stripslashes( $field['extra_tooltip_x_pos'] ) : '' ?>" style="width:40px;">
                          y <input type="text" name="slides[<?php echo $id ?>][extra_tooltip_y_pos]" value="<?php echo isset( $field['extra_tooltip_y_pos'] ) ? stripslashes( $field['extra_tooltip_y_pos'] ) : '' ?>" style="width:40px;">
                        </td>
                      </tr>
                        <?php endif ?>
                      </td>
                      <td width="90" align="center" class="delete-button">
                        <div class="button-secondary delete-item"><a style='background: transparent' href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Delete Slide', $tpl_tdomain) ?>&key=<?php echo $id ?>"><?php _e('Delete', $tpl_tdomain) ?></a></div>
                      </td>
                      </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </li>
          <?php endforeach ?>
        </ul>
        <p>
          <input class="button-secondary add-slide-button hide-if-no-js" type="button" value="<?php _e( 'Add Slide', $tpl_tdomain ) ?>" />
          <input class="button-secondary hide-if-js" type="submit" value="<?php _e( 'Add/Edit Slide', $tpl_tdomain ) ?>" />
          <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e( 'Delete Slide', $tpl_tdomain ) ?>&key=slides" class="button-secondary"><?php _e( 'Delete all slides', $tpl_tdomain ) ?></a>
        </p>
        <div class="fade_color"></div>
      </div>
      <script type="text/javascript">
        jQuery(document).ready(function($){

          $('#slides-option .add-slide-button').click(function(){
            var empty_slide = $('#SlideShow li:last-child').clone();
            var last_index = parseInt( $('#SlideShow li:last-child input[name*="[order]"]').val() );
            //alert(last_index);

            // empty all inputs
            $('input:not(input[name*="[order]"], input[type="button"], input[type="checkbox"], input[type="radio"]), textarea', empty_slide).val('');
            // change the id of the inputs name
            var pattern_inputs = /\[(\d+)\]/;
            $('input[name*="slides"], textarea[name*="slides"], select[name*="slides"]', empty_slide).each(function(){
              var name = $(this).attr('name');
              var name_match = name.match( pattern_inputs );
              var new_name = name.replace(pattern_inputs, "["+(parseInt(name_match[1])+1)+"]");
              $(this).attr('name', new_name);
            });
            // delete preview image
            $('.ss-ImageSample', empty_slide).attr('src', '');

            empty_slide.appendTo('#SlideShow');
            optionsTab.redraw();
            $('#SlideShow li:last-child input[name*="[order]"]').val(last_index+1);

            return false;
          });
        });
      </script>
      <!-- option -->
    </div>
  </div>
  <?php endif?>
</div>