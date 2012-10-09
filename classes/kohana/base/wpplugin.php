<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 *@name WPPlugin.php
 *@packages Wordpress/Plugin
 *@subpackage Plugin
 *@category Plugin
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */
abstract class Kohana_Base_WPPlugin {

  const ATTR_ACTION          = 'action_';
  const ATTR_FILTER          = 'filter_';
  const ATTR_VALIDATOR       = 'validate_';
  const ATTR_SHORTCODER      = 'do_';
  const ATTR_TEMPLATER       = 'template_';
  const ATTR_EVENT           = 'hook_';
  const ATTR_PRIORITY        = 10;
  const ATTR_HIGH_PRIORITY   = 1;
  const ATTR_LOW_PRIORITY    = 99;
  
  /**
   * 
   * @var array WPPlugin
   */
  private static $instance = array();	

  protected $_methods = array();
  /**
   * @return string
   */
  private static function get_child_class()
  {
    $backtrace = debug_backtrace();
    $num = count($backtrace);
    $found = NULL;
    for($i = 0; $i < $num; $i++)
    {
      if( isset($backtrace[$i]["class"]) && $backtrace[$i]["class"] !== ''){
        $class = new ReflectionClass( $backtrace[$i]["class"]);
        if ( $class->isSubclassOf( 'Kohana_WPPlugin') 
          && ( is_null($found) || $class->isSubclassOf( $found) ) )
          $found = $backtrace[$i]["class"];
      }
      elseif( !is_null( $found)){
        return $found;
      }
    }
    return $found;
  }

  /**
   *
   * @return WPPlugin
   */
  public static function getInstance(){
    $class = self::get_child_class();
    if ( !$class)  return FALSE;
    $_class = new ReflectionClass( $class);
    $file = $_class->getFileName();
    if ( !isset( self::$instance[$file])){
      self::$instance [$file]= new $class;
    }
    return self::$instance[$file];
  }

  /**
   * 
   */
  private function __construct() {
  }

  /**
   * @param $name
   * @return bool|string
   */
  private function is_hook( $name){
    if ( strpos( $name, self::ATTR_ACTION) === 0)
      return self::ATTR_ACTION;
    if ( strpos( $name, self::ATTR_FILTER) === 0 )
      return self::ATTR_FILTER;
    if ( strpos( $name, self::ATTR_VALIDATOR) === 0 )
      return self::ATTR_VALIDATOR;
    if ( strpos( $name, self::ATTR_EVENT) === 0 )
      return self::ATTR_EVENT;
    if ( strpos( $name, self::ATTR_SHORTCODER) === 0 )
      return self::ATTR_SHORTCODER;
    if ( strpos( $name, self::ATTR_TEMPLATER) === 0 )
      return self::ATTR_TEMPLATER;
    return FALSE;
  }

  /**
   * Get overriden methods for a specific class
   *
   * @param WPPlugin $obj
   * @return array
   */
  private function get_overriden_methods( $obj){
    $class = new ReflectionClass( $obj);
    $base = new ReflectionClass( 'Kohana_Base_WPPlugin');
    $overriden = array();
    
    //if ( $class->getName() === $base->getName())  return $overriden;
    //else  $overriden = $this->get_overriden_methods( $class->getParentClass(), $prefix);
    foreach( $class->getMethods( ReflectionMethod::IS_PUBLIC
             & ~ReflectionMethod::IS_STATIC)
             as $method){
      $name = $method->getName();
      $is = $this->is_hook( $name);
      if ( $is === self::ATTR_EVENT || $is === self::ATTR_VALIDATOR || $is === self::ATTR_SHORTCODER || $is === self::ATTR_TEMPLATER ){
        $overriden [$is][$name]= $method->getNumberOfRequiredParameters();
      }
      elseif ( $is && $method->getDeclaringClass()->getName() !== $base->getName() && $base->hasMethod( $name) ){
          $overriden [$is][$name]= $method->getNumberOfRequiredParameters();
      }
    } 

    return $overriden;
  }
  

