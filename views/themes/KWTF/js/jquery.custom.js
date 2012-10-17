function yiw_lightbox()
{
    jQuery('a.thumb.video, a.thumb.img').hover(

        function()
        {
            jQuery('<a class="zoom">zoom</a>').appendTo(this).css({
                dispay:'block',
                opacity:0,
                height:jQuery(this).children('img').height(),
                width:jQuery(this).children('img').width(),
                'top':jQuery(this).css('padding-top'),
                'left':jQuery(this).css('padding-left'),
                padding:0}).animate({opacity:0.4}, 500);
        },

        function()
        {
            jQuery('.zoom').fadeOut(500, function(){jQuery(this).remove()});
        }
    );

    jQuery("a[rel^='prettyPhoto']").prettyPhoto({
        slideshow:5000,
        theme: yiw_prettyphoto_style,
        autoplay_slideshow:false,
        deeplinking: false,
        show_title:false
    });
}


jQuery(document).ready(function($){

    $('body').removeClass('no_js').addClass('yes_js');   
    
    var show_dropdown = function()
    {        
        var options;
        
        containerWidth = $('#header').width();
        marginRight = $('#nav ul.level-1 > li').css('margin-right');
        submenuWidth = $('#nav ul.sub-menu').width();
        offsetMenuRight = $(this).position().left + submenuWidth;
        leftPos = -18;
        
        if ( offsetMenuRight > containerWidth )
            options = { left:leftPos - ( offsetMenuRight - containerWidth ) };    
        else
            options = {};
        
        $('ul.sub-menu:not(ul.sub-menu li > ul.sub-menu), ul.children:not(ul.children li > ul.children)', this).css(options).stop(true, true).fadeIn(300);    
    }
    
    var hide_dropdown = function()
    {
        $('ul.sub-menu:not(ul.sub-menu li > ul.sub-menu), ul.children:not(ul.children li > ul.children)', this).fadeOut(300);    
    }
        
    $('#nav ul > li').hover( show_dropdown, hide_dropdown );              
    
    $('#nav ul > li').each(function(){
        if( $('ul', this).length > 0 )
            $(this).children('a').append('<span class="sf-sub-indicator"> &raquo;</span>').css({ paddingRight:parseInt($(this).children('a').css('padding-right'))+16 });
    }); 
    
    $('#nav li:not(.megamenu) ul.sub-menu li, #nav li:not(.megamenu) ul.children li').hover(
        function()
        {                  
            var options;
            
            containerWidth = $('#header').width();
            containerOffsetRight = $('#header').offset().left + containerWidth;
            submenuWidth = $('ul.sub-menu, ul.children', this).parent().width();
            offsetMenuRight = $(this).offset().left + submenuWidth * 2;
            leftPos = -10;
            
            if ( offsetMenuRight > containerOffsetRight )
                $(this).addClass('left');
                
            $('ul.sub-menu, ul.children', this).stop(true, true).fadeIn(300);
        },
    
        function()
        {
            $('ul.sub-menu, ul.children', this).fadeOut(300);
        }
    );
    
    /* megamenu check position */
    $('#nav .megamenu').mouseover(function(){
	
		var main_container_width = $('.inner').width();
		var main_container_offset = $('.inner').offset();
		var parent = $(this);
		var megamenu = $(this).children('ul.sub-menu');
		var width_megamenu = megamenu.outerWidth();
		var position_megamenu = megamenu.offset();
		var position_parent = parent.position();
		
		var position_right_megamenu = position_parent.left + width_megamenu;
		
		// adjust if the right position of megamenu is out of container
		if ( position_right_megamenu > main_container_width ) {
			megamenu.offset( { top:position_megamenu.top, left:main_container_offset.left + ( main_container_width - width_megamenu ) } );		
		}
		
		//alert( 'width_megamenu = ' + width_megamenu + '; position_parent = top:' + position_parent.top + ', left:' + position_parent.left );
		//alert( 'width_megamenu = ' + width_megamenu + '; left = ' + main_container_offset.left + ( main_container_width - width_megamenu ) );
		
	});          
	
	if ( $('body').hasClass('isMobile') && ! $('body').hasClass('iphone') && ! $('body').hasClass('ipad') )
        $('.sf-sub-indicator').parent().click(function(){   
            $(this).parent().toggle( show_dropdown, function(){ document.location = $(this).children('a').attr('href') } )
        });

    yiw_lightbox();
    
    // searchform on header    // autoclean labels
    $elements = $('#header #s, .autoclear, input.autoclear');
    
    $elements.each(function(){
        if( $(this).val() != '' )   
            $(this).prev().css('display', 'none');
    }); 
    $elements.focus(function(){
        if( $(this).val() == '' )   
            $(this).prev().css('display', 'none');
    }); 
    $elements.blur(function(){ 
        if( $(this).val() == '' )   
            $(this).prev().css('display', 'block');
    });
    
    input_newsletter = $('.newsletter-section .text-field');
    
    var prev_input_newsletter_val = null;
    
    input_newsletter.focus(function() {
       if( $( this ).val() != '') {
           prev_input_newsletter_val = $( this ).val();
           $( this ).val('');
       }
       
    input_newsletter.blur(function(){ 
        if( $(this).val() == '' )   
            $(this).val(prev_input_newsletter_val);
        }); 
    });

    $('a.socials, a.socials-small').tipsy({fade:true, gravity:'s'});
    
    $('.toggle-content:not(.opened), .content-tab:not(.opened)').hide(); 
    $('.tab-index a').click(function(){           
        $(this).parent().next().slideToggle(300, 'easeOutExpo');
        $(this).parent().toggleClass('tab-opened tab-closed');
        $(this).attr('title', ($(this).attr('title') == 'Close') ? 'Open' : 'Close');
        return false;
    });   
    
    // gallery hover
    $(".gallery-wrap .internal_page_item .overlay").css({opacity:0});
	$(".gallery-wrap .internal_page_item").live( 'mouseover mouseout', function(event){ 
		if ( event.type == 'mouseover' ) $('.overlay', this).show().stop(true,false).animate({ opacity: 1 }, "fast"); 
		if ( event.type == 'mouseout' )  $('.overlay', this).animate({ opacity: 0 }, "fast", function(){ $(this).hide() }); 
	});
    
	$('.tabs-container').yiw_tabs({
        tabNav  : 'ul.tabs',
        tabDivs : '.border-box'
    });
    
    $('#slideshow images img').show();
    
    // slider
    //if ( $("#slider ul").length > 0 ) {
    if( typeof(yiw_slider_type) != 'undefined' ) {
        if( yiw_slider_type == 'elegant' ) {
            $("#slider ul").cycle({                                                    
                easing  : yiw_slider_elegant_easing,
                fx      : yiw_slider_elegant_fx,
                speed   : yiw_slider_elegant_speed,
                timeout : yiw_slider_elegant_timeout,
                before  : function(currSlideElement, nextSlideElement, options, forwardFlag) {
                    var width = parseInt( $('.slider-caption', currSlideElement).outerWidth() );
                    var height = parseInt( $('.slider-caption', currSlideElement).outerHeight() );
                    
                    $('.caption-top', currSlideElement).animate({top:height*-1}, yiw_slider_elegant_caption_speed);
                    $('.caption-bottom', currSlideElement).animate({bottom:height*-1}, yiw_slider_elegant_caption_speed);
                    $('.caption-left', currSlideElement).animate({left:width*-1}, yiw_slider_elegant_caption_speed);
                    $('.caption-right', currSlideElement).animate({right:width*-1}, yiw_slider_elegant_caption_speed);
                },
                after   : function(currSlideElement, nextSlideElement, options, forwardFlag) {
                    $('.caption-top', nextSlideElement).animate({top:0}, yiw_slider_elegant_caption_speed);
                    $('.caption-bottom', nextSlideElement).animate({bottom:0}, yiw_slider_elegant_caption_speed);
                    $('.caption-left', nextSlideElement).animate({left:0}, yiw_slider_elegant_caption_speed);
                    $('.caption-right', nextSlideElement).animate({right:0}, yiw_slider_elegant_caption_speed);
                }
            });
        } else if( yiw_slider_type == 'cycle') {
            $('#slider .images').cycle({
                fx      : yiw_slider_cycle_fx,
                speed   : yiw_slider_cycle_speed,
                timeout : yiw_slider_cycle_timeout,
                easing  : yiw_slider_cycle_easing,
                pager   : '.pagination',
                cleartype: true
            });                   
        
            $('#slider-pause').show();
                            
            $('#slider-pause').click(function(){
                $('#slider .images').cycle('pause');
                $(this).hide();
                $('#slider-play').show();
                return false;
            });
                            
            $('#slider-play').click(function(){
                $('#slider .images').cycle('resume');
                $(this).hide();
                $('#slider-pause').show();    
                return false;
            });
        } else if( yiw_slider_type == 'nivo') {
            $('#slider .slider-images').nivoSlider({
                effect       : yiw_slider_nivo_effect,
                pauseTime    : yiw_slider_nivo_timeout,
                animSpeed    : yiw_slider_nivo_animspeed,
                directionNav : false
            });
        } else if( yiw_slider_type == 'unoslider' ) {
            $('#slider ul').unoslider({
                width       : yiw_slider_unoslider_width,
                height      : yiw_slider_unoslider_height,
                responsive  : yiw_slider_unoslider_responsive,
                indicator   : yiw_slider_unoslider_indicator,
                navigation  : yiw_slider_unoslider_navigation,
                slideshow   : yiw_slider_unoslider_slideshow,
                animation   : yiw_slider_unoslider_animation,
                preset      : yiw_slider_unoslider_preset,
                order       : 'random',
                tooltip     : true
            });
        } else if ( yiw_slider_type == 'thumbnails' ) {
            $("#slider .showcase").awShowcase(
    	    {
    	        content_width           : yiw_slider_thumbnails_width,
    	        content_height          : yiw_slider_thumbnails_height + 72,		
    		show_caption            : 'onhover', /* onload/onhover/show */    
		continuous              : true,
    		buttons                 : false,
    		auto                    : true,
    		thumbnails              : true,           
    		transition              : yiw_slider_thumbnails_fx, /* hslide / vslide / fade */
    		interval                : yiw_slider_thumbnails_timeout,
    		transition_speed        : yiw_slider_thumbnails_speed,
    		thumbnails_position     : 'outside-last', /* outside-last/outside-first/inside-last/inside-first */
    		thumbnails_direction    : 'horizontal', /* vertical/horizontal */
    		thumbnails_slidex       : 1 /* 0 = auto / 1 = slide one thumbnail / 2 = slide two thumbnails / etc. */
    	    });
        } else if ( yiw_slider_type == 'elastic' ) {
    		$('#slider.elastic').eislideshow({
				easing		: 'easeOutExpo',
				titleeasing	: 'easeOutExpo',
				titlespeed	: 1200,
				autoplay	: yiw_slider_elastic_autoplay,
				slideshow_interval : yiw_slider_elastic_timeout,
				speed       : yiw_slider_elastic_speed,
				animation   : yiw_slider_elastic_animation
// 				slidesLoaded: function() {
//                     $('.ei-slider .ei-slider-loading').hide();
//                 }
            });
        }
    }
    
    
    
    $('a img').hover(function(){ 
        if ( $(this).parent().parent().attr('id') == 'logo' || $(this).parent().parent().parent().parent().parent().attr('id') == 'slider' )
            return;
    //$('.home_item_portfolio img').hover(function(){
        $(this).stop().animate({opacity: 0.65}, 700);
    }, function(){
        $(this).stop().animate({opacity: 1});
    });       
	
	// map tab        
	$('.header-map .tab-label').click(function(){
        var mapWrap = $('#map-wrap');
        var text = $(this).text();
        var label = $(this);
        var height = $('#map').height();   
        
        if ( $(window).height() - 100 < height )
            height = $(window).height() - 100;
                                                  
        //console.log( text + ' - ' + header_map.tab_open + ' - ' + header_map.tab_close );
        
        if ( $(this).hasClass('closed') ) {
            mapWrap.show().animate({height:height}, 500, function(){
                label.removeClass('closed').addClass('opened').text(header_map.tab_close);
            });
            
        } else if ( $(this).hasClass('opened') ) {
            mapWrap.animate({height:0}, 500, function(){ 
                $(this).hide();
                label.removeClass('opened').addClass('closed').text(header_map.tab_open);
            });
        }             
        
        return false;
    });
    
    // add to cart hover
    if ( ! $('body').hasClass('isMobile') ) {
        var product = $('.products li');
        
        var product_animate = function(el) {             
            product_reset(el);              
            var product_buttons = $('.buttons', el);            
            var product_add_to_cart = $('.buttons .add-to-cart', el);  
            if ( product_add_to_cart.hasClass('added') || product_add_to_cart.hasClass('loading') ) return;
            product_buttons.css({opacity:0}).css({opacity:1});
            product_add_to_cart.css({top:product_add_to_cart.height()*-1}).stop().animate({top:0}, 'fast');
        }; 
        
        var product_reset = function(el) {             
            var product_buttons = $('.buttons', el);            
            var product_add_to_cart = $('.buttons .add-to-cart', el); 
            if ( product_add_to_cart.hasClass('added') || product_add_to_cart.hasClass('loading') ) return;
            product_buttons.css({opacity:0, 'visibility':'visible', 'overflow':'hidden'}).height( product_add_to_cart.height() );
            product_add_to_cart.stop().css({'position':'relative',top:product_add_to_cart.height()*-1});
        };
        product_reset(product);
        
        product.hover(
            function() { 
                product_animate(this);                        
            },
            function() {                  
                product_reset(this);
            }
        );            
    }
    
    // product slider   
    $('.products-slider:not(.for-mobile) ul').jcarousel({
        auto: yiw_product_slider_interval,
        scroll: 1,
        wrap: 'last'
    });
    
    var add_to_cart_clicked = false;
    
    // add to cart click
    $('.add-to-cart').click(function(){
        $(this).block({message: null, overlayCSS: {background: '#fff url(' + woocommerce_params.plugin_url + '/assets/images/ajax-loader.gif) no-repeat center', opacity: 0.3, cursor:'none'}});
        add_to_cart_clicked = $(this);
    });
    
    $( '.features-tab-container' ).yiw_features_tab();  
    
    // products tab
	$('#product-tabs').yiw_tabs({
        tabNav  : 'ul.tabs',
        tabDivs : '.containers',
        currentClass : 'active'
    });
});

