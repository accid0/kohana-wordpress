<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kadapter\page-routing.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 06 Jun - 24 Sun
 */?>
<div class="postbox" id="<?php echo $blockname?>">
  <div class="inside">
  <?php if ( !empty( $routes)):?>
  <div class="form-field form-required"> 
    <table class="widefat tag fixed" cellspacing="0">
      <thead>
        <tr>
          <th scope="col" id="name"
            class="manage-column column-description" style="">Kohana
            Content</th>
          <th scope="col" id="slug"
            class="manage-column column-description" style="">Wordpress
            Page</th>
          <th scope="col" id="slug" class="manage-column column-slug"
            style="">Placement</th>
          <th scope="col" id="posts"
            class="manage-column column-posts num" style=""></th>
        </tr>
      </thead>
      <tbody id="the-list" class="list:tag">
      <?php foreach( $routes as $pid => $route ) : ?>
        <tr id="cat-1" class="iedit alternate">
          <td class="description column-description"><?php echo $route['kr'] ?>
          </td>
          <td class="description column-description"><?php echo $pid ?>
          </td>
          <td class="name column-description"><?php echo $route['placement'] ?><br>
          </td>
          <td class="slug column-slug"><a
            href="javascript:delete_route('<?php echo $pid ?>')">delete</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <input name="route" id="route" value="all" type="hidden">
    </div>
      <?php endif;// END IF NOT EMPTY $ROUTES ?>
    <div class="form-field form-required"> 
    <h3>Create a New Page Map</h3>
    <p>Create a page map if you want to include the results from a
      kohana controller inside an exsisting wordpress page.</p>
    </div>
    <div class="form-field form-required"> 
    <label for="name">Kohana Controller</label> <input name="kr" id="kr"
      value="" size="40" aria-required="true" type="text">
    <p>Eg. To load the method <strong>calendar</strong> from the controller <strong>application/classes/controllers/example.php</strong> you would enter <strong>examples/calendar</strong> above.</p>
    </div>
    <div class="form-field form-required"> 
    <label for="slug">Wordpress Page</label> <select name="postid">
      <option value="">
      <?php echo esc_attr(__('Select page')); ?>
      </option>
      <?php foreach ($option_pages as $pagg) :?>
      <option value="<?php echo $pagg['value']?>" /><?php echo $pagg['title']?></option>
      <?php endforeach;?>
    </select>

    <p>Select the wordpress page in which the kohana controller will be
      included</p>
    </div>
    <div class="form-field form-required"> 
    <label for="slug">Placement</label> <select name="placement">
      <option value="">
      <?php echo esc_attr(__('Select placement')); ?>
      </option>
          <option value="<?php echo Kadapter::ATTR_NONE?>" >None Content</option> 
          <option value="<?php echo Kadapter::ATTR_BEFORE?>" >Before Page Content</option> 
          <option value="<?php echo Kadapter::ATTR_AFTER?>" >After Page Content</option> 
          <option value="<?php echo Kadapter::ATTR_REPLACE?>" >Replace Page Content</option> 
    </select>
    <p>Select the location where the kohana controller should be
      included</p>
    </div>

  </div>
  <?php foreach( $__submits as $submit):?>
  <input type="submit"
    class="button block_<?php echo sanitize_title( $blockname ) . ' ' . sanitize_title( $submit )?>"
    value="<?php echo $submit?>" name="do" />
    <?php endforeach;?>
</div>
