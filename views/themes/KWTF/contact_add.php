<?php 
/**
 * Add new field for contact customize panel.
 *
 * Page for adding new field to contact module.
 *
 * @package Wordpress
 * @subpackage Kassyopea
 * @since 1.1
 */

@header('Content-Type: ' . get_option('html_type') . '; charset=' . get_option('blog_charset')); 

?>
<html xmlns="http://www.w3.org/1999/xhtml" <?php do_action('admin_xml_ns'); ?> <?php language_attributes(); ?>>
<head>                   
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php echo get_option('blog_charset'); ?>" />
	<title><?php echo $title; ?></title>
<?php        
	wp_admin_css( 'global', true );
	wp_admin_css( 'wp-admin', true );
	//wp_print_styles( 'colors' ); 
	wp_enqueue_style( 'colors-admin', site_url() . '/wp-admin/css/colors-fresh.css' );  
	wp_print_styles( 'colors-admin' ); 
	wp_admin_css( 'media', true );  
	wp_print_scripts( 'jquery' );
	wp_print_scripts( 'thickbox' );      
?>
<style type="text/css">
html, body { min-height:100%; height:inherit; }
</style>
</head>
<body id="media-upload">
	        
	<div id="media-upload-header"></div>
	
	<form action="<?php echo '?page=' . $_GET['page'] ?>" method="post" class="media-upload-form">
		<h3 class="media-title"><?php echo $title; ?></h3>
		<p><?php echo $subtitle ?></p>
		
		<table class="describe" style="display: table;">
			
			<tbody>
				<tr>
					<th class="label" valign="top" scope="row">
						<label for="fields_title"><?php _e( 'Title Field', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[title]" id="fields_title" value="<?php echo $fields['title'] ?>" />
						<p class="help"><?php _e( 'Insert the title of field.', $tpl_tdomain ) ?></p>
					</td>
				</tr>
				
				<tr>
					<th class="label" valign="top" scope="row">
						<label for="fields_data_name"><?php _e( 'Data Name', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[data_name]" id="fields_data_name" value="<?php echo $fields['data_name'] ?>" />
						<p class="help"><?php _e( 'The identification name of this field, that you can insert into body email configuration.', $tpl_tdomain ) ?></p>
					</td>
				</tr>	
				
				<tr>
					<th class="label" valign="top" scope="row">
						<label for="fields_description"><?php _e( 'Description', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[description]" id="fields_description" value="<?php echo $fields['description'] ?>" />
						<p class="help"><?php _e( 'Small description, showed near name title.', $tpl_tdomain ) ?></p>
					</td>
				</tr>	
				
				<tr>                 
					<th class="label" valign="top" scope="row">
						<label for="type-select"><?php _e( 'Type field', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<select id="type-select" name="fields[type]">
							<?php echo $type_options; ?>
						</select>                                     
						<p class="help"><?php _e( 'Select the type of this field.', $tpl_tdomain ) ?></p>
					</td>
				</tr>      
				
				<tr class="options-list toggled<?php if( $fields['type'] != 'select' AND $fields['type'] != 'radio' ) : ?> hide-if-js<?php endif; ?>">
					<th class="label" valign="top" scope="row">
						<label><?php _e( 'Add options', $tpl_tdomain ) ?></label>
					</th>  
					<td class="field" colspan="2">                                        
						<a href="#" class="add-field-option button-secondary"><?php _e( 'Add option', $tpl_tdomain ) ?></a><br />
						
						<?php 
						if( is_array( $fields['option'] ) AND !empty( $fields['option'] ) ) :
							foreach( $fields['option'] as $id => $value ) :
								$selected = '';
								if( intval( $fields['option_selected'] ) == $id )
									$selected = ' checked=""';
						?>
						<p class="option">      
							<label><input type="radio" name="fields[option_selected]" value="<?php echo $id ?>"<?php echo $selected ?> /> <?php _e( 'Selected', $tpl_tdomain ) ?></label>
							<input type="text" name="fields[option][]" style="width:50%" value="<?php echo $value ?>" />
							<a href="#" class="del-field-option button-secondary"><?php _e( 'Delete option', $tpl_tdomain ) ?></a>
						</p>
						<?php endforeach; endif; ?>
						
						<p class="option">      
							<label><input type="radio" name="fields[option_selected]" value="<?php echo ( $id > 0 ) ? $id + 1 : 0 ?>" /> <?php _e( 'Selected', $tpl_tdomain ) ?></label>
							<input type="text" name="fields[option][]" style="width:50%" />
							<a href="#" class="del-field-option button-secondary"><?php _e( 'Delete option', $tpl_tdomain ) ?></a>
						</p>
						
					</td>
				</tr>       
				
				<tr class="if-checked toggled<?php if( $fields['type'] != 'checkbox' ) : ?> hide-if-js<?php endif; ?>">
					<th class="label" valign="top" scope="row">
						<label><?php _e( 'Checked', $tpl_tdomain ) ?></label>
					</th>  
					<td class="field" colspan="2">    
						<label>
							<input type="checkbox" value="yes" name="fields[already_checked]" id="fields_already_checked"<?php checked( $fields['already_checked'], 'yes' ); ?> />
							<p class="help" style="display:inline;"><?php _e( 'Select this if you want this field already checked.', $tpl_tdomain ) ?></p>
						</label>
					</td>
				</tr>      
				
				<tr class="if-checked toggled" <?php if( $fields['type'] != 'checkbox' ) : ?> style="display:none;"<?php endif; ?>>
					<th class="label" valign="top" scope="row">
						<label for="fields_label_checkbox"><?php _e( 'Label for Checkbox', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[label_checkbox]" id="fields_label_checkbox" value="<?php echo $fields['label_checkbox'] ?>" />
						<p class="help"><?php _e( 'Insert the label message for checkbox.', $tpl_tdomain ) ?></p>
					</td>
				</tr>      
				
				<tr>
					<th class="label" valign="top" scope="row">
						<label for="fields_msg_error"><?php _e( 'Message Error', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[msg_error]" id="fields_msg_error" value="<?php echo $fields['msg_error'] ?>" />
						<p class="help"><?php _e( 'Insert the error message for validation.', $tpl_tdomain ) ?></p>
					</td>
				</tr>	    
				
				<tr>           
					<th class="label" valign="top" scope="row">
						<label><?php _e( 'Required', $tpl_tdomain ) ?></label>
					</th>  
					<td class="field" colspan="2">    
						<label>
							<input type="checkbox" value="yes" name="fields[required]" id="fields_required"<?php checked( $fields['required'], 'yes' ); ?> />
							<p class="help" style="display:inline;"><?php _e( 'Select this if it must be required.', $tpl_tdomain ) ?></p>
						</label>
					</td>
				</tr>        
				
				<tr>           
					<th class="label" valign="top" scope="row">
						<label><?php _e( 'Email', $tpl_tdomain ) ?></label>
					</th>  
					<td class="field" colspan="2">    
						<label>
							<input type="checkbox" value="yes" name="fields[email_validate]" id="fields_email_validate"<?php checked( $fields['email_validate'], 'yes' ); ?> />
							<p class="help" style="display:inline;"><?php _e( 'Select this if it must be a valid email.', $tpl_tdomain ) ?></p>
						</label>
					</td>
				</tr>             
				
				<tr>           
					<th class="label" valign="top" scope="row">
						<label><?php _e( 'Reply To', $tpl_tdomain ) ?></label>
					</th>  
					<td class="field" colspan="2">    
						<label>
							<input type="checkbox" value="yes" name="fields[reply_to]" id="fields_reply_to"<?php checked( $fields['reply_to'], 'yes' ); ?> />
							<p class="help" style="display:inline;"><?php _e( 'Select this if it\'s the email where you can reply.', $tpl_tdomain ) ?></p>
						</label>
					</td>
				</tr>   
				
				<tr>
					<th class="label" valign="top" scope="row">
						<label for="fields_class"><?php _e( 'Class', $tpl_tdomain ) ?></label>
					</th>
					<td class="field">
						<input type="text" name="fields[class]" id="fields_class" value="<?php echo $fields['class'] ?>" />
						<p class="help"><?php _e( 'Insert an additional class for more personalization. (you can insert more class, separeted by space)', $tpl_tdomain ) ?></p>
					</td>
				</tr>	
				
				<tr>
					<td colspan="2">
						<p>                                                                                                       
							<input type="hidden" name="do" value="<?php _e( 'Save Field', $tpl_tdomain ) ?>" />
							<input type="hidden" name="c" value="<?php echo $c_field ?>" />
							<input type="submit" class="button-secondary" value="<?php _e( 'Save', $tpl_tdomain ) ?>" />
							<input type="button" class="button-secondary" value="<?php _e( 'Reset', $tpl_tdomain ) ?>" onclick="self.parent.tb_remove();" />
							<img class="waiting" style="display:none;" src="<?php echo admin_url( 'images/wpspin_light.gif' ); ?>" alt="" />
						</p> 
					</td>
				</tr>
			</tbody>
		
		</table>
		
	</form>
	
	<script type="text/javascript">
		jQuery(document).ready(function($){   
		
			$('.hide-if-js').hide();
		
			function disable_submit()
			{
				$('input[type="submit"]').attr("disabled", true);
				add_loading();
			}
		
			function enable_submit()
			{
				$('input[type="submit"]').removeAttr("disabled");
				remove_loading();
			}
			
			function add_loading()
			{
				$('.waiting').show();
			}
			
			function remove_loading()
			{
				$('.waiting').hide();
			}
			
			function remove_input(e)
			{
				$(e).css({backgroundColor:'#FF0000'}).animate({opacity:0}, 400, function(){
					$(e).remove();
				});	
			}
		
			$('.media-upload-form').live( 'submit', function(){			                                 
				var datastring = 'page=<?php echo $_GET['page'] ?>&';
				
				$('.options-list p.option').each(function(e){
					if( $('input[type="text"]', this).val() == '' )
						remove_input(this);
				});              
					
				disable_submit();
				
				setTimeout( function() {
					$('input, select, textarea').each(function(){                           
						
						if( !( ( $(this).is(':checkbox') || $(this).is(':radio') ) && !$(this).is(':checked') ) )	
						{
							var val = $(this).val();
							datastring = datastring + $(this).attr('name') + "=" + val + '&';    
						}
					});              
					
					$.ajax({
						url: '<?php echo admin_url( 'options-general.php' ) ?>',
						data: datastring,
						type: 'GET',
						success: function(response){        
							self.parent.location = '<?php echo admin_url( 'options-general.php?page=' . $_GET['page'] ) ?>';
							//self.parent.location = response;
						
							//enable_submit();
						}     
					});
				}, 500);
					
				return false;
			});
		
			$('#type-select').live( 'change', function(){
				var val = $(this).val();
				
				if( val == 'select' || val == 'radio' )
				{
					$('.toggled').hide();
					$('.options-list').show();
				} 
				else if( val == 'checkbox' )
				{                          
					$('.toggled').hide();
					$('.if-checked').show();
				}
				else
				{
					$('.toggled').hide();
				}
			});
			
			$('input[type="reset"]').live( 'click', function(){
				$('.toggled').hide();
			});
		
			$('.add-field-option').live( 'click', function(){
				var field_container = $(this).parent();                           
				var last_val = parseInt( field_container.find('p.option:last-child input[type="radio"]').val() );
				field_container.find('p.option:last-child').clone().appendTo(field_container).children('input[type="text"]').val('');
				field_container.find('p.option:last-child input[type="radio"]').val( last_val + 1 );
				return false;	
			});
			
			$('a.del-field-option').live( 'click', function(){
				$(this).parent().remove();
				return false;
			});                          
		
		});
	</script>    
	
</body>
</html>