  /**
   * This function will loop throuh all actions and see if it is
   * overwritten in the child calls.
   * If that's the case it will call that method
   * @param string $type
   * @return void
   */
  private function call_hooks(){
    $methods = array();
    $priorities = $this->get_var( Kohana_WPPlugin::OPT_METHODS_PRIORITIES);

    foreach ( $this->get_overriden_methods( $this) as $is => $meta)
      foreach( $meta as $method => $argn)
      {

        $priority = array_key_exists( $method, $priorities)? $priorities[$method]: self::ATTR_PRIORITY;
        $tag = $method;
        switch($method){
          case 'filter_plugin_action_links':
            $tag = $method . '_' . $this->base_name;
            break;
          case 'filter_template_include':
            $priority = self::ATTR_LOW_PRIORITY;
            break;
        }

        $tag = str_replace( strtolower($is), '', $tag);
        $methods[$is][$tag] = array( 'name' => $method, 'argn' => $argn);
        switch ( $is){
          case self::ATTR_TEMPLATER:
            if ( $tag === 'header')
              $tag = 'get_header';
            elseif ( $tag === 'footer')
              $tag = 'get_footer';
            elseif ( $tag === 'sidebar')
              $tag = 'get_sidebar';
            elseif ( $tag === 'searchform')
              $tag = 'get_search_form';
            elseif ( $tag === 'comments')
              $tag = 'comments_template';
            else
              $tag = 'get_template_part_' . $tag;

            add_action( $tag, array($this, 'include__initialize'), self::ATTR_HIGH_PRIORITY, $argn);
            add_action( $tag, array($this, $method), $priority, $argn);
            break;
          case self::ATTR_ACTION :
            add_action( $tag, array($this, $method), $priority, $argn);
            break;
          case self::ATTR_EVENT :
          case self::ATTR_FILTER :
            add_filter( $tag, array($this, $method), $priority, $argn);
          default:;
        }
      }
    $this->_methods = $methods;
  }

  /**
   *
   */
  protected function _initialize( $file){
    $this->call_hooks( );
  }