// features tab plugin
(function($) {
    $.fn.yiw_features_tab = function( options ) {
        var config = {
            'tabNav' : 'ul.features-tab-labels',
            'tabDivs': 'div.features-tab-wrapper'
        };
        
        if( options ) $.extend( config, options );
        
        this.each( function () {
           var tabNav  = $( config.tabNav, this );
           var tabDivs = $( config.tabDivs, this );
           var labelNumber = tabNav.children( 'li' ).length;
           
           tabDivs.children( 'div' ).hide();
           
           var currentDiv = tabDivs.children( 'div' ).eq( tabNav.children( 'li.current-feature' ).index() );
           currentDiv.show();
           
           $( 'li', tabNav ).hover( function() {
               if( !$( this ).hasClass( 'current-feature' ) ) {
                   var currentDiv = tabDivs.children( 'div' ).eq( $( this ).index() );
                   tabNav.children( 'li' ).removeClass( 'current-feature' );
                   
                   $( this ).addClass( 'current-feature' );

                   tabDivs.children( 'div' ).hide().removeClass( 'current-feature' );
                   currentDiv.fadeIn( 'slow' );
                   
//                    if( tabNav.height() >= ( tabDivs.parent( 'div' ).height() - 1 ) && labelNumber == ( $( this ).index() + 1 ) ) {
//                        $( this ).css({
//                            'border-bottom'                     : 'none',
//                            'border-bottom-left-radius'         : '5px',
//                            '-webkit-border-bottom-left-radius' : '5px',
//                            '-moz-border-radius-bottomleft'     : '5px'
//                        });
//                    }
                   
                   //alert( tabNav.height() + '-' + ( tabDivs.parent( 'div' ).height() - 1 ) );
               }            
           });       
           
        });
    }
})(jQuery);

