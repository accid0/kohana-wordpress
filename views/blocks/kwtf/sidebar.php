<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\sidebar.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">
  <div class="rm_section" id="sidebars-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Sidebarss', $tpl_tdomain)?>
      </h3>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="sidebar_name-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="sidebar_name"><strong><?php echo __('Sidebars tab name', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "sidebar_name" id='sidebar_name' value = "">
        <span class="submit"><input type="submit" name="do" value="<?php echo __('Add Sidebar', $tpl_tdomain)?>" /></span>

        <small><?php _e('Add a new sidebar.<br/><b>NB:</b> by default, there are 1 sidebar have already created: <br />- "<strong>Blog Sidebar</strong>", for Blog Template; <br />- "<strong>Home Colourful Section</strong>"; <br />- "<strong>Home Sidebar</strong>"; <br />- "<strong>Footer Row 1/2/3</strong>", for Footer.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id='sidebar_delete-option' class="rm_option rm_input rm_sidebar yiw-deps">
        <label for="sidebar_delete"><strong><?php echo __('List sidebar created', $tpl_tdomain)?></strong></label>
        <table id='sidebar_delete' class="cc-options">
          <tbody>

          <?php if( is_array( $sidebars ) AND !empty( $sidebars ) ) : ?>

            <?php foreach( $sidebars as $id => $sidebar ) : ?>
            <tr>
              <td>
                <div class="delete-btn"><a href="?page=<?php echo $_GET['page'] ?>&do=Delete Features&sidebar=<?php echo $id ?>" title="<?php _e( 'Delete', $tpl_tdomain ) ?>"><img src="<?php echo $uri_theme ?>/images/close_16.png" alt="<?php _e( 'Delete', $tpl_tdomain ) ?>" /></a></div>
                <div class="name"><?php echo $sidebar ?></div>
                <div class="loading-icon"><img alt="" src="<?php bloginfo('siteurl') ?>/wp-admin/images/wpspin_light.gif" style="display: none;" class="waiting"></div>
              </td>
            </tr>
              <?php endforeach ?>

            <?php else : ?>

          <tr><td><?php _e( 'No sidebars created!', $tpl_tdomain) ?></td></tr>

            <?php endif ?>

          </tbody>
        </table>
        <small><?php _e('Table with sidebar that you have created.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
    </div>
  </div>
</div>