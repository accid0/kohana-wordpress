<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\colors-settings.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section section_effect" id="body-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Body Background', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="body_bg_type-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="body_bg_type"><strong><?php echo __('Body Background', $tpl_tdomain)?></strong></label>
        <select name = "body_bg_type" id='body_bg_type'>
          <?php foreach ( $options_color as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__body_bg_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the type of body background.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="body_bg_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="body_bg_color"><strong><?php echo __('Body bg Color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "body_bg_color" id='body_bg_color' value="<?php echo $__body_bg_color?>">
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of body.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="body_bg_image-option" class="rm_option rm_input rm_select yiw-deps rm_with_preview rm_with_bg_preview">
        <label for="body_bg_image"><strong><?php echo __('Body bg Image', $tpl_tdomain)?></strong></label>
        <select name = "body_bg_image" id='body_bg_image'>
          <?php foreach ( $options_background as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__body_bg_image, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Select the image of body background or if you want to upload a own bg image.<br />NOTE: on the preview, to update the color informazione, you need to click on the preview, so the color will be updated with that selected above.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
        <div class="preview">
          <div class="img" style="background-color:<?php echo $__body_bg_color?>;background-image:url('<?php echo $uri_theme?>/<?php echo $__body_bg_image?>');background-position:top center;">
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var select = $('#body_bg_image');
            var text_color = $('#body_bg_color');
            var preview = $('#body_bg_image-option .preview');
            preview.css('cursor', 'pointer').attr('title', 'Click here to update the color selected above');
            select.change(function(){
              var value = $(this).val();
              if ( value != 'custom' ) {
                $('.img', preview).css({'background-image':'url(<?php echo $uri_theme?>/'+value+')'});
                preview.show();
              }
              else {
                preview.hide();
              }
            });
            preview.click(function(){
              var value = text_color.val();
              $('.img', preview).css({'background-color':value});
            });
          });
        </script>
      </div>
      <!-- option -->
      <div id="body_bg_image_custom-option" class="rm_option rm_input rm_upload yiw-deps">
        <label for="body_bg_image_custom"><strong><?php echo __('Body bg Image Custom', $tpl_tdomain)?></strong></label>
        <div style="float:left; width:280px">
          <input type="text" name = "body_bg_image_custom" id='body_bg_image_custom' value="<?php echo (!empty($__body_bg_image_custom))?$uri_theme . '/' . $__body_bg_image_custom:''?>">
          <input type="button" value="Upload Image" id="body_bg_image_custom-button" />
        </div>
        <small><?php _e('Upload your background image.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="body_bg_image_custom_position-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="body_bg_image_custom_position"><strong><?php echo __('Body bg Image Position', $tpl_tdomain)?></strong></label>
        <select name = "body_bg_image_custom_position" id='body_bg_image_custom_position'>
          <?php foreach ( $options_position as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__body_bg_image_custom_position, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('The position attribute of body image uploaded above.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="body_bg_image_custom_repeate-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="body_bg_image_custom_repeate"><strong><?php echo __('Body bg Image Repeat', $tpl_tdomain)?></strong></label>
        <select name = "body_bg_image_custom_repeate" id='body_bg_image_custom_repeate'>
          <?php foreach ( $options_repeate as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__body_bg_image_custom_repeate, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('The repeat attribute of body image uploaded above.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="body_bg_image_custom_attachment-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="body_bg_image_custom_attachment"><strong><?php echo __('Body bg Image Attachment', $tpl_tdomain)?></strong></label>
        <select name = "body_bg_image_custom_attachment" id='body_bg_image_custom_attachment'>
          <?php foreach ( $options_atachment as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__body_bg_image_custom_attachment, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('The attachment of the background image.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
    </div>
  </div>
  <div class="rm_section section_effect" id="topbar-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Topbar', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_topbar_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_topbar_bg"><strong><?php echo __('Background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_topbar_bg" id='colors_topbar_bg'
                 value="<?php echo $__colors_topbar_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of the topbar. (default #333333)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_topbar_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_topbar_text"><strong><?php echo __('Text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_topbar_text" id='colors_topbar_text'
                 value="<?php echo $__colors_topbar_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of the topbar. (default #CCCACA)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_topbar_links-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_topbar_links"><strong><?php echo __('Links color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_topbar_links" id='colors_topbar_links'
                 value="<?php echo $__colors_topbar_links?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the links color of the topbar. (default #ffffff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_topbar_links_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_topbar_links_hover"><strong><?php echo __('Links color (hover)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_topbar_links_hover" id='colors_topbar_links_hover'
                 value="<?php echo $__colors_topbar_links_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the links color of the topbar, in hover state. (default #ffffff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="logo-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Logo', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_logo_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_logo_color"><strong><?php echo __('Logo color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_logo_color" id='colors_logo_color'
                 value="<?php echo $__colors_logo_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of the logo. (default #1e1e1e)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_logo_description_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_logo_description_color"><strong><?php echo __('Logo description', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_logo_description_color" id='colors_logo_description_color'
                 value="<?php echo $__colors_logo_description_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of the description below the logo. (default #545252)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="nav-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Main Menu', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_nav_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_nav_color"><strong><?php echo __('List Items color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_nav_color" id='colors_nav_color'
                 value="<?php echo $__colors_nav_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of each item in main menu. (default #010101)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_nav_color_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_nav_color_hover"><strong><?php echo __('List Items color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_nav_color_hover" id='colors_nav_color_hover'
                 value="<?php echo $__colors_nav_color_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of each item in main menu when the hover event is triggered. (default #da7906)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_nav_color_active-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_nav_color_active"><strong><?php echo __('List Items color (active effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_nav_color_active" id='colors_nav_color_active'
                 value="<?php echo $__colors_nav_color_active?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of each item in main menu when the item is active. (default #da7906)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_subnav_bg_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_subnav_bg_color"><strong><?php echo __('Submenu background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_subnav_bg_color" id='colors_subnav_bg_color'
                 value="<?php echo $__colors_subnav_bg_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color the submenu. (default #ffffff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_subnav_border_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_subnav_border_color"><strong><?php echo __('Submenu border color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_subnav_border_color" id='colors_subnav_border_color'
                 value="<?php echo $__colors_subnav_border_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color of the submenu. (default #CFCFCF)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_subnav_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_subnav_color"><strong><?php echo __('Submenu list items color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_subnav_color" id='colors_subnav_color'
                 value="<?php echo $__colors_subnav_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of each item in submenu. (default #010101)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_subnav_color_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_subnav_color_hover"><strong><?php echo __('Submenu list items color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_subnav_color_hover" id='colors_subnav_color_hover'
                 value="<?php echo $__colors_subnav_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of each item in submenu when the hover event is triggered. (default #da7906)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="headings-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Headings', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_h1-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h1"><strong><?php echo __('Heading 1', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h1" id='colors_h1'
                 value="<?php echo $__colors_h1?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 1 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h2-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h2"><strong><?php echo __('Heading 2', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h2" id='colors_h2'
                 value="<?php echo $__colors_h2?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 2 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h3-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h3"><strong><?php echo __('Heading 3', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h3" id='colors_h3'
                 value="<?php echo $__colors_h3?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 3 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h4-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h4"><strong><?php echo __('Heading 4', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h4" id='colors_h4'
                 value="<?php echo $__colors_h4?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 4 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h5-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h5"><strong><?php echo __('Heading 5', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h5" id='colors_h5'
                 value="<?php echo $__colors_h5?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 5 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h6-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h6"><strong><?php echo __('Heading 6', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h6" id='colors_h6'
                 value="<?php echo $__colors_h6?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for Heading 6 items. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_h_highlightes-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_h_highlightes"><strong><?php echo __('Heading highlightes', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_h_highlightes" id='colors_h_highlightes'
                 value="<?php echo $__colors_h_highlightes?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for titles highlightes. (default #A05F02)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_sidebar_footer_titles-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_sidebar_footer_titles"><strong><?php echo __('Sidebar & Footer titles', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_sidebar_footer_titles" id='colors_sidebar_footer_titles'
                 value="<?php echo $__colors_sidebar_footer_titles?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for titles in sidebar and footer sections. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="slogan-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Slogan', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_slogan-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_slogan"><strong><?php echo __('Slogan', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_slogan" id='colors_slogan'
                 value="<?php echo $__colors_slogan?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for slogan. (default #030303)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_subslogan-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_subslogan"><strong><?php echo __('Subslogan', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_subslogan" id='colors_subslogan'
                 value="<?php echo $__colors_subslogan?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for title below the main slogan. (default #c86f06)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="paragraphs-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Paragraphs and links', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_p-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_p"><strong><?php echo __('Paragraphs', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_p" id='colors_p'
                 value="<?php echo $__colors_p?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for paragraphs. (default #545252)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_a-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_a"><strong><?php echo __('Links', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_a" id='colors_a'
                 value="<?php echo $__colors_a?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for links. (default #AB5705)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_a_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_a_hover"><strong><?php echo __('Links (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_a_hover" id='colors_a_hover'
                 value="<?php echo $__colors_a_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for links (hover effect). (default #1f1f1f)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_sidebar_a-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_sidebar_a"><strong><?php echo __('Sidebar Links', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_sidebar_a" id='colors_sidebar_a'
                 value="<?php echo $__colors_sidebar_a?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for links in the sidebar. (default #1f1f1f)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_sidebar_a_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_sidebar_a_hover"><strong><?php echo __('Sidebar Links (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_sidebar_a_hover" id='colors_sidebar_a_hover'
                 value="<?php echo $__colors_sidebar_a_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for links in the sidebar (hover effect). (default #AB5705)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="store-products-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Store list products', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="colors_store_products_offer_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_offer_text"><strong><?php echo __('On sale text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_offer_text" id='colors_store_products_offer_text'
                 value="<?php echo $__colors_store_products_offer_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of the "On Sale" baloon.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_offer_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_offer_bg"><strong><?php echo __('On sale background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_offer_bg" id='colors_store_products_offer_bg'
                 value="<?php echo $__colors_store_products_offer_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of the "On Sale" baloon.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_label_products_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_label_products_bg"><strong><?php echo __('Label products item background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_label_products_bg" id='colors_store_products_label_products_bg'
                 value="<?php echo $__colors_store_products_label_products_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The background color of the label inside the thumbnails of products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_label_products_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_label_products_text"><strong><?php echo __('Label products item text', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_label_products_text" id='colors_store_products_label_products_text'
                 value="<?php echo $__colors_store_products_label_products_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The text color of the label inside the thumbnails of products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_add_to_cart_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_add_to_cart_bg"><strong><?php echo __('Button add to cart background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_add_to_cart_bg" id='colors_store_products_button_add_to_cart_bg'
                 value="<?php echo $__colors_store_products_button_add_to_cart_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for purchase on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_details_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_details_bg"><strong><?php echo __('Button details background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_details_bg" id='colors_store_products_button_details_bg'
                 value="<?php echo $__colors_store_products_button_details_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for product details on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_add_to_cart_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_add_to_cart_text"><strong><?php echo __('Button add to cart text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_add_to_cart_text" id='colors_store_products_button_add_to_cart_text'
                 value="<?php echo $__colors_store_products_button_add_to_cart_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for purchase on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_details_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_details_text"><strong><?php echo __('Button details text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_details_text" id='colors_store_products_button_details_text'
                 value="<?php echo $__colors_store_products_button_details_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for product details on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_add_to_cart_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_add_to_cart_hover"><strong><?php echo __('Button add to cart background hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_add_to_cart_hover" id='colors_store_products_button_add_to_cart_hover'
                 value="<?php echo $__colors_store_products_button_add_to_cart_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for purchase on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_details_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_details_hover"><strong><?php echo __('Button details background hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_details_hover" id='colors_store_products_button_details_hover'
                 value="<?php echo $__colors_store_products_button_details_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for product details on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_add_to_cart_text_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_add_to_cart_text_hover"><strong><?php echo __('Button add to cart text color hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_add_to_cart_text_hover" id='colors_store_products_button_add_to_cart_text_hover'
                 value="<?php echo $__colors_store_products_button_add_to_cart_text_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for purchase on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_products_button_details_text_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_products_button_details_text_hover"><strong><?php echo __('Button details text color hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_products_button_details_text_hover" id='colors_store_products_button_details_text_hover'
                 value="<?php echo $__colors_store_products_button_details_text_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The button for product details on list products.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="store-buttons-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Store general buttons', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_store_buttons_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_bg"><strong><?php echo __('General button background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_bg" id='colors_store_buttons_bg'
                 value="<?php echo $__colors_store_buttons_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_color"><strong><?php echo __('General button text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_color" id='colors_store_buttons_color'
                 value="<?php echo $__colors_store_buttons_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_border-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_border"><strong><?php echo __('General button border color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_border" id='colors_store_buttons_border'
                 value="<?php echo $__colors_store_buttons_border?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color of buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_bg_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_bg_hover"><strong><?php echo __('General button background (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_bg_hover" id='colors_store_buttons_bg_hover'
                 value="<?php echo $__colors_store_buttons_bg_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_color_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_color_hover"><strong><?php echo __('General button text color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_color_hover" id='colors_store_buttons_color_hover'
                 value="<?php echo $__colors_store_buttons_color_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_border_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_border_hover"><strong><?php echo __('General button border color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_border_hover" id='colors_store_buttons_border_hover'
                 value="<?php echo $__colors_store_buttons_border_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color of buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_bg"><strong><?php echo __('General alternative button background', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_bg" id='colors_store_buttons_alt_bg'
                 value="<?php echo $__colors_store_buttons_alt_bg?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of alternative buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_color"><strong><?php echo __('General alternative button text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_color" id='colors_store_buttons_alt_color'
                 value="<?php echo $__colors_store_buttons_alt_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of alternative buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_border-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_border"><strong><?php echo __('General alternative button border color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_border" id='colors_store_buttons_alt_border'
                 value="<?php echo $__colors_store_buttons_alt_border?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color of alternative buttons.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_bg_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_bg_hover"><strong><?php echo __('General alternative button background (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_bg_hover" id='colors_store_buttons_alt_bg_hover'
                 value="<?php echo $__colors_store_buttons_alt_bg_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color of alternative buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_color_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_color_hover"><strong><?php echo __('General alternative button text color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_color_hover" id='colors_store_buttons_alt_color_hover'
                 value="<?php echo $__colors_store_buttons_alt_color_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of alternative buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_buttons_alt_border_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_buttons_alt_border_hover"><strong><?php echo __('General alternative button border color (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_buttons_alt_border_hover" id='colors_store_buttons_alt_border_hover'
                 value="<?php echo $__colors_store_buttons_alt_border_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color of alternative buttons, when the mouse is over.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="tore-single-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Store product detail page', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_store_single_price_cart_bg-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_single_price_cart_bg"><strong><?php echo __('Price background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_single_price_cart_bg" id='colors_store_single_price_cart_bg'
                 value="<?php echo $__colors_store_buttons_alt_border_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of background color of the ticket of price, in the layout single product page.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_store_single_price_cart_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_store_single_price_cart_text"><strong><?php echo __('Price text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_store_single_price_cart_text" id='colors_store_single_price_cart_text'
                 value="<?php echo $__colors_store_single_price_cart_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of text color of the ticket of price, in the layout single product page.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="blog-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Blog', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_blog_title-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_blog_title"><strong><?php echo __('Blog title', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_blog_title" id='colors_blog_title'
                 value="<?php echo $__colors_blog_title?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for blog titles. (default #2B2828)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_blog_title_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_blog_title_hover"><strong><?php echo __('Blog title (hover effect)', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_blog_title_hover" id='colors_blog_title_hover'
                 value="<?php echo $__colors_blog_title_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color for blog titles, on the mouse over. (default #000000)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="footer-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Footer', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_footer_background-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_background"><strong><?php echo __('Footer section background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_background" id='colors_footer_background'
                 value="<?php echo $__colors_footer_background?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color for the footer. (default #fff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_inner_background-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_inner_background"><strong><?php echo __('Footer section content background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_inner_background" id='colors_footer_inner_background'
                 value="<?php echo $__colors_footer_inner_background?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color for the footer contents. (default #fff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_inner_border-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_inner_border"><strong><?php echo __('Footer section border top', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_inner_border" id='colors_footer_inner_border'
                 value="<?php echo $__colors_footer_inner_border?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color for the footer section. (default #cfcfcf)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_titles-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_titles"><strong><?php echo __('Color titles', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_titles" id='colors_footer_color_titles'
                 value="<?php echo $__colors_footer_color_titles?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of all titles of the footer (default #232221).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_text-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_text"><strong><?php echo __('Color text', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_text" id='colors_footer_color_text'
                 value="<?php echo $__colors_footer_color_text?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of text (default #545252)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_links-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_links"><strong><?php echo __('Color links', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_links" id='colors_footer_color_links'
                 value="<?php echo $__colors_footer_color_links?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of all links, of the footer (default #9A6614).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_links_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_links_hover"><strong><?php echo __('Color links hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_links_hover" id='colors_footer_color_links_hover'
                 value="<?php echo $__colors_footer_color_links_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of all links in hover state, of the footer (default #6c6c6c).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_menues_links-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_menues_links"><strong><?php echo __('Color links menues', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_menues_links" id='colors_footer_color_menues_links'
                 value="<?php echo $__colors_footer_color_menues_links?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of links of menues, of the footer (default #545252).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_footer_color_menues_links_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_footer_color_menues_links_hover"><strong><?php echo __('Color links menues hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_footer_color_menues_links_hover" id='colors_footer_color_menues_links_hover'
                 value="<?php echo $__colors_footer_color_menues_links_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('The color of links of menues in hover state, of the footer (default #9A6614).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="copyright-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Copyright', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php _e('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="colors_copyright_background-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_background"><strong><?php echo __('Copyright section background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_background" id='colors_copyright_background'
                 value="<?php echo $__colors_copyright_background?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color for the copyright section. (default #fff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_copyright_inner_background-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_inner_background"><strong><?php echo __('Copyright section content background color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_inner_background" id='colors_copyright_inner_background'
                 value="<?php echo $__colors_copyright_inner_background?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the background color for the copyright section contents. (default #fff)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_copyright_inner_border-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_inner_border"><strong><?php echo __('Copyright section border top', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_inner_border" id='colors_copyright_inner_border'
                 value="<?php echo $__colors_copyright_inner_border?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the border color for the copyright section. (default #cfcfcf)', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_copyright_text_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_text_color"><strong><?php echo __('Text color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_text_color" id='colors_copyright_text_color'
                 value="<?php echo $__colors_copyright_text_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the text color of the copyright section.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_copyright_links_color-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_links_color"><strong><?php echo __('Links color', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_links_color" id='colors_copyright_links_color'
                 value="<?php echo $__colors_copyright_links_color?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of the links on the copyright section.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="colors_copyright_links_color_hover-option" class="rm_option rm_input rm_color yiw-deps">
        <label for="colors_copyright_links_color_hover"><strong><?php echo __('Links color hover', $tpl_tdomain)?></strong></label>
        <div class="double">
          <input type="text" name = "colors_copyright_links_color_hover" id='colors_copyright_links_color_hover'
                 value="<?php echo $__colors_copyright_links_color_hover?>"/>
          &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
          <div class="clearfix"></div>
        </div>
        <small><?php _e('Select the color of the links, in state hover, on the copyright section.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="colorpicker"></div>
        <div class="clearfix"></div>
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