// tabs plugin
(function($) {
    $.fn.yiw_tabs = function(options) {
        // valori di default
        var config = {
            'tabNav': 'ul.tabs',
            'tabDivs': '.containers',
            'currentClass': 'current'
        };      
 
        if (options) $.extend(config, options);
    	
    	this.each(function() {   
        	var tabNav = $(config.tabNav, this);
        	var tabDivs = $(config.tabDivs, this);
        	var activeTab;
        	var maxHeight = 0;
        	
        	// height of tabs
//         	$('li', tabNav).each(function(){
//                 var tabHeight = $(this).height();
//                 if ( tabHeight > maxHeight )
//                     maxHeight = tabHeight;
//             });
//             $('li h4', tabNav).each(function(){
//                 $(this).height(maxHeight-40);
//             });
        	
            tabDivs.children('div').hide();
    	
    	    if ( $('li.'+config.currentClass+' a', tabNav).length > 0 )
               activeTab = '#' + $('li.'+config.currentClass+' a', tabNav).attr('href').split('#')[1]; 
        	else
        	   activeTab = '#' + $('li:first-child a', tabNav).attr('href').split('#')[1];
                        
        	$(activeTab).show().addClass('showing');
            $('li:first-child a', tabNav).parents('li').addClass(config.currentClass);
        	
        	$('a', tabNav).click(function(){
        		var id = '#' + $(this).attr('href').split('#')[1];
        		var thisLink = $(this);
        		
        		$('li.'+config.currentClass, tabNav).removeClass(config.currentClass);
        		$(this).parents('li').addClass(config.currentClass);
        		
        		$('.showing', tabDivs).fadeOut(200, function(){
        			$(this).removeClass('showing');
        			$(id).fadeIn(200).addClass('showing');
        		});
        		
        		return false;
        	});   
        });
    }
})(jQuery);                   