  public function include__initialize( $slug, $name = NULL){}
  /**
   * Overwritable functions
   * The reason we create empty method for these actions/filters
   * is code completitions
   */
  public function action_muplugins_loaded(){}
  public function action_plugins_loaded(){}
  public function action_sanitize_commmnt_cookies(){}
  public function action_setup_theme(){}
  public function action_load_textdomain(){}
  public function action_after_setup_theme(){}
  public function action_auth_cookie_valid(){}
  public function action_set_current_user(){}
  public function action_init(){}
  public function action_widgets_init(){}
  public function action_register_sidebar(){}
  public function action_wp_register_sidebar_widget(){}
  public function action_wp_loaded(){}
  public function action_auth_redirect(){}
  public function action_wp_default_scripts($params){}
  public function action_admin_menu(){}
  public function action_admin_init(){}
  public function action_parse_request($params){}
  public function action_send_headers($wp_obj){}
  public function action_parse_query($params){}
  public function action_pre_get_posts($query_obj){}
  public function action_posts_selection(){}
  public function action_wp($wp_obj){}
  public function action_admin_xml_ns(){}
  public function action_wp_default_styles($params){}
  public function action_login_enqueue_scripts(){}
  public function action_admin_enqueue_scripts(){}
  public function action_admin_print_styles(){}
  public function action_admin_print_scripts(){}
  public function action_wp_print_styles(){}
  public function action_wp_print_scripts(){}
  public function action_wp_enqueue_scripts(){}
  public function action_admin_head(){}
  public function action_admin_bar_menu(){}
  public function action_in_admin_header(){}
  public function action_adminmenu(){}
  public function action_admin_notices(){}
  public function action_restrict_manage_posts(){}
  public function action_the_post($params){}
  public function action_in_admin_footer(){}
  public function action_admin_footer(){}
  public function action_admin_print_footer_scripts(){}
  public function action_wp_print_footer_scripts(){}
  public function action_shutdown(){}
  public function action_add_attachment($attachment_id){}
  public function action_add_meta_boxes(){}
  public function action_clean_post_cache($post_id){}
  public function action_create_category($category_id){}
  public function action_delete_attachment($attachement_id){}
  public function action_delete_category($category_id){}
  public function action_delete_post($postpage_id){}
  public function action_deleted_post($postpage_id){}
  public function action_edit_attachment($attachment_id){}
  public function action_edit_category($category_id){}
  public function action_edit_post($postpage_id){}
  public function action_pre_post_update($post_id){}
  public function action_private_to_publish($post_obj){}
  public function action_publish_page($page_id){}
  public function action_publish_phone($post_id){}
  public function action_publish_post($post_id){}
  public function action_save_post($post_id){}
  public function action_xmlrpc_publish_post($post_id){}
  public function action_comment_closed($post_id){}
  public function action_comment_id_not_found($post_id){}
  public function action_comment_flood_trigger($time_prev_comment, $time_curr_comment){}
  public function action_comment_on_draft($post_id){}
  public function action_comment_post($comment_id, $status){}
  public function action_edit_comment($comment_id){}
  public function action_delete_comment($comment_id){}
  public function action_pingback_post($comment_id){}
  public function action_pre_ping(array $links, $pung){}
  public function action_trackback_post($comment_id){}
  public function action_wp_insert_post($post_id, $post=null){}
  public function action_media_buttons_context( $context){}
  /**
   * Runs to check whether a comment should be blacklisted.
   * wp_die to reject the comment.
   */
  public function action_wp_blacklist_check($author, $email, $url, $text, $ip, $user_agent){}
  public function action_wp_set_comment_status($status){}
  public function action_add_link($line_id){}
  public function action_delete_link($link_id){}
  public function action_edit_link($link_id){}
  public function action_atom_entry(){}
  public function action_atom_head(){}
  public function action_atom_ns(){}
  public function action_commentrss2_item(){}
  public function action_do_feed_rss2(){}
  public function action_do_feed_atom(){}
  public function action_do_feed_rdf(){}
  public function action_rdf_header(){}
  public function action_rdf_item(){}
  public function action_rdf_ns(){}
  public function action_rss_head(){}
  public function action_rss_item(){}
  public function action_rss2_head(){}
  public function action_rss2_item(){}
  public function action_rss2_ns(){}
  public function action_comment_form($post_id){}
  public function action_do_robots(){}
  public function action_do_robotstxt(){}
  public function action_get_footer(){}
  public function action_get_header(){}
  public function action_switch_theme($theme_name, $theme){}
  public function action_template_redirect(){}
  public function action_wp_footer(){}
  public function action_wp_head(){}
  public function action_wp_meta(){}
  public function action_activity_box_end(){}
  public function action_add_category_form_pre(){}
  public function action_check_passwords (){}
  public function action_dbx_page_advanced (){}
  public function action_dbx_page_sidebar (){}
  public function action_dbx_post_advanced (){}
  public function action_dbx_post_sidebar (){}
  public function action_delete_user($user_id){}
  public function action_edit_category_form (){}
  public function action_edit_category_form_pre(){}
  public function action_edit_tag_form(){}
  public function action_edit_tag_form_pre(){}
  public function action_edit_form_advanced(){}
  public function action_edit_page_form(){}
  public function action_edit_user_profile(){}
  public function action_login_form(){}
  public function action_login_head(){}
  public function action_lost_password(){}
  public function action_lostpassword_form(){}
  public function action_lostpassword_post(){}
  public function action_manage_link_custom_column(){}
  public function action_manage_posts_custom_column( $column){}
  public function action_manage_pages_custom_column(){}
  public function action_password_reset(){}
  public function action_personal_options_update(){}
  public function action_profile_personal_options (){}
  public function action_profile_update($user_id){}
  public function action_register_form(){}
  public function action_register_post(){}
  public function action_retrieve_password(){}
  public function action_show_user_profile(){}
  public function action_simple_edit_form (){}
  public function action_user_register(){}
  public function action_wp_authenticate(array $data){}
  public function action_wp_login(){}
  public function action_wp_logout(){}
  public function action_wp_dashboard_setup(){}
  public function action_right_now_content_table_end(){}
  public function action_right_now_table_end(){}
  public function action_right_now_discussion_table_end(){}
  public function action_right_now_end(){}
  public function action_blog_privacy_selector(){}
  public function action_check_admin_referer(){}
  public function action_check_ajax_referer(){}
  public function action_generate_rewrite_rules($wp_rewrite){}
  public function action_loop_end(){}
  public function action_loop_start(){}
  public function action_sanitize_comment_cookies(){}
  public function action_wp_scheduled_delete(){}
  public function action_clean_url( $url ){}

