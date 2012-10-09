<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\typography.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">

  <div class="rm_section section_effect" id="TYPOGRAPHY-form-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('TYPOGRAPHY', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="font_logo-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="font_logo_type"><strong><?php echo __('Logo font', $tpl_tdomain)?></strong></label>
        <div style="float:left; width:280px">
          <select class="font-type-select" name = "font_logo_type" id='font_logo_type'>
            <?php foreach ( $options_font_type as $val => $option) : ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_logo_type, $val ) ?>><?php echo $option; ?></option>
            <?php endforeach ?>
          </select>
          <br/>

          <select name="font_logo" class="font cufon">
            <?php foreach ($cufon_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_logo, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_logo" class="font google_font">
            <?php foreach ($google_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_logo, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_logo" class="font web_fonts">
            <?php foreach ($standard_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_logo), stripslashes($val) ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>
        </div>
        <small><?php _e('Select the type to use for the logo font.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var this_option = $('#font_logo-option');

            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

            $('select.font-type-select', this_option).change(function(){
              var value = $(this).val();
              $('select.font', this_option).attr('disabled', 'disabled').hide();
              $('select.'+value, this_option).removeAttr('disabled').show();
            });
          });
        </script>
      </div>
      <!-- option -->
      <div id="font_description-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="font_description_type"><strong><?php echo __('Logo description font', $tpl_tdomain)?></strong></label>
        <div style="float:left; width:280px">
          <select class="font-type-select" name = "font_description_type" id='font_description_type'>
            <?php foreach ( $options_font_type as $val => $option) : ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_description_type, $val ) ?>><?php echo $option; ?></option>
            <?php endforeach ?>
          </select>
          <br/>

          <select name="font_description" class="font cufon">
            <?php foreach ($cufon_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_description, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_description" class="font google_font">
            <?php foreach ($google_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_description, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_description" class="font web_fonts">
            <?php foreach ($standard_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_description), stripslashes($val) ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>
        </div>
        <small><?php _e('Select the type to use for the description below the logo (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var this_option = $('#font_description-option');

            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

            $('select.font-type-select', this_option).change(function(){
              var value = $(this).val();
              $('select.font', this_option).attr('disabled', 'disabled').hide();
              $('select.'+value, this_option).removeAttr('disabled').show();
            });
          });
        </script>
      </div>
      <!-- option -->
      <div id="font_navigation-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="font_navigation_type"><strong><?php echo __('Navigation font', $tpl_tdomain)?></strong></label>
        <div style="float:left; width:280px">
          <select class="font-type-select" name = "font_navigation_type" id='font_navigation_type'>
            <?php foreach ( $options_font_type as $val => $option) : ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_navigation_type, $val ) ?>><?php echo $option; ?></option>
            <?php endforeach ?>
          </select>
          <br/>

          <select name="font_navigation" class="font cufon">
            <?php foreach ($cufon_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_navigation, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_navigation" class="font google_font">
            <?php foreach ($google_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_navigation, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_navigation" class="font web_fonts">
            <?php foreach ($standard_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_navigation), stripslashes($val) ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>
        </div>
        <small><?php _e('Select the type to use for the navigation font.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var this_option = $('#font_navigation-option');

            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

            $('select.font-type-select', this_option).change(function(){
              var value = $(this).val();
              $('select.font', this_option).attr('disabled', 'disabled').hide();
              $('select.'+value, this_option).removeAttr('disabled').show();
            });
          });
        </script>
      </div>
      <!-- option -->
      <div id="font_p-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="font_p_type"><strong><?php echo __('Paragraphs font', $tpl_tdomain)?></strong></label>
        <div style="float:left; width:280px">
          <select class="font-type-select" name = "font_p_type" id='font_p_type'>
            <?php foreach ( $options_font_type as $val => $option) : ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_p_type, $val ) ?>><?php echo $option; ?></option>
            <?php endforeach ?>
          </select>
          <br/>

          <select name="font_p" class="font cufon">
            <?php foreach ($cufon_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_p, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_p" class="font google_font">
            <?php foreach ($google_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( $__font_p, $val ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>

          <select name="font_p" class="font web_fonts">
            <?php foreach ($standard_fonts as $val => $option) { ?>
            <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_p), stripslashes($val) ) ?>><?php echo $option; ?></option>
            <?php } ?>
          </select>
        </div>
        <small><?php _e('Select the type to use for the paragraphs (default Calibri).', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            var this_option = $('#font_p-option');

            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

            $('select.font-type-select', this_option).change(function(){
              var value = $(this).val();
              $('select.font', this_option).attr('disabled', 'disabled').hide();
              $('select.'+value, this_option).removeAttr('disabled').show();
            });
          });
        </script>
      </div>
      <!-- option -->
    <div id="font_h1-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h1_type"><strong><?php echo __('Heading 1 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h1_type" id='font_h1_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h1_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h1" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h1, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h1" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h1, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h1" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h1), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 1 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h1-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_h2-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h2_type"><strong><?php echo __('Heading 2 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h2_type" id='font_h2_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h2_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h2" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h2, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h2" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h2, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h2" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h2), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 2 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h2-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_h3-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h3_type"><strong><?php echo __('Heading 3 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h3_type" id='font_h3_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h3_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h3" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h3, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h3" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h3, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h3" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h3), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 3 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h3-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_h4-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h4_type"><strong><?php echo __('Heading 4 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h4_type" id='font_h4_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h4_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h4" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h4, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h4" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h4, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h4" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h4), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 4 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h4-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_h5-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h5_type"><strong><?php echo __('Heading 5 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h5_type" id='font_h5_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h5_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h5" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h5, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h5" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h5, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h5" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h5), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 5 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h5-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_h6-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_h6_type"><strong><?php echo __('Heading 6 font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_h6_type" id='font_h6_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h6_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_h6" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h6, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h6" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_h6, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_h6" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_h6), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Heading 6 items (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_h6-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_nivo_title-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_nivo_title_type"><strong><?php echo __('Slider Nivo: Title font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_nivo_title_type" id='font_nivo_title_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_nivo_title" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_title" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_title" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_nivo_title), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Slider Nivo title (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_nivo_title-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_nivo_title_brackets-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_nivo_title_brackets_type"><strong><?php echo __('Slider Nivo: Title font in brackets', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_nivo_title_brackets_type" id='font_nivo_title_brackets_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title_brackets_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_nivo_title_brackets" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title_brackets, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_title_brackets" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_title_brackets, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_title_brackets" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_nivo_title_brackets), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Slider Nivo title in the brackets (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_nivo_title_brackets-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_nivo_content-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_nivo_content_type"><strong><?php echo __('Slider Nivo: Content font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_nivo_content_type" id='font_nivo_content_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_content_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_nivo_content" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_content, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_content" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_nivo_content, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_nivo_content" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_nivo_content), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Slider Nivo content (default Calibri).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_nivo_content-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_slogan-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_slogan_type"><strong><?php echo __('Slogan font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_slogan_type" id='font_slogan_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_slogan_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_slogan" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_slogan, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_slogan" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_slogan, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_slogan" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_slogan), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Slogan (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_slogan-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_subslogan-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_subslogan_type"><strong><?php echo __('Sub Slogan font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_subslogan_type" id='font_subslogan_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_subslogan_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_subslogan" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_subslogan, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_subslogan" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_subslogan, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_subslogan" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_subslogan), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for Sub Slogan (default Rokkitt).', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_subslogan-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_sidebarfooter-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_sidebarfooter_type"><strong><?php echo __('Sidebar & Footer titles', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_sidebarfooter_type" id='font_sidebarfooter_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_sidebarfooter_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_sidebarfooter" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_sidebarfooter, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_sidebarfooter" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_sidebarfooter, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_sidebarfooter" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_sidebarfooter), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for name of testimonial, in the [testimonials] shortcode. (default Shadows Into Light)', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_sidebarfooter-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_name_testimonial-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_name_testimonial_type"><strong><?php echo __('Testimonial name', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_name_testimonial_type" id='font_name_testimonial_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_name_testimonial_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_name_testimonial" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_name_testimonial, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_name_testimonial" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_name_testimonial, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_name_testimonial" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_name_testimonial), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for titles in sidebar and footer. (default Rokkitt)', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_name_testimonial-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    <div id="font_special_font-option" class="rm_option rm_input rm_select yiw-deps">
      <label for="font_special_font_type"><strong><?php echo __('Special Font', $tpl_tdomain)?></strong></label>
      <div style="float:left; width:280px">
        <select class="font-type-select" name = "font_special_font_type" id='font_special_font_type'>
          <?php foreach ( $options_font_type as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_special_font_type, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <br/>

        <select name="font_special_font" class="font cufon">
          <?php foreach ($cufon_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_special_font, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_special_font" class="font google_font">
          <?php foreach ($google_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( $__font_special_font, $val ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>

        <select name="font_special_font" class="font web_fonts">
          <?php foreach ($standard_fonts as $val => $option) { ?>
          <option value="<?php echo $val ?>" <?php selected( stripslashes($__font_special_font), stripslashes($val) ) ?>><?php echo $option; ?></option>
          <?php } ?>
        </select>
      </div>
      <small><?php _e('Select the type to use for the text inside the shortcode [special_font]. (default Shadows Into Light)', $tpl_tdomain)?></small><div class="clearfix"></div>
      <div class="fade_color"></div>
      <script type="text/javascript">
        jQuery(document).ready(function($){
          var this_option = $('#font_special_font-option');

          $('select.font', this_option).attr('disabled', 'disabled').hide();
          $('select.' + $('.font-type-select', this_option).val(), this_option).removeAttr('disabled').show();

          $('select.font-type-select', this_option).change(function(){
            var value = $(this).val();
            $('select.font', this_option).attr('disabled', 'disabled').hide();
            $('select.'+value, this_option).removeAttr('disabled').show();
          });
        });
      </script>
    </div>
    <!-- option -->
    </div>
  </div>
  <div class="rm_section section_effect" id="font-sizes-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('FONT SIZES', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="font_nav_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_nav_size"><strong><?php echo __('Navigation text', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_nav_size-feedback" class="feedback"><strong><?php echo $__font_nav_size?></strong></span>
          <div id="font_nav_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_nav_size" value = "<?php echo $__font_nav_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_nav_size').each(function(e){
              var val = <?php echo $__font_nav_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_nav_size"]' ).val( ui.value );
                  $( '#font_nav_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the navigation items.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_text_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_text_size"><strong><?php echo __('General text', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_text_size-feedback" class="feedback"><strong><?php echo $__font_text_size?></strong></span>
          <div id="font_text_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_text_size" value = "<?php echo $__font_text_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_text_size').each(function(e){
              var val = <?php echo $__font_text_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_text_size"]' ).val( ui.value );
                  $( '#font_text_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the general text paragraphs.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h1_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h1_size"><strong><?php echo __('H1 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h1_size-feedback" class="feedback"><strong><?php echo $__font_h1_size?></strong></span>
          <div id="font_h1_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h1_size" value = "<?php echo $__font_h1_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h1_size').each(function(e){
              var val = <?php echo $__font_h1_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h1_size"]' ).val( ui.value );
                  $( '#font_h1_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H1 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h2_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h2_size"><strong><?php echo __('H2 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h2_size-feedback" class="feedback"><strong><?php echo $__font_h2_size?></strong></span>
          <div id="font_h2_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h2_size" value = "<?php echo $__font_h2_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h2_size').each(function(e){
              var val = <?php echo $__font_h2_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h2_size"]' ).val( ui.value );
                  $( '#font_h2_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H2 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h3_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h3_size"><strong><?php echo __('H3 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h3_size-feedback" class="feedback"><strong><?php echo $__font_h3_size?></strong></span>
          <div id="font_h3_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h3_size" value = "<?php echo $__font_h3_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h3_size').each(function(e){
              var val = <?php echo $__font_h3_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h3_size"]' ).val( ui.value );
                  $( '#font_h3_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H3 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h4_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h4_size"><strong><?php echo __('H4 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h4_size-feedback" class="feedback"><strong><?php echo $__font_h4_size?></strong></span>
          <div id="font_h4_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h4_size" value = "<?php echo $__font_h4_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h4_size').each(function(e){
              var val = <?php echo $__font_h4_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h4_size"]' ).val( ui.value );
                  $( '#font_h4_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H4 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h5_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h5_size"><strong><?php echo __('H5 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h5_size-feedback" class="feedback"><strong><?php echo $__font_h5_size?></strong></span>
          <div id="font_h5_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h5_size" value = "<?php echo $__font_h5_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h5_size').each(function(e){
              var val = <?php echo $__font_h5_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h5_size"]' ).val( ui.value );
                  $( '#font_h5_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H5 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_h6_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_h6_size"><strong><?php echo __('H6 headline', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_h6_size-feedback" class="feedback"><strong><?php echo $__font_h6_size?></strong></span>
          <div id="font_h6_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_h6_size" value = "<?php echo $__font_h6_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_h6_size').each(function(e){
              var val = <?php echo $__font_h6_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_h6_size"]' ).val( ui.value );
                  $( '#font_h6_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the H6 elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_slogan_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_slogan_size"><strong><?php echo __('Slogan', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_slogan_size-feedback" class="feedback"><strong><?php echo $__font_slogan_size?></strong></span>
          <div id="font_slogan_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_slogan_size" value = "<?php echo $__font_slogan_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_slogan_size').each(function(e){
              var val = <?php echo $__font_slogan_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_slogan_size"]' ).val( ui.value );
                  $( '#font_slogan_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the Slogan elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_subslogan_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_subslogan_size"><strong><?php echo __('Sub Slogan', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_subslogan_size-feedback" class="feedback"><strong><?php echo $__font_subslogan_size?></strong></span>
          <div id="font_subslogan_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_subslogan_size" value = "<?php echo $__font_subslogan_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_subslogan_size').each(function(e){
              var val = <?php echo $__font_subslogan_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_subslogan_size"]' ).val( ui.value );
                  $( '#font_subslogan_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the Sub Slogan elements.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_blog_title_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_blog_title_size"><strong><?php echo __('Blog title', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_blog_title_size-feedback" class="feedback"><strong><?php echo $__font_blog_title_size?></strong></span>
          <div id="font_blog_title_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_blog_title_size" value = "<?php echo $__font_blog_title_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_blog_title_size').each(function(e){
              var val = <?php echo $__font_blog_title_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_blog_title_size"]' ).val( ui.value );
                  $( '#font_blog_title_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the blog title.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="font_meta_size-option" class="rm_option rm_input slider_control yiw-deps">
        <label for="font_meta_size"><strong><?php echo __('Blog meta', $tpl_tdomain)?></strong></label>
        <div class="ui-slider">
          <span class="minCaption">1</span>
          <span class="maxCaption">50</span>
          <span id="font_meta_size-feedback" class="feedback"><strong><?php echo $__font_meta_size?></strong></span>
          <div id="font_meta_size" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
            <input type="hidden" name="font_meta_size" value = "<?php echo $__font_meta_size?>" />
          </div>
        </div>
        <script type="text/javascript">
          jQuery(document).ready(function($){
            $('#font_meta_size').each(function(e){
              var val = <?php echo $__font_meta_size?>;
              var minValue = 1;
              var maxValue = 50;
              $(this).slider({
                value: val,
                min: minValue,
                max: maxValue,
                range: 'min',
                slide: function( event, ui ) {
                  $( 'input[name="font_meta_size"]' ).val( ui.value );
                  $( '#font_meta_size-feedback strong' ).text( ui.value + '' );
                }
              });
            });
          });
        </script>

        <small><?php _e('Size of the meta text.', $tpl_tdomain)?></small><div class="clearfix"></div>
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