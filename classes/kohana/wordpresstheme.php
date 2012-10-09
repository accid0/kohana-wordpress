<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 *
 *@name wordpressTheme.php
 *@packages Wordpress/ThemeFramework
 *@subpackage ThemeFramework
 *@category ThemeFramework
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */

class Kohana_WordpressTheme extends WPPlugin {
  
  const ATTR_SIDEBAR_RIGHT                                      = 'sidebar-right';
  const ATTR_SIDEBAR_LEFT                                       = 'sidebar-left';
  const ATTR_DEFAULT                                            = 'default';
  const ATTR_BLACKWHITE                                         = 'BlackWhite';
  const ATTR_CORPORATE                                          = 'Corporate';
  const ATTR_DARK                                               = 'Dark';
  const ATTR_MINIMAL                                            = 'Minimal';
  const ATTR_SKETCH                                             = 'Sketch';
  const ATTR_VINTAGE                                            = 'Vintage';
  const ATTR_NONE                                               = 'none';
  const ATTR_LAYERS                                             = 'layers';
  const ATTR_UNOSLIDER                                          = 'unoslider';
  const ATTR_ELEGANT                                            = 'elegant';
  const ATTR_CYCLE                                              = 'cycle';
  const ATTR_ELASTIC                                            = 'elastic';
  const ATTR_NIVO                                               = 'nivo';
  const ATTR_THUMBNAILS                                         = 'thumbnails';
  const ATTR_FLASH                                              = 'flash';
  const ATTR_MINILAYERS                                         = 'minilayers';
  const ATTR_3COLORS                                            = '3cols';
  const ATTR_SLIDER                                             = 'slider';
  const ATTR_BIG_IMAGE                                          = 'big_image';
  const ATTR_FULL_DESC                                          = 'full_desc';
  const ATTR_FILTERABLE                                         = 'filterable';
  const ATTR_CHESS                                              = 'chess';
  const ATTR_SPIRAL_REVERSED                                    = 'spiral_reversed';
  const ATTR_SPIRAL                                             = 'spiral';
  const ATTR_SQ_APPEAR                                          = 'sq_appear';
  const ATTR_SQ_FLYOFF                                          = 'sq_flyoff';
  const ATTR_SQ_DROP                                            = 'sq_drop';
  const ATTR_SQ_SQUEEZE                                         = 'sq_squeeze';
  const ATTR_SQ_RANDOM                                          = 'sq_random';
  const ATTR_SQ_DIAGONAL_REV                                    = 'sq_diagonal_rev';
  const ATTR_SQ_DIAGONAL                                        = 'sq_diagonal';
  const ATTR_SQ_FADE_RANDOM                                     = 'sq_fade_random';
  const ATTR_SQ_FADE_DIAGONAL_REV                               = 'sq_fade_diagonal_rev';
  const ATTR_SQ_FADE_DIAGONAL                                   = 'sq_fade_diagonal';
  const ATTR_EXPLODE                                            = 'explode';
  const ATTR_IMPLODE                                            = 'implode';
  const ATTR_FOUNTAIN                                           = 'fountain';
  const ATTR_BLIND_BOTTOM                                       = 'blind_bottom';
  const ATTR_BLIND_TOP                                          = 'blind_top';
  const ATTR_BLIND_RIGHT                                        = 'blind_right';
  const ATTR_BLIND_LEFT                                         = 'blind_left';
  const ATTR_SHOT_RIGHT                                         = 'shot_right';
  const ATTR_SHOT_LEFT                                          = 'shot_left';
  const ATTR_ALTERNATE_VERTICAL                                 = 'alternate_vertical';
  const ATTR_ALTERNATE_HORIZONTAL                               = 'alternate_horizontal';
  const ATTR_ZIPPER_RIGHT                                       = 'zipper_right';
  const ATTR_ZIPPER_LEFT                                        = 'zipper_left';
  const ATTR_BAR_SLIDE_RANDOM                                   = 'bar_slide_random';
  const ATTR_BAR_SLIDE_BOTTOM_RIGHT                             = 'bar_slide_bottomright';
  const ATTR_BAR_SLIDE_BOTTOM_LEFT                              = 'bar_slide_bottomleft';
  const ATTR_BAR_SLIDE_TOP_RIGHT                                = 'bar_slide_topright';
  const ATTR_BAR_SLIDE_TOP_LEFT                                 = 'bar_slide_topleft';
  const ATTR_BAR_FADE_BOTTOM                                    = 'bar_fade_bottom';
  const ATTR_BAR_FADE_TOP                                       = 'bar_fade_top';
  const ATTR_BAR_FADE_RIGHT                                     = 'bar_fade_right';
  const ATTR_BAR_FADE_LEFT                                      = 'bar_fade_left';
  const ATTR_BAR_FADE_RANDOM                                    = 'bar_fade_random';
  const ATTR_V_SLIDE_TOP                                        = 'v_slide_top';
  const ATTR_H_SLIDE_RIGHT                                      = 'h_slide_right';
  const ATTR_V_SLIDE_BOTTOM                                     = 'v_slide_bottom';
  const ATTR_H_SLIDE_LEFT                                       = 'h_slide_left';
  const ATTR_STRETCH                                            = 'stretch';
  const ATTR_STRETCHED                                          = 'stretched';
  const ATTR_SQUEEZE                                            = 'squeeze';
  const ATTR_FADE                                               = 'fade';
  const ATTR_FOLD                                               = 'fold';
  const ATTR_SWAP                                               = 'swap';
  const ATTR_BG_IMAGE                                           = 'bg_image';
  const ATTR_ROLES_FONT                                         = 'h1, h2, h3, h4, h5, h6, .special-font';
  const ATTR_ROLE_OPTION_ID                                     = 'font_option_id';
  const ATTR_ROLE_TYPE_OPTION_ID                                = 'font_type_option_id';
  const ATTR_ECHO                                               = 'echo';
  const ATTR_POST_TYPE_GALLERY                                  = 'kwtf_gallery';
  const ATTR_POST_TYPE_TESTIMONIALS                             = 'bl_testimonials';
  const ATTR_POST_TYPE_FAQ                                      = 'bl_faq';
  const ATTR_POST_TYPE_TEAM                                     = 'kwtf_team';
  const ATTR_POST_TYPE_PORTFOLIO                                = 'create-portfolio';
  const ATTR_POST_TYPE_SERVICES                                 = 'kwtf_services';
  const ATTR_POST_TYPE_NEWS                                     = 'kwtf_news';
  const ATTR_BLOCK_COLORS_SETTINGS                              = 'Colors Settings';
  const ATTR_COLOR_UNIT                                         = 'color-unit';
  const ATTR_IMAGE                                              = 'bg-image';
  const ATTR_CUSTOM                                             = 'custom';
  const ATTR_REPEATE                                            = 'repeat';
  const ATTR_REPEATE_HORIZONTALLY                               = 'repeat-x';
  const ATTR_REPEATE_VERTICALLY                                 = 'repeat-y';
  const ATTR_NO_REPEATE                                         = 'no-repeat';
  const ATTR_CENTER                                             = 'center';
  const ATTR_TOP_LEFT                                           = 'top left';
  const ATTR_TOP_CENTER                                         = 'top center';
  const ATTR_TOP_RIGHT                                          = 'top right';
  const ATTR_BOTTOM_LEFT                                        = 'bottom left';
  const ATTR_BOTTOM_CENTER                                      = 'bottom center';
  const ATTR_BOTTOM_RIGHT                                       = 'bottom right';
  const ATTR_SCROLL                                             = 'scroll';
  const ATTR_FIXED                                              = 'fixed';
  const ATTR_BLOCK_CONTACT_FORMS_SETTINGS                       = 'Contact Forms';
  const ATTR_CONTACT_FORM_TO                                    = 'contact_form_to';
  const ATTR_CONTACT_FORM_FROM_EMAIL                            = 'contact_form_from_email';
  const ATTR_CONTACT_FORM_FROM_NAME                             = 'contact_form_from_name';
  const ATTR_CONTACT_FORM_SUBJECT                               = 'contact_form_subject';
  const ATTR_CONTACT_FORM_BODY                                  = 'contact_form_body';
  const ATTR_CONTACT_FORM_SUBMIT_LABEL                          = 'contact_form_submit_label';
  const ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT                      = 'contact_form_submit_alignment';
  const ATTR_CONTACT_FORM_SUCCESS_SENDING                       = 'contact_form_success_sending';
  const ATTR_CONTACT_FORM_ERROR_SENDING                         = 'contact_form_error_sending';
  const ATTR_CONTACT_FORM_FIELDS                                = 'contact_fields';
  const ATTR_CONTACT_FORM_BUTTON_ADD                            = 'contact_form_add';
  const ATTR_CONTACT_FORM_BUTTON_SAVE_CONFIG                    = 'contact_form_save_config';
  const ATTR_CONTACT_FORM_BUTTON_CONFIG                         = 'contact_form_config';
  const ATTR_CONTACT_FORM_BUTTON_CREATE                         = 'contact_form_create';
  const ATTR_CONTACT_FORM_BUTTON_DELETE                         = 'contact_form_delete';
  const ATTR_CONTACT_FORM_BUTTON_ADD_FIELD                      = 'contact_form_add_field';
  const ATTR_CONTACT_FORM_BUTTON_EDIT_FIELD                     = 'contact_form_edit_field';
  const ATTR_CONTACT_FORM_BUTTON_SAVE_FIELD                     = 'contact_form_save_field';
  const ATTR_CONTACT_FORM_BUTTON_DELETE_FIELD                   = 'contact_form_delete_field';
  const ATTR_CONTACT_FORM_BUTTON_ARRAY_UP                       = 'contact_form_array_up';
  const ATTR_CONTACT_FORM_BUTTON_ARRAY_DOWN                     = 'contact_form_array_down';
  const ATTR_BLOCK_FEATURES_SETTINGS                            = 'Features';
  const ATTR_FEATURES_BUTTON_ADD                                = 'features_add';
  const ATTR_FEATURES_BUTTON_DELETE                             = 'features_delete';
  const ATTR_BLOCK_FLASH_SLIDER                                 = 'Flash Slider';
  const ATTR_EASINGS_IN_QUAD                                    = 'easeInQuad';
  const ATTR_EASINGS_OUT_QUAD                                   = 'easeOutQuad';
  const ATTR_EASINGS_IN_OUT_QUAD                                = 'easeInOutQuad';
  const ATTR_EASINGS_IN_CUBIC                                   = 'easeInCubic';
  const ATTR_EASINGS_OUT_CUBIC                                  = 'easeOutCubic';
  const ATTR_EASINGS_IN_OUT_CUBIC                               = 'easeInOutCubic';
  const ATTR_EASINGS_IN_QUART                                   = 'easeInQuart';
  const ATTR_EASINGS_OUT_QUART                                  = 'easeOutQuart';
  const ATTR_EASINGS_IN_OUT_QUART                               = 'easeInOutQuart';
  const ATTR_EASINGS_IN_QUINT                                   = 'easeInQuint';
  const ATTR_EASINGS_OUT_QUINT                                  = 'easeOutQuint';
  const ATTR_EASINGS_IN_OUT_QUINT                               = 'easeInOutQuint';
  const ATTR_EASINGS_IN_SINE                                    = 'easeInSine';
  const ATTR_EASINGS_OUT_SINE_                                  = 'easeOutSine';
  const ATTR_EASINGS_IN_OUT_SINE                                = 'easeInOutSine';
  const ATTR_EASINGS_IN_EXPO                                    = 'easeInExpo';
  const ATTR_EASINGS_OUT_EXPO                                   = 'easeOutExpo';
  const ATTR_EASINGS_IN_OUT_EXPO                                = 'easeInOutExpo';
  const ATTR_EASINGS_IN_CIRC                                    = 'easeInCirc';
  const ATTR_EASINGS_OUT_CIRC                                   = 'easeOutCirc';
  const ATTR_EASINGS_IN_OUT_CIRC                                = 'easeInOutCirc';
  const ATTR_EASINGS_IN_ELASTIC                                 = 'easeInElastic';
  const ATTR_EASINGS_OUT_ELASTIC                                = 'easeOutElastic';
  const ATTR_EASINGS_IN_OUT_ELASTIC                             = 'easeInOutElastic';
  const ATTR_EASINGS_IN_BACK                                    = 'easeInBack';
  const ATTR_EASINGS_OUT_BACK                                   = 'easeOutBack';
  const ATTR_EASINGS_IN_OUT_BACK                                = 'easeInOutBack';
  const ATTR_EASINGS_IN_BOUNCE                                  = 'easeInBounce';
  const ATTR_EASINGS_OUT_BOUNCE                                 = 'easeOutBounce';
  const ATTR_EASINGS_IN_OUT_BOUNCE                              = 'easeInOutBounce';
  const ATTR_BLOCK_GENERAL_SETTINGS                             = 'General';
  const ATTR_BOXED                                              = 'boxed';
  const ATTR_STATIC                                             = 'static';
  const ATTR_TWITTER                                            = 'twitter';
  const ATTR_NORMAL                                             = 'normal';
  const ATTR_CENTERED                                           = 'centered';
  const ATTR_BIG_NORMAL                                         = 'big-normal';
  const ATTR_BIG_CENTERED                                       = 'big-centered';
  const ATTR_INSIDE_THUMB                                       = 'inside-thumb';
  const ATTR_BELOW_THUMB                                        = 'below-thumb';
  const ATTR_SIDEBAR_NO                                         = 'sidebar-no';
  const ATTR_BIG                                                = 'big';
  const ATTR_SMALL                                              = 'small';
  const ATTR_PP_DEFAULT                                         = 'pp_default';
  const ATTR_FACEBOOK                                           = 'facebook';
  const ATTR_LIGHT_ROUNDED                                      = 'light_rounded';
  const ATTR_DARK_ROUNDED                                       = 'dark_rounded';
  const ATTR_LIGHT_SQUARE                                       = 'light_square';
  const ATTR_DARK_SQUARE                                        = 'dark_square';
  const ATTR_LIGHTBOX                                           = 'lightbox';
  const ATTR_ITEM_PAGE                                          = 'item-page';
  const ATTR_NOTHING                                            = 'nothing';
  const ATTR_BLOCK_SIDEBAR_SETTINGS                             = 'Sidebar';
  const ATTR_SIDEBAR_BUTTON_ADD                                 = 'sidebar_add';
  const ATTR_SIDEBAR_BUTTON_DELETE                              = 'sidebar_delete';
  const ATTR_BLOCK_SLIDERS_SETTINGS                             = 'Sliders';
  const ATTR_LEAVE                                              = 'leave';
  const ATTR_REMOVE                                             = 'remove';
  const ATTR_FIXED_IMAGE                                        = 'fixed-image';
  const ATTR_BLIND_X                                            = 'blindX';
  const ATTR_BLIND_Y                                            = 'blindY';
  const ATTR_BLIND_Z                                            = 'blindZ';
  const ATTR_COVER                                              = 'cover';
  const ATTR_CURTAIN_X                                          = 'curtainX';
  const ATTR_CURTAIN_Y                                          = 'curtainY';
  const ATTR_FADE_ZOOM                                          = 'fadeZoom';
  const ATTR_GROW_X                                             = 'growX';
  const ATTR_GROW_Y                                             = 'growX';
  const ATTR_SCROLL_UP                                          = 'scrollUp';
  const ATTR_SCROLL_DOWN                                        = 'scrollDown';
  const ATTR_SCROLL_LEFT                                        = 'scrollLeft';
  const ATTR_SCROLL_RIGHT                                       = 'scrollRight';
  const ATTR_SCROLL_HORZ                                        = 'scrollHorz';
  const ATTR_SCROLL_VERT                                        = 'scrollVert';
  const ATTR_SHUFFLE                                            = 'shuffle';
  const ATTR_SLIDE_X                                            = 'slideX';
  const ATTR_SLIDE_Y                                            = 'slideY';
  const ATTR_TOSS                                               = 'toss';
  const ATTR_TURN_UP                                            = 'turnUp';
  const ATTR_TURN_DOWN                                          = 'turnDown';
  const ATTR_TURN_LEFT                                          = 'turnLeft';
  const ATTR_TURN_RIGHT                                         = 'turnRight';
  const ATTR_UNCOVER                                            = 'uncover';
  const ATTR_WIPE                                               = 'wipe';
  const ATTR_ZOOM                                               = 'zoom';
  const ATTR_BOTTOM                                             = 'bottom';
  const ATTR_TOP                                                = 'top';
  const ATTR_LEFT                                               = 'left';
  const ATTR_RIGHT                                              = 'right';
  const ATTR_H_SLIDE                                            = 'hslide';
  const ATTR_V_SLIDE                                            = 'vslide';
  const ATTR_BASIC                                              = 'basic';
  const ATTR_INLINE                                             = 'inline';
  const ATTR_LIGHT                                              = 'light';
  const ATTR_MINIMALIST                                         = 'minimalist';
  const ATTR_MODERN                                             = 'modern';
  const ATTR_PANEL                                              = 'panel';
  const ATTR_RIBBON                                             = 'ribbon';
  const ATTR_TRADITIONAL                                        = "traditional";
  const ATTR_STICK                                              = 'slick';
  const ATTR_SMOOTH                                             = 'smooth';
  const ATTR_SQUARE                                             = 'square';
  const ATTR_GROW                                               = 'grow';
  const ATRR_SWAP                                               = 'swap';
  const ATTR_SHRINK                                             = 'shrink';
  const ATTR_SLIDE_IN                                           = 'slide_in';
  const ATTR_SLIDE_OUT                                          = 'slide_out';
  const ATTR_DROP                                               = 'drop';
  const ATTR_APPEAR                                             = 'appear';
  const ATTR_TOPLEFT                                            = 'topleft';
  const ATTR_TOPRIGHT                                           = 'topright';
  const ATTR_BOTTOMLEFT                                         = 'bottomleft';
  const ATTR_BOTTOMRIGHT                                        = 'bottomright';
  const ATTR_DIAGONAL                                           = 'diagonal';
  const ATTR_HORIZONTAL                                         = 'horizontal';
  const ATTR_VERTICAL                                           = 'vertical';
  const ATTR_RANDOM                                             = 'random';
  const ATTR_HORIZONTAL_ZIGZAG                                  = 'horizontal_zigzag';
  const ATTR_VERTICAL_ZIGZAG                                    = 'vertical_zigzag';
  const ATTR_EXAMPLE                                            = 'example';
  const ATTR_SIDES                                              = 'sides';
  const ATTR_SLIDERS_BUTTON_CONFIG                              = 'sliders_config';
  const ATTR_SLIDERS_BUTTON_EDIT_SLIDES                         = 'sliders_edit_slides';
  const ATTR_SLIDERS_BUTTON_DELETE_SLIDE                        = 'sliders_delete_slide';
  const ATTR_BLOCK_TYPOGRAPHY_SETTINGS                          = 'Typography';
  const ATTR_CUFON                                              = 'cufon';
  const ATTR_GOOGLE_FONT                                        = 'google_font';
  const ATTR_WEB_FONTS                                          = 'web_fonts';
  const ATTR_POSTS                                              = 'posts';
  const ATTR_POSTMETA                                           = 'postmeta';
  const ATTR_TERMS                                              = 'terms';
  const ATTR_TERM_TAXONOMY                                      = 'term_taxonomy';
  const ATTR_TERM_RELATIONSHIPS                                 = 'term_relationships';
  const ATTR_FIELD_NAME_FORM                                    = 'name_form';
  const ATTR_FIELD_CONTACT_FORM_ADD                             = 'contact_form_add';
  const ATTR_BLOCK_EXPORTIMPORT_SETTINGS                        = 'Export/Import';
  const ATTR_EXPORTIMPORT_BUTTON_EXPORT                         = 'export_theme';
  const ATTR_EXPORTIMPORT_BUTTON_IMPORT                         = 'import_theme';
  const ATTR_EXPORTIMPORT_BUTTON_IMPORT_PANEL                   = 'import_panel';
  const ATTR_EXPORTIMPORT_BUTTON_EXPORT_PANEL                   = 'export_panel';
  const ATTR_EXPORTIMPORT_BUTTON_APPLY_PANEL                    = 'apply_panel';
  const ATTR_EXPORTIMPORT_BUTTON_DELETE_PANEL                   = 'delete_panel';
  const ATTR_FIELD_NEW_CONFIGURATION                            = 'new_configuration';
  const ATTR_FIELD_NAME_CONFIGURATION                           = 'name_configuration';
  const ATTR_FIELD_ID_CONFIGURATION                             = 'id_configuration';
  const ATTR_FIELD_IMPORT_CONFIGURATION                         = 'import_configuration';
  const ATTR_GLOBAL_PAGE_FOR_POSTS                              = 'page_for_posts';
  const ATTR_GLOBAL_SHOW_ON_FRONT                               = 'show_on_front';
  const ATTR_GLOBAL_PAGE_ON_FRONT                               = 'page_on_front';
  const ATTR_GLOBAL_SIDEBARS_WIDGETS                            = 'sidebars_widgets';
  const ATTR_GLOBAL_WIDGET                                      = 'widget';
  const ATTR_GLOBAL_THEME_MODS                                  = 'theme\_mods\_';
  const ATTR_WIDTH                                              = 'width';
  const ATTR_HEIGHT                                             = 'height';
  const ATTR_CSS_ROLE                                           = 'css_role';
  const ATTR_ALIGN_LEFT                                         = 'alignleft';
  const ATTR_ALIGN_RIGHT                                        = 'alignright';
  const ATTR_ALIGN_CENTER                                       = 'aligncenter';
  const ATTR_SHORTCODES_BUTTON_ADD                              = 'shortcodes_add';
  const ATTR_FIELD_POST_ID                                      = 'post_id';
  const ATTR_JIGOSHOP                                           = 'jigoshop';
  const ATTR_WOOCOMMERCE                                        = 'woocommerce';

  const VAR_SKINS                                               = 'skins';
  const VAR_SLIDERS                                             = 'sliders';
  const VAR_DEFAULT_CONTACT_FORM                                = 'default_contact_form';
  const VAR_BLOG_CATS_EXCLUDE_SIDEBAR                           = 'blog_cats_exclude_sidebar';
  const VAR_DEFAULT_PORTFOLIOS_PID                              = 'default_portfolios_pid';


  
  /**
   * The ID option of the tipe of slider to show
   *
   * @since 1.0.0
   * @const string
   */
  const VAR_HEADER_BG_IMAGE                                     = 'header_bg_image';
  const VAR_HEADER_BG_IMAGE_POSITION                            = 'header_bg_image_position';
  const VAR_HEADER_BG_IMAGE_REPEATE                             = 'header_bg_image_repeate'; 
  const VAR_SELECT_SKIN                                         = 'select_skin';
  const VAR_DEFAULT_IMAGES                                      = 'default_images';
  const VAR_BODY_BG_COLOR                                       = 'body_bg_color';
  const VAR_BODY_BG_IMAGE                                       = 'body_bg_image';
  const VAR_BODY_BG_TYPE                                        = 'body_bg_type';
  const VAR_BODY_BG_IMAGE_CUSTOM                                = 'body_bg_image_custom';
  const VAR_BODY_BG_IMAGE_CUSTOM_POSITION                       = 'body_bg_image_custom_position';
  const VAR_BODY_BG_IMAGE_CUSTOM_REPEATE                        = 'body_bg_image_custom_repeate';
  const VAR_BODY_BG_IMAGE_CUSTOM_ATTACHMENT                     = 'body_bg_image_custom_attachment';
  const VAR_COLORS_TOPBAR_BG                                    = 'colors_topbar_bg';
  const VAR_COLORS_TOPBAR_TEXT                                  = 'colors_topbar_text';
  const VAR_COLORS_TOPBAR_LINKS                                 = 'colors_topbar_links';
  const VAR_COLORS_TOPBAR_LINKS_HOVER                           = 'colors_topbar_links_hover';
  const VAR_COLORS_LOGO_COLOR                                   = 'colors_logo_color';
  const VAR_COLORS_LOGO_DESCRIPTION_COLOR                       = 'colors_logo_description_color';
  const VAR_COLORS_NAV_COLOR                                    = 'colors_nav_color';
  const VAR_COLORS_NAV_COLOR_HOVER                              = 'colors_nav_color_hover';
  const VAR_COLORS_NAV_COLOR_ACTIVE                             = 'colors_nav_color_active';
  const VAR_COLORS_SUBNAV_BG_COLOR                              = 'colors_subnav_bg_color';
  const VAR_COLORS_SUBNAV_BORDER_COLOR                          = 'colors_subnav_border_color';
  const VAR_COLORS_SUBNAV_COLOR                                 = 'colors_subnav_color';
  const VAR_COLORS_SUBNAV_COLOR_HOVER                           = 'colors_subnav_color_hover';
  const VAR_COLORS_H1                                           = 'colors_h1';
  const VAR_COLORS_H2                                           = 'colors_h2';
  const VAR_COLORS_H3                                           = 'colors_h3';
  const VAR_COLORS_H4                                           = 'colors_h4';
  const VAR_COLORS_H5                                           = 'colors_h5';
  const VAR_COLORS_H6                                           = 'colors_h6';
  const VAR_COLORS_H_HIGHLIGHTES                                = 'colors_h_highlightes';
  const VAR_COLORS_SIDEBAR_FOOTER_TITLES                        = 'colors_sidebar_footer_titles';
  const VAR_COLORS_SLOGAN                                       = 'colors_slogan';
  const VAR_COLORS_SUBSLOGAN                                    = 'colors_subslogan';
  const VAR_COLORS_P                                            = 'colors_p';
  const VAR_COLORS_A                                            = 'colors_a';
  const VAR_COLORS_A_HOVER                                      = 'colors_a_hover';
  const VAR_COLORS_SIDEBAR_A                                    = 'colors_sidebar_a';
  const VAR_COLORS_SIDEBAR_A_HOVER                              = 'colors_sidebar_a_hover';
  const VAR_COLORS_STORE_PRODUCTS_OFFER_TEXT                    = 'colors_store_products_offer_text';
  const VAR_COLORS_STORE_PRODUCTS_OFFER_BG                      = 'colors_store_products_offer_bg';
  const VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_BG             = 'colors_store_products_label_products_bg';
  const VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_TEXT           = 'colors_store_products_label_products_text';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_BG         = 'colors_store_products_button_add_to_cart_bg';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_BG             = 'colors_store_products_button_details_bg';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT       = 'colors_store_products_button_add_to_cart_text';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT           = 'colors_store_products_button_details_text';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_HOVER      = 'colors_store_products_button_add_to_cart_hover';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_HOVER          = 'colors_store_products_button_details_hover';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT_HOVER = 'colors_store_products_button_add_to_cart_text_hover';
  const VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT_HOVER     = 'colors_store_products_button_details_text_hover';
  const VAR_COLORS_STORE_BUTTONS_BG                             = 'colors_store_buttons_bg';
  const VAR_COLORS_STORE_BUTTONS_COLOR                          = 'colors_store_buttons_color';
  const VAR_COLORS_STORE_BUTTONS_BORDER                         = 'colors_store_buttons_border';
  const VAR_COLORS_STORE_BUTTONS_BG_HOVER                       = 'colors_store_buttons_bg_hover';
  const VAR_COLORS_STORE_BUTTONS_COLOR_HOVER                    = 'colors_store_buttons_color_hover';
  const VAR_COLORS_STORE_BUTTONS_BORDER_HOVER                   = 'colors_store_buttons_border_hover';
  const VAR_COLORS_STORE_BUTTONS_ALT_BG                         = 'colors_store_buttons_alt_bg';
  const VAR_COLORS_STORE_BUTTONS_ALT_COLOR                      = 'colors_store_buttons_alt_color';
  const VAR_COLORS_STORE_BUTTONS_ALT_BORDER                     = 'colors_store_buttons_alt_border';
  const VAR_COLORS_STORE_BUTTONS_ALT_BG_HOVER                   = 'colors_store_buttons_alt_bg_hover';
  const VAR_COLORS_STORE_BUTTONS_ALT_COLOR_HOVER                = 'colors_store_buttons_alt_color_hover';
  const VAR_COLORS_STORE_BUTTONS_ALT_BORDER_HOVER               = 'colors_store_buttons_alt_border_hover';
  const VAR_COLORS_STORE_SINGLE_PRICE_CARD_BG                   = 'colors_store_single_price_cart_bg';
  const VAR_COLORS_STORE_SINGLE_PRICE_CART_TEXT                 = 'colors_store_single_price_cart_text';
  const VAR_COLORS_BLOG_TITLE                                   = 'colors_blog_title';
  const VAR_COLORS_BLOG_TITLE_HOVER                             = 'colors_blog_title_hover';
  const VAR_COLORS_FOOTER_BACKGROUND                            = 'colors_footer_background';
  const VAR_COLORS_FOOTER_INNER_BACKGROUND                      = 'colors_footer_inner_background';
  const VAR_COLORS_FOOTER_INNER_BORDER                          = 'colors_footer_inner_border';
  const VAR_COLORS_FOOTER_COLOR_TITLES                          = 'colors_footer_color_titles';
  const VAR_COLORS_FOOTER_COLOR_TEXT                            = 'colors_footer_color_text';
  const VAR_COLORS_FOOTER_COLOR_LINKS                           = 'colors_footer_color_links';
  const VAR_COLORS_FOOTER_COLOR_LINKS_HOVER                     = 'colors_footer_color_links_hover';
  const VAR_COLORS_FOOTER_COLOR_MENUES_LINKS                    = 'colors_footer_color_menues_links';
  const VAR_COLORS_FOOTER_COLOR_MENUES_LINKS_HOVER              = 'colors_footer_color_menues_links_hover';
  const VAR_COLORS_COPYRIGHT_BACKGROUND                         = 'colors_copyright_background';
  const VAR_COLORS_COPYRIGHT_INNER_BACKGROUND                   = 'colors_copyright_inner_background';
  const VAR_COLORS_COPYRIGHT_INNER_BORDER                       = 'colors_copyright_inner_border';
  const VAR_COLORS_COPYRIGHT_TEXT_COLOR                         = 'colors_copyright_text_color';
  const VAR_COLORS_COPYRIGHT_LINKS_COLOR                        = 'colors_copyright_links_color';
  const VAR_COLORS_COPYRIGHT_LINKS_COLOR_HOVER                  = 'colors_copyright_links_color_hover';
  const VAR_CONTACT_FORMS                                       = 'contact_forms';
  const VAR_CONTACT_FORM_CHOOSEN                                = 'contact_form_choosen';
  const VAR_FEATURES_TAB                                        = 'features_tab';
  const VAR_SLIDER_FLASH_PIECES                                 = "slider_flash_Pieces";
  const VAR_SLIDER_FLASH_TIME                                   = "slider_flash_Time";
  const VAR_SLIDER_FLASH_TRANSITION                             = "slider_flash_Transition";
  const VAR_SLIDER_FLASH_DEPTH_OFFSET                           = "slider_flash_DepthOffset";
  const VAR_SLIDER_FLASH_CUBE_DISTANCE                          = "slider_flash_CubeDistance";
  const VAR_SLIDER_FLASH_LOADER_COLOR                           = "slider_flash_LoaderColor";
  const VAR_SLIDER_FLASH_INNER_SIDE_COLOR                       = "slider_flash_InnerSideColor";
  const VAR_SLIDER_FLASH_AUTOPLAY                               = "slider_flash_Autoplay";
  const VAR_SLIDER_FLASH_SIDE_SHADOW_ALPHA                      = "slider_flash_SideShadowAlpha";
  const VAR_SLIDER_FLASH_DROP_SHADOW_ALPHA                      = "slider_flash_DropShadowAlpha";
  const VAR_SLIDER_FLASH_DROP_SHADOW_DISTANCE                   = "slider_flash_DropShadowDistance";
  const VAR_SLIDER_FLASH_DROP_SHADOW_SCALE                      = "slider_flash_DropShadowScale";
  const VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_X                     = "slider_flash_DropShadowBlurX";
  const VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_Y                     = "slider_flash_DropShadowBlurY";
  const VAR_SLIDER_FLASH_MENU_DISTANCE_X                        = "slider_flash_MenuDistanceX";
  const VAR_SLIDER_FLASH_MENU_DISTANCE_Y                        = "slider_flash_MenuDistanceY";
  const VAR_SLIDER_FLASH_MENU_COLOR_1                           = "slider_flash_MenuColor1";
  const VAR_SLIDER_FLASH_MENU_COLOR_2                           = "slider_flash_MenuColor2";
  const VAR_SLIDER_FLASH_MENU_COLOR_3                           = "slider_flash_MenuColor3";
  const VAR_SLIDER_FLASH_CONTROL_SIZE                           = "slider_flash_ControlSize";
  const VAR_SLIDER_FLASH_CONTROL_DISTANCE                       = "slider_flash_ControlDistance";
  const VAR_SLIDER_FLASH_CONTROL_COLOR_1                        = "slider_flash_ControlColor1";
  const VAR_SLIDER_FLASH_CONTROL_COLOR_2                        = "slider_flash_ControlColor2";
  const VAR_SLIDER_FLASH_CONTROL_ALPHA                          = "slider_flash_ControlAlpha";
  const VAR_SLIDER_FLASH_CONTROL_ALPHA_OVER                     = "slider_flash_ControlAlphaOver";
  const VAR_SLIDER_FLASH_CONTROLS_X                             = "slider_flash_ControlsX";
  const VAR_SLIDER_FLASH_CONTROLS_Y                             = "slider_flash_ControlsY";
  const VAR_SLIDER_FLASH_CONTROLS_ALIGN                         = "slider_flash_ControlsAlign";
  const VAR_SLIDER_FLASH_TOOLTIP_HEIGHT                         = "slider_flash_TooltipHeight";
  const VAR_SLIDER_FLASH_TOOLTIP_COLOR                          = "slider_flash_TooltipColor";
  const VAR_SLIDER_FLASH_TOOLTIP_TEXT_Y                         = "slider_flash_TooltipTextY";
  const VAR_SLIDER_FLASH_TOOLTIP_TEXT_COLOR                     = "slider_flash_TooltipTextColor";
  const VAR_SLIDER_FLASH_TOOLTIP_MARGIN_LEFT                    = "slider_flash_TooltipMarginLeft";
  const VAR_SLIDER_FLASH_TOOLTIP_MARGIN_RIGHT                   = "slider_flash_TooltipMarginRight";
  const VAR_SLIDER_FLASH_TOOLTIP_TEXT_SHARPNESS                 = "slider_flash_TooltipTextSharpness";
  const VAR_SLIDER_FLASH_TOOLTIP_TEXT_THICKNESS                 = "slider_flash_TooltipTextThickness";
  const VAR_SLIDER_FLASH_INFO_WIDTH                             = "slider_flash_InfoWidth";
  const VAR_SLIDER_FLASH_INFO_BACKGROUND                        = "slider_flash_InfoBackground";
  const VAR_SLIDER_FLASH_INFO_BACKGROUND_ALPHA                  = "slider_flash_InfoBackgroundAlpha";
  const VAR_SLIDER_FLASH_INFO_MARGIN                            = "slider_flash_InfoMargin";
  const VAR_SLIDER_FLASH_INFO_TEXT_SHARPNESS                    = "slider_flash_InfoTextSharpness";
  const VAR_SLIDER_FLASH_INFO_TEXT_THICKNESS                    = "slider_flash_InfoTextThickness";
  const VAR_SLIDER_FLASH_SHOW_MORE_TEXT                         = 'slider_text_show_more_text';
  const VAR_SLIDER_FLASH_MORE_TEXT                              = 'slider_flash_more_text';
  const VAR_SLIDER_FLASH_SLIDES                                 = 'slider_flash_slides';
  const VAR_RESPONSIVE                                          = 'responsive';
  const VAR_THEME_LAYOUT                                        = 'theme_layout';
  const VAR_FAVICON                                             = 'favicon';
  const VAR_CUSTOM_STYLE                                        = 'custom_style';
  const VAR_CUSTOM_JS                                           = 'custom_js';
  const VAR_DATE_FORMAT                                         = "date_format";
  const VAR_USE_LOGO                                            = 'use_logo';
  const VAR_LOGO                                                = 'logo';
  const VAR_LOGO_USE_DSCRIPTION                                 = 'logo_use_description';
  const VAR_SHOW_BAR                                            = 'show_topbar';
  const VAR_TOPBAR_CONTENT                                      = 'topbar_content';
  const VAR_TOPBAR_TEXT                                         = 'topbar_text';
  const VAR_TOPBAR_TWITTER_USERNAME                             = 'topbar_twitter_username';
  const VAR_TOPBAR_TWITTER_ITEMS                                = 'topbar_twitter_items';
  const VAR_TOPBAR_TWITTER_INTERVAL                             = 'topbar_twitter_interval';
  const VAR_TOPBAR_LOGIN                                        = 'topbar_login';
  const VAR_TOPBAR_REGISTER                                     = 'topbar_register';
  const VAR_SHOW_TOPBAR_CART_RIBBON                             = 'show_topbar_cart_ribbon';
  const VAR_TOPBAR_CART_RIBBON                                  = 'topbar_cart_ribbon';
  const VAR_HEADER_BG_COLOR                                     = 'header_bg_color';
  const VAR_HEADER_BG_TYPE                                      = 'header_bg_type';
  const VAR_HEADER_BG_IMAGE_CUSTOM                              = 'header_bg_image_custom';
  const VAR_HEADER_BG_IMAGE_CUSTOM_REPEAT                       = 'header_bg_image_custom_repeat';
  const VAR_HEADER_BG_IMAGE_CUSTOM_POSITION                     = 'header_bg_image_custom_position';
  const VAR_HEADER_OPACITY                                      = 'header_opacity';
  const VAR_NEWSLETTER_FORM_SHOW                                = 'newsletter_form_show';
  const VAR_NEWSLETTER_FORM_TITLE                               = 'newsletter_form_title';
  const VAR_NEWSLETTER_FORM_DESCRIPTION                         = 'newsletter_form_description';
  const VAR_NEWSLETTER_FORM_ACTION                              = 'newsletter_form_action';
  const VAR_NEWSLETTER_FORM_METHOD                              = 'newsletter_form_method';
  const VAR_NEWSLETTER_FORM_NAME                                = 'newsletter_form_name';
  const VAR_NEWSLETTER_FORM_EMAIL                               = 'newsletter_form_email';
  const VAR_NEWSLETTER_FORM_LABEL_NAME                          = 'newsletter_form_label_name';
  const VAR_NEWSLETTER_FORM_LABEL_EMAIL                         = 'newsletter_form_label_email';
  const VAR_NEWSLETTER_FORM_LABEL_SUBMIT                        = 'newsletter_form_label_submit';
  const VAR_NEWSLETTER_FORM_LABEL_HIFFEN_FIELDS                 = 'newsletter_form_label_hidden_fields';
  const VAR_FOOTER_TYPE                                         = 'footer_type';
  const VAR_FOOTER_ROWS                                         = 'footer_rows';
  const VAR_FOOTER_COLUMNS                                      = 'footer_columns';
  const VAR_FOOTER_TEXT_CENTERED                                = 'footer_text_centered';
  const VAR_COPYRIGHT_TEXT_LEFT                                 = 'copyright_text_left';
  const VAR_COPYRIGHT_TEXT_RIGHT                                = 'copyright_text_right';
  const VAR_GA_CODE                                             = 'ga_code';
  const VAR_SHOP_PRODUCTS_PER_PAGE                              = 'shop_products_per_page';
  const VAR_SHOP_PRODUCTS_STYLE                                 = 'shop_products_style';
  const VAR_SHOP_TITLE_POSITION                                 = 'shop_title_position';
  const VAR_SHOP_BORDER_THUMBNAIL                               = 'shop_border_thumbnail';
  const VAR_SHOP_SHADOW_THUMBNAIL                               = 'shop_shadow_thumbnail';
  const VAR_SHOP_SHOW_NAME                                      = 'shop_show_name';
  const VAR_SHOP_SHOW_PRICE                                     = 'shop_show_price';
  const VAR_SHOP_SHOW_BUTTON_DETAILS                            = 'shop_show_button_details';
  const VAR_SHOP_SHOW_BUTTON_ADD_TO_CART                        = 'shop_show_button_add_to_cart';
  const VAR_SHOP_BUTTON_DETAILS_LABEL                           = 'shop_button_details_label';
  const VAR_SHOP_PRODUCTS_RIBBON                                = 'shop_products_ribbon';
  const VAR_SHOP_PRODUCTS_RIBBON_ADDED                          = 'shop_products_ribbon_added';
  const VAR_SHOP_BUTTON_ADD_TO_CART_LABEL                       = 'shop_button_addtocart_label';
  const VAR_SHOP_LAYOUT_PAGE_SINGLE                             = 'shop_layout_page_single';
  const VAR_SHOP_SHOW_PRICE_SINGLE_PAGE                         = 'shop_show_price_single_page';
  const VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE            = 'shop_show_button_add_to_cart_single_page';
  const VAR_SHOP_PRODUCT_SLIDER_AUTOPLAY                        = 'shop_product_slider_autoplay';
  const VAR_SHOP_PRODUCT_SLIDER_INTERVAL                        = 'shop_product_slider_interval';
  const VAR_BLOG_SHOW_DATE                                      = 'blog_show_date';
  const VAR_BLOG_SHOW_CATEGORIES                                = 'blog_show_categories';
  const VAR_BLOG_SHOW_AUTHOR                                    = 'blog_show_author';
  const VAR_BLOG_SHOW_COMMENTS                                  = 'blog_show_comments';
  const VAR_BLOG_SHOW_SOCIALS                                   = 'blog_show_socials';
  const VAR_BLOG_TYPE                                           = 'blog_type';
  const VAR_BLOG_CATS_EXCLUDE                                   = 'blog_cats_exclude';
  const VAR_BLOG_READ_MORE_TEXT                                 = 'blog_read_more_text';
  const VAR_PORTFOLIO_LAYOUT_PAGE                               = 'portfolio_layout_page';
  const VAR_PORTFOLIO_SHOW_FILTERS                              = 'portfolio_show_filters';
  const VAR_PORTFOLIO_THUMBNAIL_CLICK                           = 'portfolio_thumbnail_click';
  const VAR_PORTFOLIO_DETAILS_ICON                              = 'portfolio_details_icon';
  const VAR_PORTFOLIO_SKIN_LIGHTBOX                             = 'portfolio_skin_lightbox';
  const VAR_GALLERY_SHOW_FILTERS                                = 'gallery_show_filters';
  const VAR_GALLERY_DETAILS_ICON                                = 'gallery_details_icon';
  const VAR_SIDEBARS                                            = 'sidebars';
  const VAR_SLIDER_CHOOSEN                                      = 'slider_choosen';
  const VAR_SLIDER_TYPE                                         = 'slider_type';
  const VAR_SLIDER_RESPONSIVE                                   = 'slider_responsive';
  const VAR_SLIDER_ELEGANT_EFFECT                               = 'slider_elegant_effect';
  const VAR_SLIDER_ELEGANT_MORE_TEXT                            = 'slider_elegant_more_text';
  const VAR_SLIDER_ELEGANT_EASING                               = 'slider_elegant_easing';
  const VAR_SLIDER_ELEGANT_SHOW_MORE_TEXT                       = 'slider_elegant_show_more_text';
  const VAR_SLIDER_ELEGANT_SLIDES                               = 'slider_elegant_slides';
  const VAR_SLIDER_ELEGANT_SPEED                                = 'slider_elegant_speed';
  const VAR_SLIDER_ELEGANT_TIMEOUT                              = 'slider_elegant_timeout';
  const VAR_SLIDER_ELEGANT_CAPTION_POSITION                     = 'slider_elegant_caption_position';
  const VAR_SLIDER_ELEGANT_CAPTION_SPEED                        = 'slider_elegant_caption_speed';
  const VAR_SLIDER_THUMBNAILS_EFFECT                            = 'slider_thumbnails_effect';
  const VAR_SLIDER_THUMBNAILS_SPEED                             = 'slider_thumbnails_speed';
  const VAR_SLIDER_THUMBNAILS_TIMEOUT                           = 'slider_thumbnails_timeout';
  const VAR_SLIDER_THUMBNAILS_SHOW_MORE_TEXT                    = 'slider_thumbnails_show_more_text';
  const VAR_SLIDER_THUMBNAILS_MORE_TEXT                         = 'slider_thumbnails_more_text';
  const VAR_SLIDER_THUMBNAILS_SLIDES                            = 'slider_thumbnails_slides';
  const VAR_SLIDER_CYCLE_EASING                                 = 'slider_cycle_easing';
  const VAR_SLIDER_CYCLE_SHOW_MORE_TEXT                         = 'slider_cycle_show_more_text';
  const VAR_SLIDER_CYCLE_MORE_TEXT                              = 'slider_cycle_more_text';
  const VAR_SLIDER_CYCLE_SLIDES                                 = 'slider_cycle_slides';
  const VAR_SLIDER_CYCLE_EFFECT                                 = 'slider_cycle_effect';
  const VAR_SLIDER_CYCLE_SPEED                                  = 'slider_cycle_speed';
  const VAR_SLIDER_CYCLE_TIMEOUT                                = 'slider_cycle_timeout';
  const VAR_SLIDER_LAYERS_CHOOSE                                = 'slider_layers_choose';
  const VAR_LAYERSLIDER_SLIDES                                  = 'layerslider_slides';
  const VAR_SLIDER_MINILAYERS_CHOOSE                            = 'slider_minilayers_choose';
  const VAR_SLIDER_MINILAYERS_STATIC_TITLE                      = "slider_minilayers_static_title";
  const VAR_SLIDER_MINILAYERS_STATIC_TEXT                       = 'slider_minilayers_static_text';
  const VAR_SLIDER_MINILAYERS_STATIC_SHORT_TEXT                 = "slider_minilayers_static_short_text";
  const VAR_SLIDER_NIVO_PAUSE                                   = 'slider_nivo_pause';
  const VAR_SLIDER_NIVO_SHOW_MORE_TEXT                          = 'slider_nivo_show_more_text';
  const VAR_SLIDER_NIVO_MORE_TEXT                               = 'slider_nivo_more_text';
  const VAR_SLIDER_NIVO_SLIDES                                  = 'slider_nivo_slides';
  const VAR_SLIDER_NIVO_SPEED                                   = 'slider_nivo_speed';
  const VAR_SLIDER_NIVO_EFFECT                                  = 'slider_nivo_effect';
  const VAR_SLIDER_NIVO_STATIC_TITLE                            = "slider_nivo_static_title";
  const VAR_SLIDER_NIVO_TEXT                                    = 'slider_nivo_text';
  const VAR_SLIDER_NIVO_STATIC_SHORT_TEXT                       = 'slider_nivo_static_short_text';
  const VAR_SLIDER_UNOSLIDER_WIDTH                              = 'slider_unoslider_width';
  const VAR_SLIDER_UNOSLIDER_HEIGHT                             = 'slider_unoslider_height';
  const VAR_SLIDER_UNOSLIDER_THEME                              = 'slider_unoslider_theme';
  const VAR_SLIDER_UNOSLIDER_INDICATOR                          = 'slider_unoslider_indicator';
  const VAR_SLIDER_UNOSLIDER_AUTOHIDE_INDICATOR                 = 'slider_unoslider_autohide_indicator';
  const VAR_SLIDER_UNOSLIDER_NAVIGATION                         = 'slider_unoslider_navigation';
  const VAR_SLIDER_UNOSLIDER_AUTOHIDE_NAVIGATION                = 'slider_unoslider_autohide_navigation';
  const VAR_SLIDER_UNOSLIDER_ENABLE_SLIDESHOW                   = 'slider_unoslider_enable_slideshow';
  const VAR_SLIDER_UNOSLIDER_PAUSE_ON_MOUSEOVER                 = 'slider_unoslider_pause_on_mouseover';
  const VAR_SLIDER_UNOSLIDER_CONTINUOUS                         = 'slider_unoslider_continuous';
  const VAR_SLIDER_UNOSLIDER_TIMEBAR                            = 'slider_unoslider_timebar';
  const VAR_SLIDER_UNOSLIDER_AUTOSTART                          = 'slider_unoslider_autostart';
  const VAR_SLIDER_UNOSLIDER_INTERVAL                           = 'slider_unoslider_interval';
  const VAR_SLIDER_UNOSLIDER_VERTICAL_BLOCKS                    = 'slider_unoslider_vertical_blocks';
  const VAR_SLIDER_UNOSLIDER_HORIZONTAL_BLOCKS                  = 'slider_unoslider_horizontal_blocks';
  const VAR_SLIDER_UNOSLIDER_USE_PRESET                         = 'slider_unoslider_use_preset';
  const VAR_SLIDER_UNOSLIDER_PRESET                             = 'slider_unoslider_preset';
  const VAR_SLIDER_UNOSLIDER_SPEED                              = 'slider_unoslider_speed';
  const VAR_SLIDER_UNOSLIDER_DELAY_BLOCKS                       = 'slider_unoslider_delay_blocks';
  const VAR_SLIDER_UNOSLIDER_TRANSITION                         = 'slider_unoslider_transition';
  const VAR_SLIDER_UNOSLIDER_VARIATION                          = 'slider_unoslider_variation';
  const VAR_SLIDER_UNOSLIDER_PATTERN                            = 'slider_unoslider_pattern';
  const VAR_SLIDER_UNOSLIDER_DIRECTION                          = 'slider_unoslider_direction';
  const VAR_SLIDER_UNOSLIDER_SHOW_MORE_TEXT                     = 'slider_unoslider_show_more_text';
  const VAR_SLIDER_UNOSLIDER_MORE_TEXT                          = 'slider_unoslider_more_text';
  const VAR_SLIDER_UNOSLIDER_SLIDES                             = 'slider_unoslider_slides';
  const VAR_SLIDER_UNOSLIDER_INFINITE_LOOP                      = 'slider_unoslider_infinite_loop';
  const VAR_SLIDER_ELASTIC_HEIGHT                               = 'slider_elastic_height';
  const VAR_SLIDER_ELASTIC_AUTOPLAY                             = 'slider_elastic_autoplay';
  const VAR_SLIDER_ELASTIC_ANIMATION                            = 'slider_elastic_animation';
  const VAR_SLIDER_ELASTIC_SPEED                                = 'slider_elastic_speed';
  const VAR_SLIDER_ELASTIC_TIMEOUT                              = 'slider_elastic_timeout';
  const VAR_SLIDER_ELASTIC_SHOW_MORE_TEXT                       = 'slider_elastic_show_more_text';
  const VAR_SLIDER_ELASTIC_MORE_TEXT                            = 'slider_elastic_more_text';
  const VAR_SLIDER_ELASTIC_SLIDES                               = 'slider_elastic_slides';
  const VAR_FONT_TYPE_OPTION_ID                                 = 'font_type';
  const VAR_FONT_LOGO                                           = 'font_logo';
  const VAR_FONT_LOGO_TYPE                                      = 'font_logo_type';
  const VAR_FONT_DESCRIPTION                                    = 'font_description';
  const VAR_FONT_DESCRIPTION_TYPE                               = 'font_description_type';
  const VAR_FONT_NAVIGATION                                     = 'font_navigation';
  const VAR_FONT_NAVIGATION_TYPE                                = 'font_navigation_type';
  const VAR_FONT_P                                              = 'font_p';
  const VAR_FONT_P_TYPE                                         = 'font_p_type';
  const VAR_FONT_H1                                             = 'font_h1';
  const VAR_FONT_H1_TYPE                                        = 'font_h1_type';
  const VAR_FONT_H2                                             = 'font_h2';
  const VAR_FONT_H2_TYPE                                        = 'font_h2_type';
  const VAR_FONT_H3                                             = 'font_h3';
  const VAR_FONT_H3_TYPE                                        = 'font_h3_type';
  const VAR_FONT_H4                                             = 'font_h4';
  const VAR_FONT_H4_TYPE                                        = 'font_h4_type';
  const VAR_FONT_H5                                             = 'font_h5';
  const VAR_FONT_H5_TYPE                                        = 'font_h5_type';
  const VAR_FONT_H6                                             = 'font_h6';
  const VAR_FONT_H6_TYPE                                        = 'font_h6_type';
  const VAR_FONT_NIVO_TITLE                                     = 'font_nivo_title';
  const VAR_FONT_NIVO_TITLE_TYPE                                = 'font_nivo_title_type';
  const VAR_FONT_NIVO_TITLE_BRACKETS                            = 'font_nivo_title_brackets';
  const VAR_FONT_NIVO_TITLE_BRACKETS_TYPE                       = 'font_nivo_title_brackets_type';
  const VAR_FONT_NIVO_CONTENT                                   = 'font_nivo_content';
  const VAR_FONT_NIVO_CONTENT_TYPE                              = 'font_nivo_content_type';
  const VAR_FONT_SLOGAN                                         = 'font_slogan';
  const VAR_FONT_SLOGAN_TYPE                                    = 'font_slogan_type';
  const VAR_FONT_SUBSLOGAN                                      = 'font_subslogan';
  const VAR_FONT_SUBSLOGAN_TYPE                                 = 'font_subslogan_type';
  const VAR_FONT_SIDEBARFOOTER                                  = 'font_sidebarfooter';
  const VAR_FONT_SIDEBARFOOTER_TYPE                             = 'font_sidebarfooter_type';
  const VAR_FONT_NAME_TESTIMONIAL                               = 'font_name_testimonial';
  const VAR_FONT_NAME_TESTIMONIAL_TYPE                          = 'font_name_testimonial_type';
  const VAR_FONT_SPECIAL_FONT                                   = 'font_special_font';
  const VAR_FONT_SPECIAL_FONT_TYPE                              = 'font_special_font_type';
  const VAR_FONT_NAV_SIZE                                       = 'font_nav_size';
  const VAR_FONT_TEXT_SIZE                                      = 'font_text_size';
  const VAR_FONT_H1_SIZE                                        = 'font_h1_size';
  const VAR_FONT_H2_SIZE                                        = 'font_h2_size';
  const VAR_FONT_H3_SIZE                                        = 'font_h3_size';
  const VAR_FONT_H4_SIZE                                        = 'font_h4_size';
  const VAR_FONT_H5_SIZE                                        = 'font_h5_size';
  const VAR_FONT_H6_SIZE                                        = 'font_h6_size';
  const VAR_FONT_SLOGAN_SIZE                                    = 'font_slogan_size';
  const VAR_FONT_SUBSLOGAN_SIZE                                 = 'font_subslogan_size';
  const VAR_FONT_BLOG_TITLE_SIZE                                = 'font_blog_title_size';
  const VAR_FONT_META_SIZE                                      = 'font_meta_size';
  const VAR_PANEL_CONFIGS                                       = 'panel_configs';
  const VAR_THUMB_RECENTPOSTS                                   = 'thumb_recentposts';
  const VAR_THUMB_TESTIMONIAL                                   = 'thumb_testimonial';
  const VAR_THUMB_SLIDER_ELASTIC                                = 'thumb_slider_elastic';
  const VAR_THUMB_PORTFOLIO_3COLS                               = 'thumb_portfolio_3cols';
  const VAR_THUMB_PORTFOLIO_SLIDER                              = 'thumb_portfolio_slider';
  const VAR_THUMB_PORTFOLIO_BIG                                 = 'thumb_portfolio_big';
  const VAR_THUMB_GALLERY                                       = 'thumb_gallery';
  const VAR_THUMB_MORE_PROJECTS                                 = 'thumb_more_projects';
  const VAR_BLOG_ELEGANT                                        = 'blog_elegant';
  const VAR_BLOG_BIG                                            = 'blog_big';
  const VAR_BLOG_SMALL                                          = 'blog_small';
  const VAR_NIVO_SLIDER                                         = 'nivo_slider';
  const VAR_FEATURES_TAB_ICON                                   = 'features_tab_icon';
  const VAR_NOTIFIER_CACHE                                      = 'notifier_cache';
  const VAR_NOTIFIER_CACHE_LAST_UPDATE                          = 'notifier_cache_last_update';

  const OPT_THEMES_ROOT                                         = 'themes_root';
  const OPT_THEMES_SUB_DIRECTORY                                = 'themes_sub_directory';
  const OPT_THEME_STATUS                                        = 'theme_status';
  const OPT_MAIN_WIDTH                                          = 'main_width';
  const OPT_CONTENT_WIDTH                                       = 'content_width';
  const OPT_SIDEBAR_WIDTH                                       = 'sidebar_width';
  const OPT_MINIMUM_WP_VERSION                                  = 'minimum_wp_version';
  const OPT_DEFAULT_LAYOUT_PAGE                                 = 'default_layout_page';
  const OPT_DEFAULT_LAYOUT_PAGE_SHOP                            = 'default_layout_page';

  /**
   * The ID option of the index of the loop of slides
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_INDEX                                        = 'slider_index';
  /**
   * The ID option of all slides of the slider
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_SLIDES                                       = 'slider_slides';
  /**
   * The ID option of slides, where get all slides of the slider.
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_ID                                           = 'slider_id';
  /**
   * The ID option of sid boolean box for more text
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_SHOW_MORE_TEXT                               = 'slider_show_more_text';
  /**
   * The ID option of sid more text box
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_MORE_TEXT                                    = 'slider_more_text';
  /**
   * The ID option of tHe lenght of the slider
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_LENGHT                                      = 'slider_lenght';
  /**
   * The ID option of array with the current slide
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_CURRENT_SLIDE                               = 'slider_current_clide';
  /**
   * The ID option of if there is link in the current slider
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_IS_A_LINK                                   = 'slider_is_a_link';
  /**
   * The ID option of the url of the link, set in the slide
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_URL                                         = 'slider_url';
  /**
   * The ID option of the html, before the text, for the links
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_A_BEFORE                                    = 'slider_a_before';
  /**
   * The ID option of the html, after the text, for the links
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_A_AFTER                                     = 'slider_a_after';
  /**
   * The ID option of the html, after the text, for the links
   *
   * @since 1.0.0
   * @const string
   */
  const OPT_SLIDER_SLIDES_CONFIG                               = 'slider_slides_config';
  
  const OPT_SLIDER_TYPE                                        = 'slider_type';
  const OPT_ACCEPT                                             = 'accept';
  const OPT_USER_AGENT                                         = 'user_agent';
  const OPT_IS_MOBILE                                          = 'is_mobile';
  const OPT_IS_ANDROID                                         = 'is_android';
  const OPT_IS_ANDROIDTABLET                                   = 'is_androidtablet';
  const OPT_IS_IPHONE                                          = 'is_iphone';
  const OPT_IS_IPAD                                            = 'is_ipad';
  const OPT_IS_BLACKBERRY                                      = 'is_blackberry';
  const OPT_IS_BLACKBERRYTABLET                                = 'is_blackberrytablet';
  const OPT_IS_OPERA                                           = 'is_opera';
  const OPT_IS_PALM                                            = 'is_palm';
  const OPT_IS_WINDOWS                                         = 'is_windows';
  const OPT_IS_WINDOWSPHONE                                    = 'is_windowsphone';
  const OPT_IS_GENERIC                                         = 'is_generic';
  const OPT_MOBILE_DEVICES                                     = 'mobile_devices';
  const OPT_METABOXES                                          = 'metaboxes';
  const OPT_METABOXES_OPTIONS                                  = 'metaboxes_options';
  const OPT_FONT_ROLES                                         = 'font_roles';
  const OPT_SIZES_ROLES                                        = 'sizes_roles';
  const OPT_COLOR_ROLES                                        = 'color_roles';
  const OPT_WPTABLES                                           = 'wptables';
  const OPT_RSS_FORUM_URL                                      = 'rss_forum_url';
  const OPT_RSS_URL                                            = 'rss_url';
  const OPT_DEFAULT_CONTACT_FORM                               = 'default_contact_form';
  const OPT_LAYOUT                                             = 'layout';
  const OPT_WIDGET_NUM                                         = 'widget_num';
  const OPT_PORTFOLIO                                          = 'portfolio';
  const OPT_NOTIFIER_CACHE_INTERVAL                            = 'notifier_cache_interval';
  const OPT_NOTIFIER_XML_FILE                                  = 'notifier_xml_file';
  const OPT_EMAIL_CONTENT_TYPE                                 = 'email_content_type';
  const OPT_EMAIL_MESSAGE                                      = 'email_message';
  const OPT_SHORTCODES                                         = 'shortcodes';
  const OPT_TAGS_ALLOWED                                       = 'tags_allowed';
  const OPT_CYCLE_FXS                                          = 'cycle_fxs';
  const OPT_SLIDERS                                            = 'sliders';
  const OPT_UNOSLIDER_ANIMATIONS                               = 'unoslider_animations';
  const OPT_PORTFOLIO_TYPES                                    = 'portfolio_types';
  const OPT_EASINGS                                            = 'easings';
  const OPT_BLOG_TYPE                                          = 'blog_type';
  const OPT_POST_TYPE                                          = 'post_type';
  const OPT_PORTFOLIO_TYPE                                     = 'portfolio_type';
  const OPT_HEADER_IMAGE_WIDTH                                 = 'header_image_width';
  const OPT_HEADER_IMAGE_HEIGHT                                = 'header_image_height';
  const OPT_HEADER_IMAGE                                       = 'header_image';
  const OPT_THEME_URI                                          = 'theme_uri';
  const OPT_THEME_DIR                                          = 'theme_dir';
  const OPT_SHOP_MODE                                          = 'shop_mode';


  /**
   * 
   * @var array
   * @protected
   * @access protected
   */
  protected $_options = array(
    self::OPT_MODE                                          => self::ATTR_THEME,
    self::OPT_SHOP_MODE                                     => self::ATTR_NONE,
    self::OPT_THEME_STATUS                                  => self::ATTR_UNDEFINED,
    self::OPT_THEMES_ROOT                                   => '/kadapter/kohana/modules/wordpress/views/',
    self::OPT_THEME_URI                                     => '',
    self::OPT_THEME_DIR                                     => '',
    self::OPT_THEMES_SUB_DIRECTORY                          => 'themes',
    self::OPT_NAME 				                                  => 'KWTF',
		self::OPT_PLUGIN_NAME                                   => 'KWTF',
	  self::OPT_HAS_TRANSLATION                               => TRUE,
		self::OPT_TPL_TDOMAIN                                   => 'kwtf',
		self::OPT_PLUGIN_TDOMAIN                                => 'kwtf',
		self::OPT_HAS_JAVASCRIPT                                => TRUE,
		self::OPT_JAVASCRIPT_FILE                               => 'js/kwtf.php',
    self::OPT_HAS_ENQUEUE_SCRIPTS                           => TRUE,
    self::OPT_ENQUEUE_SCRIPTS                               => array(
      self::ATTR_THEME                                      =>array(
        array(
          self::ATTR_HANDLE     => 'jquery-cycle',
          self::ATTR_SRC        => 'js/jquery.cycle.min.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '2.94'
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-easing',
          self::ATTR_SRC        => 'js/jquery.easing.1.3.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '1.3'
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-prettyPhoto',
          self::ATTR_SRC        => 'js/jquery.prettyPhoto.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '3.0'
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-tipsy',
          self::ATTR_SRC        => 'js/jquery.tipsy.js',
          self::ATTR_DEPS       => array('jquery'),
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-tweetable',
          self::ATTR_SRC        => 'js/jquery.tweetable.js',
          self::ATTR_DEPS       => array('jquery'),
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-jcarousel',
          self::ATTR_SRC        => 'js/jquery.jcarousel.min.js',
          self::ATTR_DEPS       => array('jquery'),
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-nivo',
          self::ATTR_SRC        => 'js/jquery.nivo.slider.pack.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '2.5.2'
        ),
        array(
          self::ATTR_HANDLE     => 'cufon',
          self::ATTR_SRC        => 'js/cufon-yui.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '1.09i'
        ),
        array(
          self::ATTR_HANDLE => 'prettyPhoto',
          self::ATTR_SRC    => 'css/prettyPhoto.css',
        ),
        array(
          self::ATTR_HANDLE => 'functions',
          self::ATTR_SRC    => 'css/tipsy.css',
        ),
        array(
          self::ATTR_HANDLE => 'jquery-ui-style',
          self::ATTR_SRC    => 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css',
        ),
        array(
          self::ATTR_HANDLE     => 'kwtf-contact-form',
          self::ATTR_SRC        => 'js/contact.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '1.0',
          self::ATTR_IN_FOOTER  => TRUE
        ),
        array(
          self::ATTR_HANDLE     => 'layerslider_js',
          self::ATTR_SRC        => 'js/layerslider.kreaturamedia.jquery-min.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '1.0',
          self::ATTR_HOOK       => 'kwtf_wp_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'layerslider_css',
          self::ATTR_SRC        => 'css/layerslider.css',
          self::ATTR_VER        => '1.0',
          self::ATTR_HOOK       => 'kwtf_wp_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'woocommerce_style',
          self::ATTR_SRC        => 'woocommerce/_style.css',
          self::ATTR_HOOK       => 'kwtf_wp_enqueue_woocommerce',
        ),

      ),
      self::ATTR_ADMIN                                      => array(
        array(
          self::ATTR_HANDLE     => 'thickbox',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-ui-tabs',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-ui-sortable',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'jquery-ui-draggable',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'layerslider_admin_js',
          self::ATTR_SRC        => 'js/layerslider_admin.js',
          self::ATTR_DEPS       => array('jquery'),
          self::ATTR_VER        => '1.0',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'layerslider_admin_css',
          self::ATTR_SRC        => 'css/layerslider_admin.css',
          self::ATTR_VER        => '1.0',
          self::ATTR_HOOK       => 'kwtf_admin_enqueue_layer_slider',
        ),
        array(
          self::ATTR_HANDLE     => 'my_meta_css',
          self::ATTR_SRC        => 'css/metaboxes.css',
        ),
      ),
      self::ATTR_ADMIN_PAGE                                 => array(
        array(
          self::ATTR_HANDLE => 'functions',
          self::ATTR_SRC => 'css/functions.css',
          self::ATTR_VER => '1.0',
          self::ATTR_MEDIA => 'all'
        ),
        array(
          self::ATTR_HANDLE => 'functions-custom',
          self::ATTR_SRC => 'css/style.css',
          self::ATTR_VER => '1.0',
          self::ATTR_MEDIA => 'all'
        ),
        array(
          self::ATTR_HANDLE => 'iphone-style-checkboxes',
          self::ATTR_SRC => 'css/iphone-style-checkboxes.css',
          self::ATTR_VER => '1.0',
          self::ATTR_MEDIA => 'all'
        ),
        array(
          self::ATTR_HANDLE => 'jquery-ui-overcast',
          self::ATTR_SRC => 'css/jquery-ui-1.8.9.custom.css',
          self::ATTR_VER => '1.8.8',
          self::ATTR_MEDIA => 'all'
        ),
        array(
          self::ATTR_HANDLE => 'jquery-ui-overcast',
          self::ATTR_SRC => 'css/jquery-ui-1.8.9.custom.css',
          self::ATTR_VER => '1.8.8',
          self::ATTR_MEDIA => 'all'
        ),
        array(
          self::ATTR_HANDLE => 'wp-admin',
        ),
        array(
          self::ATTR_HANDLE => 'thickbox',
        ),
        array(
          self::ATTR_HANDLE => 'farbtastic',
        ),
        array(
          self::ATTR_HANDLE => 'jquery-ui-custom',
          self::ATTR_SRC => 'js/jquery-ui-1.8.9.custom.min.js',
          self::ATTR_VER => '1.8.9',
          self::ATTR_IN_FOOTER => TRUE
        ),
        array(
          self::ATTR_HANDLE => 'rm_script',
          self::ATTR_SRC => 'js/rm_script.js',
          self::ATTR_DEPS => array(
            'jquery',
            'jquery-ui-custom',
            //'jquery-ui-sortable',
            //'jquery-ui-draggable',
            //'jquery-ui-droppable',
            //'admin-widgets',
            'media-upload',
            'thickbox',
            'farbtastic'
          ),
          self::ATTR_VER => '1.0',
          self::ATTR_IN_FOOTER => TRUE
        ),
        array(
          self::ATTR_HANDLE => 'iphone-style-checkboxes',
          self::ATTR_SRC => 'js/iphone-style-checkboxes.js',
          self::ATTR_VER => '1',
          self::ATTR_IN_FOOTER => TRUE
        ),
      ),
    ),
		self::OPT_HAS_SHORTCODE                                 => TRUE,
		self::OPT_SHORTCODE			                                => '',
		self::OPT_HAS_TOPLEVEL_MENU                             => TRUE,
		self::OPT_HAS_WIDGET                                    => TRUE,
		self::OPT_WIDGETS                                       => array(
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'widget_AlmostAllCategories',
        self::OPT_WIDGET_NAME                               => 'Almost All Categories',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'show_count'                                      => 'Show Count',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'widget_GoogleMap',
        self::OPT_WIDGET_NAME                               => 'Google Map',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'src'                                             => 'Source Link',
          'width'                                           => 'Width',
          'height'                                          => 'Height',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'widget_lastTweets',
        self::OPT_WIDGET_NAME                               => 'Last Tweets',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'username'                                        => 'Login',
          'limit'                                           => 'Limit',
          'time'                                            => 'Time',
          'replies'                                         => 'Replies',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_PopularPost',
        self::OPT_WIDGET_NAME                               => 'Popular Post',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'items'                                           => 'Show Count',
          'show_thumb'                                      => 'Show Thumb',
          'more_text'                                       => 'More Text',
          'excerpt_length'                                  => 'Excerpt Lenght',
          'date_excerpt'                                    => 'Excerpt Date',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_RecentPosts',
        self::OPT_WIDGET_NAME                               => 'Recent Post',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'items'                                           => 'Show Count',
          'show_thumb'                                      => 'Show Thumb',
          'more_text'                                       => 'More Text',
          'excerpt_length'                                  => 'Excerpt Lenght',
          'date_excerpt'                                    => 'Excerpt Date',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_TextImage',
        self::OPT_WIDGET_NAME                               => 'Text Image',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'image'                                           => 'Image',
          'align'                                           => 'Align',
          'text'                                            => 'Text',
          'autop'                                           => 'Automatically add paragraphs',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_ContactInfo',
        self::OPT_WIDGET_NAME                               => 'Contact Info',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'phone'                                           => 'Phone',
          'address'                                         => 'Address',
          'fax'                                             => 'Fax',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_GalleryCategories',
        self::OPT_WIDGET_NAME                               => 'Gallery Categories',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_IconText',
        self::OPT_WIDGET_NAME                               => 'Icon Text',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'icon_img'                                        => 'Icone Image',
          'text'                                            => 'Text',
          'img_url'                                         => 'Image Url',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_MoreProjects',
        self::OPT_WIDGET_NAME                               => 'More Projects',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'project_n_items'                                 => 'Items',
          'project_speed_fx'                                => 'Speed FX',
          'project_post_type'                               => 'Post Type',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_PortfolioCategories',
        self::OPT_WIDGET_NAME                               => 'Portfolio Categories',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'project_post_type'                               => 'Post Type',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_RecentComments',
        self::OPT_WIDGET_NAME                               => 'Recent Comments',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'number'                                          => 'Show Count',
          'show_avatar'                                     => 'Show Avatar',
          'show_author'                                     => 'Show Author',
          'show_content'                                    => 'Show Content',
          'excerpt_length'                                  => 'Excerpt Lenght',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_Testimonials',
        self::OPT_WIDGET_NAME                               => 'Testimonials',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'test_n_items'                                    => 'Show Count',
          'test_fx'                                         => 'Scroll Fx',
          'test_easing_fx'                                  => 'Easing Fx',
          'test_timeout_fx'                                 => 'Timeout Fx',
          'test_speed_fx'                                   => 'Speed Fx',
          'icon_img'                                        => 'Icon',
          'img_url'                                         => 'Image Url',
        )
      ),
      array(
        self::OPT_WIDGET_TDOMAIN		                        => 'kwtf',
        self::OPT_WIDGET_CLASS		                          => 'Widget_LayerSlider',
        self::OPT_WIDGET_NAME                               => 'Layer Slider',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                                           => 'Title',
          'id'                                              => 'Sliders Id',
        )
      ),
		),
		self::OPT_OPTION_FORM_BLOCKS                            => array(
      self::ATTR_BLOCK_COLORS_SETTINGS                      => array(
        self::VAR_BODY_BG_COLOR                                       => self::ATTR_TEXT,
        self::VAR_BODY_BG_IMAGE                                       => self::ATTR_TEXT,
        self::VAR_BODY_BG_TYPE                                        => self::ATTR_TEXT,
        self::VAR_BODY_BG_IMAGE_CUSTOM                                => self::ATTR_TEXT,
        self::VAR_BODY_BG_IMAGE_CUSTOM_POSITION                       => self::ATTR_TEXT,
        self::VAR_BODY_BG_IMAGE_CUSTOM_REPEATE                        => self::ATTR_TEXT,
        self::VAR_BODY_BG_IMAGE_CUSTOM_ATTACHMENT                     => self::ATTR_TEXT,
        self::VAR_COLORS_TOPBAR_BG                                    => self::ATTR_TEXT,
        self::VAR_COLORS_TOPBAR_TEXT                                  => self::ATTR_TEXT,
        self::VAR_COLORS_TOPBAR_LINKS                                 => self::ATTR_TEXT,
        self::VAR_COLORS_TOPBAR_LINKS_HOVER                           => self::ATTR_TEXT,
        self::VAR_COLORS_LOGO_COLOR                                   => self::ATTR_TEXT,
        self::VAR_COLORS_LOGO_DESCRIPTION_COLOR                       => self::ATTR_TEXT,
        self::VAR_COLORS_NAV_COLOR                                    => self::ATTR_TEXT,
        self::VAR_COLORS_NAV_COLOR_HOVER                              => self::ATTR_TEXT,
        self::VAR_COLORS_NAV_COLOR_ACTIVE                             => self::ATTR_TEXT,
        self::VAR_COLORS_SUBNAV_BG_COLOR                              => self::ATTR_TEXT,
        self::VAR_COLORS_SUBNAV_BORDER_COLOR                          => self::ATTR_TEXT,
        self::VAR_COLORS_SUBNAV_COLOR                                 => self::ATTR_TEXT,
        self::VAR_COLORS_SUBNAV_COLOR_HOVER                           => self::ATTR_TEXT,
        self::VAR_COLORS_H1                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H2                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H3                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H4                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H5                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H6                                           => self::ATTR_TEXT,
        self::VAR_COLORS_H_HIGHLIGHTES                                => self::ATTR_TEXT,
        self::VAR_COLORS_SIDEBAR_FOOTER_TITLES                        => self::ATTR_TEXT,
        self::VAR_COLORS_SLOGAN                                       => self::ATTR_TEXT,
        self::VAR_COLORS_SUBSLOGAN                                    => self::ATTR_TEXT,
        self::VAR_COLORS_P                                            => self::ATTR_TEXT,
        self::VAR_COLORS_A                                            => self::ATTR_TEXT,
        self::VAR_COLORS_A_HOVER                                      => self::ATTR_TEXT,
        self::VAR_COLORS_SIDEBAR_A                                    => self::ATTR_TEXT,
        self::VAR_COLORS_SIDEBAR_A_HOVER                              => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_OFFER_TEXT                    => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_OFFER_BG                      => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_BG             => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_TEXT           => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_BG         => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_BG             => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT       => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT           => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_HOVER      => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_HOVER          => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT_HOVER => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT_HOVER     => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_BG                             => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_COLOR                          => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_BORDER                         => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_BG_HOVER                       => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_COLOR_HOVER                    => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_BORDER_HOVER                   => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_BG                         => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR                      => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER                     => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_BG_HOVER                   => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR_HOVER                => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER_HOVER               => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_SINGLE_PRICE_CARD_BG                   => self::ATTR_TEXT,
        self::VAR_COLORS_STORE_SINGLE_PRICE_CART_TEXT                 => self::ATTR_TEXT,
        self::VAR_COLORS_BLOG_TITLE                                   => self::ATTR_TEXT,
        self::VAR_COLORS_BLOG_TITLE_HOVER                             => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_BACKGROUND                            => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_INNER_BACKGROUND                      => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_INNER_BORDER                          => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_TITLES                          => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_TEXT                            => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_LINKS                           => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_LINKS_HOVER                     => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS                    => self::ATTR_TEXT,
        self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS_HOVER              => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_BACKGROUND                         => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_INNER_BACKGROUND                   => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_INNER_BORDER                       => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_TEXT_COLOR                         => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_LINKS_COLOR                        => self::ATTR_TEXT,
        self::VAR_COLORS_COPYRIGHT_LINKS_COLOR_HOVER                  => self::ATTR_TEXT,
      ),
      self::ATTR_BLOCK_CONTACT_FORMS_SETTINGS                         => array(
        self::VAR_CONTACT_FORM_CHOOSEN                                => self::ATTR_TEXT,
        self::ATTR_CONTACT_FORM_BUTTON_ADD                            => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_ADD_FIELD                      => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_EDIT_FIELD                     => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_SAVE_FIELD                     => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_DELETE_FIELD                   => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_ARRAY_UP                       => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_ARRAY_DOWN                     => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_CREATE                         => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_SAVE_CONFIG                    => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_CONFIG                         => self::ATTR_SUBMIT,
        self::ATTR_CONTACT_FORM_BUTTON_DELETE                         => self::ATTR_SUBMIT,
      ),
      self::ATTR_BLOCK_FEATURES_SETTINGS                              => array(
        self::ATTR_FEATURES_BUTTON_ADD                                => self::ATTR_SUBMIT,
        self::ATTR_FEATURES_BUTTON_DELETE                             => self::ATTR_SUBMIT,
      ),
      self::ATTR_BLOCK_FLASH_SLIDER                                   => array(
        self::VAR_SLIDER_FLASH_PIECES                                 => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TIME                                   => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TRANSITION                             => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DEPTH_OFFSET                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CUBE_DISTANCE                          => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_LOADER_COLOR                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INNER_SIDE_COLOR                       => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_AUTOPLAY                               => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_SIDE_SHADOW_ALPHA                      => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DROP_SHADOW_ALPHA                      => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DROP_SHADOW_DISTANCE                   => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DROP_SHADOW_SCALE                      => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_X                     => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_Y                     => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_MENU_DISTANCE_X                        => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_MENU_DISTANCE_Y                        => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_MENU_COLOR_1                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_MENU_COLOR_2                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_MENU_COLOR_3                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_SIZE                           => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_DISTANCE                       => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_COLOR_1                        => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_COLOR_2                        => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_ALPHA                          => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROL_ALPHA_OVER                     => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROLS_X                             => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROLS_Y                             => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_CONTROLS_ALIGN                         => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_HEIGHT                         => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_COLOR                          => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_Y                         => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_COLOR                     => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_LEFT                    => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_RIGHT                   => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_SHARPNESS                 => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_THICKNESS                 => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_WIDTH                             => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_BACKGROUND                        => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_BACKGROUND_ALPHA                  => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_MARGIN                            => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_TEXT_SHARPNESS                    => self::ATTR_TEXT,
        self::VAR_SLIDER_FLASH_INFO_TEXT_THICKNESS                    => self::ATTR_TEXT,
      ),
      self::ATTR_BLOCK_GENERAL_SETTINGS                               => array(
        self::VAR_RESPONSIVE                                          => self::ATTR_TEXT,
        self::VAR_THEME_LAYOUT                                        => self::ATTR_TEXT,
        self::VAR_FAVICON                                             => self::ATTR_TEXT,
        self::VAR_CUSTOM_STYLE                                        => self::ATTR_TEXT,
        self::VAR_CUSTOM_JS                                           => self::ATTR_TEXT,
        self::VAR_DATE_FORMAT                                         => self::ATTR_TEXT,
        self::VAR_USE_LOGO                                            => self::ATTR_TEXT,
        self::VAR_LOGO                                                => self::ATTR_TEXT,
        self::VAR_LOGO_USE_DSCRIPTION                                 => self::ATTR_TEXT,
        self::VAR_SHOW_BAR                                            => self::ATTR_TEXT,
        self::VAR_TOPBAR_CONTENT                                      => self::ATTR_TEXT,
        self::VAR_TOPBAR_TEXT                                         => self::ATTR_TEXT,
        self::VAR_TOPBAR_TWITTER_USERNAME                             => self::ATTR_TEXT,
        self::VAR_TOPBAR_TWITTER_ITEMS                                => self::ATTR_TEXT,
        self::VAR_TOPBAR_TWITTER_INTERVAL                             => self::ATTR_TEXT,
        self::VAR_TOPBAR_LOGIN                                        => self::ATTR_TEXT,
        self::VAR_TOPBAR_REGISTER                                     => self::ATTR_TEXT,
        self::VAR_SHOW_TOPBAR_CART_RIBBON                             => self::ATTR_TEXT,
        self::VAR_TOPBAR_CART_RIBBON                                  => self::ATTR_TEXT,
        self::VAR_HEADER_BG_COLOR                                     => self::ATTR_TEXT,
        self::VAR_HEADER_BG_TYPE                                      => self::ATTR_TEXT,
        self::VAR_HEADER_BG_IMAGE_CUSTOM                              => self::ATTR_TEXT,
        self::VAR_HEADER_BG_IMAGE_CUSTOM_REPEAT                       => self::ATTR_TEXT,
        self::VAR_HEADER_BG_IMAGE_CUSTOM_POSITION                     => self::ATTR_TEXT,
        self::VAR_HEADER_OPACITY                                      => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_SHOW                                => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_TITLE                               => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_DESCRIPTION                         => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_ACTION                              => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_METHOD                              => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_NAME                                => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_EMAIL                               => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_LABEL_NAME                          => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_LABEL_EMAIL                         => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_LABEL_SUBMIT                        => self::ATTR_TEXT,
        self::VAR_NEWSLETTER_FORM_LABEL_HIFFEN_FIELDS                 => self::ATTR_TEXT,
        self::VAR_FOOTER_TYPE                                         => self::ATTR_TEXT,
        self::VAR_FOOTER_ROWS                                         => self::ATTR_TEXT,
        self::VAR_FOOTER_COLUMNS                                      => self::ATTR_TEXT,
        self::VAR_FOOTER_TEXT_CENTERED                                => self::ATTR_TEXT,
        self::VAR_COPYRIGHT_TEXT_LEFT                                 => self::ATTR_TEXT,
        self::VAR_COPYRIGHT_TEXT_RIGHT                                => self::ATTR_TEXT,
        self::VAR_GA_CODE                                             => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCTS_PER_PAGE                              => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCTS_STYLE                                 => self::ATTR_TEXT,
        self::VAR_SHOP_TITLE_POSITION                                 => self::ATTR_TEXT,
        self::VAR_SHOP_BORDER_THUMBNAIL                               => self::ATTR_TEXT,
        self::VAR_SHOP_SHADOW_THUMBNAIL                               => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_NAME                                      => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_PRICE                                     => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_BUTTON_DETAILS                            => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART                        => self::ATTR_TEXT,
        self::VAR_SHOP_BUTTON_DETAILS_LABEL                           => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCTS_RIBBON                                => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCTS_RIBBON_ADDED                          => self::ATTR_TEXT,
        self::VAR_SHOP_BUTTON_ADD_TO_CART_LABEL                       => self::ATTR_TEXT,
        self::VAR_SHOP_LAYOUT_PAGE_SINGLE                             => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_PRICE_SINGLE_PAGE                         => self::ATTR_TEXT,
        self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE            => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCT_SLIDER_AUTOPLAY                        => self::ATTR_TEXT,
        self::VAR_SHOP_PRODUCT_SLIDER_INTERVAL                        => self::ATTR_TEXT,
        self::VAR_BLOG_SHOW_DATE                                      => self::ATTR_TEXT,
        self::VAR_BLOG_SHOW_CATEGORIES                                => self::ATTR_TEXT,
        self::VAR_BLOG_SHOW_AUTHOR                                    => self::ATTR_TEXT,
        self::VAR_BLOG_SHOW_COMMENTS                                  => self::ATTR_TEXT,
        self::VAR_BLOG_SHOW_SOCIALS                                   => self::ATTR_TEXT,
        self::VAR_BLOG_TYPE                                           => self::ATTR_TEXT,
        self::VAR_BLOG_CATS_EXCLUDE                                   => self::ATTR_TEXT,
        self::VAR_BLOG_CATS_EXCLUDE_SIDEBAR                           => self::ATTR_TEXT,
        self::VAR_BLOG_READ_MORE_TEXT                                 => self::ATTR_TEXT,
        self::VAR_PORTFOLIO_LAYOUT_PAGE                               => self::ATTR_TEXT,
        self::VAR_PORTFOLIO_SHOW_FILTERS                              => self::ATTR_TEXT,
        self::VAR_PORTFOLIO_THUMBNAIL_CLICK                           => self::ATTR_TEXT,
        self::VAR_PORTFOLIO_DETAILS_ICON                              => self::ATTR_TEXT,
        self::VAR_PORTFOLIO_SKIN_LIGHTBOX                             => self::ATTR_TEXT,
        self::VAR_GALLERY_SHOW_FILTERS                                => self::ATTR_TEXT,
        self::VAR_GALLERY_DETAILS_ICON                                => self::ATTR_TEXT,
      ),
      self::ATTR_BLOCK_SIDEBAR_SETTINGS                               => array(
        self::ATTR_SIDEBAR_BUTTON_ADD                                 => self::ATTR_SUBMIT,
        self::ATTR_SIDEBAR_BUTTON_DELETE                              => self::ATTR_SUBMIT,
      ),
      self::ATTR_BLOCK_SLIDERS_SETTINGS                               => array(
        self::VAR_SLIDER_CHOOSEN                                      => self::ATTR_TEXT,
        self::VAR_SLIDER_TYPE                                         => self::ATTR_TEXT,
        self::VAR_SLIDER_RESPONSIVE                                   => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_EFFECT                               => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_MORE_TEXT                            => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_EASING                               => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_SHOW_MORE_TEXT                       => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_SLIDES                               => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_SPEED                                => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_TIMEOUT                              => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_CAPTION_POSITION                     => self::ATTR_TEXT,
        self::VAR_SLIDER_ELEGANT_CAPTION_SPEED                        => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_EFFECT                            => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_SPEED                             => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_TIMEOUT                           => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_SHOW_MORE_TEXT                    => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_MORE_TEXT                         => self::ATTR_TEXT,
        self::VAR_SLIDER_THUMBNAILS_SLIDES                            => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_EASING                                 => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_SHOW_MORE_TEXT                         => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_MORE_TEXT                              => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_SLIDES                                 => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_EFFECT                                 => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_SPEED                                  => self::ATTR_TEXT,
        self::VAR_SLIDER_CYCLE_TIMEOUT                                => self::ATTR_TEXT,
        self::VAR_SLIDER_LAYERS_CHOOSE                                => self::ATTR_TEXT,
        self::VAR_LAYERSLIDER_SLIDES                                  => self::ATTR_TEXT,
        self::VAR_SLIDER_MINILAYERS_CHOOSE                            => self::ATTR_TEXT,
        self::VAR_SLIDER_MINILAYERS_STATIC_TITLE                      => self::ATTR_TEXT,
        self::VAR_SLIDER_MINILAYERS_STATIC_TEXT                       => self::ATTR_TEXT,
        self::VAR_SLIDER_MINILAYERS_STATIC_SHORT_TEXT                 => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_PAUSE                                   => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_SHOW_MORE_TEXT                          => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_MORE_TEXT                               => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_SLIDES                                  => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_SPEED                                   => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_EFFECT                                  => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_STATIC_TITLE                            => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_TEXT                                    => self::ATTR_TEXT,
        self::VAR_SLIDER_NIVO_STATIC_SHORT_TEXT                       => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_WIDTH                              => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_HEIGHT                             => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_THEME                              => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_INDICATOR                          => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_INDICATOR                 => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_NAVIGATION                         => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_NAVIGATION                => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_ENABLE_SLIDESHOW                   => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_PAUSE_ON_MOUSEOVER                 => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_CONTINUOUS                         => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_TIMEBAR                            => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_INFINITE_LOOP                      => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_AUTOSTART                          => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_INTERVAL                           => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_VERTICAL_BLOCKS                    => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_HORIZONTAL_BLOCKS                  => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_USE_PRESET                         => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_PRESET                             => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_SPEED                              => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_DELAY_BLOCKS                       => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_TRANSITION                         => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_VARIATION                          => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_PATTERN                            => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_DIRECTION                          => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_SHOW_MORE_TEXT                     => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_MORE_TEXT                          => self::ATTR_TEXT,
        self::VAR_SLIDER_UNOSLIDER_SLIDES                             => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_HEIGHT                               => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_AUTOPLAY                             => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_ANIMATION                            => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_SPEED                                => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_TIMEOUT                              => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_SHOW_MORE_TEXT                       => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_MORE_TEXT                            => self::ATTR_TEXT,
        self::VAR_SLIDER_ELASTIC_SLIDES                               => self::ATTR_TEXT,
        self::ATTR_SLIDERS_BUTTON_CONFIG                              => self::ATTR_SUBMIT,
        self::ATTR_SLIDERS_BUTTON_EDIT_SLIDES                         => self::ATTR_SUBMIT,
        self::ATTR_SLIDERS_BUTTON_DELETE_SLIDE                        => self::ATTR_SUBMIT,
      ),
      self::ATTR_BLOCK_TYPOGRAPHY_SETTINGS                            => array(
        self::VAR_FONT_LOGO                                           => self::ATTR_TEXT,
        self::VAR_FONT_LOGO_TYPE                                      => self::ATTR_TEXT,
        self::VAR_FONT_DESCRIPTION                                    => self::ATTR_TEXT,
        self::VAR_FONT_DESCRIPTION_TYPE                               => self::ATTR_TEXT,
        self::VAR_FONT_NAVIGATION                                     => self::ATTR_TEXT,
        self::VAR_FONT_NAVIGATION_TYPE                                => self::ATTR_TEXT,
        self::VAR_FONT_P                                              => self::ATTR_TEXT,
        self::VAR_FONT_P_TYPE                                         => self::ATTR_TEXT,
        self::VAR_FONT_H1                                             => self::ATTR_TEXT,
        self::VAR_FONT_H1_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H2                                             => self::ATTR_TEXT,
        self::VAR_FONT_H2_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H3                                             => self::ATTR_TEXT,
        self::VAR_FONT_H3_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H4                                             => self::ATTR_TEXT,
        self::VAR_FONT_H4_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H5                                             => self::ATTR_TEXT,
        self::VAR_FONT_H5_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H6                                             => self::ATTR_TEXT,
        self::VAR_FONT_H6_TYPE                                        => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_TITLE                                     => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_TITLE_TYPE                                => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_TITLE_BRACKETS                            => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_TITLE_BRACKETS_TYPE                       => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_CONTENT                                   => self::ATTR_TEXT,
        self::VAR_FONT_NIVO_CONTENT_TYPE                              => self::ATTR_TEXT,
        self::VAR_FONT_SLOGAN                                         => self::ATTR_TEXT,
        self::VAR_FONT_SLOGAN_TYPE                                    => self::ATTR_TEXT,
        self::VAR_FONT_SUBSLOGAN                                      => self::ATTR_TEXT,
        self::VAR_FONT_SUBSLOGAN_TYPE                                 => self::ATTR_TEXT,
        self::VAR_FONT_SIDEBARFOOTER                                  => self::ATTR_TEXT,
        self::VAR_FONT_SIDEBARFOOTER_TYPE                             => self::ATTR_TEXT,
        self::VAR_FONT_NAME_TESTIMONIAL                               => self::ATTR_TEXT,
        self::VAR_FONT_NAME_TESTIMONIAL_TYPE                          => self::ATTR_TEXT,
        self::VAR_FONT_SPECIAL_FONT                                   => self::ATTR_TEXT,
        self::VAR_FONT_SPECIAL_FONT_TYPE                              => self::ATTR_TEXT,
        self::VAR_FONT_NAV_SIZE                                       => self::ATTR_TEXT,
        self::VAR_FONT_TEXT_SIZE                                      => self::ATTR_TEXT,
        self::VAR_FONT_H1_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H2_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H3_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H4_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H5_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_H6_SIZE                                        => self::ATTR_TEXT,
        self::VAR_FONT_SLOGAN_SIZE                                    => self::ATTR_TEXT,
        self::VAR_FONT_SUBSLOGAN_SIZE                                 => self::ATTR_TEXT,
        self::VAR_FONT_BLOG_TITLE_SIZE                                => self::ATTR_TEXT,
        self::VAR_FONT_META_SIZE                                      => self::ATTR_TEXT,
      ),
      self::ATTR_BLOCK_EXPORTIMPORT_SETTINGS                          => array(
        self::ATTR_EXPORTIMPORT_BUTTON_EXPORT                         => self::ATTR_SUBMIT,
        self::ATTR_EXPORTIMPORT_BUTTON_IMPORT                         => self::ATTR_SUBMIT,
        self::ATTR_EXPORTIMPORT_BUTTON_IMPORT_PANEL                   => self::ATTR_SUBMIT,
        self::ATTR_EXPORTIMPORT_BUTTON_EXPORT_PANEL                   => self::ATTR_SUBMIT,
        self::ATTR_EXPORTIMPORT_BUTTON_APPLY_PANEL                    => self::ATTR_SUBMIT,
        self::ATTR_EXPORTIMPORT_BUTTON_DELETE_PANEL                   => self::ATTR_SUBMIT,
        self::ATTR_SHORTCODES_BUTTON_ADD                              => self::ATTR_SUBMIT,
      ),
		),
		self::OPT_OPTION_FIELD_LABELS                           => array(
      self::VAR_BODY_BG_COLOR                                       => 'Body bg Color',
      self::VAR_BODY_BG_IMAGE                                       => 'Body bg Image',
      self::VAR_BODY_BG_TYPE                                        => 'Body Background',
      self::VAR_BODY_BG_IMAGE_CUSTOM                                => 'Body bg Image Custom',
      self::VAR_BODY_BG_IMAGE_CUSTOM_POSITION                       => 'Body bg Image Position',
      self::VAR_BODY_BG_IMAGE_CUSTOM_REPEATE                        => 'Body bg Image Repeat',
      self::VAR_BODY_BG_IMAGE_CUSTOM_ATTACHMENT                     => 'Body bg Image Attachment',
      self::VAR_COLORS_TOPBAR_BG                                    => "Background",
      self::VAR_COLORS_TOPBAR_TEXT                                  => "Text color",
      self::VAR_COLORS_TOPBAR_LINKS                                 => "Links color",
      self::VAR_COLORS_TOPBAR_LINKS_HOVER                           => "Links color (hover)",
      self::VAR_COLORS_LOGO_COLOR                                   => "Logo color",
      self::VAR_COLORS_LOGO_DESCRIPTION_COLOR                       => "Logo description",
      self::VAR_COLORS_NAV_COLOR                                    => "List Items color",
      self::VAR_COLORS_NAV_COLOR_HOVER                              => "List Items color (hover effect)",
      self::VAR_COLORS_NAV_COLOR_ACTIVE                             => "List Items color (active effect)",
      self::VAR_COLORS_SUBNAV_BG_COLOR                              => "Submenu background color",
      self::VAR_COLORS_SUBNAV_BORDER_COLOR                          => "Submenu border color",
      self::VAR_COLORS_SUBNAV_COLOR                                 => "Submenu list items color",
      self::VAR_COLORS_SUBNAV_COLOR_HOVER                           => "Submenu list items color (hover effect)",
      self::VAR_COLORS_H1                                           => "Heading 1",
      self::VAR_COLORS_H2                                           => "Heading 2",
      self::VAR_COLORS_H3                                           => "Heading 3",
      self::VAR_COLORS_H4                                           => "Heading 4",
      self::VAR_COLORS_H5                                           => "Heading 5",
      self::VAR_COLORS_H6                                           => "Heading 6",
      self::VAR_COLORS_H_HIGHLIGHTES                                => "Heading highlightes",
      self::VAR_COLORS_SIDEBAR_FOOTER_TITLES                        => "Sidebar & Footer titles",
      self::VAR_COLORS_SLOGAN                                       => "Slogan",
      self::VAR_COLORS_SUBSLOGAN                                    => "Subslogan",
      self::VAR_COLORS_P                                            => "Paragraphs",
      self::VAR_COLORS_A                                            => "Links",
      self::VAR_COLORS_A_HOVER                                      => "Links (hover effect)",
      self::VAR_COLORS_SIDEBAR_A                                    => "Sidebar Links",
      self::VAR_COLORS_SIDEBAR_A_HOVER                              => "Sidebar Links (hover effect)",
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_TEXT                    => "On sale text color",
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_BG                      => "On sale background color",
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_BG             => "Label products item background",
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_TEXT           => "Label products item text",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_BG         => "Button add to cart background",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_BG             => "Button details background",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT       => "Button add to cart text color",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT           => "Button details text color",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_HOVER      => "Button add to cart background hover",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_HOVER          => "Button details background hover",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT_HOVER => "Button add to cart text color hover",
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT_HOVER     => "Button details text color hover",
      self::VAR_COLORS_STORE_BUTTONS_BG                             => "General button background",
      self::VAR_COLORS_STORE_BUTTONS_COLOR                          => "General button text color",
      self::VAR_COLORS_STORE_BUTTONS_BORDER                         => "General button border color",
      self::VAR_COLORS_STORE_BUTTONS_BG_HOVER                       => "General button background (hover effect)",
      self::VAR_COLORS_STORE_BUTTONS_COLOR_HOVER                    => "General button text color (hover effect)",
      self::VAR_COLORS_STORE_BUTTONS_BORDER_HOVER                   => "General button border color (hover effect)",
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG                         => "General alternative button background",
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR                      => "General alternative button text color",
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER                     => "General alternative button border color",
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG_HOVER                   => "General alternative button background (hover effect)",
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR_HOVER                => "General alternative button text color (hover effect)",
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER_HOVER               => "General alternative button border color (hover effect)",
      self::VAR_COLORS_STORE_SINGLE_PRICE_CARD_BG                   => "Price background color",
      self::VAR_COLORS_STORE_SINGLE_PRICE_CART_TEXT                 => "Price text color",
      self::VAR_COLORS_BLOG_TITLE                                   => "Blog title",
      self::VAR_COLORS_BLOG_TITLE_HOVER                             => "Blog title (hover effect)",
      self::VAR_COLORS_FOOTER_BACKGROUND                            => 'Footer section background color',
      self::VAR_COLORS_FOOTER_INNER_BACKGROUND                      => 'Footer section content background color',
      self::VAR_COLORS_FOOTER_INNER_BORDER                          => 'Footer section border top',
      self::VAR_COLORS_FOOTER_COLOR_TITLES                          => "Color titles",
      self::VAR_COLORS_FOOTER_COLOR_TEXT                            => "Color text",
      self::VAR_COLORS_FOOTER_COLOR_LINKS                           => "Color links",
      self::VAR_COLORS_FOOTER_COLOR_LINKS_HOVER                     => "Color links hover",
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS                    => "Color links menues",
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS_HOVER              => "Color links menues hover",
      self::VAR_COLORS_COPYRIGHT_BACKGROUND                         => 'Copyright section background color',
      self::VAR_COLORS_COPYRIGHT_INNER_BACKGROUND                   => 'Copyright section content background color',
      self::VAR_COLORS_COPYRIGHT_INNER_BORDER                       => 'Copyright section border top',
      self::VAR_COLORS_COPYRIGHT_TEXT_COLOR                         => "Text color",
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR                        => "Links color",
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR_HOVER                  => "Links color hover",
      self::ATTR_CONTACT_FORM_BUTTON_ADD                            => 'Add Form',
      self::ATTR_CONTACT_FORM_BUTTON_ADD_FIELD                      => 'Add Field',
      self::ATTR_CONTACT_FORM_BUTTON_EDIT_FIELD                     => 'Edit Field',
      self::ATTR_CONTACT_FORM_BUTTON_SAVE_FIELD                     => 'Save Field',
      self::ATTR_CONTACT_FORM_BUTTON_DELETE_FIELD                   => 'Delete Field',
      self::ATTR_CONTACT_FORM_BUTTON_ARRAY_UP                       => 'Array Up',
      self::ATTR_CONTACT_FORM_BUTTON_ARRAY_DOWN                     => 'Array Down',
      self::ATTR_CONTACT_FORM_BUTTON_CREATE                         => 'Add example form',
      self::ATTR_CONTACT_FORM_BUTTON_SAVE_CONFIG                    => 'Save Configure',
      self::ATTR_CONTACT_FORM_BUTTON_CONFIG                         => 'Configure',
      self::ATTR_CONTACT_FORM_BUTTON_DELETE                         => 'Delete Form',
      self::ATTR_FEATURES_BUTTON_ADD                                => 'Add Features',
      self::ATTR_FEATURES_BUTTON_DELETE                             => 'Delete Features',
      self::VAR_SLIDER_FLASH_PIECES                                 => 'Pieces',
      self::VAR_SLIDER_FLASH_TIME                                   => 'Time',
      self::VAR_SLIDER_FLASH_TRANSITION                             => 'Transition',
      self::VAR_SLIDER_FLASH_DEPTH_OFFSET                           => 'Depth Offset',
      self::VAR_SLIDER_FLASH_CUBE_DISTANCE                          => 'Cube Distance',
      self::VAR_SLIDER_FLASH_LOADER_COLOR                           => 'Loader Color',
      self::VAR_SLIDER_FLASH_INNER_SIDE_COLOR                       => 'Inner Side Color',
      self::VAR_SLIDER_FLASH_AUTOPLAY                               => 'Autoplay',
      self::VAR_SLIDER_FLASH_SIDE_SHADOW_ALPHA                      => 'Side Shadow Alpha',
      self::VAR_SLIDER_FLASH_DROP_SHADOW_ALPHA                      => 'Drop Shadow Alpha',
      self::VAR_SLIDER_FLASH_DROP_SHADOW_DISTANCE                   => 'Drop Shadow Distance',
      self::VAR_SLIDER_FLASH_DROP_SHADOW_SCALE                      => 'Drop Shadow Scale',
      self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_X                     => 'Drop Shadow Blur X',
      self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_Y                     => 'Drop Shadow Blur Y',
      self::VAR_SLIDER_FLASH_MENU_DISTANCE_X                        => 'Menu Distance X',
      self::VAR_SLIDER_FLASH_MENU_DISTANCE_Y                        => 'Menu Distance Y',
      self::VAR_SLIDER_FLASH_MENU_COLOR_1                           => 'Menu Color Inactive Item',
      self::VAR_SLIDER_FLASH_MENU_COLOR_2                           => 'Menu Color Active Item',
      self::VAR_SLIDER_FLASH_MENU_COLOR_3                           => 'Menu Color Inner Circle od Active Item',
      self::VAR_SLIDER_FLASH_CONTROL_SIZE                           => 'Control Size',
      self::VAR_SLIDER_FLASH_CONTROL_DISTANCE                       => 'Control Distance',
      self::VAR_SLIDER_FLASH_CONTROL_COLOR_1                        => 'Bg Color',
      self::VAR_SLIDER_FLASH_CONTROL_COLOR_2                        => 'Font Color',
      self::VAR_SLIDER_FLASH_CONTROL_ALPHA                          => 'Control Alpha',
      self::VAR_SLIDER_FLASH_CONTROL_ALPHA_OVER                     => 'Control Alpha Hover status',
      self::VAR_SLIDER_FLASH_CONTROLS_X                             => 'Control X',
      self::VAR_SLIDER_FLASH_CONTROLS_Y                             => 'Control Y',
      self::VAR_SLIDER_FLASH_CONTROLS_ALIGN                         => 'Controls Align',
      self::VAR_SLIDER_FLASH_TOOLTIP_HEIGHT                         => 'Tooltip Height',
      self::VAR_SLIDER_FLASH_TOOLTIP_COLOR                          => 'Tooltip Color',
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_Y                         => 'Tooltip Text Y',
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_COLOR                     => 'Tooltip Text Color',
      self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_LEFT                    => 'Tooltip Margin Left',
      self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_RIGHT                   => 'Tooltip Margin Right',
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_SHARPNESS                 => 'Tooltip Text Sharpness',
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_THICKNESS                 => 'Tooltip Text Thickness',
      self::VAR_SLIDER_FLASH_INFO_WIDTH                             => 'Info Width',
      self::VAR_SLIDER_FLASH_INFO_BACKGROUND                        => 'Info Background',
      self::VAR_SLIDER_FLASH_INFO_BACKGROUND_ALPHA                  => 'Info Background Alpha',
      self::VAR_SLIDER_FLASH_INFO_MARGIN                            => 'Info Margin',
      self::VAR_SLIDER_FLASH_INFO_TEXT_SHARPNESS                    => 'Info Text Sharpness',
      self::VAR_SLIDER_FLASH_INFO_TEXT_THICKNESS                    => 'Info Text Thickness',
      self::VAR_RESPONSIVE                                          => 'Activate responsive',
      self::VAR_THEME_LAYOUT                                        => 'Layout theme',
      self::VAR_FAVICON                                             => 'Custom Favicon',
      self::VAR_CUSTOM_STYLE                                        => 'Custom Style',
      self::VAR_CUSTOM_JS                                           => 'Custom Javascript',
      self::VAR_DATE_FORMAT                                         => "Date Format",
      self::VAR_USE_LOGO                                            => 'Custom Logo',
      self::VAR_LOGO                                                => 'Logo URL',
      self::VAR_LOGO_USE_DSCRIPTION                                 => 'Logo Description',
      self::VAR_SHOW_BAR                                            => 'Show Topbar',
      self::VAR_TOPBAR_CONTENT                                      => 'Top bar content',
      self::VAR_TOPBAR_TEXT                                         => 'Topbar text',
      self::VAR_TOPBAR_TWITTER_USERNAME                             => 'Twitter username',
      self::VAR_TOPBAR_TWITTER_ITEMS                                => 'Twitter items',
      self::VAR_TOPBAR_TWITTER_INTERVAL                             => 'Interval between slides',
      self::VAR_TOPBAR_LOGIN                                        => 'Hide login/logout',
      self::VAR_TOPBAR_REGISTER                                     => 'Hide register',
      self::VAR_SHOW_TOPBAR_CART_RIBBON                             => 'Show ribbon cart',
      self::VAR_TOPBAR_CART_RIBBON                                  =>'Topbar cart ribbon',
      self::VAR_HEADER_BG_COLOR                                     => 'Header Color',
      self::VAR_HEADER_BG_TYPE                                      => 'Header Background',
      self::VAR_HEADER_BG_IMAGE_CUSTOM                              => 'Header Image Custom',
      self::VAR_HEADER_BG_IMAGE_CUSTOM_REPEAT                       => 'Header Image Repeat',
      self::VAR_HEADER_BG_IMAGE_CUSTOM_POSITION                     => 'Header Image Position',
      self::VAR_HEADER_OPACITY                                      => 'Header Opacity',
      self::VAR_NEWSLETTER_FORM_SHOW                                => 'Show',
      self::VAR_NEWSLETTER_FORM_TITLE                               => 'Title',
      self::VAR_NEWSLETTER_FORM_DESCRIPTION                         => 'Description',
      self::VAR_NEWSLETTER_FORM_ACTION                              => 'Action',
      self::VAR_NEWSLETTER_FORM_METHOD                              => 'Method of request',
      self::VAR_NEWSLETTER_FORM_NAME                                => 'Identification name of the "Name" field',
      self::VAR_NEWSLETTER_FORM_EMAIL                               => 'Identification name of the "Email" field',
      self::VAR_NEWSLETTER_FORM_LABEL_NAME                          => 'Label of "Name" field',
      self::VAR_NEWSLETTER_FORM_LABEL_EMAIL                         => 'Label of "Email" field',
      self::VAR_NEWSLETTER_FORM_LABEL_SUBMIT                        => 'Label of "Submit" button',
      self::VAR_NEWSLETTER_FORM_LABEL_HIFFEN_FIELDS                 => 'Hidden fields',
      self::VAR_FOOTER_TYPE                                         => 'Footer Type',
      self::VAR_FOOTER_ROWS                                         => 'Big Footer Widget Areas',
      self::VAR_FOOTER_COLUMNS                                      => 'Number of widgets in each footer Widget Area',
      self::VAR_FOOTER_TEXT_CENTERED                                => 'Footer centered text',
      self::VAR_COPYRIGHT_TEXT_LEFT                                 => 'Footer copyright text Left',
      self::VAR_COPYRIGHT_TEXT_RIGHT                                => 'Footer copyright text Right',
      self::VAR_GA_CODE                                             => 'Google Analytics Code',
      self::VAR_SHOP_PRODUCTS_PER_PAGE                              => 'Number of products to show',
      self::VAR_SHOP_PRODUCTS_STYLE                                 => 'Style for products list',
      self::VAR_SHOP_TITLE_POSITION                                 => 'Title position',
      self::VAR_SHOP_BORDER_THUMBNAIL                               => 'Border thumbnail',
      self::VAR_SHOP_SHADOW_THUMBNAIL                               => 'Shadow thumbnail',
      self::VAR_SHOP_SHOW_NAME                                      => 'Show name',
      self::VAR_SHOP_SHOW_PRICE                                     => 'Show price',
      self::VAR_SHOP_SHOW_BUTTON_DETAILS                            => 'Show button details',
      self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART                        => 'Show button add to cart',
      self::VAR_SHOP_BUTTON_DETAILS_LABEL                           => 'Label button details',
      self::VAR_SHOP_PRODUCTS_RIBBON                                => 'Custom for add to cart ribbon',
      self::VAR_SHOP_PRODUCTS_RIBBON_ADDED                          => 'Custom for add to cart ribbon, when added to cart',
      self::VAR_SHOP_BUTTON_ADD_TO_CART_LABEL                       => 'Label button add to cart',
      self::VAR_SHOP_LAYOUT_PAGE_SINGLE                             => 'Show the shop sidebar',
      self::VAR_SHOP_SHOW_PRICE_SINGLE_PAGE                         => 'Show price',
      self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE            => 'Show button add to cart',
      self::VAR_SHOP_PRODUCT_SLIDER_AUTOPLAY                        => 'Active autoplay',
      self::VAR_SHOP_PRODUCT_SLIDER_INTERVAL                        => 'Interval autoplay (s)',
      self::VAR_BLOG_SHOW_DATE                                      => 'Show post date',
      self::VAR_BLOG_SHOW_CATEGORIES                                => 'Show post categories',
      self::VAR_BLOG_SHOW_AUTHOR                                    => 'Show post author',
      self::VAR_BLOG_SHOW_COMMENTS                                  => 'Show post number of comments',
      self::VAR_BLOG_SHOW_SOCIALS                                   => 'Show post social buttons',
      self::VAR_BLOG_TYPE                                           => 'Blog Type',
      self::VAR_BLOG_CATS_EXCLUDE                                   => 'Blog page',
      self::VAR_BLOG_CATS_EXCLUDE_SIDEBAR                           => 'List cat. sidebar',
      self::VAR_BLOG_READ_MORE_TEXT                                 => 'Read more text',
      self::VAR_PORTFOLIO_LAYOUT_PAGE                               => 'Default layout page',
      self::VAR_PORTFOLIO_SHOW_FILTERS                              => 'Show filters',
      self::VAR_PORTFOLIO_THUMBNAIL_CLICK                           => 'Thumbnail click',
      self::VAR_PORTFOLIO_DETAILS_ICON                              => 'Link to single page in Portfolio Filterable',
      self::VAR_PORTFOLIO_SKIN_LIGHTBOX                             => 'Lightbox Skin',
      self::VAR_GALLERY_SHOW_FILTERS                                => 'Show filters',
      self::VAR_GALLERY_DETAILS_ICON                                => 'Link to item single page',
      self::ATTR_SIDEBAR_BUTTON_ADD                                 => 'Add Sidebar',
      self::ATTR_SIDEBAR_BUTTON_DELETE                              => 'Delete Sidebar',
      self::VAR_SLIDER_CHOOSEN                                      => 'Configure slider.',
      self::VAR_SLIDER_TYPE                                         => 'Default Header image type',
      self::VAR_SLIDER_RESPONSIVE                                   => 'Responsive Behavior',
      self::VAR_SLIDER_ELEGANT_EFFECT                               => 'Effect',
      self::VAR_SLIDER_ELEGANT_MORE_TEXT                            => 'More text',
      self::VAR_SLIDER_ELEGANT_EASING                               => 'Easing',
      self::VAR_SLIDER_ELEGANT_SHOW_MORE_TEXT                       => 'Has more text',
      self::VAR_SLIDER_ELEGANT_SPEED                                => 'Speed (s)',
      self::VAR_SLIDER_ELEGANT_TIMEOUT                              => 'Timeout (s)',
      self::VAR_SLIDER_ELEGANT_CAPTION_POSITION                     => 'Caption position',
      self::VAR_SLIDER_ELEGANT_CAPTION_SPEED                        => 'Caption Speed (s)',
      self::VAR_SLIDER_THUMBNAILS_EFFECT                            => 'Effect',
      self::VAR_SLIDER_THUMBNAILS_SPEED                             => 'Speed (s)',
      self::VAR_SLIDER_THUMBNAILS_TIMEOUT                           => 'Timeout (s)',
      self::VAR_SLIDER_THUMBNAILS_SHOW_MORE_TEXT                    => 'Has more text',
      self::VAR_SLIDER_THUMBNAILS_MORE_TEXT                         => 'More text',
      self::VAR_SLIDER_CYCLE_EASING                                 => 'Easing',
      self::VAR_SLIDER_CYCLE_SHOW_MORE_TEXT                         => 'Has more text',
      self::VAR_SLIDER_CYCLE_MORE_TEXT                              => 'More text',
      self::VAR_SLIDER_CYCLE_EFFECT                                 => 'Effect',
      self::VAR_SLIDER_CYCLE_SPEED                                  => 'Speed (s)',
      self::VAR_SLIDER_CYCLE_TIMEOUT                                => 'Timeout (s)',
      self::VAR_SLIDER_LAYERS_CHOOSE                                => 'Select the slider',
      self::VAR_SLIDER_MINILAYERS_CHOOSE                            => 'Select the slider',
      self::VAR_SLIDER_MINILAYERS_STATIC_TITLE                      => "Title",
      self::VAR_SLIDER_MINILAYERS_STATIC_TEXT                       => "Text",
      self::VAR_SLIDER_MINILAYERS_STATIC_SHORT_TEXT                 => "Short text",
      self::VAR_SLIDER_NIVO_PAUSE                                   => 'Pause between slides',
      self::VAR_SLIDER_NIVO_SHOW_MORE_TEXT                          => 'Has more text',
      self::VAR_SLIDER_NIVO_MORE_TEXT                               => 'More text',
      self::VAR_SLIDER_NIVO_SPEED                                   => 'Animation speed',
      self::VAR_SLIDER_NIVO_EFFECT                                  => 'Effect',
      self::VAR_SLIDER_NIVO_STATIC_SHORT_TEXT                       => "Short text",
      self::VAR_SLIDER_NIVO_STATIC_TITLE                            => "Title",
      self::VAR_SLIDER_NIVO_TEXT                                    => "Text",
      self::VAR_SLIDER_UNOSLIDER_WIDTH                              => "Width",
      self::VAR_SLIDER_UNOSLIDER_HEIGHT                             => "Height",
      self::VAR_SLIDER_UNOSLIDER_THEME                              => "Theme slider",
      self::VAR_SLIDER_UNOSLIDER_INDICATOR                          => "Indicator",
      self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_INDICATOR                 => "Autohide Indicator",
      self::VAR_SLIDER_UNOSLIDER_NAVIGATION                         => "Navigation",
      self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_NAVIGATION                => "Autohide Navigation",
      self::VAR_SLIDER_UNOSLIDER_ENABLE_SLIDESHOW                   => "Enable Slideshow",
      self::VAR_SLIDER_UNOSLIDER_PAUSE_ON_MOUSEOVER                 => "Pause on mouse over",
      self::VAR_SLIDER_UNOSLIDER_CONTINUOUS                         => "Continuous",
      self::VAR_SLIDER_UNOSLIDER_TIMEBAR                            => "Timebar",
      self::VAR_SLIDER_UNOSLIDER_INFINITE_LOOP                      => "Infinite Loop",
      self::VAR_SLIDER_UNOSLIDER_AUTOSTART                          => "Autostart",
      self::VAR_SLIDER_UNOSLIDER_INTERVAL                           => 'Change interval (s)',
      self::VAR_SLIDER_UNOSLIDER_VERTICAL_BLOCKS                    => 'Vertical blocks',
      self::VAR_SLIDER_UNOSLIDER_HORIZONTAL_BLOCKS                  => 'Horizontal blocks',
      self::VAR_SLIDER_UNOSLIDER_USE_PRESET                         => "Use preset",
      self::VAR_SLIDER_UNOSLIDER_PRESET                             => 'Animation',
      self::VAR_SLIDER_UNOSLIDER_SPEED                              => 'Transition Speed (ms)',
      self::VAR_SLIDER_UNOSLIDER_DELAY_BLOCKS                       => 'Delay between blocks (ms)',
      self::VAR_SLIDER_UNOSLIDER_TRANSITION                         => 'Transition',
      self::VAR_SLIDER_UNOSLIDER_VARIATION                          => 'Variation',
      self::VAR_SLIDER_UNOSLIDER_PATTERN                            => 'Pattern',
      self::VAR_SLIDER_UNOSLIDER_DIRECTION                          => 'Direction',
      self::VAR_SLIDER_UNOSLIDER_SHOW_MORE_TEXT                     => 'Has more text',
      self::VAR_SLIDER_UNOSLIDER_MORE_TEXT                          => 'More text',
      self::VAR_SLIDER_ELASTIC_HEIGHT                               => 'Height of slider',
      self::VAR_SLIDER_ELASTIC_AUTOPLAY                             => 'Autoplay',
      self::VAR_SLIDER_ELASTIC_ANIMATION                            => 'Animation',
      self::VAR_SLIDER_ELASTIC_SPEED                                => 'Speed (s)',
      self::VAR_SLIDER_ELASTIC_TIMEOUT                              => 'Timeout (s)',
      self::VAR_SLIDER_ELASTIC_SHOW_MORE_TEXT                       => 'Has more text',
      self::VAR_SLIDER_ELASTIC_MORE_TEXT                            => 'More text',
      self::ATTR_SLIDERS_BUTTON_CONFIG                              => 'Configure',
      self::ATTR_SLIDERS_BUTTON_EDIT_SLIDES                         => 'Add/Edit slides',
      self::ATTR_SLIDERS_BUTTON_DELETE_SLIDE                        => 'Delete Slide',
      self::VAR_FONT_LOGO                                           => "Logo font",
      self::VAR_FONT_LOGO_TYPE                                      => "Logo font type",
      self::VAR_FONT_DESCRIPTION                                    => "Logo description font",
      self::VAR_FONT_DESCRIPTION_TYPE                               => "Logo description font type",
      self::VAR_FONT_NAVIGATION                                     => "Navigation font",
      self::VAR_FONT_NAVIGATION_TYPE                                => "Navigation font type",
      self::VAR_FONT_P                                              => "Paragraphs font",
      self::VAR_FONT_P_TYPE                                         => "Paragraphs font type",
      self::VAR_FONT_H1                                             => "Heading 1 font",
      self::VAR_FONT_H1_TYPE                                        => "Heading 1 font type",
      self::VAR_FONT_H2                                             => "Heading 2 font",
      self::VAR_FONT_H2_TYPE                                        => "Heading 2 font type",
      self::VAR_FONT_H3                                             => "Heading 3 font",
      self::VAR_FONT_H3_TYPE                                        => "Heading 3 font type",
      self::VAR_FONT_H4                                             => "Heading 4 font",
      self::VAR_FONT_H4_TYPE                                        => "Heading 4 font type",
      self::VAR_FONT_H5                                             => "Heading 5 font",
      self::VAR_FONT_H5_TYPE                                        => "Heading 5 font type",
      self::VAR_FONT_H6                                             => "Heading 6 font",
      self::VAR_FONT_H6_TYPE                                        => "Heading 6 font type",
      self::VAR_FONT_NIVO_TITLE                                     => "Slider Nivo: Title font",
      self::VAR_FONT_NIVO_TITLE_TYPE                                => "Slider Nivo: Title font type",
      self::VAR_FONT_NIVO_TITLE_BRACKETS                            => "Slider Nivo: Title font in brackets",
      self::VAR_FONT_NIVO_TITLE_BRACKETS_TYPE                       => "Slider Nivo: Title font type in brackets",
      self::VAR_FONT_NIVO_CONTENT                                   => "Slider Nivo: Content font",
      self::VAR_FONT_NIVO_CONTENT_TYPE                              => "Slider Nivo: Content font type",
      self::VAR_FONT_SLOGAN                                         => "Slogan font",
      self::VAR_FONT_SLOGAN_TYPE                                    => "Slogan font type",
      self::VAR_FONT_SUBSLOGAN                                      => "Sub Slogan font",
      self::VAR_FONT_SUBSLOGAN_TYPE                                 => "Sub Slogan font type",
      self::VAR_FONT_SIDEBARFOOTER                                  => "Sidebar & Footer titles",
      self::VAR_FONT_SIDEBARFOOTER_TYPE                             => "Sidebar & Footer titles font type",
      self::VAR_FONT_NAME_TESTIMONIAL                               => "Testimonial name",
      self::VAR_FONT_NAME_TESTIMONIAL_TYPE                          => "Testimonial name font type",
      self::VAR_FONT_SPECIAL_FONT                                   => "Special Font",
      self::VAR_FONT_SPECIAL_FONT_TYPE                              => "Special Font type",
      self::VAR_FONT_NAV_SIZE                                       => "Navigation text",
      self::VAR_FONT_TEXT_SIZE                                      => "General text",
      self::VAR_FONT_H1_SIZE                                        => "H1 headline",
      self::VAR_FONT_H2_SIZE                                        => "H2 headline",
      self::VAR_FONT_H3_SIZE                                        => "H3 headline",
      self::VAR_FONT_H4_SIZE                                        => "H4 headline",
      self::VAR_FONT_H5_SIZE                                        => "H5 headline",
      self::VAR_FONT_H6_SIZE                                        => "H6 headline",
      self::VAR_FONT_SLOGAN_SIZE                                    => "Slogan",
      self::VAR_FONT_SUBSLOGAN_SIZE                                 => "Sub Slogan",
      self::VAR_FONT_BLOG_TITLE_SIZE                                => "Blog title",
      self::VAR_FONT_META_SIZE                                      => "Blog meta",
      self::ATTR_EXPORTIMPORT_BUTTON_EXPORT                         => 'Export Theme',
      self::ATTR_EXPORTIMPORT_BUTTON_IMPORT                         => 'Import Theme',
      self::ATTR_EXPORTIMPORT_BUTTON_EXPORT_PANEL                   => 'Save Panel Configuration',
      self::ATTR_EXPORTIMPORT_BUTTON_IMPORT_PANEL                   => 'Import Panel',
      self::ATTR_EXPORTIMPORT_BUTTON_APPLY_PANEL                    => 'Apply Panel',
      self::ATTR_EXPORTIMPORT_BUTTON_DELETE_PANEL                   => 'Delete Panel',
      self::ATTR_SHORTCODES_BUTTON_ADD                              => 'Add Shortcodes',
    ),
		self::OPT_OPTION_STATIC                                 => array( 
		  self::VAR_CONTACT_FORMS, self::VAR_DEFAULT_PORTFOLIOS_PID, self::VAR_FONT_TYPE_OPTION_ID,
      self::VAR_SIDEBARS, self::VAR_LAYERSLIDER_SLIDES, self::VAR_SLIDER_FLASH_SLIDES,
      self::VAR_SLIDER_CYCLE_SLIDES, self::VAR_SLIDER_ELASTIC_SLIDES,
      self::VAR_SLIDER_ELEGANT_SLIDES, self::VAR_SLIDER_NIVO_SLIDES,
      self::VAR_SLIDER_THUMBNAILS_SLIDES, self::VAR_SLIDER_UNOSLIDER_SLIDES,
      self::VAR_PANEL_CONFIGS, self::VAR_THUMB_PORTFOLIO_SLIDER, self::VAR_FEATURES_TAB,
      self::VAR_THUMB_PORTFOLIO_3COLS, self::VAR_THUMB_SLIDER_ELASTIC, self::VAR_THUMB_TESTIMONIAL,
      self::VAR_THUMB_RECENTPOSTS, self::VAR_BLOG_BIG, self::VAR_BLOG_ELEGANT, self::VAR_THUMB_MORE_PROJECTS,
      self::VAR_THUMB_GALLERY, self::VAR_THUMB_PORTFOLIO_BIG, self::VAR_FEATURES_TAB_ICON,
      self::VAR_NIVO_SLIDER, self::VAR_BLOG_SMALL, self::VAR_NOTIFIER_CACHE, self::VAR_NOTIFIER_CACHE_LAST_UPDATE


    ),
		self::OPT_OPTION_DEFAULTS                               => array(
      self::VAR_DEFAULT_PORTFOLIOS_PID                              => NULL,
      self::VAR_BODY_BG_COLOR                                       => '#fff',
      self::VAR_BODY_BG_IMAGE                                       => 'images/backgrounds/backgrounds/019.jpg',
      self::VAR_BODY_BG_TYPE                                        => self::ATTR_IMAGE,
      self::VAR_BODY_BG_IMAGE_CUSTOM                                => '',
      self::VAR_BODY_BG_IMAGE_CUSTOM_POSITION                       => self::ATTR_TOP_CENTER,
      self::VAR_BODY_BG_IMAGE_CUSTOM_REPEATE                        => self::ATTR_REPEATE,
      self::VAR_BODY_BG_IMAGE_CUSTOM_ATTACHMENT                     => self::ATTR_FIXED,
      self::VAR_COLORS_TOPBAR_BG                                    => '#333333',
      self::VAR_COLORS_TOPBAR_TEXT                                  => '#CCCACA',
      self::VAR_COLORS_TOPBAR_LINKS                                 => '#ffffff',
      self::VAR_COLORS_TOPBAR_LINKS_HOVER                           => '#ffffff',
      self::VAR_COLORS_LOGO_COLOR                                   => '#1e1e1e',
      self::VAR_COLORS_LOGO_DESCRIPTION_COLOR                       => '#545252',
      self::VAR_COLORS_NAV_COLOR                                    => '#010101',
      self::VAR_COLORS_NAV_COLOR_HOVER                              => '#da7906',
      self::VAR_COLORS_NAV_COLOR_ACTIVE                             => '#da7906',
      self::VAR_COLORS_SUBNAV_BG_COLOR                              => '#fff',
      self::VAR_COLORS_SUBNAV_BORDER_COLOR                          => '#CFCFCF',
      self::VAR_COLORS_SUBNAV_COLOR                                 => '#010101',
      self::VAR_COLORS_SUBNAV_COLOR_HOVER                           => '#da7906',
      self::VAR_COLORS_H1                                           => '#030303',
      self::VAR_COLORS_H2                                           => '#030303',
      self::VAR_COLORS_H3                                           => '#030303',
      self::VAR_COLORS_H4                                           => '#030303',
      self::VAR_COLORS_H5                                           => '#030303',
      self::VAR_COLORS_H6                                           => '#030303',
      self::VAR_COLORS_H_HIGHLIGHTES                                => '#030303',
      self::VAR_COLORS_SIDEBAR_FOOTER_TITLES                        => '#030303',
      self::VAR_COLORS_SLOGAN                                       => '#030303',
      self::VAR_COLORS_SUBSLOGAN                                    => '#c86f06',
      self::VAR_COLORS_P                                            => '#545252',
      self::VAR_COLORS_A                                            => '#AB5705',
      self::VAR_COLORS_A_HOVER                                      => '#1f1f1f',
      self::VAR_COLORS_SIDEBAR_A                                    => '#1f1f1f',
      self::VAR_COLORS_SIDEBAR_A_HOVER                              => '#AB5705',
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_TEXT                    => '#fff',
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_BG                      => '#b9b701',
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_BG             => '#000',
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_TEXT           => '#fff',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_BG         => '#6B90A9',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_BG             => '#535353',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT       => '#fff',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT           => '#fff',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_HOVER      => '#7aa5c2',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_HOVER          => '#6b6b6b',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT_HOVER => '#fff',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT_HOVER     => '#fff',
      self::VAR_COLORS_STORE_BUTTONS_BG                             => '#f5f5f5',
      self::VAR_COLORS_STORE_BUTTONS_COLOR                          => '#676767',
      self::VAR_COLORS_STORE_BUTTONS_BORDER                         => '#969696',
      self::VAR_COLORS_STORE_BUTTONS_BG_HOVER                       => '#fafafa',
      self::VAR_COLORS_STORE_BUTTONS_COLOR_HOVER                    => '#676767',
      self::VAR_COLORS_STORE_BUTTONS_BORDER_HOVER                   => '#969696',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG                         => '#7FA92D',
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR                      => '#fff',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER                     => '#7FA92D',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG_HOVER                   => '#8ab830',
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR_HOVER                => '#fff',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER_HOVER               => '#7FA92D',
      self::VAR_COLORS_STORE_SINGLE_PRICE_CARD_BG                   => '#7FA92D',
      self::VAR_COLORS_STORE_SINGLE_PRICE_CART_TEXT                 => '#fff',
      self::VAR_COLORS_BLOG_TITLE                                   => '#2B2828',
      self::VAR_COLORS_BLOG_TITLE_HOVER                             => '#000000',
      self::VAR_COLORS_FOOTER_BACKGROUND                            => '#fff',
      self::VAR_COLORS_FOOTER_INNER_BACKGROUND                      => '#fff',
      self::VAR_COLORS_FOOTER_INNER_BORDER                          => '#cfcfcf',
      self::VAR_COLORS_FOOTER_COLOR_TITLES                          => '#232221',
      self::VAR_COLORS_FOOTER_COLOR_TEXT                            => '#545252',
      self::VAR_COLORS_FOOTER_COLOR_LINKS                           => '#9A6614',
      self::VAR_COLORS_FOOTER_COLOR_LINKS_HOVER                     => '#6c6c6c',
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS                    => '#545252',
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS_HOVER              => '#9A6614',
      self::VAR_COLORS_COPYRIGHT_BACKGROUND                         => '#fff',
      self::VAR_COLORS_COPYRIGHT_INNER_BACKGROUND                   => '#fff',
      self::VAR_COLORS_COPYRIGHT_INNER_BORDER                       => '#cfcfcf',
      self::VAR_COLORS_COPYRIGHT_TEXT_COLOR                         => '#545252',
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR                        => '#9A6614',
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR_HOVER                  => '#6c6c6c',
      self::VAR_CONTACT_FORM_CHOOSEN                                => '',
      self::ATTR_CONTACT_FORM_BUTTON_ADD                            => array( self::ATTR_THIS, 'button_contact_form_add'),
      self::ATTR_CONTACT_FORM_BUTTON_ADD_FIELD                      => array( self::ATTR_THIS, 'button_contact_form_add_field'),
      self::ATTR_CONTACT_FORM_BUTTON_EDIT_FIELD                     => array( self::ATTR_THIS, 'button_contact_form_edit_field'),
      self::ATTR_CONTACT_FORM_BUTTON_DELETE_FIELD                   => array( self::ATTR_THIS, 'button_contact_form_delete_field'),
      self::ATTR_CONTACT_FORM_BUTTON_SAVE_FIELD                     => array( self::ATTR_THIS, 'button_contact_form_save_field'),
      self::ATTR_CONTACT_FORM_BUTTON_ARRAY_UP                       => array( self::ATTR_THIS, 'button_contact_form_array_up'),
      self::ATTR_CONTACT_FORM_BUTTON_ARRAY_DOWN                     => array( self::ATTR_THIS, 'button_contact_form_array_down'),
      self::ATTR_CONTACT_FORM_BUTTON_CREATE                         => array( self::ATTR_THIS, 'button_contact_form_create'),
      self::ATTR_CONTACT_FORM_BUTTON_SAVE_CONFIG                    => array( self::ATTR_THIS, 'button_contact_form_save_config'),
      self::ATTR_CONTACT_FORM_BUTTON_CONFIG                         => array( self::ATTR_THIS, 'button_contact_form_config'),
      self::ATTR_CONTACT_FORM_BUTTON_DELETE                         => array( self::ATTR_THIS, 'button_contact_form_delete'),
      self::ATTR_FEATURES_BUTTON_ADD                                => array( self::ATTR_THIS, 'button_features_add'),
      self::ATTR_FEATURES_BUTTON_DELETE                             => array( self::ATTR_THIS, 'button_features_delete'),
      self::VAR_SLIDER_FLASH_PIECES                                 => 9,
      self::VAR_SLIDER_FLASH_TIME                                   => 1,
      self::VAR_SLIDER_FLASH_TRANSITION                             => self::ATTR_EASINGS_IN_OUT_BACK,
      self::VAR_SLIDER_FLASH_DEPTH_OFFSET                           => 300,
      self::VAR_SLIDER_FLASH_CUBE_DISTANCE                          => 30,
      self::VAR_SLIDER_FLASH_LOADER_COLOR                           => "#333333",
      self::VAR_SLIDER_FLASH_INNER_SIDE_COLOR                       => "#222222",
      self::VAR_SLIDER_FLASH_AUTOPLAY                               => 4,
      self::VAR_SLIDER_FLASH_SIDE_SHADOW_ALPHA                      => 0.8,
      self::VAR_SLIDER_FLASH_DROP_SHADOW_ALPHA                      => 0.7,
      self::VAR_SLIDER_FLASH_DROP_SHADOW_DISTANCE                   => 25,
      self::VAR_SLIDER_FLASH_DROP_SHADOW_SCALE                      => 0.95,
      self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_X                     => 40,
      self::VAR_SLIDER_FLASH_DROP_SHADOW_BLUR_Y                     => 4,
      self::VAR_SLIDER_FLASH_MENU_DISTANCE_X                        => 20,
      self::VAR_SLIDER_FLASH_MENU_DISTANCE_Y                        => 50,
      self::VAR_SLIDER_FLASH_MENU_COLOR_1                           => "#999999",
      self::VAR_SLIDER_FLASH_MENU_COLOR_2                           => "#333333",
      self::VAR_SLIDER_FLASH_MENU_COLOR_3                           => "#FFFFFF",
      self::VAR_SLIDER_FLASH_CONTROL_SIZE                           => 100,
      self::VAR_SLIDER_FLASH_CONTROL_DISTANCE                       => 20,
      self::VAR_SLIDER_FLASH_CONTROL_COLOR_1                        => "#222222",
      self::VAR_SLIDER_FLASH_CONTROL_COLOR_2                        => "#FFFFFF",
      self::VAR_SLIDER_FLASH_CONTROL_ALPHA                          => 0.8,
      self::VAR_SLIDER_FLASH_CONTROL_ALPHA_OVER                     => 0.95,
      self::VAR_SLIDER_FLASH_CONTROLS_X                             => 480,
      self::VAR_SLIDER_FLASH_CONTROLS_Y                             => 240,
      self::VAR_SLIDER_FLASH_CONTROLS_ALIGN                         => self::ATTR_CENTER,
      self::VAR_SLIDER_FLASH_TOOLTIP_HEIGHT                         => 30,
      self::VAR_SLIDER_FLASH_TOOLTIP_COLOR                          => "#222222",
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_Y                         => 5,
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_COLOR                     => "#FFFFFF",
      self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_LEFT                    => 5,
      self::VAR_SLIDER_FLASH_TOOLTIP_MARGIN_RIGHT                   => 7,
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_SHARPNESS                 => 50,
      self::VAR_SLIDER_FLASH_TOOLTIP_TEXT_THICKNESS                 => -100,
      self::VAR_SLIDER_FLASH_INFO_WIDTH                             => 400,
      self::VAR_SLIDER_FLASH_INFO_BACKGROUND                        => "#FFFFFF",
      self::VAR_SLIDER_FLASH_INFO_BACKGROUND_ALPHA                  => 0.95,
      self::VAR_SLIDER_FLASH_INFO_MARGIN                            => 15,
      self::VAR_SLIDER_FLASH_INFO_TEXT_SHARPNESS                    => 0,
      self::VAR_SLIDER_FLASH_INFO_TEXT_THICKNESS                    => 0,
      self::VAR_RESPONSIVE                                          => 1,
      self::VAR_THEME_LAYOUT                                        => self::ATTR_BOXED,
      self::VAR_FAVICON                                             => '',
      self::VAR_CUSTOM_STYLE                                        => '',
      self::VAR_CUSTOM_JS                                           => '',
      self::VAR_DATE_FORMAT                                         => "F j, Y",
      self::VAR_USE_LOGO                                            => 0,
      self::VAR_LOGO                                                => '',
      self::VAR_LOGO_USE_DSCRIPTION                                 => 1,
      self::VAR_SHOW_BAR                                            => 1,
      self::VAR_TOPBAR_CONTENT                                      => self::ATTR_STATIC,
      self::VAR_TOPBAR_TEXT                                         => '',
      self::VAR_TOPBAR_TWITTER_USERNAME                             => '',
      self::VAR_TOPBAR_TWITTER_ITEMS                                => '5',
      self::VAR_TOPBAR_TWITTER_INTERVAL                             => 5,
      self::VAR_TOPBAR_LOGIN                                        => 0,
      self::VAR_TOPBAR_REGISTER                                     => 1,
      self::VAR_SHOW_TOPBAR_CART_RIBBON                             => 1,
      self::VAR_TOPBAR_CART_RIBBON                                  => '',
      self::VAR_HEADER_BG_COLOR                                     => '',
      self::VAR_HEADER_BG_TYPE                                      => self::ATTR_COLOR_UNIT,
      self::VAR_HEADER_BG_IMAGE_CUSTOM                              => '',
      self::VAR_HEADER_BG_IMAGE_CUSTOM_REPEAT                       => self::ATTR_NO_REPEATE,
      self::VAR_HEADER_BG_IMAGE_CUSTOM_POSITION                     => self::ATTR_BOTTOM_CENTER,
      self::VAR_HEADER_OPACITY                                      => 1,
      self::VAR_NEWSLETTER_FORM_SHOW                                => 1,
      self::VAR_NEWSLETTER_FORM_TITLE                               => 'Stay Updated:',
      self::VAR_NEWSLETTER_FORM_DESCRIPTION                         => 'subscribe our special newsletter',
      self::VAR_NEWSLETTER_FORM_ACTION                              => '',
      self::VAR_NEWSLETTER_FORM_METHOD                              => self::ATTR_POST,
      self::VAR_NEWSLETTER_FORM_NAME                                => 'fullname',
      self::VAR_NEWSLETTER_FORM_EMAIL                               => 'email',
      self::VAR_NEWSLETTER_FORM_LABEL_NAME                          => 'Your name',
      self::VAR_NEWSLETTER_FORM_LABEL_EMAIL                         => 'Your email',
      self::VAR_NEWSLETTER_FORM_LABEL_SUBMIT                        => 'Subscribe',
      self::VAR_NEWSLETTER_FORM_LABEL_HIFFEN_FIELDS                 => '',
      self::VAR_FOOTER_TYPE                                         => self::ATTR_NORMAL,
      self::VAR_FOOTER_ROWS                                         => 1,
      self::VAR_FOOTER_COLUMNS                                      => 4,
      self::VAR_FOOTER_TEXT_CENTERED                                => '',
      self::VAR_COPYRIGHT_TEXT_LEFT                                 => 'Copyright <a href        ="%site_url%"><strong>%name_site%</strong></a> 2012',
      self::VAR_COPYRIGHT_TEXT_RIGHT                                => 'Powered by <a href        ="http://www.yourinspirationweb.com/en"><strong>Your Inspiration Web</strong></a>',
      self::VAR_GA_CODE                                             => '',
      self::VAR_SHOP_PRODUCTS_PER_PAGE                              => 8,
      self::VAR_SHOP_PRODUCTS_STYLE                                 => self::ATTR_RIBBON,
      self::VAR_SHOP_TITLE_POSITION                                 => self::ATTR_INSIDE_THUMB,
      self::VAR_SHOP_BORDER_THUMBNAIL                               => 1,
      self::VAR_SHOP_SHADOW_THUMBNAIL                               => 1,
      self::VAR_SHOP_SHOW_NAME                                      => 1,
      self::VAR_SHOP_SHOW_PRICE                                     => 1,
      self::VAR_SHOP_SHOW_BUTTON_DETAILS                            => 1,
      self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART                        => 1,
      self::VAR_SHOP_BUTTON_DETAILS_LABEL                           => 'Details',
      self::VAR_SHOP_PRODUCTS_RIBBON                                => '',
      self::VAR_SHOP_PRODUCTS_RIBBON_ADDED                          => '',
      self::VAR_SHOP_BUTTON_ADD_TO_CART_LABEL                       => 'Add to cart',
      self::VAR_SHOP_LAYOUT_PAGE_SINGLE                             => self::ATTR_SIDEBAR_NO,
      self::VAR_SHOP_SHOW_PRICE_SINGLE_PAGE                         => 1,
      self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE            => 1,
      self::VAR_SHOP_PRODUCT_SLIDER_AUTOPLAY                        => 1,
      self::VAR_SHOP_PRODUCT_SLIDER_INTERVAL                        => 6,
      self::VAR_BLOG_SHOW_DATE                                      => 1,
      self::VAR_BLOG_SHOW_CATEGORIES                                => 1,
      self::VAR_BLOG_SHOW_AUTHOR                                    => 1,
      self::VAR_BLOG_SHOW_COMMENTS                                  => 1,
      self::VAR_BLOG_SHOW_SOCIALS                                   => 1,
      self::VAR_BLOG_TYPE                                           => self::ATTR_BIG,
      self::VAR_BLOG_CATS_EXCLUDE                                   => array(),
      self::VAR_BLOG_CATS_EXCLUDE_SIDEBAR                           => array(),
      self::VAR_BLOG_READ_MORE_TEXT                                 => '-> Read more',
      self::VAR_PORTFOLIO_LAYOUT_PAGE                               => self::ATTR_SIDEBAR_RIGHT,
      self::VAR_PORTFOLIO_SHOW_FILTERS                              => 1,
      self::VAR_PORTFOLIO_THUMBNAIL_CLICK                           => self::ATTR_NOTHING,
      self::VAR_PORTFOLIO_DETAILS_ICON                              => 1,
      self::VAR_PORTFOLIO_SKIN_LIGHTBOX                             => self::ATTR_PP_DEFAULT,
      self::VAR_GALLERY_SHOW_FILTERS                                => 1,
      self::VAR_GALLERY_DETAILS_ICON                                => 1,
      self::ATTR_SIDEBAR_BUTTON_ADD                                 => array( self::ATTR_THIS, 'button_sidebar_add'),
      self::ATTR_SIDEBAR_BUTTON_DELETE                              => array( self::ATTR_THIS, 'button_sidebar_delete'),
      self::VAR_SLIDER_CHOOSEN                                      => self::ATTR_NIVO,
      self::VAR_SLIDER_TYPE                                         => self::ATTR_NIVO,
      self::VAR_SLIDER_RESPONSIVE                                   => self::ATTR_LEAVE,
      self::VAR_SLIDER_ELEGANT_EFFECT                               => self::ATTR_FADE,
      self::VAR_SLIDER_ELEGANT_MORE_TEXT                            => 'Read more...',
      self::VAR_SLIDER_ELEGANT_EASING                               => FALSE,
      self::VAR_SLIDER_ELEGANT_SHOW_MORE_TEXT                       => 0,
      self::VAR_SLIDER_ELEGANT_SPEED                                => 0.5,
      self::VAR_SLIDER_ELEGANT_TIMEOUT                              => 5,
      self::VAR_SLIDER_ELEGANT_CAPTION_POSITION                     => self::ATTR_RIGHT,
      self::VAR_SLIDER_ELEGANT_CAPTION_SPEED                        => 0.5,
      self::VAR_SLIDER_THUMBNAILS_EFFECT                            => self::ATTR_FADE,
      self::VAR_SLIDER_THUMBNAILS_SPEED                             => 0.5,
      self::VAR_SLIDER_THUMBNAILS_TIMEOUT                           => 5,
      self::VAR_SLIDER_THUMBNAILS_SHOW_MORE_TEXT                    => 0,
      self::VAR_SLIDER_THUMBNAILS_MORE_TEXT                         => 'Read more...',
      self::VAR_SLIDER_CYCLE_EASING                                 => FALSE,
      self::VAR_SLIDER_CYCLE_SHOW_MORE_TEXT                         => 0,
      self::VAR_SLIDER_CYCLE_MORE_TEXT                              => 'Read more...',
      self::VAR_SLIDER_CYCLE_EFFECT                                 => self::ATTR_FADE,
      self::VAR_SLIDER_CYCLE_SPEED                                  => 0.5,
      self::VAR_SLIDER_CYCLE_TIMEOUT                                => 5,
      self::VAR_SLIDER_LAYERS_CHOOSE                                => 1,
      self::VAR_SLIDER_MINILAYERS_CHOOSE                            => 1,
      self::VAR_SLIDER_MINILAYERS_STATIC_TITLE                      => "",
      self::VAR_SLIDER_MINILAYERS_STATIC_TEXT                       => "",
      self::VAR_SLIDER_MINILAYERS_STATIC_SHORT_TEXT                 => "",
      self::VAR_SLIDER_NIVO_PAUSE                                   => 4,
      self::VAR_SLIDER_NIVO_SHOW_MORE_TEXT                          => 0,
      self::VAR_SLIDER_NIVO_MORE_TEXT                               => 'Read more...',
      self::VAR_SLIDER_NIVO_SPEED                                   => 0.5,
      self::VAR_SLIDER_NIVO_EFFECT                                  => self::ATTR_FADE,
      self::VAR_SLIDER_NIVO_STATIC_SHORT_TEXT                       => "Short text",
      self::VAR_SLIDER_NIVO_STATIC_TITLE                            => "",
      self::VAR_SLIDER_NIVO_TEXT                                    => "",
      self::VAR_SLIDER_UNOSLIDER_WIDTH                              => 960,
      self::VAR_SLIDER_UNOSLIDER_HEIGHT                             => 350,
      self::VAR_SLIDER_UNOSLIDER_THEME                              => self::ATTR_LIGHT,
      self::VAR_SLIDER_UNOSLIDER_INDICATOR                          => 1,
      self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_INDICATOR                 => 1,
      self::VAR_SLIDER_UNOSLIDER_NAVIGATION                         => 1,
      self::VAR_SLIDER_UNOSLIDER_AUTOHIDE_NAVIGATION                => 1,
      self::VAR_SLIDER_UNOSLIDER_ENABLE_SLIDESHOW                   => 1,
      self::VAR_SLIDER_UNOSLIDER_PAUSE_ON_MOUSEOVER                 => 1,
      self::VAR_SLIDER_UNOSLIDER_CONTINUOUS                         => 1,
      self::VAR_SLIDER_UNOSLIDER_TIMEBAR                            => 1,
      self::VAR_SLIDER_UNOSLIDER_INFINITE_LOOP                      => 1,
      self::VAR_SLIDER_UNOSLIDER_AUTOSTART                          => 1,
      self::VAR_SLIDER_UNOSLIDER_INTERVAL                           => 3,
      self::VAR_SLIDER_UNOSLIDER_VERTICAL_BLOCKS                    => 10,
      self::VAR_SLIDER_UNOSLIDER_HORIZONTAL_BLOCKS                  => 4,
      self::VAR_SLIDER_UNOSLIDER_USE_PRESET                         => 1,
      self::VAR_SLIDER_UNOSLIDER_PRESET                             => array(),
      self::VAR_SLIDER_UNOSLIDER_SPEED                              => 500,
      self::VAR_SLIDER_UNOSLIDER_DELAY_BLOCKS                       => 50,
      self::VAR_SLIDER_UNOSLIDER_TRANSITION                         => self::ATTR_GROW,
      self::VAR_SLIDER_UNOSLIDER_VARIATION                          => self::ATTR_TOPLEFT,
      self::VAR_SLIDER_UNOSLIDER_PATTERN                            => self::ATTR_RANDOM,
      self::VAR_SLIDER_UNOSLIDER_DIRECTION                          => self::ATTR_CENTER,
      self::VAR_SLIDER_UNOSLIDER_SHOW_MORE_TEXT                     => 0,
      self::VAR_SLIDER_UNOSLIDER_MORE_TEXT                          => 'Read more...',
      self::VAR_SLIDER_ELASTIC_HEIGHT                               => 400,
      self::VAR_SLIDER_ELASTIC_AUTOPLAY                             => 1,
      self::VAR_SLIDER_ELASTIC_ANIMATION                            => self::ATTR_SIDES,
      self::VAR_SLIDER_ELASTIC_SPEED                                => 0.8,
      self::VAR_SLIDER_ELASTIC_TIMEOUT                              => 3,
      self::VAR_SLIDER_ELASTIC_SHOW_MORE_TEXT                       => 0,
      self::VAR_SLIDER_ELASTIC_MORE_TEXT                            => 'Read more...',
      self::ATTR_SLIDERS_BUTTON_CONFIG                              => array( self::ATTR_THIS, 'button_sliders_config'),
      self::ATTR_SLIDERS_BUTTON_EDIT_SLIDES                         => array( self::ATTR_THIS, 'button_sliders_edit'),
      self::ATTR_SLIDERS_BUTTON_DELETE_SLIDE                        => array( self::ATTR_THIS, 'button_sliders_delete'),
      self::VAR_FONT_LOGO                                           => 'Pacifico',
      self::VAR_FONT_LOGO_TYPE                                      => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_DESCRIPTION                                    => 'Rokkitt',
      self::VAR_FONT_DESCRIPTION_TYPE                               => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NAVIGATION                                     => 'Rokkitt',
      self::VAR_FONT_NAVIGATION_TYPE                                => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_P                                              => "'Calibri', 'Droid Sans', Verdana, Arial sans-serif",
      self::VAR_FONT_P_TYPE                                         => self::ATTR_WEB_FONTS,
      self::VAR_FONT_H1                                             => 'Rokkitt',
      self::VAR_FONT_H1_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_H2                                             => 'Rokkitt',
      self::VAR_FONT_H2_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_H3                                             => 'Rokkitt',
      self::VAR_FONT_H3_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_H4                                             => 'Rokkitt',
      self::VAR_FONT_H4_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_H5                                             => 'Rokkitt',
      self::VAR_FONT_H5_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_H6                                             => 'Rokkitt',
      self::VAR_FONT_H6_TYPE                                        => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NIVO_TITLE                                     => 'Rokkitt',
      self::VAR_FONT_NIVO_TITLE_TYPE                                => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NIVO_TITLE_BRACKETS                            => 'Rokkitt',
      self::VAR_FONT_NIVO_TITLE_BRACKETS_TYPE                       => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NIVO_CONTENT                                   => "'Calibri', 'Droid Sans', Verdana, Arial sans-serif",
      self::VAR_FONT_NIVO_CONTENT_TYPE                              => self::ATTR_WEB_FONTS,
      self::VAR_FONT_SLOGAN                                         => 'Rokkitt',
      self::VAR_FONT_SLOGAN_TYPE                                    => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_SUBSLOGAN                                      => 'Rokkitt',
      self::VAR_FONT_SUBSLOGAN_TYPE                                 => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_SIDEBARFOOTER                                  => 'Rokkitt',
      self::VAR_FONT_SIDEBARFOOTER_TYPE                             => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NAME_TESTIMONIAL                               => 'Shadows Into Light',
      self::VAR_FONT_NAME_TESTIMONIAL_TYPE                          => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_SPECIAL_FONT                                   => 'Shadows Into Light',
      self::VAR_FONT_SPECIAL_FONT_TYPE                              => self::ATTR_GOOGLE_FONT,
      self::VAR_FONT_NAV_SIZE                                       => 11,
      self::VAR_FONT_TEXT_SIZE                                      => 12,
      self::VAR_FONT_H1_SIZE                                        => 18,
      self::VAR_FONT_H2_SIZE                                        => 16,
      self::VAR_FONT_H3_SIZE                                        => 14,
      self::VAR_FONT_H4_SIZE                                        => 13,
      self::VAR_FONT_H5_SIZE                                        => 12,
      self::VAR_FONT_H6_SIZE                                        => 12,
      self::VAR_FONT_SLOGAN_SIZE                                    => 28,
      self::VAR_FONT_SUBSLOGAN_SIZE                                 => 26,
      self::VAR_FONT_BLOG_TITLE_SIZE                                => 22,
      self::VAR_FONT_META_SIZE                                      => 12,
      self::ATTR_EXPORTIMPORT_BUTTON_EXPORT                         => array( self::ATTR_THIS, 'button_export_theme'),
      self::ATTR_EXPORTIMPORT_BUTTON_IMPORT                         => array( self::ATTR_THIS, 'button_import_theme'),
      self::ATTR_EXPORTIMPORT_BUTTON_EXPORT_PANEL                   => array( self::ATTR_THIS, 'button_export_panel'),
      self::ATTR_EXPORTIMPORT_BUTTON_IMPORT_PANEL                   => array( self::ATTR_THIS, 'button_import_panel'),
      self::ATTR_EXPORTIMPORT_BUTTON_APPLY_PANEL                    => array( self::ATTR_THIS, 'button_apply_panel'),
      self::ATTR_EXPORTIMPORT_BUTTON_DELETE_PANEL                   => array( self::ATTR_THIS, 'button_delete_panel'),
      self::ATTR_SHORTCODES_BUTTON_ADD                              => array( self::ATTR_THIS, 'button_add_shortcodes'),
      self::VAR_PANEL_CONFIGS                                       => array(),
      self::VAR_CONTACT_FORMS                                       => array(),
      self::VAR_FEATURES_TAB                                        => array(),
      self::VAR_SIDEBARS                                            => array(),
      self::VAR_LAYERSLIDER_SLIDES                                  => array(),
      self::VAR_SLIDER_FLASH_SLIDES                                 => array(),
      self::VAR_SLIDER_CYCLE_SLIDES                                 => array(),
      self::VAR_SLIDER_ELASTIC_SLIDES                               => array(),
      self::VAR_SLIDER_ELEGANT_SLIDES                               => array(),
      self::VAR_SLIDER_NIVO_SLIDES                                  => array(),
      self::VAR_SLIDER_THUMBNAILS_SLIDES                            => array(),
      self::VAR_SLIDER_UNOSLIDER_SLIDES                             => array(),
      self::VAR_THUMB_RECENTPOSTS                                   => array( self::ATTR_WIDTH => 55,  self::ATTR_HEIGHT => 55,  TRUE ),
      self::VAR_THUMB_TESTIMONIAL                                   => array( self::ATTR_WIDTH => 94,  self::ATTR_HEIGHT => 94,  TRUE ),
      self::VAR_THUMB_SLIDER_ELASTIC                                => array( self::ATTR_WIDTH => 150, self::ATTR_HEIGHT => 59,  TRUE ),
      self::VAR_THUMB_PORTFOLIO_3COLS                               => array( self::ATTR_WIDTH => 280, self::ATTR_HEIGHT => 143, TRUE, self::ATTR_CSS_ROLE => '#portfolio li img, #portfolio li .thumb, ' ),
      self::VAR_THUMB_PORTFOLIO_SLIDER                              => array( self::ATTR_WIDTH => 205, self::ATTR_HEIGHT => 118, TRUE, self::ATTR_CSS_ROLE => '.portfolio-slider li a img, .portfolio-slider li a, .portfolio-slider li' ),
      self::VAR_THUMB_PORTFOLIO_BIG                                 => array( self::ATTR_WIDTH => 617, self::ATTR_HEIGHT => 295, TRUE, self::ATTR_CSS_ROLE => '#portfolio-bigimage img' ),
      self::VAR_THUMB_GALLERY                                       => array( self::ATTR_WIDTH => 208, self::ATTR_HEIGHT => 168, TRUE, self::ATTR_CSS_ROLE => '.gallery-wrap li img, .gallery-wrap .internal_page_item' ),
      self::VAR_THUMB_MORE_PROJECTS                                 => array( self::ATTR_WIDTH => 86,  self::ATTR_HEIGHT => 86,  TRUE ),
      self::VAR_BLOG_ELEGANT                                        => array( self::ATTR_WIDTH => 450, self::ATTR_HEIGHT => 0,   TRUE ),
      self::VAR_BLOG_BIG                                            => array( self::ATTR_WIDTH => 720, self::ATTR_HEIGHT => 0,   TRUE ),
      self::VAR_BLOG_SMALL                                          => array( self::ATTR_WIDTH => 288, self::ATTR_HEIGHT => 266, TRUE ),
      self::VAR_NIVO_SLIDER                                         => array( self::ATTR_WIDTH => 608, self::ATTR_HEIGHT => 269, TRUE ),
      self::VAR_FEATURES_TAB_ICON                                   => array( self::ATTR_WIDTH => 20,  self::ATTR_HEIGHT => 20,  TRUE ),
      self::VAR_NOTIFIER_CACHE                                      => NULL,
      self::VAR_NOTIFIER_CACHE_LAST_UPDATE                          => NULL,
      self::VAR_FONT_TYPE_OPTION_ID                                 => NULL,

    ),
		self::OPT_OPTION_PAGE_TITLE	                            => 'Kohana WP Theme Framework Control Panel',
		self::OPT_OPTION_PAGE_TEXT	                            => 'To learn more about Kohana see <a href="http://kohanaphp.com/">http://kohanaphp.com</a>',
		self::OPT_HAS_CREDIT_BLOCK                              => FALSE,
    self::OPT_HAS_DONATE_BLOCK                              => FALSE,
    self::OPT_HAS_SUPPORT_BLOCK                             => FALSE,
    self::OPT_HAS_TOPLEVEL_MENU                             => FALSE,
    self::OPT_HEADER_IMAGE_WIDTH                            => 960,
    self::OPT_HEADER_IMAGE_HEIGHT                           => 338,
    self::OPT_HEADER_IMAGE                                  => '%s/images/fixed-images/001.jpg',
    self::OPT_MAIN_WIDTH                                    => 960,
		self::OPT_CONTENT_WIDTH                                 => 700,
		self::OPT_SIDEBAR_WIDTH                                 => 220,
		self::OPT_MINIMUM_WP_VERSION                            => '3.0',
		self::OPT_DEFAULT_LAYOUT_PAGE                           => self::ATTR_SIDEBAR_RIGHT,
		self::OPT_DEFAULT_LAYOUT_PAGE_SHOP                      => self::ATTR_SIDEBAR_RIGHT,
    self::OPT_SLIDER_TYPE                                   => FALSE,
    self::OPT_SLIDER_INDEX                                  => 0,
    self::OPT_SLIDER_LENGHT                                 => 0,
    self::OPT_SLIDER_ID                                     => 'slider_%s_slides',
    self::OPT_SLIDER_SHOW_MORE_TEXT                         => 'slider_%s_show_more_text',
    self::OPT_SLIDER_MORE_TEXT                              => 'slider_%s_more_text',
    self::OPT_SLIDER_CURRENT_SLIDE                          => array(),
    self::OPT_SLIDER_SLIDES                                 => array(),
    self::OPT_SLIDER_IS_A_LINK                              => FALSE,
    self::OPT_SLIDER_URL                                    => '',
    self::OPT_SLIDER_A_BEFORE                               => '',
    self::OPT_SLIDER_A_AFTER                                => '',
    self::OPT_SLIDER_SLIDES_CONFIG                          => array(
      self::ATTR_UNOSLIDER                                          => array('title', 'image', 'link'),
      self::ATTR_ELEGANT                                            => array('title', 'image', 'caption', 'link'),
      self::ATTR_CYCLE                                              => array('title', 'image', 'video', 'caption', 'link'),
      self::ATTR_ELASTIC                                            => array('title', 'caption', 'image', 'link'),
      self::ATTR_NIVO                                               => array('image', 'link'),
      self::ATTR_THUMBNAILS                                         => array('image', 'caption', 'tooltip', 'link'),
      self::ATTR_FLASH                                              => array('title', 'image', 'caption', 'link'),
    ),
    self::OPT_ACCEPT                                        => FALSE,
    self::OPT_USER_AGENT                                    => FALSE,
    self::OPT_IS_MOBILE                                     => FALSE,
    self::OPT_IS_ANDROID                                    => NULL,
    self::OPT_IS_ANDROIDTABLET                              => NULL,
    self::OPT_IS_BLACKBERRY                                 => NULL,
    self::OPT_IS_BLACKBERRYTABLET                           => NULL,
    self::OPT_IS_GENERIC                                    => NULL,
    self::OPT_IS_IPAD                                       => NULL,
    self::OPT_IS_IPHONE                                     => NULL,
    self::OPT_IS_OPERA                                      => NULL,
    self::OPT_IS_PALM                                       => NULL,
    self::OPT_IS_WINDOWS                                    => NULL,
    self::OPT_IS_WINDOWSPHONE                               => NULL,
    self::OPT_MOBILE_DEVICES                                => array(
      self::OPT_IS_ANDROID                                  => "android.*mobile",
      self::OPT_IS_ANDROIDTABLET                            => "android(?!.*mobile)",
      self::OPT_IS_BLACKBERRY                               => "blackberry",
      self::OPT_IS_BLACKBERRYTABLET                         => "rim tablet os",
      self::OPT_IS_IPHONE                                   => "(iphone|ipod)",
      self::OPT_IS_IPAD                                     => "(ipad)",
      self::OPT_IS_PALM                                     => "(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)",
      self::OPT_IS_WINDOWS                                  => "windows ce; (iemobile|ppc|smartphone)",
      self::OPT_IS_WINDOWSPHONE                             => "windows phone os",
      self::OPT_IS_GENERIC                                  => "(kindle|mobile|mmp|midp|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap|opera mini)"
    ),
    self::OPT_METABOXES                                     => array(),
    self::OPT_METABOXES_OPTIONS                             => array(),
    self::OPT_FONT_ROLES                                    => array(
      self::VAR_FONT_LOGO                                   => '#logo a.logo-text { : %dpx;}',
      self::VAR_FONT_DESCRIPTION                            => '#logo .logo-description',
      self::VAR_FONT_NAVIGATION                             => '#nav ul li a',
      self::VAR_FONT_P                                      => 'p, .unoslider_caption',
      self::VAR_FONT_H1                                     => 'h1',
      self::VAR_FONT_H2                                     => 'h2, h2 a',
      self::VAR_FONT_H3                                     => 'h3',
      self::VAR_FONT_H4                                     => 'h4',
      self::VAR_FONT_H5                                     => 'h5',
      self::VAR_FONT_H6                                     => 'h6',
      self::VAR_FONT_NIVO_TITLE                             => '#slider .slider-nivo-static h3',
      self::VAR_FONT_NIVO_TITLE_BRACKETS                    => '#slider .slider-nivo-static h3 span',
      self::VAR_FONT_NIVO_CONTENT                           => '#slider .slider-nivo-static p',
      self::VAR_FONT_SLOGAN                                 => '#slogan h2',
      self::VAR_FONT_SUBSLOGAN                              => '#slogan h3',
      self::VAR_FONT_SIDEBARFOOTER                          => '#sidebar .widget h2, #sidebar .widget h3, #footer .widget h2, #footer .widget h3',
      self::VAR_FONT_NAME_TESTIMONIAL                       => '.testimonial .testimonial-name a.name, .testimonial-name span.name',
      self::VAR_FONT_SPECIAL_FONT                           => '.special-font',
    ),
    self::OPT_SIZES_ROLES                                   => array(
      self::VAR_FONT_NAV_SIZE                               => '#nav li { font-size : %dpx;}',
      self::VAR_FONT_TEXT_SIZE                              => '#primary p, #sidebar .recent-post a.title, .slider-minilayers-static p, .home_items, #primary li, .testimonial-widget blockquote p, #sidebar .icon-text p, .features-tab-content p, .products li .price, .products.ribbon li .below-thumb, .contact-form span.label address, dd, blockquote { font-size : %dpx;}',
      self::VAR_FONT_H1_SIZE                                => 'h1 { font-size : %dpx;}',
      self::VAR_FONT_H2_SIZE                                => 'h2 { font-size : %dpx;}',
      self::VAR_FONT_H3_SIZE                                => 'h3 { font-size : %dpx;}',
      self::VAR_FONT_H4_SIZE                                => 'h4 { font-size : %dpx;}',
      self::VAR_FONT_H5_SIZE                                => 'h5 { font-size : %dpx;}',
      self::VAR_FONT_H6_SIZE                                => 'h6 { font-size : %dpx;}',
      self::VAR_FONT_SLOGAN_SIZE                            => '#slogan h2 { font-size : %dpx !important;}',
      self::VAR_FONT_SUBSLOGAN_SIZE                         => '#slogan h3 { font-size : %dpx !important;}',
      self::VAR_FONT_BLOG_TITLE_SIZE                        => '.hentry h1.post-title, .hentry h2.post-title { font-size : %dpx;}',
      self::VAR_FONT_META_SIZE                              => '.hentry .meta .author, .hentry .meta .date, .hentry .meta .categories, .hentry .comments, .hentry .meta .author span, .hentry .meta .date span, .hentry .meta .categories span, .hentry .comments span, .hentry .meta .author a, .hentry .meta .date a, .hentry .meta .categories a, .hentry .comments a, .hentry .blog-elegant-socials p, .hentry .socials { font-size : %dpx;}',

    ),
    self::OPT_COLOR_ROLES                                   => array(
      self::VAR_COLORS_TOPBAR_BG                                    => '#top { background-color:%s;}',
      self::VAR_COLORS_TOPBAR_TEXT                                  => '#top p, #top li { color:%s;}',
      self::VAR_COLORS_TOPBAR_LINKS                                 => '#top a { color:%s;}',
      self::VAR_COLORS_TOPBAR_LINKS_HOVER                           => '#top a:hover { color:%s;}',
      self::VAR_COLORS_LOGO_COLOR                                   => '#logo h1 a { color:%s;}',
      self::VAR_COLORS_LOGO_DESCRIPTION_COLOR                       => '#logo p { color:%s;}',
      self::VAR_COLORS_NAV_COLOR                                    => '#nav ul li a { color:%s;}',
      self::VAR_COLORS_NAV_COLOR_HOVER                              => '#nav ul li a:hover, #nav ul.sub-menu li a:hover, #nav ul.children a:hover { color:%s;}',
      self::VAR_COLORS_NAV_COLOR_ACTIVE                             => '#nav .current-menu-item a { color:%s;}',
      self::VAR_COLORS_SUBNAV_BG_COLOR                              => '#nav ul.sub-menu, #nav ul.children { background-color:%s;}',
      self::VAR_COLORS_SUBNAV_BORDER_COLOR                          => '#nav ul.sub-menu li, #nav ul.children li { border-top-color:%s;}',
      self::VAR_COLORS_SUBNAV_COLOR                                 => '#nav ul.sub-menu li a, #nav ul.children li a { color:%s;}',
      self::VAR_COLORS_SUBNAV_COLOR_HOVER                           => '#nav ul.sub-menu li a:hover, #nav ul.children li a:hover { color:%s;}',
      self::VAR_COLORS_H1                                           => 'h1 { color:%s;}',
      self::VAR_COLORS_H2                                           => 'h2, h2.post-title { color:%s;}',
      self::VAR_COLORS_H3                                           => 'h3, .home_item h4 a, .home_item h4 { color:%s;}',
      self::VAR_COLORS_H4                                           => 'h4 { color:%s;}',
      self::VAR_COLORS_H5                                           => 'h5 { color:%s;}',
      self::VAR_COLORS_H6                                           => 'h6 { color:%s;}',
      self::VAR_COLORS_H_HIGHLIGHTES                                => 'h1 span, h2 span, h3 span, h4 span, h5 span, h6 span { color:%s;}',
      self::VAR_COLORS_SIDEBAR_FOOTER_TITLES                        => '#sidebar .widget h2, #sidebar .widget h3, #footer .widget h2, #footer .widget h3, #wp-calendar caption { color:%s;}',
      self::VAR_COLORS_SLOGAN                                       => '#slogan h2 { color:%s;}',
      self::VAR_COLORS_SUBSLOGAN                                    => '#slogan h3 { color:%s;}',
      self::VAR_COLORS_P                                            => 'body, p, li, address, dd, blockquote, #content .contact-form label, #content .contact-form input, #content .contact-form textarea, .gallery-filters ul.filters li a { color:%s;}',
      self::VAR_COLORS_A                                            => 'a, #footer a, #footer .widget a, #copyright a, .testimonial-widget a.url-testimonial, .testimonial-widget a.name-testimonial:hover, #sidebar .recent-post a.title, #sidebar .recent-comments a.title, #sidebar .recent-comments a.goto, #sidebar .recent-comments .author a, .gallery-filters ul.filters li a:hover, .gallery-filters ul.filters li.selected a { color:%s;}',
      self::VAR_COLORS_A_HOVER                                      => 'a:hover, #footer a:hover, #footer .widget a:hover, #copyright a:hover, .testimonial-widget a.name-testimonial, .testimonial-widget a.url-testimonial:hover, .sheeva-widget-content .sheeva-lastpost h3, #sidebar .recent-post a.title:hover, #sidebar .recent-comments a.title:hover, #sidebar .recent-comments a.goto:hover, #sidebar .recent-comments .author a:hover { color:%s;}',
      self::VAR_COLORS_SIDEBAR_A                                    => '#sidebar a, #sidebar div a, #sidebar ul li a, #sidebar p a, #sidebar .widget a, #sidebar div ul li a { color:%s;}',
      self::VAR_COLORS_SIDEBAR_A_HOVER                              => '#sidebar a:hover, #sidebar div a:hover, #sidebar ul li a:hover, #sidebar p a:hover, #sidebar .widget a:hover, #sidebar div ul li a:hover { color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_TEXT                    => 'span.onsale { color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_OFFER_BG                      => 'span.onsale { background-color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_BG             => '.products li a strong { background-color:%s !important;}',
      self::VAR_COLORS_STORE_PRODUCTS_LABEL_PRODUCTS_TEXT           => '.products li a strong { color:%s !important;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_BG         => '.products li .buttons a.add-to-cart { background-color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_BG             => '.products li .buttons a.details { background-color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT       => '.products li .buttons a.add-to-cart { color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT           => '.products li .buttons a.details { color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_HOVER      => '.products li .buttons a.add-to-cart:hover { background-color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_HOVER          => '.products li .buttons a.details:hover { background-color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_ADD_TO_CART_TEXT_HOVER => '.products li .buttons a.add-to-cart:hover { color:%s;}',
      self::VAR_COLORS_STORE_PRODUCTS_BUTTON_DETAILS_TEXT_HOVER     => '.products li .buttons a.details:hover { color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_BG                             => 'a.button, button.button, input.button, #review_form #submit { background-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_COLOR                          => 'a.button, button.button, input.button, #review_form #submit { color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_BORDER                         => 'a.button, button.button, input.button, #review_form #submit { border-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_BG_HOVER                       => 'a.button:hover, button.button:hover, input.button:hover, #review_form #submit:hover { background:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_COLOR_HOVER                    => 'a.button:hover, button.button:hover, input.button:hover, #review_form #submit:hover { color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_BORDER_HOVER                   => 'a.button:hover, button.button:hover, input.button:hover, #review_form #submit:hover { border-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG                         => 'a.button.alt, button.button.alt, button.button-alt, input.button.alt, #review_form #submit.alt { background-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR                      => 'a.button.alt, button.button.alt, button.button-alt, input.button.alt, #review_form #submit.alt { color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER                     => 'a.button.alt, button.button.alt, button.button-alt, input.button.alt, #review_form #submit.alt { border-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BG_HOVER                   => 'a.button.alt:hover, button.button.alt:hover, button.button-alt:hover, input.button.alt:hover, #review_form #submit.alt:hover { background-color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_COLOR_HOVER                => 'a.button.alt:hover, button.button.alt:hover, button.button-alt:hover, input.button.alt:hover, #review_form #submit.alt:hover { color:%s;}',
      self::VAR_COLORS_STORE_BUTTONS_ALT_BORDER_HOVER               => 'a.button.alt:hover, button.button.alt:hover, button.button-alt:hover, input.button.alt:hover, #review_form #submit.alt:hover { border-color:%s;}',
      self::VAR_COLORS_STORE_SINGLE_PRICE_CARD_BG                   => array('div.product p.price { background-color:%s;}', 'div.product p.price:before { border-left-color:%s;}'),
      self::VAR_COLORS_STORE_SINGLE_PRICE_CART_TEXT                 => 'div.product p.price { color:%s;}',
      self::VAR_COLORS_BLOG_TITLE                                   => '.hentry h1 a, .hentry h2 a, .blog-big .meta a, .blog-small .meta a { color:%s;}',
      self::VAR_COLORS_BLOG_TITLE_HOVER                             => '.hentry h1 a:hover, .hentry h2 a:hover, .blog-big .meta a:hover, .blog-small .meta a:hover { color:%s;}',
      self::VAR_COLORS_FOOTER_BACKGROUND                            => '#footer { background-color:%s;}',
      self::VAR_COLORS_FOOTER_INNER_BACKGROUND                      => '#footer .inner { background-color:%s;}',
      self::VAR_COLORS_FOOTER_INNER_BORDER                          => '#footer .inner:first-child { border-top-color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_TITLES                          => '#footer h3 { color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_TEXT                            => '#footer p { color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_LINKS                           => '#footer a { color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_LINKS_HOVER                     => '#footer a:hover { color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS                    => '#footer .widget ul li a { color:%s;}',
      self::VAR_COLORS_FOOTER_COLOR_MENUES_LINKS_HOVER              => '#footer .widget ul li a:hover { color:%s;}',
      self::VAR_COLORS_COPYRIGHT_BACKGROUND                         => '#copyright { background-color:%s;}',
      self::VAR_COLORS_COPYRIGHT_INNER_BACKGROUND                   => '#copyright .inner { background-color:%s;}',
      self::VAR_COLORS_COPYRIGHT_INNER_BORDER                       => '#copyright .inner { border-top-color:%s;}',
      self::VAR_COLORS_COPYRIGHT_TEXT_COLOR                         => '#copyright p { color:%s;}',
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR                        => '#copyright a { color:%s;}',
      self::VAR_COLORS_COPYRIGHT_LINKS_COLOR_HOVER                  => '#copyright a:hover { color:%s;}',
    ),
    self::OPT_WPTABLES                                      => array(
      self::ATTR_POSTS, self::ATTR_POSTMETA, self::ATTR_TERMS, self::ATTR_TERM_TAXONOMY,
      self::ATTR_TERM_RELATIONSHIPS
    ),
    self::OPT_LAYOUT                                        => '',
    self::OPT_WIDGET_NUM                                    => array(),
    self::OPT_PORTFOLIO                                     => array(),
    self::OPT_RSS_FORUM_URL                                 => '',
    self::OPT_RSS_URL                                       => '',
    self::OPT_NOTIFIER_CACHE_INTERVAL                       => 21600,
    self::OPT_NOTIFIER_XML_FILE                             => '',
    self::OPT_EMAIL_CONTENT_TYPE                            => 'text/html',
    self::OPT_EMAIL_MESSAGE                                 => '',
    self::OPT_DEFAULT_CONTACT_FORM                          => array(),
    self::OPT_SHORTCODES                                    => array(),
    self::OPT_TAGS_ALLOWED                                  => array(),
    self::OPT_CYCLE_FXS                                     => array(
      self::ATTR_BLIND_X, 		self::ATTR_BLIND_Y, 		self::ATTR_BLIND_Z, 		self::ATTR_COVER, 		self::ATTR_CURTAIN_X,
      self::ATTR_CURTAIN_Y, 	self::ATTR_FADE, 			self::ATTR_FADE_ZOOM, 	self::ATTR_GROW_X, 		self::ATTR_GROW_Y,
      self::ATTR_SCROLL_UP, 	self::ATTR_SCROLL_DOWN,self::ATTR_SCROLL_LEFT,self::ATTR_SCROLL_RIGHT, 	self::ATTR_SCROLL_HORZ,
      self::ATTR_SHUFFLE, 	self::ATTR_SLIDE_X, 		self::ATTR_SLIDE_Y, 		self::ATTR_TOSS, 			self::ATTR_TURN_UP,
      self::ATTR_TURN_LEFT, 	self::ATTR_TURN_RIGHT, self::ATTR_UNCOVER, 	self::ATTR_WIPE, 			self::ATTR_ZOOM,
      self::ATTR_NONE,			self::ATTR_TURN_DOWN,	self::ATTR_SCROLL_VERT
    ),
    self::OPT_SLIDERS                                       => array(
      self::ATTR_NONE                                       => 'None',
      self::ATTR_FIXED_IMAGE                                => 'Fixed Image',
      self::ATTR_LAYERS                                     => 'Layers Slider',
      self::ATTR_UNOSLIDER                                  => 'UnoSlider',
      self::ATTR_ELEGANT                                    => 'Elegant Slider',
      self::ATTR_CYCLE                                      => 'Cycle Slider',
      self::ATTR_ELASTIC                                    => 'Elastic Slider',
      self::ATTR_NIVO                                       => 'Nivo Slider',
      self::ATTR_THUMBNAILS                                 => 'With Thumbnails',
      self::ATTR_FLASH                                      => 'Slider Flash',
      self::ATTR_MINILAYERS                                 => 'Mini Layers',
    ),
    self::OPT_PORTFOLIO_TYPES                               => array(
      self::ATTR_3COLORS                                    => '3 Columns',
      self::ATTR_SLIDER                                     => 'With Slider',
      self::ATTR_BIG_IMAGE                                  => 'Big Image',
      self::ATTR_FULL_DESC                                  => 'Full Description',
      self::ATTR_FILTERABLE                                 => 'Filterable',
    ),
    self::OPT_UNOSLIDER_ANIMATIONS                          => array(
      self::ATTR_CHESS                                              => self::ATTR_CHESS,
      self::ATTR_SPIRAL_REVERSED                                    => self::ATTR_SPIRAL_REVERSED,
      self::ATTR_SPIRAL                                             => self::ATTR_SPIRAL,
      self::ATTR_SQ_APPEAR                                          => self::ATTR_SQ_APPEAR,
      self::ATTR_SQ_FLYOFF                                          => self::ATTR_SQ_FLYOFF,
      self::ATTR_SQ_DROP                                            => self::ATTR_SQ_DROP,
      self::ATTR_SQ_SQUEEZE                                         => self::ATTR_SQ_SQUEEZE,
      self::ATTR_SQ_RANDOM                                          => self::ATTR_SQ_RANDOM,
      self::ATTR_SQ_DIAGONAL_REV                                    => self::ATTR_SQ_DIAGONAL_REV,
      self::ATTR_SQ_DIAGONAL                                        => self::ATTR_SQ_DIAGONAL,
      self::ATTR_SQ_FADE_RANDOM                                     => self::ATTR_SQ_FADE_RANDOM,
      self::ATTR_SQ_FADE_DIAGONAL_REV                               => self::ATTR_SQ_FADE_DIAGONAL_REV,
      self::ATTR_SQ_FADE_DIAGONAL                                   => self::ATTR_SQ_FADE_DIAGONAL,
      self::ATTR_EXPLODE                                            => self::ATTR_EXPLODE,
      self::ATTR_IMPLODE                                            => self::ATTR_IMPLODE,
      self::ATTR_FOUNTAIN                                           => self::ATTR_FOUNTAIN,
      self::ATTR_BLIND_BOTTOM                                       => self::ATTR_BLIND_BOTTOM,
      self::ATTR_BLIND_TOP                                          => self::ATTR_BLIND_TOP,
      self::ATTR_BLIND_RIGHT                                        => self::ATTR_BLIND_RIGHT,
      self::ATTR_BLIND_LEFT                                         => self::ATTR_BLIND_LEFT,
      self::ATTR_SHOT_RIGHT                                         => self::ATTR_SHOT_RIGHT,
      self::ATTR_SHOT_LEFT                                          => self::ATTR_SHOT_LEFT,
      self::ATTR_ALTERNATE_VERTICAL                                 => self::ATTR_ALTERNATE_VERTICAL,
      self::ATTR_ALTERNATE_HORIZONTAL                               => self::ATTR_ALTERNATE_HORIZONTAL,
      self::ATTR_ZIPPER_RIGHT                                       => self::ATTR_ZIPPER_RIGHT,
      self::ATTR_ZIPPER_LEFT                                        => self::ATTR_ZIPPER_LEFT,
      self::ATTR_BAR_SLIDE_RANDOM                                   => self::ATTR_BAR_SLIDE_RANDOM,
      self::ATTR_BAR_SLIDE_BOTTOM_RIGHT                             => self::ATTR_BAR_SLIDE_BOTTOM_RIGHT,
      self::ATTR_BAR_SLIDE_BOTTOM_LEFT                              => self::ATTR_BAR_SLIDE_BOTTOM_LEFT,
      self::ATTR_BAR_SLIDE_TOP_RIGHT                                => self::ATTR_BAR_SLIDE_TOP_RIGHT,
      self::ATTR_BAR_SLIDE_TOP_LEFT                                 => self::ATTR_BAR_SLIDE_TOP_LEFT,
      self::ATTR_BAR_FADE_BOTTOM                                    => self::ATTR_BAR_FADE_BOTTOM,
      self::ATTR_BAR_FADE_TOP                                       => self::ATTR_BAR_FADE_TOP,
      self::ATTR_BAR_FADE_RIGHT                                     => self::ATTR_BAR_FADE_RIGHT,
      self::ATTR_BAR_FADE_LEFT                                      => self::ATTR_BAR_FADE_LEFT,
      self::ATTR_BAR_FADE_RANDOM                                    => self::ATTR_BAR_FADE_RANDOM,
      self::ATTR_V_SLIDE_TOP                                        => self::ATTR_V_SLIDE_TOP,
      self::ATTR_H_SLIDE_RIGHT                                      => self::ATTR_H_SLIDE_RIGHT,
      self::ATTR_V_SLIDE_BOTTOM                                     => self::ATTR_V_SLIDE_BOTTOM,
      self::ATTR_H_SLIDE_LEFT                                       => self::ATTR_H_SLIDE_LEFT,
      self::ATTR_STRETCH                                            => self::ATTR_STRETCH,
      self::ATTR_STRETCHED                                          => self::ATTR_STRETCHED,
      self::ATTR_SQUEEZE                                            => self::ATTR_SQUEEZE,
      self::ATTR_FADE                                               => self::ATTR_FADE,
    ),
    self::OPT_EASINGS                                               => array(
      FALSE                                                         => self::ATTR_NONE,
      self::ATTR_EASINGS_IN_QUAD                                    => 'easeInQuad',
      self::ATTR_EASINGS_OUT_QUAD                                   => 'easeOutQuad',
      self::ATTR_EASINGS_IN_OUT_QUAD                                => 'easeInOutQuad',
      self::ATTR_EASINGS_IN_CUBIC                                   => 'easeInCubic',
      self::ATTR_EASINGS_OUT_CUBIC                                  => 'easeOutCubic',
      self::ATTR_EASINGS_IN_OUT_CUBIC                               => 'easeInOutCubic',
      self::ATTR_EASINGS_IN_QUART                                   => 'easeInQuart',
      self::ATTR_EASINGS_OUT_QUART                                  => 'easeOutQuart',
      self::ATTR_EASINGS_IN_OUT_QUART                               => 'easeInOutQuart',
      self::ATTR_EASINGS_IN_QUINT                                   => 'easeInQuint',
      self::ATTR_EASINGS_OUT_QUINT                                  => 'easeOutQuint',
      self::ATTR_EASINGS_IN_OUT_QUINT                               => 'easeInOutQuint',
      self::ATTR_EASINGS_IN_SINE                                    => 'easeInSine',
      self::ATTR_EASINGS_OUT_SINE_                                  => 'easeOutSine',
      self::ATTR_EASINGS_IN_OUT_SINE                                => 'easeInOutSine',
      self::ATTR_EASINGS_IN_EXPO                                    => 'easeInExpo',
      self::ATTR_EASINGS_OUT_EXPO                                   => 'easeOutExpo',
      self::ATTR_EASINGS_IN_OUT_EXPO                                => 'easeInOutExpo',
      self::ATTR_EASINGS_IN_CIRC                                    => 'easeInCirc',
      self::ATTR_EASINGS_OUT_CIRC                                   => 'easeOutCirc',
      self::ATTR_EASINGS_IN_OUT_CIRC                                => 'easeInOutCirc',
      self::ATTR_EASINGS_IN_ELASTIC                                 => 'easeInElastic',
      self::ATTR_EASINGS_OUT_ELASTIC                                => 'easeOutElastic',
      self::ATTR_EASINGS_IN_OUT_ELASTIC                             => 'easeInOutElastic',
      self::ATTR_EASINGS_IN_BACK                                    => 'easeInBack',
      self::ATTR_EASINGS_OUT_BACK                                   => 'easeOutBack',
      self::ATTR_EASINGS_IN_OUT_BACK                                => 'easeInOutBack',
      self::ATTR_EASINGS_IN_BOUNCE                                  => 'easeInBounce',
      self::ATTR_EASINGS_OUT_BOUNCE                                 => 'easeOutBounce',
      self::ATTR_EASINGS_IN_OUT_BOUNCE                              => 'easeInOutBounce',
    ),
    self::OPT_BLOG_TYPE                                             => '',
    self::OPT_POST_TYPE                                             => '',
    self::OPT_PORTFOLIO_TYPE                                        => '',
    self::OPT_METHODS_PRIORITIES                                    => array(
      'hook_woocommerce_before_main_content'                        => self::ATTR_HIGH_PRIORITY,
      'hook_woocommerce_sidebar'                                    => self::ATTR_LOW_PRIORITY,

    ),
  );

  /**
   * Order the array by a key
   *
   * @param array $a The array to sort
   * @param string $subkey The key used for the sorting
   * @return array Array sorted
   *
   * @since 1.0
   */
  private function subval_sort( $a, $subkey ) {
    if( is_array( $a ) AND ! empty( $a ) ) {
      foreach( $a as $k => $v ) {
        $b[$k] = strtolower( $v[$subkey] );
      }

      asort( $b );

      foreach( $b as $key => $val ) {
        $c[] = $a[$key];
      }

      return $c;
    }

    return $a;
  }

  /**
   * Retrieve the current pagename
   *
   * @return string Current pagename
   *
   * @since 1.0
   */
  private function get_current_pagename()
  {
    global $post;

    if ( isset( $post->post_name ) )
    return $post->post_name;
    else
    return '';
  }

  /**
   * Retrieve the escluded categories, set on Theme Options
   *
   * @return string String with all id categories excluded, separeted by a comma
   *
   * @since 1.0
   */
  private function get_exclude_categories()
  {
    $cats = $this->get_option( self::VAR_BLOG_CATS_EXCLUDE);

    $temp = array();
    foreach($cats as $cat)
    {
      $temp[] = $cat;              // metto tutte le categorie in un array temporaneo
    }

    // genero una nuova stringa con l'esclusione delle categorie passate in parametro, aggiugendo un meno davanti ad ogni numero (-1,-4,-7,ecc...)
    $i = 0; $query = '';
    foreach($temp as $c)
    {
      if($i != 0) $query .= ',';    // aggiunge la virgola, soltanto se non � il primo elemento processato
      $query .= "-$c";

      $i++;
    }

    return $query;
  }

  /**
   * Check if the email passed is valid
   *
   * @return bool TRUE = valid; FALSE = no valid.
   *
   * @since 1.0
   */
  private function check_email( $m ) {
    $r = "([A-z0-9]+[\._\-]?){1,3}([A-z0-9])*";
    $r = "/(?i)^{$r}\@{$r}\.[A-z]{2,6}$/";
    return preg_match( $r, $m );
  }

  /**
   * The same above, but this print the string and not return.
   *
   * @since 1.0
   */
  private function convertTags($str, $class = '', $after = '', $echo = TRUE)
  {
    if ( $echo)
      echo $this->filter_bloginfo($str, $class, $after);
    else
      return $this->filter_bloginfo($str, $class, $after);
  }

  /**
   * Retrieve the current complete url
   *
   * @since 1.0
   */
  private function curPageURL() {
    $pageURL = 'http';
    if ( isset( $_SERVER["HTTPS"] ) AND $_SERVER["HTTPS"] == "on" )
    $pageURL .= "s";

    $pageURL .= "://";

    if ( isset( $_SERVER["SERVER_PORT"] ) AND $_SERVER["SERVER_PORT"] != "80" )
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    else
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];

    return $pageURL;
  }

  /**
   * Convert a string of categories into excluded categories
   *
   * @param string $cats The string with all positive ids of categories
   * @return string A string of all ids negative of categories to exclude
   *
   * @since 1.0
   */
  private function exclude_categories($cats)
  {
    $excluded_cats = '-9999';

    foreach ($cats as $cat)
    {
      $excluded_cats .= ',-' . $cat;
    }

    return $excluded_cats;
  }

  /**
   * Echo a list of option for a select html
   *
   * @param array $option The array with all option to transform
   * @param string $value_select The value to select
   * @param bool $echo if true, print the html output
   * @return string The html output with all options
   *
   * @since 1.0
   */
  private function list_option( $option = array(), $value_select = '', $echo = TRUE )
  {
    if( empty( $option ) )
    return;

    foreach( $option as $key => $value )
    {
      $selected = selected( $key, $value_select, FALSE );
      	
      $html .= "<option value=\"$key\"$selected>$value</option>\n";
    }

    if( $echo )
    echo $html;

    return $html;
  }


  /**
   * Retrive a list of files, contained into a folder.
   *
   * @since 1.0
   *
   * @param string $folder The absolute pathname of folder
   * @return array An array of all files
   */
  private function list_files_into( $folder )
  {
    $files = array();

    if ( file_exists($folder) && $handle = opendir($folder) ) {
      while ( FALSE !== ($file = readdir($handle ) ) ) {
        if ( $file == ".." || $file == "." || $file[0] == '.' || $file[0] == 'error_log' ) {
          continue;
        }

        $files[] = $file;
      }

      closedir($handle);
    }

    return $files;
  }


  /**
   * Search the shortcode into a post content
   *
   * @since 1.0
   *
   * @param string $id_post The id of current post
   * @param string $shortcode The shortcode to search
   * @return bool
   */
  private function search_shortcode_into_post( $id_post = FALSE, $shortcode = '' ){
    global $wpdb, $post;

    if ( ! $id_post && isset( $post->ID ) )
    $id_post = $post->ID;

    if ( ! $id_post && ! isset( $post->ID ) )
    return;

    $sql = "SELECT `ID` FROM `{$wpdb->posts}` WHERE `ID` = $id_post AND `post_content` LIKE '%$shortcode%' LIMIT 1";

    if ( $wpdb->get_var($sql) )
    return TRUE;
    else
    return FALSE;
  }

  /**
   * Add the paragraphs to the string, without damage the shortcodes
   *
   * @param string $str The string to convert
   * @return string The string converted
   *
   * @since 1.0
   */
  private function addp($str)
  {
    $str = wpautop( $str );
    $str = preg_replace( '/<\/?p>(\[(.*)\])<\/?p>/', '$1', $str );    // <p>[sc]</p>
    $str = preg_replace( '/(\[(.*)\])[ ]*<\/?p>/', '$1', $str );       // [/sc]</p>
    $str = preg_replace( '/(\[(.*)\])<br \/>/', '$1', $str );     // [/sc]<br />
    $str = preg_replace( '/<\/?p>(\[(.*))/', '$1', $str );           // <p>[sc
    $str = preg_replace( '/(=")<br \/>\n/', '$1', $str );           // ="<br />
    $str = preg_replace( '/\n<\/?p>(")/', '$1', $str );           // <p>"
    $str = do_shortcode( $str );

    return apply_filters( 'kwtf_addp', $str );
  }

  /**
   * Retrieve all tweets from a twitter account
   *
   * @since 1.0
   */
  private function get_tweets( $username, $count = 5, $date_sep = '@', $date = TRUE, $retweets = FALSE ) {
    $json = file_get_contents( 'http://api.twitter.com/1/statuses/user_timeline.json?include_entities=true&include_rts='.$retweets.'&screen_name='.$username.'&count='.$count.'' );

    $tweets_json = json_decode( $json );
    $tweets = array();

    foreach ( $tweets_json as $tweet ) {
      $ts_date = strtotime( $tweet->created_at );
      $date_html = $this->findTime( $ts_date, '%d ' . __( 'Days', $this->plg_tdomain ) . ', %h ' . __( 'Hours', $this->plg_tdomain ) . ', %m ' . __( 'Minutes', $this->plg_tdomain ) );

      if ( ! $date_html )
      $date_html = date_i18n( 'd/m/Y H:i', $ts_date );

      if ( $date )
      $date_html =  ' ' . $date_sep . ' ' . $date_html;

      $tweets[] = $tweet->text . '<span class="date">' . $date_html . '</span>';
    }

    return $tweets;
  }

  /**
   * Find the differences between a timestamp and current time.
   *
   * Format: findTime($sometime['stamp'], '%d Days, %h Hours, %m Minutes');
   *
   * Always use plural it will auto correct on singular results.  You don't have to
   * include all %d,%m,%h you may include only one.  To get Total Hours remaining(including days)
   * use %ho.  To get Total Minutes remaining(including hours and days) use %mo.  Take a look
   * at the format I assumed to make any changes.
   *
   * @since 1.0
   */
  private function findTime($timestamp) {
    $difference = time() - $timestamp;

    if( $difference < 0 || $difference > 172800 )
    return FALSE;
    else{
       
      $mins = intval(floor($difference / 60));
      $hours = intval(floor($difference / 3600));
      $days = intval(floor($difference / 86400));

      if ( $days > 0 && $days == 1 )
      $str = __( 'Yesterday', $this->plg_tdomain );
      else if ( $hours > 0 )
      $str = $hours . ' ' . __( 'hours', $this->plg_tdomain ) . ' ' . __( 'ago', $this->plg_tdomain );
      else if ( $mins > 0 )
      $str = $mins . ' ' . __( 'minutes', $this->plg_tdomain ) . ' ' . __( 'ago', $this->plg_tdomain );
      else
      $str = '';
       
      return $str;
    }
  }

  private function get_attachment_id( $url ) {

    $dir = wp_upload_dir();
    $dir = trailingslashit($dir['baseurl']);

    if( FALSE === strpos( $url, $dir ) )
    return FALSE;

    $file = basename($url);

    $query = array(
        'post_type' => 'attachment',
        'fields' => 'ids',
        'meta_query' => array(
    array(
                'value' => $file,
                'compare' => 'LIKE',
    )
    )
    );

    $query['meta_query'][0]['key'] = '_wp_attached_file';
    $ids = get_posts( $query );

    foreach( $ids as $id )
    if( $url == array_shift( wp_get_attachment_image_src($id, 'full') ) )
    return $id;

    $query['meta_query'][0]['key'] = '_wp_attachment_metadata';
    $ids = get_posts( $query );

    foreach( $ids as $id ) {

      $meta = wp_get_attachment_metadata($id);

      foreach( $meta['sizes'] as $size => $values )
      if( $values['file'] == $file && $url == array_shift( wp_get_attachment_image_src($id, $size) ) ) {

        return $id;
      }
    }

    return FALSE;
  }



  /**
   * Private function to print the content of an array.
   *
   * @since 1.0
   */
  private function debug( $a, $die = TRUE ) {
    echo '<pre>';
    print_r($a);
    echo '</pre>';
    if ( $die )
    die;
  }

  /**
   * Create the standard set of arguments for creating new sidebar
   *
   * @param string $name The main name of sidebar
   * @param string $description (optional) Description of sidebar
   * @param string $widget_class (optional) The widget class
   * @param string $title (optional) The tag to use for the titles
   * @return array The set of arguments for creating the sidebar
   *
   * @since 1.0
   */
  private function sidebar_args( $name, $description = '', $widget_class = 'widget', $title = 'h3' )
  {
    $id = strtolower( str_replace( ' ', '-', $name ) );

    return array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => '<div id="%1$s" class="' . $widget_class . ' %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<' . $title . '>',
        'after_title' => '</' . $title . '>',
    );
  }

  /**
   * Print the url of favicon, choosed on Theme Options
   *
   * @since 1.0
   */
  private function favicon( $echo = TRUE)
  {
    $fav = $this->get_option( self::VAR_FAVICON );

    if ( $fav == ''  )
    $fav = $this->get_var( self::OPT_THEME_URI) . '/favicon.ico';

    if ( $echo)
      echo $fav;
    else return $fav;
  }

  /**
   * Print the url of logo, choosed on Theme Options
   *
   * @since 1.0
   */
  private function logo()
  {
    echo $this->get_option( self::VAR_LOGO );
  }

  /**
   * Retrieve the layout of current page, set by metabox
   *
   * @since 1.0
   */
  private function layout_page()
  {
    return $this->get_var( self::OPT_LAYOUT);
  }

  /**
   * Retrieve tag image, get from relative path on param (without slash first)
   *
   * @since 1.0
   */
  private function get_img( $relative_path, $alt = '', $class = '' ) {
    $url  = $this->get_var( self::OPT_THEME_URI) . '/' . $relative_path;
    $path = $this->get_var( self::OPT_THEME_DIR) . '/' . $relative_path;

    if ( !file_exists( $path ) )
    return;

    $class = ( $class != '' ) ? " class=\"$class\"" : '';

    if ( function_exists( 'getimagesize' ) ) {
      $img = getimagesize( $path );

      if ( $img ) {
        return "<img src=\"$url\" $img[3] alt=\"$alt\"$class />";
      }
    } else
    return "<img src=\"$url\" alt=\"$alt\"$class />";

    return '';
  }

  /**
   * Echo tag image, get from relative path on param (without slash first)
   *
   * @since 1.0
   */
  private function img( $relative_path, $alt = '', $class = '' ) {
    echo $this->get_img( $relative_path, $alt, $class );
  }

  /**
   * Generate a list of options of all icons, retrieved from a folder.
   *
   * @param string $selected The icon name to select
   * @param bool $echo If print the html output or only return it.
   * @return string The html output with all <option>
   *
   * @since 1.0
   */
  private function list_icons( $selected = '', $echo = TRUE )
  {
    $icons_name = $this->list_files_into( $this->get_var( self::OPT_THEME_DIR) . '/images/icons/set_icons/' );

    $html = '';
    foreach( $icons_name as $name_icon )
    {
      list( $icon, $ext ) = explode( '.', $name_icon );

      $html .= '<option value="' . $icon . '"' . selected( $selected, $icon, FALSE ) . '>' . $icon . '</option>' . "\n";
    }

    if( $echo ) echo $html;
    return $html;
  }

  /**
   * Retrieve and print the type and content of the slide
   *
   * @param array $slide The slide array, from the Theme Options
   * @param string $before The string before the image
   * @param string $after The string after the image
   * @param bool $container If put the image or video into a container
   * @return null
   *
   * @since 1.0
   */
  private function featured_content( $slide, $args = array() )
  {
    global $link;

    $default = array(
        'before' => '',
        'after' => '',
        'container' => TRUE,
        'video_width' => 425,
        'video_height' => 356
    );
    $args = wp_parse_args( $args, $default );

    extract($args, EXTR_SKIP);

    switch( $slide['content_type'] ) {

      case 'image' : ?>
      <?php if( $link ) : ?>
<a href="<?php echo $link_url ?>"><?php endif ?> <?php if( $container ) : ?>
  <div class="featured-image">
  <?php endif; echo $before ?>
    <img src="<?php echo $slide['image_url'] ?>"
      alt="<?php echo $slide['slide_title'] ?>" />
      <?php echo $after ?>
      <?php if( $container ) : ?>
  </div>
  <?php endif; ?> <?php if( $link ) : ?>
</a>
  <?php endif ?>
  <?php break;

case 'video' :
  list( $type, $id ) = explode( ':', $this->video_type_by_url( $slide['url_video'] ) );

  switch ( $type ) :

case 'youtube' :
  ?>
<div class="video-container">
  <div id="video-youtube-<?php echo $id ?>"></div>
</div>
<script type="text/javascript">            
                        
                        swfobject.embedSWF("http://www.youtube.com/e/<?php echo $id ?>",
                                           "video-youtube-<?php echo $id ?>", "<?php echo $video_width ?>", "<?php echo $video_height ?>", "8", null, null, { allowScriptAccess: "always", wmode: "transparent" }, { id: "video-youtube-<?php echo $id ?>-player" } );
                            
                    </script>
  <?php
  break;

case 'vimeo' :
  ?>
<div class="video-container">
  <div id="video-youtube-<?php echo $id ?>">
    <object width="<?php echo $video_width ?>"
      height="<?php echo $video_height ?>">
      <param name="allowfullscreen" value="true" />
      <param name="allowscriptaccess" value="always" />
      <param name="wmode" value="transparent" />
      <param name="movie"
        value="http://vimeo.com/moogaloop.swf?clip_id=<?php echo $id ?>&amp;server=vimeo.com&amp;color=00adef&amp;fullscreen=1" />
      <embed
        src="http://vimeo.com/moogaloop.swf?clip_id=<?php echo $id ?>&amp;server=vimeo.com&amp;color=00adef&amp;fullscreen=1"
        type="application/x-shockwave-flash" allowfullscreen="true"
        allowscriptaccess="always" width="<?php echo $video_width ?>"
        height="<?php echo $video_height ?>"></embed>
    </object>
  </div>
</div>
  <?php
  break;

  endswitch;

  break;

    }
  }

  /**
   * Retrieve the id video from youtube url
   *
   * @param string $url The video's url
   * @return string The youtube id video
   *
   * @since 1.0
   */
  private function get_yt_video_id( $url ) {
    if ( preg_match( '/http:\/\/youtu.be/', $url, $matches) ) {
      $url = parse_url($url, PHP_URL_PATH);
      $url = str_replace( '/', '', $url);
      return $url;
       
    } elseif ( preg_match( '/watch/', $url, $matches) ) {
      $arr = parse_url($url);
      $url = str_replace( 'v=', '', $arr['query'] );
      return $url;
       
    } elseif ( preg_match( '/http:\/\/www.youtube.com\/v/', $url, $matches) ) {
      $arr = parse_url($url);
      $url = str_replace( '/v/', '', $arr['path'] );
      return $url;
       
    } elseif ( preg_match( '/http:\/\/www.youtube.com\/embed/', $url, $matches) ) {
      $arr = parse_url($url);
      $url = str_replace( '/embed/', '', $arr['path'] );
      return $url;
       
    } elseif ( preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=[0-9]/)[^&\n]+|(?<=v=)[^&\n]+#", $url, $matches) ) {
      return $matches[0];
       
    } else {
      return FALSE;
    }
  }


  /**
   * Split a string from the words within the brackets
   *
   * E.G.
   * string: my title [with subtitle]
   * return: array(
   *      [title] => 'my title',
   *      [subtitle] => 'with subtitle'
   * )
   *
   * @param string $title The string to convert
   * @param string $pattern The pattern where decide how split
   * @return array An array with the two string splitted
   *
   * @since 1.0
   */
  private function split_title( $title, $pattern = '/(.*)\[(.*)\]/' )
  {
    $return = array();

    if( preg_match($pattern, $title, $t, PREG_OFFSET_CAPTURE) )
    {
      $return['title'] = $t[1][0];
      $return['subtitle'] = $t[2][0];
    }
    else
    {
      $return['title'] = $title;
      $return['subtitle'] = '';
    }

    return $return;
  }

  /**
   * Get the slides from an option of Theme Options
   *
   * @param string $option The name of option
   * @return array The array with all slides, sorted by key 'order'
   *
   * @since 1.0
   */
  private function get_slides( $option )
  {
    return $this->subval_sort( $this->get_option( $option ), 'order' );
  }

  /**
   * Detect the internet explorer version
   */
  private function ieversion() {
    preg_match('/MSIE ([0-9]\.[0-9])/',$_SERVER['HTTP_USER_AGENT'],$reg);
    if ( ! isset( $reg[1] ) )
    return -1;
    else
    return floatval( $reg[1] );
  }

  /**
   * Retrive the icon from the database and return it in a <i> tag.
   *
   * @param $icon_name
   * @param $return_tag
   * @return string
   */
  private function get_icon( $icon_name, $default = FALSE, $return_tag = FALSE ) {
    $icon = maybe_unserialize( $this->get_option( $icon_name, $default ) );

    if( !$return_tag ) {
      return $icon['icon'];
    }

    if( !empty( $icon['custom'] ) ) {
      return '<img src="' . $icon['custom'] . '" alt="'. $icon['icon'] .'" />';
    } else {
      return '<i class="' . $icon['icon'] . '"></i>';
    }
  }

  private function get_fonticon( $icon_name ) {
    return $this->get_icon( $icon_name, FALSE );
  }

  private function qtranslate_option_walk( $option ) {
    if ( is_serialized( $option ) )
    $serialized = TRUE;
    else
    $serialized = FALSE;

    $option = maybe_unserialize( $option );

    if ( is_array( $option ) ) {
      foreach ( $option as $id => $val ) {
        $option[$id] = $this->qtranslate_option_walk( $val );
      }
      if ( $serialized )
      $option = serialize($option);
    } else {
      $option = preg_replace( '/\[([a-z]{2})\]/', '<!--:$1-->', $option );
      $option = preg_replace( '/\[\/([a-z]{2})\]/', '<!--:-->', $option );
      $option = qtrans_useCurrentLanguageIfNotFoundShowAvailable($option);
    }
    return $option;
  }

  private function translate( $string ) {
    if ( ! function_exists( 'qtrans_useCurrentLanguageIfNotFoundShowAvailable' ) )
    return;

    $string = preg_replace( '/\[([a-z]{2})\]/', '<!--:$1-->', $string );
    $string = preg_replace( '/\[\/([a-z]{2})\]/', '<!--:-->', $string );
    $string = qtrans_useCurrentLanguageIfNotFoundShowAvailable($string);

    return $string;
  }

  /**
   *
   * Enter description here ...
   */
  private function get_portfolios() {
    $r = array();

    $portofolios = $this->portfolios();
    foreach ( $portofolios as $pt => $post )
    $r[ $pt ] = $post['title'];

    return $r;
  }
  
  /**
   *
   * Enter description here ...
   * @param string $pt
   */
  private function portfolio( $pt = FALSE ) {
    if ( ! $pt )
    $pt = get_post_type();

    $portfolios = $this->portfolios();
    return $portfolios[ $pt ];
  }

  /**
   * 
   * Enter description here ...
   * @param string $tax
   */
  private function is_portfolio_tax( $tax ) {
    $portfolios = $this->portfolios();

    $post_types = array_keys($portfolios);
    foreach( $post_types as $pt )
    if( sanitize_title( $portfolios[$pt]['tax'] ) == $tax )
    return TRUE;

    return FALSE;
  }

  /**
   * 
   * Enter description here ...
   * @param string $pt
   */
  private function is_portfolio_post_type( $pt = FALSE ) {
    $portfolios = $this->portfolios();

    if ( ! $pt )
    $pt = get_post_type();

    if ( isset( $portfolios[$pt] ) )
    return TRUE;

    return FALSE;
  }

  /**
   * 
   * Enter description here ...
   */
  private function get_portfolio_post_type() {
    $portfolio = $this->get_var( self::OPT_PORTFOLIO);
    $post_type = get_post_meta( get_the_ID(), '_portfolio_post_type', TRUE );

    if ( empty( $post_type ) && is_tax() ) {
      $tax = get_query_var('taxonomy');

      $post_types = array_keys($portfolio);
      foreach( $post_types as $pt )
      if( sanitize_title( $portfolio[$pt]['tax'] ) == $tax )
      return $pt;
    }

    return $post_type;
  }

  private function set_sizes_theme_option( &$image_sizes ) {
    foreach ( $image_sizes as $id => $size ) {
      $s = $this->get_option( $id );
      if ( isset( $s[self::ATTR_WIDTH] ) && ( ! empty( $s[self::ATTR_WIDTH] ) || $s[self::ATTR_WIDTH] == 0 ) && $s[self::ATTR_WIDTH] != $size[0] )
      $image_sizes[$id][0] = $s[self::ATTR_WIDTH];
      if ( isset( $s[self::ATTR_HEIGHT] ) && ( ! empty( $s[self::ATTR_HEIGHT] ) || $s[self::ATTR_HEIGHT] == 0 ) && $s[self::ATTR_HEIGHT] != $size[1] )
      $image_sizes[$id][1] = $s[self::ATTR_HEIGHT];
      if ( isset( $s[self::ATTR_CSS_ROLE] ) && ( ! empty( $s[self::ATTR_CSS_ROLE] ) || $s[self::ATTR_CSS_ROLE] == '' ) && $s[self::ATTR_CSS_ROLE] != $size[3] )
        $image_sizes[$id][3] = $s[self::ATTR_CSS_ROLE];
      if ( isset( $size[3] ) && ! empty( $size[3] ) )
      add_action( 'kwtf_custom_styles', create_function( '', "echo '$size[3] { width:".$image_sizes[$id][0]."px;height:".$image_sizes[$id][1]."px; }';" ) );
    }
  }

  /** * Different excerpt size * * @return int */
  private function excerpt_length() { return 10; }

  private function news_excerpt_length() { return 15; }

  /** * Different excerpt more text * * @return string */
  private function excerpt_more() { return '...'; }

  /** * Echo the excerpt with specific number of words * * @param int|string $limit * @param string $more_text * * @return string */
  private function excerpt( $limit = 25, $more_text = '', $echo = TRUE )
  {
    $limit_cb = create_function( '', "return $limit;" );
    $moret_cb = create_function( '', "return '$more_text';" );
    add_filter( 'excerpt_length', $limit_cb );
    add_filter( 'excerpt_more', $moret_cb );
    if ( $echo ) the_excerpt(); else return get_the_excerpt();
    remove_filter( 'excerpt_length', $limit_cb );
    remove_filter( 'excerpt_more', $moret_cb );
  }
  
  /**
   * Return icon path by filename
   *
   * @param string $icon
   * @param string $size
   *
   * @return string
   */
  private function get_url_icon($icon, $size = 32)
  {
    global $icons_name;

    $path = "/images/icons/{$icon}{$size}.png";

    if( file_exists( STYLESHEETPATH . $path ) )
      return $this->get_var( self::OPT_THEME_URI) . "/images/icons/{$icon}{$size}.png";
    else
      return $this->get_var( self::OPT_THEME_URI) . "/images/icons/{$icon}.png";
  }

  /**
   * Return post content with read more link (if needed)
   *
   * @param int|string $limit
   * @param string $more_text
   *
   * @return string
   */
  private function content( $what = 'content', $limit = 25, $more_text = '' ) {
    if ( $what == 'content' )
      $content = get_the_content();
    else if ( $what == 'excerpt' )
      $content = get_the_excerpt();

    if ( empty( $content ) ) return;
      $content = explode( ' ', $content );
    /*
     if ( count( $content ) >= $limit ) {
     array_pop( $content );
     if( $more_text != "" )
     $readmore = implode( " ", $content ) . '<a class="read-more" href="' . get_permalink() . '">' . $more_text . '</a>';
     else
     $content = implode( " ", $content ) . ' &#91;...&#93;';
     } else
     $content = implode( " ", $content );
     */
    if ( ! empty( $more_text ) ) {
      array_pop( $content );
      $more_text = '<a class="read-more" href="' . get_permalink() . '">' . $more_text . '</a>';
    }

    // split
    if ( count( $content ) >= $limit ) {
      $split_content = '';
      for ( $i = 0; $i < $limit; $i++ )
      $split_content .= $content[$i] . ' ';

      $content = $split_content . '...';
    } else {
      $content = implode( " ", $content );
    }

    // TAGS UNCLOSED
    $tags = array();
    // get all tags opened
    preg_match_all("/(<([\w]+)[^>]*>)/", $content, $tags_opened, PREG_SET_ORDER);
    foreach ( $tags_opened as $tag )
    $tags[] = $tag[2];

    // get all tags closed and remove it from the tags opened.. the rest will be closed at the end of the content
    preg_match_all("/(<\/([\w]+)[^>]*>)/", $content, $tags_closed, PREG_SET_ORDER);
    foreach ( $tags_closed as $tag )
    unset( $tags[ array_search( $tag[2], $tags ) ] );

    // close the tags
    if ( ! empty( $tags ) )
    foreach ( $tags as $tag )
    $content .= "</$tag>";

    $content = preg_replace( '/\[.+\]/', '', $content );
    $content = preg_replace( '/<img[^>]+./', '', $content ); //remove images
    $content = apply_filters( 'the_content', $content );
    $content = str_replace( ']]>', ']]&gt;', $content );

    return $content.$more_text;
  }

  // get the options from the post request
  private function post_option( $request, $default = false ) {
    if ( ! isset( $_REQUEST[ $request ] ) )
      return $default;

    return $_REQUEST[ $request ];
  }

  /**
   * @return mixed
   */
  private function select_skins_option() {
    global $yiw_theme_options, $yiw_colors;

    $selected_skin = $this->post_option( self::VAR_SELECT_SKIN );
    if( $selected_skin == '' || $selected_skin == $this->get_option( self::VAR_SELECT_SKIN ) )
    return;

    $tab = $this->get_current_tab();

    $skin_code = unserialize( base64_decode( file_get_contents( dirname(__FILE__) . '/../skins/' . $selected_skin . '.txt' ) ) );

    // esclude le opzioni che non servono alle skin
    $exclude = $this->options_of_tab( array( 'sliders', 'contact', 'sliders', 'accordions', 'sections', 'sidebars', 'general' => array( 'responsive', 'images', 'footer' ) ) );
    $exclude = array_merge( $exclude, array(
        'favicon',
        'date_format',
        'logo',
        'logo_width',
        'logo_height',
        'use_logo',
        'logo_use_description',
        'slider_unoslider_slides',
        'slider_sheeva_slides',
        'slider_elegant_slides',
        'slider_cycle_slides',
        'slider_elastic_slides'
        ) );

        $defaults = $this->get_default_options();

        foreach ( $exclude as $id )
        if ( isset( $skin_code[$id] ) )
        unset( $skin_code[$id], $defaults[$id] );

        //yiw_debug($skin_code);

        //     // the slides already existing
        //     $slides = maybe_unserialize( yiw_get_option( 'slider_'.$skin[$selected_skin]['slider_type'].'_slides' ) );
        //
        //     // if there are already some images into the slider, doesn't add the default images
        //     if ( ! empty( $slides ) )
        //         unset( $skin[$selected_skin]['slider_'.$skin[$selected_skin]['slider_type'].'_slides'] );
        //
        //     // retrieve the default color for the navigation
        //     foreach ( $yiw_colors[$skin[$selected_skin]['nav_type'].'-navigation']['options'] as $color_id => $value )
        //         $skin[$selected_skin]['colors_'.$color_id] = $value['default'];

        $skin_code = wp_parse_args( $skin_code, $defaults );
        $yiw_theme_options = wp_parse_args( $skin_code, $yiw_theme_options );

        // save the skin selected
        $this->set( self::VAR_SELECT_SKIN, $selected_skin);

        //yiw_debug( $defaults );

        $this->update_theme_options();

        $url = admin_url( 'themes.php' ) . "?page=$_GET[page]&tab=$tab&message=saved";
        $this->end_process( $url );
        die;
  }
  
  /**
   * Return the absolute position of an object
   *
   * @since 1.0
   */
  private function slide_get_style( $style ) {
    $return = '';

    foreach( $style as $p => $v ) {
      if($v!='') $return .= $p . ':' . $v . 'px;';
    }

    return $return;
  }

  /**
   * Return the brigthness of a color
   *
   * @return bool TRUE = is brigth; FALSE = is dark
   */
  private function is_bright( $hex ) {
    $hex = str_replace( '#', '', $hex );

    //break up the color in its RGB components
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));

    //do simple weighted avarage
    //
    //(This might be overly simplistic as different colors are perceived
    // differently. That is a green of 128 might be brighter than a red of 128.
    // But as long as it's just about picking a white or black text color...)
    if($r + $g + $b > 382){
      return TRUE; //bright color, use dark font
    }else{
      return FALSE; //dark color, use bright font
    }
  }

  /********************************************************/
  /*                 LayerSlider get sliders              */
  /********************************************************/

  private function layerslider_get_sliders( $addFirst = TRUE) {

    $slides = $this->get_option( self::VAR_LAYERSLIDER_SLIDES);
    $sliders = array();

    if ( $addFirst)
      $sliders[FALSE] = '';

    if ( ! is_array( $slides ) || empty( $slides ) )
      return $sliders;

    foreach ( $slides as $id => $options )
    $sliders[ $id+1 ] = 'LayerSlider #' . ($id+1);
    return $sliders;

  }

  private function get_all_fonts_user() {

    $loading = array();
    $fonts = $this->get_var( self::OPT_FONT_ROLES);
    foreach ( $fonts as $sid => $font_role ) {
      $the_ = $this->get_option( $sid );
      //         $loading[ $the_['type'] ][]['value'] = $the_[ $the_['type'] ];
      //         $loading[ $the_['type'] ][]['css'] = $font_option['css_role'];
      $loading[ $this->get_option( $sid .'_type' ) ][] = array(
            'value' => $the_,
            'css' => $font_role
      );
    }

    return $loading;
  }

  private function fonts_google_fonts() {
    $loading = $this->get_all_fonts_user();

    $output = '';

    // google font
    if ( isset( $loading[self::ATTR_GOOGLE_FONT] ) && ! empty( $loading[self::ATTR_GOOGLE_FONT] ) ) :
      foreach ( $loading[self::ATTR_GOOGLE_FONT] as $font ) {
        $gfont = $this->get_list_google_fonts( $font['value'] );
        wp_enqueue_style( sanitize_title( $gfont['font-name'] ) . '-font', $this->action_clean_url( 'http://fonts.googleapis.com/css?family=' . $gfont['css-name'] . '&subset=latin,cyrillic,greek' ) );

        $font_family = str_replace( ';', '', $gfont['font-family'] );
        $output .= "$font[css] { $font_family !important; }\n";
        $this->add_font_bodyclass( 'google-font-' . sanitize_title( $gfont['font-name'] ) );
      }
    endif;

    add_action( 'kwtf_custom_styles', create_function( '', "echo stripslashes('".addslashes($output)."');" ) );
  }

  private function fonts_web_fonts() {
    $loading = $this->get_all_fonts_user();

    $output = '';

    // web font
    if ( isset( $loading[self::ATTR_WEB_FONTS] ) && ! empty( $loading[self::ATTR_WEB_FONTS] ) ) :
      foreach ( $loading[self::ATTR_WEB_FONTS] as $font ) {
        $output .= "$font[css] { font-family: $font[value] !important; }\n";
      }
    endif;

    add_action( 'kwtf_custom_styles', create_function( '', "echo stripslashes('".addslashes($output)."');" ) );
  }

  /**
   * @return array
   */
  private function list_cufon_fonts()
  {
    $folder = $this->get_var( self::OPT_THEME_DIR ) . '/fonts/';

    $files = $fonts = array();

    $files = $this->list_files_into( $folder );

    foreach ( $files as $file ) {
      $file = preg_replace( '/(.*).font.(.*)/', '$1', $file );
      $fonts[$file] = ucfirst( str_replace( '_', ' ', $file ) );
    }

    return $fonts;
  }

  private function add_font_bodyclass( $class ) {
    add_filter( 'body_class', create_function( '$classes', '$classes[] = \'' . $class . '\'; return $classes;' ) );
  }

  private function list_google_fonts() {
    $fonts = $this->get_list_google_fonts();

    $r = array();
    foreach ( $fonts as $the_ )
      $r[ $the_['font-name'] ] = $the_['font-name'];

    return $r;
  }

  private function get_list_google_fonts( $font_name = false ) {
    $fonts = array();

    $fontsJson = file_get_contents( $this->get_var( self::OPT_THEME_DIR) . '/google-fonts.txt' );
    $google_fonts = json_decode($fontsJson);

    foreach ( $google_fonts->items as $font ) {
      if ( preg_match( '/(.*):(.*)/', $font->family ) )
        list( $fname, $args ) = explode( ':', $font->family );
      else
        $fname = $font->family;
      $fonts[] = array( 'font-family' => "font-family: '$fname', sans-serif", 'font-name' => $fname, 'css-name' => str_replace( ' ', '+', $font->family ) );
    }

    $fonts = apply_filters( 'kwtf_google_fonts', $fonts );

    // ritorna uno specifico font, se questi è specificato in parametro
    if ( $font_name != false ) {
      foreach ( $fonts as $key => $font )
        foreach ( $font as $t => $val )
          if ( $font_name == $val )
            return $fonts[$key];
      return '';
    }

    return $fonts;
  }

  private function list_standard_fonts() {
    $standard_fonts = array(
      "Arial, Helvetica, sans-serif" => "Arial, Helvetica, sans-serif",
      "'Arial Black', Gadget, sans-serif" => "'Arial Black', Gadget, sans-serif",
      "'Bookman Old Style', serif" => "'Bookman Old Style', serif",
      "'Calibri', sans-serif" => "'Calibri', sans-serif",
      "'Cambria', 'Times New Roman', serif" => "'Cambria', 'Times New Roman', serif",
      "'Century Gothic',verdana,arial,helvetica,sans-serif" => "'Century Gothic',verdana,arial,helvetica,sans-serif",
      "'Comic Sans MS', cursive" => "'Comic Sans MS', cursive",
      "Courier, monospace" => "Courier, monospace",
      "'Courier New', Courier, monospace" => "'Courier New', Courier, monospace",
      "Garamond, serif" => "Garamond, serif",
      "Georgia, serif" => "Georgia, serif",
      "Impact, Charcoal, sans-serif" => "Impact, Charcoal, sans-serif",
      "'Lucida Console', Monaco, monospace" => "'Lucida Console', Monaco, monospace",
      "'Lucida Sans Unicode', 'Lucida Grande', sans-serif" => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif",
      "'MS Sans Serif', Geneva, sans-serif" => "'MS Sans Serif', Geneva, sans-serif",
      "'MS Serif', 'New York', sans-serif" => "'MS Serif', 'New York', sans-serif",
      "'Palatino Linotype', 'Book Antiqua', Palatino, serif" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif",
      "Symbol, sans-serif" => "Symbol, sans-serif",
      "Tahoma, Geneva, sans-serif" => "Tahoma, Geneva, sans-serif",
      "'Times New Roman', Times, serif" => "'Times New Roman', Times, serif",
      "'Trebuchet MS', Helvetica, sans-serif" => "'Trebuchet MS', Helvetica, sans-serif",
      "Verdana, Geneva, sans-serif" => "Verdana, Geneva, sans-serif",
      "Webdings, sans-serif" => "Webdings, sans-serif",
      "Wingdings, 'Zapf Dingbats', sans-serif" => "Wingdings, 'Zapf Dingbats', sans-serif"
    );

    return apply_filters( 'kwtf_web_standard_fonts', $standard_fonts );
  }

  // scale: 0 = black, 765 = white
  // $hex_color = color to change
  // $hex_pattern = base color
  // $default = default color
  private function compareColor ( $hex_color, $hex_pattern, $default )
  {
    if ( $hex_color == $hex_pattern )
      return $hex_color;

    $hex_color = str_replace( '#', '', $hex_color );
    $hex_pattern = str_replace( '#', '', $hex_pattern );
    $default = str_replace( '#', '', $default );

    $dec1 = hexdec( $hex_color );
    $dec2 = hexdec( $hex_pattern );
    $dec_default = hexdec( $default );

    $diff = $dec1 - $dec_default;

//     echo "
// hex_color: $hex_color;
// hex_pattern: $hex_pattern;
// default: $default;
//
// dec_color: $dec1;
// dec_pattern: $dec2;
// dec_default: $dec_default;\n\n";
//
//     echo "diff: $diff;\n\n";

    $new_dec = $dec2 + $diff;

    return '#'  . str_pad( dechex( $new_dec ), 2, '0', 0 );
  }

  /**
   * Decide if you can show the slider
   *
   * @return string
   *
   * @since 1.0
   */
  private function can_show_slider() {
    if ( !strpos( $_SERVER[ 'SCRIPT_FILENAME' ], 'index.php' ) )
      return false;

    global $wp_query;
    $can = (bool) ( ! $wp_query->is_posts_page && ( is_page() || is_home() ) );
    if ( apply_filters( 'kwtf_when_show_the_slider', $can ) )
      return true;
    else
      return false;
  }

  /**
   * Get the type of the slider set in the db.
   *
   * @return string
   *
   * @since 1.0
   */
  private function slider_type() {
    global $post;

    $slider_type = $this->get_var( self::OPT_SLIDER_TYPE);
    if ( $slider_type )
      return $slider_type;

    $slider = '';

    if ( isset( $post->ID ) )
      $slider = get_post_meta( $post->ID, '_slider_type', true );

    if ( empty( $slider ) && isset( $post->ID ) && is_page() && ! is_front_page() ) {
      $slider = get_post_meta( $post->ID, 'slider_type', true );
    } else if ( empty( $slider ) || is_home() )
      $slider = $this->get_option( self::VAR_SLIDER_TYPE);

    if ( empty( $slider ) )
      $slider = self::ATTR_NONE;

    $this->set_var( self::OPT_SLIDER_TYPE, $slider);
    return $slider;
  }

  /**
   * Inizialize the slider.
   *
   * @since 1.0.0
   */
  private function slider_init() {
    $slides = $this->slider_get_slides();
    // Retrieve all slides of the slider
    $this->set_var( self::OPT_SLIDER_SLIDES, $slides);

    // Retrieve number of elements of the slider
    $this->set_var( self::OPT_SLIDER_LENGHT, empty( $slides ) ? 0 : count( $slides ));
  }

  /**
   * Get the slides from an option of Theme Options
   *
   * @return array The array with all slides, sorted by key 'order'
   *
   * @since 1.0
   */
  private function slider_get_slides()
  {
    $option = sprintf( $this->get_var( self::OPT_SLIDER_ID), $this->slider_type() );
    return $this->subval_sort( $this->get_option( $option ), 'order' );
  }

  /**
   * Check if the slider if empty, that haven't any element inside.
   *
   * @return bool true = the slider is empty, false = the slider have elements
   *
   * @since 1.0
   */
  private function slider_is_empty() {
    if ( ! $this->get_var( self::OPT_SLIDER_LENGHT) )
      return true;
    else
      return false;
  }

  /**
   * Check if there is slides yet and increment the index and update the $current_slide
   * attribute, with current slide arguments.
   *
   * This function is used in the loop, to generate the markup of slider, on the main code.
   *
   * @return mixed The array with all slides, sorted by key 'order' (it can return FALSE, if is empty or if the slider is in the end)
   *
   * @since 1.0
   */
  private function slider_have_slide() {
    // if the slider is empty, return false
    if ( $this->is_empty() )
      return false;

    // if the current index is major of the number of elements of the slider, return false to stop the loop
    if ( $this->get_var( self::OPT_SLIDER_INDEX) > $this->get_var( self::OPT_SLIDER_LENGHT)-1 )
      return false;

    $slides = $this->get_var( self::OPT_SLIDER_SLIDES);
    $this->set_var( self::OPT_SLIDER_CURRENT_SLIDE, $slides[ $this->get_var( self::OPT_SLIDER_INDEX) ]);
    $this->set_var( self::OPT_SLIDER_INDEX, $this->get_var( self::OPT_SLIDER_INDEX)+1);

    // retrieve the links of the slide, if there are.
    $this->slider_links_slider();

    // continue the element showing
    return true;
  }

  /**
   * Retrieve the parameter of the current slide.
   *
   * @since 1.0.0
   *
   * @param string $var Parameter name.
   */
  private function slider_the( $var, $args = array(), $bool = FALSE ) {
    $args[ self::ATTR_ECHO] = true;
    $val = $this->slider_get( $var, $args );

    if ( $bool )
      echo ! $val ? 'false' : 'true';
    else
      echo $val;
  }

  /**
   * Retrieve the parameter of the current slide.
   *
   * @since 1.0.0
   *
   * @param string $var Parameter name.
   */
  private function slider_get( $var, $args = array() ) {
    $default = array(
      'before' => '',
      'after' => '',
      'container' => true,
      'video_width' => 425,
      'video_height' => 356
    );
    $args = wp_parse_args( $args, $default );

    $output = '';
    $slide = stripslashes_deep( $this->get_var( self::OPT_SLIDER_CURRENT_SLIDE) );

    switch ( $var ) {

      case 'title' :
        $slide['slide_title'] = apply_filters( 'kwtf_slide_title', $slide['slide_title'] );
        $the_ = $this->split_title( $slide['slide_title'] );
        $output = $this->get_var( self::OPT_SLIDER_A_BEFORE) . $the_['title'] . $this->get_var( self::OPT_SLIDER_A_AFTER);
        break;

      case 'subtitle' :
        $slide['slide_title'] = apply_filters( 'kwtf_slide_subtitle', $slide['slide_title'] );
        $the_ = $this->split_title( $slide['slide_title'] );
        $output = $the_['subtitle'];
        break;

      case 'content' :
        $slide['tooltip_content'] = apply_filters( 'kwtf_slide_content', $slide['tooltip_content'] );
        $content_slide = do_shortcode( $slide['tooltip_content'] );
        $content_slide = wpautop( $content_slide );
        $output = $content_slide . $this->slider_get_more_text();
        break;

      case 'clean-content' :
        $slide['tooltip_content'] = apply_filters( 'kwtf_slide_clean', $slide['tooltip_content'] );
        $output = $slide['tooltip_content'];
        break;

      case 'image-url' :
      case 'image_url' :
        $image_url = $slide['image_url'];

        if ( preg_match( '/attachment_id=([0-9]+)/', $image_url, $new_image_url ) )
          list( $image_url, $width, $height ) = wp_get_attachment_image_src( $new_image_url[1], 'full' );

        $image_url = apply_filters( 'kwtf_slide_image', $image_url );
        $output = $image_url;
        break;

      case 'featured-content' :
        $featured_args = apply_filters( 'kwtf_slide_featured', $args );
        $featured_args['echo'] = false;
        $output = $this->slider_featured_content( $featured_args );
        break;

      case 'style-image' :
        $output = array(
          'top'    => $slide['slide_image_position_top'],
          'bottom' => $slide['slide_image_position_bottom'],
          'left'   => $slide['slide_image_position_left'],
          'right'  => $slide['slide_image_position_right']
        );
        break;

      case 'style-text' :
        $output = array(
          'top'    => $slide['slide_text_position_top'],
          'bottom' => $slide['slide_text_position_bottom'],
          'left'   => $slide['slide_text_position_left'],
          'right'  => $slide['slide_text_position_right']
        );
        break;

      default :
        if ( isset( $slide[$var] ) )
          $output = apply_filters( 'kwtf_slide_default', $slide[$var] );
        else
          $output = $this->get_option( 'slider_' . $this->slider_type() . '_' . $var, '' );
        break;

    }

    return $output;
  }

  /**
   * Retrieve the links of the slide, set from Theme Options, for the sliders
   *
   * @since 1.0
   */
  private function slider_links_slider()
  {
    $slide = $this->get_var( self::OPT_SLIDER_CURRENT_SLIDE);

    if ( ! isset( $slide['link_type'] ) )
      return;

    switch( $slide['link_type'] )
    {
      case 'page':
        $this->set_var( self::OPT_SLIDER_IS_A_LINK, TRUE);
        $this->set_var( self::OPT_SLIDER_URL, get_permalink( $slide['link_page'] ));
        break;

      case 'category':
        $this->set_var( self::OPT_SLIDER_IS_A_LINK, TRUE);
        $theCatId = get_category_by_slug( $slide['link_category'] );
        $this->set_var( self::OPT_SLIDER_URL, get_category_link( $theCatId->term_id ));
        break;

      case 'url':
        $this->set_var( self::OPT_SLIDER_IS_A_LINK, TRUE);
        $this->set_var( self::OPT_SLIDER_URL, esc_url( $slide['link_url'] ));
        break;

      case 'none':
        $this->set_var( self::OPT_SLIDER_IS_A_LINK, FALSE);
        $this->set_var( self::OPT_SLIDER_URL, '');
        break;
    }

    if ( $this->get_var( self::OPT_SLIDER_IS_A_LINK) ) {
      $this->set_var( self::OPT_SLIDER_A_BEFORE, '<a href="' . $this->get_var( self::OPT_SLIDER_URL) . '">');
      $this->set_var( self::OPT_SLIDER_A_AFTER, '</a>');
    } else {
      $this->set_var( self::OPT_SLIDER_A_BEFORE, '');
      $this->set_var( self::OPT_SLIDER_A_AFTER, '');
    }
  }

  /**
   * Get the more text link.
   *
   * @return null
   *
   * @since 1.0
   */
  private function slider_get_more_text() {
    $more_text = $this->get_option( sprintf($this->get_var( self::OPT_SLIDER_SHOW_MORE_TEXT) , $this->slider_type()) );
    if( ! empty( $more_text ) AND $this->get_var( self::OPT_SLIDER_IS_A_LINK) )
      $more_text = " <a href=\"" . $this->get_var( self::OPT_SLIDER_URL) . "\" class='read-more'>" . $this->get_option( sprintf($this->get_var( self::OPT_SLIDER_MORE_TEXT) , $this->slider_type()) ) . "</a>";
    else
      $more_text = '';

    return $more_text;
  }

  /**
   * Retrieve and print the type and content of the slide
   *
   * @return null
   *
   * @since 1.0
   */
  private function slider_featured_content( $args = array(), $container = FALSE, $echo = FALSE )
  {
    $default = array(
      'container' => true,
      'before' => '',
      'after' => '',
      'video_width' => 425,
      'video_height' => 356,
      'echo' => true
    );
    $args = wp_parse_args( $args, $default );

    extract($args, EXTR_SKIP);

    $slide = $this->get_var( self::OPT_SLIDER_CURRENT_SLIDE);
    $link = $this->get_var( self::OPT_SLIDER_IS_A_LINK);
    $link_url = $this->get_var( self::OPT_SLIDER_URL);
    $a_before = $this->get_var( self::OPT_SLIDER_A_BEFORE);
    $a_after = $this->get_var( self::OPT_SLIDER_A_AFTER);
    $before = '';
    $after = '';

    $output = $attr = '';

    $output .= $before;

    switch( $slide['content_type'] ) {

      case 'image' :
        if( $container )
          $output .= '<div class="featured-image">';

        if ( function_exists( 'getimagesize' ) ){
          $uploads = wp_upload_dir();
          $image_url = $this->slider_get('image_url');
          $slide['image_path'] = str_replace( $uploads['baseurl'], $uploads['basedir'], $image_url );
          if ( file_exists( $slide['image_path'] ) )
            list($width, $height, $type, $attr) = getimagesize( $slide['image_path'] );
        }

        if ( isset( $slide['slide_title'] ) )
          $alt = $slide['slide_title'];
        else
          $alt = '';

        $output .= $a_before . '<img src="' . $image_url . '" ' . $attr . ' alt="' . strip_tags( $alt ) . '" />' . $a_after;

        if( $container )
          $output .= '</div>';
        break;

      case 'video' :
        list( $type, $id ) = explode( ':', $this->video_type_by_url( $slide['url_video'] ) );

        switch ( $type ) :

          case 'youtube' :
            $output .= '<div class="video-container">' . do_shortcode( "[youtube width=\"$video_width\" height=\"$video_height\" video_id=\"$id\"]" ) . '</div>';
//                         $output .= '
//                         <div class="video-container">
//                             <div id="video-youtube-' . $id . '"></div>
//                         </div>
//                         <script type="text/javascript">
//
//                             swfobject.embedSWF("http://www.youtube.com/e/' . $id . '",
//                                                "video-youtube-' . $id . '", "' . $video_width . '", "' . $video_height . '", "8", null, null, { allowScriptAccess: "always", wmode: "transparent" }, { id: "video-youtube-' . $id . '-player" } );
//
//                         </script>';

            break;

          case 'vimeo' :
            $output .= '<div class="video-container">' . do_shortcode( "[vimeo width=\"$video_width\" height=\"$video_height\" video_id=\"$id\"]" ) . '</div>';
//                         $output .= '
//                         <div class="video-container">
//                             <div id="video-vimeo-' . $id . '"></div>
//                         </div>
//                         <script type="text/javascript">
//
//                             swfobject.embedSWF("http://vimeo.com/moogaloop.swf?clip_id=' . $id . '&amp;server=vimeo.com&amp;color=00adef&amp;fullscreen=1",
//                                                "video-vimeo-' . $id . '", "' . $video_width . '", "' . $video_height . '", "8", null, null, { allowScriptAccess: "always", wmode: "transparent" }, { id: "video-youtube-' . $id . '-player" } );
//
//                         </script>';

            break;

        endswitch;

        break;

    }

    $output .= $after . "\n";

    if ( $echo )
      echo $output;
    else
      return $output;
  }

  /**
   * Get the classes of the slide element
   *
   * @return string
   *
   * @since 1.0
   */
  private function slider_slide_class( $class = '', $echo = true ) {
    $classes = array();
    if ( $this->get_var( self::OPT_SLIDER_INDEX) == 1 )
      $classes[] = 'first';

    if ( $this->get_var( self::OPT_SLIDER_INDEX) == $this->get_var( self::OPT_SLIDER_LENGHT) )
      $classes[] = 'last';

    $classes[] = 'slide-' . $this->get_var( self::OPT_SLIDER_INDEX);

    if ( ! empty( $class ) )
      $classes[] = $class;

    $slide = $this->get_var( self::OPT_SLIDER_CURRENT_SLIDE);
    $classes[] = $slide['content_type'] . '-content-type';

    $output = ' class="' . implode( ' ', $classes ) . '"';
    if ( $echo )
      echo $output;
    else
      return $output;
  }

  /**
   * Overloads isAndroid() | isAndroidtablet() | isIphone() | isIpad() | isBlackberry() | isBlackberrytablet() | isPalm() | isWindowsphone() | isWindows() | isGeneric() through isDevice()
   *
   * @param string $name
   * @param array $arguments
   * @return bool
   */
  private function mobile_is_device($name)
  {
    if ( array_key_exists( $name, $this->get_var( self::OPT_MOBILE_DEVICES))) {
      return $this->_mobile_is_device( $name);
    } else {
      trigger_error("Method $name not defined", E_USER_WARNING);
    }
  }

  /**
   * @param string $device
   * @return bool|mixed
   */
  private function _mobile_is_device($device)
  {
    $devices = $this->get_var( self::OPT_MOBILE_DEVICES);
    $return = $this->get_var( $device) === NULL ? (bool) preg_match("/" . $devices[$device] . "/i", $this->get_var( self::OPT_USER_AGENT)) : $this->get_var( $device);
    if ($device != $this->get_var( self::OPT_IS_GENERIC) && $return == TRUE) {
      $this->set_var( self::OPT_IS_GENERIC, FALSE);
    }

    return $return;
  }

  /**
   * Returns true if any type of mobile device detected, including special ones
   * @return bool
   */
  private function isMobile()
  {
    return $this->get_var( self::OPT_IS_MOBILE);
  }

  /**
   * Return Labels Post
   *
   * @return array
   */
  private function label($singular_name, $name, $title = FALSE)
  {
    if( !$title )
      $title = $name;

    return array(
      "name" => $title,
      "singular_name" => $singular_name,
      "add_new" => __("Add New", $this->plg_tdomain),
      "add_new_item" => sprintf( __( "Add New %s", $this->plg_tdomain ), $singular_name),
      "edit_item" => sprintf( __( "Edit %s", $this->plg_tdomain ), $singular_name),
      "new_item" => sprintf( __( "New %s", $this->plg_tdomain), $singular_name),
      "view_item" => sprintf( __( "View %s", $this->plg_tdomain), $name),
      "search_items" => sprintf( __( "Search %s", $this->plg_tdomain), $name),
      "not_found" => sprintf( __( "No %s found", $this->plg_tdomain), $name),
      "not_found_in_trash" => sprintf( __( "No %s found in Trash", $this->plg_tdomain), $name),
      "parent_item_colon" => ""
    );
  }

  /**
   * Return Labels Post
   *
   * @return array
   */
  private function label_tax($singular_name, $name)
  {
    return array(
      'name' => $name,
      'singular_name' => $singular_name,
      'search_items' => sprintf( __( 'Search %s', $this->plg_tdomain ), $name),
      'all_items' => sprintf( __( 'All %s', $this->plg_tdomain ), $name),
      'parent_item' => sprintf( __( 'Parent %s', $this->plg_tdomain ), $singular_name),
      'parent_item_colon' => sprintf( __( 'Parent %s:', $this->plg_tdomain ), $singular_name),
      'edit_item' => sprintf( __( 'Edit %', $this->plg_tdomain ), $singular_name),
      'update_item' => sprintf( __( 'Update %s', $this->plg_tdomain ), $singular_name),
      'add_new_item' => sprintf( __( 'Add New %s', $this->plg_tdomain ), $singular_name),
      'new_item_name' => sprintf( __( 'New %s Name', $this->plg_tdomain ), $singular_name),
      'menu_name' => $name,
    );
  }

  /**
   * @param bool $first_empty
   * @return array
   */
  private function sidebars_dropdown_array( $first_empty = true ) {
    global $wp_registered_sidebars;

    $return = array();

    if ( $first_empty )
      $return = array( '' => '' );

    foreach ( $wp_registered_sidebars as $the_ )
      $return[ $the_['name'] ] = $the_['name'];

    return $return;
  }

  /**
   * SIZES
   */

// shop small
  function shop_small_w() { global $woocommerce; return $woocommerce->get_image_size('shop_catalog_image_width'); }
  function shop_small_h() { global $woocommerce; return $woocommerce->get_image_size('shop_catalog_image_height'); }
// shop thumbnail
  function shop_thumbnail_w() { global $woocommerce; return $woocommerce->get_image_size('shop_thumbnail_image_width'); }
  function shop_thumbnail_h() { global $woocommerce; return $woocommerce->get_image_size('shop_thumbnail_image_height'); }
// shop large
  function shop_large_w() { global $woocommerce; return $woocommerce->get_image_size('shop_single_image_width'); }
  function shop_large_h() { global $woocommerce; return $woocommerce->get_image_size('shop_single_image_height'); }


  /**
   * Add a meta box to an edit form.
   *
   * @since 1.0
   *
   * @param string $id String for use in the 'id' attribute of tags.
   * @param string $title Title of the meta box.
   * @param string $page The type of edit page on which to show the box (post, page, link).
   * @param array $options_args All options to add into the metabox.
   * @param string $context The context within the page where the boxes should show ('normal', 'advanced').
   * @param string $priority The priority within the context where the boxes should show ('high', 'low').
   */
  private function register_metabox( $id, $title, $page, $options_args, $context = 'advanced', $priority = 'default', $callback_args = null ) {
    $metaboxes = $this->get_var( self::OPT_METABOXES);

    $html = '';
    foreach ( $options_args as $option_args )
      $html .= $this->get_option_of_metabox( $option_args );

    $callback = create_function( '', 'echo stripslashes( \'<div class="yiw_metaboxes">' . addslashes( $html ) . '</div>\' );' );

    $metaboxes[$id] = array(
      'title' => $title,
      'callback' => $callback,
      'page' => $page,
      'options' => $options_args,
      'context' => $context,
      'priority' => $priority,
      'callback_args' => $callback_args
    );
    $this->set_var( self::OPT_METABOXES, $metaboxes);
  }

  /**
   * Retrieve the html of option to put inside the metabox.
   *
   * @since 1.0
   *
   * @param array $args Set of arguments for generating the html option
   */
  private function get_option_of_metabox( $args ) {
    $metaboxes_options = $this->get_var( self::OPT_METABOXES_OPTIONS);

    $html = '';

    // default arguments
    $defaults = array(
      'name' => '',
      'id' => '',
      'type' => 'text',
      'desc' => '',
      'desc_location' => 'newline',
      'options' => array(),
      'text' => '',
      'std' => '',
      'hidden' => true
    );

    $args = wp_parse_args( $args, $defaults );

    if ( $args['hidden'] )
      $metapost_name = '_' . $args['id'];
    else
      $metapost_name = $args['id'];

    $post_id = ( isset( $_GET['post'] ) ) ? $_GET['post'] : false;
    $option_value = ( $post_id != FALSE ) ? get_post_meta( $post_id, $metapost_name, true ) : $args['std'];
    if ( empty( $option_value ) )
      $option_value = $args['std'];

    // get post type
    if ( !isset($_GET['post_type']) )
      $post_type = 'post';
    elseif ( in_array( $_GET['post_type'], get_post_types( array('show_ui' => true ) ) ) )
      $post_type = $_GET['post_type'];
    else
      wp_die( __('Invalid post type') );

    // save the option in the global array
    $metaboxes_options[$post_type][] = $metapost_name;

    switch ( $args['type'] ) :

      case 'paragraph' :
        $html .= $this->string_( '<p>', $args['text'], '</p>', false );
        break;

      case 'text' :
        $html .= $this->string_( '<label for="' . $metapost_name . '">', $args['name'], '</label>', false );
        $html .= '<p>';
        $html .= '<input type="text" name="' . $metapost_name . '" id="' . $metapost_name . '" value="' . $option_value . '" style="width:95%" />';
        $html .= $this->string_( '<span class="' . $args['desc_location'] . '">', $args['desc'], '</span>', false );
        $html .= '</p>';
        break;

      case 'select' :
        $html .= $this->string_( '<label for="' . $metapost_name . '">', $args['name'], '</label>', false );
        $html .= '<p>';
        $html .= '<select name="' . $metapost_name . '" id="' . $metapost_name . '">';
        foreach ( $args['options'] as $id => $value )
          $html .= '<option value="' . $id . '"' . selected( $option_value, $id, false ) . '>' . $value . '</option>';
        $html .= '</select>';
        $html .= $this->string_( '<span class="' . $args['desc_location'] . '">', $args['desc'], '</span>', false );
        $html .= '</p>';
        break;

      case 'radio' :
        $html .= $this->string_( '<label for="' . $metapost_name . '">', $args['name'], '</label>', false );
        $html .= '<p>';
        foreach ( $args['options'] as $id => $value ) {
          $html .= '<input type="radio" name="' . $metapost_name . '" id="' . $metapost_name . '_' . $id . '" value="' . $id . '"' . checked( $option_value, $id, false ) . ' />';
          $html .= '<label for="' . $metapost_name . '_' . $id . '"> ' . $value . '</label>';
        }
        $html .= $this->string_( '<span class="' . $args['desc_location'] . '">', $args['desc'], '</span>', false );
        $html .= '</p>';
        break;

      case 'checkbox' :
        $html .= '<p>';
        $html .= '<input type="checkbox" name="' . $metapost_name . '" id="' . $metapost_name . '" value="1"' . checked( $option_value, 1, false ) . ' />';
        $html .= $this->string_( '<label for="' . $metapost_name . '"> ', $args['name'], '</label>', false );
        $html .= $this->string_( '<span class="' . $args['desc_location'] . '">', $args['desc'], '</span>', false );
        $html .= '</p>';
        break;

      case 'textarea' :
        $html .= $this->string_( '<label for="' . $metapost_name . '">', $args['name'], '</label>', false );
        $html .= '<p>';
        $html .= '<textarea name="' . $metapost_name . '" id="' . $metapost_name . '" style="width:100%;height:200px;" />'.$option_value.'</textarea>';
        $html .= $this->string_( '<span class="' . $args['desc_location'] . '">', $args['desc'], '</span>', false );
        $html .= '</p>';
        break;

      case 'sep' :
        $html .= '<hr />';
        break;

    endswitch;

    $html = apply_filters( 'kwtf_metabox_option_' . $args['type'] . '_html', $html );
    $html = apply_filters( 'kwtf_metabox_option_html', $html );
    $this->set_var( self::OPT_METABOXES_OPTIONS, $metaboxes_options );
    return $html;
  }

  /**
   * Add a options to a metaboxes.
   *
   * @since 1.0
   *
   * @param string $id String for use in the 'id' attribute of tags.
   * @param array $options_args All options to add into the metabox.
   */
  private function add_options_to_metabox( $id, $options_args ) {
    $metaboxes = $this->get_var( self::OPT_METABOXES);

    foreach( $metaboxes[$id]['options'] as $order => $option )
      $options_args[$order] = $option;

    ksort($options_args);

    $html = '';
    foreach ( $options_args as $option_args )
      $html .= $this->get_option_of_metabox( $option_args );

    $callback = create_function( '', 'echo stripslashes( \'<div class="yiw_metaboxes">' . addslashes( $html ) . '</div>\' );' );

    $metaboxes[$id]['options'] = $options_args;
    $metaboxes[$id]['callback'] = $callback;
    $this->set_var( self::OPT_METABOXES, $metaboxes);
  }

  /**
   * @param bool $addFirst
   * @return array
   */
  private function get_list_forms( $addFirst = true )
  {

    $forms = $this->get_option( self::VAR_CONTACT_FORMS, array() );

    $return = array();

    if( $addFirst )
      $return[''] = '';

    if ( empty( $forms ) )
      return $return;

    foreach( $forms as $name => $form )
      $return[ $name ] = $name;

    return $return;
  }

  /**
   * @return int|string
   */
  private function get_first_form()
  {
    foreach( $this->get_list_forms() as $id => $form )
      return $id;
  }

  /**
   * @return string
   */
  private function get_contact_form_shortcode()
  {
    $name = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN );

    return '[contact_form id="' . $name . '"]';
  }

  /**
   * Registers dynamic custom types and taxonomies
   */
  private function register_dymanics_types()
  {
    $features_tabs = $this->get_list_features_tabs();

    if ( ! is_array( $features_tabs ) || empty( $features_tabs ) )
      return;

    foreach( $features_tabs as $post_type => $name )
    {
      register_post_type(
        str_replace( ' ', '_', $post_type ),
        array(
          'description' => __('The post type for the content of accordion sliders', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          'exclude_from_search' => false,
          'show_ui' => true,
          'label' => $name,
          'supports' => array( 'title', 'editor', 'thumbnail' ),
          'public' => true,
          'show_in_nav_menus' => false,
          'capability_type' => 'post',
          'publicly_queryable' => true,
          'rewrite' => array( 'slug' => str_replace( ' ', '_', $post_type ), 'with_front' => true )
        )
      );

      //add_filter( 'manage_edit-'.$name_post_type.'_columns', 'yiw_yiw_team_edit_columns');
    }

    //flush_rewrite_rules();
  }

  /**
   * @return array
   */
  private function get_list_features_tabs()
  {

    $features_tabs = $this->get_option( self::VAR_FEATURES_TAB, array() );

    if ( empty( $features_tabs ) )
      return array();

    $return = array();

    foreach( $features_tabs as $features_tab )
      $return[ sanitize_title( $features_tab ) ] = $features_tab;

    return $return;
  }

  /**
   * @param $value
   * @param $array
   * @param string $check
   * @return mixed
   */
  private function check_if_exists( $value, $array, $check = 'value' )
  {
    $match = array();

    if ( ( $check == 'value' && ! in_array( $value, $array ) ) || ( $check == 'key' && ! isset( $array[$value] ) ) )
      return $value;
    else {
      if ( ! preg_match( '/([a-z]+)-([0-9]+)/', $value, $match ) )
        $i = 1;
      else {
        $i = intval( $match[2] ) + 1;
        $value = $match[1];
      }
      return $this->check_if_exists( $value . '-' . $i, $array, $check );
    }
  }

  /**
   * @return bool
   */
  private function _is_panel() {
    return ( isset( $_GET['page'] ) && $_GET['page'] == $this->get_var( self::OPT_SANITIZED_NAME) );
  }

  /**
   * @param $url
   * @param bool $ajax
   */
  private function end_process( $url, $ajax = false ) {
    if ( isset( $_REQUEST['section-opened'] ) )
      $url = add_query_arg( 'section_opened', str_replace( '-section', '', $_REQUEST['section-opened'] ), $url ) . '#' . $_REQUEST['section-opened'];

    if( !$ajax )
      wp_redirect( $url );
    else
      echo $url;
    die;
  }

  /**
   * @return array
   */
  private function export_theme()
  {
    global $wpdb;

    $db = array();  // all backup will be in this array
    $uploads = wp_upload_dir();
    $db['siteurl'] = site_url();
    $db['uploadsurl'] = $uploads['baseurl'];

    // retrive all values of tables
    foreach( $this->get_var( self::OPT_WPTABLES) as $table )
    {
      if( $table == 'posts' )
        $where = " WHERE post_type <> 'revision'";
      else
        $where = '';

      $db[$table] = $wpdb->get_results( "SELECT * FROM {$wpdb->$table}{$where}", ARRAY_A );
    }

    $tables = apply_filters( 'kwtf_sample_data_tables', array() );
    $tables = apply_filters( 'kwtf_sample_data_tables_export', $tables );
    if ( ! empty( $tables ) )
      foreach ( $tables as $table )
        $db[$table] = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}{$table}", ARRAY_A );

    // options
    $theme = get_option( 'stylesheet' );

    $options = array(
      $this->get_var( self::OPT_SANITIZED_NAME),
      self::ATTR_GLOBAL_SIDEBARS_WIDGETS,
      self::ATTR_GLOBAL_SHOW_ON_FRONT,
      self::ATTR_GLOBAL_PAGE_ON_FRONT,
      self::ATTR_GLOBAL_PAGE_FOR_POSTS,
      self::ATTR_GLOBAL_WIDGET . '%',
      self::ATTR_GLOBAL_THEME_MODS . '%'
    );
    $options = apply_filters( 'kwtf_sample_data_options', $options );
    $options = apply_filters( 'kwtf_sample_data_options_export', $options );

    $sql_options = array();
    foreach ( $options as $option ) {
      if ( strpos( $option, '%' ) !== FALSE )
        $operator = 'LIKE';
      else
        $operator = '=';
      $sql_options[] = "option_name $operator '$option'";
    }

    $sql_options = implode( ' OR ', $sql_options );

    $sql = "SELECT blog_id, option_name, option_value, autoload FROM {$wpdb->options} WHERE $sql_options;";

    $db['options'] = $wpdb->get_results( $sql, ARRAY_A );

    //array_walk_recursive( $db, 'yiw_convert_url', 'in_export' );
    //yiw_debug($db['options']);

    $info['content'] = gzcompress( base64_encode( serialize( $db ) ), 9 );
    $info['filename'] = get_option('template') . '_export_' . time() . '.gz';

    return $info;
  }

  /**
   * @return bool
   */
  private function import_theme()
  {
    global $wpdb;

    if( !isset( $_FILES['import-file'] ) )
      wp_die( __( "The file you have insert doesn't valid.", $this->get_var( self::OPT_PLUGIN_TDOMAIN) ) );

    set_time_limit(0);

    switch ( substr( $_FILES['import-file']['name'], -3 ) ) {

      case 'xml' :
        $error = __( sprintf( "The file you have insert is a WordPress eXtended RSS (WXR) file. You need to use this into the %s admin page to import this file. Here only <b>.gz</b> file are allowed.", '<a href="'.admin_url( 'import.php', false ).'">'.__( 'Tools -> Import', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ).'</a>' ), $this->get_var( self::OPT_PLUGIN_TDOMAIN) );
        $this->set_var( self::OPT_OPTION_ERROR_MESSAGE, $error);
        return;

      case 'zip' :
      case 'rar' :
        $error = __( sprintf( "The file you have insert is a ZIP or RAR file, that it doesn't allowed in this case. Here only <b>.gz</b> file are allowed.", '<a href="'.admin_url( 'import.php', false ).'">'.__( 'Tools -> Import', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ).'</a>' ), $this->get_var( self::OPT_PLUGIN_TDOMAIN) );
        $this->set_var( self::OPT_OPTION_ERROR_MESSAGE, $error);
        return;
    }

    if ( substr( $_FILES['import-file']['name'], -2 ) != 'gz' ) {
      $error = __( sprintf( "The file you have insert is not a valid file. Here only <b>.gz</b> file are allowed.", '<a href="'.admin_url( 'import.php', false ).'">'.__( 'Tools -> Import', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ).'</a>' ), $this->get_var( self::OPT_PLUGIN_TDOMAIN) );
      $this->set_var( self::OPT_OPTION_ERROR_MESSAGE, $error);
      return;
    }

    // get db encoded
    $content_file = file_get_contents( $_FILES['import-file']['tmp_name'] );

    $db = unserialize( base64_decode( gzuncompress( $content_file ) ) );
    $url_from = array( 'siteurl' => $db['siteurl'], 'uploadsurl' => $db['uploadsurl'] );

    $param = array(
      'type' => 'in_import',
      'url_from' => $url_from
    );
    array_walk_recursive( $db, array( $this, 'convert_url'), $param );
    //yiw_debug($db);

    if( !is_array( $db ) )
      wp_die( __( 'An error encoured during during import. Please try again.', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ) );

    // tables
    foreach( $this->get_var( self::OPT_WPTABLES) as $table )
    {
      $this->string_( '<p></p><p><strong>', '// ' . $table, '</strong><br />' );

      // delete all row of each table
      $wpdb->query( "TRUNCATE TABLE {$wpdb->$table}" );
      $this->string_( '', sprintf( __( 'Truncated %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->$table ), '...<br />' );

      // insert new data
      $error_data = array();
      foreach( $db[$table] as $id => $data )
      {
        if( $wpdb->insert( $wpdb->$table, $data ) )
          $insert = true;
        else
          $insert = false;

        // save the ID that has error, to show.
        if( !$insert )
          $error_data[] = $id;
      }

      if( $insert )
        $this->string_( '', sprintf( __( 'Insert new values into %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->$table ), '...</p>' );
      else
        $this->string_( '', sprintf( __( 'Error during insert new values (IDs: %s), in %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), implode( $error_data, ' ' ), $wpdb->$table ), '...</p>' );
    }

    $tables = apply_filters( 'kwtf_sample_data_tables', array() );
    $tables = apply_filters( 'kwtf_sample_data_tables_import', $tables );
    if ( ! empty( $tables ) )
      foreach ( $tables as $table ) {
        $this->string_( '<p></p><p><strong>', '// ' . $table, '</strong><br />' );

        // delete all row of each table
        $wpdb->query( "TRUNCATE TABLE {$wpdb->prefix}{$table}" );
        $this->string_( '', sprintf( __( 'Truncated %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->prefix . $table ), '...<br />' );

        // insert new data
        $error_data = array();
        foreach( $db[$table] as $id => $data )
        {
          if( $wpdb->insert( $wpdb->prefix . $table, $data ) )
            $insert = true;
          else
            $insert = false;

          // save the ID that has error, to show.
          if( !$insert )
            $error_data[] = $id;
        }

        if( $insert )
          $this->string_( '', sprintf( __( 'Insert new values into %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->prefix . $table ), '...</p>' );
        else
          $this->string_( '', sprintf( __( 'Error during insert new values (IDs: %s), in %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), implode( $error_data, ' ' ), $wpdb->prefix . $table ), '...</p>' );
      }

    $this->string_( '<p></p><p><strong>', '// options', '</strong><br />' );

    // delete options
    $theme = get_option( 'stylesheet' );

    $options = array(
      $this->get_var( self::OPT_SANITIZED_NAME),
      self::ATTR_GLOBAL_SIDEBARS_WIDGETS,
      self::ATTR_GLOBAL_SHOW_ON_FRONT,
      self::ATTR_GLOBAL_PAGE_ON_FRONT,
      self::ATTR_GLOBAL_PAGE_FOR_POSTS,
      self::ATTR_GLOBAL_WIDGET . '%',
      self::ATTR_GLOBAL_THEME_MODS . '%'
    );
    $options = apply_filters( 'kwtf_sample_data_options', $options );
    $options = apply_filters( 'kwtf_sample_data_options_import', $options );

    $sql_options = array();
    foreach ( $options as $option ) {
      if ( strpos( $option, '%' ) !== FALSE )
        $operator = 'LIKE';
      else
        $operator = '=';
      $sql_options[] = "option_name $operator '$option'";
    }

    $sql_options = implode( ' OR ', $sql_options );

    $sql = "DELETE FROM {$wpdb->options} WHERE $sql_options;";

    if( $wpdb->query( $sql ) )
      $this->string_( '', sprintf( __( 'Deleted value from %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->options ), '...<br />' );
    else
      $this->string_( '', sprintf( __( 'Error during deleting from %s table (SQL: %s)', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->options, $sql ), '...<br />' );


    // update options
    $error_data = array();
    foreach( $db['options'] as $id => $option )
    {
      if( $wpdb->insert( $wpdb->options, $option ) )
        $insert = true;
      else
        $insert = false;

      // save the ID that has error, to show.
      if( !$insert )
        $error_data[] = $id;
    }

    if( $insert )
      $this->string_( '', sprintf( __( 'Insert new values, into %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $wpdb->options ), '...</p>' );
    else
      $this->string_( '', sprintf( __( 'Error during insert new values (IDs: %s), into %s table', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), implode( $error_data, ' ' ), $wpdb->options ), '...</p>' );

    echo '</p>';

    return true;
  }

  /**
   *
   */
  private function minicart( $echo = TRUE) {
    global $woocommerce;

    // quantity
    $qty = 0;
    if (sizeof($woocommerce->cart->get_cart())>0) : foreach ($woocommerce->cart->get_cart() as $item_id => $values) :

      $qty += $values['quantity'];

    endforeach; endif;

    if ( $qty == 1 )
      $label = __( 'item', $this->get_var( self::OPT_PLUGIN_TDOMAIN) );
    else
      $label = __( 'items', $this->get_var( self::OPT_PLUGIN_TDOMAIN) );

    $result = '<a class="widget_shopping_cart trigger" href="' . $woocommerce->cart->get_cart_url() . '">
			<span class="minicart">' . $qty . ' ' . $label . ' </span>
		</a>';

    if ( $echo)
      echo $result;
    else
      return $result;
  }

  /**
   * @param mixed $var
   * @param string $mode
   * @param mixed $val
   * @return mixed
   */
  private function ensure_shop( $var = TRUE, $mode = self::ATTR_WOOCOMMERCE, $val = TRUE){
    if ( $var !== TRUE) $var = $this->get_option( $var);
    if ( $val === TRUE)
      return (bool)( $this->get_var( self::OPT_SHOP_MODE) === $mode && $var );
    else
      return (bool)( $this->get_var( self::OPT_SHOP_MODE) === $mode && $var === $val);

  }

  /**
   * @param mixed $var
   * @param mixed $val
   * @return mixed
   */
  private function ensure_woo( $var = TRUE, $val = TRUE){
    return $this->ensure_shop( $var, self::ATTR_WOOCOMMERCE, $val);
  }

  /**
   * @param mixed $var
   * @param mixed $val
   * @return mixed
   */
  private function ensure_jigo( $var = TRUE, $val = TRUE){
    return $this->ensure_shop( $var, self::ATTR_JIGOSHOP, $val);
  }

  /**
   * @param $dir
   */
  private function destroy( $dir )
  {
    $mydir = opendir( $dir );

    while( false !== ( $file = readdir( $mydir ) ) ) {

      if( $file != "." && $file != ".." ) {

        chmod( $dir . $file, 0777 );

        if( is_dir( $dir . $file ) ) {
          chdir( '.' );
          destroy( $dir . $file . '/' );
          rmdir( $dir . $file ) or die( "couldn't delete $dir$file<br />" );
        }
        else
          unlink( $dir . $file ) or die( "couldn't delete $dir$file<br />" );
      }
    }
    closedir( $mydir );
  }

  // get the options from the post request
  /**
   * @param $request
   * @param $args
   * @param bool $default
   * @return bool
   */
  private function is_post_option( $request, $args = array()) {
    if ( ! array_key_exists( $request, $args) && !isset( $args[$request]) ){
      return FALSE;
    }
    return TRUE;
  }

  /**
   * @param $url
   * @param $dir
   * @param null $file_name
   * @return bool
   */
  private function downloadRemoteFile( $url, $dir, $file_name = NULL )
  {
    if( $file_name == NULL )
      $file_name = basename( $url );

    $url_stuff = parse_url( $url );
    $port = isset( $url_stuff['port'] ) ? $url_stuff['port'] : 80;

    $fp = fsockopen( $url_stuff['host'], $port );
    if( !$fp )
      return false;

    $query  = 'GET ' . $url_stuff['path'] . " HTTP/1.0\n";
    $query .= 'Host: ' . $url_stuff['host'];
    $query .= "\n\n";

    fwrite( $fp, $query );

    $buffer = '';
    while ( $tmp = fread( $fp, 8192 ) )
      $buffer .= $tmp;

    preg_match( '/Content-Length: ([0-9]+)/', $buffer, $parts );
    $file_binary = substr( $buffer, - $parts[1] );

    if( $file_name == NULL )
    {
      $temp = explode( ".", $url );
      $file_name = $temp[ count( $temp ) - 1 ];
    }

    $file_open = fopen( dirname( $dir ) . "/" . $file_name, 'w' );

    if( !$file_open )
      return false;

    fwrite( $file_open, $file_binary );
    fclose( $file_open );

    return true;
  }

// generate the css roles for customizable colors
  private function custom_css_roles( $type ) {

    $roles = array();

    switch ( $type ) :

      case 'colors' :
        $roles = $this->get_var( self::OPT_COLOR_ROLES);
        break;

      case 'fonts' :
        $roles = $this->get_var( self::OPT_SIZES_ROLES);
        break;

    endswitch;

    $css = '';
    foreach ( $roles as $sid => $patterns ) {
      $aroles = array();
      $value = $this->get_option($sid);
      if ( !is_array( $patterns))  $patterns = array( $patterns);
      foreach ( $patterns as $pattern )
        $aroles[] = sprintf( $pattern . "\n", $value);
      $css .= implode( ' ', $aroles );
    }

    echo $css;
  }

  // Get the remote XML file contents and return its data (Version and Changelog)
  // Uses the cached version if available and inside the time interval defined
  private function get_latest_theme_version($interval) {
    $notifier_file_url = $this->get_var( self::OPT_NOTIFIER_XML_FILE);
    $last = $this->get_option( self::VAR_NOTIFIER_CACHE_LAST_UPDATE );
    $now = time();
    // check the cache
    if ( !$last || (( $now - $last ) > $interval) ) {
      // cache doesn't exist, or is old, so refresh it
      if( function_exists('curl_init') ) { // if cURL is available, use it...
        $ch = curl_init($notifier_file_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $cache = curl_exec($ch);
        curl_close($ch);
      } else {
        $cache = @file_get_contents($notifier_file_url); // ...if not, use the common file_get_contents()
      }

      if ($cache) {
        // we got good results
        $this->set( self::VAR_NOTIFIER_CACHE, $cache );
        $this->set( self::VAR_NOTIFIER_CACHE_LAST_UPDATE, time() );
      }
      // read from the cache file
      $notifier_data = $this->get_option( self::VAR_NOTIFIER_CACHE );
    }
    else {
      // cache file is fresh enough, so read from it
      $notifier_data = $this->get_option( self::VAR_NOTIFIER_CACHE );
    }

    // Let's see if the $xml data was returned as we expected it to.
    // If it didn't, use the default 1.0.0 as the latest version so that we don't have problems when the remote server hosting the XML file is down
    if( strpos((string)$notifier_data, '<notifier>') === false ) {
      $notifier_data = file_get_contents( $this->get_var( self::OPT_THEME_DIR) . '/default.xml' );
    }

    // Load the remote XML data into a variable and return it
    $xml = @simplexml_load_string($notifier_data);

    return $xml;
  }

  // NO NEED EDIT
  private function send_email()
  {
    $messages = $attachments = array();
    $qstr = '';

    if ( isset( $_POST['kwtf_bot'] ) && ! empty( $_POST['kwtf_bot'] ) )
      return;

    if ( isset( $_POST['kwtf_action'] ) AND ( $_POST['kwtf_action'] == 'sendemail' OR $_POST['kwtf_action'] == 'sendemail-ajax' ) )
    {
      $form = str_replace( '_', '-', $_POST['id_form'] );

      $fields = $this->get_option( self::VAR_CONTACT_FORMS );
      $fields = $fields[$form];

      // body
      $body = ( empty($fields[self::ATTR_CONTACT_FORM_BODY]))? "%message%<br /><br /><small><i>This email is been sent by %name% (email. %email%).</i></small>":$fields[self::ATTR_CONTACT_FORM_BODY];
      $body = nl2br( $body);

      $referer = $_POST['kwtf_referer'];

      $union_qstr = ( $qstr == '' ) ? '?' : '';

      $reply_to = '';

      // to
      $to = ( empty($fields[self::ATTR_CONTACT_FORM_TO]))? get_option( 'admin_email' ):$fields[self::ATTR_CONTACT_FORM_TO];


      // from
      $from_email = ( empty($form[self::ATTR_CONTACT_FORM_FROM_EMAIL]))? get_option( 'admin_email' ):$fields[self::ATTR_CONTACT_FORM_FROM_EMAIL];
      $from_name = ( empty($fields[self::ATTR_CONTACT_FORM_FROM_NAME]))? 'Admin ' . get_bloginfo( 'name' ):$fields[self::ATTR_CONTACT_FORM_FROM_NAME];

      // subject
      $subject = ( empty($fields[self::ATTR_CONTACT_FORM_SUBJECT]))? 'Admin ' . __( sprintf( 'Email without subject from site %s.', get_bloginfo('name') ), $this->get_var( self::OPT_PLUGIN_TDOMAIN) ):$fields[self::ATTR_CONTACT_FORM_SUBJECT];

      $success_msg = ( empty($fields[self::ATTR_CONTACT_FORM_SUCCESS_SENDING]))? __( 'Email sent correctly!', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ):$fields[self::ATTR_CONTACT_FORM_SUCCESS_SENDING];
      $error_msg = ( empty($fields[self::ATTR_CONTACT_FORM_ERROR_SENDING]))? __( 'An error has been encountered. Please try again.', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ):$fields[self::ATTR_CONTACT_FORM_ERROR_SENDING];
      $post_data = array_map( 'stripslashes_deep', $_POST['kwtf_contact'] );
      foreach( $fields[self::ATTR_CONTACT_FORM_FIELDS] as $c => $field )
      {
        $id = $field['data_name'];
        $var = $post_data[$id];

        // validate, adding message error, set up on admin panel, if var is not valid.
        if ( ( isset( $field['required'] ) AND $var == '' ) OR ( isset( $field['email_validate'] ) AND !is_email( $var ) ) )
          $messages[$form][$id] = stripslashes( $field['msg_error'] );

        // if reply to
        if ( isset( $field['reply_to'] ) AND $field['reply_to'] == 'yes' )
          $reply_to = $var;

        // convert \n to <br>
        if ( isset( $field['type'] ) AND $field['type'] == 'textarea' )
          $var = nl2br( $var );

        ${$id} = $var;

        // replace tags of body config
        $body       = str_replace( "%$id%", $var, $body );
        $to         = str_replace( "%$id%", $var, $to );
        $from_email = str_replace( "%$id%", $var, $from_email );
        $from_name  = str_replace( "%$id%", $var, $from_name );
        $subject    = str_replace( "%$id%", $var, $subject );

        // add link to email, if it is ad email, for body email.
        if ( is_email( $var ) )
          $var = '<a href="mailto:' . $var . '">' . $var . '</a>';
      }

      // if there are attachments
      if( isset( $_FILES['kwtf_contact']['tmp_name'] ) )
      {
        foreach( $_FILES['kwtf_contact']['tmp_name'] as $id => $a_file )
        {
          $new_path = WP_CONTENT_DIR . '/uploads/' . basename( $_FILES['kwtf_contact']['name'][$id] );
          move_uploaded_file( $a_file, $new_path );
          $attachments[] = $new_path;
        }
      }

      // set content type
      add_filter( 'wp_mail_from', create_function( '$from', "return '$from_email';" ) );
      add_filter( 'wp_mail_from_name', create_function( '$from', "return '$from_name';" ) );

      // if there ware some errors, return messages.
      if( !empty( $messages ) )
        return $messages;

      // all header, that will be print with implode.
      $headers = array();

      if( $reply_to != FALSE )
        $headers[] = 'Reply-To: ' . $reply_to;

      if ( wp_mail( $to, $subject, $body, implode( $headers, "\r\n" ), $attachments ) ) {
        $messages[$form]['general'] = '<p class="success">' . $success_msg . '</p>';
        do_action( 'kwtf_sendmail_success' );
      } else
        $messages[$form]['general'] = '<p class="error">' . $error_msg . '</p>';

      return $messages;
    }
  }

  /**
   * @param $form
   * @param bool $echo
   * @return mixed|null|string
   */
  private function module( $form, $echo = true )
  {
    $fields = $this->get_option( self::VAR_CONTACT_FORMS );
    if( !isset($fields[$form]) OR !is_array( $fields[$form] ) OR empty( $fields[$form] ) )
      return null;
    $fields = $fields[$form];

    $message = $this->get_var( self::OPT_EMAIL_MESSAGE);

    //echo '<pre>', print_r($fields), '</pre>';

    $html = '<form id="contact-form-' . $form . '" class="contact-form" method="post" action="' . $this->curPageURL() . '" enctype="multipart/form-data">' . "\n\n";

    // div message feedback
    $html .= "\t<div class=\"usermessagea\">" . $this->module_general_message_of( $form, false ) . "</div>\n";

    $html .= "\t<fieldset>\n\n";
    $html .= "\t\t<ul>\n\n";

    // array with all messages for js validate
    $js_messages = array();

    foreach( $fields[self::ATTR_CONTACT_FORM_FIELDS] as $id => $field )
    {
      // classes
      $input_class = array();   // array for print input's classes
      $li_class = array( $field['type'] . '-field' );    // array for print li's classes

      // errors
      $error_msg = '';
      $error = false;
      $js_messages[ $field['data_name'] ] = $field['msg_error'];

      if( isset( $message[$form][ $field['data_name'] ] ) )
      {
        $error = TRUE;
        $error_msg = $message[$form][ $field['data_name'] ];
      }

      // li class
      if( $field['class'] != '' )
        $li_class[] = " $field[class]";

      if( $error )
        array_push( $input_class, 'icon', 'error' );

      $html .= "\t\t\t<li class=\"" . implode( $li_class, ' ' ) . "\">\n";

      $html .= "\t\t\t\t<label for=\"$field[data_name]-$form\">\n";

      $html .= $this->string_( "\t\t\t\t\t" . '<span class="label">', $this->filter_bloginfo( stripslashes_deep( $field['title'] ), 'highlight-text' ), '</span>' . "\n", false );
      $html .= $this->string_( "<br />\t\t\t\t\t" . '<span class="sublabel">', stripslashes_deep( $field['description'] ), '</span><br />' . "\n", false );

      $html .= "\t\t\t\t</label>\n";

      // if required
      if( isset( $field['required'] ) AND $field['required'] == 'yes' )
        $input_class[] = 'required';

      if( isset( $field['email_validate'] ) AND $field['email_validate'] == 'yes' )
        $input_class[] = 'email-validate';

      // retrive value
      if( isset( $field['data_name'] ) && $error )
        $value = $this->get_value( $field['data_name'] );
      else if ( isset( $_GET[ $field['data_name'] ] ) )
        $value = $_GET[ $field['data_name'] ];
      else
        $value = '';

      // only for clean code
      $html .= "\t\t\t\t";

      // print type of input
      switch( $field['type'] )
      {
        // text
        case 'text':
          $html .= "<input type=\"text\" name=\"kwtf_contact[" . $field['data_name'] . "]\" id=\"" . $field['data_name'] . "-$form\" class=\"" . implode( $input_class, ' ' ) . "\" value=\"$value\" />";
          break;

        // checkbox
        case 'checkbox':
          $checked = '';

          if( $value != '' AND $value )
            $checked = ' checked="checked"';
          else if( $field['already_checked'] == 'yes' )
            $checked = ' checked="checked"';

          $html .= "<input type=\"checkbox\" name=\"kwtf_contact[" . $field['data_name'] . "]\" id=\"" . $field['data_name'] . "-$form\" value=\"1\" class=\"" . implode( $input_class, ' ' ) . "\"{$checked} />";
          $html .= ' ' . $field['label_checkbox'];
          break;

        // select
        case 'select':
          $html .= "<select name=\"kwtf_contact[" . $field['data_name'] . "]\" id=\"" . $field['data_name'] . "-$form\">\n";

          // options
          foreach( $field['option'] as $id => $option )
          {
            $selected = '';
            if( $field['option_selected'] == $id )
              $selected = ' selected="selected"';

            $html .= "\t\t\t\t\t\t<option value=\"$option\"$selected>$option</option>\n";
          }

          $html .= "\t\t\t\t\t</select>";
          break;

        // textarea
        case 'textarea':
          $html .= "<textarea name=\"kwtf_contact[" . $field['data_name'] . "]\" id=\"" . $field['data_name'] . "-$form\" rows=\"8\" cols=\"30\" class=\"" . implode( $input_class, ' ' ) . "\">$value</textarea>";
          break;

        // radio
        case 'radio':
          // options
          foreach( $field['option'] as $i => $option )
          {
            $selected = '';
            if( $field['option_selected'] == $i )
              $selected = ' checked=""';

            $html .= "\t\t\t\t\t\t<input type=\"radio\" name=\"kwtf_contact[{$field[data_name]}]\" id=\"{$field[data_name]}-$form-$i\" value=\"$option\"$selected /> $option<br />\n";
          }
          break;

        // password
        case 'password':
          $html .= "<input type=\"password\" name=\"kwtf_contact[{$field[data_name]}]\" id=\"{$field[data_name]}-$form\" class=\"" . implode( $input_class, ' ' ) . "\" value=\"$value\" />";
          break;

        // file
        case 'file':
          $html .= "<input type=\"file\" name=\"kwtf_contact[{$field[data_name]}]\" id=\"{$field[data_name]}-$form\" class=\"" . implode( $input_class, ' ' ) . "\" />";
          break;
      }

      // only for clean code
      $html .= "\n";

      $html .= "\t\t\t\t<div class=\"msg-error\">" . $error_msg . "</div>\n";

      $html .= "\t\t\t</li>\n";
    }

    $submt_lbl = ( empty($fields[self::ATTR_CONTACT_FORM_SUBMIT_LABEL]))? __( 'send message', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ):$fields[self::ATTR_CONTACT_FORM_SUBMIT_LABEL];
    $submt_alg = ( empty($fields[self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT]))? __( 'alignright', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ):$fields[self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT];
    $html .= "\t\t\t<li class=\"submit-button\">\n";
    $html .= "\t\t\t\t<input type=\"text\" name=\"kwtf_bot\" id=\"kwtf_bot\" />\n";
    $html .= "\t\t\t\t<input type=\"hidden\" name=\"kwtf_action\" value=\"sendemail\" id=\"kwtf_action\" />\n";
    $html .= "\t\t\t\t<input type=\"hidden\" name=\"kwtf_referer\" value=\"" . $this->curPageURL() . "\" />\n";
    $html .= "\t\t\t\t<input type=\"hidden\" name=\"id_form\" value=\"" . str_replace( '-', '_', $form ) . "\" />\n";
    $html .= "\t\t\t\t<input type=\"submit\" name=\"kwtf_sendemail\" value=\"" . $submt_lbl . "\" class=\"sendmail " . $submt_alg . "\" />";
    $html .= "\t\t\t</li>\n";

    $html .= "\t\t</ul>\n\n";
    $html .= "\t</fieldset>\n";
    $html .= "</form>\n\n";

    // messages for javascript validation
    $html .= "<script type=\"text/javascript\">\n";
    $html .= "\tvar messages_form_" . str_replace( '-', '_', $form ) . " = {\n";

    foreach( $js_messages as $id => $msg )
      $html .= "\t\t$id: \"$msg\",\n";

    // remove last comma
    $html = str_replace( "\t\t$id: \"$msg\",\n", "\t\t$id: \"$msg\"\n", $html );

    $html .= "\t};\n";
    $html .= "</script>";

    if( $echo )
      echo $html;

    return $html;
  }

  /**
   * @param $id
   * @return string
   */
  private function get_value( $id )
  {
    return ( isset( $_POST['kwtf_contact'][$id] ) ) ? $_POST['kwtf_contact'][$id] : '';
  }

  /**
   * @param $form
   * @param bool $echo
   * @return string
   */
  private function module_general_message_of( $form, $echo = true )
  {
    $message = $this->get_var( self::OPT_EMAIL_MESSAGE);

    $return = '';
    if ( isset( $message[$form]['general'] ) )
      $return = $message[$form]['general'];

    if ( $echo )
      echo $return;

    return $return;
  }

  /**
   * @param $title
   * @param $subtitle
   * @param array $fields
   * @param null $c_field
   */
  private function fields_contact_form( $title, $subtitle, $fields = array(), $c_field = NULL){
    //ob_clean();
    $dir = $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) . '/'
      . $this->get_var( self::OPT_NAME) . '/contact_add';
    $view = View::factory( $dir);
    $view->tpl_tdomain = $this->get_var( self::OPT_TPL_TDOMAIN);
    $view->title = __( $title, $this->get_var( self::OPT_TPL_TDOMAIN) );
    $view->subtitle = __( $subtitle, $this->get_var( self::OPT_TPL_TDOMAIN) );
    $attrs = array(
      'title' => '',
      'data_name' => '',
      'description' => '',
      'type' => '',
      'option' => '',
      'option_selected' => '',
      'already_checked' => '',
      'label_checkbox' => '',
      'msg_error' => '',
      'required' => '',
      'email_validate' => '',
      'reply_to' => '',
      'class' => ''
    );
    $fields = wp_parse_args( $fields, $attrs );
    $types = array(
      'text' => 'Text Input',
      'checkbox' => 'Checkbox',
      'select' => 'Select',
      'textarea' => 'Text Area',
      'radio' => 'Radio Input',
      'password' => 'Password Field',
      'file' => 'File Upload'
    );
    $view->fields = $fields;
    $view->type_options  = $this->list_option( $types, $fields['type'], FALSE );
    $view->c_field = $c_field;
    echo $view;
    die;
  }

  /**
   * @param $template
   */
  private function bind_template( $template){
    $search = array( EXT, '/', '\\', '-');
    $replace = array( '', '_', '_', '_');
    if ( $this->ensure_woo())
      $template = str_replace( 'woocommerce', '', $template);
    $template = trim( $template, '\\/');
    $_template_name = str_replace( $search, $replace, $template);
    $slug = 'get_template_part_' . $_template_name;
    add_action( $slug, array( $this, 'include__initialize'), self::ATTR_HIGH_PRIORITY, 2);
    do_action( $slug, $_template_name, $template);
  }

  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::_initialize()
   */
  protected function _initialize($file){
    parent::_initialize($file);
    if ( $this->isActive( ))
    {
      do_action( 'kwtf_initialize_theme');
    }
    else
      add_action( 'switch_theme', array( $this, 'action_switch_theme'), self::ATTR_PRIORITY, 2);
  }

  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::isActive()
   */
  protected function isActive(){
    if ( $this->theme_status !== self::ATTR_UNDEFINED)
    return ($this->theme_status === self::ATTR_ACTIVE);

    $this->set_var( self::OPT_THEMES_ROOT, WP_PLUGIN_DIR  .
      $this->get_var( self::OPT_THEMES_ROOT) .
      $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) );
    register_theme_directory( $this->get_var( self::OPT_THEMES_ROOT));
    $dir = get_template_directory();
    $this->theme_status = ($dir === $this->get_var( self::OPT_THEMES_ROOT)
      . '/' . $this->get_var( self::OPT_NAME) )
      ? self::ATTR_ACTIVE : self::ATTR_NOTACTIVE;
    $result = ( $this->theme_status === self::ATTR_ACTIVE) ? TRUE : FALSE;
    return $result;
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::activate()
   */
  protected function activate()
  {
    $id = wp_insert_post(array(
      'post_title'  => __('Portfolio', $this->plg_tdomain),
      'post_status' => 'publish',
      'post_author' => 1,
      'post_type'   => self::ATTR_POST_TYPE_PORTFOLIO
    ));

    add_post_meta($id, '_portfolio_type', self::ATTR_3COLORS);
    add_post_meta($id, '_portfolio_item', '');
    add_post_meta($id, '_portfolio_read_more', __('view project »', $this->plg_tdomain));
    add_post_meta($id, '_portfolio_rewrite', 'work');
    add_post_meta($id, '_portfolio_label_sin', __('Work', $this->plg_tdomain));
    add_post_meta($id, '_portfolio_label_plu', __('Works', $this->plg_tdomain));
    add_post_meta($id, '_portfolio_tax', __('Category project', $this->plg_tdomain));
    add_post_meta($id, '_portfolio_tax_rewrite', __('category-project', $this->plg_tdomain));

    $temp = $this->get_var( self::OPT_OPTION_DEFAULTS);
    $temp[self::VAR_DEFAULT_PORTFOLIOS_PID] = $id;
    $this->set_var( self::OPT_OPTION_DEFAULTS, $temp);
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::deactivate()
   */
  protected function deactivate(){
    $pid = $this->get_option( self::VAR_DEFAULT_PORTFOLIOS_PID);
    wp_delete_post( $pid);
  }

  protected function block_options( View $template, $sid){
    $template->uri_theme = $this->get_var( self::OPT_THEME_URI);
    switch($sid){
      case self::ATTR_BLOCK_GENERAL_SETTINGS:
        $template->options_layout = array(
          self::ATTR_STRETCHED            => __( 'Stretched', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOXED                => __( 'Boxed', $this->get_var( self::OPT_PLUGIN_TDOMAIN)));
        $template->options_topbar  = array(
          self::ATTR_STATIC               => __( 'Static text', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TWITTER              => __( 'Last tweets', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_color = array(
          self::ATTR_COLOR_UNIT           => __( 'Color Unit', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BG_IMAGE             => __( 'Image', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_repeate = array(
          self::ATTR_REPEATE              => __( 'Repeat', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_REPEATE_HORIZONTALLY => __( 'Repeat Horizontally', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_REPEATE_VERTICALLY   => __( 'Repeat Vertically', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_NO_REPEATE           => __( 'No Repeat', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $template->options_position = array(
          self::ATTR_CENTER               => __( 'Center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_LEFT             => __( 'Top left', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_RIGHT            => __( 'Top right', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_CENTER           => __( 'Top center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_CENTER        => __( 'Bottom center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_LEFT          => __( 'Bottom left', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_RIGHT         => __( 'Bottom right', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_methods = array(
          self::ATTR_POST                 => __( 'Post', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_GET                  => __( 'Get', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_footer = array(
          self::ATTR_CENTERED              => __( 'Centered Footer', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BIG_NORMAL            => __( 'Big Footer + Two Columns', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BIG_CENTERED          => __( 'Big Footer + Centered', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_NORMAL                => __( 'Two Columns Footer', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $template->options_product = array(
          self::ATTR_RIBBON                => __( 'Ribbon', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TRADITIONAL           => __( 'Traditional', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_title = array(
          self::ATTR_INSIDE_THUMB          => __( 'Inside the thumbnail', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BELOW_THUMB           => __( 'Below the thumbnail', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_layout_shop = array(
          self::ATTR_SIDEBAR_LEFT          => __( 'Sidebar left', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SIDEBAR_RIGHT         => __( 'Sidebar right', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SIDEBAR_NO            => __( 'No sidebar', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $template->options_blog_type = array(
          self::ATTR_BIG                   => __( 'Big Thumbnail', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SMALL                 => __( 'Small Thumbnail', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_ELEGANT               => __( 'Elegant', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $option_cats = get_categories('orderby=name&use_desc_for_title=1&hierarchical=1&style=0&hide_empty=0');
        $template->option_cats = (empty($option_cats))?array():$option_cats;
        $template->options_thumb = array(
          self::ATTR_LIGHTBOX              => __( 'Open full image in a lightbox', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_ITEM_PAGE             => __( 'Go to item single page', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_NOTHING               => __( 'Don\'t do nothing', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $template->options_skin = array(
          self::ATTR_PP_DEFAULT            => __( 'Default', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FACEBOOK              => __( 'Facebook', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_LIGHT_ROUNDED         => __( 'Light rounded', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_DARK_ROUNDED          => __( 'Dark rounded semi-transparent', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_LIGHT_SQUARE          => __( 'Light square', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_DARK_SQUARE           => __( 'Dark square semi-transparent', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        break;
      case self::ATTR_BLOCK_SLIDERS_SETTINGS :
        $template->sliders = $this->get_var( self::OPT_SLIDERS);
        $template->option_responsive = array(
          self::ATTR_LEAVE                => __( 'Leave the slider', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_REMOVE               => __( 'Remove the slider', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FIXED_IMAGE          => __( 'Replace with "Fixed Image"', $this->get_var( self::OPT_PLUGIN_TDOMAIN))
        );
        $template->options_effect = $this->get_var( self::OPT_CYCLE_FXS);
        $template->options_easing = $this->get_var( self::OPT_EASINGS);
        $template->options_position = array(
          self::ATTR_TOP                  => __( 'Top', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_BOTTOM               => __( 'Bottom', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_LEFT                 => __( 'Left', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_RIGHT                => __( 'Right', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        );
        $template->options_thumb = array(
          self::ATTR_H_SLIDE              => __( 'hslide', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_V_SLIDE              => __( 'vslide', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FADE                 => __( 'fade', $this->get_var( self::OPT_PLUGIN_TDOMAIN))
        );
        $template->layer_sliders = $this->layerslider_get_sliders();
        $template->options_nivo_efect = array(

          self::ATTR_RANDOM               => __( 'Random', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FADE                 => __( 'Fade', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FOLD                 => __( 'Fold', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_themes_unoslider = array(
          self::ATTR_BASIC                => __( 'Basic', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_ELEGANT              => __( 'Elegant', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_INLINE               => __( 'Inline', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_LIGHT                => __( 'Light', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_MINIMALIST           => __( 'Minimalist', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_MODERN               => __( 'Modern', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_PANEL                => __( 'Panel', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_RIBBON               => __( 'Ribbon', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_STICK                => __( 'Slick', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SMOOTH               => __( 'Smooth', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SQUARE               => __( 'Square', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TEXT                 => __( 'Text', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_animations = $this->get_var( self::OPT_UNOSLIDER_ANIMATIONS);
        $template->options_transitions = array(
          self::ATTR_GROW                 => __( 'grow', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SWAP                 => __( 'swap', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_STRETCH              => __( 'stretch', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SQUEEZE              => __( 'squeeze', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SHRINK               => __( 'shrink', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SLIDE_IN             => __( 'slide_in', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SLIDE_OUT            => __( 'slide_out', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_DROP                 => __( 'drop', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_APPEAR               => __( 'appear', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FLASH                => __( 'flash', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_FADE                 => __( 'fade', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_variation = array(
          self::ATTR_TOPLEFT              => __( 'topleft', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOPRIGHT             => __( 'topright', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOMLEFT           => __( 'bottomleft', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOMRIGHT          => __( 'bottomright', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_unoslider_pattern = array(
          self::ATTR_DIAGONAL             => __( 'diagonal', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_HORIZONTAL           => __( 'horizontal', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_VERTICAL             => __( 'vertical', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_RANDOM               => __( 'random', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_SPIRAL               => __( 'spiral', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_HORIZONTAL_ZIGZAG    => __( 'horizontal_zigzag', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_VERTICAL_ZIGZAG      => __( 'vertical_zigzag', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_CHESS                => __( 'chess', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_EXPLODE              => __( 'explode', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_IMPLODE              => __( 'implode', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_EXAMPLE              => __( 'example', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_direction = $template->options_position;
        $template->options_direction[ self::ATTR_CENTER] = __( 'Center', $this->get_var( self::OPT_PLUGIN_TDOMAIN));
        $template->options_elastic_animation = array(
          self::ATTR_SIDES                => __( 'Sides', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_CENTER               => __( 'Center', $this->get_var( self::OPT_PLUGIN_TDOMAIN) )
        );
        $slides = $this->get_option( sprintf( $this->get_var( self::OPT_SLIDER_ID),
          $this->get_option( self::VAR_SLIDER_CHOOSEN)), array());
        array_push( $slides, array() );
        $template->slides = $slides;
        $configs = $this->get_var( self::OPT_SLIDER_SLIDES_CONFIG);
        $template->configs = ( array_key_exists( $this->get_option( self::VAR_SLIDER_CHOOSEN), $configs))?
          $configs[$this->get_option( self::VAR_SLIDER_CHOOSEN)] : FALSE;
        $categories = get_categories('hide_empty=0&orderby=name');
        $wp_cats = array();
        foreach ($categories as $category_list )
        {
          $wp_cats[$category_list->category_nicename] = $category_list->cat_name;
        }
        array_unshift($wp_cats, __("Choose a category", $this->get_var( self::OPT_PLUGIN_TDOMAIN)));
        $template->wp_cats = $wp_cats;
        break;
      case self::ATTR_BLOCK_COLORS_SETTINGS:

        $template->options_color = array(
          self::ATTR_COLOR_UNIT           => __( 'Color Unit', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BG_IMAGE             => __( 'Image', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_background = array(
          'custom' => __( 'Custom', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/001.jpg' => __( 'Background 1', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/002.jpg' => __( 'Background 2', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/003.jpg' => __( 'Background 3', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/004.jpg' => __( 'Background 4', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/005.jpg' => __( 'Background 5', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/006.jpg' => __( 'Background 6', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/007.jpg' => __( 'Background 7', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/008.jpg' => __( 'Background 8', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/045.jpg' => __( 'Background 45', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
  	   		'images/backgrounds/backgrounds/009.jpg' => __( 'Background 9', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/046.jpg' => __( 'Background 10', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/011.jpg' => __( 'Background 11', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/012.jpg' => __( 'Background 12', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/013.jpg' => __( 'Background 13', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/014.jpg' => __( 'Background 14', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/015.jpg' => __( 'Background 15', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/016.jpg' => __( 'Background 16', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/017.jpg' => __( 'Background 17', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/018.jpg' => __( 'Background 18', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/019.jpg' => __( 'Background 19', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/020.jpg' => __( 'Background 20', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/021.jpg' => __( 'Background 21', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/022.jpg' => __( 'Background 22', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/023.jpg' => __( 'Background 23', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/024.jpg' => __( 'Background 24', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/backgrounds/025.jpg' => __( 'Background 25', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/026.jpg' => __( 'Background 26', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/027.jpg' => __( 'Background 27', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/028.jpg' => __( 'Background 28', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/backgrounds/029.jpg' => __( 'Background 29', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/047.jpg' => __( 'Background 30', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/031.jpg' => __( 'Background 31', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/032.jpg' => __( 'Background 32', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/033.jpg' => __( 'Background 33', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/backgrounds/034.jpg' => __( 'Background 34', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/036.jpg' => __( 'Background 36', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/037.jpg' => __( 'Background 37', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/backgrounds/038.jpg' => __( 'Background 38', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/backgrounds/039.jpg' => __( 'Background 39', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/041.jpg' => __( 'Background 41', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          'images/backgrounds/backgrounds/042.jpg' => __( 'Background 42', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/043.jpg' => __( 'Background 43', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          'images/backgrounds/backgrounds/044.jpg' => __( 'Background 44', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bg_t_3.png' => __( 'Pattern 1', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bg_t_7.png' => __( 'Pattern 2', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bg_t_10.png' => __( 'Pattern 3', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/patterns/bg_t_11.png' => __( 'Pattern 4', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bgNoiseHatch.png' => __( 'Pattern 5', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bg-page.png' => __( 'Pattern 6', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/bgStripeNoise.png' => __( 'Pattern 7', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/patterns/circle_pattern.png' => __( 'Pattern 8', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/diagonal-line1.png' => __( 'Pattern 9', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/diagonal-line2.png' => __( 'Pattern 10', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/flower_pattern.png' => __( 'Pattern 11', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/flower6_pattern.png' => __( 'Pattern 12', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/flower-swirl4.png' => __( 'Pattern 13', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/flower-swirl10.png' => __( 'Pattern 14', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/grid3.png' => __( 'Pattern 15', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/horizontal-line1.png' => __( 'Pattern 16', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/img-bg.png' => __( 'Pattern 17', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/mozaic2.png' => __( 'Pattern 18', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/patterns/pattern9.png' => __( 'Pattern 19', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/pattern10.png' => __( 'Pattern 20', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
		   		'images/backgrounds/patterns/pattern19.png' => __( 'Pattern 21', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/pixelite.png' => __( 'Pattern 22', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/right_strip_pattern.png' => __( 'Pattern 23', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
		   		'images/backgrounds/patterns/scan-lines.png' => __( 'Pattern 24', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_repeate = array(
          self::ATTR_REPEATE              => __( 'Repeat', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_REPEATE_HORIZONTALLY => __( 'Repeat Horizontally', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_REPEATE_VERTICALLY   => __( 'Repeat Vertically', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_NO_REPEATE           => __( 'No Repeat', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        );
        $template->options_position = array(
          self::ATTR_CENTER               => __( 'Center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_LEFT             => __( 'Top left', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_RIGHT            => __( 'Top right', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_TOP_CENTER           => __( 'Top center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_CENTER        => __( 'Bottom center', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_LEFT          => __( 'Bottom left', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BOTTOM_RIGHT         => __( 'Bottom right', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        );
        $template->options_atachment = array(
          self::ATTR_SCROLL               => __( 'Scroll', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_FIXED                => __( 'Fixed', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        );
        break;
      case self::ATTR_BLOCK_TYPOGRAPHY_SETTINGS:
        $template->options_font_type = array(
          self::ATTR_CUFON                => 'Cufon',
          self::ATTR_GOOGLE_FONT          => 'Google Fonts',
          self::ATTR_WEB_FONTS            => 'Web Fonts Family',
        );
        $template->cufon_fonts = $this->list_cufon_fonts();
        $template->google_fonts = $this->list_google_fonts();
        $template->standard_fonts = $this->list_standard_fonts();
        break;
      case self::ATTR_BLOCK_FLASH_SLIDER:

        $template->options_easing = $this->get_var( self::OPT_EASINGS);
        $template->options_align = array(
          self::ATTR_CENTER               => __( 'center', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_LEFT                 => __( 'left', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_RIGHT                => __( 'right', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        );
        break;
      case self::ATTR_BLOCK_CONTACT_FORMS_SETTINGS:
        $template->options_form = $this->get_list_forms();
        $template->form_shortcode = $this->get_contact_form_shortcode();
        $template->options_alignement = array(
          self::ATTR_ALIGN_LEFT           => __( 'left', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_ALIGN_RIGHT          => __( 'right', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
          self::ATTR_ALIGN_CENTER         => __( 'center', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        );
        $choosen = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
        if ( !empty($choosen)){
          $forms = $this->get_option( self::VAR_CONTACT_FORMS );
          $form = $forms[$choosen];
          $template->set($form);
        }

        break;
      case self::ATTR_BLOCK_FEATURES_SETTINGS:
        $template->features = $this->get_option( self::VAR_FEATURES_TAB);
        break;
      case self::ATTR_BLOCK_SIDEBAR_SETTINGS:
        $template->sidebars = $this->get_option( self::VAR_SIDEBARS);
        break;
      case self::ATTR_BLOCK_EXPORTIMPORT_SETTINGS:
        $template->configs = $this->get_option( self::VAR_PANEL_CONFIGS );
        $template->code = base64_encode( serialize( $this->get_option() ) );
        break;
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_add_field ( $plugin, $params){
    $this->fields_contact_form( 'Add New Field', 'Add new field for your contact module.');

  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_edit_field ( $plugin, $params){
    if ( $this->is_post_option( 'id', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $form = $forms[$choose];
      $c_field = intval($params['id']);
      $fields = $form[self::ATTR_CONTACT_FORM_FIELDS][$c_field];
      $this->fields_contact_form( 'Edit Field',
        'Edit the attributes of field.', $fields, $c_field);

    }

  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_save_field ( $plugin, $params){
    if ( $this->is_post_option( 'fields', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $form = $forms[$choose];
      if ( $params['c'] != ''){
        $form[self::ATTR_CONTACT_FORM_FIELDS][intval($params['c'])] = $params['fields'];
      }
      else{
        $form[self::ATTR_CONTACT_FORM_FIELDS][] = $params['fields'];
      }
      $forms[$choose] = $form;
      $this->set( self::VAR_CONTACT_FORMS, $forms);
    }

  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_delete_field ( $plugin, $params){
    if ( $this->is_post_option( 'key', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $form = $forms[$choose];
      array_splice( $form[self::ATTR_CONTACT_FORM_FIELDS],
        intval($params['key']), 1);
      $forms[$choose] = $form;
      $this->set( self::VAR_CONTACT_FORMS, $forms);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_array_up ( $plugin, $params){
    if ( $this->is_post_option( 'key', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $form = $forms[$choose];
      $key = intval($params['key']);
      $fields = $form[self::ATTR_CONTACT_FORM_FIELDS];
      $temp = $fields[$key-1];
      $fields[$key-1] = $fields[$key];
      $fields[$key] = $temp;
      $form[self::ATTR_CONTACT_FORM_FIELDS] = $fields;
      $forms[$choose] = $form;
      $this->set( self::VAR_CONTACT_FORMS, $forms);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_array_down ( $plugin, $params){
    if ( $this->is_post_option( 'key', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $form = $forms[$choose];
      $key = intval($params['key']);
      $fields = $form[self::ATTR_CONTACT_FORM_FIELDS];
      $temp = $fields[$key+1];
      $fields[$key+1] = $fields[$key];
      $fields[$key] = $temp;
      $form[self::ATTR_CONTACT_FORM_FIELDS] = $fields;
      $forms[$choose] = $form;
      $this->set( self::VAR_CONTACT_FORMS, $forms);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_add ( $plugin, $params){
    if( $this->is_post_option( self::ATTR_FIELD_CONTACT_FORM_ADD, $params) )
    {
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $new_form = $this->check_if_exists( $params[self::ATTR_FIELD_CONTACT_FORM_ADD] , $forms, 'key' );

      // choose form to configure
      $this->set( self::VAR_CONTACT_FORM_CHOOSEN, $new_form);

      // create fields
      $_form = array(
        self::ATTR_CONTACT_FORM_FIELDS              => array(),
        self::ATTR_CONTACT_FORM_BODY                => '',
        self::ATTR_CONTACT_FORM_ERROR_SENDING       => '',
        self::ATTR_CONTACT_FORM_FROM_EMAIL          => '',
        self::ATTR_CONTACT_FORM_FROM_NAME           => '',
        self::ATTR_CONTACT_FORM_SUBJECT             => '',
        self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT    => '',
        self::ATTR_CONTACT_FORM_SUBMIT_LABEL        => '',
        self::ATTR_CONTACT_FORM_SUCCESS_SENDING     => '',
        self::ATTR_CONTACT_FORM_TO                  => '',
      );
      // add new form
      $forms[$new_form] = $_form;
      $this->set( self::VAR_CONTACT_FORMS, $forms );

    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_delete ( $plugin, $params){
    if ( $this->is_post_option( 'key', $params)){
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      if ( array_key_exists( $params['key'], $forms))
        unset( $forms[$params['key']]);
      $this->set( self::VAR_CONTACT_FORMS, $forms);
      if ( $params['key'] === $choose)
        $this->set( self::VAR_CONTACT_FORM_CHOOSEN, NULL);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_create ( $plugin, $params){
    if( $this->is_post_option( self::ATTR_FIELD_NAME_FORM, $params) )
    {
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $new_form = $this->check_if_exists( $params[self::ATTR_FIELD_NAME_FORM] , $forms, 'key' );

      // choose form to configure
      $this->set( self::VAR_CONTACT_FORM_CHOOSEN, $new_form);

      // create fields
      $_form = array(
        self::ATTR_CONTACT_FORM_FIELDS              => $this->get_var( self::OPT_DEFAULT_CONTACT_FORM),
        self::ATTR_CONTACT_FORM_BODY                => __( "%message%\n\n<small><i>This email is been sent by %name% (email. %email%).</i></small>", $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        self::ATTR_CONTACT_FORM_ERROR_SENDING       => __( 'An error has been encountered. Please try again.', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        self::ATTR_CONTACT_FORM_FROM_EMAIL          => get_option( 'admin_email' ),
        self::ATTR_CONTACT_FORM_FROM_NAME           => 'Admin ' . get_bloginfo( 'name' ),
        self::ATTR_CONTACT_FORM_SUBJECT             => '',
        self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT    => 'alignright',
        self::ATTR_CONTACT_FORM_SUBMIT_LABEL        => __( 'send message', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        self::ATTR_CONTACT_FORM_SUCCESS_SENDING     => __( 'Email sent correctly!', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        self::ATTR_CONTACT_FORM_TO                  => get_option( 'admin_email' ),
      );
      // add new form
      $forms[$new_form] = $_form;
      $this->set( self::VAR_CONTACT_FORMS, $forms );

    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_save_config ( $plugin, $params){
    if( $this->is_post_option( self::VAR_CONTACT_FORM_CHOOSEN, $params) )
    {
      $forms = $this->get_option( self::VAR_CONTACT_FORMS);
      $choose = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN);
      // choose form to configure

      // create fields
      $forms[$choose] = array(
        self::ATTR_CONTACT_FORM_FIELDS              => $forms[$choose][self::ATTR_CONTACT_FORM_FIELDS],
        self::ATTR_CONTACT_FORM_BODY                => $params[self::ATTR_CONTACT_FORM_BODY],
        self::ATTR_CONTACT_FORM_ERROR_SENDING       => $params[self::ATTR_CONTACT_FORM_ERROR_SENDING],
        self::ATTR_CONTACT_FORM_FROM_EMAIL          => $params[self::ATTR_CONTACT_FORM_FROM_EMAIL],
        self::ATTR_CONTACT_FORM_FROM_NAME           => $params[self::ATTR_CONTACT_FORM_FROM_NAME],
        self::ATTR_CONTACT_FORM_SUBJECT             => $params[self::ATTR_CONTACT_FORM_SUBJECT],
        self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT    => $params[self::ATTR_CONTACT_FORM_SUBMIT_ALIGNMENT],
        self::ATTR_CONTACT_FORM_SUBMIT_LABEL        => $params[self::ATTR_CONTACT_FORM_SUBMIT_LABEL],
        self::ATTR_CONTACT_FORM_SUCCESS_SENDING     => $params[self::ATTR_CONTACT_FORM_SUCCESS_SENDING],
        self::ATTR_CONTACT_FORM_TO                  => $params[self::ATTR_CONTACT_FORM_TO],
      );
      $this->set( self::VAR_CONTACT_FORMS, $forms );

    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_contact_form_config ( $plugin, $params){
    if( $this->is_post_option( self::VAR_CONTACT_FORM_CHOOSEN, $params) )
    {
      $this->set( self::VAR_CONTACT_FORM_CHOOSEN, $params[self::VAR_CONTACT_FORM_CHOOSEN]);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_features_add ( $plugin, $params){
    if( $this->is_post_option( 'features_name', $params) )
    {
      $features = $this->get_option( self::VAR_FEATURES_TAB);
      $features[] = $params['features_name'];
      $this->set( self::VAR_FEATURES_TAB, $features);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_features_delete ( $plugin, $params){
    if( $this->is_post_option( 'feature', $params) )
    {
      $features = $this->get_option( self::VAR_FEATURES_TAB);
      unset($features[$params['feature']]);
      $this->set( self::VAR_FEATURES_TAB, $features);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_sidebar_add ( $plugin, $params){
    if( $this->is_post_option( 'sidebar_name', $params) )
    {
      $sidebars = $this->get_option( self::VAR_SIDEBARS);
      $sidebars[] = $params['sidebar_name'];
      $this->set( self::VAR_SIDEBARS, $sidebars);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_sidebar_delete ( $plugin, $params){
    if( $this->is_post_option( 'sidebar', $params) )
    {
      $sidebars = $this->get_option( self::VAR_SIDEBARS);
      unset($sidebars[$params['sidebar']]);
      $this->set( self::VAR_SIDEBARS, $sidebars);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_sliders_config ( $plugin, $params){
    if ($this->is_post_option( self::VAR_SLIDER_CHOOSEN, $params)){
      $this->set( self::VAR_SLIDER_CHOOSEN, $params[self::VAR_SLIDER_CHOOSEN]);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_sliders_edit ( $plugin, $params){
    if ($this->is_post_option( 'slides', $params)){
      $this->set( sprintf( $this->get_var( self::OPT_SLIDER_ID),
        $this->get_option( self::VAR_SLIDER_CHOOSEN)),
        $this->subval_sort($params['slides'], 'order'));
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_sliders_delete ( $plugin, $params){
    if ( $this->is_post_option( 'key', $params)){
      if ( $params['key'] == 'slides'){
        $this->set( sprintf( $this->get_var( self::OPT_SLIDER_ID),
          $this->get_option( self::VAR_SLIDER_CHOOSEN)), array());
      }
      else{
        $slides = $this->get_option( sprintf( $this->get_var( self::OPT_SLIDER_ID),
          $this->get_option( self::VAR_SLIDER_CHOOSEN)));
        unset( $slides[$params['key']]);
        $this->set( sprintf( $this->get_var( self::OPT_SLIDER_ID),
          $this->get_option( self::VAR_SLIDER_CHOOSEN)), $slides);
      }
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_export_theme ( $plugin, $params){
    $export = $this->export_theme();
    $export_size = strlen( $export['content'] );

    header("Content-type: application/gzip-compressed");
    header("Content-Disposition: attachment; filename=$export[filename]");
    header("Content-Length: $export_size");
    header("Content-Transfer-Encoding: binary");
    header('Accept-Ranges: bytes');

    /* The three lines below basically make the
           download non-cacheable */
    header("Cache-control: private");
    header('Pragma: private');
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

    echo $export['content'];

    die;
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_import_theme ( $plugin, $params){
    $this->import_theme();
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_export_panel ( $plugin, $params){
    if ( $this->is_post_option( self::ATTR_FIELD_NEW_CONFIGURATION, $params)){
      $configs = $this->get_option( self::VAR_PANEL_CONFIGS );

      $config_name = esc_attr( $params[self::ATTR_FIELD_NEW_CONFIGURATION] );
      $config_slug = $this->check_if_exists( sanitize_title( $config_name ), $configs, 'key' );

      $configs[$config_slug] = array(
        'name' => $config_name,
        'values' => $this->get_option()
      );
      $configs[$config_slug]['values'][self::VAR_PANEL_CONFIGS] = array();
// 				echo $config_slug;
// 				yiw_debug( $configs ); die;
       $this->set( self::VAR_PANEL_CONFIGS, $configs);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_import_panel ( $plugin, $params){
    if ( $this->is_post_option( self::ATTR_FIELD_IMPORT_CONFIGURATION, $params)){
      $options = unserialize( base64_decode( $params[self::ATTR_FIELD_IMPORT_CONFIGURATION] ) );
      $this->set('', $options);
    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_apply_panel ( $plugin, $params){
    if ( $this->is_post_option( self::ATTR_FIELD_NAME_CONFIGURATION, $params)){
      $configs = $this->get_option( self::VAR_PANEL_CONFIGS );

      if ( ! $configs )
        return;

      $config_to_apply = esc_attr( $params[ self::ATTR_FIELD_NAME_CONFIGURATION] );
      $configs[ $config_to_apply ]['values'][self::VAR_PANEL_CONFIGS] = $configs;
      $this->set( '', $configs[ $config_to_apply ]['values'] );

    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_delete_panel ( $plugin, $params){
    if ( $this->is_post_option( self::ATTR_FIELD_ID_CONFIGURATION, $params)){
      $configs = $this->get_option( self::VAR_PANEL_CONFIGS );

      $to_delete = esc_attr( $params[self::ATTR_FIELD_ID_CONFIGURATION] );
      $new_configs = array();
      foreach( $configs as $sid => $config){
        if ( $sid != $to_delete) $new_configs[$sid] = $config;
      }

      $this->set( self::VAR_PANEL_CONFIGS, $new_configs);

    }
  }

  /**
   * @param $plugin
   * @param $params
   */
  protected function button_add_shortcodes ( $plugin, $params){
    if ( $this->is_post_option('ajax', $params) ) {
      $this->fields_shortcode( $params['shortcode_id'] );
      die;
    }
    if ( $this->is_post_option( self::ATTR_FIELD_POST_ID, $params)){
      $dir = $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) . '/'
        . $this->get_var( self::OPT_NAME) . '/lightbox';
      $view = View::factory( $dir);
      $view->uri_theme = $this->get_var( self::OPT_THEME_URI);
      $view->tpl_tdomain = $this->get_var( self::OPT_TPL_TDOMAIN);
      $view->dropdown_shortcodes = $this->dropdown_shortcodes( FALSE);
      echo $view;
    }
    die;
  }

  /**
   * @return WordpressTheme
   */
  public static function getInstance(){
    return parent::getInstance();
  }

  /**
   * @param $name
   * @return void
   */
  public function template_header($name){
    set_query_var('isIpad', $this->mobile_is_device( self::OPT_IS_IPAD));
    set_query_var('responsive', $this->get_option( self::VAR_RESPONSIVE));
    set_query_var('topbar_content', $this->get_option( self::VAR_TOPBAR_CONTENT));
    set_query_var('slider_type', $this->slider_type());
    set_query_var('slider_theme', $this->get_option( self::VAR_SLIDER_UNOSLIDER_THEME));
    set_query_var('font_type', $this->get_option( self::VAR_FONT_TYPE_OPTION_ID));
    set_query_var('ieversion', $this->ieversion());
    set_query_var('favicon', $this->favicon( FALSE));
    set_query_var('use_logo', $this->get_option( self::VAR_USE_LOGO));
    set_query_var('logo', $this->get_option( self::VAR_LOGO, $uri_theme . '/images/logo.png'));
    set_query_var('logo_use_description', $this->get_option( self::VAR_LOGO_USE_DSCRIPTION));
  }

  /**
   * @param $name
   * @return void
   */
  public function template_blog( $slug, $name){

    $blog_type = $this->get_option( self::VAR_BLOG_TYPE);
    $this->set_var( self::OPT_BLOG_TYPE, $blog_type);
    set_query_var('exclude_categories', $this->get_exclude_categories());
    set_query_var('blog_type', $blog_type);
  }

  /**
   * @param $name
   * @return void
   */
  public function template_comments( $name){

  }

  /**
   * @param $name
   * @return void
   */
  public function template_extra( $slug, $name){
    switch( $name){
      case 'content':

        set_query_var('current_pagename',$this->get_current_pagename());
        break;
    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_faq( $slug, $name){

    $this->set_var( self::OPT_POST_TYPE, self::ATTR_POST_TYPE_FAQ);
    set_query_var('post_type', self::ATTR_POST_TYPE_FAQ);
  }

  /**
   * @param $name
   * @return void
   */
  public function template_footer(  $name){

    set_query_var('footer_type', $this->get_option( self::VAR_FOOTER_TYPE));
    set_query_var('copyright_text_left', $this->convertTags( $this->addp(
      stripslashes( $this->get_option( self::VAR_COPYRIGHT_TEXT_LEFT ) ) ), '', '', FALSE ));
    set_query_var('copyright_text_right', $this->convertTags($this->addp(
      stripslashes( $this->get_option( self::VAR_COPYRIGHT_TEXT_RIGHT ) ) ), '', '', FALSE ));
    set_query_var('footer_text_centered', $this->convertTags( $this->addp(
      stripslashes( $this->get_option( self::VAR_FOOTER_TEXT_CENTERED ) ) ), '', '', FALSE ));
    set_query_var('footer_rows', $this->get_option( self::VAR_FOOTER_ROWS));
    set_query_var('footer_cols', $this->get_option( self::VAR_FOOTER_COLUMNS, 1));
  }

  /**
   * @param $name
   * @return void
   */
  public function template_gallery( $slug, $name){
    $this->set_var( self::OPT_POST_TYPE, self::ATTR_POST_TYPE_GALLERY);
    set_query_var('post_type', self::ATTR_POST_TYPE_GALLERY);
    $this->set_var( self::OPT_PORTFOLIO_TYPE, self::ATTR_FILTERABLE);
    set_query_var('portfolio_type', self::ATTR_FILTERABLE);
    set_query_var('excerpt', $this->excerpt( 12, '', false ));
    set_query_var('gallery_details_icon', $this->get_option( self::VAR_GALLERY_DETAILS_ICON));
    set_query_var('gallery_show_filters', $this->get_option( self::VAR_GALLERY_SHOW_FILTERS));
  }

  /**
   * @param $name
   * @return void
   */
  public function template_home( $slug, $name){
    $blog_type = $this->get_option( self::VAR_BLOG_TYPE);
    $this->set_var( self::OPT_BLOG_TYPE, $blog_type);
    set_query_var('blog_type', $blog_type);
  }

  /**
   * @param $name
   * @return void
   */
  public function template_loop( $slug, $name){
    $blog_type = $this->get_var( self::OPT_BLOG_TYPE);
    if ( $blog_type === ''){
      $blog_type = $this->get_option( self::VAR_BLOG_TYPE);
      $this->set_var( self::OPT_BLOG_TYPE, $blog_type);
    }
    set_query_var('blog_type', $blog_type);
    set_query_var('pagination', $this->pagination( '', 10, FALSE));

    switch($name){
      case 'blog-small':
      case 'blog-elegant':
        set_query_var('blog_show_socials', $this->get_option( self::VAR_BLOG_SHOW_SOCIALS));
      case 'blog-big':
        set_query_var('blog_type', $this->get_var( self::OPT_BLOG_TYPE));
        set_query_var('blog_show_date', $this->get_option( self::VAR_BLOG_SHOW_DATE));
        set_query_var('blog_show_author', $this->get_option( self::VAR_BLOG_SHOW_AUTHOR));
        set_query_var('blog_show_categories', $this->get_option( self::VAR_BLOG_SHOW_CATEGORIES));
        set_query_var('blog_show_comments', $this->get_option( self::VAR_BLOG_SHOW_COMMENTS));
        set_query_var('blog_read_more_text', $this->get_option( self::VAR_BLOG_READ_MORE_TEXT));
        break;
      case 'internal':
        set_query_var('blog_read_more_text', $this->get_option( self::VAR_BLOG_READ_MORE_TEXT));
        set_query_var('pagination', $this->pagination( '', 10, FALSE));
        break;
      case 'portfolio':
        set_query_var('date_format', $this->get_option( self::VAR_DATE_FORMAT));
        set_query_var('pagination', $this->pagination( '', 10, FALSE));
        set_query_var('blog_read_more_text', $this->get_option( self::VAR_BLOG_READ_MORE_TEXT));
        break;
    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_single_product_related( $slug, $name){
    $this->template_archive_product( $slug, $name);
  }

  /**
   * @param $name
   * @return void
   */
  public function template_single_up_sells( $slug, $name){
    $this->template_archive_product( $slug, $name);
  }

  /**
   * @param $name
   * @return void
   */
  public function template_archive_product( $slug, $name){
    global $woocommerce_loop;
    if ( isset( $woocommerce_loop['style'] ) )
      $style = $woocommerce_loop['style'];
    else
      $style = $this->get_option( self::VAR_SHOP_PRODUCTS_STYLE);
    $class_li = array('product');

    if ( ! $this->get_option( self::VAR_SHOP_SHOW_PRICE) )
      $class_li[] = 'hide-price';

    if ( $style == 'traditional' ) {
      if ( $this->get_option( self::VAR_SHOP_BORDER_THUMBNAIL) )
        $class_li[] = 'border';
      if ( $this->get_option( self::VAR_SHOP_SHADOW_THUMBNAIL) )
        $class_li[] = 'shadow';
      if ( ! $this->get_option( self::VAR_SHOP_SHOW_BUTTON_DETAILS) )
        $class_li[] = 'hide-details-button';
      if ( ! $this->get_option( self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART) )
        $class_li[] = 'hide-add-to-cart-button';
    }

    $title_position = $this->get_option( self::VAR_SHOP_TITLE_POSITION);
    if ( $style == 'ribbon' )
      $title_position = 'below-thumb';
    set_query_var('title_position', $title_position);
    set_query_var('class_li', $class_li);
    set_query_var('shop_show_name', $this->get_option( self::VAR_SHOP_SHOW_NAME));
    set_query_var('product_style', $style);
  }


  /**
   * @param $name
   * @return void
   */
  public function template_loop_add_to_cart( $slug, $name){
    set_query_var('shop_products_style', $this->get_option( self::VAR_SHOP_PRODUCTS_STYLE));
    set_query_var('shop_button_addtocart_label', __($this->get_option( self::VAR_SHOP_BUTTON_ADD_TO_CART_LABEL), 'woocommerce'));
    set_query_var('shop_button_details_label', __($this->get_option( self::VAR_SHOP_BUTTON_DETAILS_LABEL), 'woocommerce'));

  }

  /**
   * @param $name
   * @return void
   */
  public function template_map( $slug, $name){

  }

  /**
   * @param $name
   * @return void
   */
  public function template_page( $slug, $name){

  }

  /**
   * @param $name
   * @return void
   */
  public function template_pagination( $slug, $name){
    set_query_var('pagination', $this->pagination( '', 10, FALSE));
  }

  /**
   * @param $name
   * @return void
   */
  public function template_piecemaker( $slug, $name){
    set_query_var('slides', $this->get_var( self::OPT_SLIDER_SLIDES));

  }

  /**
   * @param $name
   * @return void
   */
  public function template_portfolio( $slug, $name){
    $post_type = $this->get_portfolio_post_type();
    $this->set_var( self::OPT_POST_TYPE, $post_type);
    set_query_var('post_type', $post_type);
    $portfolio = $this->portfolios();
    $this->set_var( self::OPT_PORTFOLIO, $portfolio);
    set_query_var('portfolio', $portfolio);
    set_query_var('portfolio_show_filters', $this->get_option( self::VAR_PORTFOLIO_SHOW_FILTERS));

    switch($name){
      case '3cols':
      case 'big_image':
      case 'slider':
      case 'filterable':
        $post_type = $this->get_portfolio_post_type();
        $this->set_var( self::OPT_POST_TYPE, $post_type);
        set_query_var('post_type', $post_type);
        $portfolio = $this->get_var( self::OPT_PORTFOLIO);
        set_query_var('portfolio', $portfolio);
        set_query_var('click_event', $this->get_option( self::VAR_PORTFOLIO_THUMBNAIL_CLICK));
        set_query_var('content', $this->content('content', 25, $portfolio[$post_type]['read_more']));
        set_query_var('excerpt', $this->excerpt( 12, '', FALSE ));
        set_query_var('portfolio_details_icon', $this->get_option( self::VAR_PORTFOLIO_DETAILS_ICON));
        break;
    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_searchform( $name){

  }

  /**
   * @param $name
   * @return void
   */
  public function template_sidebar( $name){
    set_query_var('blog_cats_exclude_sidebar', $this->get_option( self::VAR_BLOG_CATS_EXCLUDE_SIDEBAR));

    switch($name){
      case 'blog':
        set_query_var('current_pagename', $this->get_current_pagename());
        break;
    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_single( $slug, $name){
    set_query_var('portfolio_layout_page', $this->get_option( self::VAR_PORTFOLIO_LAYOUT_PAGE));
    $post_type = get_post_type();
    $this->set_var( self::OPT_POST_TYPE, $post_type);
    set_query_var('post_type', $post_type);
    set_query_var('is_portfolio_post_type', $this->is_portfolio_post_type( $post_type ));
    $blog_type = $this->get_option( self::VAR_BLOG_TYPE);
    $this->set_var( self::OPT_BLOG_TYPE, $blog_type);
    switch($name){
      case 'portfolio':
        set_query_var('portfolio_layout_page', $this->get_option( self::VAR_PORTFOLIO_LAYOUT_PAGE));
        $post_type = $this->get_portfolio_post_type();
        $this->set_var( self::OPT_POST_TYPE, $post_type);
        set_query_var('post_type', $post_type);
        break;
    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_slider( $slug, $name){
    set_query_var('slider', $this->slider_type());
    set_query_var('slider_responsive', $this->get_option( self::VAR_SLIDER_RESPONSIVE));

    switch($name){
      case 'elegant':
        set_query_var('slider_elegant_caption_position', $this->get_option( self::VAR_SLIDER_ELEGANT_CAPTION_POSITION));
        break;
      case 'fixed-image':
        set_query_var('header_image_width', $this->get_var( self::OPT_HEADER_IMAGE_WIDTH));
        set_query_var('header_image_height', $this->get_var( self::OPT_HEADER_IMAGE_HEIGHT));
        break;
      case 'layers':
        set_query_var('slider', $this->get_option( self::VAR_SLIDER_LAYERS_CHOOSE));
        break;
      case 'minilayers':
        set_query_var('slider', $this->get_option( self::VAR_SLIDER_LAYERS_CHOOSE));
        break;

    }
  }

  /**
   * @param $name
   * @return void
   */
  public function template_slogan( $slug, $name){

  }

  /**
   * @param $name
   * @return void
   */
  public function template_taxonomy( $slug, $name){
    set_query_var('is_portfolio_tax', $this->is_portfolio_tax( get_query_var('taxonomy') ));

  }

  /**
   * @param $name
   * @return void
   */
  public function template_topbar( $slug, $name){
    set_query_var('show_topbar', $this->get_option( self::VAR_SHOW_BAR));
    set_query_var('show_ribbon', $this->get_option( self::VAR_SHOW_TOPBAR_CART_RIBBON));
    set_query_var('topbar_content', $this->get_option( self::VAR_TOPBAR_CONTENT));
    set_query_var('topbar_text', $this->get_option( self::VAR_TOPBAR_TEXT));
    set_query_var('topbar_twitter_interval', $this->get_option( self::VAR_TOPBAR_TWITTER_INTERVAL));
    set_query_var('topbar_twitter_username', $this->get_option( self::VAR_TOPBAR_TWITTER_USERNAME));
    set_query_var('topbar_twitter_items', $this->get_option( self::VAR_TOPBAR_TWITTER_ITEMS));
    set_query_var('topbar_login', $this->get_option( self::VAR_TOPBAR_LOGIN));
    set_query_var('is_woocommerce', $this->ensure_woo());
    set_query_var('topbar_register', $this->get_option( self::VAR_TOPBAR_REGISTER));
    set_query_var('minicart', $this->minicart( FALSE));
  }

  /**
   * @param $name
   * @return void
   */
  public function include__initialize( $slug, $name = NULL){
    global $paged, $page;
    $uri_theme = $this->get_var( self::OPT_THEME_URI);
    set_query_var('tpl_tdomain', $this->get_var( self::OPT_TPL_TDOMAIN));
    set_query_var('layout_page', $this->layout_page());
    set_query_var('paged', $paged);
    set_query_var('page', $page);
    set_query_var('uri_theme', $uri_theme);
    set_query_var('core', $this);
  }

  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::filter_template_include()
   */
  public function filter_template_include( $template){
    global $paged, $page, $post, $wp_query;
    if( $wp_query->is_posts_page )
      $post_id = get_option( self::ATTR_GLOBAL_PAGE_FOR_POSTS );
    else if ( isset($post->ID) )
      $post_id = $post->ID;
    else
      $post_id = 0;
    $layoutp = get_post_meta( $post_id, '_layout_page', true );
    $layout = ( $layoutp != '' ) ? $layoutp : $this->get_var(self::OPT_DEFAULT_LAYOUT_PAGE);

    $ex = array(
      self::ATTR_SIDEBAR_RIGHT => apply_filters( 'kwtf_force_sidebar_right', array() ),
      self::ATTR_SIDEBAR_LEFT  => apply_filters( 'kwtf_force_sidebar_left', array() ),
      self::ATTR_SIDEBAR_NO    => apply_filters( 'kwtf_force_sidebar_no', array() ),
    );

    // force layouts
    if ( $post_id != 0 ) {
      foreach ( $ex as $layout_force => $ids ) {
        if ( empty( $ids ) )
          continue;

        if ( ! is_array( $ids ) )
          $ids = array( $ids );

        foreach ( $ids as $id ) {
          if ( $id == $post->ID ) {
            $layout = $layout_force;
            break;
          }
        }
      }
    }
    $layout = apply_filters( 'kwtf_layout_page', $layout );
    $this->set_var( self::OPT_LAYOUT, $layout);
    $file = str_replace( $this->get_var( self::OPT_THEME_DIR) , '', $template);
    $this->bind_template( $file);
    if ( $file === $template ) return $template;
    $file = $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) . '/' .
      $this->get_var( self::OPT_NAME) . '/' . str_replace( EXT, '', $file );
    $view = View::factory( $file);
    $uri_theme = $this->get_var( self::OPT_THEME_URI);
    $view->set('tpl_tdomain', $this->get_var( self::OPT_TPL_TDOMAIN));
    $view->set('layout_page', $layout);
    $view->set('paged', $paged);
    $view->set('page', $page);
    $view->set('uri_theme', $uri_theme);
    $view->set('core', $this);
    echo $view;
    return FALSE;
  }

  /**
   * Convert the words within the brackets, with <span> tags, to apply different style
   *
   * E.g.
   * FROM: My [sentence]
   * TO:   My <span>sentence</span>
   *
   * @param string $str The string to convert
   * @param string $class (optional) A class to add into <span> tags
   * @param string $after (optional) An optional string, to add after the string converted
   * @return string The string converted
   *
   * @since 1.0
   */
  public function filter_bloginfo($str, $class = '', $after = '')
  {
    $tags = $this->get_var( self::OPT_TAGS_ALLOWED);

    if( $class != '' )
    $class = ' class="' . $class . '"';

    $str = str_replace('[', '<span' . $class . '>', $str);
    $str = str_replace(']', '</span>', $str);

    foreach( $tags as $tag => $value )
    $str = str_replace( "%$tag%", $value, $str );

    return $str . $after;
  }

  // decide the layout of the theme, changing the class of body
  public function filter_body_class( $classes ) {
    global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

    if      ( $is_lynx )   $classes[] = 'lynx';
    elseif  ( $is_gecko )  $classes[] = 'gecko';
    elseif  ( $is_opera )  $classes[] = 'opera';
    elseif  ( $is_NS4 )    $classes[] = 'ns4';
    elseif  ( $is_safari ) $classes[] = 'safari';
    elseif  ( $is_chrome ) $classes[] = 'chrome';
    elseif  ( $is_IE )     $classes[] = 'ie';
    else $classes[] = 'unknown';

    if ( $this->isMobile() ) {

      $classes[] = 'isMobile';
      if     ( $this->mobile_is_device( self::OPT_IS_ANDROID) )          $classes[] = 'android';
      elseif ( $this->mobile_is_device( self::OPT_IS_ANDROIDTABLET) )    $classes[] = 'android-tablet';
      elseif ( $this->mobile_is_device( self::OPT_IS_IPHONE) )           $classes[] = 'iphone';
      elseif ( $this->mobile_is_device( self::OPT_IS_IPAD) )             $classes[] = 'ipad';
      elseif ( $this->mobile_is_device( self::OPT_IS_BLACKBERRY) )       $classes[] = 'blackberry';
      elseif ( $this->mobile_is_device( self::OPT_IS_BLACKBERRYTABLET) ) $classes[] = 'blackberry-tablet';
      elseif ( $this->mobile_is_device( self::OPT_IS_WINDOWS) )          $classes[] = 'windows';
      elseif ( $this->mobile_is_device( self::OPT_IS_WINDOWSPHONE) )     $classes[] = 'windows-phone';
      elseif ( $this->mobile_is_device( self::OPT_IS_GENERIC) )          $classes[] = 'generic';

    }
    $classes[] = 'shop-' . $this->get_option( self::VAR_SHOP_PRODUCTS_STYLE);
    $classes[] = $this->get_option( self::VAR_THEME_LAYOUT) . '-layout';
    switch ( $this->get_var( self::OPT_POST_TYPE) ){
      case self::ATTR_POST_TYPE_FAQ:
        $classes[] = 'faq';
        break;
      case self::ATTR_POST_TYPE_GALLERY:
        $classes[] = 'portfolio-' . $this->get_var( self::OPT_PORTFOLIO_TYPE);
        break;
    }
    return $classes;
  }

  /**
   * @param $length
   * @return int
   */
  public function filter_excerpt_length( $length) {
    switch( get_post_type() )
      {
        case self::ATTR_POST_TYPE_TESTIMONIALS :
          return 80;
        case self::ATTR_POST_TYPE_FAQ:
          return 20;
      }

    return 5;
  }

  public function filter_excerpt_more( $more){
    $blog_type = $this->get_var( self::OPT_BLOG_TYPE);
    switch( $blog_type)
    {
      case self::ATTR_BIG:
        $blog_read_more_text = $this->get_option( self::VAR_BLOG_READ_MORE_TEXT);

        return "<br /><br /><a class=\"more-link\" href=\"". get_permalink( get_the_ID() ) . "\">" . $blog_read_more_text . "</a>";
      case self::ATTR_ELEGANT:
        $blog_read_more_text = $this->get_option( self::VAR_BLOG_READ_MORE_TEXT);
        return "<br /><br /><a class=\"more-link\" href=\"". get_permalink( get_the_ID() ) . "\">" . $blog_read_more_text . "</a>";
    }
    $post_type = $this->get_var( self::OPT_POST_TYPE);
    switch( $post_type )
    {
      case self::ATTR_POST_TYPE_TESTIMONIALS :
        return '[...]';
      case self::ATTR_POST_TYPE_FAQ:
        return '[...]';
    }
    return $more;
  }

  /**
   * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
   *
   * To override this in a child theme, remove the filter and optionally add
   * your own function tied to the wp_page_menu_args filter hook.
   *
   * @since 1.0
   */
  function filter_wp_page_menu_args( $args ) {
    $args['show_home'] = true;
    $args['menu_class'] = 'menu';
    return $args;
  }

  /**
   * @param $content_type
   * @return mixed|void
   */
  public function filter_wp_mail_content_type( $content_type){
    return $this->get_var( self::OPT_EMAIL_CONTENT_TYPE);
  }

  /**
   * @param $plugin_array
   * @return array|void
   */
  public function filter_mce_external_plugins($plugin_array){
    $dir = $this->get_var( self::OPT_THEME_URI);
    $plugin_array['one_fourth']         = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['one_third']          = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['two_third']          = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['two_fourth']         = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['one_fourth_last']    = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['one_third_last']     = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['two_third_last']     = $dir . '/js/editor_plugin.dev.js';
    $plugin_array['two_fourth_last']    = $dir . '/js/editor_plugin.dev.js';
    return $plugin_array;
  }

  /**
   * Add 'On Sale Filter to Product list in Admin
   */
  function filter_parse_query( $query ) {
    global $pagenow, $typenow, $wp_query;

    if ( $typenow=='product' && isset($_GET['onsale_check']) && $_GET['onsale_check'] ) :

      if ( $_GET['onsale_check'] == 'yes' ) :
        $query->query_vars['meta_compare']  =  '>';
        $query->query_vars['meta_value']    =  0;
        $query->query_vars['meta_key']      =  '_sale_price';
      endif;

      if ( $_GET['onsale_check'] == 'no' ) :
        $query->query_vars['meta_value']    = '';
        $query->query_vars['meta_key']      =  '_sale_price';
      endif;

    endif;
  }

  /**
   * Replace the default get_the_content, managing better the shortcodes
   *
   * @param string $str The string to convert
   * @return string The string converted
   *
   * @since 1.0
   */
  public function filter_the_content( $str )
  {

    $str = $this->addp( $str );

    $str = prepend_attachment($str);

    return $str;
  }

  /**
   * @param $content
   * @return string|void
   */
  public function filter_widget_text( $content){
    return do_shortcode( $content);
  }

  /**
   * Add lightbox to the gallery
   *
   * @since 1.0
   */
  public function filter_wp_get_attachment_link( $html, $id, $size, $permalink, $icon, $text ) {
    if ( ! $permalink )
      return str_replace( '<a', '<a rel="prettyPhoto[gallery]"', $html );
    else
      return $html;
  }

  /**
   * @param $str
   * @param string $class
   * @param string $after
   * @return string
   */
  public function filter_widget_title($str, $class = '', $after = ''){
    return $this->filter_bloginfo( $str, $class, $after);
  }

  /**
   * Add "first" and "last" CSS classes to dynamic sidebar widgets. Also adds numeric index class for each widget (widget-1, widget-2, etc.)
   */
  public function filter_dynamic_sidebar_params($params) {

    $my_widget_num = $this->get_var( self::OPT_WIDGET_NUM); // Global a counter array
    $this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
    $arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets

    if(!$my_widget_num) {// If the counter array doesn't exist, create it
      $my_widget_num = array();
    }

    if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets

      return $params; // No widgets in this sidebar... bail early.
    }

    if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
      $my_widget_num[$this_id] ++;
    } else { // If not, create it starting with 1
      $my_widget_num[$this_id] = 1;
    }

    $class = 'class="widget-' . $my_widget_num[$this_id] . ' '; // Add a widget number class for additional styling options

    if($my_widget_num[$this_id] == 1) // If this is the first widget
      $class .= 'widget-first ';
    if($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) // If this is the last widget
      $class .= 'widget-last ';

    $params[0]['before_widget'] = str_replace('class="', $class, $params[0]['before_widget']); // Insert our new classes into "before widget"
    $this->set_var( self::OPT_WIDGET_NUM, $my_widget_num);
    return $params;

  }

  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_switch_theme()
   */
  public function action_switch_theme($theme_name, WP_Theme $theme){
    if ( get_option( 'theme_switched') == $this->get_var( self::OPT_NAME)) {
      $this->_deactivate();
    }
    elseif ( $theme->get_stylesheet() == $this->get_var( self::OPT_NAME))  {

      $this->_activate();
    }
  }

  // default theme setup
  /**
   *
   */
  public function action_after_setup_theme() {
    // This theme styles the visual editor with editor-style.css to match the theme style.
    add_editor_style( 'css/editor-style.css' );

    // This theme uses post thumbnails
    add_theme_support( 'post-thumbnails' );

    // This theme uses the menues
    add_theme_support( 'menus' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Post Format support.
    //add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );





    // We'll be using post thumbnails for custom header images on posts and pages.
    // We want them to be 940 pixels wide by 198 pixels tall.
    // Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
    //set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );
    $image_sizes = array(
      'thumb_recentposts'     => array( 55,  55,  TRUE ),
      'thumb_testimonial'     => array( 94,  94,  TRUE ),
      'thumb-slider-elastic'  => array( 150, 59,  TRUE ),
      'thumb_portfolio_3cols' => array( 280, 143, TRUE, '#portfolio li img, #portfolio li .thumb, ' ),
      'thumb_portfolio_slider'=> array( 205, 118, TRUE, '.portfolio-slider li a img, .portfolio-slider li a, .portfolio-slider li' ),
      'thumb_portfolio_big'   => array( 617, 295, TRUE, '#portfolio-bigimage img' ),
      'thumb_gallery'         => array( 208, 168, TRUE, '.gallery-wrap li img, .gallery-wrap .internal_page_item' ),
      'thumb_more_projects'   => array( 86,  86,  TRUE ),
      'blog_elegant'          => array( 450, 0,   TRUE ),
      'blog_big'              => array( 720, 0,   TRUE ),
      'blog_small'            => array( 288, 266, TRUE ),
      'nivo_slider'           => array( 608, 269, TRUE ),
      'features_tab_icon'     => array( 20,  20,  TRUE ),
    );

    $this->set_sizes_theme_option( $image_sizes );

    foreach ( $image_sizes as $id_size => $size )
      add_image_size( $id_size, apply_filters( 'kwtf_' . $id_size . '_width', $size[0] ), apply_filters( 'kwtf_' . $id_size . '_height', $size[1] ), $size[2] );

    //     global $_wp_additional_image_sizes;
    //     yiw_debug($_wp_additional_image_sizes);

    // Don't support text inside the header image.
    if ( ! defined( 'NO_HEADER_TEXT' ) )
      define( 'NO_HEADER_TEXT', TRUE );

    // Add a way for the custom header to be styled in the admin panel that controls
    // custom headers. See twentyten_admin_header_style(), below.
    //add_custom_image_header( '', 'yiw_admin_header_style' );
    add_theme_support('custom-header', array( 'admin-head-callback' => array( $this, 'admin_header_style')));

    // ... and thus ends the changeable header business.

    // Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
    register_default_headers( array(
      'design1' => array(
        'url' => '%s/images/fixed-images/001.jpg',
        'thumbnail_url' => '%s/images/fixed-images/thumb/001.jpg',
        /* translators: header image description */
        'description' => __( 'Design', $this->plg_tdomain ) . ' 1'
      ),
      'design2' => array(
        'url' => '%s/images/fixed-images/002.jpg',
        'thumbnail_url' => '%s/images/fixed-images/thumb/002.jpg',
        /* translators: header image description */
        'description' => __( 'Design', $this->plg_tdomain ) . ' 2'
      ),
      'design3' => array(
        'url' => '%s/images/fixed-images/003.jpg',
        'thumbnail_url' => '%s/images/fixed-images/thumb/003.jpg',
        /* translators: header image description */
        'description' => __( 'Design', $this->plg_tdomain ) . ' 3'
      ),
      'design4' => array(
        'url' => '%s/images/fixed-images/004.jpg',
        'thumbnail_url' => '%s/images/fixed-images/thumb/004.jpg',
        /* translators: header image description */
        'description' => __( 'Design', $this->plg_tdomain ) . ' 4'
      ),
      'design5' => array(
        'url' => '%s/images/fixed-images/005.jpg',
        'thumbnail_url' => '%s/images/fixed-images/thumb/005.jpg',
        /* translators: header image description */
        'description' => __( 'Design', $this->plg_tdomain ) . ' 5'
      ),
    ) );

    $locale = get_locale();
    $locale_file = $this->themes_root . '/' . $this->name . "/languages/$locale.php";
    if ( is_readable( $locale_file ) )
      require_once( $locale_file );

    // This theme uses wp_nav_menu() in more locations.
    register_nav_menus(
      array(
        'nav'           => __( 'Navigation' ),
        'topbar'        => __( 'Navigation in the top bar', $this->plg_tdomain )
      )
    );

    // images size
    //add_image_size( 'thumb', 100, 100 );

    // sidebars registers
    register_sidebar( $this->sidebar_args( 'Default Sidebar', __( 'This sidebar will be shown in all pages with empty sidebar or without any sidebat set.', $this->plg_tdomain ) ) );

    register_sidebar( $this->sidebar_args( 'Blog Sidebar', __( 'The sidebar showed on page with Blog template', $this->plg_tdomain ) ) );
    register_sidebar( $this->sidebar_args( 'Gallery Sidebar', __( 'The sidebar shown on Gallery pages', $this->plg_tdomain ) ) );

    register_sidebar( $this->sidebar_args( 'Shop Sidebar', __( 'The sidebar for all shop pages', $this->plg_tdomain ) ) );
    register_sidebar( $this->sidebar_args( 'Testimonials Sidebar', __( 'The sidebar used in Testimonials Single Template.', $this->plg_tdomain), 'widget', 'h3' ) );

    do_action( 'kwtf_register_sidebars' );

    // add sidebar created from plugin
    $sidebars = $this->get_option( self::VAR_SIDEBARS );
    if( is_array( $sidebars ) && ! empty( $sidebars ) )
    {
      foreach( $sidebars as $sidebar )
      {
        register_sidebar( $this->sidebar_args( $sidebar, '', 'widget', 'h3' ) );
      }
    }

    // footer sidebars
    for( $i = 1; $i <= $this->get_option( self::VAR_FOOTER_ROWS, 0 ); $i++ )
      register_sidebar( $this->sidebar_args( "Footer Row $i", __( "The widget area nr. {$i} used in Footer section", $this->plg_tdomain), 'widget', 'h3' ) );


    if ( ! function_exists( 'is_plugin_active' ) )
      include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

    if ( is_plugin_active( 'jigoshop/jigoshop.php' ) ){
      $this->set_var( self::OPT_SHOP_MODE, self::ATTR_JIGOSHOP);
      do_action('kwtf_initialize_jigoshop');
    }
    elseif ( is_plugin_active( 'woocommerce/woocommerce.php' ) ){
      $this->set_var( self::OPT_SHOP_MODE, self::ATTR_WOOCOMMERCE);
      do_action('kwtf_initialize_woocommerce');
    }
  }
  
  /**
   * Register post types for the theme
   *
   * @return void
   */
  public function action_init(){
    register_post_type(
      self::ATTR_POST_TYPE_PORTFOLIO,
    array(
		  'description' => __('Create Portfolio', $this->plg_tdomain),
		  'exclude_from_search' => TRUE,
		  'show_ui' => TRUE,
		  'labels' => $this->label(__('Portfolio', $this->plg_tdomain), __('Portfolios', $this->plg_tdomain), __('New Portfolio', $this->plg_tdomain)),
		  'supports' => array( 'title', 'thumbnail' ),
		  'public' => FALSE,
		  'menu_position' => 64
    )
    );

    $portofolios = get_posts( array(
        'post_type' => self::ATTR_POST_TYPE_PORTFOLIO,
        'numberposts' => -1 
    ) );
    foreach ( $portofolios as $post ) :

    // post types
    $rewrite    = get_post_meta( $post->ID, '_portfolio_rewrite', TRUE );
    $read_more  = get_post_meta( $post->ID, '_portfolio_read_more', TRUE );
    $label_sin  = get_post_meta( $post->ID, '_portfolio_label_sin', TRUE );
    $label_plu  = get_post_meta( $post->ID, '_portfolio_label_plu', TRUE );

    if ( empty( $label_sin ) )
    $label_sin = $post->post_title;

    if ( empty( $label_plu ) )
    $label_plu = $post->post_title;

    if ( empty( $rewrite ) )
    $rewrite = sanitize_title( $post->post_title );

    // icon
    $thumbnail_id = get_post_thumbnail_id( $post->ID );
    if ( ! empty( $thumbnail_id ) )
    $icon = wp_get_attachment_image_src( $thumbnail_id );
    else
    $icon = NULL;

    register_post_type(
    sanitize_title( $post->post_title ),
    array(
    		  'description' => apply_filters( 'the_title' , $post->post_title ),
    		  'exclude_from_search' => FALSE,
    		  'show_ui' => TRUE,
    		  'labels' => $this->label( $label_sin, $label_plu, apply_filters( 'the_title' , $post->post_title ) ),
    		  'supports' => array( 'title', 'editor', 'thumbnail' ),
    		  'public' => TRUE,
    		  'capability_type' => 'page',
        	  'publicly_queryable' => TRUE,
    		  'rewrite' => array( 'slug' => $rewrite, 'with_front' => TRUE ),
    		  'menu_icon' => $icon
    )
    );

    add_filter( 'manage_edit-'.sanitize_title( $post->post_title ).'_columns', array( $this, 'portfolio_edit_columns'));

    // taxonomies
    $portfolio_tax          = get_post_meta( $post->ID, '_portfolio_tax', TRUE );
    $portfolio_tax_rewrite  = get_post_meta( $post->ID, '_portfolio_tax_rewrite', TRUE );

    if ( ! empty( $portfolio_tax ) )
    register_taxonomy( sanitize_title( $portfolio_tax ), array( sanitize_title( $post->post_title ) ), array(
        		'hierarchical' => TRUE,
        		'labels' => $this->label_tax( __('Category', $this->plg_tdomain), __('Categories', $this->plg_tdomain)),
        		'show_ui' => TRUE,
        		'query_var' => TRUE,
        		'rewrite' => array( 'slug' => $portfolio_tax_rewrite, 'with_front' => FALSE )
    ));
    endforeach;

    //flush_rewrite_rules();
    register_post_type(
      self::ATTR_POST_TYPE_TESTIMONIALS,
      array(
        'description' => __('Testimonals', $this->plg_tdomain),
        'exclude_from_search' => false,
        'show_ui' => true,
        'labels' => $this->label( apply_filters( 'kwtf_testimonials_label_singular', __('Testimonial', $this->plg_tdomain) ), apply_filters( 'kwtf_testimonials_label_plural', __('Testimonials', $this->plg_tdomain) ) ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'public' => true,
        'show_in_nav_menus' => false,
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'rewrite' => array( 'slug' => apply_filters( 'kwtf_testimonial_rewrite', 'post/testimonials' ), 'with_front' => true )
      )
    );

    register_post_type(
      self::ATTR_POST_TYPE_FAQ,
      array(
        'description' => __('Faq', $this->plg_tdomain),
        'exclude_from_search' => false,
        'show_ui' => true,
        'labels' => $this->label(__('Faq', $this->plg_tdomain), __('Faqs', $this->plg_tdomain)),
        'supports' => array( 'title', 'editor', 'revisions' ),
        'public' => true,
        'show_in_nav_menus' => false,
        'capability_type' => 'page',
        'publicly_queryable' => true,
        'rewrite' => array( 'slug' => self::ATTR_POST_TYPE_FAQ, 'with_front' => true )
      )
    );

    register_post_type(
      self::ATTR_POST_TYPE_GALLERY,
      array(
        'description' => __('Gallery', $this->plg_tdomain),
        'exclude_from_search' => false,
        'show_ui' => true,
        'labels' => $this->label( apply_filters( 'kwtf_gallery_label_singular', __('Photo', $this->plg_tdomain) ), apply_filters( 'kwtf_gallery_label_plural', __('Photos', $this->plg_tdomain) ), __('Gallery', $this->plg_tdomain) ),
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'public' => true,
        'capability_type' => 'post',
        'publicly_queryable' => true,
        'rewrite' => array( 'slug' => apply_filters( 'kwtf_gallery_rewrite', 'post/gallery' ), 'with_front' => true )
      )
    );
//
//    register_post_type(
//        TYPE_SERVICES,
//        array(
//          'description' => __('Services', 'yiw'),
//          'exclude_from_search' => false,
//          'show_ui' => true,
//          'labels' => yiw_label( apply_filters( 'yiw_services_label_singular', __('Service', 'yiw') ), apply_filters( 'yiw_services_label_plural', __('Services', 'yiw')), __('Services', 'yiw')),
//          'supports' => array( 'title', 'editor', 'thumbnail' ),
//          'public' => true,
//          'capability_type' => 'post',
//          'publicly_queryable' => true,
//          'rewrite' => array( 'slug' => apply_filters( 'yiw_service_rewrite', 'post/services' ), 'with_front' => true )
//        )
//    );

    //flush_rewrite_rules();

    $this->register_dymanics_types();

    register_taxonomy('category-faq', array( self::ATTR_POST_TYPE_FAQ ), array(
      'hierarchical' => true,
      'labels' => $this->label_tax(__('Faq Category', $this->plg_tdomain), __('Faq Categories', $this->plg_tdomain)),
      'show_ui' => true,
      'show_in_nav_menus' => false,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'faq/category', 'with_front' => false )
    ));


    /*
    register_taxonomy('category-project', array( TYPE_PORTFOLIO ), array(
        'hierarchical' => true,
        'labels' => yiw_label_tax(__('Category', 'yiw'), __('Categories', 'yiw')),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'project/category', 'with_front' => false )
    ));
    register_taxonomy('team-profile', array( TYPE_TEAM ), array(
        'hierarchical' => true,
        'labels' => yiw_label_tax(__('Profile', 'yiw'), __('Profiles', 'yiw')),
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'team/profile', 'with_front' => false )
    ));
    */
    register_taxonomy('category-photo', array( self::ATTR_POST_TYPE_GALLERY ), array(
      'hierarchical' => true,
      'labels' => $this->label_tax(__('Category', $this->plg_tdomain), __('Categories', $this->plg_tdomain)),
      'show_ui' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => apply_filters( 'kwtf_category_photo_rewrite', 'photo/category' ), 'with_front' => false )
    ));

    if ( is_admin() )
      return;

    $loading = $this->get_all_fonts_user();

    $output = '';

    //     global $wp_scripts;
    //     yiw_debug($wp_scripts->registered);

    // cufon
    if ( isset( $loading[self::ATTR_CUFON] ) && ! empty( $loading[self::ATTR_CUFON] ) ) :
      //yiw_fonts_cufon();
      add_action( 'wp_enqueue_scripts', array( $this, 'fonts_cufon') );
    endif;

    // google font
    if ( isset( $loading[self::ATTR_GOOGLE_FONT] ) && ! empty( $loading[self::ATTR_GOOGLE_FONT] ) ) :
      $this->fonts_google_fonts();
      //add_action( 'wp_enqueue_styes', 'yiw_fonts_google_fonts' );
    endif;

    // web font
    if ( isset( $loading[self::ATTR_WEB_FONTS] ) && ! empty( $loading[self::ATTR_WEB_FONTS] ) ) :
      $this->fonts_web_fonts();
    endif;

  }

  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::action_admin_init()
   */
  public function action_admin_init(){

    if(isset($_POST['posted']) && strstr($_SERVER['REQUEST_URI'], 'layerslider')) {
      $this->set( self::VAR_LAYERSLIDER_SLIDES, $_POST['layerslider-slides']);
      update_option( $this->get_var( self::OPT_SANITIZED_NAME), $this->get_option());
      // Redirect back
      //header('Location: '.$_SERVER['REQUEST_URI'].'');
      //die();
    }

    parent::action_admin_init();

    $options_args = array(
    10 => array(
			'type' => 'paragraph',
			'text' => __( 'Set here the features of this portfolio. On right side, you can also choose an icon to show in the admin menu, by upload it in "Featured Image"', $this->plg_tdomain )
    ),
    15 => array(
			'id' => 'portfolio_type',
			'name' => __( 'Layout', $this->plg_tdomain ), 
			'type' => 'select',
			'options' => $this->get_var( self::OPT_PORTFOLIO_TYPES),
			'desc' => __( 'Set the layout for this portfolio, that will be used in the page with the portfolio template.', $this->plg_tdomain ),
			'std' => ''
			),
			16 => array(
			'id' => 'portfolio_items',
			'name' => __( 'Items', $this->plg_tdomain ), 
			'type' => 'text',
			'desc' => __( 'The number of items to show in this portfolio, when selected in the page. Leave empty to show all items.', $this->plg_tdomain ),
			'std' => ''
			),
			17 => array(
			'id' => 'portfolio_read_more',
			'name' => __( 'Read More', $this->plg_tdomain ), 
			'type' => 'text',
			'desc' => __( 'The text of button to read the entire post.', $this->plg_tdomain ),
			'std' => __( 'View Project', $this->plg_tdomain )
			),
			19 => array(
			'type' => 'sep'
			),
			20 => array(
			'id' => 'portfolio_rewrite',
			'name' => __( 'Rewrite', $this->plg_tdomain ), 
			'type' => 'text',
			'desc' => __( 'Set the rewrite role for the posts of this portfolio (es. %s/). Leave empty to generate it automatically.', $this->plg_tdomain ),
			'std' => ''
			),
			30 => array(
			'id' => 'portfolio_label_sin',
			'name' => __( 'Label Singular', $this->plg_tdomain ), 
			'type' => 'text',
			'desc' => __( 'The label that will be shown when you create the post of this portfolio.', $this->plg_tdomain ),
			'std' => ''
			),
			40 => array(
			'id' => 'portfolio_label_plu',
			'name' => __( 'Label Plural', $this->plg_tdomain ), 
			'desc' => __( 'The label that will be shown when you create the post of this portfolio.', $this->plg_tdomain ),
			'type' => 'text',
			'std' => ''
			),
			50 => array(
			'type' => 'sep'
			),
			60 => array(
			'id' => 'portfolio_tax',
			'name' => __( 'Taxonomy', $this->plg_tdomain ),  
			'desc' => __( "Set the taxonomy for this portfolio. Leave empty, if you don't want a taxonomy.", $this->plg_tdomain ),
			'type' => 'text',
			'std' => ''
			),
			70 => array(
			'id' => 'portfolio_tax_rewrite',
			'name' => __( 'Taxonomy rewrite', $this->plg_tdomain ),  
			'desc' => __( 'Set the rewrite role for the posts of this portfolio. Leave empty to generate it automatically.', $this->plg_tdomain ),
			'type' => 'text',
			'std' => ''
			),
			);
			$this->register_metabox( 'kwtf_portfolio_options', __( 'Portfolio options', $this->plg_tdomain ), self::ATTR_POST_TYPE_PORTFOLIO, $options_args, 'normal' );

			//portfolio video url
			$options_args = array(
			10 => array(
            'id' => 'portfolio_video',
            'name' => __( 'Video URL:', $this->plg_tdomain ), 
            'type' => 'text',
            'desc' => __( 'Here, you can add an Youtube or Vimeo url video, to show on thumb of this portfolio element.', $this->plg_tdomain ),
            'desc_location' => 'newline'
            )
            );
            foreach( $this->get_portfolios() as $post_type => $post_type_title )
            $this->register_metabox( 'kwtf_url_portfolio_' . $post_type, __( 'Video URL', $this->plg_tdomain ), $post_type, $options_args, 'normal', 'high' );

            // portfolio
            $options_args = array(
            10 => array(
            'id' => 'portfolio_skills_label',
            'name' => __( 'Skills Label', $this->plg_tdomain ), 
            'type' => 'text',
            'desc' => __( 'Insert the label used in skills field', $this->plg_tdomain ),
            'desc_location' => 'newline'
            ),
            20 => array(
            'id' => 'portfolio_skills',
            'name' => __( 'Skills', $this->plg_tdomain ), 
            'type' => 'text',
            'desc' => __( 'Insert the skills', $this->plg_tdomain ),
            'desc_location' => 'newline'
            ),
            30 => array(
            'id' => 'portfolio_date_label',
            'name' => __( 'Date label', $this->plg_tdomain ), 
            'type' => 'text',
            'desc' => __( 'Insert the label used in date field', $this->plg_tdomain ),
            'desc_location' => 'newline'
            ),
            40 => array(
            'id' => 'portfolio_date',
            'name' => __( 'Date', $this->plg_tdomain ), 
            'type' => 'text',
            'desc' => __( 'Insert the date', $this->plg_tdomain ),
            'desc_location' => 'newline'
            )
            );
            foreach( $this->get_portfolios() as $post_type => $post_type_title )
            $this->register_metabox( 'kwtf_portfolio_skillsdate_' . $post_type, __( 'Skills and Date', $this->plg_tdomain ), $post_type, $options_args, 'normal', 'high' );
    $options_args = array(
      10 => array(
        'type' => 'paragraph',
        'text' => __( 'You can configure this page as you want, setting these optional options.', $this->plg_tdomain )
      ),
      20 => array(
        'id' => 'show_title_page',
        'name' => __( 'Show Title', $this->plg_tdomain ),
        'type' => 'radio',
        'options' => array(
          'yes' => __( 'Yes', $this->plg_tdomain ),
          'no' => __( 'No', $this->plg_tdomain ),
        ),
        'std' => 'yes'
      ),
      30 => array(
        'id' => 'layout_page',
        'name' => __( 'Layout Page', $this->plg_tdomain ),
        'type' => 'select',
        'options' => array(
          'sidebar-no' => 'No Sidebar',
          'sidebar-left' => 'Left Sidebar',
          'sidebar-right' => 'Right Sidebar'
        ),
        'desc' => __( 'Select layout of page', $this->plg_tdomain ),
        'desc_location' => 'inline',
        'std' => $this->get_var(self::OPT_DEFAULT_LAYOUT_PAGE)
      ),
      40 => array(
        'id' => 'sidebar_choose_page',
        'name' => __( 'Sidebar Page', $this->plg_tdomain ),
        'type' => 'select',
        'options' => $this->sidebars_dropdown_array(),
        'desc' => __( 'Select sidebar of page', $this->plg_tdomain ),
        'desc_location' => 'inline',
        'std' => ''
      ),
      50 => array(
        'id' => 'footer_type',
        'name' => __('Footer Page', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
        'type' => 'select',
        'options' => array(
          self::ATTR_CENTERED              => __( 'Centered Footer', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BIG_NORMAL            => __( 'Big Footer + Two Columns', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_BIG_CENTERED          => __( 'Big Footer + Centered', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),
          self::ATTR_NORMAL                => __( 'Two Columns Footer', $this->get_var( self::OPT_PLUGIN_TDOMAIN)),

        ),
        'desc' => __( 'Select footer of page', $this->plg_tdomain ),
        'desc_location' => 'inline',
        'std' => $this->get_option(self::VAR_FOOTER_TYPE),
      ),
    );
    $this->register_metabox( 'kwtf_options_page', __( 'Options of page', $this->plg_tdomain ), 'page', $options_args, 'side' );

    // remove filter wpautop
    $options_args = array(
      10 => array(
        'id' => 'page_remove_wpautop',
        'name' => __( 'Remove wpautop filter to main content.', $this->plg_tdomain ),
        'type' => 'checkbox'
      ),
    );
    //yiw_register_metabox( 'yiw_remove_wpautop_page', __( 'Remove WpAutoP filter', 'yiw' ), 'page', $options_args, 'normal', 'high' );

    // slogan page
    $options_args = array(
      10 => array(
        'id' => 'slogan_page',
        'name' => __( 'Slogan Page', $this->plg_tdomain ),
        'type' => 'text',
        'desc' => __( 'Insert the slogan showed on top of this page/post.', $this->plg_tdomain ),
        'desc_location' => 'newline'
      ),
    );
    $this->register_metabox( 'kwtf_slogan_page', __( 'Slogan Page', $this->plg_tdomain ), 'page', $options_args, 'normal', 'high' );

    // extra content
    $options_args = array(
      10 => array(
        'type' => 'paragraph',
        'text' => __( 'If you want, you can add some text to show above the footer, under content and sidebar.', $this->plg_tdomain )
      ),
      20 => array(
        'id' => 'page_extra_content',
        'type' => 'textarea'
      ),
      30 => array(
        'id' => 'page_extra_content_autop',
        'name' => __( 'Automatically add paragraphs.', $this->plg_tdomain ),
        'type' => 'checkbox'
      ),
    );
    $this->register_metabox( 'kwtf_extra_content_page', __( 'Extra Content', $this->plg_tdomain ), 'page', $options_args, 'normal', 'high' );
    // subtitle slogan
    $options_args = array(
      11 => array(
        'id' => 'subslogan_page',
        'name' => __( 'Slogan Subtitle', $this->plg_tdomain ),
        'type' => 'text',
        'desc' => __( 'Insert the subtitle of slogan showed below the main title of this slogan.', $this->plg_tdomain ),
        'desc_location' => 'newline'
      ),
    );
    $this->add_options_to_metabox( 'kwtf_slogan_page', $options_args );




//testimonial url
    $options_args = array(
      10 => array(
        'id' => 'testimonial_label',
        'name' => __( 'Web Site Label', $this->plg_tdomain ),
        'type' => 'text',
        'desc' => __( 'Insert the label used for Testimonial Website Url', $this->plg_tdomain ),
        'desc_location' => 'newline'
      ),
      20 => array(
        'id' => 'testimonial_website',
        'name' => __( 'Web Site URL', $this->plg_tdomain ),
        'type' => 'text',
        'desc' => __( 'Insert the url referred to Testimonial', $this->plg_tdomain ),
        'desc_location' => 'newline'
      )
    );
    $this->register_metabox( 'kwtf_url_testimonial', __( 'Website Testimonial', $this->plg_tdomain ), 'bl_testimonials', $options_args, 'normal', 'high' );


//Testimonial checkbox that allows link to the extended page
    $options_args = array(
      1 => array(
        'id' => 'testimonial_link',
        'name' => __( 'Allow Link', $this->plg_tdomain ),
        'type' => 'checkbox',
        'desc' => __( 'Allow link to the testimonial page', $this->plg_tdomain ),
        'desc_location' => 'newline'
      ),
    );
    $this->register_metabox( 'kwtf_allow_link_testimonial', __( 'Allow Link Testimonial', $this->plg_tdomain ), 'bl_testimonials', $options_args, 'normal', 'high' );


//show breadcrumbs
    $sliders = $this->get_var( self::OPT_SLIDERS);
    $options_args = array(
      21 => array(
        'id' => 'show_breadcrumbs_page',
        'name' => __( 'Show Breadcrumbs below the title', $this->plg_tdomain ),
        'type' => 'radio',
        'options' => array(
          'yes' => __( 'Yes', $this->plg_tdomain ),
          'no' => __( 'No', $this->plg_tdomain ),
        ),
        'std' => 'yes'
      ),

//     72 => array(
//         'id' => 'slider_accordion',
//         'name' => __( 'Accordion slider', 'yiw' ),
//         'type' => 'select',
//         'options' => yiw_accordion_sliders( array( 'no' => __( 'No accordion', 'yiw' ) ) ),
//         'std' => 'yes',
//         'std' => 0
//     ),

      80 => array(
        'id' => 'slider_type',
        'name' => __( 'Select a slider for this page', $this->plg_tdomain ),
        'type' => 'select',
        'hidden' => false,
        'options' => $sliders,
        'std' => self::ATTR_NONE
      ),
      99 => array(
        'id' => 'portfolio_post_type',
        'name' => __( 'Portfolio', $this->plg_tdomain ),
        'desc' => __( 'NB: valid only for the portfolio template', $this->plg_tdomain ),
        'type' => 'select',
        'options' => $this->get_portfolios(),
        //'hidden' => false,
        //'desc' => __( 'Insert the subtitle of slogan showed below the main title of this slogan.', 'yiw' ),
        //'desc_location' => 'newline'
      ),

    );
    $this->add_options_to_metabox( 'kwtf_options_page', $options_args );

// add map
    $options_args = array(
      10 => array(
        'id' => 'show_map',
        'name' => __( 'Show Map', $this->plg_tdomain ),
        'type' => 'radio',
        'options' => array(
          'yes' => __( 'Yes', $this->plg_tdomain ),
          'no' => __( 'No', $this->plg_tdomain ),
        ),
        'std' => 'no'
        //'hidden' => false,
        //'desc' => __( 'Insert the subtitle of slogan showed below the main title of this slogan.', 'yiw' ),
        //'desc_location' => 'newline'
      ),
      20 => array(
        'id' => 'map_url',
        'name' => __( 'Link src', $this->plg_tdomain ),
        'type' => 'text',
        //'hidden' => false,
        'desc' => __( 'The link of the map, get from Google Maps.', $this->plg_tdomain ),
        //'desc_location' => 'newline'
      ),
      30 => array(
        'id' => 'map_opened',
        'name' => __( 'Open the map at page loaded.', $this->plg_tdomain ),
        'type' => 'select',
        'options' => array(
          'yes' => __( 'Yes', $this->plg_tdomain ),
          'no' => __( 'No', $this->plg_tdomain ),
        ),
        'std' => 'no',
        //'hidden' => false,
        'desc' => __( 'Say if you want the map opened when the page is loaded.', $this->plg_tdomain ),
        'desc_location' => 'inline'
      ),
    );
    $this->register_metabox( 'kwtf_map_page', __( 'Tab with map', $this->plg_tdomain ), 'page', $options_args, 'normal', 'high' );

    if ( $this->ensure_woo() && basename($_SERVER['PHP_SELF']) == 'nav-menus.php' ){
      wp_enqueue_script('nav-menu-query', $this->get_var( self::OPT_THEME_URI) . '/js/metabox_nav_menu.js', 'nav-menu', false, true);
      add_meta_box('products-by-prices', 'Prices Filter', array( $this, 'nav_menu_meta_box'), 'nav-menus', 'side', 'low');
    }

  }

  public function action_add_meta_boxes(){
    foreach ( $this->get_var( self::OPT_METABOXES) as $id => $the_ )
      add_meta_box($id, $the_['title'], $the_['callback'], $the_['page'], $the_['context'], $the_['priority'], $the_['callback_args'] );

  }

  /**
   *
   */
  public function action_admin_head(){
    ?>
  <style type="text/css" media="screen">
    #menu-posts-team .wp-menu-image {
      background:transparent url('<?php echo home_url();?>/wp-admin/images/menu.png') no-repeat scroll -301px -33px !important;
    }
    #menu-posts-team:hover .wp-menu-image, #menu-posts-team.wp-has-current-submenu .wp-menu-image {
      background-position:-301px -1px!important;
    }
    #menu-posts-yiwportfolio .wp-menu-image, #menu-posts-yiwgallery .wp-menu-image {
      background:transparent url('<?php echo home_url();?>/wp-admin/images/menu.png') no-repeat scroll -1px -33px !important;
    }
    #menu-posts-yiwportfolio:hover .wp-menu-image, #menu-posts-yiwportfolio.wp-has-current-submenu .wp-menu-image,
    #menu-posts-yiwgallery:hover .wp-menu-image, #menu-posts-yiwgallery.wp-has-current-submenu .wp-menu-image {
      background-position:-1px -1px!important;
    }
  </style>
    <?php
  }

  public function action_admin_bar_menu(){
    global $wp_admin_bar;

    if ( ! current_user_can('manage_options') )
      return;

    $wp_admin_bar->add_menu( array(
      //'parent' => false,
      'title' => 'Theme options',
      'id' => "theme-options",
      'href' => admin_url('options-general.php')."?page="
        . $this->get_var( self::OPT_SANITIZED_NAME)
    ) );

    /*foreach( $yiw_theme_options_items as $item => $title )
    {
      $wp_admin_bar->add_menu( array(
        'parent' => "theme-options",
        'title' => $title,
        'id' => "theme-options-$item",
        'href' => admin_url('themes.php')."?page=yiw_panel&tab=$item"
      ) );
    } */
    // Adds an update notification to the WordPress 3.1+ Admin Bar
    if (function_exists('simplexml_load_string')) { // Stop if simplexml_load_string funtion isn't available
      global $wpdb;

      if ( !is_super_admin() || !is_admin_bar_showing() ) // Don't display notification in admin bar if it's disabled or the current user isn't an administrator
        return;

      $xml = $this->get_latest_theme_version( $this->get_var( self::OPT_NOTIFIER_CACHE_INTERVAL)); // Get the latest remote XML file on our server
      //$theme_data = get_theme_data(TEMPLATEPATH . '/style.css'); // Read theme current version from the style.css
      $theme_data = wp_get_theme( NULL, TEMPLATEPATH);

      if ( ! is_object( $xml ) )
        return;

      if( version_compare($xml->latest, $theme_data['Version'], '>') ) { // Compare current theme version with the remote XML version
        $wp_admin_bar->add_menu( array( 'id' => 'update_notifier', 'title' => '<span>' . $this->get_var( self::OPT_NAME) . ' <span id="ab-updates">1 Update</span></span>', 'href' => get_admin_url() . 'index.php?page=theme-update-notifier' ) );
      }
    }
  }

  /**
   *
   */
  public function action_wp_footer()
  {
    /**
     * Add the google analytics code
     *
     * @since 1.0
     */
    echo stripslashes( $this->get_option( self::VAR_GA_CODE ) );
    $this->string_( '<script type="text/javascript">', stripslashes_deep( $this->get_option( self::VAR_CUSTOM_JS, '' ) ), '</script>' );


    if ($this->get_option( self::VAR_FONT_TYPE_OPTION_ID) != 'cufon')
      return;
    ?>
  <script type="text/javascript">
    //<![CDATA[
    Cufon.now();  //]]>
  </script>
    <?php
  }

  /**
   * @param $postpage_id
   * @return int|mixed|unknown|void|WP_Error
   */
  public function action_save_post( $post_id){
    $metaboxes_options = $this->get_var( self::OPT_METABOXES_OPTIONS);
    if ( isset( $_POST['admin_noncename'] ) AND !wp_verify_nonce( $_POST['admin_noncename'], plugin_basename(__FILE__) ))
      return $post_id;

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
      return $post_id;

    // get post type
    if ( !isset($_GET['post_type']) )
      $post_type = 'post';
    elseif ( in_array( $_GET['post_type'], get_post_types( array('show_ui' => true ) ) ) )
      $post_type = $_GET['post_type'];
    else
      wp_die( __('Invalid post type') );

    if ( 'page' == $post_type ) {
      if ( !current_user_can( 'edit_page', $post_id ) )
        return $post_id;
    } else {
      if ( !current_user_can( 'edit_post', $post_id ) )
        return $post_id;
    }
    // add post metas hidden
    if ( isset( $metaboxes_options[$post_type] ) )
      foreach( $metaboxes_options[$post_type] as $key )
      {
        if( isset( $_POST[$key] ) )
          add_post_meta( $post_id, $key, $_POST[$key], true ) or update_post_meta( $post_id, $key, $_POST[$key] );
        else
          delete_post_meta( $post_id, $key );
      }

    return;
  }

  /**
   * @param $columns
   * @return array
   */
  public function portfolio_edit_columns( $columns){
    $columns = array(
	    'cb' => '<input type="checkbox" />',
	    'title' => __( 'Portfolio Title', $this->plg_tdomain ),
	    'description-portfolio' => __( 'Description', $this->plg_tdomain ),
    //'year' => __( 'Year Completed', 'yiw' ),
	    'category-project' => __( 'Category Project', $this->plg_tdomain ),
    );
    return $columns;
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_manage_posts_custom_column()
   */
  function action_manage_posts_custom_column( $column){
    global $post;
     
    switch ($column) {
      case "portfolio-type":
        echo get_post_meta( get_the_ID(), '_portfolio_type', TRUE );
        break;
      case "portfolio-items":
        echo get_post_meta( get_the_ID(), '_portfolio_items', TRUE );
        break;
      case "portfolio-labels":
        echo get_post_meta( get_the_ID(), '_portfolio_label_sin', TRUE ) . ' / ' . get_post_meta( get_the_ID(), '_portfolio_label_plu', TRUE );
        break;
      case "portfolio-tax":
        echo get_post_meta( get_the_ID(), '_portfolio_tax', TRUE );
        break;
         
      case "description-portfolio":
        the_excerpt();
        break;
      case "year":
        $custom = get_post_custom();
        echo $custom["year_completed"][0];
        break;
      case "category-project":
        $portfolio = $this->portfolio();
        if ( ! empty( $portfolio['tax'] ) )
        echo get_the_term_list($post->ID, $portfolio['tax'], '', ', ','');
        break;
    }

    if( isset( $_GET['post_type'] ) )
    {
      switch( $_GET['post_type'] )
      {
        case self::ATTR_POST_TYPE_TESTIMONIALS:
          switch ($column) {
            case "story":
              the_excerpt();
              break;
            case "image":
              the_post_thumbnail( 'thumb_testimonial' );
              break;
            case "website":
              $url = get_post_meta( $post->ID, '_testimonial_website', true );
              echo "<a href=\"" . esc_url( $url ) . "\">$url</a>";
              break;
            case "link":
              $allow_link = get_post_meta( $post->ID, '_testimonial_link', true );
              echo ($allow_link == 1) ? "yes" : "no";
              break;
          }
          break;
        case self::ATTR_POST_TYPE_FAQ:
          switch ($column) {
            case "description":
              the_excerpt();
              break;
            case "category-faq":
              echo get_the_term_list($post->ID, 'category-faq', '', ', ','');
              break;
          }
          break;
        case self::ATTR_POST_TYPE_GALLERY:
          switch ($column) {
            case "photo":
              the_post_thumbnail( array( 70, 70 ) );
              break;
            case "category-photo":
              echo get_the_term_list($post->ID, 'category-photo', '', ', ','');
              break;
          }
          break;
        case self::ATTR_POST_TYPE_TEAM:
          switch ($column) {
            case "description":
              the_excerpt();
              break;
            case "photo":
              the_post_thumbnail('team-thumb');
              break;
            case "profile":
              echo get_the_term_list($post->ID, 'team-profile', '', ', ','');
              break;
          }
          break;
        case self::ATTR_POST_TYPE_PORTFOLIO:
          switch ($column) {
            case "description-portfolio":
              the_excerpt();
              break;
            case "year":
              $custom = get_post_custom();
              echo $custom["year_completed"][0];
              break;
            case "category-project":
              echo get_the_term_list($post->ID, 'category-project', '', ', ','');
              break;
          }
          break;
      }
    }
  }

  /**
   *
   */
  public function action_admin_notices(){
    parent::action_admin_notices();
    global  $wp_version;
    if( version_compare($wp_version, $this->get_var( self::OPT_MINIMUM_WP_VERSION), "<") ) :
      ?>
    <div id="message" class="error fade">
      <?php printf( __( 'The theme you are using requires WordPress version %s or higher. So, many features of it will not perform correctly.', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), $this->get_var( self::OPT_MINIMUM_WP_VERSION) ) ?>
    </div>
      <?php
    endif;
    //}
    if ( basename($_SERVER['PHP_SELF']) != 'themes.php' &&
      ( ! isset( $_GET['page'] ) || isset( $_GET['page'] ) && $_GET['page'] != 'yiw_panel' ) &&
      ( ! isset( $_GET['tab'] ) || isset( $_GET['tab'] ) && $_GET['tab'] != 'contact' ) )
      return;

    $form_choosen = $this->get_option( self::VAR_CONTACT_FORM_CHOOSEN, 'none' );

    if ( empty( $form_choosen ) || $form_choosen == 'none' )
      return;

    $fields = $this->get_option( self::VAR_CONTACT_FORMS );
    $fields = $fields[$form_choosen];

    if ( empty( $fields ) ) { ?>
    <div id="message" class="error fade"><p>
      <?php _e( 'The contact form choosen is empty, so the form will not shown in the page.', $this->get_var( self::OPT_PLUGIN_TDOMAIN ) ) ?>
    </p></div>
      <?php }
    $image_path = $this->get_option( self::VAR_BODY_BG_IMAGE, self::ATTR_CUSTOM );

    if ( $this->get_option( self::VAR_BODY_BG_TYPE ) == self::ATTR_COLOR_UNIT || $image_path == self::ATTR_CUSTOM || file_exists($this->get_var( self::OPT_THEME_DIR ) . '/' . $image_path ) )
    return;

    echo '<div id="message" class="error">';
    _e( "Since this theme version, some body backgrounds images are removed. Please, check again in Theme Options -> Colors, to choose your favourite background.", $this->get_var( self::OPT_PLUGIN_TDOMAIN ));
    echo '</div>';
  }

  public function action_admin_menu(){
    parent::action_admin_menu();


    //create new top-level menu
    add_theme_page('LayerSlider', 'LayerSlider', 'edit_theme_options', 'kwtf_layerslider', array( $this, 'layerslider_settings_page'));


    if (function_exists('simplexml_load_string')) { // Stop if simplexml_load_string funtion isn't available
      $xml = $this->get_latest_theme_version( $this->get_var( self::OPT_NOTIFIER_CACHE_INTERVAL)); // Get the latest remote XML file on our server
      //$theme_data = get_theme_data(TEMPLATEPATH . '/style.css'); // Read theme current version from the style.css
      $theme_data = wp_get_theme( NULL, TEMPLATEPATH);
      if ( ! is_object( $xml ) )
        return;

      if( version_compare($xml->latest, $theme_data['Version'], '>') ) { // Compare current theme version with the remote XML version
        add_dashboard_page( $this->get_var( self::OPT_NAME) . ' Theme Updates', $this->get_var( self::OPT_NAME) . ' <span class="update-plugins count-1"><span class="update-count">1 Update</span></span>', 'administrator', 'theme-update-notifier', array( $this, 'update_notifier'));
      }
    }
  }

  public function action_wp_head() {
    if ( function_exists( 'qtrans_useCurrentLanguageIfNotFoundShowAvailable' ) )
      $this->option_values = $this->qtranslate_option_walk( $this->option_values );
    $this->slider_init();

    /**
     * Add new roles css for the customizations
     *
     * @since 1.0
     */
    $uploads = wp_upload_dir();
    $custom_style = stripslashes_deep( $this->get_option( self::VAR_CUSTOM_STYLE, '' ) );

    $custom_style = str_replace( '%siteurl%', site_url(), $custom_style );
    $custom_style = str_replace( '%templateurl%', $this->get_var( self::OPT_THEME_URI), $custom_style );
    $custom_style = str_replace( '%contentsurl%', $uploads['baseurl'], $custom_style );
    ?><style type="text/css"><?php
    $this->custom_css_roles( 'colors' );
    $this->custom_css_roles( 'fonts' );
    echo $custom_style;
    do_action( 'kwtf_custom_styles' );
    ?>
  </style>
    <?php
    if ( $this->slider_type() === self::ATTR_LAYERS || $this->slider_type() === self::ATTR_MINILAYERS )
    {
      $template = $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) . '/' . $this->get_var( self::OPT_NAME) . '/init';
      $view = View::factory( $template);
      $view->slides = $this->get_option( self::VAR_LAYERSLIDER_SLIDES);
      $view->uri_slider = $this->get_var( self::OPT_THEME_URI);
      echo $view;
    }

    if ( $this->ensure_woo()){
      ?>
    <script type="text/javascript">
      jQuery(document).ready(function($){
        $('body').bind('added_to_cart', function(){
          $('.add_to_cart_button.added').text('ADDED');
        });
      });
    </script>
    <?php
    }

    if ( $this->ensure_woo( self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE, 0) )
      remove_action( 'woocommerce_template_single_summary', 'woocommerce_template_single_add_to_cart', 30 );
    if ( $this->ensure_woo( self::VAR_SHOP_SHOW_PRICE_SINGLE_PAGE, 0 ) )
      remove_action( 'woocommerce_template_single_summary', 'woocommerce_template_single_price', 10);

  }

  /**
   * Remove the brackets by string passed
   *
   * @param string $str The string to convert
   * @param string $after (optional) An optional string, to add after the string converted
   * @return string The string converted
   *
   * @since 1.0
   */
  public function action_wp_title($str, $after = '')
  {
    $str = str_replace('[', '', $str);
    $str = str_replace(']', '', $str);

    return $str . $after;
  }

  /**
   *
   */
  public function action_wp_enqueue_scripts(){
    parent::action_wp_enqueue_scripts();
    wp_localize_script( 'kwtf-contact-form', 'objectL10n', array(
      'wait' => __( 'wait...', $this->get_var( self::OPT_PLUGIN_TDOMAIN) )
    ) );
  }

  /**
   * @param $context
   * @return string
   */
  public function action_media_buttons_context( $context){

    global $post_ID, $temp_ID;
    $iframe_ID = (int) (0 == $post_ID ? $temp_ID : $post_ID);
    $out = '<a id="add_shortcode" href="options-general.php?page=' .
      $this->get_var( self::OPT_SANITIZED_NAME) . '&post_id='.$iframe_ID.
      '&do='. __('Add Shortcodes', $this->get_var( self::OPT_PLUGIN_TDOMAIN)) .
      '&TB_iframe=1" class="hide-if-no-js thickbox" title="'. __("Add shortcodes", $this->get_var( self::OPT_PLUGIN_TDOMAIN)).'"><img src="'.
      $this->get_var( self::OPT_THEME_URI) ."/images/icon_shortcodes.png".'" alt="'. __("Add Styles with Shortcodes", $this->get_var( self::OPT_PLUGIN_TDOMAIN)) . '" /></a>';
    return $context . $out;
  }

  /**
   *
   */
  function action_restrict_manage_posts() {
    global $typenow, $wp_query;
    if ( $typenow=='product' ) :

      $onsale_check_yes = '';
      $onsale_check_no  = '';

      if ( isset( $_GET['onsale_check'] ) && $_GET['onsale_check'] == 'yes' ) :
        $onsale_check_yes = ' selected="selected"';
      endif;

      if ( isset( $_GET['onsale_check'] ) && $_GET['onsale_check'] == 'no' ) :
        $onsale_check_no = ' selected="selected"';
      endif;

      $output  = "<select name='onsale_check' id='dropdown_onsale_check'>";
      $output .= '<option value="">'.__('Show all products (Sale Filter)', 'woothemes').'</option>';
      $output .= '<option value="yes"'.$onsale_check_yes.'>'.__('Show products on sale', 'woothemes').'</option>';
      $output .= '<option value="no"'.$onsale_check_no.'>'.__('Show products not on sale', 'woothemes').'</option>';
      $output .= '</select>';

      echo $output;

    endif;
  }

  /**
   * @param $url
   * @return mixed
   */
  public function action_clean_url( $url ) {
    if ( is_ssl() )
      $url = str_replace( 'http://', 'https://', $url );
    else
      $url = str_replace( 'https://', 'http://', $url );

    return $url;
  }


  /**
   * Add the widgets on dashboard
   *
   * @since 1.0
   */
  public function action_wp_dashboard_setup() {
    wp_add_dashboard_widget( 'kwtf_dashboard_news', __( 'News from the support forum' , $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), array( $this, 'dashboard_forum_news') );
    wp_add_dashboard_widget( 'kwtf_news', __( 'News from the YIW Blog' , $this->get_var( self::OPT_PLUGIN_TDOMAIN) ), array( $this, 'dashboard_news') );
    // Globalize the metaboxes array, this holds all the widgets for wp-admin

    global $wp_meta_boxes;

    $widgets_on_side = array(
      'kwtf_dashboard_news',
      'kwtf_news'
    );

    foreach( $widgets_on_side as $meta ) {
      $temp = $wp_meta_boxes['dashboard']['normal']['core'][$meta];
      unset($wp_meta_boxes['dashboard']['normal']['core'][$meta]);
      $wp_meta_boxes['dashboard']['side']['core'][$meta] = $temp;
    }
  }

  /**
   * @param $item
   * @param $key
   * @param $param
   */
  public function convert_url( &$item, $key, $param ) {

    $uploads = wp_upload_dir();
    $uploads_url = $uploads['baseurl'];

    $type = $param['type'];
    $url_from = $param['url_from'];

    $item = maybe_unserialize( $item );

    switch ( $type ) {

      case 'in_import' :
        if ( is_array( $item ) ) {
          array_walk_recursive( $item, array( $this, 'convert_url'), $param );
          $item = serialize($item);
        } else {
          $item = str_replace( $url_from['uploadsurl'], $uploads_url, $item );
          $item = str_replace( $url_from['siteurl'], site_url(), $item );
        }
        break;

      case 'in_export' :
        if ( is_array( $item ) ) {
          array_walk_recursive( $item, array( $this, 'convert_url'), $param );
          $item = serialize($item);
        } else {
          $item = str_replace( $uploads_url, '%uploadsurl%', $item );
          $item = str_replace( site_url(), '%siteurl%', $item );
        }
        break;

    }
  }

  /**
   * 
   */
  public function manage_edit_create_portfolio_columns ( $columns){
    $columns = array(
	    'cb' => '<input type="checkbox" />',
	    'title' => __( 'Name', $this->plg_tdomain ),
	    'portfolio-type' => __( 'Layout Type', $this->plg_tdomain ),
	    'portfolio-items' => __( 'Items', $this->plg_tdomain ),       
	    'portfolio-labels' => __( 'Labels', $this->plg_tdomain ),    
	    'portfolio-tax' => __( 'Tax', $this->plg_tdomain ),  
    );

    return $columns;
  }

  /**
   * @param $columns
   * @return array
   */
  public function bl_testimonials_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => __( "Name", $this->plg_tdomain ),
      "image" => __( "Image", $this->plg_tdomain ),
      "story" => __( "Story", $this->plg_tdomain ),
      "website" => __( "Web Site", $this->plg_tdomain ),
      "link" => __("Allow Link", $this->plg_tdomain)
    );

    return $columns;
  }

  /**
   * @param $columns
   * @return array
   */
  public function bl_faq_edit_columns($columns){
    $columns = array(
      'cb' => '<input type="checkbox" />',
      'title' => __( 'Question', $this->plg_tdomain ),
      'description' => __( 'Answer', $this->plg_tdomain ),
      'category-faq' => __( 'FAQ Category', $this->plg_tdomain ),
    );


    return $columns;
  }

  /**
   * @param $columns
   * @return array
   */
  function gallery_edit_columns($columns){
    $columns = array(
      'cb' => '<input type="checkbox" />',
      'title' => __( 'Photo Title', $this->plg_tdomain ),
      'photo' => __( 'Photo', $this->plg_tdomain ),
      'category-photo' => __( 'Category Photo', $this->plg_tdomain ),
    );


    return $columns;
  }

  /**
   * @param $columns
   * @return array
   */
  public function team_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => __( "Name", $this->plg_tdomain ),
      "photo" => __( "Photo", $this->plg_tdomain ),
      "description" => __( "Description", $this->plg_tdomain ),
      "profile" => __( "Profile", $this->plg_tdomain )
    );

    return $columns;
  }

  function services_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => __( "Name", $this->plg_tdomain ),
    );
    return $columns;
  }

  function nav_menu_meta_box() { ?>
  <div class="prices">
    <input type="hidden" name="woocommerce_currency" id="woocommerce_currency" value="<?php echo get_woocommerce_currency_symbol( get_option('woocommerce_currency') ) ?>" />
    <input type="hidden" name="woocommerce_shop_url" id="woocommerce_shop_url" value="<?php echo get_option('permalink_structure') == '' ? site_url() . '/?post_type=product' : get_permalink( get_option('woocommerce_shop_page_id') ) ?>" />
    <input type="hidden" name="menu-item[-1][menu-item-url]" value="" />
    <input type="hidden" name="menu-item[-1][menu-item-title]" value="" />
    <input type="hidden" name="menu-item[-1][menu-item-type]" value="custom" />

    <p>
      <?php _e( sprintf( 'The values are already expressed in %s', get_woocommerce_currency_symbol( get_option('woocommerce_currency') ) ), $this->get_var( self::OPT_PLUGIN_TDOMAIN) ) ?>
    </p>

    <p>
      <label class="howto" for="prices_filter_from">
        <span><?php _e('From'); ?></span>
        <input id="prices_filter_from" name="prices_filter_from" type="text" class="regular-text menu-item-textbox input-with-default-title" title="<?php esc_attr_e('From'); ?>" />
      </label>
    </p>

    <p style="display: block; margin: 1em 0; clear: both;">
      <label class="howto" for="prices_filter_to">
        <span><?php _e('To'); ?></span>
        <input id="prices_filter_to" name="prices_filter_to" type="text" class="regular-text menu-item-textbox input-with-default-title" title="<?php esc_attr_e('To'); ?>" />
      </label>
    </p>

    <p class="button-controls">
			<span class="add-to-menu">
				<img class="waiting" src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" alt="" />
				<input type="submit" class="button-secondary submit-add-to-menu" value="<?php esc_attr_e('Add to Menu'); ?>" name="add-custom-menu-item" />
			</span>
    </p>

  </div>
  <?php
  }

  function news_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => __( "Name", $this->plg_tdomain ),
    );
    return $columns;
  }

  /**
   * The widget for forum news
   *
   * @since 1.0
   */
  function dashboard_forum_news() {
    $args = array( 'show_author' => 1, 'show_date' => 1, 'show_summary' => 0, 'items'=>10 );
    if ( $this->get_var( self::OPT_RSS_FORUM_URL) != '')
      wp_widget_rss_output( $this->get_var( self::OPT_RSS_FORUM_URL), $args );
  }

  /**
   * The widget for blog news
   *
   * @since 1.0
   */
  function dashboard_news() {
    $args = array( 'show_author' => 1, 'show_date' => 1, 'show_summary' => 1, 'items'=>3 );
    if ( $this->get_var( self::OPT_RSS_URL) != '')
      wp_widget_rss_output( $this->get_var( self::OPT_RSS_URL), $args );
  }

  /**
   * Markup for the fields of the shortcode
   *
   * @since 1.0
   */
  public function fields_shortcode( $shortcode_id ) {
    $shortcodes = $this->get_var( self::OPT_SHORTCODES);

    $the_ = $shortcodes[$shortcode_id];
    $html = '<input type="hidden" value="'.$shortcode_id.'" class="mce-item mce-scopentag" />';

    // description
    if ( isset( $the_['desc'] ) && ! empty( $the_['desc'] ) )
      $html .= '<p>'.$the_['desc'].'</p>';

    // the parameters
    if ( isset( $the_['parameters'] ) && is_array( $the_['parameters'] ) && ! empty( $the_['parameters'] ) ) :

      foreach ( $the_['parameters'] as $param ) {
        $html .= '<div class="fieldset">';

        // description
        if ( isset( $param['desc'] ) && ! empty( $param['desc'] ) )
          $html .= '<div class="description">'.$param['desc'].'</div>';

        $html .= '<label class="css-mce-label">'.$param['name'].'</label>';
        $html .= '<div class="css-mce-input">';

        switch ( $param['type'] ) {

          case 'text' :
            $html .= '<input type="text" name="'.$param['id'].'" class="mce-item mce-property" />';
            break;

          case 'select' :
            $html .= '<select name="'.$param['id'].'" class="mce-item mce-property" />';
            $html .= '<option value=""></option>';
            if ( isset( $the_['options'] ) && is_array( $the_['options'] ) && ! empty( $the_['options'] ) ) :
              foreach ( $the_['options'] as $option_id => $option_value )
                $html .= '<option value="'.$option_id.'">'.$option_value.'</option>';
            endif;
            $html .= '</select>';
            break;

          case 'checkbox' :
            $html .= '<input type="checkbox" name="'.$param['id'].'" class="mce-item mce-property" value="1" />';
            break;

          case 'textarea' :
            $html .= '<textarea name="'.$param['id'].'" class="mce-item mce-property"></textarea>';
            break;

          default :
            $html .= apply_filters( 'kwtf_shortcode_parameter_type_' . $param['type'], $html, $param );
            break;

        }

        $html .= '<div class="clearer"></div></div><div class="clearer"></div></div>';
      }

    endif;

    // add the shortcode of the content of shortcode
    if ( $the_['content'] )
      $html .= '
    	    <div class="fieldset">
    			<label class="css-mce-label">Content</label>
    			<div class="css-mce-input">
    				<textarea rel="" class="mce-item mce-content" name="sws_content" id="mce-textarea-1"> </textarea>
                </div>
    			<div class="clearer"></div>
    		</div>
            <input type="hidden" value="'.$shortcode_id.'" class="mce-item mce-scclosetag" />
    		<input type="hidden" value="'.$shortcode_id.'" name="sc_shortcode" id="sc_shortcode" />
            ';

    $html .= '<div class="fieldset-buttons">
                <input type="button" value="'.__( 'Insert shortcode', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ) . '" class="button-primary" onclick="javascript:insert_csshortcode();">
            </div>';

    echo $html;
  }

  /**
   * Generate the markup html to choose the shortcode to add in to the editor
   *
   * @since 1.0
   */
  public function dropdown_shortcodes( $echo = TRUE) {
    $shortcodes = $this->get_var( self::OPT_SHORTCODES);

    // array with all only shortcodes name
    $html = '<select id="choose-shortcode-trigger">';
    $html .= '<option value=""></option>';

    foreach ( $shortcodes as $shortcode => $args )
      $html .= '<option value="'.$shortcode.'">'.$args['name'].'</option>';

    $html .= '</select>';
    if ($echo)
      echo $html;
    else
      return $html;
  }


  // The notifier page
  function update_notifier() {
    $xml = $this->get_latest_theme_version($this->get_var( self::OPT_NOTIFIER_CACHE_INTERVAL)); // Get the latest remote XML file on our server
    $theme_data = wp_get_theme( NULL, TEMPLATEPATH);
    //$theme_data = get_theme_data(TEMPLATEPATH . '/style.css'); // Read theme current version from the style.css ?>


  <style>
    .update-nag { display: none; }
    #instructions {max-width: 670px;}
    h3.title {margin: 30px 0 0 0; padding: 30px 0 0 0; border-top: 1px solid #ddd;}
  </style>

  <div class="wrap">

    <div id="icon-tools" class="icon32"></div>
    <h2><?php echo $this->get_var( self::OPT_NAME) ?> Theme Updates</h2>
    <div id="message" class="updated below-h2"><p><strong>There is a new version of the <?php echo $this->get_var( self::OPT_NAME); ?> theme available.</strong> You have version <?php echo $theme_data['Version']; ?> installed. Update to version <?php echo $xml->latest; ?>.</p></div>

    <img style="float: left; margin: 0 20px 20px 0; border: 1px solid #ddd;" src="<?php echo $this->get_var( self::OPT_THEME_URI) . '/screenshot.png'; ?>" />

    <div id="instructions">
      <h3>Update Download and Instructions</h3>
      <p><strong>Please note:</strong> make a <strong>backup</strong> of the Theme inside your WordPress installation folder <strong>/wp-content/themes/<?php echo $this->get_var( self::OPT_NAME); ?>/</strong>. I also encourage you to make a full backup your site and database before performing an update.</p>
      <p>To get the latest update of the Theme, login to <a href="http://www.themeforest.net/">ThemeForest</a>, head over to your <strong>Downloads</strong> section and re-download the theme like you did when you bought it.</p>
      <p>Extract the contents of the zip file, look for the extracted theme folder, and after you have all the new files upload them using FTP to the <strong>/wp-content/themes/<?php echo $this->get_var( self::OPT_NAME); ?>/</strong> folder overwriting the old ones (this is why it's important to backup any changes you've made to the theme files).</p>
      <p>If you didn't make any changes to the theme files, you are free to overwrite them with the new ones without the risk of losing theme settings, pages, posts, slider images, etc.</p>
      <p>Now if you have modified files like CSS or some php files and you haven't kept track of your changes then you can use some 'diff' tools to compare the two versions' files and folders. That way you'd know exactly what files to update and where, line by line. Otherwise you'll loose your customizations.</p>
    </div>

    <h3 class="title">Changelog</h3>
    <?php echo $xml->changelog; ?>

  </div>

    <?php }

  /**
   * Styles the header image displayed on the Appearance > Header admin panel.
   *
   * Referenced via add_custom_image_header() in twentyten_setup().
   *
   * @since Twenty Ten 1.0
   */
  public function admin_header_style() {
    ?>
  <style type="text/css"> /* Shows the same border as on front end */
  #headimg {
    border-bottom: 1px solid #000;
    border-top: 4px solid #000;
  }
    /* If NO_HEADER_TEXT is false, you would style the text with these selectors: #headimg #name { } #headimg #desc { } */
  </style>
    <?php
  }

  /**
   *
   */
  public function fonts_cufon() {
    $loading = $this->get_all_fonts_user();

    $output = '';

    // cufon
    if ( isset( $loading[self::ATTR_CUFON] ) && ! empty( $loading[self::ATTR_CUFON] ) ) :

      $output .= '<script type="text/javascript">';
      foreach ( $loading[self::ATTR_CUFON] as $font ) {
        wp_register_script( 'cufon', $this->get_var( self::OPT_THEME_DIR) . '/js/cufon-yui.js', array(), '1.09');
        wp_enqueue_script( 'cufon-' . $font['value'], $this->get_var( self::OPT_THEME_URI)."/fonts/".$font['value'].".font.js", array('cufon'));
        $output .= "  Cufon.replace( '$font[css]', { fontFamily: '$font[value]', hover: true } );\n";
        $this->add_font_bodyclass( 'cufon-' . $font['value'] );
      }
      $output .= '</script>' . "\n";

      add_action( 'wp_head', create_function( '', "echo stripslashes('".addslashes($output)."');" ) );

    endif;
  }

  /**
   * @param string $sid
   * @param null $default
   * @return mixed|null|string
   */
  public function get_option( $sid= NULL, $default = NULL){
    $id = get_the_ID();
    if ( isset( $id ) )
      $option = get_post_meta( $id, $sid, true );
      if ( !$option)
        $option = get_post_meta( $id, '_' . $sid, true );
    else
      $option = '';

    if ( $option != '' || $option != false )
      return $option;
    else return parent::get_option( $sid, $default);
  }

  /**
   * Get Page ID by page name
   *
   * @param string $page_name
   *
   * @return string|int
   */
  public function get_pageID_by_pagename( $page_name ) {
    global $wpdb;
    return $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$page_name'");
  }

  /**
   *
   * Enter description here ...
   */
  public function portfolios() {
    $r = array();

    $portfolios = wp_cache_get( 'kwtf_portfolios' );
    if ( FALSE === $portfolios ) {
      $portfolios = get_posts( array(
        'post_type' => self::ATTR_POST_TYPE_PORTFOLIO,
        'numberposts' => -1
      ) );
      wp_cache_set( 'kwtf_portfolios', $portfolios );
    }

    foreach ( $portfolios as $post ) {
      $read_more = get_post_meta( $post->ID, '_portfolio_read_more', TRUE );
      $r[ sanitize_title( $post->post_title ) ] = array(
        'ID' => $post->ID,
        'title' => $post->post_title,
        'tax' => sanitize_title( get_post_meta( $post->ID, '_portfolio_tax', TRUE ) ),
        'items' => get_post_meta( $post->ID, '_portfolio_items', TRUE ),
        'layout' => get_post_meta( $post->ID, '_portfolio_type', TRUE ),
        'read_more' => ! empty( $read_more ) ? $read_more : __( 'View Project', $this->plg_tdomain )
      );
    }

    return $r;
  }

  public function excerpt_text( $text, $excerpt_length = 50, $excerpt_more = '' ) {
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
      array_pop($words);
      $text = implode(' ', $words);
      $text = $text . $excerpt_more;
    } else {
      $text = implode(' ', $words);
    }

    echo $text;
  }

  /**
   *
   */
  public function layerslider_settings_page(){
    $template = $this->get_var( self::OPT_THEMES_SUB_DIRECTORY) . '/' . $this->get_var( self::OPT_NAME) . '/settings';
    $view = View::factory( $template);
    $view->slides = (array) $this->get_option( self::VAR_LAYERSLIDER_SLIDES);
    echo $view;
  }

  /**
   * Retrieve the type of video, by url
   *
   * @param string $url The video's url
   * @return mixed A string format like this: "type:ID". Return FALSE, if the url isn't a valid video url.
   *
   * @since 1.0
   */
  public function video_type_by_url( $url ) {
    $parsed = parse_url( esc_url( $url ) );

    switch ( $parsed['host'] ) :

      case 'www.youtube.com' :
        $id = $this->get_yt_video_id( $url );
        return "youtube:$id";

      case 'vimeo.com' :
        preg_match( '/http:\/\/(www\.)*vimeo\.com\/(.*)/', $url, $matches );
        $id = $matches[2];
        return "vimeo:$id";

      default :
        return FALSE;

    endswitch;
  }

  /**
   * Simple echo a string, with a before and after string, only if the main string is not empty.
   *
   * @param string $before What there is before the main string
   * @param string $string The main string. If it is empty or null, the functions return null.
   * @param string $after What there is after the main string
   * @param bool $echo If echo or only return it
   * @return string The complete string, if the main string is not empty or null
   *
   * @since 1.0
   */
  public function string_( $before = '', $string = '', $after = '', $echo = TRUE )
  {
    $html = '';

    if( $string != '' AND !is_null( $string ) )
      $html = $before . $string . $after;

    if( $echo )
      echo $html;

    return $html;
  }

  /**
   * Retrieve the links of the slide, set from Theme Options, for the sliders
   *
   * @param bool $a Reference to a flag for say if there is a link
   * @param string $url Reference to the url of the slide
   * @param array $slide The slide array, from the Theme Options
   * @return null
   *
   * @since 1.0
   */
  public  function links_sliders( &$a, &$url, $slide )
  {
    switch( $slide['link_type'] )
    {
      case 'page':
        $a = TRUE;
        $url = get_permalink( $slide['link_page'] );
        break;

      case 'category':
        $a = TRUE;
        $theCatId = get_category_by_slug( $slide['link_category'] );
        $url = get_category_link( $theCatId->term_id );
        break;

      case 'url':
        $a = TRUE;
        $url = $slide['link_url'];
        break;

      case 'none':
        $a = FALSE;
        $url = '';
        break;
    }
  }

  /**
   * @param $settings
   * @return array
   */
  public function get_configuration( $settings )
  {
    $fields = array();
    foreach( $settings as $setting => $val )
    {
      $var = $this->get_option( "slider_flash_$setting" );
      $var = str_replace( '#', '0x', $var );

      if( $var )
        $fields[] = "$setting=\"$var\"";
      else
        $fields[] = "$setting=\"$val\"";
    }

    return $fields;
  }

  /**
   * Echo the pagination
   *
   * @since 1.0
   * @param string $pages
   * @param int $range
   * @param bool $echo
   * @return mixed|void
   */
  public function pagination( $pages = '', $range = 10, $echo = TRUE )
  {
    global $paged;
    if( empty( $paged ) ) $paged = 1;

    $html = '';

    if( $pages == '' ) {
      global $wp_query;

      if ( isset( $wp_query->max_num_pages ) )
        $pages = $wp_query->max_num_pages;

      if( !$pages )
        $pages = 1;
    }

    if( 1 != $pages ) {
      $html .= "<div class='general-pagination group'>";
      if( $paged > 2 ) $html .= "<a href='" . get_pagenum_link( 1 ) . "'>&laquo;</a>";
      if( $paged > 1 ) $html .= "<a href='" . get_pagenum_link( $paged - 1 ) . "'>&lsaquo;</a>";

      for ( $i=1; $i <= $pages; $i++ )
      {
        if( 1 != $pages &&( !( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $showitems ) )
        {
          $class = ( $paged == $i ) ? " class='selected'" : '';
          $html .= "<a href='" . get_pagenum_link( $i ) . "'$class >$i</a>";
        }
      }

      if ( $paged < $pages ) $html .= "<a href='" . get_pagenum_link( $paged + 1 ) . "'>&rsaquo;</a>";
      if ( $paged < $pages - 1 ) $html .= "<a href='" . get_pagenum_link($pages) . "'>&raquo;</a>";

      $html .= "</div>\n";
    }

    if ( $echo)
      echo apply_filters( 'kwtf_pagination', $html );
    else
      return apply_filters( 'kwtf_pagination', $html );
  }

  /**
   * Return the page breadcrumbs
   *
   */
  public function the_breadcrumb() {
    //if ( is_page_with_breadcrumb() ) :

    $delimiter = ' > ';
    $home = 'Home Page'; // text for the 'Home' link
    $before = '<a class="no-link current" href="#">'; // tag before the current crumb
    $after = '</a>'; // tag after the current crumb

    if ( !is_home() && !is_front_page() || is_paged() ) {

      echo '<div id="crumbs" class="theme_breadcumb">';

      global $post;
      $homeLink = site_url();
      echo '<a class="home" href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

      if ( is_category() ) {
        global $wp_query;
        $cat_obj = $wp_query->get_queried_object();
        $thisCat = $cat_obj->term_id;
        $thisCat = get_category($thisCat);
        $parentCat = get_category($thisCat->parent);
        if ( $thisCat->parent != 0 )
          echo get_category_parents( $parentCat, TRUE, ' ' . $delimiter . ' ' );
        echo $before . 'Archive by category "' . single_cat_title('', FALSE) . '"' . $after;

      } elseif ( is_day() ) {
        echo '<a class="no-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo '<a class="no-link" href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('d') . $after;

      } elseif ( is_month() ) {
        echo '<a class="no-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
        echo $before . get_the_time('F') . $after;

      } elseif ( is_year() ) {
        echo $before . get_the_time('Y') . $after;

      } elseif ( is_single() && !is_attachment() ) {
        if ( get_post_type() != 'post' ) {
          $post_type = get_post_type_object(get_post_type());
          $slug = $post_type->rewrite;
          echo '<a class="no-link" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
          echo $before . get_the_title() . $after;
        } else {
          $cat = get_the_category(); $cat = $cat[0];
          echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
          echo $before . get_the_title() . $after;
        }

      } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
        $post_type = get_post_type_object(get_post_type());
        echo $before . $post_type->labels->singular_name . $after;

      } elseif ( is_attachment() ) {
        $parent = get_post($post->post_parent);
        $cat = get_the_category($parent->ID); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo '<a class="no-link" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;

      } elseif ( is_page() && !$post->post_parent ) {
        echo $before . get_the_title() . $after;

      } elseif ( is_page() && $post->post_parent ) {
        $parent_id  = $post->post_parent;
        $breadcrumbs = array();
        while ( $parent_id ) {
          $page = get_page($parent_id);
          $breadcrumbs[] = '<a class="no-link" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
          $parent_id  = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        foreach ( $breadcrumbs as $crumb )
          echo $crumb . ' ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;

      } elseif ( is_search() ) {
        echo $before . 'Search results for "' . get_search_query() . '"' . $after;

      } elseif ( is_tag() ) {
        echo $before . 'Posts tagged "' . single_tag_title('', FALSE) . '"' . $after;

      } elseif ( is_author() ) {
        global $author;
        $userdata = get_userdata($author);
        echo $before . 'Articles posted by ' . $userdata->display_name . $after;

      } elseif ( is_404() ) {
        echo $before . 'Error 404' . $after;
      }

      if ( get_query_var('paged') ) {
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
          echo ' (';
        echo $before . __('Page', $this->plg_tdomain) . ' ' . get_query_var('paged') . $after;
        if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
          echo ')';
      }

      echo '<div class="breadcrumb-end"></div>';
      echo '</div>';

    }
    //endif;
  }

  /**
   * Return the page breadcrumbs
   *
   */
  public function breadcrumb( $delimiter = ' &rsaquo; ' ) {

    $home = __( 'Home Page', $this->plg_tdomain ); // text for the 'Home' link
    $before = '<a class="no-link current" href="#">'; // tag before the current crumb
    $after = '</a>'; // tag after the current crumb


    echo '<p id="crumbs" class="theme_breadcumb">';

    global $post;
    $homeLink = site_url();
    if( !is_home() && !is_front_page() )
      echo '<a class="home" href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ( $thisCat->parent != 0 )
        echo get_category_parents( $parentCat, TRUE, ' ' . $delimiter . ' ' );
      echo $before . 'Archive by category "' . single_cat_title('', FALSE) . '"' . $after;

    } elseif ( is_day() ) {
      echo '<a class="no-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a class="no-link" href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<a class="no-link" href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a class="no-link" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      $r = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      if ( is_string($r))
        echo $r;
      echo '<a class="no-link" href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . ucfirst( strtolower( get_the_title() ) ) . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();

      while ( $parent_id ) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a class="no-link" href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }

      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ( $breadcrumbs as $crumb )
        echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', FALSE) . '"' . $after;

    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
        echo ' (';
      echo $before . __('Page', $this->plg_tdomain) . ' ' . get_query_var('paged') . $after;
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() )
        echo ')';
    }

    //echo '<div class="breadcrumb-end"></div>';
    echo '</p>';

  }

  /**
   * Check if the slider if empty, that haven't any element inside.
   *
   * @return bool true = the slider is empty, false = the slider have elements
   *
   * @since 1.0
   */
  public function is_empty() {
    return $this->slider_is_empty();
  }

  /**
   * Check if there is slides yet and increment the index and update the $current_slide
   * attribute, with current slide arguments.
   *
   * This function is used in the loop, to generate the markup of slider, on the main code.
   *
   * @since 1.0
   */
  public function have_slide() {
    return $this->slider_have_slide();
  }

  /**
   * Echo the parameter of the current slide
   *
   * @param string $var The parameter.
   *
   * @since 1.0
   */
  public function slide_the( $var, $args = array(), $bool = false ) {
    $this->slider_the( $var, $args, $bool );
  }

  /**
   * Get the parameter of the current slide
   *
   * @param string $var The parameter.
   *
   * @since 1.0
   */
  public function slide_get( $var, $args = array() ) {
    return $this->slider_get( $var, $args );
  }

  /**
   * Echo the classes of the current slide.
   *
   * @param string $class Extra class.
   *
   * @since 1.0
   */
  public function slide_class( $class = '', $echo = true ) {
    return $this->slider_slide_class( $class, $echo );
  }

  /**
   * Template for comments and pingbacks.
   *
   * To override this walker in a child theme without modifying the comments template
   * simply create your own twentyten_comment(), and that function will be used instead.
   *
   * Used as a callback by wp_list_comments() for displaying the comments.
   *
   * @since 1.0
   */
  public function comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;

    if( isset($GLOBALS['count']) ) $GLOBALS['count']++;
    else $GLOBALS['count'] = 1;

    switch ( $comment->comment_type ) :
      case '' :
        ?>
<li <?php comment_class(); ?>
  id="li-comment-<?php comment_ID(); ?>"><div
          id="comment-<?php comment_ID(); ?>" class="comment-container group">
          <div class="comment-author vcard">
            <?php echo get_avatar( $comment, 55 ); ?>
            <div class="intro">
              <?php printf( __( '%s', $this->plg_tdomain ), sprintf( '<span class="fn"><cite >%s</cite> says:</span>', get_comment_author_link() ) ); ?>
              <a class="commentDate"
                 href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php
                /* translators: 1: date, 2: time */
                printf( __( '%1$s', $this->plg_tdomain ), get_comment_date() ); ?>
              </a><br />
              <?php edit_comment_link( __( '(Edit)', $this->plg_tdomain ), ' ' );?>
            </div>
          </div>
          <!-- .comment-author .vcard -->
          <div class="comment-meta commentmetadata">
            <?php if ( $comment->comment_approved == '0' ) : ?>
            <em class="moderation"><?php _e( 'Your comment is awaiting moderation.', $this->plg_tdomain ); ?>
            </em> <br />
            <?php endif; ?>
            <div class="comment-body">
              <?php comment_text(); ?>
            </div>
            <div class="reply group">
              <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div>
            <!-- .reply -->
          </div>
          <!-- .comment-meta .commentmetadata -->
        </div> <!-- #comment-##  --> <?php
        break;
      case 'pingback'  :
      case 'trackback' :
        ?>
<li class="post pingback"><p>
          <?php _e( 'Pingback:', $this->plg_tdomain ); ?>
          <?php comment_author_link(); ?>
          <?php edit_comment_link( __('(Edit)', $this->plg_tdomain), ' ' ); ?>
        </p> <?php
        break;
    endswitch;
  }
  
  /**
   *
   */
  public function hook_kwtf_register_sidebars(){
    $portfolios = $this->portfolios();

    foreach ( $portfolios as $pt => $the_ )
    register_sidebar( $this->sidebar_args( $the_['title'] . ' Sidebar', __( 'The sidebar used in Full description layout and in single portfolio template of "'.$the_['title'].'" post type.', $this->plg_tdomain), 'widget', 'h2' ) );
  }

  public function hook_kwtf_panel_type_header_preview( $value){
    if ( isset( $value['id'] ) )
    $id_container = 'id="' . $value['id'] . '-option" ';

    // deps
    if ( isset( $value['deps'] ) ) {
      $value['deps']['id_input'] = $this->option_id( $value['deps']['id'], FALSE );
      $deps[ $value['id'] ] = $value['deps'];
      $class_dep = ' yiw-deps';
      $fade_color_dep = '<div class="fade_color"></div>';
    }
    ?>
  <div <?php echo $id_container ?>
    class="rm_option rm_input rm_select<?php echo $class_dep ?> rm_with_preview">
    <label for="<?php $this->option_id( $value['id'] ); ?>"><?php echo $value['name']; ?>
    </label> <select name="<?php $this->option_name( $value['id'] ); ?>"
      id="<?php $this->option_id( $value['id'] ); ?>"
      <?php if( isset( $value['button'] ) ) : ?> style="width: 240px;"
      <?php endif ?>>
      <?php foreach ($value['options'] as $val => $option) { ?>
      <option value="<?php echo $val ?>"
      <?php selected( $this->get_option( $value['id'], $value['std'] ), $val ) ?>>
        <?php echo $option; ?>
      </option>
      <?php } ?>
    </select>
    <?php if( isset( $value['button'] ) ) : ?>
    <input type="submit" value="<?php echo $value['button']; ?>"
      class="button"
      name="<?php $this->option_id( $value['id'] ); ?>_save"
      id="<?php $this->option_id( $value['id'] ); ?>_save">
    <?php endif ?>
    <small><?php echo $value['desc']; ?> </small>
    <div class="clearfix"></div>
    <?php $style = ( $value['std'] == 'custom' ) ? ' style="display:none;"' : ''; ?>
    <div class="preview" <?php echo $style ?>>
      <img class="min"
        src="<?php echo $this->get_var( self::OPT_THEME_URI) . '/' . $this->get_option( $value['id'], $value['std'] ) ?>"
        title="<?php _e( 'Click to expand the image to the natural size', $this->plg_tdomain ) ?>" />
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        var select = $('#<?php $this->option_id( $value['id'] ); ?>');
var preview = $('#<?php echo $value['id'] ?>-option .preview'); var change_preview = function(){ var value = select.val(); if ( value != 'custom' ) { preview.find('img').attr('src', '<?php echo $this->get_var( self::OPT_THEME_URI) . '/'; ?>'+value); preview.show(); } else { preview.hide(); } }; select.change(change_preview).keypress(change_preview); preview.find('img').click(function(){ $(this).toggleClass('min'); if ( $(this).hasClass('min') ) $(this).attr('title', '<?php _e( 'Click to expand the image to the natural size', $this->plg_tdomain ) ?>'); else $(this).attr('title', '<?php _e( 'Click to minimize the image', $this->plg_tdomain ) ?>'); }); });</script>
  </div> <?php
  }

  // add new type to theme options
  public function hook_kwtf_panel_type_bg_preview( $value ) {

    if ( isset( $value['id'] ) )
    $id_container = 'id="' . $value['id'] . '-option" ';

    // deps
    if ( isset( $value['deps'] ) ) {
      $value['deps']['id_input'] = $this->option_id( $value['deps']['id'], FALSE );
      $deps[ $value['id'] ] = $value['deps'];
      $class_dep = ' yiw-deps';
      $fade_color_dep = '<div class="fade_color"></div>';
    }
    ?>
  <div <?php echo $id_container ?>
    class="rm_option rm_input rm_select<?php echo $class_dep ?> rm_with_preview rm_with_bg_preview">
    <label for="<?php $this->option_id( $value['id'] ); ?>"><?php echo $value['name']; ?>
    </label> <select name="<?php $this->option_name( $value['id'] ); ?>"
      id="<?php $this->option_id( $value['id'] ); ?>"
      <?php if( isset( $value['button'] ) ) : ?> style="width: 240px;"
      <?php endif ?>><?php foreach ($value['options'] as $val => $option) { ?>
      <option value="<?php echo $val ?>"
      <?php selected( $this->get_option( $value['id'], $value['std'] ), $val ) ?>>
        <?php echo $option; ?>
      </option>
      <?php } ?>
    </select>
    <?php if( isset( $value['button'] ) ) : ?>
    <input type="submit" value="<?php echo $value['button']; ?>"
      class="button"
      name="<?php $this->option_id( $value['id'] ); ?>_save"
      id="<?php $this->option_id( $value['id'] ); ?>_save">
    <?php endif ?>
    <small><?php echo $value['desc']; ?> </small>
    <div class="clearfix"></div>
    <?php
  $url = $this->get_var( self::OPT_THEME_URI) . '/' . $this->get_option( $value['id'], $value['std'] );
  $color = $this->get_option( $value['id_colors'] );

  $style = array(
                    "background-color:$color;",
                    "background-image:url('$url');",
                    "background-position:top center;"
                    );
                    $style = implode( '', $style );

                    $style_preview = ( $this->get_option( $value['id'], $value['std'] ) == 'custom' ) ? ' style="display:none"' : '';
                    ?>
    <div class="preview" <?php echo $style_preview ?>>
      <div class="img" style="<?php echo $style ?>"></div>
    </div>
    <script type="text/javascript">
    jQuery(document).ready(function($){
        var select = $('#<?php $this->option_id( $value['id'] ); ?>');
var text_color = $('#<?php $this->option_id( $value['id_colors'] ); ?>'); var preview = $('#<?php echo $value['id'] ?>-option .preview'); preview.css('cursor', 'pointer').attr('title', '<?php _e( 'Click here to update the color selected above', $this->plg_tdomain ) ?>'); select.change(function(){ var value = $(this).val(); if ( value != 'custom' ) { $('.img', preview).css({'background-image':'url(<?php echo $this->get_var( self::OPT_THEME_URI) . '/'; ?>'+value+')'}); preview.show(); } else { preview.hide(); } }); preview.click(function(){ var value = text_color.val(); $('.img', preview).css({'background-color':value}); }); });</script>
  </div> <?php       
  }
  
  /**
   * 
   * @param string $value
   */
  function hook_kwtf_panel_type_select_skin( $value ) {
    if ( isset( $value['id'] ) )
    $id_container = 'id="' . $value['id'] . '-option" ';
    ?>
  <div <?php echo $id_container ?> class="rm_option rm_input rm_select">
    <label for="<?php $this->option_id( $value['id'] ); ?>"><?php echo $value['name']; ?>
    </label> <select name="<?php $this->option_name( $value['id'] ); ?>"
      id="<?php $this->option_id( $value['id'] ); ?>"
      <?php if( isset( $value['button'] ) ) : ?> style="width: 240px;"
      <?php endif ?>><?php foreach ($value['options'] as $val => $option) { ?>
      <option value="<?php echo $val ?>"
      <?php selected( $this->get_option( $value['id'], $value['std'] ), $val ) ?>>
        <?php echo $option; ?>
      </option>
      <?php } ?>
    </select>
    <?php if( isset( $value['button'] ) ) : ?>
    <input type="submit" value="<?php echo $value['button']; ?>"
      class="button"
      name="<?php $this->option_id( $value['id'] ); ?>_save"
      id="<?php $this->option_id( $value['id'] ); ?>_save">
    <?php endif ?>
    <input type="hidden" name="yiw-callback-save"
      value="yiw_select_skins_option" /> <small><?php echo $value['desc']; ?>
    </small>
    <div class="clearfix"></div>
  </div> <?php
  }

  /**
   * @return mixed
   */
  public function hook_kwtf_before_render_panel() {

  }

  /**
   * @param $widgets
   * @return array
   */
  public function hook_kwtf_exlude_widgets( $widgets ) {
    $widgets[] = 'WP_Widget_Recent_Comments';
    $widgets[] = 'WP_Widget_Categories';
    $widgets[] = 'WP_Widget_Recent_Posts';
    return $widgets;
  }

  /**
   * @param $html
   * @return mixed
   */
  public function hook_kwtf_sc_button_html( $html){
    return str_replace( "button\"", "sc-button\"", $html );
  }

  /* product ribbons */
  public function hook_kwtf_custom_styles() {
    $custom_ribbon = $this->get_option( self::VAR_SHOP_PRODUCTS_RIBBON );
    $custom_ribbon_added = $this->get_option( self::VAR_SHOP_PRODUCTS_RIBBON_ADDED );

    if ( ! empty( $custom_ribbon ) )
      echo ".products.ribbon li .buttons .add-to-cart { background-image:url('$custom_ribbon'); }";

    if ( ! empty( $custom_ribbon_added ) )
      echo ".products.ribbon li .buttons .add-to-cart.added { background-image:url('$custom_ribbon_added'); }";


    $custom_ribbon = $this->get_option( self::VAR_TOPBAR_CART_RIBBON );

    if ( ! empty( $custom_ribbon ) )
      echo "#cart { background-image:url('$custom_ribbon'); }";

    ?> .ei-slider {height: <?php echo $this->get_option( self::VAR_SLIDER_ELASTIC_HEIGHT) ?>
  px;} <?php


    // 	if ( yiw_get_option( 'theme_layout' ) != 'boxed' )
    // 		return;

    $role = '';

    $bg_type = $this->get_option( self::VAR_BODY_BG_TYPE );
    $color_bg = $this->get_option( self::VAR_BODY_BG_COLOR );

    switch ( $bg_type ) {

      case self::ATTR_COLOR_UNIT :
        $role = 'background:' . $color_bg . ';';
        break;

      case self::ATTR_BG_IMAGE :
        $image = $this->get_option( self::VAR_BODY_BG_IMAGE, self::ATTR_CUSTOM );

        // image
        if ( $image != self::ATTR_CUSTOM ) {
          $url_image = $this->get_var( self::OPT_THEME_URI) . '/' . $image;
          $position = 'top center';
          $repeat = 'repeat';
          $attachment = 'fixed';
        } else {
          $url_image = esc_url( $this->get_option( self::VAR_BODY_BG_IMAGE_CUSTOM, '' ) );
          $position = $this->get_option( self::VAR_BODY_BG_IMAGE_CUSTOM_POSITION );
          $repeat = $this->get_option( self::VAR_BODY_BG_IMAGE_CUSTOM_REPEATE );
          $attachment = $this->get_option( self::VAR_BODY_BG_IMAGE_CUSTOM_ATTACHMENT );
        }

        if ( $url_image != '' )
          $url_image = " url('$url_image')";

        $attrs = array(
          "background-color: $color_bg",
          "background-image: $url_image",
          "background-position: $position",
          "background-repeat: $repeat",
          "background-attachment: $attachment"
        );

        $role = implode( ";\n", $attrs );
        break;
    }
    ?> body, .stretched-layout .wrapper { <?php echo $role ?> } <?php
    $role = '';

    $bg_type = $this->get_option( self::VAR_HEADER_BG_TYPE );
    $color_bg = $this->get_option( self::VAR_HEADER_BG_COLOR );
    $header_opacity = $this->get_option( self::VAR_HEADER_OPACITY, 1 );

    if ( ! empty( $color_bg ) && $header_opacity != 1 ) {
      $header_bg = str_replace( '#', '', $color_bg );

      if ( strlen( $color_bg ) == 3 ) {
        $color_bg = $color_bg{0}.$color_bg{0}.$color_bg{1}.$color_bg{1}.$color_bg{2}.$color_bg{2};
      }

      //break up the color in its RGB components
      $r = hexdec(substr($color_bg,0,2));
      $g = hexdec(substr($color_bg,2,2));
      $b = hexdec(substr($color_bg,4,2));

      $color_bg = "rgba($r,$g,$b,0.$header_opacity)";
    }

    switch ( $bg_type ) {

      case self::ATTR_COLOR_UNIT :
        $role = '#header { background:' . $color_bg . '; }';
        break;

      case self::ATTR_BG_IMAGE :
        $image = $this->get_option( self::VAR_HEADER_BG_IMAGE );

        // image
        $url_image = $this->get_option( self::VAR_HEADER_BG_IMAGE_CUSTOM );
        $position = $this->get_option( self::VAR_HEADER_BG_IMAGE_CUSTOM_POSITION );
        $repeat = $this->get_option( self::VAR_HEADER_BG_IMAGE_CUSTOM_REPEATE );

        $uploads = wp_upload_dir();
        $url_image = str_replace( '%siteurl%', site_url(), $url_image );
        $url_image = str_replace( '%templateurl%', $this->get_var( self::OPT_THEME_URI), $url_image );
        $url_image = str_replace( '%contentsurl%', $uploads['baseurl'], $url_image );

        $role = '#header { background:' . $color_bg . ' url(\'' . $url_image . '\') ' . $repeat . ' ' . $position . '; }';
        break;

    }

    echo $role;
    $content_width = $this->get_var( self::OPT_CONTENT_WIDTH);

    ?>
  .wrapper-content { width:<?php echo $content_width; ?>px; }
    <?php
    if ( $this->ensure_woo()):
    ?>
    .shop-traditional .products li { width:<?php echo $this->shop_small_w() + ( $this->get_option( self::VAR_SHOP_BORDER_THUMBNAIL ) ? 14 : 0 ) ?>px !important; }
    .shop-ribbon .products li { width:<?php echo $this->shop_small_w() + ( $this->get_option( self::VAR_SHOP_BORDER_THUMBNAIL ) ? 5 : 0 ) ?>px !important; }
    .shop-ribbon .products li {  }
    .shop-ribbon .products li.category { width: auto !important; }
    .products li a strong { width:<?php echo $this->shop_small_w() - 30 ?>px !important; }
    .shop-traditional .products li a img { width:<?php echo $this->shop_small_w() ?>px !important; }
  div.product div.images { width:<?php echo ( $this->shop_large_w() + 14 ) / 960 * 100 ?>%; }
  div.product div.images img { width:<?php echo $this->shop_large_w() ?>px; }
  .layout-sidebar-no div.product div.summary { width:<?php echo ( 960 - ( $this->shop_large_w() + 14 ) - 20 ) / 960 * 100 ?>%; }
  .layout-sidebar-right div.product div.summary, .layout-sidebar-left div.product div.summary { width:<?php echo ( 750 - ( $this->shop_large_w() + 14 ) - 20 ) / 750 * 100 ?>%; }
  .layout-sidebar-no .product.hentry > span.onsale { right:<?php echo 960 - ( $this->shop_large_w() + 14 ) - 10 ?>px; left:auto; }
  .layout-sidebar-right .product.hentry > span.onsale, .layout-sidebar-left .product.hentry > span.onsale { right:<?php echo 750 - ( $this->shop_large_w() + 14 ) - 10 ?>px; left:auto; }
      <?php
    endif;
  }

  /**
   * @param bool $args
   * @return mixed
   */
  public function hook_kwtf_slide_title( $args = false ) {
    if( is_array($args) ) {
      $color = $args[1] != '' ? 'style="color:' . $args[1]. '"' : '';
      return str_replace('[', "<span {$color}>", str_replace(']', '</span>', str_replace('|', '<br />', $args[0])));
    } elseif( is_string($args) ) {
      return str_replace('[', '<span>', str_replace(']', '</span>', str_replace('|', '<br />', $args)));
    }
  }

  /**
   * @param $handle
   * @return bool
   */
  public function hook_kwtf_admin_enqueue_layer_slider( $handle){
    if(strstr($_SERVER['REQUEST_URI'], 'layerslider')) {
      wp_dequeue_style('jquery-ui-style');
      return $handle;
    }
    return FALSE;
  }

  /**
   * @param $handle
   * @return bool
   */
  public function hook_kwtf_wp_enqueue_layer_slider( $handle){
    if ( $this->slider_type() != self::ATTR_LAYERS && $this->slider_type() != self::ATTR_MINILAYERS )
      return FALSE;
    return $handle;
  }

  /**
   * @param $handle
   * @return bool
   */
  public function hook_kwtf_wp_enqueue_woocommerce( $handle){
    $return = FALSE;
    if ( $this->ensure_woo())
      $return = $handle;
    return $return;
  }

  /**
   *
   */
  public function hook_kwtf_initialize_theme(){
    $this->set_var( self::OPT_THEME_URI, get_template_directory_uri());
    $this->set_var( self::OPT_THEME_DIR, get_template_directory());
    $uri = $this->get_var( self::OPT_THEME_URI) . '/';
    $dir = $this->get_var( self::OPT_THEME_DIR) . '/';
    if ( $this->get_var( self::OPT_HAS_JAVASCRIPT))
      $this->set_var( self::OPT_JAVASCRIPT_FILE, $dir . $this->get_var( self::OPT_JAVASCRIPT_FILE));
    if ( $this->get_var( self::OPT_HAS_STYLESHEET))
      $this->set_var( self::OPT_STYLESHEET_FILE, $dir . $this->get_var( self::OPT_STYLESHEET_FILE));
    if ( $this->get_var( self::OPT_HAS_ENQUEUE_SCRIPTS)){
      $ascripts = $this->get_var( self::OPT_ENQUEUE_SCRIPTS);
      foreach($ascripts as $sid => $scripts) {
        foreach( $scripts as $id => $script){
          if ( array_key_exists( self::ATTR_SRC, $ascripts[$sid][$id]) && strpos( $script[self::ATTR_SRC], 'http') === FALSE ){
            $ascripts[$sid][$id][self::ATTR_SRC] = $uri . $script[self::ATTR_SRC];

          }
        }
      }
      $this->set_var( self::OPT_ENQUEUE_SCRIPTS, $ascripts);
    }
    $default_contact_form = array(
      array (
        'title' => __('Name', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'data_name' => 'name',
        'description' => '',
        'type' => 'text',
        'label_checkbox' => '',
        'msg_error' => __('Enter the name', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'required' => 'yes',
        'class' => '',
      ),

      array (
        'title' => __('Email', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'data_name' => 'email',
        'description' => '',
        'type' => 'text',
        'label_checkbox' => '',
        'msg_error' => __('Enter a valid email', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'required' => 'yes',
        'email_validate' => 'yes',
        'reply_to' => 'yes',
        'class' => '',
      ),

      array (
        'title' => __('Phone', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'data_name' => 'phone',
        'description' => '',
        'type' => 'text',
        'label_checkbox' => '',
        'msg_error' => '',
        'class' => '',
      ),

      array (
        'title' => __('Web site', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'data_name' => 'website',
        'description' => '',
        'type' => 'text',
        'label_checkbox' => '',
        'msg_error' => '',
        'class' => '',
      ),

      array (
        'title' => __('Message', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'data_name' => 'message',
        'description' => '',
        'type' => 'textarea',
        'label_checkbox' => '',
        'msg_error' => __('Enter a message', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'required' => 'yes',
        'class' => '',
      )
    );
    $shortcodes = array(
      'one_fourth' => array(
        'name' => __( 'Column 1/4', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'one_fourth_last' => array(
        'name' => __( 'Column 1/4 last', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'one_third' => array(
        'name' => __( 'Column 1/3', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'one_third_last' => array(
        'name' => __( 'Column 1/3 last', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'two_third' => array(
        'name' => __( 'Column 2/3', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'two_third_last' => array(
        'name' => __( 'Column 2/3 last', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'two_fourth' => array(
        'name' => __( 'Column 2/4', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
      'two_fourth_last' => array(
        'name' => __( 'Column 2/4 last', $this->get_var( self::OPT_PLUGIN_TDOMAIN) ),
        'content' => true,    // se lo shortcode deve contenere contenuto
      ),
    );
    /**
     * @var array The tags allowed to insert it on theme options
     * @since 1.0
     */
    $tags_allowed = array(
      'name_site' => get_bloginfo('name'),
      'description_site' => get_bloginfo('description'),
      'site_url' => site_url(),
      'date' => date_i18n( get_option('date_format'), time() )
    );
    $this->set_var( self::OPT_SHORTCODES, $shortcodes);
    $this->set_var( self::OPT_TAGS_ALLOWED, $tags_allowed);

    $this->set_var( self::OPT_DEFAULT_CONTACT_FORM, $default_contact_form);
    $sliders = $this->get_var( self::OPT_SLIDERS);
    foreach($sliders as $slider => $name)
      $sliders[$slider] = __( $name, $this->get_var( self::OPT_PLUGIN_TDOMAIN));
    $this->set_var( self::OPT_SLIDERS, $sliders);

    $porttype = $this->get_var( self::OPT_PORTFOLIO_TYPES);
    foreach($porttype as $port => $name)
      $porttype[$port] = __( $name, $this->get_var( self::OPT_PLUGIN_TDOMAIN));
    $this->set_var( self::OPT_PORTFOLIO_TYPES, $porttype);

    $this->set_var( self::OPT_ACCEPT, $_SERVER['HTTP_ACCEPT']);
    $this->set_var( self::OPT_USER_AGENT, $_SERVER['HTTP_USER_AGENT']);
    if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])) {
      $this->set_var( self::OPT_IS_MOBILE, TRUE);
    } elseif (strpos($_SERVER['HTTP_ACCEPT'], 'text/vnd.wap.wml') > 0 || strpos($_SERVER['HTTP_ACCEPT'], 'application/vnd.wap.xhtml+xml') > 0) {
      $this->set_var( self::OPT_IS_MOBILE, TRUE);
    } else {
      foreach ($this->get_var( self::OPT_MOBILE_DEVICES) as $device => $regexp) {
        if ($this->_mobile_is_device($device)) {
          $this->set_var( self::OPT_IS_MOBILE, TRUE);
        }
      }
    }


    // CONTENT

    remove_filter( 'the_content', 'wpautop'            );
    remove_filter( 'the_content', 'prepend_attachment' );
    remove_filter( 'the_content', 'do_shortcode', 11 ); // AFTER wpautop()
    add_filter( 'manage_edit-' . self::ATTR_POST_TYPE_PORTFOLIO . '_columns', array( $this, 'manage_edit_create_portfolio_columns'), self::ATTR_PRIORITY , 1);
    if( isset( $_GET['post_type'] ) )
    {
      switch( $_GET['post_type'] )
      {
        case self::ATTR_POST_TYPE_TESTIMONIALS:
          add_filter( 'manage_edit-'.self::ATTR_POST_TYPE_TESTIMONIALS.'_columns', array( $this, 'bl_testimonials_edit_columns'));
          break;
        case self::ATTR_POST_TYPE_FAQ:
          add_filter( 'manage_edit-'.self::ATTR_POST_TYPE_FAQ.'_columns', array( $this, 'bl_faq_edit_columns'));
          break;
        case self::ATTR_POST_TYPE_GALLERY:
          add_filter( 'manage_edit-'.self::ATTR_POST_TYPE_GALLERY.'_columns', array( $this,'gallery_edit_columns'));
          break;
      }
    }

    $this->set_var( self::OPT_EMAIL_MESSAGE, $this->send_email());
    if ( isset( $_POST['type-send'] ) AND $_POST['type-send'] == 'ajax' )
    {
      $this->module_general_message_of( $_POST['id_form'] );
      die;
    }
  }

  /**
   *
   */
  public function hook_kwtf_initialize_woocommerce(){

    remove_action( 'woocommerce_pagination', 'woocommerce_catalog_ordering', 20 );
    add_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering' );

    // active the price filter
    add_action('init', 'woocommerce_price_filter_init');
    add_filter('loop_shop_post_in', 'woocommerce_price_filter');
    /**
     * PRODUCT PAGE
     */
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
    add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 60);


    if ( $this->ensure_woo( self::VAR_SHOP_SHOW_BUTTON_ADD_TO_CART_SINGLE_PAGE, 0 )){
      remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
    }
  }

  // decide the layout for the shop pages
  function hook_kwtf_layout_page( $default_layout ) {
    $is_shop_page = ( get_option('woocommerce_shop_page_id') != false ) ? is_page( get_option('woocommerce_shop_page_id') ) : false;
    if ( is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') || $is_shop_page )
      return $this->get_var( self::OPT_DEFAULT_LAYOUT_PAGE_SHOP);
    else
      return $default_layout;
  }


  /**
   * @param $cols
   * @return mixed|null|string
   */
  public function hook_loop_shop_per_page( $cols){
    if ( $this->ensure_woo()){
      return $this->get_option( self::VAR_SHOP_PRODUCTS_PER_PAGE, $cols );
    }
  }

  /**
   * LAYOUT
   */
  function hook_woocommerce_before_main_content() {
    $layout = $this->layout_page();
    if ( get_post_type() == 'product' && is_tax( 'product-category' ) )
      $layout = 'sidebar-no';
    elseif ( get_post_type() == 'product' && is_single() )
      $layout = $this->get_option( self::VAR_SHOP_LAYOUT_PAGE_SINGLE );
    elseif ( get_post_type() == 'product' && ! is_single() )
      $layout = ( $l=get_post_meta( get_option( 'woocommerce_shop_page_id' ), '_layout_page', true )) ? $l : $this->get_var( self::OPT_DEFAULT_LAYOUT_PAGE_SHOP);
    ?><div id="primary" class="layout-<?php echo $layout ?> group">
        <div class="inner group"><?php

    if ( $layout == 'sidebar-no' ) {
      remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
      add_filter('loop_shop_columns', create_function('', 'return 5;'));
    }
  }

  /**
   *
   */
  function hook_woocommerce_sidebar() {
    ?></div></div><?php
  }

  /**
   *
   */
  function hook_woocommerce_after_single_product_summary() {
    echo '<div id="related-products">';
    echo '<h3>', __( 'Related Products', 'woocommerce' ), '</h3>';
    woocommerce_related_products( apply_filters('loop_shop_columns', 5), apply_filters('loop_shop_columns', 5) );
    echo '</div>';
  }

  /**
   * @param $template
   * @param $template_name
   * @param $template_path
   */
  function hook_woocommerce_locate_template( $template, $template_name, $template_path){
    $this->bind_template( $template_name);
    return $template;
  }

  /**
   * @param $datas
   * @return array
   */
  function hook_add_to_cart_fragments( $datas ) {
    global $woocommerce;

    // quantity
    $qty = 0;
    if (sizeof($woocommerce->cart->get_cart())>0) : foreach ($woocommerce->cart->get_cart() as $item_id => $values) :

      $qty += $values['quantity'];

    endforeach; endif;

    if ( $qty == 1 )
      $label = __( 'item', $this->get_var( self::OPT_PLUGIN_TDOMAIN) );
    else
      $label = __( 'items', $this->get_var( self::OPT_PLUGIN_TDOMAIN) );

    ob_start();
    echo '<ul class="cart_list product_list_widget hide_cart_widget_if_empty">';
    if (sizeof($woocommerce->cart->get_cart())>0) :
      foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item) :
        $_product = $cart_item['data'];
        if ($_product->exists() && $cart_item['quantity']>0) :
          echo '<li><a href="'.get_permalink($cart_item['product_id']).'">';

          echo $_product->get_image();

          echo apply_filters('woocommerce_cart_widget_product_title', $_product->get_title(), $_product).'</a>';

          echo $woocommerce->cart->get_item_data( $cart_item );

          echo '<span class="quantity">' .$cart_item['quantity'].' &times; '.woocommerce_price($_product->get_price()).'</span></li>';
        endif;
      endforeach;
    else:
      echo '<li class="empty">'.__('No products in the cart.', 'woocommerce').'</li>';
    endif;
    echo '</ul>';
    if ($qty == 1) :
      echo '<p class="total"><strong>' . __('Subtotal', 'woocommerce') . ':</strong> '. $woocommerce->cart->get_cart_total() . '</p>';

      do_action( 'woocommerce_widget_shopping_cart_before_buttons' );

      echo '<p class="buttons"><a href="'.$woocommerce->cart->get_cart_url().'" class="button">'.__('View Cart &rarr;', 'woocommerce').'</a> <a href="'.$woocommerce->cart->get_checkout_url().'" class="button checkout">'.__('Checkout &rarr;', 'woocommerce').'</a></p>';
    endif;
    $widget = ob_get_clean();

    $datas['span.minicart'] = '<span class="minicart">' . $qty . ' ' . $label . '</span>';
    $datas['.widget_shopping_cart .product_list_widget'] = $widget;
    $datas['.widget_shopping_cart .total .amount'] = $woocommerce->cart->get_cart_total();

    return $datas;
  }

  /**
   *
   */
  public function hook_kwtf_initialize_jigoshop(){

  }

  /**
   * SAMPLE
   *
   * @description
   *    description of sample shortcode
   *
   * @example
   *   [sample title="" incipit="" phone="" [class=""]]
   *
   * @attr
   *   class (optional) - class of container of box call to action (optional) @default: 'call-to-action'
   *   href  - url of button
   *   title  - the title of call to action
   *   incipit - the text below title
   **/
  function do_sample($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'call-to-action',
        'title' => NULL,
        'incipit' => NULL,
        'phone' => NULL
    ), $atts));

    $html = ''; // this is the var to use for the html output of shortcode

    return apply_filters( 'kwtf_sc_sample_html', $html );   // this must be written for each shortcode
  }
  
  /**
   * TESTIMONIALS
   *
   * @description
   *    Show all post on testimonials post types
   *
   * @example
   *   [testimonials items=""]
   *
   * @params
   *      items - number of item to show
   *
   **/
  function do_testimonials($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "items" => NULL
    ), $atts));

    wp_reset_query();

    $args = array(
        'post_type' => 'bl_testimonials'
        );

        $args['posts_per_page'] = ( !is_null( $items ) ) ? $items : -1;

        $tests = new WP_Query( $args );

        $html = '';
        if( !$tests->have_posts() ) return $html;

        //loop
        $html = '';
        $c = 0;
        while( $tests->have_posts() ) : $tests->the_post();
        $website = get_post_meta( get_the_ID(), '_testimonial_website', TRUE );
        $allow_link = get_post_meta( get_the_ID(), '_testimonial_link', TRUE );
        $link = get_permalink();
        $label = get_post_meta( get_the_ID(), '_testimonial_label', TRUE ) ? get_post_meta( get_the_ID(), '_testimonial_label', TRUE ) : str_replace('http://', '', $website);
        $noavatar = "<img width=\"94\" height=\"94\" src=\"" . $this->get_var( self::OPT_THEME_URI) ."/images/noavatar.png\" class=\"attachment-thumb_testimonial wp-post-image\">";
        if ( ! empty( $website ) )
        $website = "<a class=\"website\" href=\"" . esc_url( $website ) . "\">". $label  ."</a>"; ?>

  <div
    class="testimonial two-fourth<?php if ( $c % 2 != 0 ) echo ' last' ?>">

    <div class="thumbnail">
    <?php


    if ( has_post_thumbnail()){
      echo $allow_link == 1 ? '<a href="' . $link .'">' : '';
      the_post_thumbnail('thumb_testimonial');
      echo $allow_link == 1 ? '</a>' : '';
    } else {
      echo $allow_link == 1 ? '<a href="' . $link .'">' : '';
      echo $noavatar;
      echo $allow_link == 1 ? '</a>' : '';
    } ?>
    </div>

    <div class="testimonial-text">
    <?php echo $this->content( 'content', 38 ); ?>
    </div>

    <div class="testimonial-name">

    <?php
    if($allow_link == '1'){ ?>
      <a class="name" href="<?php echo $link; ?>"><?php the_title() ?>
      </a>
      <?php } else { ?>
      <span class="name"><?php the_title(); ?>
      </span>
      <?php } ?>
      <?php echo $website ?>
    </div>

  </div> <?php $c++; endwhile;

  return apply_filters( 'kwtf_sc_testimonials_html', $html );
  }
  
  /**
   * testimonials slider
   *
   * @description
   *    Show all post on testimonials post types
   *
   * @example
   *   [testimonials_slider items=""]
   *
   * @params
   *      items - number of item to show
   *
   **/
  function do_testimonials_slider($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "items" => -1,
        'speed' => 500,
        'timeout' => 7000,
        'excerpt' => 20
    ), $atts));

    $args = array(
        'post_type' => 'bl_testimonials',
        'posts_per_page' => $items
    );

    $tests = new WP_Query( $args );
    $count_posts = wp_count_posts('bl_testimonials');

    if ( $count_posts->publish == 1 )
    $is_slider = FALSE;
    else
    $is_slider = TRUE;

    $html = '';
    if( !$tests->have_posts() ) return $html;

    ob_start(); ?>

  <div class="testimonials-slider">
    <ul class="testimonials group">

    <?php
    //loop
    $c = 0;
    while( $tests->have_posts() ) : $tests->the_post();
     
    $website = get_post_meta( get_the_ID(), '_testimonial_website', TRUE ); ?>

      <li>
        <blockquote>
          <p class="special-font">
            <a href="<?php the_permalink() ?>">&rdquo;<?php echo strip_tags( $this->content( 'excerpt', $excerpt ) ) ?>&rdquo;</a>
          </p>
        </blockquote>
        <p class="meta">
          <a href="<?php the_permalink() ?>"><?php the_title( '<strong>', '</strong>' ) ?>
          </a> - <a href="<?php echo esc_url( $website ) ?>"><?php echo $website ?>
          </a>
        </p></li>

        <?php $c++; endwhile; ?>

    </ul>
    <?php if ( $is_slider ) : ?>
    <div class="prev"></div>
    <div class="next"></div>
    <?php endif; ?>
  </div> <?php      

  if ( $is_slider ) : ?> <script type="text/javascript">
        jQuery(function($){
            $('.testimonials-slider ul').cycle({
                fx : 'scrollHorz',
                speed: <?php echo $speed ?>,
                timeout: <?php echo $timeout ?>,
                next: '.testimonials-slider .next',
                prev: '.testimonials-slider .prev'
            });
        });
    </script> <?php endif;

    $html = ob_get_clean();

    return apply_filters( 'kwtf_sc_testimonials_slider_html', $html );
  }
  
  /**
   * News
   *
   * @description
   *    Show all post of news post types
   *
   * @example
   *   [news_post items="" length=""]
   *
   * @params
   *      items - number of item to show
   *
   **/
  function do_news_post($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "items" => -1,
        "length" => 25
    ), $atts));

    wp_reset_query();

    $args = array(
        'post_type' => 'bl_news',
        'posts_per_page' => $items
    );

    $tests = new WP_Query( $args );

    $html = '';
    if ( !$tests->have_posts() )
    return $html;

    //loop
    $html = '';
    while ( $tests->have_posts() ) : $tests->the_post();

    $html .= '<div class="news-list group">';

    $html .= '  <div class="thumb-news group">';
    $html .= '      ' . get_the_post_thumbnail( NULL, 'thumb_news' );
    $html .= '  </div>';

    $html .= '  <div class="the-post group">';
    $html .= '      <h3>'. get_the_title() .'</h3>';
    $html .= '      <p class="news-date">'. get_the_date() .'</p>';
    $html .= '      ' . $this->content( 'content', $length, ' ' . __( 'Read more', $this->plg_tdomain ) );
    $html .= '  </div>';
    $html .= '</div>';

    endwhile;

    return $html;
  }
  
  /**
   * Image
   *
   * @example
   *   [image size="small" lightbox="true"]http://url.to/image.jpg[/image]
   *
   * @params
   *   size (“small”, “medium”, “large” or “fullwidth”, medium by default)
   *   link (image link – optional)
   *   target (“_blank”, “_parent”, “_self”, or “_top” – optional)
   *   lightbox (“true” or “false”, “true” by default
   *   title (lightbox caption – optional)
   *   align (“left” or “right” – optional)
   *   group (group name to make lighbox gallery)
   *   width (image width – optional)
   *   height (image height – optional)
   *   autoheight (“true” or “false” for auto height the image, false by default – optional)
   *
   **/
  function do_image($atts, $content = NULL) {
    extract(shortcode_atts(array(
        'size' => 'medium',
        'link' => '',
        'target' => '',
        'lightbox' => 'true',
        'title' => '',
        'align' => 'left',
        'group' => '',
        'width' => '',
        'height' => '',
        'autoheight' => 'false'
        ), $atts));

        if ( $size == 'small' ) $size = 'thumbnail';

        $a_attrs = $img_attrs = $div_attrs = array();

        $div_attrs['class'][] = "img_frame img_size_$size";

        if ( $lightbox == 'true' || $lightbox == 'false' && ! empty( $link ) )
        $is_link = TRUE;
        else
        $is_link = FALSE;

        if ( ! empty( $link ) )
        $a_attrs['href'] = $link;
        else {
          $image_id = $this->get_attachment_id($content);
          if ( $image_id != 0 ) {
            list( $image_url, $image_width, $image_height ) = wp_get_attachment_image_src( $image_id, $size );
            if ( empty( $width ) )  $width = $image_width;
            if ( empty( $height ) ) $height = $image_height;
            $img_attrs['src'] = $image_url;
            $a_attrs['href'] = $content;
          } else {
            $img_attrs['src'] = $a_attrs['href'] = $content;
          }
        }

        if ( ! empty( $target ) )
        $a_attrs['target'] = $target;

        if ( ! empty( $lightbox ) && $lightbox == 'true' ) {
          $a_attrs['class'][] = 'thumb img';
          $a_attrs['rel'] = 'prettyphoto';
          if ( ! empty( $group ) )
          $a_attrs['rel'] .= "[$group]";
        }

        if ( ! empty( $title ) )
        $img_attrs['title'] = $a_attrs['title'] = $title;

        if ( ! empty( $align ) )
        $div_attrs['class'][] = "align$align";

        if ( ! empty( $width ) ) {
          $div_attrs['style'][] = "width:{$width}px;";
          $img_attrs['width'] = $width;
        }

        if ( ! empty( $height ) && $autoheight == 'false' ) {
          $div_attrs['style'][] = "height:{$height}px;";
          $img_attrs['height'] = $height;
        } else if ( $autoheight == 'true' ) {
          $div_attrs['style'] = "height:auto;";
        }

        $attrs = array();
        foreach ( $div_attrs as $attr => $value ) {
          if ( is_array( $value ) )
          $attrs[] = "$attr=\"" . implode( ' ', $value ) . "\"";
          else
          $attrs[] = "$attr=\"$value\"";
        }
        $div_attrs = implode( ' ', $attrs );

        $attrs = array();
        foreach ( $img_attrs as $attr => $value ) {
          if ( is_array( $value ) )
          $attrs[] = "$attr=\"" . implode( ' ', $value ) . "\"";
          else
          $attrs[] = "$attr=\"$value\"";
        }
        $img_attrs = implode( ' ', $attrs );

        $attrs = array();
        foreach ( $a_attrs as $attr => $value ) {
          if ( is_array( $value ) )
          $attrs[] = "$attr=\"" . implode( ' ', $value ) . "\"";
          else
          $attrs[] = "$attr=\"$value\"";
        }
        $a_attrs = implode( ' ', $attrs );

        ob_start(); ?>

  <div class="image-styled">
    <div <?php echo $div_attrs ?>>
    <?php if ( $is_link ) : ?>
      <a <?php echo $a_attrs ?>><?php endif ?> <img
      <?php echo $img_attrs ?> /> <?php if ( $is_link ) : ?>
      </a>
      <?php endif ?>
    </div>
  </div> <?php $html = ob_get_clean();

  return apply_filters( 'kwtf_sc_image_html', $html );
  }
  
  /**
   * CALL TO ACTION
   *
   * @description
   *    Shows a box witth an incipit and a number phone
   *
   * @example
   *   [call_two label_button="" href=""]
   *
   * @attr
   *   class - class of container of box call to action (optional) @default: 'call-to-action'
   *   href  - url of button
   *   title  - the title of call to action
   **/
  function do_call_two($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'call-to-action-two',
        'label_button' => NULL,
        'href' => NULL
    ), $atts));

    $content = do_shortcode( $content );

    $html = "<div class=\"$class group\">
				<div class=\"incipit\">
					<p class=\"special-font\">$content</p>
				</div>
				<a href=\"$href\" class=\"call-button\">
				$label_button
				</a>
			</div>";          

				return apply_filters( 'kwtf_sc_call_two_html', $html );
  }
  
  /**
   * LOGO
   *
   * @description
   *    Show a simple text with the same font of logo
   *
   * @example
   *   [logo size="18px/em/pt/%"]text[/logo]
   **/
  function do_logo($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'size' => ''
        ), $atts));

        $html = "<span class=\"logo\" ";

        if( !empty( $size ) ) {
          $html .= "style=\"font-size:$size\"";
        }

        $html .= ">$content</span>";

        return apply_filters( 'kwtf_sc_logo_html', $html );
  }
  
  /**
   * CREDIT CARD
   *
   * @description
   *    Show the icons for the credit cards
   *
   * @example
   *   [credit cards="paypal,visa,mastercard,amex,cirrus"]
   **/
  function do_credit($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'cards' => 'paypal,visa,mastercard,amex,cirrus'
        ), $atts));

        $cards = explode( ',', $cards );

        $html = '';
        foreach ( $cards as $card ) {
          $card = trim($card);
          $html .= "<img src=\"" . $this->get_var( self::OPT_THEME_URI) . "/images/credit-cards/$card.png\" alt=\"$card\" style=\"margin-right:8px\" />";
        }

        return apply_filters( 'kwtf_sc_credit_html', '<span style="padding-left:10px;">' . $html . '</span>' );
  }
  
  /**
   * READ MORE (GREY CTA)
   *
   * @description
   *    Show the general read more button
   *
   * @example
   *   [read_more href=""]label[/read_more]
   **/
  function do_grey_cta($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'href' => '#'
        ), $atts));

        $content = do_shortcode( $content );

        $html = "<a class=\"read-more\" href=\"$href\">$content</a>";

        return apply_filters( 'kwtf_sc_read_more_html', $html );
  }
  
  /**
   * CALL TO ACTION
   *
   * @description
   *    Shows a box witth an incipit and a number phone
   *
   * @example
   *   [call title="" incipit="" phone="" [class=""]]
   *
   * @attr
   *   class - class of container of box call to action (optional) @default: 'call-to-action'
   *   href  - url of button
   *   title  - the title of call to action
   *   incipit - the text below title
   **/
  function do_call($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'call-to-action',
        'title' => NULL,
        'incipit' => NULL,
        'phone' => NULL
    ), $atts));

    $style = '';
    if( is_null( $incipit ) )
    $style = ' style="margin-top:0;line-height:101px;"';
    else
    $incipit = "<p>$incipit</p>";

    $html = "<div class=\"$class\">
                <div class=\"incipit\">
                    <h2{$style}>$title</h2>
                    $incipit
                </div>
                <div class=\"separate-phone\"></div>
                <div class=\"number-phone\">$phone</div>
                <div class=\"clear\"></div>
                <div class=\"decoration-image\"></div>
            </div>";   

                    return apply_filters( 'kwtf_sc_call_html', $html );
  }
  
  /**
   * LAST POST BOX
   *
   * @description
   *    Shows last post of a specific category
   *
   * @example
   *   [lastpost icon="" [size=""] title="" [class=""] [cat_name=""] [more_text=""] [showdate="yes|no"] [showtitle="yes|no"] [last=""]]
   *
   * @attr
   *   class - class of container of box (optional) @default: 'box-sections'
   *   icon  - one of set already been in $icons_name array
   *   size  - icons size (32 or 48) (optional) @default: 48
   *   title - the title
   *   cat_name - NAME category of last post to show (optional) @deafult: all categories
   *   more_text  - text of more link  @deafult: null
   *   showdate - if show the date of post (optional) @deafult: yes
   *   showtitle - if show the title of post (optional) @deafult: yes
   *   last  - specifics if this section is the last element (optional) @default: false
   **/
  function do_lastpost($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'box-sections',
        'title' => NULL,
        'icon'  => NULL,
        'size'  => 48,
        'cat_name'   => NULL,
        'more_text'  => NULL,
        'showdate' => 'no',
        'showtitle' => 'yes',
        'last' => FALSE
    ), $atts));

    $args = array(
       'post_type'=>'post',
       'category_name' => $cat_name,
       'showposts' => 1
    );

    $posts = new WP_Query();
    $posts->query($args);

    $date = TRUE;
    if($showdate == 'no') $date = FALSE;
    $title_ = TRUE;
    if($showtitle == 'no') $title_ = FALSE;

    $last_class = '';
    if($last) $last_class = ' last';

    $html = "\n";
    while($posts->have_posts()) :
    $posts->the_post();

    global $more;
    $more = 0;

    $img = '';
    if( ! is_null( $icon ) )
    $img = $this->get_img( 'images/icons/set_icons/' . $icon . '.png', $title, 'icon' );

    $html .= "<div class=\"$class{$last_class}\">\n";
    $html .= "    $img\n";
    $html .= "    <h2>$title</h2>\n";
    if($title_)
    {
      $html .= "    <h4 class=\"title-widget-blog\"><a href=\"".get_permalink()."\">".get_the_title()."</a></h4>\n";
    }
    if($date)
    {
      $html .= "    <p>".the_date('F jS, Y', '<small>', '</small>', FALSE)."</p>\n";
    }

    $content = get_the_content($more_text);
    $content = wpautop( $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    $html .= "    $content\n";
    $html .= "</div>\n";
    endwhile;

    return apply_filters( 'kwtf_sc_lastpost_html', $html );
  }
  
  /**
   * RECENT POST
   *
   * @description
   *    Shows recent posts
   *
   * @example
   *   [recentpost items="" [cat_name=""] [more_text=""] [show_thumb=""] [date=""]]
   *
   * @attr
   *   cat_name - NAME category of last post to show (optional) @deafult: all categories
   *   more_text  - text of more link (optional)  @deafult: null
   *   items - number of items to show @default: 3
   **/
  function do_recentpost($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'cat_name'   => NULL,
        'more_text'  => NULL,
        'items' => 3,
        'popular' => FALSE,
        'show_thumb' => 'yes',
        'excerpt' => 10,
        'date' => 'true'
        ), $atts));

        global $icons_name;

        $args = array(
       'posts_per_page' => $items,
       'orderby' => 'date'
       );

       //if(!is_null($cat_name)) $args['category_name'] = $cat_name;
       if( $popular ) $args['orderby'] = 'comment_count';

       $args['order'] = 'DESC';

       $myposts = new WP_Query( $args );

       $html = "\n";
       $html .= '<div class="recent-post group">'."\n";

       add_filter('excerpt_length', create_function('$a',"return $excerpt;") );
       add_filter('excerpt_more', create_function('$a',"return '...';") );

       if( $myposts->have_posts() ) : while( $myposts->have_posts() ) : $myposts->the_post();
        
       $img = '';
       if(has_post_thumbnail())
       {
         $img = get_the_post_thumbnail( get_the_ID(), 'thumb_recentposts' );
       }
       else
       {
         $img = '<img src="'.$this->get_var( self::OPT_THEME_URI).'/images/no_image_recentposts.jpg" alt="No Image" />';
       }

       $html .= '<div class="hentry-post group">'."\n";
       if ( $show_thumb == 'yes' )
       $html .= "    <div class=\"thumb-img\">$img</div>\n";
       $html .= the_title( '<a href="'.get_permalink().'" title="'.get_the_title().'" class="title">', '</a>', FALSE );

       $html .= ( $date == "true" ) ? '<p class="post-date">' . get_the_date() . '</p>' : '<p>' . get_the_excerpt() . '</p>';
       $html .= '</div>'."\n";

       endwhile; endif;

       $html .= '</div>';

       //$myposts->rewind_posts();

       //unset($myposts);

       return apply_filters( 'kwtf_sc_recentpost_html', $html );
  }
  
  /**
   * POPULAR POST
   *
   * @description
   *    Shows popular posts
   *
   * @example
   *   [popularpost items="" [cat_name=""] [more_text=""] [show_thumb=""] [excerpt=""] [date=""]]
   *
   * @attr
   *   cat_name - NAME category of last post to show (optional) @deafult: all categories
   *   more_text  - text of more link (optional)  @deafult: null
   *   items - number of items to show @default: 3
   **/
  function do_popularpost($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'cat_name'   => NULL,
        'more_text'  => NULL,
        'items' => NULL,
        'show_thumb' => 'yes',
        'excerpt' => 10,
        'date' => 'true'
        ), $atts));

        $html = do_shortcode('[recentpost items="' . $items . '" cat_name="' . $cat_name . '" more_text="' . $more_text . '" show_thumb="' . $show_thumb . '" popular="1" excerpt="' . $excerpt . '" date="' . $date . '"]');

        return apply_filters( 'kwtf_sc_popularpost_html', $html );
  }
  
  /**
   * LAST IMAGE ATTACHED TO A POST
   *
   * @description
   *    Gets the latest image attached to a post.
   *
   * @example
   *   [postimage size="" float="left"]
   *
   * @attr
   *   size   - size of image (ex. thumbnail)
   *   float  - floating of image
   **/
  function do_postimage($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "size" => 'thumbnail',
        "float" => 'none'
        ), $atts));
        $images =& get_children( 'post_type=attachment&post_mime_type=image&post_parent=' . get_the_id() );
        foreach( $images as $imageID => $imagePost )
        $fullimage = wp_get_attachment_image($imageID, $size, FALSE);
        $imagedata = wp_get_attachment_image_src($imageID, $size, FALSE);
        $width = ($imagedata[1]+2);
        $height = ($imagedata[2]+2);
        $html = '<div class="postimage" style="width: '.$width.'px; height: '.$height.'px; float: '.$float.';">'.$fullimage.'</div>';

        return apply_filters( 'kwtf_sc_postimage_html', $html );
  }
  
  /**
   * SOCIAL
   *
   * @description
   *    Print a simple icon link for social
   *
   * @example
   *   [social type="" href="" [title=""]]
   *
   * @attr
   *   type - the icon of social @params: facebook|twitter|rss|ecc...
   *   title - a title for the link icon
   *   href - the url of social page
   **/
  function do_social($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "type" => '',
        "title" => NULL,
        "href" => '#',
        "size" => ''
        ), $atts));

        if( $size != 'small' )
        $size = '';

        if( $size != '' ) $size = '-' . $size;

        if( is_null($title) ) $title = ucfirst($type);

        $html = "<a href=\"$href\" class=\"socials{$size} {$type}{$size}\" title=\"$title\">$type</a>\n";

        return apply_filters( 'kwtf_sc_social_html', $html );
  }
  
  /**
   * TWITTER
   *
   * @description
   *    Print a list of last tweets
   *
   * @example
   *   [twitter username="YIW" items="5" [class="last-tweets-widget"] [time="true"] [replies="true"] ]
   *
   * @attr
   *   usarname - the username
   *   items - number of post for list
   **/
  function do_twitter($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "username" => NULL,
        "items" => 5,
        "class" => 'last-tweets-widget',
        "time" => TRUE,
        "replies" => TRUE
    ), $atts));

    $html = '<div class="last-tweets-widget"></div>';
    $html .= "<script type=\"text/javascript\">
                jQuery(function($){
                    $('.$class').tweetable({
                        id: 'tweets',
                        username: '$username', 
                        time: true, 
                        limit: $items, 
                        replies: true
                    });
                });
                </script> ";

    return apply_filters( 'kwtf_sc_twitter_html', $html );
  }
  
  /**
   * SLIDER
   *
   * @description
   *    Show a custom Nivo Slider
   *
   * @example
   *   [slider effect="sliceDown" width="600" height="350"]
   *       wp-content/themes/bolder/example/slide/1.jpg
   *       wp-content/themes/bolder/example/slide/2.jpg
   *       wp-content/themes/bolder/example/slide/3.jpg
   *       wp-content/themes/bolder/example/slide/4.jpg
   *       wp-content/themes/bolder/example/slide/5.jpg
   *   [/slider]
   *
   * @attr
   *   effect - the effetc of slider. @param:
   * sliceDown
   * sliceDownLeft
   * sliceUp
   * sliceUpLeft
   * sliceUpDown
   * sliceUpDownLeft
   * fold
   * fade
   * random
   *   width - the width of slider
   *   height - height of slider
   **/
  function do_slider($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "effect" => 'fade',
        "width" => 600,
        "height" => 350
    ), $atts));


    $urls = explode("\n", $content);
    $urls = array_map('trim', $urls);

    $html = "<div class=\"nivo-slider\" style=\"width:{$width}px; height:{$height}px\">\n";

    $i = 0;
    foreach($urls as $url)
    {
      $host = $a_before = $a_after = '';

      if( preg_match('/(<\s*a[^>]*>)(.*?)(<\s*\/\s*a>)/', $url, $matches) ) {
        $a_before = $matches[1];
        $url      = $matches[2];
        $a_after  = $matches[3];
      }


      $url = str_replace( '<br />', '', $url );
      if( !preg_match('/http:\/\/(.*)/', $url) ) $host = site_url() . '/';

      if($url != '') $html .= "    $a_before<img src=\"{$host}{$url}\" alt=\"$i\" />$a_after\n";
      $i++;
    }

    $html .= "</div>\n";


    $html .= "  <script type=\"text/javascript\">
                    jQuery(document).ready(function($){
                        if( !jQuery().nivoSlider ) {
                            $.getScript(' ". $this->get_var( self::OPT_THEME_URI) . "/js/jquery.nivo.slider.pack.js" . " ', function(){
                                    
                                $('.nivo-slider').nivoSlider({
                                    effect: '$effect',
                                    directionNav:false
                                });

                            });
                        } else {
                                $('.nivo-slider').nivoSlider({
                                    effect: '$effect',
                                    directionNav:false
                                });
                        }
                    });
                </script>";  

    return apply_filters( 'kwtf_sc_slider_html', $html );
  }
  
  /**
   * TOGGLE
   *
   * @description
   *    Create a toggle content.
   *
   * @example
   *   [toggle title="" opened=""]text[/toggle]
   *
   * @attr
   *   title - the title of toggle content
   *   text - the text
   **/
  function do_toggle($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "title" => NULL,
        "opened" => FALSE
    ), $atts));

    $content = wpautop( $content );

    $class = 'closed';
    if( $opened )
    $class = 'opened';

    $html = '<div class="toggle">
                <p class="tab-index tab-'.$class.'"><a href="#" title="Close">'.$title.'</a></p>
                <div class="content-tab '.$class.'">
                    '.$this->addp($content).'
                </div>  
            </div>';

    return apply_filters( 'kwtf_sc_toggle_html', $html );
  }
  
  /**
   * TABS
   *
   * @description
   *    Create a content with tabs.
   *
   * @example
   *   [tabs {ID}1={TITLE}1 {ID}2={TITLE} ... {ID}n={TITLE}n]
   *       [tab id="{ID}"]Text[/tab]
   *       [tab id="{ID}"]Text[/tab]
   *   [/tabs]
   *
   * @attr
   *   {ID} - the ID of tab
   *   {TITLE} - the title of tab
   *   id - the id of each tab
   *   text - the text
   **/
  function do_tabs($atts, $content = NULL) {

    $html = '<div class="tabs-container">'."\n";
    $html .= '    <ul class="tabs">'."\n";

    $i = 1;
    foreach($atts as $id => $title)
    {
      //if( !preg_match('/tab([0-9]{2})/', $attr) ) continue;

      $html .= '<li><h4><a href="#'.$id.'" title="'.$title.'">'.$title.'</a></h4></li>'."\n";

      $i++;
    }

    $html .= '    </ul>'."\n";

    $html .= '<div class="border-box group">' . do_shortcode($content) . '</div>';

    $html .= '</div>'."\n";

    return apply_filters( 'kwtf_sc_tabs_html', $html );
  }
  
  /**
   * TAB
   *
   * @description
   *    See above.
   *
   * @example
   *   [tab id=N]Text[/tab]
   *
   **/
  function do_tab($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "id" => NULL
    ), $atts));

    //$content = wpautop( $content);

    $html = '<div id="'.$id.'" class="panel group">'.do_shortcode( $content ).'</div>';

    //return wpautop(, $html);
    return apply_filters( 'kwtf_sc_tab_html', $html );
  }
  
  /**
   * QUICK CONTACT BOX
   *
   * @description
   *    Create a box for quick contact with tab.
   *
   * @example
   *   [quick_contact [class=""] icon1="" icon2=""]
   *       [tab id=1]Text[/tab]
   *       [tab id=2]Text[/tab]
   *   [/quick_contact]
   *
   * @attr
   *   iconN - the icon of each tab
   *   id - the id of each tab
   *   text - the text
   **/
  function do_quick_contact($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "class" => 'quick-contact-box'
        ), $atts));

        $html = '<div class="' . $class . ' group">'."\n";
        $html .= '    <ul class="nav-box">'."\n";

        $i = 1;
        foreach($atts as $attr => $value)
        {
          if( !preg_match('/icon([0-9]{1,2})/', $attr) ) continue;

          $html .= '<li><a href="#icon'.$i.'">' . $this->get_img( 'images/icons/set_icons/' . $value . '.png', 'Image Tab ' . $i, 'nofade' ) . '</a></li>'."\n";

          $i++;
        }

        $html .= '    </ul>'."\n";

        $html .= '<div class="box-info group">' . $content . '</div>';

        $html .= '</div>'."\n";

        $html = do_shortcode( $html );

        return apply_filters( 'kwtf_sc_quick_contact_html', $html );
  }
  
  /**
   * Faqs
   *
   * @description
   *    Show all post on faq post types
   *
   * @example
   *   [faq items=""]
   *
   * @params
   *      items - number of item to show
   *
   **/
  function do_faq($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "category" => NULL,
        "items" => -1,
        "close_first" => FALSE
    ), $atts));

    $args = array(
        'post_type' => 'bl_faq',
        'posts_per_page' => $items,
    );

    if(!empty( $category )) {
      $tax = 'category-faq';
      $category = array_map( 'trim', explode( ',', $category ) );
      if ( count($category) == 1 ) $category = $category[0];
      $args['tax_query'] = array(
      array(
                'taxonomy' => $tax,
                'field' => 'slug',
                'terms' => $category
      )
      );
    }

    $faqs = new WP_Query( $args );

    $first = TRUE;
    if( $close_first ) $first = FALSE;

    $html = '';
    if( !$faqs->have_posts() ) return $html;

    //loop
    while( $faqs->have_posts() ) : $faqs->the_post();

    $title = the_title( '', '', FALSE );
    $content = get_the_content();

    $attr = '';
    if( $first )
    $attr = ' opened="1"';

    $html .= do_shortcode( "[toggle title=\"$title\"{$attr}]{$content}[/toggle]" );
    $first = FALSE;

    endwhile;

    return apply_filters( 'kwtf_sc_faq_html', $html );
  }
  
  /**
   * Google Maps
   *
   * @description
   *    Print the google map box
   *
   * @example
   *   [googlemap src="" [width=""] [height=""] ]
   *
   * @params
   *   src - the link of google map
   *   width - the width of box
   *   height - the height of box
   *
   **/
  function do_googlemap($atts, $content = NULL) {
    extract(shortcode_atts(array(
      "width" => '274',
      "height" => '200',
      "src" => ''
      ), $atts));
       
      $html  = '<div class="google-map-frame">';
      $html .= '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'&amp;output=embed" ></iframe>';
      $html .= '<div class="shadow-thumb-sidebar"></div>';
      $html .= '</div>';
       
      return apply_filters( 'kwtf_sc_googlemap_html', $html );
  }
  
  /**
   * News List
   *
   * @description
   *    Print list of posts
   *
   * @example
   *   [posts cat="" items="" icon="" title="" size="" last="" ]
   *
   * @params
   *   cat   - id category of post
   *   items - number of posts
   *   icon  - one of set already been in $icons_name array
   *   size  - icons size (32 or 48) (optional) @default: 48
   *   last  - specifics if this section is the last element (optional) @default: false
   *   title - the title
   *
   **/
  function do_posts($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "cat" => -1,
        "icon" => NULL,
        "items" => 3,
        "size" => 32,
        "last" => FALSE,
        "title" => NULL
    ), $atts));
     
    $loop = new WP_Query( array(
        'cat' => $cat,
        'posts_per_page' => $items                  
    ) );

    $html = '';
    while( $loop->have_posts() ) : $loop->the_post();

    $html .= '<p>';
    $html .= the_title( '<a href="' . get_permalink() . '">', '</a><br />', FALSE );

    $html .= get_the_excerpt();
    remove_filter( 'excerpt_length', array( $this, 'filter_excerpt_length') );

    $html .= '</p>';

    endwhile;

    //return do_shortcode('[section icon="' . $icon . '" size="' . $size . '" title="' . $title . '" last="' . $last . '"]' . $html . '[/section]');
     
    return apply_filters( 'kwtf_sc_posts_html', $html );
  }
  
  /**
   * TEAM
   *
   * @description
   *    Show a list of post type team
   *
   * @example
   *   [team items=""]
   *
   * @params
   *      items - number of item to show
   *
   **/
  function do_team($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "items" => 10
    ), $atts));

    $args = array(
        'post_type' => 'bl_team'    
        );
        if( !is_null( $items ) ) $args['posts_per_page'] = $items;

        $team = new WP_Query( $args );

        $html = '';
        if( !$team->have_posts() )
        return $html;

        //loop
        $html .= '<ul id="team" class="group">';

        while( $team->have_posts() ) : $team->the_post();

        $title = the_title( '', '', FALSE );
        $content = get_the_content();

        $html .= '<li class="group">';

        if( has_post_thumbnail() )
        $html .= get_the_post_thumbnail( get_the_ID(), 'team-thumb' );

        $html .= '<blockquote>' . $content . '</blockquote>';

        $html .= '</li>';

        endwhile;

        $html .= '</ul>';

        return apply_filters( 'kwtf_sc_team_html', $html );
  }
  
  /**
   * FEATURES TAB
   *
   * @description
   *      Show all features tab posts in a tabbed div.
   *
   * @example
   *      [features_tab name="" open=""]
   *
   * @params
   *      name - Features tab name
   *      open - Open this tab at startup
   **/
  function do_features_tab($atts, $content = NULL) {
    extract(shortcode_atts(array(
        'name' => '',
        'open' => 1
    ), $atts));

    $name = sanitize_title( $name );
    $open = abs( ( int ) $open );

    if( empty( $name ) ) {
      return FALSE;
    }

    $args = array( 'post_type' => $name, 'posts_per_page' => -1, 'order' => 'ASC' );
    $ft = new WP_Query( $args );

    $features_label = '';
    $features_content = '';
    $i = 0;

    while( $ft->have_posts() ) : $ft->the_post();
    $current = ( $open == ( $i + 1 ) ) ? 'current-feature' : '';

    $the_label = '<li class="features-tab-' . ( $i ) . ' ' . $current . '">';

    if( has_post_thumbnail() ) {
      $the_label .= get_the_post_thumbnail( get_the_ID(), 'features_tab_icon' );
    }

    $the_label .= get_the_title();
    $the_label .= '</li>';

    $the_content = '<div class="features-tab-content features-tab-' . ( $i ) . ' ' . $current . '">' . get_the_content() . '</div>';

    $features_label .= $the_label;
    $features_content .= $the_content;

    $i++;

    endwhile;

    $without_sidebar = ( $this->layout_page() == 'sidebar-no' ) ? 'without-sidebar' : '';

    $html  = '<div id="features-tab-' . $name . '" class="features-tab-container ' . $without_sidebar . ' group">';
    $html .= '<ul class="features-tab-labels">' . $features_label . '</ul>';
    $html .= '<div class="features-tab-wrapper">' . $this->addp( $features_content ) . '</div>';
    $html .= '</div>';

    return $html;
  }
  
  /**
   * BOX SECTION
   *
   * @description
   *    Shows a box, with Title and icons on left and a text of section (you can use HTMl tags)
   *
   * @example
   *   [section icon="" [size=""] title="" [class=""] [last=""] [border=""]]text[/section]
   *
   * @attr
   *   class - class of container of box (optional) @default: 'box-sections'
   *   icon  - one of set already been in $icons_name array
   *   size  - icons size (32 or 48) (optional) @default: 48
   *   last  - specifics if this section is the last element (optional) @default: false
   *   title - the title
   *   text  - text of the section
   *   border  - add border class
   **/
  function do_section($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'box-sections',
        'before_title' => '<h3>',
        'title_size' => '',
        'title' => NULL,
        'icon' => NULL,
        'size' => 32,
        'last' => FALSE,
        'border' => FALSE,
        'link' => '',
        'link_title' => ''
        ), $atts));

        $a_before = $a_after = '';

        if ( ! empty( $before_title ) && empty( $title_size ) ) {
          $before_title = str_replace( '<', '', $before_title );
          $before_title = str_replace( '>', '', $before_title );
          $title_size = $before_title;
        }

        $img = '';
        if( ! is_null( $icon ) ) {
          $img = $this->get_img( 'images/icons/set_icons/' . $icon . $size . '.png', $title, 'icon' );
          if ( empty( $img ) )
          $img = $this->get_img( 'images/icons/set_icons/' . $icon . '.png', $title, 'icon' );
        }

        $last_class = '';
        if($last) $last_class = ' last';

        if( $border )
        $class .= '-border';

        if ( ! empty( $link ) ) {
          $link = esc_url( $link );
          if ( ! empty( $link_title ) )
          $link_title = " title=\"$link_title\"";
          $a_before = "<a href=\"$link\"$link_title>";
          $a_after  = "</a>";
        }

        $html = "\n";
        $html .= "<div class=\"$class{$last_class}\">\n";
        $html .= "    $a_before\n";
        $html .= "    $img\n";
        $html .= "    <$title_size><span style=\"line-height:{$size}px\">{$title}</span></$title_size>";
        $html .= "    $a_after\n";
        $html .= "    ".wpautop(do_shortcode($content))."\n";
        $html .= "</div>\n";

        return apply_filters( 'kwtf_sc_section_html', $html );
  }
  
  /**
   * BOX SECTION TEXT
   *
   * @description
   *    This is the same of above, but for only text.
   **/
  function do_section_text($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'class' => 'box-sections',
        'title' => NULL,
        'icon' => NULL,
        'size' => 32,
        'last' => FALSE
    ), $atts));

    $html = do_shortcode("[section icon=\"$icon\" size=\"$size\" title=\"$title\" class=\"$class\" last=\"$last\"]<p>$content</p>[/section]");

    return apply_filters( 'kwtf_sc_section_text_html', $html );
  }
  
  /**
   * SECTION CAPTION
   *
   * @description
   *    Show a box with a captions
   *
   * @example
   * 	  [section_caption title=""]
   *
   *         [caption_text title=""]text[/caption_text]
   *         [caption_text title=""]text[/caption_text]
   *         [caption_text title=""]text[/caption_text]
   *
   * 	  [/section_caption]
   *
   * @attr
   *   title (section_caption) - the title of section captions
   *   title (caption) - the title of single caption
   *   text  - the text of single caption
   **/
  function do_section_caption($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'title' => NULL
    ), $atts));

    $html  = '<div class="section-caption group">'."\n";

    $html .= "    <h5>$title</h5>\n";
    $html .= "    <div class=\"captions group\">\n";
    $html .= "    ".do_shortcode($content)."\n";
    $html .= "    </div>\n";

    $html .= '</div>'."\n";

    return apply_filters( 'kwtf_sc_section_caption_html', $html );
  }
  
  /**
   * CAPTION
   *
   * @description
   *    This is linked to above. Read that description
   **/
  function do_caption_text($atts, $content = NULL)
  {
    extract(shortcode_atts(array(
        'title' => NULL
    ), $atts));

    $content = wpautop( $content);

    $html  = "<div class=\"caption\">\n";
    $html .= "    <h6 class=\"red-normal\">$title</h6>\n";
    $html .= "    " . do_shortcode($content) . "\n";
    $html .= "</div>\n";

    return apply_filters( 'kwtf_sc_caption_text_html', $html );
  }
  
  /**
   * SUCCESS BOX
   *
   * @description
   *    Show an example of success box alert
   *
   * @example
   *   [success]text[/success]
   *
   * @attr
   *   text - the text
   **/
  function do_success($atts, $content = NULL) {
    $html = "<div class=\"box success-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_success_html', $html );
  }
  
  /**
   * ARROW BOX
   *
   * @description
   *    Show an example of box alert, with an arrow icon
   *
   * @example
   *   [arrow]text[/arrow]
   *
   * @attr
   *   text - the text
   **/
  function do_arrow($atts, $content = NULL) {
    $html = "<div class=\"box arrow-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_arrow_html', $html );
  }
  
  /**
   * ALERT BOX
   *
   * @description
   *    Show an alert box
   *
   * @example
   *   [alert]text[/alert]
   *
   * @attr
   *   text - the text
   **/
  function do_alert($atts, $content = NULL) {
    $html = "<div class=\"box alert-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_alert_html', $html );
  }
  
  /**
   * ERROR BOX
   *
   * @description
   *    Show an error box
   *
   * @example
   *   [error]text[/error]
   *
   * @attr
   *   text - the text
   **/
  function do_error($atts, $content = NULL) {
    $html = "<div class=\"box error-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_error_html', $html );
  }
  
  /**
   * NOTICE BOX
   *
   * @description
   *    Show an notice box
   *
   * @example
   *   [notice]text[/notice]
   *
   * @attr
   *   text - the text
   **/
  function do_notice($atts, $content = NULL) {
    $html = "<div class=\"box notice-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_notice_html', $html );
  }
  
  /**
   * INFO BOX
   *
   * @description
   *    Show an info box
   *
   * @example
   *   [info]text[/info]
   *
   * @attr
   *   text - the text
   **/
  function do_info($atts, $content = NULL) {
    $html = "<div class=\"box info-box\">".do_shortcode($content)."</div>";

    return apply_filters( 'kwtf_sc_info_html', $html );
  }
  
  /**
   * BUTTON
   *
   * @description
   *    Show a simple custom button
   *
   * @example
   *   [button href="" color="green|blue|magenta|red|orange|yellow" width="large|small"]your text[/button]
   *
   * @attr
   *   href - the url of linking
   *   color - background color of button
   *   width - the size of button
   *   text - the text
   **/
  function do_button($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"color" => '',
		"width" => 'large',
		"href" => "#"
		), $atts));

		$html = "<a href=\"$href\" class=\"$width $color button\">$content</a>";

		return apply_filters( 'kwtf_sc_button_html', $html );
  }
  
  /**
   * BUTTON ICON
   *
   * @description
   *    Show a simple custom button, with icon
   *
   * @example
   *   [button_icon href="" icon="" icon_file="" icon_path=""]your text[/button_icon]
   *
   * @attr
   *   href - the url of linking
   *   color - background color of button
   *   width - the size of button
   *   text - the text
   **/
  function do_button_icon($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"icon" => 'arrow',
		"icon_file" => NULL,
		"icon_path" => FALSE,
		"href" => "#",
		"sense" => "ltr",
		'target' => ''
		), $atts));

		if( $icon_path )
		$path = esc_url( $icon_path );
		else
		$path = $this->get_var( self::OPT_THEME_URI) . '/images/for_button/';

		$style = '';
		if( !is_null($icon_file) )
		$style = " style=\"background-image:url('{$path}{$icon_file}')\"";

		if( ! empty($target) )
		$target = " target=\"$target\"";

		$html = '';
		//$html .= '<div class="more-button">';
		$html .= "	<a class=\"more-button more-button-$sense\" href=\"$href\" title=\"$content\"$target>$content";
		$html .= "	<span class=\"icon $icon\"$style>&nbsp;</span></a>";
		//$html .= "</div>";

		return apply_filters( 'kwtf_sc_button_icon_html', $html );
  }
  
  /**
   * LIST BULLET
   *
   * @description
   *    Show a simple custom button
   *
   * @example
   *   [list type="star|arrow|check|add|info"]
   *       <li>item</li>
   *       <li>item</li>
   *       <li>item</li>
   *   [/list]
   *
   * @attr
   *   color - background color of button
   *   width - the size of button
   *   text - the text
   **/
  function do_list($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"type" => 'arrow'
		), $atts));

		$content = str_replace( '<ul>', '', $content );
		$content = str_replace( '</ul>', '', $content );
		$html = "<ul class=\"short $type\">".do_shortcode($content)."</ul>";

		return apply_filters( 'kwtf_sc_list_html', $html );
  }
  
  /**
   * ONE / FORTH
   *
   * @description
   *    Create one column of a quarter.
   *
   * @example
   *   [one_fourth [last=""]]text[/one_fourth]
   *
   * @attr
   *   last - specifics if this element is the last one and undo the margin right (optional) @deafult: false
   *   text - the text
   **/
  function do_one_fourth($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));

		$classes = array( 'one-fourth' );

		// additional classes
		if( $class != '' )
		$classes[] = $class;

		// last
		if($last)
		$classes[] = 'last';

		$html = "<div class=\"" . implode( $classes, ' ' ) . "\">".$this->addp( $content )."</div>";

		return apply_filters( 'kwtf_sc_one_fourth_html', $html );
  }
  
  /**
   * ONE / FORTH LAST
   *
   * @description
   *    Is the same of above, but it's the last element.
   **/
  function do_one_fourth_last($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));

		$html = do_shortcode('[one_fourth class="' . $class . '" last="1"]'.$content.'[/one_fourth]');

		return apply_filters( 'kwtf_sc_one_fourth_last_html', $html );
  }
  
  /**
   * ONE / THIRD
   *
   * @description
   *    Create one column of a third.
   *
   * @example
   *   [one_third [last=""]]text[/one_third]
   *
   * @attr
   *   last - specifics if this element is the last one and undo the margin right (optional) @deafult: false
   *   text - the text
   **/
  function do_one_third($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));

		$classes = array( 'one-third' );

		// additional classes
		if( $class != '' )
		$classes[] = $class;

		// last
		if($last)
		$classes[] = 'last';

		$html = "<div class=\"" . implode( $classes, ' ' ) . "\">".$this->addp( $content )."</div>";

		return apply_filters( 'kwtf_sc_one_third_html', $html );
  }
  
  /**
   * ONE / THIRD LAST
   *
   * @description
   *    Is the same of above, but it's the last element.
   **/
  function do_one_third_last($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));
		$html = do_shortcode('[one_third class="' . $class . '" last="1"]'.$content.'[/one_third]');

		return apply_filters( 'kwtf_sc_one_third_last_html', $html );
  }
  
  /**
   * TWO / THIRD
   *
   * @description
   *    Create a content in two column of a third.
   *
   * @example
   *   [two_third [last=""]]text[/two_third]
   *
   * @attr
   *   last - specifics if this element is the last one and undo the margin right (optional) @deafult: false
   *   text - the text
   **/
  function do_two_third($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));

		$classes = array( 'two-third' );

		// additional classes
		if( $class != '' )
		$classes[] = $class;

		// last
		if($last)
		$classes[] = 'last';

		$html = "<div class=\"" . implode( $classes, ' ' ) . "\">".$this->addp( $content )."</div>";

		return apply_filters( 'kwtf_sc_two_third_html', $html );
  }
  
  /**
   * TWO / THIRD LAST
   *
   * @description
   *    Is the same of above, but it's the last element.
   **/
  function do_two_third_last($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));
		$html = do_shortcode('[two_third class="' . $class . '" last="1"]'.$content.'[/two_third]');

		return apply_filters( 'kwtf_sc_one_third_last_html', $html );
  }
  
  /**
   * TWO / FORTH
   *
   * @description
   *    Create a content in two column of a quarter.
   *
   * @example
   *   [two_fourth [last=""]]text[/two_fourth]
   *
   * @attr
   *   last - specifics if this element is the last one and undo the margin right (optional) @deafult: false
   *   text - the text
   **/
  function do_two_fourth($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => '' 
		), $atts));

		$classes = array( 'two-fourth' );

		// additional classes
		if( $class != '' )
		$classes[] = $class;

		// last
		if($last)
		$classes[] = 'last';

		$html = "<div class=\"" . implode( $classes, ' ' ) . "\">".$this->addp( $content )."</div>";

		return apply_filters( 'kwtf_sc_two_fourth_html', $html );
  }
  
  /**
   * TWO / FOURTH LAST
   *
   * @description
   *    Is the same of above, but it's the last element.
   **/
  function do_two_fourth_last($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"last" => FALSE,
		"class" => ''
		), $atts));
		$html = do_shortcode('[two_fourth class="' . $class . '" last="1"]'.$content.'[/two_fourth]');

		return apply_filters( 'kwtf_sc_two_fourth_last_html', $html );
  }
  
  /**
   * TABLE
   *
   * @description
   *    Create a toggle content.
   *
   * @example
   *   [table color="white|red|grey|blue"]
   *       <table width="100%" cellpadding="0" cellspacing="0">
   *       	<thead>
   *       	    <tr>
   *       	    	<th style="width:20%"></th>
   *       	    	<th style="width:20%">Free</th>
   *       	    	<th style="width:20%">Mini</th>
   *       	    	<th style="width:20%">Standard</th>
   *       	    	<th style="width:20%">Premium</th>
   *       	    </tr>
   *       	</thead>
   *
   *       	<tbody>
   *       	    <tr>
   *       	    	<th class="features">Features 1</th>
   *       	    	<td>1</td>
   *       	    	<td>unlimited</td>
   *       	    	<td>[x]</td>
   *       	    	<td>-</td>
   *       	    </tr>
   *       	</tbody>
   *       </table>
   *   [/table]
   *
   * @attr
   *   color - the color
   *   markup - the html markup of table
   **/
  function do_table($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"color" => NULL
    ), $atts));

    $html = '<div class="short-table '.$color.'">' . do_shortcode($content) . '</div>';

    return apply_filters( 'kwtf_sc_table_html', $html );
  }
  
  /**
   * TICK
   *
   * @description
   *    Insert a tick on the content
   *
   * @example
   *   [x]
   *
   **/
  function do_x($atts, $content = NULL) {
    $html = '<img src="'.$this->get_var( self::OPT_THEME_URI).'/images/bg/yes.png" alt="yes" />';

    return apply_filters( 'kwtf_sc_x_html', $html );
  }
  
  /**
   * TABLES PRICES
   *
   * @description
   *    Create a box of prices.
   *
   * @example
   *   [price title="" price="" href="" buttontext="" color="white|red|grey|blue|green|yellow" [last="0|1"]]
   *       <li>feature 1</li>
   *       <li>feature 2</li>
   *       <li>feature 3</li>
   *       <li>feature 4</li>
   *   [/price]
   *
   * @attr
   *   title - title of box
   *   price - price, showed below title
   *   buttontext - the text of button
   *   href - hyperlink of button More Info
   *   text - list of features
   *   color - the color
   **/
  function do_price($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"title" => '',
		"price" => '',
		"buttontext" => 'More info',
		"nobutton" => FALSE,
		"href" => '#',
		"color" => NULL,
		"last" => 0
    ), $atts));

    if( $last ) $last = ' last';
    else $last = '';

    $content = str_replace( '<ul>', '', $content );
    $content = str_replace( '</ul>', '', $content );

    $html  = '<div class="one-third'.$last.'">';
    $html .= '	<div class="price-table">';
    $html .= '	  <div class="head '.$color.'">';
    $html .= '	   	<p>'.$title.'</p>';
    $html .= '		<h2 class="price">'.$price.'</h2>';
    $html .= '	  </div>';
    $html .= '	  <div class="body">';
    $html .= '		<ul>';
    $html .= '			'.do_shortcode($content);
    $html .= '		</ul>';
    $html .= '';
    if ( ! $nobutton ) $html .= '		<p class="more"><a href="'.$href.'">'.$buttontext.'</a></p>';
    $html .= '	  </div>';
    $html .= '  </div>';
    $html .= '</div>';

    return apply_filters( 'kwtf_sc_price_html', $html );
  }
  
  /**
   * TABLES PRICES LAST
   *
   * @description
   *    Create a box of prices.
   *
   * @example
   *   [price_last title="" price="" href="" buttontext="" color="white|red|grey|blue|green|yellow"]
   *       <li>feature 1</li>
   *       <li>feature 2</li>
   *       <li>feature 3</li>
   *       <li>feature 4</li>
   *   [/price_last]
   **/
  function do_price_last($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"title" => '',
		"price" => '',
		"buttontext" => 'More info',
		"href" => '#',
		"color" => NULL
    ), $atts));

    $html = do_shortcode("[price title=\"$title\" price=\"$price\" href=\"$href\" buttontext=\"$buttontext\" color=\"$color\" last=\"1\"]{$content}[/price]");

    return apply_filters( 'kwtf_sc_price_last_html', $html );
  }
  
  /**
   * PRINT CLEAR
   *
   * @description
   *    Print a clear, to undo the floating
   *
   * @example
   *   [clear]
   **/
  function do_clear($atts, $content = NULL) {
    $html = '<div class="clear"></div>';

    return apply_filters( 'kwtf_sc_clear_html', $html );
  }
  
  /**
   * PRINT SPACE
   *
   * @description
   *    Print a clear, to undo the floating
   *
   * @example
   *   [space]
   **/
  function do_space($atts, $content = NULL) {
    $html = '<div class="clear space"></div>';

    return apply_filters( 'kwtf_sc_space_html', $html );
  }
  
  /**
   * PRINT BORDER
   *
   * @description
   *    Print a clear, to undo the floating
   *
   * @example
   *   [border]
   **/
  function do_border($atts, $content = NULL) {
    $html = '<div class="border-line"></div>';

    return apply_filters( 'kwtf_sc_border_html', $html );
  }
  
  /**
   * PRINT LINE
   *
   * @description
   *    Print a clear, to undo the floating
   *
   * @example
   *   [line]
   **/
  function do_line($atts, $content = NULL) {
    $html = '<div class="clear line"></div>';

    return apply_filters( 'kwtf_sc_line_html', $html );
  }
  
  /**
   * DROPCAP
   *
   * @description
   *    Format content, with big first letter
   *
   * @example
   *   [dropcap]text[/dropcap]
   *
   * @attr
   *   text - the text
   **/
  function do_dropcap($atts, $content = NULL) {
    $html = "<p class=\"dropcap\">".do_shortcode($content)."</p>";

    return apply_filters( 'kwtf_sc_dropcap_html', $html );
  }
  
  /**
   * QUOTE
   *
   * @description
   *    Adds the content into a box quote
   *
   * @example
   *   [quote]text[/quote]
   *
   * @attr
   *   text - the text
   **/
  function do_quote($atts, $content = NULL) {
    $html = "<blockquote><p>".do_shortcode($content)."</p></blockquote>";

    return apply_filters( 'kwtf_sc_quote_html', $html );
  }
  
  /**
   * HIGHLIGHT
   *
   * @description
   *    Text highlight
   *
   * @example
   *   [highlight]text[/highlight]
   *
   * @attr
   *   text - the text
   **/
  function do_highlight($atts, $content = NULL) {
    $html = "<span class=\"highlight\">".do_shortcode($content)."</span>";

    return apply_filters( 'kwtf_sc_highlight_html', $html );
  }
  
  /**
   * BOLD
   *
   * @example
   *   [b]text[/b]
   **/
  function do_b($atts, $content = NULL) {
    $html = "<b>{$content}</b>";

    return apply_filters( 'kwtf_sc_bhtml', $html );
  }
  
  /**
   * STRONG
   *
   * @example
   *   [strong]text[/strong]
   **/
  function do_strong($atts, $content = NULL) {
    $html = "<strong>{$content}</strong>";

    return apply_filters( 'kwtf_sc_strong_html', $html );
  }
  
  /**
   * ITALIC
   *
   * @example
   *   [i]text[/i]
   **/
  function do_i($atts, $content = NULL) {
    $html = "<i>{$content}</i>";

    return apply_filters( 'kwtf_sc_i_html', $html );
  }
  
  /**
   * ITALIC EM
   *
   * @example
   *   [em]text[/em]
   **/
  function do_em($atts, $content = NULL) {
    $html = "<em>{$content}</em>";

    return apply_filters( 'kwtf_sc_em_html', $html );
  }
  
  /**
   * URL
   *
   * @example
   *   [url href="" title=""]text[/url]
   **/
  function do_url($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"href" => '#',
		"title" => NULL
    ), $atts));

    $href = esc_url( $href );
     
    $html = "<a href=\"$href\" title=\"$title\">{$content}</a>";

    return apply_filters( 'kwtf_sc_url_html', $html );
  }
  
  /**
   * IMG
   *
   * @example
   *   [img src="" alt="" width="" height=""]
   **/
  function do_img($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"src" => NULL,
		"alt" => FALSE,
		"width" => FALSE,
		"height" => FALSE
    ), $atts));

    if ( $width )
    $width = ' width="'.$width.'"';

    if ( $height )
    $height = ' height="'.$height.'"';

    $src = esc_url( $src );
     
    $html = "<img src=\"$src\" alt=\"$alt\"{$width}{$height} />";

    return apply_filters( 'kwtf_sc_img_html', $html );
  }
  
  /**
   * IMG
   *
   * @example
   *   [size px="" perc="" em=""]text[/size]
   **/
  function do_size($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"px" => NULL,
		"perc" => NULL,
		"em" => NULL
    ), $atts));

    $size = '';

    if ( ! is_null( $px ) )
    $size = "{$px}px";

    if ( ! is_null( $perc ) )
    $size = "{$perc}%";

    if ( ! is_null( $em ) )
    $size = "{$em}em";
     
    $html = '<span style="font-size:' . $size . ';">' . do_shortcode( $content ) . '</span>';

    return apply_filters( 'kwtf_sc_size_html', $html );
  }
  
  /**
   * SPECIAL FONT
   *
   * @example
   *   [special_font size="" unit=""]text[/special_font]
   **/
  function do_special_font($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"size" => NULL,
		"unit" => 'px'
		), $atts));

		$style = '';
		if ( ! is_null( $size ) )
		$style = ' style="font-size:' . $size . $unit . ';"';

		$html = '<span class="special-font"' . $style . '>' . do_shortcode( $content ) . '</span>';

		return apply_filters( 'kwtf_sc_special_font_html', $html );
  }
  
  /**
   * YOUTUBE
   *
   * @description
   *    Embed the player youtube video.
   *
   * @example
   *   [youtube width="640" height="385" video_id="wSBIcNmCAX0"]
   *
   * @attr
   *   width - the width of player
   *   height - the height of player
   *   video_id - the id of video
   *      es.  URL : http://www.youtube.com/watch?v=RomZBcLH6do     video_id : RomZBcLH6do
   **/
  function do_youtube($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"width" => 640,
		"height" => 385,
		"video_id" => NULL
    ), $atts));

    $html = "<div class=\"post_video youtube\"><iframe width=\"$width\" height=\"$height\" src=\"http://www.youtube.com/embed/$video_id\" frameborder=\"0\" allowfullscreen></iframe></div>";

    // 	$html = '
    // 	    <div class="post_video youtube">
    //             <object width="'.$width.'" height="'.$height.'">
    //                 <param name="movie" value="http://www.youtube.com/v/'.$video_id.'?fs=1"></param>
    //                 <param name="allowFullScreen" value="true"></param>
    //                 <param name="allowscriptaccess" value="always"></param>
    //                 <embed src="http://www.youtube.com/v/'.$video_id.'?fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="'.$width.'" height="'.$height.'"></embed>
    //             </object>
    //         </div>';

    return apply_filters( 'kwtf_sc_youtube_html', $html );
  }
  
  /**
   * VIMEO
   *
   * @description
   *    Embed the player vimeo video.
   *
   * @example
   *   [vimeo width="640" height="360" video_id="3109777"]
   *
   * @attr
   *   width - the width of player
   *   height - the height of player
   *   video_id - the id of video
   *      es.  URL : http://vimeo.com/3109777     video_id : 3109777
   **/
  function do_vimeo($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"width" => 640,
		"height" => 370,
		"video_id" => NULL
    ), $atts));

    $html = "<div class=\"post_video vimeo\"><iframe src=\"http://player.vimeo.com/video/$video_id?title=0&amp;byline=0&amp;portrait=0\" width=\"$width\" height=\"$height\" frameborder=\"0\" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div>";

    // 	$html = '
    // 	    <div class="post_video vimeo">
    //             <object width="'.$width.'" height="'.$height.'">
    //                 <param name="allowfullscreen" value="true" />
    //                 <param name="allowscriptaccess" value="always" />
    //                 <param name="movie" value="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" />
    //                 <embed src="http://vimeo.com/moogaloop.swf?clip_id='.$video_id.'&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00ADEF&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'.$width.'" height="'.$height.'"></embed>
    //             </object>
    //         </div>';

    return apply_filters( 'kwtf_sc_vimeo_html', $html );
  }
  
  /**
   * DAILYMOTION
   *
   * @description
   *    Embed the player dailymotion video.
   *
   * @example
   *   [dailymotion width="640" height="360" video_id="xgis0k"]
   *
   * @attr
   *   width - the width of player
   *   height - the height of player
   *   video_id - the id of video
   *      es.  URL : http://dailymotion.virgilio.it/video/xgp1c6     video_id : xgp1c6
   **/
  function do_dailymotion($atts, $content = NULL) {
    extract(shortcode_atts(array(
		"width" => 640,
		"height" => 385,
		"video_id" => NULL
    ), $atts));

    $html = '
	    <div class="post_video dailymotion">
            <object width="'.$width.'" height="'.$height.'">
                <param name="movie" value="http://dailymotion.virgilio.it/swf/video/'.$video_id.'?width='.$width.'&theme=none&foreground=%23F7FFFD&highlight=%23FFC300&background=%23171D1B&additionalInfos=1&hideInfos=1&start=&animatedTitle=&iframe=0&autoPlay=0"></param>
                <param name="allowFullScreen" value="true"></param>
                <param name="allowScriptAccess" value="always"></param>
                <embed type="application/x-shockwave-flash" src="http://dailymotion.virgilio.it/swf/video/'.$video_id.'?width='.$width.'&theme=none&foreground=%23F7FFFD&highlight=%23FFC300&background=%23171D1B&additionalInfos=1&hideInfos=1&start=&animatedTitle=&iframe=0&autoPlay=0" width="'.$width.'" height="'.$height.'" allowfullscreen="true" allowscriptaccess="always"></embed>
            </object>
        </div>';

    return apply_filters( 'kwtf_sc_dailymotion_html', $html );
  }
  
  /**
   * NEWSLETTER FORM
   *
   * @description
   *    Show a newsletter form
   *
   * @example
   *   [newsletter_form action="" label="" [label_submit=""] ]
   *
   * @params
   *   action   - the action of form
   *   label    - the label of input text
   *   label_submit - the label of submit button
   *
   **/
  function do_newsletter_form($atts, $content = NULL) {
    extract(shortcode_atts(array(
        "title" => '',
        'action' => '',
        'email' => 'email',
        'email_label' => strtoupper( __( 'your email', $this->plg_tdomain ) ),
        'submit' => __( 'Subscribe', $this->plg_tdomain ),
        'hidden_fields' => '',
        'method' => 'post'
        ), $atts));

        $html = '';

        $html .= '<div class="newsletter-section">';

        $html .= '<form method="' . $method . '" action="' . $action . '">';

        $html .= '<fieldset>';

        $html .= '<input type="text" value="' . $email_label . '" name="' . $email . '" id="' . $email . '" class="email-field text-field autoclear" />';
        // hidden fileds
        if ( $hidden_fields != '' ) {
          $hidden_fields = explode( '&', $hidden_fields );
          foreach ( $hidden_fields as $field ) {
            list( $id_field, $value_field ) = explode( '=', $field );
            $html .= '<input type="hidden" name="' . $id_field . '" value="' . $value_field . '" />';
          }
        }
        $html .= '<button type="submit" class="submit-field"><img src="' . $this->get_var( self::OPT_THEME_URI) . '/images/icons/newsletter-footer-submit.png" title="" alt="" /></button>';

        $html .= '</fieldset>';

        $html .= '</form>';

        $html .= '</div>';
         
        return apply_filters( 'kwtf_sc_newsletter_form_html', $html );
  }


  /**
   * CONTACT FORM
   *
   * @description
   *    Show a contact form, configured on Theme Options Panel
   *
   * @example
   *   [contact_form id="" ]
   *
   * @params
   * 	 id - the id of form, created on Theme Options Panel
   **/
  function do_contact_form($atts, $content = null) {
    extract(shortcode_atts(array(
      "id" => null
    ), $atts));

    if( is_null( $id ) )
      $id = 'default';

    return $this->module( $id, false );
  }

  /********************************************************/
  /*                 LayerSlider init                  */
  /********************************************************/
  /**
   * @param $atts
   * @return string
   */
  public function do_layerslider($atts) {

    // Get slider ID
    $id = $atts['id'];
    $id = empty($id) ? 1 : $id;

    // Get slider data
    $slides = $this->get_option( self::VAR_LAYERSLIDER_SLIDES);
    $slides = $slides[($id-1)];

    $data = '';

    if(is_array($slides)) {
      $data = '<div id="layerslider_'.$id.'" style="width: '.$slides['properties']['width'].'px; height: '.$slides['properties']['height'].'px;">';
      if(is_array($slides['layers'])) {
        foreach($slides['layers'] as $layerkey => $layer) {
          $data .= '<div class="ls-layer" style="slidedirection: '.$layer['properties']['slidedirection'].'; slidedelay: '.$layer['properties']['slidedelay'].'; durationin: '.$layer['properties']['durationin'].'; durationout: '.$layer['properties']['durationout'].'; easingin: '.$layer['properties']['easingin'].'; easingout: '.$layer['properties']['easingout'].'; delayin: '.$layer['properties']['delayin'].'; delayout: '.$layer['properties']['delayout'].';">';

          if(!empty($layer['properties']['background'])) {
            $data .= '<img class="ls-bg" src="'.$layer['properties']['background'].'" alt="layer">';
          }

          if(is_array($layer['sublayers'])) {
            foreach($layer['sublayers'] as $sublayer) {
              if(!empty($sublayer['url'])) {
                $data .= '<a href="'.$sublayer['url'].'" target="'.$sublayer['target'].'" class="ls-s'.$sublayer['level'].'" style="position: absolute; top: '.$sublayer['top'].'px; left:'.$sublayer['left'].'px; slidedirection : '.$sublayer['slidedirection'].'; slideoutdirection : '.$sublayer['slideoutdirection'].'; parallaxin : '.$sublayer['parallaxin'].'; parallaxout : '.$sublayer['parallaxout'].'; durationin : '.$sublayer['durationin'].'; durationout : '.$sublayer['durationout'].'; easingin : '.$sublayer['easingin'].'; easingout : '.$sublayer['easingout'].'; delayin : '.$sublayer['delayin'].'; delayout : '.$sublayer['delayout'].';">';

                if(empty($sublayer['type']) || $sublayer['type'] == 'img') {
                  if(!empty($sublayer['image'])) {
                    $data .= '<img src="'.$sublayer['image'].'" alt="sublayer">';
                  }
                } else {
                  $data .= '<'.$sublayer['type'].' class="ls-s'.$sublayer['level'].'" style="'.$sublayer['style'].'"> '.stripslashes($sublayer['html']).' </'.$sublayer['type'].'>';
                }
                $data .= '</a>';
              } else {
                if(empty($sublayer['type']) || $sublayer['type'] == 'img') {
                  if(!empty($sublayer['image'])) {
                    $data .= '<img class="ls-s'.$sublayer['level'].'" src="'.$sublayer['image'].'" alt="sublayer" style="position: absolute; top: '.$sublayer['top'].'px; left: '.$sublayer['left'].'px; slidedirection : '.$sublayer['slidedirection'].'; slideoutdirection : '.$sublayer['slideoutdirection'].'; parallaxin : '.$sublayer['parallaxin'].'; parallaxout : '.$sublayer['parallaxout'].'; durationin : '.$sublayer['durationin'].'; durationout : '.$sublayer['durationout'].'; easingin : '.$sublayer['easingin'].'; easingout : '.$sublayer['easingout'].'; delayin : '.$sublayer['delayin'].'; delayout : '.$sublayer['delayout'].';">';
                  }
                } else {
                  $data .= '<'.$sublayer['type'].' class="ls-s'.$sublayer['level'].'" style="position: absolute; top:'.$sublayer['top'].'px; left: '.$sublayer['left'].'px; slidedirection : '.$sublayer['slidedirection'].'; slideoutdirection : '.$sublayer['slideoutdirection'].'; parallaxin : '.$sublayer['parallaxin'].'; parallaxout : '.$sublayer['parallaxout'].'; durationin : '.$sublayer['durationin'].'; durationout : '.$sublayer['durationout'].'; easingin : '.$sublayer['easingin'].'; easingout : '.$sublayer['easingout'].'; delayin : '.$sublayer['delayin'].'; delayout : '.$sublayer['delayout'].'; '.$sublayer['style'].'"> '.stripslashes($sublayer['html']).' </'.$sublayer['type'].'>';
                }
              }
            }
          }
          $data .= '</div>';
        }
      }
      $data .= '</div>';
    }

    // Return data
    return $data;
  }
  /**
   * BEST SELLERS
   *
   * @description
   *    show a box with best sellers
   *
   * @example
   *   [best_sellers per_page="" columns=""]
   *
   * @attr
   *   title  - the title of the box
   *   description - the text below title
   **/
  function do_best_sellers($atts, $content = null)
  {
    global $woocommerce_loop;

    extract(shortcode_atts(array(
      'per_page' 	=> 12,
      'columns' 	=> 4
    ), $atts));

    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering' );

    $woocommerce_loop['columns'] = $columns;

    $args = array(
      'post_type'	=> 'product',
      'post_status' => 'publish',
      'ignore_sticky_posts'	=> 1,
      'posts_per_page' => $per_page,
      'meta_key' 		=> 'total_sales',
      'orderby' 		=> 'meta_value'
    );
    $products = new WP_Query( $args );
    $this->template_archive_product('', '');
    ob_start();
    if ( $products->have_posts() ) : ?>
    <ul class="products <?php echo get_query_var('product_style')?>">
      <?php while ($products->have_posts()) : $products->the_post(); ?>

      <?php woocommerce_get_template_part('content', 'product'); ?>

      <?php endwhile; // end of the loop. ?>
    </ul>
    <div class="clear"></div>
      <?php endif;
    wp_reset_postdata();

    return apply_filters( 'kwtf_sc_best_sellers_html', ob_get_clean() );
  }
  /**
   * ITEMS
   *
   * @description
   *    show the products
   *
   * @example
   *   [items per_page="" columns="" orderby="" order=""]
   *
   * @attr
   *   per_page  - the title of the box
   *   description - the text below title
   **/
  function do_items($atts){
    global $woocommerce_loop;

    if (empty($atts)) return;

    extract(shortcode_atts(array(
      'columns' 	=> 12,
      'per_page' 	=> 4,
      'orderby'   => 'title',
      'order'     => 'asc',
      'cat'       => '',
    ), $atts));

    $woocommerce_loop['columns'] = $columns;

    $args = array(
      'post_type'	=> 'product',
      'post_status' => 'publish',
      'posts_per_page' => $per_page,
      'ignore_sticky_posts'	=> 1,
      'orderby' => $orderby,
      'order' => $order,
      'meta_query' => array(
        array(
          'key' 		=> '_visibility',
          'value' 	=> array('catalog', 'visible'),
          'compare' 	=> 'IN'
        )
      )
    );

    if(isset( $atts['featured']) && $atts['featured']){
      $args['meta_query'][] = array(
        'key' 		=> '_featured',
        'value' 	=> 'yes'
      );
    }

    if(isset($atts['skus'])){
      $skus = explode(',', $atts['skus']);
      $skus = array_map('trim', $skus);
      $args['meta_query'][] = array(
        'key' 		=> '_sku',
        'value' 	=> $skus,
        'compare' 	=> 'IN'
      );
    }

    if(isset($atts['ids'])){
      $ids = explode(',', $atts['ids']);
      $ids = array_map('trim', $ids);
      $args['post__in'] = $ids;
    }

    if ( ! empty( $cat ) ) {
      $tax = 'product_cat';
      $cat = array_map( 'trim', explode( ',', $cat ) );
      if ( count($cat) == 1 ) $cat = $cat[0];
      $args['tax_query'] = array(
        array(
          'taxonomy' => $tax,
          'field' => 'slug',
          'terms' => $cat
        )
      );
    }

    $products = new WP_Query( $args );
    $this->template_archive_product('', '');
    ob_start();
    if ( $products->have_posts() ) : ?>
      <ul class="products <?php echo get_query_var('product_style')?>">
        <?php while ($products->have_posts()) : $products->the_post(); ?>

        <?php woocommerce_get_template_part('content', 'product'); ?>

        <?php endwhile; // end of the loop. ?>
      </ul>
      <div class="clear"></div>
    <?php endif;
    wp_reset_postdata();

    return apply_filters( 'kwtf_sc_items_html', ob_get_clean() );
  }
  /**
   * ADD TO CART
   *
   * @description
   *    Add a simple add to cart of a product
   *
   * @example
   *   [add_to_cart id=""]
   *
   * @attr
   *   id - the id of product
   **/
  function do_add_to_cart($atts, $content = null) {
    if (empty($atts)) return;

    global $wpdb, $woocommerce;

    if ($atts['id']) :
      $product_data = get_post( $atts['id'] );
    elseif ($atts['sku']) :
      $product_id = $wpdb->get_var($wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_key='_sku' AND meta_value='%s' LIMIT 1", $atts['sku']));
      $product_data = get_post( $product_id );
    else :
      return;
    endif;

    if ($product_data->post_type!=='product') return;

    $product = $woocommerce->setup_product_data( $product_data );

    if (!$product->is_visible()) return;

    ob_start();

    // do not show "add to cart" button if product's price isn't announced
    if( $product->get_price() === '') return;

    switch ($product->product_type) :
      case "variable" :
        $link 	= get_permalink($post->ID);
        $label 	= apply_filters('variable_add_to_cart_text', __('Select options', 'woocommerce'));
        break;
      case "grouped" :
        $link 	= get_permalink($post->ID);
        $label 	= apply_filters('grouped_add_to_cart_text', __('View options', 'woocommerce'));
        break;
      case "external" :
        $link 	= get_permalink($post->ID);
        $label 	= apply_filters('external_add_to_cart_text', __('Read More', 'woocommerce'));
        break;
      default :
        $link 	= esc_url( $product->add_to_cart_url() );
        $label 	= apply_filters('add_to_cart_text', $this->get_option( self::VAR_SHOP_BUTTON_ADD_TO_CART_LABEL, __('Add to cart', 'woocommerce')));
        break;
    endswitch;

    ?><a href="<?php echo $link; ?>" class="button"><?php echo $label; ?></a><?php

    $html = ob_get_clean();

    return apply_filters( 'kwtf_sc_add_to_cart_html', $html );
  }

  /**
   * PRODUCT SLIDER
   *
   * @description
   *    Add a product slider
   *
   * @example
   *   [product_slider cat=""]
   *
   * @attr
   *   id - the id of product
   **/
  function do_product_slider($atts, $content = null) {

    //if (empty($atts)) return;

    extract(shortcode_atts(array(
      'orderby'   => 'date',
      'order'     => 'desc',
      'cat'       => '',
      'style'     => '',
    ), $atts));

    global $wpdb, $woocommerce, $woocommerce_loop;

    if ( isset( $atts['latest'] ) && $atts['latest'] ) {
      $orderby = 'date';
      $order = 'desc';
    }

    $args = array(
      'post_type'	=> 'product',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'ignore_sticky_posts'	=> 1,
      'orderby' => $orderby,
      'order' => $order,
      'meta_query' => array(
        array(
          'key' 		=> '_visibility',
          'value' 	=> array('catalog', 'visible'),
          'compare' 	=> 'IN'
        )
      )
    );

    if(isset( $atts['featured']) && $atts['featured']){
      $args['meta_query'][] = array(
        'key' 		=> '_featured',
        'value' 	=> 'yes'
      );
    }

    if(isset( $atts['best_sellers']) && $atts['best_sellers']){
      $args['meta_key'] = 'total_sales';
      $args['orderby'] = 'meta_value';
      $args['order'] = 'desc';
    }

    if(isset($atts['skus'])){
      $skus = explode(',', $atts['skus']);
      $skus = array_map('trim', $skus);
      $args['meta_query'][] = array(
        'key' 		=> '_sku',
        'value' 	=> $skus,
        'compare' 	=> 'IN'
      );
    }

    if(isset($atts['ids'])){
      $ids = explode(',', $atts['ids']);
      $ids = array_map('trim', $ids);
      $args['post__in'] = $ids;
    }

    if ( ! empty( $cat ) ) {
      $tax = 'product_cat';
      $cat = array_map( 'trim', explode( ',', $cat ) );
      if ( count($cat) == 1 ) $cat = $cat[0];
      $args['tax_query'] = array(
        array(
          'taxonomy' => $tax,
          'field' => 'slug',
          'terms' => $cat
        )
      );
    }

    $woocommerce_loop['setLast'] = true;

    if ( empty( $style ) )
      $style = $this->get_option( self::VAR_SHOP_PRODUCTS_STYLE);

    $woocommerce_loop['style'] = $style;

    $products = new WP_Query( $args );
    $this->template_archive_product('', '');
    ob_start();
    echo '<div class="products-slider '.$style.'">';
    if ( $products->have_posts() ) : ?>
      <ul class="products <?php echo get_query_var('product_style')?>">
        <?php while ($products->have_posts()) : $products->the_post(); ?>

        <?php woocommerce_get_template_part('content', 'product'); ?>

        <?php endwhile; // end of the loop. ?>
      </ul>
    <div class="clear"></div>
    <?php endif;
    echo '</div>';
    wp_reset_postdata();

    $args['posts_per_page'] = 4;
    if ( $this->layout_page() == 'layout-sidebar-no' )
      $args['posts_per_page'] = 5;
    $products = new WP_Query( $args );
    echo '<div class="for-mobile products-slider '.$style.'">';
    if ( $products->have_posts() ) : ?>
      <ul class="products <?php echo get_query_var('product_style')?>">
        <?php while ($products->have_posts()) : $products->the_post(); ?>

        <?php woocommerce_get_template_part('content', 'product'); ?>

        <?php endwhile; // end of the loop. ?>
      </ul>
    <div class="clear"></div>
    <?php endif;
    echo '</div>';

    wp_reset_postdata();

    $html = ob_get_clean();

    unset( $woocommerce_loop['setLast'] );

    return apply_filters( 'kwtf_sc_product_slider_html', $html );
  }

}