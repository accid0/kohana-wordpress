// Define default variables
var uploadInput;

var layerSlider = {
	
	g : {
		dragContainer : null
	},
	
	init : function() {
		
		// Bind an event to add new slide
		jQuery('.layerslider_add_slide').live('click', function(e) {
			e.preventDefault();
			layerSlider.addSlide(this);
		});
		
		// Bind add sublayer button event
		jQuery('.layerslider_add_sublayer').live('click', function(e) {
			e.preventDefault();
			layerSlider.addSublayer(this);
		});

		// Bind upload button to show media uploader
		jQuery('.layerslider_upload_input').live('click', function() {
			uploadInput = this;
			jQuery('.draggable iframe, .draggable embed, .draggable object').hide();
			tb_show('', 'media-upload.php?post_id=0&type=image&amp;TB_iframe=true&width=650&height=400');
			return false;
		});
		
		
		// Bind submit event
		jQuery('#layerslider_form').submit(function(e) {
			e.preventDefault();
			layerSlider.submit(this);
		});
		
		
		layerSlider.addSortables();
		
		jQuery('input[name="top"],input[name="left"]').live('keyup', function() {
			
			// Get top value
			var position = parseInt(jQuery(this).val());

			// Get image src
			var index = jQuery(this).closest('tr').index() - 1;
			
			// Get container
			var container = jQuery(this).closest('.layerslider_slides').find('.draggable');

			// Reposition the image
			if(jQuery(this).attr('name') == 'top') {
				container.find('*').eq(index).css('top', position);
			} else {
				container.find('*').eq(index).css('left', position);
			}
		});


		// Bind layer select event
		jQuery('.layerslider-layer-select').live('click', function() {
			
			// Save clicked checkbox
			var checkbox = this;
			
			// Iterate over the checkboxes of the parent element
			jQuery(this).closest('table').find('.layerslider-layer-select').each(function() {
			
				// Leave checked the clicked element
				if(this == checkbox) {
					return true;
				}
				
				// Disable all the other checkboxes
				jQuery(this).attr('checked', false);
			});
			
			// Check the state of the checkbox
			if(jQuery(checkbox).attr('checked') == true || jQuery(checkbox).attr('checked') == 'checked') {
				
				// Hide other layers
				jQuery(checkbox).closest('.layerslider_slides').find('.draggable:first *').css({ opacity : 0.4 });
				
				// Get selected layer's image property
				var index = jQuery(checkbox).closest('tr').index() -1;
				
				// Show the one that selected
				jQuery(checkbox).closest('.layerslider_slides').find('.draggable:first *').eq(index).css({ opacity : 1, zIndex : 100 });
				
			} else {

				// Show all the layers
				jQuery(checkbox).closest('.layerslider_slides').find('.draggable:first *').each(function(index) {
					
					jQuery(this).css({ opacity : 1, zIndex : (index+1) });
				})
			}
		});
		
		// Bind remove layer event
		jQuery('.layerslider_slides .remove').live('click', function(e) {
			e.preventDefault();
			layerSlider.removeSubLayer(this);
		});
		
		layerSlider.addDrag();
		
		// Create tabs
		$tabs = jQuery('#layerslider-tabs').tabs({
		
			tabTemplate: "<li><a href='#{href}'>#{label}</a> <span class='ui-icon ui-icon-close'>X</span></li>"
		});
		
		// Remove tabs
		jQuery('#layerslider-tabs span.ui-icon-close').live('click', function() {
			if(confirm('Are you sure to remove this slider?')) {
				var index = jQuery('li', $tabs ).index( jQuery( this ).parent() );
				$tabs.tabs('remove', index );
			}
		});
		
		// Add tabs
		jQuery('#layerslider-add-tab').click(function(e) {
			
			// Prevent browser default submisson
			e.preventDefault();
			
			// Get next index
			var counter = jQuery('#layerslider-tabs ul:first li').length + 1;
			
			// Add the tab
			$tabs.tabs('add', '#tabs-' + counter, 'LayerSlider #' + counter );
			
			// Fill with content
			jQuery('#tabs-' + counter).html( jQuery('#layerslider-sample-tab').html() );
			
			// Layers sortable
	        jQuery('.layerslider_slides_wrapper').sortable({
				containment: 'parent',
				tolerance: 'pointer',
				disabled: true
	        });
		});
		
		
		// Remove layer
		jQuery('.layerslider_remove_layer').live('click', function(e) {
			e.preventDefault();
			if(confirm('Are you sure to remove this layer?')) {
				jQuery(this).closest('li').slideUp(function() {
					jQuery(this).remove();
				});
			}
		});
		
		// Update preview width
		jQuery('input[name="width"]').live('keyup', function() {
			jQuery(this).closest('div').find('.draggable_wrapper').width( parseInt(jQuery(this).val()) );
			jQuery(this).closest('div').find('.draggable').width( parseInt(jQuery(this).val()) );
		});

		// Update preview height
		jQuery('input[name="height"]').live('keyup', function() {
			jQuery(this).closest('div').find('.draggable_wrapper').height( parseInt(jQuery(this).val()) );
			jQuery(this).closest('div').find('.draggable').height( parseInt(jQuery(this).val()) );
		});
		
		// Disable text fields depending on content type
		jQuery('.layerslider_slides_wrapper > li table tr').each(function() {
			
			// Disable HTML and Style fields
			if( jQuery(this).find('select[name="type"] option:selected').val() == 'img') {
				jQuery(this).find('input[name="html"]').attr('disabled', true);
				jQuery(this).find('input[name="style"]').attr('disabled', true);
			
			// Disable image field
			} else {
				jQuery(this).find('input[name="image"]').attr('disabled', true);
			}
		});
		
		// Bind change event in type selects
		jQuery('select[name="type"]').live('change', function() {
			
			layerSlider.updatePreview( jQuery(this).closest('table') );
		});
		
		
		jQuery('input[name="html"]').live('keyup', function() {
		
			layerSlider.updatePreview( jQuery(this).closest('table') );
		});


		jQuery('input[name="style"]').live('keyup', function() {
		
			layerSlider.updatePreview( jQuery(this).closest('table') );
		});
		
		jQuery('.resize').live('focus', function(){
			jQuery(this).animate({
				width: 600
			}, 350 );
		});

		jQuery('.resize').live('blur', function(){
			jQuery(this).animate({
				width: 50
			}, 350 );
		});
		
/*		jQuery('#TB_closeWindowButton, #TB_closeWindowButton img').live('click', function() {
			jQuery('.draggable iframe, .draggable embed, .draggable object').show();
		});
*/
		jQuery('input[name="backgroundcolor"]').live('keyup', function() {
			jQuery(this).closest('table').next().find('.draggable_wrapper').css('background-color', jQuery(this).val() );
		});
		
		jQuery('.layerslider_sort_layers').live('click',function(e) {
			
			e.preventDefault();

			if( jQuery(this).hasClass('reordering') ){
				jQuery(this).parent().find('.layerslider_slides_wrapper .layerslider_slides').each(function(){
					jQuery(this).css({
						border: 'none'
					});
					jQuery(this).find('h1:first').remove();
					jQuery(this).find('> *').show();
				});
				jQuery(this).parent().find('.layerslider_slides_wrapper').sortable( 'option', 'disabled', true );

				jQuery(this).html('Reorder Layers');
				jQuery(this).removeClass('reordering');
			}else{
				jQuery(this).parent().find('.layerslider_slides_wrapper .layerslider_slides').each(function(){
					jQuery(this).css({
						border: '2px dotted #777'
					});
					jQuery(this).find('> *').hide();
					jQuery('<h1>').css({
						paddingLeft: '10px',
						fontSize: '18px',
						color: '#555'
					}).html( jQuery(this).find('input[name="title"]').val() ).prependTo( jQuery(this) );
					jQuery('<i>').css({
						fontSize: '15px',
						fontWeight: 'normal',
						color: '#777'						
					}).html(' (drag this box to change order)').appendTo( jQuery(this).find('h1:first') );
				});

				jQuery(this).parent().find('.layerslider_slides_wrapper').sortable( 'option', 'disabled', false );
				jQuery(this).html('Finish Reordering Layers');
				jQuery(this).addClass('reordering');
			}
		});

        jQuery('.layerslider_slides_wrapper').sortable({
			containment: 'parent',
			tolerance: 'pointer',
			disabled: true
        });
	},
	
	updatePreview : function(el) {
		
		// Remove all preview items
		jQuery(el).closest('li').find('.draggable *').remove();
		
		jQuery(el).find('tr').each(function(index) { 
			
			if(index == 0) {
				return true;
			}
			
			// Get type val
			var type = jQuery(this).find('select[name="type"] option:selected').val();

			// Disable HTML and Style fields
			if( type == 'img') {
				
				// Re-enable all fields
				jQuery(this).find('input,select').attr('disabled', false);
				
				// Disable certain fields
				jQuery(this).find('input[name="html"]').attr('disabled', true);
				jQuery(this).find('input[name="style"]').attr('disabled', true);
				
				// Update the preview
				
					// Get the index
					var index = jQuery(this).index() - 1;
					
					// Get the preview container
					var container = jQuery(this).closest('.layerslider_slides').find('.draggable');
					
					// Get target element if any
					var target = container.find('*').eq(index);
					
					// Append the image if any
					if( jQuery(this).find('input[name="image"]').val() != '') {
						
						// Append
						var clone = jQuery('<img>').appendTo(container).attr('src', jQuery(this).find('input[name="image"]').val());
						
						// Style settings
						clone.css('top', jQuery(this).find('input[name="top"]').val() + 'px');
						clone.css('left', jQuery(this).find('input[name="left"]').val() + 'px');
						clone.css('z-index', index + 1);
						
						// Add dragging
						layerSlider.addDrag();
						
						// Remove target
						target.remove();
					}
					
			// Disable image field
			} else {
		
				// Re-enable all fields
				jQuery(this).find('input,select').attr('disabled', false);
				
				// Disable certain fields
				jQuery(this).find('input[name="image"]').attr('disabled', true);
				
				// Update the preview

					// Get the index
					var index = jQuery(this).index() - 1;
					
					// Get the preview container
					var container = jQuery(this).closest('.layerslider_slides').find('.draggable');
					
					// Get target element if any
					var target = container.find('*').eq(index);
					
					// Append html code 
						
						// Get type
						var type = jQuery(this).find('select[name="type"] option:selected').val();

						// Get HTML
						var html = jQuery(this).find('input[name="html"]').val();
			
						// Get style settings
						var style = jQuery(this).find('input[name="style"]').val();
						
						// Append the element
						var clone = jQuery('<'+type+'>').appendTo(container).html(html).attr('style', style);
						
						// Style settings
						clone.css('top', jQuery(this).find('input[name="top"]').val() + 'px');
						clone.css('left', jQuery(this).find('input[name="left"]').val() +'px');
						clone.css('z-index', index + 1);
						
						// Add dragging
						layerSlider.addDrag();

						// Remove target
						target.remove();
			}
		});
	},
	
	addSortables : function() {
	
		// Bind sortable function
        jQuery('.sortable').sortable({
			sort: function(event, ui){
				layerSlider.g.dragContainer = jQuery('.ui-sortable-helper').closest('li').find('.draggable');
				layerSlider.g.subLayers = jQuery('.ui-sortable-helper').closest('table');
			},
			stop: function(event, ui) {
				layerSlider.updatePreview( layerSlider.g.subLayers );
            },
            containment: 'parent',
			handle : '.moveable',
			items: 'tr:not(:first)'
        });	
	},
	
	addDrag : function(el) {
		
		if(!el){
			var el = jQuery('.draggable')
		}
        // Bind dragable function
        el.find('*').draggable({
        	drag : function() {
        		
        		layerSlider.dragging();
        	},
        	stop : function() {

        		layerSlider.dragging();
        	}
        });
	},
	
	dragging : function() {

		var top = jQuery('.ui-draggable-dragging').position().top;
		var left = jQuery('.ui-draggable-dragging').position().left;
		
		var image = jQuery('.ui-draggable-dragging').index()+1;
		
		jQuery('.ui-draggable-dragging').closest('.layerslider_slides').find('.sortable tr:eq('+image+') input[name="top"]').val(top);
		jQuery('.ui-draggable-dragging').closest('.layerslider_slides').find('.sortable tr:eq('+image+') input[name="left"]').val(left);
	},

	addSlide : function(button) {
		
		// Clone the template element
		var clone = jQuery('#layerslider_slides_code li:first').clone();
		
		// Find cointainer to append to
		var eleme = jQuery(button).prev();
		
		// Append new slide
		var append = jQuery(clone).appendTo(eleme).hide();
		
		// Get preview size settings
		var width = jQuery(button).prev().prev().find('input[name="width"]').val();
		var height = jQuery(button).prev().prev().find('input[name="height"]').val();
		
		// Set preview size
		jQuery(append).find('.draggable').width(width);
		jQuery(append).find('.draggable').height(height);

		jQuery(append).find('.draggable_wrapper').width(width);
		jQuery(append).find('.draggable_wrapper').height(height);
	
		// Add slide title
		jQuery(append).find('input[name="title"]').val('Layer #' + (jQuery(append).index() + 1) );
		
		// Set preview background options
		jQuery(append).find('.draggable_wrapper').css('background-color', jQuery(append).closest('div').find('input[name="backgroundcolor"]').val() );
		jQuery(append).find('.draggable_wrapper').css('background-image', 'url('+jQuery(append).closest('div').find('input[name="backgroundimage"]').val()+')');
		
		// Add sorables
		layerSlider.addSortables();
		
		// Show the new slide
		jQuery(append).slideDown();
		
	},
	
	
	addSublayer : function(ele) {
		
		var clone = jQuery('#layerslider_slides_code .layerslider_sublayer:first').clone();
		var eleme = jQuery(ele).closest('.layerslider_slides').find('table:eq(1)');
		
		jQuery(clone).appendTo(eleme).hide().slideDown();
	},
	
	removeSubLayer : function(ele) {
		
		// Get layer index
		var index = jQuery(ele).closest('tr').index() - 1;

		// Remove layer from preview
		jQuery(ele).closest('.layerslider_slides').find('.draggable *').eq(index).remove();
		
		// Remove layer row
		jQuery(ele).closest('tr').remove();
	},
	
	submit : function(ele) {

		// Set to disabled the submit button to prevend malformed data conversion
		jQuery(ele).find('input[type="submit"]').attr('disabled', true);

		jQuery('#layerslider-tabs > div').each(function(slide) {
			
			// Iterate over the slide properties
			jQuery(this).find('.form-table input, .form-table select').each(function() {
				
				// Save slide properties
				jQuery(this).attr('name', 'layerslider-slides['+slide+'][properties]['+jQuery(this).attr('name')+']');
			});
			
			// Iterate over the main layers
			jQuery(this).find('.layerslider_slides_wrapper > li').each(function(layer) {
			    
			    // Save main layer properties
			    jQuery(this).find('table:first input, table:first select').each(function() {
			    	jQuery(this).attr('name', 'layerslider-slides['+slide+'][layers]['+layer+'][properties]['+jQuery(this).attr('name')+']');
			    });
			    
			    // Iterate over the slides
			    jQuery(this).find('table:eq(1) tr').each(function(sublayer) {
			    	
			    	// Save slides properties
			    	jQuery(this).find('input, select').each(function() {
			    		jQuery(this).attr('name', 'layerslider-slides['+slide+'][layers]['+layer+'][sublayers]['+sublayer+']['+jQuery(this).attr('name')+']');
			    	});
			    });
			});

		});
		
		// Post the form
		jQuery.post( jQuery(ele).attr('action'), jQuery(ele).serialize(), function() {
			window.location.reload(true);
		});
	}
};