  public function filter_body_class( $classes){}
  public function filter_plugin_row_meta( $links, $file){}
  public function filter_plugin_action_links($links){}
  public function filter_attachment_fields_to_edit(array $form_fields, $post_obj){}
  public function filter_attachment_icon($img_tag, $attachment_id){}
  public function filter_attachment_innerHTML($inner_html, $attachment_id){}
  public function filter_content_edit_pre(){}
  public function filter_excerpt_edit_pre(){}
  public function filter_get_attached_file($file_information, $attachment_id){}
  public function filter_get_enclosed(){}
  public function filter_get_pages($pages){}
  public function filter_get_pung(){}
  public function filter_get_the_excerpt(){}
  public function filter_get_the_guid(){}
  public function filter_get_to_ping(){}
  public function filter_icon_dir(){}
  public function filter_icon_dir_uri(){}
  public function filter_prepend_attachment(){}
  public function filter_sanitize_title(){}
  public function filter_single_post_title( $title){}
  public function filter_the_content( $content){}
  public function filter_the_content_rss(){}
  public function filter_the_editor_content(){}
  public function filter_the_excerpt(){}
  public function filter_the_excerpt_rss(){}
  public function filter_the_tags(){}
  public function filter_the_title($title){}
  public function filter_the_title_rss(){}
  public function filter_title_edit_pre(){}
  public function filter_wp_dropdown_pages(){}
  public function filter_wp_list_pages(){}
  public function filter_wp_list_pages_excludes(){}
  public function filter_wp_get_attachment_metadata(){}
  public function filter_wp_get_attachment_thumb_file($thumb_file, $attachment_id){}
  public function filter_wp_get_attachment_thumb_url($thumb_file, $attchment_id){}
  public function filter_wp_get_attachment_url($url, $attachment_id){}
  public function filter_wp_mime_type_icon($icon_uri, $mime, $post_id){}
  public function filter_wp_title(){}
  public function filter_add_ping(){}
  public function filter_attachment_fields_to_save($post_attributes, $attachment_fields){}
  public function filter_attachment_max_dims(){}
  public function filter_category_save_pre(){}
  public function filter_comment_status_pre(){}
  public function filter_content_filtered_save_pre(){}
  public function filter_content_save_pre(){}
  public function filter_excerpt_save_pre(){}
  public function filter_name_save_pre (){}
  public function filter_phone_content(){}
  public function filter_ping_status_pre(){}
  public function filter_post_mime_type_pre(){}
  public function filter_status_save_pre(){}
  public function filter_thumbnail_filename(){}
  public function filter_wp_thumbnail_creation_size_limit($max_file_size, $attachment_id, $attachment_file_name){}
  public function filter_wp_thumbnail_max_side_length($image_side_max_size, $attachment_id, $attachment_file_name){}
  public function filter_title_save_pre(){}
  public function filter_update_attached_file($attachment_info, $attachment_id){}
  public function filter_wp_delete_file(){}
  public function filter_wp_generate_attachment_metadata(){}
  public function filter_wp_update_attachment_metadata($meta_data, $attachment_id){}
  public function filter_comment_excerpt(){}
  public function filter_comment_post_redirect($location, $comment_info){}
  public function filter_comment_text(){}
  public function filter_comment_text_rss(){}
  public function filter_comments_array($comment_info, $post_id){}
  public function filter_comments_number(){}
  public function filter_get_comment_excerpt(){}
  public function filter_get_comment_ID(){}
  public function filter_get_comment_text(){}
  public function filter_get_comment_type(){}
  public function filter_get_comments_number(){}
  public function filter_post_comments_feed_link(){}
  public function filter_comment_save_pre($comment_data, $author, $email, $url, $content, $type, $user_id){}
  public function filter_pre_comment_approved(){}
  public function filter_pre_comment_content(){}
  public function filter_wp_insert_post_data($data, $post){}
  public function filter_category_description($description, $category_id, $description, array $category){}
  public function filter_category_feed_link(){}
  public function filter_category_link($link_url, $category_id){}
  public function filter_get_categories($category_list){}
  public function filter_get_category(){}
  public function filter_list_cats(){}
  public function filter_list_cats_exclusions(){}
  public function filter_single_cat_title(){}
  public function filter_the_category($list, $separator=''){}
  public function filter_the_category_rss(){}
  public function filter_wp_dropdown_cats(){}
  public function filter_wp_list_categories(){}
  public function filter_pre_category_description(){}
  public function filter_pre_category_name(){}
  public function filter_pre_category_nicename(){}
  public function filter_attachment_link($link_url, $attachment_id){}
  public function filter_author_feed_link(){}
  public function filter_author_link($url, $author_name, $author_id){}
  public function filter_comment_reply_link($url, $custom_options, $comment_obj, $post_obj){}
  public function filter_day_link($url, $year, $month, $day){}
  public function filter_feed_link($url, $type){}
  public function filter_get_comment_author_link($username){}
  public function filter_get_comment_author_url_link(){}
  public function filter_month_link($url, $year, $month){}
  public function filter_page_link($url, $page_id){}
  public function filter_post_link($url, $post_data){}
  public function filter_the_permalink(){}
  public function filter_year_link($url, $year){}
  public function filter_tag_link($url, $tag_id){}
  public function filter_get_comment_date(){}
  public function filter_get_comment_time(){}
  public function filter_get_the_modified_date(){}
  public function filter_get_the_modified_time(){}
  public function filter_get_the_time(){}
  public function filter_the_date(){}
  public function filter_the_modified_date(){}
  public function filter_the_modified_time(){}
  public function filter_the_time(){}
  public function filter_the_weekday(){}
  public function filter_the_weekday_date($weekday_text, $before_text, $after_text){}
  public function filter_login_redirect(){}
  public function filter_author_email(){}
  public function filter_comment_author(){}
  public function filter_comment_author_rss(){}
  public function filter_comment_email(){}
  public function filter_comment_url(){}
  public function filter_get_comment_author(){}
  public function filter_get_comment_author_email(){}
  public function filter_get_comment_author_IP(){}
  public function filter_get_comment_author_url(){}
  public function filter_login_errors(){}
  public function filter_login_headertitle(){}
  public function filter_login_headerurl(){}
  public function filter_login_message(){}
  public function filter_role_has_cap(){}
  public function filter_sanitize_user($username, $raw_username, $strict){}
  public function filter_the_author(){}
  public function filter_the_author_email(){}
  public function filter_pre_comment_author_email(){}
  public function filter_pre_comment_author_name(){}
  public function filter_pre_comment_author_url(){}
  public function filter_pre_comment_user_agent(){}
  public function filter_pre_comment_user_ip(){}
  public function filter_pre_user_id(){}
  public function filter_pre_user_description(){}
  public function filter_pre_user_display_name(){}
  public function filter_pre_user_email(){}
  public function filter_pre_user_first_name(){}
  public function filter_pre_user_last_name(){}
  public function filter_pre_user_login(){}
  public function filter_pre_user_nicename(){}
  public function filter_pre_user_nickname(){}
  public function filter_pre_user_url(){}
  public function filter_registration_errors(){}
  public function filter_user_registration_email(){}
  public function filter_validate_username($valid, $username){}
  public function filter_get_bookmarks($query_result, $arguments){}
  public function filter_link_category(){}
  public function filter_link_description(){}
  public function filter_link_rating(){}
  public function filter_link_title(){}
  public function filter_pre_link_description(){}
  public function filter_pre_link_image(){}
  public function filter_pre_link_name(){}
  public function filter_pre_link_notes(){}
  public function filter_pre_link_rel(){}
  public function filter_pre_link_rss(){}
  public function filter_pre_link_target(){}
  public function filter_pre_link_url(){}
  public function filter_all_options(){}
  public function filter_bloginfo($info, $show, $after){}
  public function filter_bloginfo_rss($info, $show){}
  public function filter_bloginfo_url(){}
  public function filter_loginout(){}
  public function filter_register(){}
  public function filter_upload_dir($dir, $url, $error=false){}
  public function filter_upload_mimes($mimes){}
  public function filter_attribute_escape(){}
  public function filter_js_escape(){}
  public function filter_autosave_interval(){}
  public function filter_cat_rows(){}
  public function filter_comment_edit_pre(){}
  public function filter_comment_edit_redirect($location, $commend_id){}
  public function filter_comment_moderation_subject($mail_subject, $comment_id){}
  public function filter_comment_moderation_text($mail_body_text, $comment_id){}
  public function filter_comment_notification_headers($mail_header_text, $comment_id){}
  public function filter_comment_notification_subject($mail_subject, $comment_id){}
  public function filter_comment_notification_text($mail_body_text, $comment_id){}
  public function filter_cron_schedules(){}
  public function filter_custom_menu_order(){}
  public function filter_default_content(){}
  public function filter_default_excerpt(){}
  public function filter_default_title(){}
  public function filter_editable_slug(){}
  public function filter_format_to_edit(){}
  public function filter_format_to_post(){}
  public function filter_manage_posts_columns(){}
  public function filter_manage_pages_columns(){}
  public function filter_menu_order(){}
  public function filter_postmeta_form_limit(){}
  public function filter_pre_upload_error(){}
  public function filter_preview_page_link(){}
  public function filter_preview_post_link(){}
  public function filter_richedit_pre(){}
  public function filter_show_password_fields(){}
  public function filter_the_editor($value){}
  public function filter_user_can_richedit($bool){}
  public function filter_user_has_cap(){}
  public function filter_wp_handle_upload($info, $url, $type){}
  public function filter_wp_upload_tabs(){}
  public function filter_mce_spellchecker_languages(){}
  public function filter_mce_css(){}
  public function filter_mce_external_plugins($plugin_array){}
  public function filter_parse_query( $query ) {}
  public function filter_mce_external_languages(){}
  public function filter_tiny_mce_before_init(){}
  public function filter_locale_stylesheet_uri($uri, $style_dir_uri){}
  public function filter_stylesheet(){}
  public function filter_stylesheet_directory($dir, $stylesheet){}
  public function filter_stylesheet_directory_uri($style_dir_uri, $stylesheet){}
  public function filter_stylesheet_uri($style_uri, $stylesheet){}
  public function filter_template(){}
  public function filter_template_directory($template_dir, $template){}
  public function filter_template_directory_uri($template_dir_uri, $template){}
  public function filter_theme_root(){}
  public function filter_theme_root_uri(){}
  public function filter_404_template(){}
  public function filter_archive_template(){}
  public function filter_attachment_template(){}
  public function filter_author_template(){}
  public function filter_category_template(){}
  public function filter_comments_popup_template(){}
  public function filter_comments_template(){}
  public function filter_date_template(){}
  public function filter_home_template(){}
  public function filter_page_template(){}
  public function filter_paged_template(){}
  public function filter_search_template(){}
  public function filter_single_template(){}
  public function filter_template_include( $template){}
  public function filter_allowed_redirect_hosts(){}
  public function filter_author_rewrite_rules(){}
  public function filter_category_rewrite_rules(){}
  public function filter_comments_rewrite_rules(){}
  public function filter_create_user_query(){}
  public function filter_date_rewrite_rules(){}
  public function filter_found_posts(){}
  public function filter_found_posts_query(){}
  public function filter_get_editable_authors(){}
  public function filter_gettext($translated_text, $untranslated_text){}
  public function filter_override_load_textdomain(){}
  public function filter_get_next_post_join(){}
  public function filter_get_next_post_sort(){}
  public function filter_get_next_post_where(){}
  public function filter_get_others_drafts(){}
  public function filter_get_previous_post_join(){}
  public function filter_get_previous_post_sort(){}
  public function filter_get_previous_post_where(){}
  public function filter_get_users_drafts(){}
  public function filter_locale(){}
  public function filter_mod_rewrite_rules(){}
  public function filter_post_limits(){}
  public function filter_posts_distinct(){}
  public function filter_posts_fields(){}
  public function filter_posts_groupby(){}
  public function filter_posts_join_paged(){}
  public function filter_posts_orderby(){}
  public function filter_posts_request(){}
  public function filter_post_rewrite_rules(){}
  public function filter_root_rewrite_rules(){}
  public function filter_page_rewrite_rules(){}
  public function filter_posts_where_paged(){}
  public function filter_posts_join(){}
  public function filter_posts_where(){}
  public function filter_query(){}
  public function filter_query_string(){}
  public function filter_query_vars(){}
  public function filter_request( $request){}
  public function filter_rewrite_rules_array(){}
  public function filter_search_rewrite_rules(){}
  public function filter_the_posts(){}
  public function filter_excerpt_length( $length){}
  public function filter_excerpt_more( $more){}
  public function filter_post_edit_form_tag(){}
  public function filter_update_user_query(){}
  public function filter_wp_redirect($url, $http_code){}
  public function filter_xmlrpc_methods(){}
  public function filter_wp_mail_from(){}
  public function filter_wp_mail_from_name(){}
  public function filter_wp_mail_content_type($content_type){}
  public function filter_wp_page_menu_args(){}
  public function filter_pre_update_option_active_plugins(){}
  public function filter_post_type_link(){}
  public function filter_post_updated_messages(){}
  public function filter_media_buttons_context(){}
  public function filter_redirect_canonical($redirect_url, $requested_url){}
  public function filter_widget_text( $content){}
  public function filter_wp_get_attachment_link( $html, $id, $size, $permalink, $icon, $text ){}
  public function filter_widget_title($str, $class, $after){}
  public function filter_dynamic_sidebar_params($params) {}
}