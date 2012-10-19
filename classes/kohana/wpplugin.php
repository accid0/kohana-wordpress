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
abstract class Kohana_WPPlugin extends Kohana_Base_WPPlugin {
  /**
   * Attributes
   * @var string
   */
  const ATTR_POST                        = 'post';
  const ATTR_GET                         = 'get';
  const ATTR_SUBMIT                      = 'submit';
  const ATTR_BOOL                        = 'bool';
  const ATTR_TEXT                        = 'text';
  const ATTR_IMG                         = 'image';
  const ATTR_ACTIVE                      = 'active';
  const ATTR_NOTACTIVE                   = 'notactive';
  const ATTR_UNDEFINED                   = 'undefined';
  const ATTR_PLUGIN                      = 'plugin';
  const ATTR_THEME                       = 'theme';
  const ATTR_ADMIN                       = 'admin';
  const ATTR_ADMIN_PAGE                  = 'admin_page';
  const ATTR_LOGIN                       = 'login';
  const ATTR_THIS                        = 'THIS';
  const ATTR_SRC                         = 'src';
  const ATTR_DEPS                        = 'deps';
  const ATTR_MEDIA                       = 'media';
  const ATTR_IN_FOOTER                   = 'in_footer';
  const ATTR_VER                         = 'ver';
  const ATTR_HANDLE                      = 'handle';
  const ATTR_HOOK                        = 'hook';
  /**
   * Options defined
   * @var string
   */
  const OPT_MODE                         = 'mode';
  const OPT_NAME                         = 'name';
  const OPT_BASE_NAME                    = 'base_name';
  const OPT_PLUGIN_NAME                  = 'plugin_name';
  const OPT_SANITIZED_NAME               = 'sanitized_name';
  const OPT_VERSION                      = 'version';
  const OPT_PLUGIN_STATUS                = 'plugin_status';
  const OPT_HAS_ACTIVATION_NOTICE        = 'has_activation_notice';
  const OPT_ACTIVATION_NOTICE            = 'activation_notice';
  const OPT_HAS_SHORTCODE                = 'has_shortcode';
  const OPT_SHORTCODE                    = 'shortcode';
  const OPT_HAS_WIDGET                   = 'has_widget';
  const OPT_WIDGETS                      = 'widgets';
  const OPT_WIDGET_CLASS                 = 'widget_class';
  const OPT_WIDGET_NAME                  = 'widget_name';
  const OPT_WIDGET_OPTIONS_LABELS        = 'widget_options_labels';
  const OPT_WIDGET_DIR                   = 'widget_dir';
  const OPT_WIDGET_CALLBACK              = 'widget_callback';
  const OPT_HAS_CRON                     = 'has_cron';
  const OPT_CRONTAB                      = 'crontab';
  const OPT_HAS_STYLESHEET               = 'has_stylesheet';
  const OPT_STYLESHEET_FILE              = 'stylesheet_file';
  const OPT_HAS_JAVASCRIPT               = 'has_javascript';
  const OPT_JAVASCRIPT_FILE              = 'javascript_file';
  const OPT_HAS_ENQUEUE_SCRIPTS          = 'has_enqueue_scripts';
  const OPT_ENQUEUE_SCRIPTS              = 'enqueue_scripts';
  const OPT_HAS_TRANSLATION              = 'has_translation';
  const OPT_WIDGET_TDOMAIN               = 'wdg_tdomain';
  const OPT_PLUGIN_TDOMAIN               = 'plg_tdomain';
  const OPT_TPL_TDOMAIN                  = 'tpl_tdomain';
  const OPT_TRANSLATION_DOMAIN           = 'translation_domain';
  const OPT_TRANSLATIONS                 = 'translations';
  const OPT_LANG_DIR                     = 'lang_dir';
  const OPT_INITIAL_FUNDING              = 'initial_funding';
  const OPT_ADDITIONAL_FUNDING           = 'additional_funding';
  const OPT_HAS_TOPLEVEL_MENU            = 'has_toplevel_menu';
  const OPT_HAS_OPTION_PAGE              = 'has_option_page';
  const OPT_HAS_DONATE_BLOCK             = 'donate_block';
  const OPT_HAS_CREDIT_BLOCK             = 'credit_block';
  const OPT_HAS_SUPPORT_BLOCK            = 'support_block';
  const OPT_SUPPORT_URL                  = 'support_url';
  const OPT_SUPPORT_EMAIL                = 'support_email';
  const OPT_SUPPORT_PROFILE              = 'support_profile';
  const OPT_FORM_METHOD                  = 'form_method';
  const OPT_OPTION_PAGE_TITLE            = 'option_page_title';
  const OPT_OPTION_LOGO                  = 'wpp_logo';
  const OPT_OPTION_CONTACT_IMG           = 'option_contact_img';
  const OPT_OPTION_UPDATE_MESSAGE        = 'update_msg';
  const OPT_OPTION_ERROR_MESSAGE         = 'error_msg';
  const OPT_OPTION_FORM_BLOCKS           = 'form_blocks';
  const OPT_OPTION_FIELD_LABELS          = 'option_field_labels';
  const OPT_OPTION_STATIC                = 'option_static';
  const OPT_OPTION_VALUES                = 'option_values';
  const OPT_OPTION_DEFAULTS              = 'option_defaults';
  const OPT_OPTION_VAR_PREFIX            = '__';
  const OPT_FORM_ADD_ACTIONS             = 'form_add_actions';
  const OPT_OPTION_PAGE_TEXT             = 'option_page_text';
  const OPT_OPTION_JS_TEXT               = 'jstext';
  const OPT_HAS_CACHE                    = 'has_cache';
  const OPT_BACKLINKWARE_TEXT            = 'backlinkware_text';
  const OPT_PLUGIN_FILE                  = 'plugin_file';
  const OPT_DIR_OPTION_BLOCKS            = 'dir_option_blocks';
  const OPT_ADMIN_MENU_PAGE              = 'admin_menu_page';
  const OPT_ADMIN_OPTIONS_PAGE           = 'admin_options_page';
  const OPT_METHODS_PRIORITIES           = 'methods_priorities';
  
