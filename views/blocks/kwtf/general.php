<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\general.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
      <div class="rm_section" id="responsive-section">
        <div class="rm_title">
          <h3>
          <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
          <?php echo __('Activate responsive', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="responsive-option" class="rm_option rm_input rm_on_off">
            <label for="responsive"><strong><?php _e('Activate responsive', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='responsive' name = "responsive" value="1"  checked = "<?php echo ($__responsive)? 'checked':'';?>"/>
            </div>
            <small><?php _e('Select if you want to active or not the responsive', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="general-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('General', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="theme_layout-option" class="rm_option rm_input rm_select">
            <label for="theme_layout"><strong><?php echo __('Layout theme', $tpl_tdomain)?></strong></label>
              <select name = "theme_layout" id='theme_layout'>
                <?php foreach ($options_layout as $val => $option) : ?>
                <option value="<?php echo $val ?>" <?php selected( $__theme_layout, $val ) ?>><?php echo $option; ?></option>
                <?php endforeach ?>
              </select>
            <small><?php _e('Select the general layout of the theme.', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
          <div id="favicon-option" class="rm_option rm_input rm_upload">
            <label for="favicon"><strong><?php echo __('Custom Favicon', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type="text" name = "favicon" id='favicon' value="<?php echo $__favicon?>">
              <input type="button" value="Upload Image" id="favicon-button" />
            </div>
            <small><?php _e('A favicon is a 16x16 pixel icon that represents your site; paste the URL to a icon image that you want to use as the image. NOTE: it\'s not allowed the .ico extension', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
          <div id="custom_style-option" class="rm_option rm_input rm_textarea">
            <label for="custom_style"><strong><?php echo __('Custom Style', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "custom_style" id='custom_style'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__custom_style?>
            </textarea>
            <small><?php _e('You can write here your custom css, that will replace the default css.', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
          <div id="custom_js-option" class="rm_option rm_input rm_textarea">
            <label for="custom_js"><strong><?php echo __('Custom Javascript', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "custom_js" id='custom_js'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__custom_js?>
            </textarea>
            <small><?php _e('You can write here your custom js, that will replace the default js.', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
          <div id="date_format-option" class="rm_option rm_input rm_text">
            <label for="date_format"><strong><?php echo __('Date Format', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "date_format" id='date_format' value = "<?php echo $__date_format?>">
            <small><?php _e('Set the general date format of theme. Read <a href="http://codex.wordpress.org/Formatting_Date_and_Time">Documentation on date formatting</a>', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="header-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Header', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="use_logo-option" class="rm_option rm_input rm_on_off">
            <label for="use_logo"><strong><?php _e('Custom Logo', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='use_logo' name = "use_logo" value="1"  <?php checked($__use_logo, 1)?>/>
            </div>
            <small><?php _e('Want to use a custom image as logo?', $tpl_tdomain)?></small><div class="clearfix"></div>
          </div>
          <!-- option -->
          <div id="logo-option" class="rm_option rm_input rm_upload yiw-deps">
            <label for="logo"><strong><?php _e('Logo URL', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type='text' id='logo' name = "logo" value = "<?php echo $__logo?>"/>
              <input type="button" value="Upload Image" id="logo-button" />

            </div>
            <small><?php _e('Enter the URL to your logo image', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="logo_use_description-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="logo_use_description"><strong><?php _e('Logo Description', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='logo_use_description' name = "logo_use_description" value="1"  <?php checked($__logo_use_description, 1)?>/>
            </div>
            <small><?php _e('Specify if you want the description below the logo', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="show_topbar-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="show_topbar"><strong><?php _e('Show Topbar', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='show_topbar' name = "show_topbar" value="1"  <?php checked($__show_topbar, 1)?>/>
            </div>
            <small><?php _e('Choose if you want to show the topbar or not.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_content-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="topbar_content"><strong><?php echo __('Top bar content', $tpl_tdomain)?></strong></label>
            <select name = "topbar_content" id='topbar_content'>
              <?php foreach ( $options_topbar as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__topbar_content, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Choose between static text or twitter slider', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_text-option" class="rm_option rm_input rm_textarea yiw-deps">
            <label for="topbar_text"><strong><?php echo __('Topbar text', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "topbar_text" id='topbar_text'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__topbar_text?>
            </textarea>
            <small><?php _e('Specify the text for the topbar', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_twitter_username-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="topbar_twitter_username"><strong><?php echo __('Twitter username', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "topbar_twitter_username" id='topbar_twitter_username' value = "<?php echo $__topbar_twitter_username?>">
            <small><?php _e('Specify twitter username for the last tweets in the topbar', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_twitter_items-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="topbar_twitter_items"><strong><?php echo __('Twitter items', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "topbar_twitter_items" id='topbar_twitter_items' value = "<?php echo $__topbar_twitter_items?>">
            <small><?php _e('Specify the number of tweets you want to show', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_twitter_interval-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="topbar_twitter_interval"><strong><?php echo __('Interval between slides', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">2</span>
              <span class="maxCaption">10</span>
              <span id="topbar_twitter_interval-feedback" class="feedback"><strong><?php echo $__topbar_twitter_interval?></strong></span>
              <div id="topbar_twitter_interval" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="topbar_twitter_interval" value = "<?php echo $__topbar_twitter_interval?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#topbar_twitter_interval').each(function(e){
                  var val = <?php echo $__topbar_twitter_interval?>;
                  var minValue = 2;
                  var maxValue = 10;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="topbar_twitter_interval"]' ).val( ui.value );
                      $( '#topbar_twitter_interval-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Specify the seconds of interval between slides', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_login-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="topbar_login"><strong><?php _e('Hide login/logout', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='topbar_login' name = "topbar_login" value="1"  <?php checked($__topbar_login, 1)?>/>
            </div>
            <small><?php _e('Hide login/logout URL from the top bar', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_register-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="topbar_register"><strong><?php _e('Hide register', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='topbar_register' name = "topbar_register" value="1"  <?php checked($__topbar_register, 1)?>/>
            </div>
            <small><?php _e('Hide register URL from the top bar. If you are using the WooCommerce plugin, you need to active the register also in Woocommerce -> Settings -> Customer Accounts -> Allow unregistered users to register from "My Account".', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="show_topbar_cart_ribbon-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="show_topbar_cart_ribbon"><strong><?php _e('Show ribbon cart', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='show_topbar_cart_ribbon' name = "show_topbar_cart_ribbon" value="1"  <?php checked($__show_topbar_cart_ribbon, 1)?>/>
            </div>
            <small><?php _e('Say if you want the ribbon of cart on topbar.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topbar_cart_ribbon-option" class="rm_option rm_input rm_upload yiw-deps">
            <label for="topbar_cart_ribbon"><strong><?php echo __('Topbar cart ribbon', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type="text" name = "topbar_cart_ribbon" id='topbar_cart_ribbon' value="<?php echo $__topbar_cart_ribbon?>">
              <input type="button" value="Upload Image" id="topbar_cart_ribbon-button" />
            </div>
            <small><?php _e('Upload your custom image for the ribbon in topbar. <b>Upload in image size 112x95px', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_bg_color-option" class="rm_option rm_input rm_color yiw-deps">
            <label for="header_bg_color"><strong><?php echo __('Header Color', $tpl_tdomain)?></strong></label>
            <div class="double">
              <input type="text" name = "header_bg_color" id='header_bg_color' value="<?php echo $__header_bg_color?>">
              &nbsp;<img src="<?php echo $uri_theme?>/images/color_picker.png" alt="Color Picker" class="colorpicker-icon" /><br/>
            </div>
            <small><?php _e('Select the type of header background.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="colorpicker"></div>
            <div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_bg_type-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="header_bg_type"><strong><?php echo __('Header Background', $tpl_tdomain)?></strong></label>
            <select name = "header_bg_type" id='header_bg_type'>
              <?php foreach ( $options_color as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__header_bg_type, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select the type of header background.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_bg_image_custom-option" class="rm_option rm_input rm_upload yiw-deps">
            <label for="header_bg_image_custom"><strong><?php echo __('Header Image Custom', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type="text" name = "header_bg_image_custom" id='header_bg_image_custom' value="<?php echo $__header_bg_image_custom?>">
              <input type="button" value="Upload Image" id="header_bg_image_custom-button" />
            </div>
            <small><?php _e('Upload your background image.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_bg_image_custom_repeat-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="header_bg_image_custom_repeat"><strong><?php echo __('Header Image Repeat', $tpl_tdomain)?></strong></label>
            <select name = "header_bg_image_custom_repeat" id='header_bg_image_custom_repeat'>
              <?php foreach ( $options_repeate as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__header_bg_image_custom_repeat, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('The repeat attribute of header image uploaded above.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_bg_image_custom_position-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="header_bg_image_custom_position"><strong><?php echo __('Header Image Position', $tpl_tdomain)?></strong></label>
            <select name = "header_bg_image_custom_position" id='header_bg_image_custom_position'>
              <?php foreach ( $options_position as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__header_bg_image_custom_position, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('The position attribute of header image uploaded above.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="header_opacity-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="header_opacity"><strong><?php echo __('Header Opacity', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">100</span>
              <span id="header_opacity-feedback" class="feedback"><strong><?php echo $__header_opacity?></strong></span>
              <div id="header_opacity" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="header_opacity" value = "<?php echo $__header_opacity?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#header_opacity').each(function(e){
                  var val = <?php echo $__header_opacity?>;
                  var minValue = 1;
                  var maxValue = 100;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="header_opacity"]' ).val( ui.value );
                      $( '#header_opacity-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the opacity of the header', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topsidebar_has-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="topsidebar_has"><strong><?php _e('Header Sidebar', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='topsidebar_has' name = "topsidebar_has" value="1"  <?php checked($__topsidebar_has, 1)?>/>
            </div>
            <small><?php _e('Say if you want the sidebar on header.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topsidebar_rows-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="topsidebar_rows"><strong><?php echo __('Header Sidebar Rows Number', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">3</span>
              <span id="topsidebar_rows-feedback" class="feedback"><strong><?php echo $__topsidebar_rows?></strong></span>
              <div id="topsidebar_rows" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="topsidebar_rows" value = "<?php echo $__topsidebar_rows?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#topsidebar_rows').each(function(e){
                  var val = <?php echo ($__topsidebar_rows)?$__topsidebar_rows:0?>;
                  var minValue = 1;
                  var maxValue = 3;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="topsidebar_rows"]' ).val( ui.value );
                      $( '#topsidebar_rows-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the number rows of the header sidebar', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="topsidebar_cols-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="topsidebar_cols"><strong><?php echo __('Header Sidebar Columns Number', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">4</span>
              <span id="topsidebar_cols-feedback" class="feedback"><strong><?php echo $__topsidebar_cols?></strong></span>
              <div id="topsidebar_cols" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="topsidebar_cols" value = "<?php echo $__topsidebar_cols?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#topsidebar_cols').each(function(e){
                  var val = <?php echo ($__topsidebar_cols)?$__topsidebar_cols:0?>;
                  var minValue = 1;
                  var maxValue = 4;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="topsidebar_cols"]' ).val( ui.value );
                      $( '#topsidebar_cols-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the number columns of the header sidebar', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="newsletter-form-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Newsletter form', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
        <!-- option -->
          <div id="newsletter_form_show-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="newsletter_form_show"><strong><?php _e('Show', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='newsletter_form_show' name = "newsletter_form_show" value="1"  <?php checked($__newsletter_form_show, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the newsletter form, above the footer.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_title-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_title"><strong><?php echo __('Title', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_title" id='newsletter_form_title' value = "<?php echo $__newsletter_form_title?>">
            <small><?php _e('The title of this section, shown bolded.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_description-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_description"><strong><?php echo __('Description', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_description" id='newsletter_form_description' value = "<?php echo $__newsletter_form_description?>">
            <small><?php _e('A description of this section, shown near the title.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div class="rm_option rm_input rm_text" style="text-align:center;">
            <p><?php _e('The options below are for the configuration of the newsletter form. to make functional the form, you need to link it with an external services and you can do it configurating it with the options below.', $tpl_tdomain)?></p>
            <div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_action-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_action"><strong><?php echo __('Action', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_action" id='newsletter_form_action' value = "<?php echo $__newsletter_form_action?>">
            <small><?php _e('The page where make the request (&lt;form <strong>action=""</strong>&gt;).', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_method-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="newsletter_form_method"><strong><?php echo __('Method of request', $tpl_tdomain)?></strong></label>
            <select name = "newsletter_form_method" id='newsletter_form_method'>
              <?php foreach ( $options_methods as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__newsletter_form_method, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('The position attribute of header image uploaded above.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_name-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_name"><strong><?php echo __('Identification name of the "Name" field', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_name" id='newsletter_form_name' value = "<?php echo $__newsletter_form_name?>">
            <small><?php _e('Configure the identification name of the "Name" field, to allow the script to comunicate the value of this field to the external services (&lt;input <strong>name=""</strong>... /&gt;).', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_email-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_email"><strong><?php echo __('Identification name of the "Email" field', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_email" id='newsletter_form_email' value = "<?php echo $__newsletter_form_email?>">
            <small><?php _e('Configure the identification name of the "Email" field, to allow the script to comunicate the value of this field to the external services (&lt;input <strong>name=""</strong>... /&gt;).', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_label_name-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_label_name"><strong><?php echo __('Label of "Name" field', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_label_name" id='newsletter_form_label_name' value = "<?php echo $__newsletter_form_label_name?>">
            <small><?php _e('The label of the "Name" field.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_label_email-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_label_email"><strong><?php echo __('Label of "Email" field', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_label_email" id='newsletter_form_label_email' value = "<?php echo $__newsletter_form_label_email?>">
            <small><?php _e('The label of the "Email" field.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_label_submit-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_label_submit"><strong><?php echo __('Label of "Submit" field', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_label_submit" id='newsletter_form_label_submit' value = "<?php echo $__newsletter_form_label_submit?>">
            <small><?php _e('The label of the "Submit" field.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="newsletter_form_label_hidden_fields-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="newsletter_form_label_hidden_fields"><strong><?php echo __('Hidden fields', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "newsletter_form_label_hidden_fields" id='newsletter_form_label_hidden_fields' value = "<?php echo $__newsletter_form_label_hidden_fields?>">
            <small><?php _e('Optional: In this option you can set the hidden fields, to write in serializate way (es. field1=value1&field2=value2&field3=value3&...&fieldN=valueN).', $tpl_tdomain)?></small><div class="clearfix"></div>
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
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
        <!-- option -->
          <div id="footer_type-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="footer_type"><strong><?php echo __('Footer Type', $tpl_tdomain)?></strong></label>
            <select name = "footer_type" id='footer_type'>
              <?php foreach ( $options_footer as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__footer_type, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select the footer type for the theme', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="footer_rows-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="footer_rows"><strong><?php echo __('Big Footer Widget Areas', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">4</span>
              <span id="footer_rows-feedback" class="feedback"><strong><?php echo $__footer_rows?></strong></span>
              <div id="footer_rows" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="footer_rows" value = "<?php echo $__footer_rows?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#footer_rows').each(function(e){
                  var val = <?php echo $__footer_rows?>;
                  var minValue = 1;
                  var maxValue = 4;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="footer_rows"]' ).val( ui.value );
                      $( '#footer_rows-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the number of widget area you\'d like to use.<br /><strong>Note: It will work only if you\'ve chosen one of Big Footer types above</strong>', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="footer_columns-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="footer_columns"><strong><?php echo __('Number of widgets in each footer Widget Area', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">4</span>
              <span id="footer_columns-feedback" class="feedback"><strong><?php echo $__footer_columns?></strong></span>
              <div id="footer_columns" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="footer_columns" value = "<?php echo $__footer_columns?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#footer_columns').each(function(e){
                  var val = <?php echo $__footer_columns?>;
                  var minValue = 1;
                  var maxValue = 4;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="footer_columns"]' ).val( ui.value );
                      $( '#footer_columns-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the number of widget you\'d like to use in each footer widget area<br /><strong>Note: It will work only if you\'ve chosen one of Big Footer types above</strong>', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="footer_text_centered-option" class="rm_option rm_input rm_textarea yiw-deps">
            <label for="footer_text_centered"><strong><?php echo __('Footer centered text', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "footer_text_centered" id='footer_text_centered'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__footer_text_centered?>
            </textarea>
            <small><?php _e('Enter text used in <strong>centered footer</strong>. It can be HTML.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="copyright_text_left-option" class="rm_option rm_input rm_textarea yiw-deps">
            <label for="copyright_text_left"><strong><?php echo __('Footer copyright text Left', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "copyright_text_left" id='copyright_text_left'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__copyright_text_left?>
            </textarea>
            <small><?php _e('Enter text used in the left side of the footer. It can be HTML. <strong>NB: not figured on "centered footer"</strong>', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="copyright_text_right-option" class="rm_option rm_input rm_textarea yiw-deps">
            <label for="copyright_text_right"><strong><?php echo __('Footer copyright text Right', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "copyright_text_right" id='copyright_text_right'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__copyright_text_right?>
            </textarea>
            <small><?php _e('Enter text used in the right side of the footer. It can be HTML. <strong>NB: not figured on "centered footer"</strong>', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="ga_code-option" class="rm_option rm_input rm_textarea yiw-deps">
            <label for="ga_code"><strong><?php echo __('Google Analytics Code', $tpl_tdomain)?></strong></label>
            <textarea  type="textarea" name = "ga_code" id='ga_code'  cols="" rows="" class="listdata form-input-tip">
<?php echo $__ga_code?>
            </textarea>
            <small><?php _e('You can paste your Google Analytics or other tracking code in this box. This will be automatically added to the footer.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="shop-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Shop', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
        <!-- option -->
          <div class="rm_option rm_input rm_text" style="text-align:center;">
            <p><strong>Products page</strong></p>
            <div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
        <!-- option -->
          <div id="shop_products_per_page-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="shop_products_per_page"><strong><?php echo __('Number of products to show', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">20</span>
              <span id="shop_products_per_page-feedback" class="feedback"><strong><?php echo $__shop_products_per_page?></strong></span>
              <div id="shop_products_per_page" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="shop_products_per_page" value = "<?php echo $__shop_products_per_page?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#shop_products_per_page').each(function(e){
                  var val = <?php echo $__shop_products_per_page?>;
                  var minValue = 1;
                  var maxValue = 20;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="shop_products_per_page"]' ).val( ui.value );
                      $( '#shop_products_per_page-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Select the number of products to show on the pages.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_products_style-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="shop_products_style"><strong><?php echo __('Style for products list', $tpl_tdomain)?></strong></label>
            <select name = "shop_products_style" id='shop_products_style'>
              <?php foreach ( $options_product as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__shop_products_style, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select the style for the products list.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_title_position-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="shop_title_position"><strong><?php echo __('Title position', $tpl_tdomain)?></strong></label>
            <select name = "shop_title_position" id='shop_title_position'>
              <?php foreach ( $options_title as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__shop_title_position, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select the position of the title. You can say if put it inside the thumbnail or below the image.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_border_thumbnail-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_border_thumbnail"><strong><?php _e('Border thumbnail', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_border_thumbnail' name = "shop_border_thumbnail" value="1"  <?php checked($__shop_border_thumbnail, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show a border on thumbnail.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_shadow_thumbnail-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_shadow_thumbnail"><strong><?php _e('Shadow thumbnail', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_shadow_thumbnail' name = "shop_shadow_thumbnail" value="1"  <?php checked($__shop_shadow_thumbnail, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show a shadow on thumbnail.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_name-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_name"><strong><?php _e('Show name', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_name' name = "shop_show_name" value="1"  <?php checked($__shop_show_name, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show a the price on the products list.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_price-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_price"><strong><?php _e('Show price', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_price' name = "shop_show_price" value="1"  <?php checked($__shop_show_price, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show a the price on the products list.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_button_details-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_button_details"><strong><?php _e('Show button details', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_button_details' name = "shop_show_button_details" value="1"  <?php checked($__shop_show_button_details, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the button for product details.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_button_add_to_cart-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_button_add_to_cart"><strong><?php _e('Show button add to cart', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_button_add_to_cart' name = "shop_show_button_add_to_cart" value="1"  <?php checked($__shop_show_button_add_to_cart, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the purchase button.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_button_details_label-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="shop_button_details_label"><strong><?php echo __('Label button details', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "shop_button_details_label" id='shop_button_details_label' value = "<?php echo $__shop_button_details_label?>">
            <small><?php _e('Select the text for the button for product details.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_products_ribbon-option" class="rm_option rm_input rm_upload yiw-deps">
            <label for="shop_products_ribbon"><strong><?php _e('Custom for add to cart ribbon', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type='text' id='shop_products_ribbon' name = "shop_products_ribbon" value = "<?php echo $__shop_products_ribbon?>"/>
              <input type="button" value="Upload Image" id="shop_products_ribbon-button" />

            </div>
            <small><?php _e('Upload your custom ribbon image for the add to cart button - Leave empty to show the default one.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_products_ribbon_added-option" class="rm_option rm_input rm_upload yiw-deps">
            <label for="shop_products_ribbon_added"><strong><?php _e('Custom for add to cart ribbon, when added to cart', $tpl_tdomain)?></strong></label>
            <div style="float:left; width:280px">
              <input type='text' id='shop_products_ribbon_added' name = "shop_products_ribbon_added" value = "<?php echo $__shop_products_ribbon_added?>"/>
              <input type="button" value="Upload Image" id="shop_products_ribbon_added-button" />

            </div>
            <small><?php _e('Upload your custom ribbon image for the add to cart button, after you added to cart - Leave empty to show the default one.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_button_addtocart_label-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="shop_button_addtocart_label"><strong><?php echo __('Label button add to cart', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "shop_button_addtocart_label" id='shop_button_addtocart_label' value = "<?php echo $__shop_button_addtocart_label?>">
            <small><?php _e('Select the text for the purchase button.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div class="rm_option rm_input rm_text" style="text-align:center;">
            <p><strong><?php _e('Product detail page')?></strong></p>
            <div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_layout_page_single-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="shop_layout_page_single"><strong><?php echo __('Show the shop sidebar', $tpl_tdomain)?></strong></label>
            <select name = "shop_layout_page_single" id='shop_layout_page_single'>
              <?php foreach ( $options_layout_shop as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__shop_layout_page_single, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select the layout for the single page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_price_single_page-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_price_single_page"><strong><?php _e('Show price', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_price_single_page' name = "shop_show_price_single_page" value="1"  <?php checked($__shop_show_price_single_page, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the price, on the product detail page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_show_button_add_to_cart_single_page-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_show_button_add_to_cart_single_page"><strong><?php _e('Show button add to cart', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_show_button_add_to_cart_single_page' name = "shop_show_button_add_to_cart_single_page" value="1"  <?php checked($__shop_show_button_add_to_cart_single_page, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the purchase button, on the product detail page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div class="rm_option rm_input rm_text" style="text-align:center;">
            <p><strong><?php _e('Product slider shortcode')?></strong></p>
            <div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_product_slider_autoplay-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="shop_product_slider_autoplay"><strong><?php _e('Active autoplay', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='shop_product_slider_autoplay' name = "shop_product_slider_autoplay" value="1"  <?php checked($__shop_product_slider_autoplay, 1)?>/>
            </div>
            <small><?php _e('Say if you want to active the autoplay in the product sliders.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="shop_product_slider_interval-option" class="rm_option rm_input slider_control yiw-deps">
            <label for="shop_product_slider_interval"><strong><?php echo __('Interval autoplay (s)', $tpl_tdomain)?></strong></label>
            <div class="ui-slider">
              <span class="minCaption">1</span>
              <span class="maxCaption">10</span>
              <span id="shop_product_slider_interval-feedback" class="feedback"><strong><?php echo $__shop_product_slider_interval?></strong></span>
              <div id="shop_product_slider_interval" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                <input type="hidden" name="shop_product_slider_interval" value = "<?php echo $__shop_product_slider_interval?>" />
              </div>
            </div>
            <script type="text/javascript">
              jQuery(document).ready(function($){
                $('#shop_product_slider_interval').each(function(e){
                  var val = <?php echo $__shop_product_slider_interval?>;
                  var minValue = 1;
                  var maxValue = 10;
                  $(this).slider({
                    value: val,
                    min: minValue,
                    max: maxValue,
                    range: 'min',
                    slide: function( event, ui ) {
                      $( 'input[name="shop_product_slider_interval"]' ).val( ui.value );
                      $( '#shop_product_slider_interval-feedback strong' ).text( ui.value + '' );
                    }
                  });
                });
              });
            </script>

            <small><?php _e('Set the interval for the autoplay.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="blog-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Blog Settings', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="blog_show_date-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="blog_show_date"><strong><?php _e('Show post date', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='blog_show_date' name = "blog_show_date" value="1"  <?php checked($__blog_show_date, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the date for each post.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_show_categories-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="blog_show_categories"><strong><?php _e('Show post categories', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='blog_show_categories' name = "blog_show_categories" value="1"  <?php checked($__blog_show_categories, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the categories for each post.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_show_author-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="blog_show_author"><strong><?php _e('Show post author', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='blog_show_author' name = "blog_show_author" value="1"  <?php checked($__blog_show_author, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the author for each post.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_show_comments-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="blog_show_comments"><strong><?php _e('Show post number of comments', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='blog_show_comments' name = "blog_show_comments" value="1"  <?php checked($__blog_show_comments, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the number of comments for each post.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_show_socials-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="blog_show_socials"><strong><?php _e('Show post social buttons', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='blog_show_socials' name = "blog_show_socials" value="1"  <?php checked($__blog_show_socials, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the social buttons for each post.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_type-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="blog_type"><strong><?php echo __('Blog Type', $tpl_tdomain)?></strong></label>
            <select name = "blog_type" id='blog_type'>
              <?php foreach ( $options_blog_type as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__blog_type, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Say the layout for your blog page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_cats_exclude-option" class="rm_option rm_input rm_multi_checkbox yiw-deps">
            <label for="blog_cats_exclude"><strong><?php echo __('Blog page', $tpl_tdomain)?></strong></label>
            <ul id="blog_cats_exclude" class="list-sortable small">
              <li class="head">Blog Page</li>
              <?php foreach ( $option_cats as $cat) : ?>
              <li>
              <input type="checkbox" name="blog_cats_exclude[]" value="<?php echo $cat->cat_ID; ?>" <?php if ( is_array($__blog_cats_exclude)) checked( in_array( $cat->cat_ID, $__blog_cats_exclude ), true ); ?> id="blog_cats_exclude-<?php echo $cat->cat_ID; ?>" />&nbsp;
              <label for="blog_cats_exclude-<?php echo $cat->cat_ID; ?>" class="label-check"><?php echo $cat->cat_name; ?></label>
              </li>
              <?php endforeach ?>
            </ul>
            <ul id="blog_cats_exclude_sidebar" class="list-sortable small">
              <li class="head">List cat. sidebar</li>
              <?php foreach ( $option_cats as $cat) : ?>
              <li>
                <input type="checkbox" name="blog_cats_exclude_sidebar[]" value="<?php echo $cat->cat_ID; ?>" <?php if ( is_array($__blog_cats_exclude_sidebar)) checked( in_array( $cat->cat_ID, $__blog_cats_exclude_sidebar ), true ); ?> id="blog_cats_exclude_sidebar-<?php echo $cat->cat_ID; ?>" />&nbsp;
                <label for="blog_cats_exclude_sidebar-<?php echo $cat->cat_ID; ?>" class="label-check"><?php echo $cat->cat_name; ?></label>
              </li>
              <?php endforeach ?>
            </ul>
            <small><?php _e('Select witch categories you want exlude from blog.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="blog_read_more_text-option" class="rm_option rm_input rm_text yiw-deps">
            <label for="blog_read_more_text"><strong><?php echo __('Read more text', $tpl_tdomain)?></strong></label>
            <input  type="text" name = "blog_read_more_text" id='blog_read_more_text' value = "<?php echo $__blog_read_more_text?>">
            <small><?php _e('Write what you want to show on more link', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          </div>
        </div>
      <div class="rm_section section_effect" id="portfolio-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Portfolio', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="portfolio_layout_page-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="portfolio_layout_page"><strong><?php echo __('Default layout page', $tpl_tdomain)?></strong></label>
            <select name = "portfolio_layout_page" id='portfolio_layout_page'>
              <?php foreach ( $options_layout_shop as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__portfolio_layout_page, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Define the default layout to use for the portfolio pages, as single pages, categories page, etc..', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="portfolio_show_filters-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="portfolio_show_filters"><strong><?php _e('Show filters', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='portfolio_show_filters' name = "portfolio_show_filters" value="1"  <?php checked($__portfolio_show_filters, 1)?>/>
            </div>
            <small><?php _e('Say if you want to show the filters navigation in the gallery page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="portfolio_thumbnail_click-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="portfolio_thumbnail_click"><strong><?php echo __('Thumbnail Click', $tpl_tdomain)?></strong></label>
            <select name = "portfolio_thumbnail_click" id='portfolio_thumbnail_click'>
              <?php foreach ( $options_thumb as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__portfolio_thumbnail_click, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Select what you want to do when you click in the item thumbnail (not valid for the portfolio filterable).', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="portfolio_details_icon-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="portfolio_details_icon"><strong><?php _e('Link to single page in Portfolio Filterable', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='portfolio_details_icon' name = "portfolio_details_icon" value="1"  <?php checked($__portfolio_details_icon, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the icon to go to the item single page, when you pass over the thumbnail in the portfolio filterable.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="portfolio_skin_lightbox-option" class="rm_option rm_input rm_select yiw-deps">
            <label for="portfolio_skin_lightbox"><strong><?php echo __('Lightbox Skin', $tpl_tdomain)?></strong></label>
            <select name = "portfolio_skin_lightbox" id='portfolio_skin_lightbox'>
              <?php foreach ( $options_skin as $val => $option) : ?>
              <option value="<?php echo $val ?>" <?php selected( $__portfolio_skin_lightbox, $val ) ?>><?php echo $option; ?></option>
              <?php endforeach ?>
            </select>
            <small><?php _e('Specific what skin you want for videos and images lightbox.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
        </div>
      </div>
      <div class="rm_section section_effect" id="gallery-section">
        <div class="rm_title">
          <h3>
            <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
            <?php echo __('Gallery', $tpl_tdomain)?>
          </h3>
          <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
          <div class="clearfix"></div>
        </div>
        <div class="rm_options">
          <!-- option -->
          <div id="gallery_show_filters-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="gallery_show_filters"><strong><?php _e('Show filters', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='gallery_show_filters' name = "gallery_show_filters" value="1"  <?php checked($__gallery_show_filters, 1)?>/>
            </div>
            <small><?php _e('Say if you want to show the filters navigation in the gallery page.', $tpl_tdomain)?></small><div class="clearfix"></div>
            <div class="fade_color"></div>
          </div>
          <!-- option -->
          <div id="gallery_details_icon-option" class="rm_option rm_input rm_on_off yiw-deps">
            <label for="gallery_details_icon"><strong><?php _e('Link to item single page', $tpl_tdomain)?></strong></label>
            <div class="iphone-check">
              <input class="on_off" type='checkbox' id='gallery_details_icon' name = "gallery_details_icon" value="1"  <?php checked($__gallery_details_icon, 1)?>/>
            </div>
            <small><?php _e('Select if you want to show the icon to go to the item single page, when you pass over the thumbnail.', $tpl_tdomain)?></small><div class="clearfix"></div>
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