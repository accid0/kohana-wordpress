<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\exportimport.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section" id="export-theme-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Import/Export Theme Data', $tpl_tdomain)?>
      </h3>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="import_theme-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="import-file"><strong><?php echo __('Import Theme Data', $tpl_tdomain)?></strong></label>
        <input  type="file" name = "import-file" id='import-file' value = "">
        <span class="submit"><input type="submit" name="do" value="<?php echo __('Import Theme', $tpl_tdomain)?>" /></span>

        <small><?php _e('Insert here the file that you have exported by another installation. Make a backup of all installation before import, because it will remove all posts and options of theme, so that you can restore if there are problems after import.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="export_theme-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="export_theme"><strong><?php echo __('Export Theme Data', $tpl_tdomain)?></strong></label>
        <span class="submit"><input type="submit" id='export_theme' name="do" value="<?php echo __('Export Theme', $tpl_tdomain)?>" /></span>

        <small><?php _e('Click here to download a file with all export, that you will use to import to another installation.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php _e( 'Import Panel configuration', $tpl_tdomain ) ?>
      </h3>

      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div class="rm_option rm_input rm_text" id="panel_import-option">
          <label for="new_configuration"><?php _e( 'Save configuration', $tpl_tdomain ) ?></label>
          <input type="text" style="width:240px;" id="new_configuration" name="new_configuration" />
          <input type="submit" name="do" class="button" value="<?php _e( 'Save Panel Configuration', $tpl_tdomain ) ?>" />
          <small>
            <?php _e( 'Save the actual configuration of theme options. Put the name and you be able to see this configuration on the list below.', $tpl_tdomain ) ?><br>
            <?php _e( 'In future, you can select it to restore the options just saved.', $tpl_tdomain ) ?>
          </small>
          <div class="clearfix"></div>
      </div>
      <!-- option -->
      <div class="rm_option rm_input rm_select">
          <label for="name_configuration"><?php _e( 'Apply Configuration', $tpl_tdomain ) ?></label>

          <select name="name_configuration" id="name_configuration" style="width:240px;">
            <option value="0"></option>
            <?php foreach ( $configs as $id => $config ) { ?>
            <option value="<?php echo $id ?>"><?php echo $config['name']; ?></option>
            <?php } ?>
          </select>

          <input type="submit" name='do' value="<?php _e( 'Apply Panel', $tpl_tdomain ) ?>" class="button-secondary" />

          <small><?php _e( 'Choose one of these settings saved before, to apply them on the theme.', $tpl_tdomain ) ?></small>
          <div class="clearfix"></div>
        </div>

    </div>
  </div>
  <div class="rm_section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php _e( 'List of all configurations', $tpl_tdomain ) ?>
      </h3>

      <div class="clearfix"></div>
    </div>
    <div class="rm_options">

      <div class="rm_option rm_input rm_sidebar">
        <label><?php _e( 'All configurations saved', $tpl_tdomain ) ?></label>

        <table class="cc-options">
          <tbody>

          <?php if( is_array( $configs ) AND !empty( $configs ) ) : ?>

            <?php foreach( $configs as $id => $config ) : ?>
            <tr>
              <td>
                <div class="delete-btn"><a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Delete Panel', $tpl_tdomain)?>&id_configuration=<?php echo $id ?>" title="<?php _e( 'Delete Configuration', $tpl_tdomain ) ?>"><img src="<?php echo $uri_theme ?>/images/close_16.png" alt="<?php _e( 'Delete Configuration', $tpl_tdomain ) ?>" /></a></div>
                <div class="name"><?php echo $config['name'] ?></div>
                <div class="loading-icon"><img alt="" src="<?php bloginfo('siteurl') ?>/wp-admin/images/wpspin_light.gif" style="display: none;" class="waiting"></div>
              </td>
            </tr>
              <?php endforeach ?>

            <?php else : ?>

          <tr><td><?php _e( 'No configurations created!', $tpl_tdomain ) ?></td></tr>

            <?php endif ?>

          </tbody>
        </table>

        <small><?php _e( 'The list of all configurations saved. You can apply one of these theme options saved and restore them.', $tpl_tdomain ) ?></small>
        <div class="clearfix"></div>
      </div>

    </div>
  </div>
  <br />

  <div class="rm_section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php _e( 'Export/Import', $tpl_tdomain ) ?>
      </h3>

      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <div class="rm_option rm_input rm_textarea">
        <label for="import_configuration"><?php _e( 'Import Theme Options', $tpl_tdomain ) ?></label>
        <textarea id='import_configuration' name="import_configuration" cols="" rows="" class="listdata form-input-tip"></textarea>

        <input type="submit" name='do' value="<?php _e( 'Import Panel', $tpl_tdomain ) ?>" class="button-primary" style="float:right;margin-top:10px" />

        <small><?php _e( 'Put here the string for import all theme options and configure the theme in one step.', $tpl_tdomain ) ?></small><div class="clearfix"></div>
      </div>

      <div class="rm_option rm_input rm_textarea">

        <label for="export_panel"><?php _e( 'Export Theme Options', $tpl_tdomain ) ?></label>
        <textarea id='export_panel' name="export_panel" cols="" rows="" class="listdata form-input-tip"><?php echo $code ?></textarea>
        <small><?php _e( 'This is your theme options in one code string, that you can put in the "Import" textarea and restore the entire panel configuration.', $tpl_tdomain ) ?></small><div class="clearfix"></div>
      </div>

    </div>
  </div>
</div>