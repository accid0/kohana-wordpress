<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kadapter\plugins.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 06 Jun - 25 Mon
 */?>
<div class="postbox" id="<?php echo $blockname?>">
  <div class="inside">
  <?php if ( !empty( $plugins)):?>
    <div class="form-field form-required">
      <table class="widefat tag fixed" cellspacing="0">
        <thead>
          <tr>
            <th scope="col" id="name"
              class="manage-column column-description" style="">Kohana
              Plugin</th>
            <th scope="col" id="slug"
              class="manage-column column-description" style="">Wordpress
              Status</th>
            <th scope="col" id="slug" class="manage-column column-slug"
              style=""></th>
            <th scope="col" id="posts"
              class="manage-column column-posts num" style=""></th>
          </tr>
        </thead>
        <tbody id="the-list" class="list:tag">
        <?php foreach( $plugins as $name => $status ) : ?>
          <tr id="cat-1" class="iedit alternate">
            <td class="description column-description"><?php echo $name ?>
            </td>
            <td class="description column-description"><?php echo $status ?>
            </td>
            <td class="slug column-slug"><a
              href="javascript:install_plugin('<?php echo $name ?>')">install</a>
            </td>
            <td class="slug column-slug"><a
              href="javascript:uninstall_plugin('<?php echo $name ?>')">uninstall</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <input name="plugin" id="plugin" value="all" type="hidden">
    </div>
    <?php endif;// END IF NOT EMPTY $PLUGINS ?>
  </div>
  <div class="form-field form-required">
    <h3>Register a New Plugin</h3>
    <p>Register a new plugin if you want to include the plugin from a
      kohana inside an admin plugins page.</p>
  </div>
  <div class="form-field form-required">
    <label for="name">Plugin Name</label> <input name="plugin_name" id="plugin_name"
      value="" size="40" aria-required="true" type="text">
      <p>Enter the new plugins class name.</p>
  </div>
  <?php foreach( $__submits as $submit):?>
  <input type="submit"
    class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>"
    value="<?php echo $submit?>" name="do" />
    <?php endforeach;?>
</div>