  /**
   * 
   * @var array Current attributes
   */
  private $_attributes = array();
  /**
   * 
   * @var array Defaults options 
   */
  private $_defaults =
  array(
        self::OPT_MODE                      => self::ATTR_PLUGIN,
		self::OPT_NAME 				        => 'Kohana WPPlugin',
		self::OPT_BASE_NAME                 => '',
		self::OPT_PLUGIN_NAME               => 'WPPlugin',
    self::OPT_SANITIZED_NAME            => 'wpplugin',
		self::OPT_VERSION			        => '0.1.0',
		self::OPT_PLUGIN_STATUS             => self::ATTR_UNDEFINED,
		self::OPT_HAS_ACTIVATION_NOTICE     => FALSE,
		self::OPT_ACTIVATION_NOTICE         => 'Activated successfull.',
		self::OPT_HAS_SHORTCODE		        => TRUE,
		self::OPT_SHORTCODE			        => '',
		self::OPT_HAS_WIDGET		        => TRUE,
		self::OPT_WIDGETS                   => array(
		  array(
		    self::OPT_WIDGET_TDOMAIN		=> 'default',
		    self::OPT_WIDGET_CLASS		    => 'Widget_WPWidget',
		    self::OPT_WIDGET_NAME           => 'WPWidget',
		    self::OPT_WIDGET_OPTIONS_LABELS => array( 
						'title'             => 'Title'
		    )
		  ),
		),
		self::OPT_WIDGET_DIR                => 'widgets',
		self::OPT_HAS_CRON			        => false,
		self::OPT_CRONTAB			        => array(
		),
		self::OPT_HAS_STYLESHEET	        => FALSE,
		self::OPT_STYLESHEET_FILE	        => 'css/wpp.css',
		self::OPT_HAS_JAVASCRIPT            => FALSE,
		self::OPT_JAVASCRIPT_FILE           => 'js/wpp.js',
    self::OPT_HAS_ENQUEUE_SCRIPTS       => FALSE,
    self::OPT_ENQUEUE_SCRIPTS           => array(
      self::ATTR_ADMIN                  => array(),
      self::ATTR_THEME                  => array(),
      self::ATTR_LOGIN                  => array(),
      self::ATTR_ADMIN_PAGE             => array(),
    ),
		self::OPT_HAS_TRANSLATION	        => FALSE,
		self::OPT_PLUGIN_TDOMAIN            => 'default',
		self::OPT_TPL_TDOMAIN               => 'default',
		self::OPT_TRANSLATION_DOMAIN        => '',
		self::OPT_TRANSLATIONS		        => array(
			                array( 'English', 'Andrew Scherbakov', 'http://www.mysite/' ),
			                array( 'Russian', 'Andrew Scherbakov', 'http://www.mysite/' )
		),		
		self::OPT_LANG_DIR                  => '../languages',
		self::OPT_INITIAL_FUNDING  	        => array( 'Kohana', 'http://kohanaframework.su/' ),
		self::OPT_ADDITIONAL_FUNDING        => array(),
		self::OPT_HAS_TOPLEVEL_MENU         => TRUE,
		self::OPT_HAS_OPTION_PAGE	        => TRUE,
		self::OPT_HAS_DONATE_BLOCK	        => TRUE,
		self::OPT_HAS_CREDIT_BLOCK	        => TRUE,
		self::OPT_HAS_SUPPORT_BLOCK	        => TRUE,
		self::OPT_SUPPORT_URL               => 'http://support_url/',
		self::OPT_SUPPORT_EMAIL             => 'my@email',
		self::OPT_SUPPORT_PROFILE           => 'http://www.mysite/profile',
		self::OPT_FORM_METHOD		        => self::ATTR_POST,
		self::OPT_OPTION_PAGE_TITLE	        => 'Control Panel',
		self::OPT_OPTION_LOGO               => '../views/img/wpp-default-logo.png',	
		self::OPT_OPTION_CONTACT_IMG        => '../views/img/foto.jpg',
		self::OPT_OPTION_UPDATE_MESSAGE     => '',
		self::OPT_OPTION_ERROR_MESSAGE      => '',
		self::OPT_OPTION_PAGE_TEXT	        => 'This plugin has no option... yet!',
		self::OPT_OPTION_JS_TEXT            => 'This will disable the link in your blog footer. If you are using this plugin on your site and like it, did you consider making a donation? - Thanks.',
		self::OPT_OPTION_FORM_BLOCKS        => array(
			            'Other&nbsp;options:'  => array(
			                'disable_backlink' => self::ATTR_BOOL
			            )
		),
		self::OPT_OPTION_FIELD_LABELS       =>array(
		                'disable_backlink'  => 'Disable backlink in the blog footer:'
		),
		self::OPT_OPTION_STATIC             => array(),
		self::OPT_OPTION_VALUES             => array(),
		self::OPT_OPTION_DEFAULTS           => array(
		),
		self::OPT_FORM_ADD_ACTIONS	        => array(
		),
		self::OPT_HAS_CACHE			        => false,
		self::OPT_BACKLINKWARE_TEXT         => 'Features Plugin developed using Kohana WPPlugin Framework',
		self::OPT_PLUGIN_FILE		        => __FILE__,
		self::OPT_DIR_OPTION_BLOCKS         => 'blocks',
    self::OPT_ADMIN_MENU_PAGE           => FALSE,
    self::OPT_ADMIN_OPTIONS_PAGE        => FALSE,
    self::OPT_METHODS_PRIORITIES        => array(),
  );
  
  
  