jQuery(document).ready(function() {
	
	// Bind an event to image url insert
	window.send_to_editor = function(html) {
		
		var img = jQuery('img',html).attr('src');
		
		jQuery(uploadInput).val( img );
		tb_remove();
		jQuery('.draggable iframe, .draggable embed, .draggable object').show();
		
		var container = jQuery(uploadInput).closest('.layerslider_slides').find('.draggable');
		
		// If it is a background image, change in the preview
		if(jQuery(uploadInput).is('input[name="background"]')) {
			container.css('background-image', 'url('+img+')');
		
		} else if(jQuery(uploadInput).is('input[name="backgroundimage"]')) {
			jQuery(uploadInput).closest('table').next().find('.draggable_wrapper').css('background-image', 'url('+jQuery(uploadInput).val()+')');
		
		// Show the new layer
		} else {

			// Get row index
			var index = jQuery(uploadInput).closest('tr').index() - 1;
			
			// Check container for row element
			// Update image src when found
			if(jQuery(container).find('img').eq(index).length) {
				
				jQuery(container).find('img').eq(index).attr('src', img);
			
			// Insert as new layer
			} else {
			
				// Add the new layer and set properties
				var ele = jQuery('<img>').appendTo(container).attr('src', img);
					ele.css({ 'position' : 'absolute', top : 0, left : 0, 'z-index' : (jQuery(ele).index()+1) });
			
				// Reinit dragable content
				layerSlider.addDrag(container);
			}
		}
	}
	
	layerSlider.init();
});