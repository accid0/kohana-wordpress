<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name blocks\kwtf\contact-forms.php
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created  2012 - 09 Sep - 23 Sun
 */?>
<div id="<?php echo $blockname?>">

  <div class="rm_section" id="new-form-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Create new', $tpl_tdomain)?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Update', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
    <!-- option -->
      <div id="contact_form_add-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_add"><strong><?php echo __('New contact form.', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_add" id='contact_form_add' value = "">
        <span class="submit"><input type="submit" name='do' value="<?php _e('Add Form' , $tpl_tdomain)?>" /></span>
        <small><?php _e('Add new empty contact form, that you can add into pages or posts. After adding new form, select it on option below and click on "Configure" button to configure it.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_choosen-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="contact_form_choosen"><strong><?php echo __('Configure contact form.', $tpl_tdomain)?></strong></label>
        <select name = "contact_form_choosen" id='contact_form_choosen'>
          <?php foreach ( $options_form as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $__contact_form_choosen, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <span class="submit"><input type="submit" name='do' value="<?php _e('Configure', $tpl_tdomain)?>" /></span>
        <small><?php _e('Choose a contact form and save, to configure below your form choosen.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <?php if ($form_shortcode):?>
      <div class="rm_option rm_input rm_text yiw-deps" style="text-align:center;">
        <p><strong><?php echo $form_shortcode?></strong></p>
        <div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
        <?php endif?>
      <!-- option -->
      <div id="contact_form_delete-option" class="rm_option rm_input rm_text rm_sidebar yiw-deps" style="text-align:center;">
        <label for="contact_form_delete"><strong><?php echo __('Delete forms', $tpl_tdomain)?></strong></label>
        <table id='contact_form_delete' class="cc-options">
          <tbody>

          <?php if( is_array( $options_form ) AND !empty( $options_form ) ) : ?>

            <?php foreach( $options_form as $id => $sidebar ) : ?>
              <?php if ( $id == '') continue;?>
            <tr>
              <td>
                <div class="delete-btn"><a href="?page=<?php echo $_GET['page'] ?>&do=Delete Form&key=<?php echo $id ?>" title="<?php _e( 'Delete', $tpl_tdomain ) ?>"><img src="<?php echo $uri_theme ?>/images/close_16.png" alt="<?php _e( 'Delete', $tpl_tdomain ) ?>" /></a></div>
                <div class="name"><?php echo $sidebar ?></div>
                <div class="loading-icon"><img alt="" src="<?php bloginfo('siteurl') ?>/wp-admin/images/wpspin_light.gif" style="display: none;" class="waiting"></div>
              </td>
            </tr>
              <?php endforeach ?>

            <?php else : ?>

          <tr><td><?php _e( 'No forms created!', $tpl_tdomain ) ?></td></tr>

            <?php endif ?>

          </tbody>
        </table>
        <small><?php _e('Delete the forms that you have already created.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="name_form-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="name_form"><strong><?php echo __('Add example form.', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "name_form" id='name_form' value = "">
        <span class="submit"><input type="submit" name='do' value="<?php _e('Add example form' , $tpl_tdomain)?>" /></span>
        <small><?php _e('Add a simple example form, specifing the name.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <?php if ($__contact_form_choosen!=''):?>
  <div class="rm_section section_effect" id="config-form-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="inactive" alt="">
        <?php echo __('Contact Form Configuration for ' , $tpl_tdomain) . $options_form[$__contact_form_choosen]?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Save Configure', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="contact_form_to-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_to"><strong><?php echo __('To', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_to" id='contact_form_to' value = "<?php echo $contact_form_to?>">
        <small><?php _e('Define the emails witch send the email written by the user. If they are more then one, you can write theme separated by a comma.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_from_email-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_from_email"><strong><?php echo __('From Email', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_from_email" id='contact_form_from_email' value = "<?php echo $contact_form_from_email?>">
        <small><?php _e('Define from what email send the message.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_from_name-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_from_name"><strong><?php echo __('From Name', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_from_name" id='contact_form_from_name' value = "<?php echo $contact_form_from_name?>">
        <small><?php _e('Define the name of email that send the message.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_subject-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_subject"><strong><?php echo __('Subject', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_subject" id='contact_form_subject' value = "<?php echo $contact_form_subject?>">
        <small><?php _e('Define the subject of the email sent to you.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_body-option" class="rm_option rm_input rm_textarea yiw-deps">
        <label for="contact_form_body"><strong><?php echo __('Body', $tpl_tdomain)?></strong></label>
        <textarea  type="textarea" name = "contact_form_body" id='contact_form_body'  cols="" rows="" class="listdata form-input-tip">
          <?php echo $contact_form_body?>
        </textarea>
        <small><?php _e('Configure the body email that arrives to you. You can add some shortcode, to add some value insert by user on frontend module. The shortcodes are composed with "data_name" that you have insert on each field, on below table, like: %data_name%.<br /><em>HTML is allowed.</em>', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_submit_label-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_submit_label"><strong><?php echo __('Label Submit Button', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_submit_label" id='contact_form_submit_label' value = "<?php echo $contact_form_submit_label?>">
        <small><?php _e('Define the label of submit button.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_submit_alignment-option" class="rm_option rm_input rm_select yiw-deps">
        <label for="contact_form_submit_alignment"><strong><?php echo __('Alignment Submit Button', $tpl_tdomain)?></strong></label>
        <select name = "contact_form_submit_alignment" id='contact_form_submit_alignment'>
          <?php foreach ( $options_alignement as $val => $option) : ?>
          <option value="<?php echo $val ?>" <?php selected( $contact_form_submit_alignment, $val ) ?>><?php echo $option; ?></option>
          <?php endforeach ?>
        </select>
        <small><?php _e('Set the alignment of submit button.', $tpl_tdomain)?></small><div class="clearfix"></div>
        <div class="fade_color"></div>
      </div>
      <!-- option -->
      <div id="contact_form_success_sending-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_success_sending"><strong><?php echo __('Message Success', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_success_sending" id='contact_form_success_sending' value = "<?php echo $contact_form_success_sending?>">
        <small><?php _e('Define the message for success sending.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
      <div id="contact_form_error_sending-option" class="rm_option rm_input rm_text yiw-deps">
        <label for="contact_form_error_sending"><strong><?php echo __('Message Error', $tpl_tdomain)?></strong></label>
        <input  type="text" name = "contact_form_error_sending" id='contact_form_error_sending' value = "<?php echo $contact_form_error_sending?>">
        <small><?php _e('Define the message when there is an error on send of email.', $tpl_tdomain)?></small><div class="clearfix"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <div class="rm_section" id="fields-form-section">
    <div class="rm_title">
      <h3>
        <img src="<?php echo $uri_theme?>/images/trans.png" class="noeffect" alt="">
        <?php echo __('Customize Contact module ' , $tpl_tdomain) . $options_form[$__contact_form_choosen]?>
      </h3>
      <span class="submit"><input type="submit" name="do" value="<?php echo __('Save Configure', $tpl_tdomain)?>" /></span>
      <div class="clearfix"></div>
    </div>
    <div class="rm_options">
      <!-- option -->
      <div id="contact_fields-option" class="rm_option rm_input rm_contact yiw-deps">
        <p>
          <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Add Field', $tpl_tdomain)?>&TB_iframe=true" class="button-primary thickbox"><?php _e('Add Field', $tpl_tdomain)?></a>
        </p>
        <table class="wp-list-table widefat fixed posts" cellpadding="0">
          <thead>
          <tr>
            <th scope="col" class="name-field"><?php _e( 'Field Title', $tpl_tdomain ) ?></th>
            <th scope="col" class="info-field"><?php _e( 'Data Name', $tpl_tdomain ) ?></th>
            <th scope="col" class="info-field"><?php _e( 'Required', $tpl_tdomain ) ?></th>
            <th scope="col"><?php _e( 'Type', $tpl_tdomain ) ?></th>
            <th scope="col" class="controls-field">&nbsp;</th>
          </tr>
          </thead>
          <tbody>

            <?php if( is_array( $contact_fields ) ) : ?>
            <?php foreach( $contact_fields as $id => $field ) : ?>
            <tr<?php if( $id % 2 ) echo ' class="alternate"'; ?> valign="top">
              <th class="name-field" scope="row"><?php echo stripslashes_deep( $field['title'] ) ?></th>
              <td class="info-field"><?php echo stripslashes_deep( $field['data_name'] ) ?></td>
              <td class="info-field"><?php echo ( isset( $field['required'] ) AND $field['required'] == 'yes' ) ? __( 'Yes', $tpl_tdomain ) : __( 'No', $tpl_tdomain ) ?></td>
              <td><?php echo $field['type'] ?></td>
              <td class="controls-field">
										<span class="items-ord">
											<?php if( $id != 0 ) : ?>
                      <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Array Up', $tpl_tdomain)?>&key=<?php echo $id ?>" class="item-move-up"><abbr title="<?php _e( 'Move up', $tpl_tdomain ) ?>">&#8593;</abbr></a>
                      <?php else: ?>
                      &nbsp;
                      <?php endif; ?>
                      |
                      <?php if( $id != count( $contact_fields ) - 1 ) : ?>
                      <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Array Down', $tpl_tdomain)?>&key=<?php echo $id ?>" class="item-move-down"><abbr title="<?php _e( 'Move down', $tpl_tdomain ) ?>">&#8595;</abbr></a>
                      <?php else: ?>
                      &nbsp;
                      <?php endif; ?>
										</span>
                <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Edit Field'  , $tpl_tdomain)?>&id=<?php echo $id ?>&TB_iframe=true" title="<?php _e( 'Edit'  , $tpl_tdomain ) ?>" class="button-primary thickbox"><?php _e( 'Edit', $tpl_tdomain ) ?></a>
                <a href="?page=<?php echo $_GET['page'] ?>&do=<?php _e('Delete Field', $tpl_tdomain)?>&key=<?php echo $id ?>&TB_iframe=true" title="<?php _e( 'Delete', $tpl_tdomain ) ?>" class="button-secondary"><?php _e( 'Delete', $tpl_tdomain ) ?></a>
              </td>
            </tr>
              <?php endforeach ?>
            <?php else : ?>
          <tr>
            <td colspan="4"><?php _e( 'No fields created yet.', $tpl_tdomain ) ?></td>
          </tr>
            <?php endif ?>

          </tbody>
        </table>
        <div class="clearfix"></div>
      </div>
      <!-- option -->
    </div>
  </div>
  <?php endif?>
</div>