  /**
   * @var array Options
   */
  protected $_options = array();
  
  /**
   * 
   * @var string
   */
  public static $error = '';
  
  
  /**
   * 
   * @param mixed $defaults
   * @param mixed $options
   */
  private function merge_options( $defaults, $options){
    if ( !is_array( $options) || !is_array( $defaults))  return $options;
    foreach ($defaults as $key => $var){
      if (isset( $options[$key]) && !is_int( $key)){
        $options [$key]= $this->merge_options( $defaults[$key], $options[$key]);
      }
      elseif( !is_int( $key))
        $options [$key]= $defaults[$key];
      else
        $options []= $defaults[$key];
    }
    return $options;
  }
  /**
   * php4 constructor are not support
   */
  private function _Kohana_WPPlugin( $file) {
    // Constructor
    $values = array();
    $class = new ReflectionClass( $this);
    do{
      $property = NULL;
      $name = $class->getName();
      try{
        $properties = $class->getDefaultProperties();
        $property = $class->getProperty('_options');
        if ( $property->getDeclaringClass()->getName() === $name){
          $values = $this->merge_options( $properties['_options'], $values);
        }
      }
      catch( Exception $e){}
      $class = $class->getParentClass();
    }
    while( basename( $class->getName() ) != 'Kohana_WPPlugin');
    $this->_options = $this->merge_options($this->_defaults, $values);
    
    $this->_options [self::OPT_PLUGIN_FILE]= $file;
    $this->_options [self::OPT_BASE_NAME]= plugin_basename( $file); 
    foreach ( $this->_options as $key => $var)
      $this->$key = $var;
    $this->sanitized_name	= sanitize_title( $this->plugin_name );
    $this->option_key		= $this->sanitized_name;
    $this->plugin_dir 		= dirname( $this->base_name );
    $this->plugin_url       = WP_PLUGIN_URL . '/' . $this->plugin_dir . '/'; 
    $this->support_url 		= $this->support_url . $this->sanitized_name;
    $this->lang_dir         = $this->plugin_dir
                                      . DIRECTORY_SEPARATOR
                                      . $this->lang_dir;
    $this->option_values = get_option( $this->option_key );
    if ( $this->_options[self::OPT_MODE] == self::ATTR_PLUGIN && is_admin()){  
                                                 
      register_activation_hook( $this->base_name, array( &$this, '_activate' ) );
    
      register_deactivation_hook( $this->base_name, array( &$this, '_deactivate' ) );
      
      add_action( 'admin_init', array( $this, '_register_plugin'));
    }
    
    if ( $this->isActive()){
      
      if( $this->has_cron )
        $this->schedule_cron();
        

    }
  }
  

  /**
   * 
   */
  private function _add_options(){
    $options = array();
    $keys = array();
    foreach( $this->form_blocks as $name => $block){
      foreach ( $block as $sid => $type){
        if ( $type !== self::ATTR_SUBMIT)
          $keys []= $sid;
      }
    }
    $keys = array_merge( $keys, array_diff( $this->option_static,  $keys));
    
    foreach( $keys as $sid ){
      $options [$sid]= ( isset( $this->option_defaults[$sid])) ? $this->option_defaults[$sid] : NULL;
    }
    
    $this->_delete_options();
    add_option( $this->option_key, $options );
  }

  /**
   * 
   */
  private function _delete_options(){
    delete_option( $this->option_key);
  }
  
  /**
   * 
   */
  private function _reset_options() {
    $options = array();
    $keys = array();
    foreach( $this->form_blocks as $name => $block){
      foreach ( $block as $sid => $type){
        if ( $type !== self::ATTR_SUBMIT)
          $keys []= $sid;
      }
    }
    $keys = array_merge( $keys, array_diff( $this->option_static,  $keys));
    
    $this->deactivate();
    $this->activate();
    
    foreach( $keys as $sid ){
      $options [$sid]= ( isset( $this->option_defaults[$sid])) ? $this->option_defaults[$sid] : NULL;
    }

    update_option( $this->option_key, $options );
    $this->set('', $options);
  }
  
