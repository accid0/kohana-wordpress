<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\features.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">

  <div class="rm_section" id="features-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Features', $tpl_tdomain)?>
      </h3>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="features_name-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="features_name"><strong><?php echo __('Features tab name', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "features_name" id='features_name' value = "">
        <span class="submit"><input type="submit" name="do" value="<?php echo __('Add Features', $tpl_tdomain)?>" /></span>

        <small><?php _e('Add new features tab.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id='features_delete-option' class="rm_option rm_input rm_sidebar yiw-deps">
        <label for="features_delete"><strong><?php echo __('Delete features tabs', $tpl_tdomain)?></strong></label>
        <table id='features_delete' class="cc-options">
          <tbody>

          <?php if( is_array( $features ) AND !empty( $features ) ) : ?>

            <?php foreach( $features as $id => $feature ) : ?>
            <tr>
              <td>
                <div class="delete-btn"><a href="?page=<?php echo $_GET['page'] ?>&do=Delete Features&feature=<?php echo $id ?>" title="<?php _e( 'Delete', $tpl_tdomain ) ?>"><img src="<?php echo $uri_theme ?>/images/close_16.png" alt="<?php _e( 'Delete', $tpl_tdomain ) ?>" /></a></div>
                <div class="name"><?php echo $feature ?></div>
                <div class="name" style="font-size: 11px;width:auto;"><?php echo '[features_tab name="', $feature, '" open="1"]' ?></div>
                <div class="loading-icon"><img alt="" src="<?php bloginfo('siteurl') ?>/wp-admin/images/wpspin_light.gif" style="display: none;" class="waiting"></div>
              </td>
            </tr>
              <?php endforeach ?>

            <?php else : ?>

          <tr><td><?php _e( 'No features created!', $tpl_tdomain) ?></td></tr>

            <?php endif ?>

          </tbody>
        </table>
        <small><?php _e('Delete the features tabs that you have already created.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
</div>