(function($) {                                     
        
    $.fn.sorted = function(customOptions) {
        var options = {
            reversed: false,
            by: function(a) {
                return a.text();
            }
        };

        $.extend(options, customOptions);

        $data = jQuery(this);
        arr = $data.get();
        arr.sort(function(a, b) {

            var valA = options.by($(a));
            var valB = options.by($(b));
    
            if (options.reversed) {
                return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;              
            } else {        
                return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;  
            }
    
        });

        return $(arr);

    };

})(jQuery);

jQuery(function($) {
    
    //yiw_lightbox();


    var read_button = function(class_names) {
        
        var r = {
            selected: false,
            type: 0
        };
        
        for (var i=0; i < class_names.length; i++) {
            
            if (class_names[i].indexOf('selected-') == 0) {
                r.selected = true;
            }
        
            if (class_names[i].indexOf('segment-') == 0) {
                r.segment = class_names[i].split('-')[1];
            }
        };
        
        return r;
        
    };

    var determine_sort = function($buttons) {
        var $selected = $buttons.parent().filter('[class*="selected-"]');
        return $selected.find('a').attr('data-value');
    };

    var determine_kind = function($buttons) {
        var $selected = $buttons.parent().filter('[class*="selected-"]');
        return $selected.find('a').attr('data-value');
    };

    var $preferences = {
        duration: 500,
        adjustHeight: 'auto'
    }

    var $list = jQuery('.gallery-wrap');
    var $data = $list.clone();

    var $controls = jQuery('.portfolio-categories, .gallery-categories');

    $controls.each(function(i) {

        var $control = jQuery(this);
        var $buttons = $control.find('a');
        var height_list = $list.height();
        
        $('li:first-child', $control).addClass('selected');

        $buttons.bind('click', function(e) {

            var $button = jQuery(this);
            var $button_container = $button.parent();
            var button_properties = read_button($button_container.attr('class').split(' '));      
            var selected = button_properties.selected;
            var button_segment = button_properties.segment;

            if (!selected) {

                $buttons.parent().removeClass();
                $button_container.addClass('selected selected-' + button_segment).parent().children('li:first-child').addClass('first');

                var sorting_type = determine_sort($controls.eq(1).find('a'));
                var sorting_kind = determine_kind($controls.eq(0).find('a'));

                if (sorting_kind == 'all') {
                    var $filtered_data = $data.find('li');
                } else {
                    var $filtered_data = $data.find('li.' + sorting_kind);
                }

                var $sorted_data = $filtered_data.sorted({
                    by: function(v) {
                        return $(v).find('strong').text().toLowerCase();
                    }
                });

                $list.quicksand($sorted_data, $preferences, function () {
                        yiw_lightbox();
                        //Cufon.replace('#portfolio-gallery h6');   
                        
                        var current_height = $list.height();       
                        $('.hentry-post').animate( { 'min-height':$list.height() }, 300 );
                        
                        
                        
                        var postsPerRow = ( $('.layout-sidebar-right').length > 0 || $('.layout-sidebar-left').length > 0 ) ? 3 : 4;
                        
                        $('.gallery-wrap li')
                            .removeClass('group')
                            .each(function(i){
                                $(this).find('div')
                                    //.removeClass('internal_page_item_first') 
                                    .removeClass('internal_page_item_last');
                                
                                if( (i % postsPerRow) == 0 ) {
                                    //$(this).addClass('group');
                                    //$(this).find('div').addClass('internal_page_item_first'); 
                                } else if((i % postsPerRow) == 2) {
                                    $(this).find('div').addClass('internal_page_item_last');
                                }
                            });
                            
                        $('.gallery-wrap:first').css('height',0);
                        
                });
    
            }
    
            e.preventDefault();
            
        });
    
    }); 
    
});