  /**
   * 
   * @param WWPlugin $plugin
   * @param array $params
   */	
  private function _update_options( $plugin, $params ) {
    $options = $newoptions = $this->option_values;
    $missed_key = array();
    if ($options){

      $keys = array();
      foreach( $this->form_blocks as $name => $block){
        foreach ( $block as $sid => $type){
          if ( $type !== self::ATTR_SUBMIT)
          $keys []= $sid;
        }
      }
      $keys = array_diff( $keys, $this->option_static);
      foreach( $keys as $key ) {
        if ( !array_key_exists( $key, $params) ){
          if( !is_array( $newoptions[$key] ) ) {
            $missed_key[] = $key;
            continue;
          }
          else $value = array();
        }
        else
          $value = $params[$key];
        // reset the value
        if( is_array( $newoptions[$key] ) ) {
          $newoptions[$key] = array();
        } else {
          $newoptions[$key] = '';
        }

        if( !is_array( $value ) ) {
          $clean_value = html_entity_decode( stripslashes( $value ) );
          $newoptions[$key] = $clean_value;
        } else {
          //it's a multi-valued field, make an array...
          if( !is_array( $newoptions[$key] ) )
            $newoptions[$key] = array();
          foreach( $value as $v )
          if( is_array( $v ) ) {
            $newoptions[$key][] = $v;
          } else {
            $newoptions[$key][] = html_entity_decode( stripslashes( $v ) );
          }
        }
      }
    }

    if ( !empty( $missed_key)){
      $this->set_var( self::OPT_OPTION_ERROR_MESSAGE,
        'Error: you may reorder the request, error occuiped in array settings.' );
      $this->set_var( self::OPT_OPTION_UPDATE_MESSAGE, '' );
      return FALSE;
    }
    if ( $options != $newoptions ) {
      $options = $newoptions;
      $this->update_options( $options);
      update_option( $this->option_key, $options );
      $this->set('', $options);
      return true;
    } else {
      return false;
    }
  }
  
  /**
   * 
   */
  private function schedule_cron() {
    foreach( $this->crontab as $sched => $entry ) {
      $event = "wpp_{$sched}_{$this->sanitized_name}_event";
      if ( $entry[0] === self::ATTR_THIS)  $entry[0]= $this;
        add_action( $event, $entry );
    }
  }

  /**
   *
   */
  private function shortcodes(){
    if( $this->has_shortcode ){
      if ( is_string( $this->get_var( self::OPT_SHORTCODE)) &&
        $this->get_var( self::OPT_SHORTCODE) != ''){
        add_shortcode( $this->get_var( self::OPT_SHORTCODE), array( $this, 'do_shortcode' ) );
      }
      if ( isset( $this->_methods[self::ATTR_SHORTCODER])){
        foreach ( $this->_methods[self::ATTR_SHORTCODER] as $tag => $method){
          if ( $method['name'] != 'do_shortcode')
            add_shortcode( $tag, array( $this, $method['name'] ) );
        }
      }
    }
  }

  /** actions **/
  	
  private function clear_cache() {
    //TODO

  }  
  
  /**
   * 
   */
  private function do_action( ) {
    //check_admin_referer( $this->sanitized_name );
    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ){
      $p = $_POST;
    } else {
      $p = $_GET;
    }
    $done = false;
    foreach( $this->form_add_actions as $name => $action ) {
      if(	$p["do"] == __( $name, $this->plg_tdomain ) ) {
        if( is_array( $action ) && $action[0] == self::ATTR_THIS ) $action[0] = &$this;
        call_user_func( $action, $this, $p );
        update_option( $this->option_key, $this->option_values);
        $done = true;
      }
    }
    
    if( !$done ) {
      foreach( $this->form_blocks as $name => $block){
        foreach ( $block as $sid => $type){
          $label = $this->option_field_labels[$sid];
          if ( $type === self::ATTR_SUBMIT && $p["do"] == __( $label, $this->plg_tdomain )){
            $action = $this->option_defaults[$sid];
            if( is_array( $action ) && $action[0] == self::ATTR_THIS ) $action[0] = &$this;
            call_user_func( $action, $this, $p );
            update_option( $this->option_key, $this->option_values);
            $done = true;
          }
        }
      }
    }
    
    if( !$done ) {
      if(			$p["do"] == __('Clear cache', $this->plg_tdomain) ) {
        $this->update_msg = 'Caches are cleared';
        $this->clear_cache();
      } elseif(	$p["do"] == __('Reset', $this->plg_tdomain) ) {
        $this->update_msg = 'Plugin settings are reset';
        $this->_reset_options();
      } elseif(	$p["do"] == __('Update', $this->plg_tdomain) ) {
        $this->update_msg = 'Plugin settings are updated';
        $this->_update_options( $this, $p );
      } else {
        //default action: update
        $this->update_msg = 'Plugin settings are updated';
        $this->_update_options( $this, $p );
      }
    }
  }

  /**
   *
   */
  private function admin_enqueue_scripts(){
    if ( $this->get_var( self::OPT_HAS_ENQUEUE_SCRIPTS)){
      $scripts = $this->get_var( self::OPT_ENQUEUE_SCRIPTS);
      foreach( $scripts[ self::ATTR_ADMIN_PAGE] as $script){
        if ( isset($script[self::ATTR_HOOK]))
          $handle = apply_filters($script[self::ATTR_HOOK],$script[self::ATTR_HANDLE]);
        else  $handle = $script[self::ATTR_HANDLE];
        if ( !$handle)
          continue;
        $myScriptUrl = ( array_key_exists( self::ATTR_SRC, $script)) ? $script[self::ATTR_SRC] : FALSE;
        $pos = strpos( $myScriptUrl, '.css');
        $deps = ( array_key_exists( self::ATTR_DEPS, $script)) ? $script[self::ATTR_DEPS]: array();
        $ver = ( array_key_exists( self::ATTR_VER, $script)) ? $script[self::ATTR_VER]: FALSE;
        $media = ( array_key_exists( self::ATTR_MEDIA, $script)) ? $script[self::ATTR_MEDIA]: 'all';
        $in_footer = ( array_key_exists( self::ATTR_IN_FOOTER, $script)) ? $script[self::ATTR_IN_FOOTER]: FALSE;

        if ( $pos !== FALSE && $pos+4 == strlen( $myScriptUrl)){
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
        }
        elseif (strpos( $myScriptUrl, '.js') !== FALSE){
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);
        }
        else{
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);

        }
      }
    }
  }
  
  /**
   *
   * @param string $file
   */
  protected function _initialize( $file){

    $this->_Kohana_WPPlugin( $file);
    if ( $this->isActive()){
      parent::_initialize($file);
      $this->shortcodes();
    }
  }
  
  /**
   * 
   * Enter description here ...
   * @param string $sid
   * @param mixed $value
   */
  protected function set( $sid, $value){
    if ( $sid === '') $this->_attributes ['option_values']= $value;
    if ( array_key_exists($sid, $this->_attributes['option_values']))
      $this->_attributes ['option_values'][$sid]= $value;
  }
  /**
   * 
   * Enter description here ...
   * @param string $path
   * @return boolean
   */
  protected function isOption( $path){
    return (bool)Arr::path( $this->_attributes, $path, FALSE);
  }

  /**
   * @return boolean Check is plugin or theme active or not
   */
  protected function isActive(){
    if ( $this->plugin_status !== self::ATTR_UNDEFINED)
      return ($this->plugin_status === self::ATTR_ACTIVE);
    $result = FALSE;
    $multi = FALSE;
    if ( is_multisite() ){
      $plugins = get_site_option( 'active_sitewide_plugins');
      if ( isset($plugins[$this->base_name]) )  $multi = TRUE;
    }
    if ( in_array( $this->base_name, (array) get_option( 'active_plugins', array() ) ) || $multi )
      $result = TRUE;
    if ( $result)  $this->plugin_status = self::ATTR_ACTIVE;
    else  $this->plugin_status = self::ATTR_NOTACTIVE;
    return $result;
  }
  /**
   * 
   * Enter description here ...
   * @param string $path
   * @return mixed
   */
  protected function path( $path){
    return Arr::path( $this->_attributes, $path, NULL);
  }
  /**
   * @todo Change defaults value options here
   */
  protected function activate(){}

  /**
   */
  protected function deactivate(){}

  /**
   * 
   * @param array $params
   */
  protected function update_options( &$params){}
  /*
   * @param View $template
   * @param string $sid
   */
  protected function block_options( View $template, $sid){}

  /**
   *
   * @param string $sid
   */
  public function get_option( $sid = NULL, $default = NULL){
    if ( is_null( $sid))  return $this->_attributes['option_values'];
    $return = isset($this->_attributes['option_values'])
      && is_array($this->_attributes['option_values'])
      && array_key_exists($sid, $this->_attributes['option_values'])
      ? $this->_attributes['option_values'][$sid] : $default;
    return $return;
  }

  /**
   * @param string $sid
   * @return mixed
   */
  public function get_var( $sid, $default = NULL){
    return ( array_key_exists( $sid, $this->_attributes)) ? $this->_attributes[$sid]: $default;
  }
  
  /**
   *
   * @return WPPlugin
   */
  public static function getInstance(){
    $instance = parent::getInstance();
    if ( $instance){
      $class = new ReflectionClass( $instance);
      $file = $class->getFileName();
      try{
        $instance->_initialize( $file);
      }
      catch ( Exception $e){
        self::$error = $e;
        return FALSE;
      }
    }
    return $instance;
  }

  /**
   * @param $sid string
   * @param $value mixed
   */
  public function set_var( $sid, $value){
    ( array_key_exists( $sid, $this->_attributes)) ? $this->_attributes[$sid] = $value: NULL;
  }
  
  /**
   * Insert plugin in [plugins] admin menu panel for should you can activate and deactivate him 
   * 
   */
  public function _register_plugin(){
    $current = get_plugins();

    if ( !isset( $current[ $this->base_name]) ){
      
      //Do not apply markup/translate as it'll be cached.
      $plugin_data = get_plugin_data( $this->plugin_file, false, false );
      
      if ( ! empty( $plugin_data['Name'])){
  
        $cache_plugins = array();
        $cache_plugins ['']= $current;
        $cache_plugins [''][$this->base_name]= $plugin_data;
        wp_cache_set('plugins', $cache_plugins, 'plugins');
      }
    }
  }

  /**
   *
   */
  function _activate() {
    
    $this->activate();
    $this->_add_options();

    if( $this->has_cron ) {
      foreach( $this->crontab as $sched => $entry ) {
        $event = "wpp_{$sched}_{$this->sanitized_name}_event";
        if( !wp_next_scheduled( $event) ) {
          wp_schedule_event( time(), $sched, $event);
        }
      }
    }

  }

  /**
   * 
   */
  function _deactivate(){
    $this->deactivate();
    $this->_delete_options();
    if( $this->has_cron ) {
      foreach( $this->crontab as $sched => $entry ) {
        $event = "wpp_{$sched}_{$this->sanitized_name}_event";
        wp_clear_scheduled_hook( $event);
      }
    }
  }
  
  /**
   * 
   */
  function action_admin_notices() {
    if( $this->has_activation_notice ){
      echo '<div class="updated"><p>';
      echo $this->activation_notice;
      echo '</p></div>';
    }
  }
  
  /**
   * 
   */
  function action_plugins_loaded () {
    if( $this->has_translation ){
      load_plugin_textdomain(
        $this->plg_tdomain,
        'wp-content/plugins/' . $this->lang_dir,
        $this->lang_dir
      );
      
      if( $this->has_option_page ) {
        load_plugin_textdomain(
  		$this->tpl_tdomain,
          'wp-content/plugins/' . $this->lang_dir,
          $this->lang_dir
        );
      }
      
      if( $this->has_widget ) {
        load_plugin_textdomain(
  		$this->wdg_tdomain,
          'wp-content/plugins/' . $this->lang_dir,
          $this->lang_dir
        );
      }
    }
  }
  /**
   * 
   */
  function action_widgets_init() {
    if( $this->has_widget )
      WPWidget::factory( $this);
  }
  /**
   * 
   * @param array $links
   * @param string $file
   */
  function filter_plugin_row_meta( $links, $file ) {
    if ( $file == $this->base_name ) {
      $links[] = '<a href="'
      . admin_url( 'options-general.php?page=' . $this->sanitized_name )
      . '">' . __('Settings') . '</a>';
      $links[] = '<a href="'
      . $this->support_url
      . '">' . __('Support') . '</a>';
    }
    return $links;
  }
  /**
   * 
   * Enter description here ...
   * @param array $links
   * @param string $file
   */
  function filter_plugin_action_links( $links ) {
      $settings_link = '<a href="'
      . admin_url( 'options-general.php?page=' . $this->sanitized_name )
      . '">' . __('Settings') . '</a>';
      array_unshift( $links, $settings_link ); // before other links
    
    return $links;
  }

  /**
   *
   */
  public function action_admin_init(){
    if( (isset($_GET['page']) && $_GET['page'] === $this->get_var( self::OPT_SANITIZED_NAME))
      && (( isset($_GET['do']) && $_GET['do'])
      || ( isset($_POST['do']) && $_POST['do'] )))
    {
      $this->do_action();
      $keys = array_keys( $this->option_field_labels);
      $array = array_diff( $keys, $this->option_static);
      foreach( $array as $sid){
        $callback = '';
        if ( isset($this->_methods[self::ATTR_VALIDATOR]) && array_key_exists( $sid, $this->_methods[self::ATTR_VALIDATOR]))
          $callback = array( $this, self::ATTR_VALIDATOR . $sid);
        register_setting( $this->sanitized_name, $sid, $callback);
      }
    }
    
  }

  /**
   * 
   */
  function action_admin_menu() {
    if ( $this->has_option_page){
      $page = add_options_page(
        __( $this->plugin_name, $this->plg_tdomain ),
        __( $this->plugin_name, $this->plg_tdomain ),
        'manage_options',
        $this->sanitized_name,
        array( $this, 'plugin_options' )
      );
      $this->set_var( self::OPT_ADMIN_OPTIONS_PAGE, $page);
      }
    
    if( $this->has_toplevel_menu ) {
      $page = add_menu_page(
      __( $this->plugin_name, $this->plg_tdomain ),
      __( $this->plugin_name, $this->plg_tdomain ),
      'manage_options',
      'tl_' . $this->sanitized_name,
      array( &$this, 'plugin_options' )
      //$icon_url,
      //$position
      );
      $this->set_var( self::OPT_ADMIN_MENU_PAGE, $page);
      }
  }
  
  /**
   * 
   */
  function plugin_options(){
    if ( !current_user_can( 'manage_options' ) )  {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }
    
    //if( ( isset($_GET['do']) && $_GET['do'])
    //|| ( isset($_POST['do']) && $_POST['do'] ))
    //  $this->do_action();
    $template = View::factory('wpoptionpage');
    
    foreach ( $this->_attributes as $key => $var)
      $template->bind( $key, $this->_attributes[$key]);

    $template ->bind('title', $title)
              ->bind('blocks', $blocks)
              ->bind('navmenu', $navmenu)
              ->bind('jstext', $jstext);
      
    $jstext = preg_replace( "/'/", "\\'", __( $this->jstext, $this->tpl_tdomain ) );
      
    if ( $this->option_page_title ) {
      $title = __( $this->option_page_title, $this->tpl_tdomain );
    } else {
      $title = __( $this->plugin_name, $this->tpl_tdomain );
    }
    
    $blocks = '';
    $navmenu = '';
    foreach ($this->form_blocks as $name => $fields){
      $sid = URL::title( $name);
      $filename = $this->dir_option_blocks . DIRECTORY_SEPARATOR 
        . URL::title($this->sanitized_name)
        . DIRECTORY_SEPARATOR . $sid;
      
      $template->set('blockname', $sid);
      $tb = __( $name, $this->plg_tdomain);
      $navmenu .= <<<EOM
      
      <li> <a href="#$sid">$tb</a></li>
      
EOM;
      $submits = array();
      $rows = '';
      foreach ( $fields as $key => $type){
        $prkey = self::OPT_OPTION_VAR_PREFIX . $key;
        $label = $this->option_field_labels[$key];
        $template->bind( $prkey, $this->_attributes['option_values'][$key]);
        if ( $type == self::ATTR_SUBMIT)  $submits []= __( $label, $this->tpl_tdomain);
        elseif ( !in_array($key, $this->option_static)){
          $rows .= <<<EOR
          
      <div class="form-field form-required">    
        <label for="$key"><strong><?php echo __('$label', \$tpl_tdomain)?></strong></label>
        <br/>
  	  	//todo name = "$key" value = "<?php echo \$$prkey?>"
	  </div>        
	  
EOR;
        }
        else{
          $rows .= <<<EOS
          
      <div class="form-field form-required">    
        <label for="$key"><strong><?php echo __('$label', \$tpl_tdomain)?></strong></label>
        <br/>
        //todo static field [$key=<?php echo \$$prkey?>]
	  </div>
	  
EOS;
        }
      }
      $template->bind( self::OPT_OPTION_VAR_PREFIX . 'submits', $submits);
      
    if ( Kohana::find_file('views', $filename) === FALSE){
        $file = new SplFileInfo( APPPATH . 
      		'views' . DIRECTORY_SEPARATOR . $filename . EXT);
        $date = date(" Y - m M - d D");
        $ext = EXT;
        $prsubmits = self::OPT_OPTION_VAR_PREFIX . 'submits';
        $code =<<<EOF
<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name $filename$ext
 *@packages Wordpress/Plugin/Blocks
 *@subpackage Option
 *@category Blocks
 *@author Andrew Scherbakov
 *@copyright created $date
 */?>
<div class="postbox" id="<?php echo \$blockname?>">
	<div class="inside">
	  $rows		
	</div>
<?php foreach( \$$prsubmits as \$submit):?>
<input type="submit" class="button block_<?php echo sanitize_title( \$blockname ) . ' ' . sanitize_title( \$submit )?>" value="<?php echo \$submit?>" name="do"
/>
<?php endforeach;?>
</div>
EOF;
        if ( !is_dir($file->getPath()))
            @mkdir($file->getPath(), 0777, true);
        $fs = $file->openFile('a');
        $fs->fwrite( $code);
        $fs->fflush();
      }
      $this->block_options( $template, $name);
      $blocks .= $template->render($filename);
    }
    $template->set_filename('wpoptionpage');
    echo $template; 
  }
  
  /**
   * 
   */
  function action_wp_print_styles() {
    
    if( $this->has_stylesheet ){
      $myStyleFile = $this->stylesheet_file;
      if ( file_exists( $myStyleFile ) ) {
        //wp_register_style( $this->sanitized_name . '_StyleSheets', $myStyleUrl );
        //wp_enqueue_style( $this->sanitized_name . '_StyleSheets' );
        include $myStyleFile;
      }
    }
  }

  /**
   *
   */
  function action_wp_enqueue_scripts(){
    if ( $this->get_var( self::OPT_HAS_ENQUEUE_SCRIPTS)){
      $scripts = $this->get_var( self::OPT_ENQUEUE_SCRIPTS);
      foreach( $scripts[ self::ATTR_THEME] as $script){
        if ( isset($script[self::ATTR_HOOK]))
          $handle = apply_filters($script[self::ATTR_HOOK],$script[self::ATTR_HANDLE]);
        else  $handle = $script[self::ATTR_HANDLE];
        if ( !$handle)
          continue;
        $myScriptUrl = ( array_key_exists( self::ATTR_SRC, $script)) ? $script[self::ATTR_SRC] : FALSE;
        $pos = strpos( $myScriptUrl, '.css');
        $deps = ( array_key_exists( self::ATTR_DEPS, $script)) ? $script[self::ATTR_DEPS]: array();
        $ver = ( array_key_exists( self::ATTR_VER, $script)) ? $script[self::ATTR_VER]: FALSE;
        $media = ( array_key_exists( self::ATTR_MEDIA, $script)) ? $script[self::ATTR_MEDIA]: 'all';
        $in_footer = ( array_key_exists( self::ATTR_IN_FOOTER, $script)) ? $script[self::ATTR_IN_FOOTER]: FALSE;

        if ( $pos !== FALSE && $pos+4 == strlen( $myScriptUrl)){
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
        }
        elseif (strpos( $myScriptUrl, '.js') !== FALSE){
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);
        }
        else{
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);

        }
      }
    }
  }

  /**
   *
   */
  function action_admin_enqueue_scripts(){
    if ( $this->get_var( self::OPT_HAS_ENQUEUE_SCRIPTS)){
      if ( $_GET['page'] === $this->get_var( self::OPT_SANITIZED_NAME) )
        $this->admin_enqueue_scripts();
      $scripts = $this->get_var( self::OPT_ENQUEUE_SCRIPTS);
      foreach( $scripts[ self::ATTR_ADMIN] as $script){
        if ( isset($script[self::ATTR_HOOK]) && !( $handle = apply_filters($script[self::ATTR_HOOK],$script[self::ATTR_HANDLE])))
          continue;
        $myScriptUrl = ( array_key_exists( self::ATTR_SRC, $script)) ? $script[self::ATTR_SRC] : FALSE;
        $pos = strpos( $myScriptUrl, '.css');
        $deps = ( array_key_exists( self::ATTR_DEPS, $script)) ? $script[self::ATTR_DEPS]: array();
        $ver = ( array_key_exists( self::ATTR_VER, $script)) ? $script[self::ATTR_VER]: FALSE;
        $media = ( array_key_exists( self::ATTR_MEDIA, $script)) ? $script[self::ATTR_MEDIA]: 'all';
        $in_footer = ( array_key_exists( self::ATTR_IN_FOOTER, $script)) ? $script[self::ATTR_IN_FOOTER]: FALSE;

        if ( $pos !== FALSE && $pos+4 == strlen( $myScriptUrl)){
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
        }
        elseif (strpos( $myScriptUrl, '.js') !== FALSE){
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);
        }
        else{
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);

        }
      }
    }
  }

  /**
   *
   */
  function action_login_enqueue_scripts(){
    if ( $this->get_var( self::OPT_HAS_ENQUEUE_SCRIPTS)){
      $scripts = $this->get_var( self::OPT_ENQUEUE_SCRIPTS);
      foreach( $scripts[ self::ATTR_LOGIN] as $script){
        if ( isset($script[self::ATTR_HOOK]))
          $handle = apply_filters($script[self::ATTR_HOOK],$script[self::ATTR_HANDLE]);
        else  $handle = $script[self::ATTR_HANDLE];
        if ( !$handle)
          continue;
        $myScriptUrl = ( array_key_exists( self::ATTR_SRC, $script)) ? $script[self::ATTR_SRC] : FALSE;
        $pos = strpos( $myScriptUrl, '.css');
        $deps = ( array_key_exists( self::ATTR_DEPS, $script)) ? $script[self::ATTR_DEPS]: array();
        $ver = ( array_key_exists( self::ATTR_VER, $script)) ? $script[self::ATTR_VER]: FALSE;
        $media = ( array_key_exists( self::ATTR_MEDIA, $script)) ? $script[self::ATTR_MEDIA]: 'all';
        $in_footer = ( array_key_exists( self::ATTR_IN_FOOTER, $script)) ? $script[self::ATTR_IN_FOOTER]: FALSE;

        if ( $pos !== FALSE && $pos+4 == strlen( $myScriptUrl)){
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
        }
        elseif (strpos( $myScriptUrl, '.js') !== FALSE){
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);
        }
        else{
          wp_register_style( $handle, $myScriptUrl, $deps, $ver, $media);
          wp_enqueue_style( $handle);
          wp_register_script( $handle, $myScriptUrl, $deps, $ver, $in_footer);
          wp_enqueue_script( $handle);

        }
      }
    }
  }

  /**
   * 
   */
  function action_wp_print_scripts() {
    
    if( $this->has_javascript ){
      $myScriptFile = $this->javascript_file;
      if ( file_exists( $myScriptFile ) ) {
        //wp_register_script( $this->sanitized_name . '_JavaScript', $myScriptUrl );
        //wp_enqueue_script( $this->sanitized_name . '_JavaScript' );
        
        include $myScriptFile;
      }
    }
  }
  /**
   * 
   */
  function action_wp_footer() {
    $options = get_option( $this->option_key );
    if( $options['disable_backlink'] ) echo "<!--\n";
    echo '<p style="text-align:center" class=""><small><a href="' .
    $this->support_url . '">' . $this->backlinkware_text . '</a></small></p>';
    if( $options['disable_backlink'] ) echo "\n-->";
  }
  /** prototype function: to be overloaded... **/
  function do_shortcode() {

  }
  
  /**
   * Display widget function
   * @param array $args
   * @param array $instance
   */
  public function display( $args, $instance ) {
  }
  
  /**
   * Setter attributes
   * @param string $key
   * @param mixed $var
   * @return mixed
   */
  function __set( $key , $var){
    return $this->_attributes  [$key]= $var;
  }
  
  /**
   * Getter atributes
   * @param string $key
   * @return mixed|NULL
   */
  function __get( $key){
    return ( array_key_exists($key, $this->_attributes)) ? $this->_attributes[$key]: NULL;
  }
}
