<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 * @name kadapter.php
 * @packages Wordpress/Plugin
 * @subpackage Plugin
 * @category Plugin
 * @author Andrew Scherbakov
 * @version 1.0
 * @copyright
 *
 *
 */

abstract class Kohana_Kadapter extends WPPlugin
{
  /**
   *
   * @var string
   */
  const ATTR_KOHANA_QUERY_MARKER = 'kr';
  const ATTR_INSTALL             = 'install';
  const ATTR_NOTINSTALL          = 'notinstall';
  const ATTR_AFTER               = 'after';
  const ATTR_BEFORE              = 'before';
  const ATTR_REPLACE             = 'replace';
  const ATTR_NONE                = 'none';
  const OPT_DEACTIVATED_LOCK     = 'deactivated_lock';
  /**
   *
   * @var array
   */
  protected $_options = array(
    self::OPT_NAME                                           => 'Kadapter',
    self::OPT_PLUGIN_NAME                                    => 'Kadapter',
    self::OPT_SHORTCODE                                      => 'Kadapter',
    self::OPT_HAS_TOPLEVEL_MENU                              => FALSE,
    self::OPT_HAS_WIDGET                                     => TRUE,
    self::OPT_WIDGETS                                        => array(
      array(
        self::OPT_WIDGET_TDOMAIN                            => 'default',
        self::OPT_WIDGET_NAME                               => 'Kadapter',
        self::OPT_WIDGET_CLASS                              => 'Widget_WidgetKadapter',
        self::OPT_WIDGET_OPTIONS_LABELS                     => array(
          'title'                             => 'Title',
          'request'                           => 'Request'
        ),
      )
    ),
    self::OPT_OPTION_FORM_BLOCKS                             => array(
      'Kohana Options'                        => array(
        'kohana_front_loader'              => self::ATTR_TEXT,
        'kohana_base_url'                  => self::ATTR_TEXT,
        'kohana_application_path'          => self::ATTR_TEXT,
        'kohana_module_path'               => self::ATTR_TEXT,
        'kohana_system_path'               => self::ATTR_TEXT,
        'kohana_bootstrap_path'            => self::ATTR_TEXT,
        'kohana_ext'                       => self::ATTR_TEXT,
        'kohana_default_placement'         => self::ATTR_TEXT,
        'kohana_modules'                   => self::ATTR_TEXT,
        'kohana_default_controller'        => self::ATTR_TEXT,
        'kohana_default_action'            => self::ATTR_TEXT,
        'kohana_default_id'                => self::ATTR_TEXT,
        'kohana_system_path'               => self::ATTR_TEXT,
        'kohana_front_loader_in_nav'       => self::ATTR_BOOL,
        'kohana_process_all_uri'           => self::ATTR_BOOL
      ),
      'Page Routing'                          => array(
        'add_page_mapping'           => self::ATTR_SUBMIT,
        'delete_page_mapping'        => self::ATTR_SUBMIT
      ),
      'Plugins'                               => array(
        'register_plugin'          => self::ATTR_SUBMIT,
        'add_plugin'               => self::ATTR_SUBMIT,
        'delete_plugin'            => self::ATTR_SUBMIT
      )
    ),
    self::OPT_OPTION_FIELD_LABELS                            => array(
      'kohana_front_loader'                  => 'Your Kohana Front Loader is',
      'kohana_base_url'                      => 'Prefix Uris string for Kohana request',
      'kohana_default_placement'             => 'Default Placement',
      'kohana_process_all_uri'               => 'Process all URIs',
      'kohana_system_path'                   => 'Kohana System Path',
      'kohana_module_path'                   => 'Kohana Module Path',
      'kohana_application_path'              => 'Kohana Application Path',
      'kohana_bootstrap_path'                => 'Custom Bootstrap Path',
      'kohana_ext'                           => 'Kohana File Extension',
      'kohana_modules'                       => 'Kohana Modules',
      'kohana_default_controller'            => 'Kohana Default Controller',
      'kohana_default_action'                => 'Kohana Default Action',
      'kohana_default_id'                    => 'Kohana Default ID **',
      'kohana_front_loader_in_nav'           => 'Include Kohana Front Loader in Wordpress Navigation',
      'add_page_mapping'                     => 'Add Page Mapping',
      'delete_page_mapping'                  => 'Delete All Mapping',
      'register_plugin'                      => 'Register Plugin',
      'add_plugin'                           => 'Install All Plugin',
      'delete_plugin'                        => 'Uninstall All Plugin'
    ),
    self::OPT_OPTION_STATIC                                  => array('kohana_front_loader',
      'kohana_routes', 'kohana_system_path', 'kohana_module_path', 'kohana_application_path',
      'kohana_bootstrap_path', 'kohana_ext', 'kohana_modules', 'kohana_plugins'),
    self::OPT_OPTION_DEFAULTS                                => array(
      'kohana_front_loader'                  => TRUE,
      'kohana_base_url'                      => '/',
      'kohana_default_placement'             => self::ATTR_NONE,
      'kohana_process_all_uri'               => FALSE,
      'kohana_system_path'                   => '/kohana-for-wordpress/kohana/system/',
      'kohana_module_path'                   => '/kohana-for-wordpress/kohana/modules/',
      'kohana_application_path'              => '/kohana-for-wordpress/kohana/application/',
      'kohana_bootstrap_path'                => '/kohana-for-wordpress/kohana/application/bootstrap.php',
      'kohana_ext'                           => EXT,
      'kohana_modules'                       => '',
      'kohana_default_controller'            => '',
      'kohana_default_action'                => '',
      'kohana_default_id'                    => '',
      'kohana_front_loader_in_nav'           => 0,
      'add_page_mapping'                     => array(self::ATTR_THIS, 'add_page_mapping'),
      'delete_page_mapping'                  => array(self::ATTR_THIS, 'delete_page_mapping'),
      'register_plugin'                      => array(self::ATTR_THIS, 'register_kohana_plugin'),
      'add_plugin'                           => array(self::ATTR_THIS, 'add_plugin'),
      'delete_plugin'                        => array(self::ATTR_THIS, 'delete_plugin'),
      'kohana_plugins'                       => array(
        'WordpressTheme'                     => self::ATTR_NOTINSTALL,
        'WordpressCache'                     => self::ATTR_NOTINSTALL,
      ),
    ),
    self::OPT_OPTION_LOGO                                    => 'img/wpp-default-logo.png',
    self::OPT_OPTION_CONTACT_IMG                             => 'img/foto.jpg',
    self::OPT_OPTION_PAGE_TITLE                              => 'Kohana Control Panel',
    self::OPT_OPTION_PAGE_TEXT                               => 'The Kohana Wordpress Adapter Module allows you to add pages and applications built with the Kohana PHP architecture to your Wordpress site. To learn more about Kohana see <a href="http://kohanaphp.com/">http://kohanaphp.com</a>',
    self::OPT_DEACTIVATED_LOCK                               => FALSE
  );

  /**
   *
   */
  static function getInstance()
  {
    return parent::getInstance();
  }

  /**
   *
   * @param string $name
   *
   * @return boolean
   */
  static function register($name)
  {
    $instance = Kadapter::getInstance();
    $result   = FALSE;
    if ($instance) {
      $result = $instance->_register($name);
    }
    return $result;
  }

  /**
   *
   * @param string $name
   *
   * @return boolean
   */
  private function _register($name)
  {
    $result  = FALSE;
    $plugins = $this->option_values['kohana_plugins'];
    if (is_null($plugins) || !array_key_exists($name, $plugins)) {
      try {
        $class  = new ReflectionClass($name);
        $method = new ReflectionMethod($name, 'getInstance');
        if ($class->isSubclassOf('WPPlugin') && $method->getDeclaringClass()->getName() == $class->getName()) {
          $plugins[$name] = self::ATTR_NOTINSTALL;
          $result         = TRUE;
          $this->set('kohana_plugins', $plugins);
        }
      }
      catch (Exception $e) {

      }
    }
    else $result = TRUE;

    return $result;
  }

  /**
   *
   * @param array $request
   *
   * @return int
   */
  private function validate_wp_request()
  {
    global $wpdb;
    global $wp;

    $wp->parse_request();
    $request = $wp->query_vars;
    // Check to see if we are requesting the wordpress homepage
    if ($this->is_wp_homepage('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'])) {
      // Check to see if the home page is a wordpress page or blog listings
      if (get_option('page_on_front')) {
        // return the ID of the page
        return get_option('page_on_front');
      }
    }
    //request contains a page id or a post id
    if ((isset($request['page_id']) && $request['page_id']) ||
      (isset($request['p']) && $request['p'])
    ) {
      return ($request['page_id']) ? $request['page_id'] : $request['p'];
    }
    // request contains a 'pagename' or 'name' (permalinks)
    if ((isset($request['pagename']) && $request['pagename']) ||
      (isset($request['name']) && $request['name'])
    ) {
      $name   = (isset($request['pagename']) && $request['pagename']) ? $request['pagename'] : $request['name'];
      $has_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$name'");
      return ($has_id) ? $has_id : 0;
    }

    // This could be a request for our front loader with a Kohana Controller URI appended
    $full_uri = $_SERVER['REQUEST_URI'];
    if (isset($full_uri[0]) && $full_uri[0] == '/')
      $wp_uri = substr($full_uri, 1);
    if ($wp->kohana->front_loader_slug == substr($wp_uri, 0, strlen($wp->kohana->front_loader_slug))) {
      return $this->option_values['kohana_front_loader'];
    }
    return 0;
  }

  /**
   * @return string
   */
  private function parse_request()
  {
    global $wp;

    $kr = '';
    parse_str($_SERVER['QUERY_STRING'], $params);
    if (isset($params[self::ATTR_KOHANA_QUERY_MARKER]) && $params[self::ATTR_KOHANA_QUERY_MARKER]) {
      $kr = $params[self::ATTR_KOHANA_QUERY_MARKER];
    } else {
      $kr = str_replace('?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']);
      if ($this->option_values['kohana_base_url'] != '/') {
        $kr = str_replace($this->option_values['kohana_base_url'], '', $kr);
      }
    }
    // Remove index.php from our string
    $kr = str_replace('/index.php', '', $kr);


    // Remove slash from front kr string
    if (substr($kr, 0, 1) == '/') {
      $kr = substr($kr, 1);
    }
    //error_log("Removed trailing slash Examining KR: $kr");
    // Remove slash from end of kr string
    if (substr($kr, -1) == '/') {
      $kr = substr($kr, 0, -1);
    }

    // check for presense of the kohana front loader slug
    if ($wp->kohana->front_loader_slug == substr($kr, 0, strlen($wp->kohana->front_loader_slug))) {
      $kr = substr($kr, strlen($wp->kohana->front_loader_slug . '/'));
    }

    return $kr;
  }

  /**
   * This function creates and executes a Kohana Request object.
   * If this request has a title defined this is added to the wp global object
   *
   * @param string $kr
   *
   * @return string  The response from the Kohana Request
   */
  private function page_request($kr)
  {
    global $wp;

    $response = Manager::execute($kr);

    if (isset($response->body()->title)) {
      $wp->kohana->title = $response->body()->title;
    }
    else $wp->kohana->title = '';
    return $response;
  }

  /**
   *
   * @param string $full_uri
   *
   * @return boolean
   */
  private function is_wp_homepage($full_uri)
  {
    // Check to see if the request ends in a trailing slash
    if (substr($full_uri, -1) == '/') {
      $full_uri = substr($full_uri, 0, -1);
    }
    return ($full_uri == get_option('home')) ? TRUE : FALSE;
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_WPPlugin::_initialize()
   */
  protected function _initialize($file)
  {
    parent::_initialize($file);
    $plugins = $this->option_values['kohana_plugins'];
    if ($plugins) {
      foreach ($plugins as $name => $plugin) {
        if ($plugin == self::ATTR_INSTALL) {
          try {
            $method = new ReflectionMethod($name, 'getInstance');
            $result = $method->invoke(NULL);
          }
          catch (Exception $e) {
          }
        }
      }
    }

  }

  /**
   *
   * @param Kadapter $plugin
   * @param unknown_type $params
   */
  protected function add_page_mapping(Kadapter $plugin, $params)
  {
    if ($params['kr'] && $params['postid']) {
      $kr        = $params['kr'];
      $pid       = $params['postid'];
      $placement = ($params['placement']) ? $params['placement'] : self::ATTR_NONE;

      $routes = $this->option_values['kohana_routes'];

      if (isset($routes[$pid])) {
        $routes[$pid]['kr']        = $kr;
        $routes[$pid]['placement'] = $placement;
      } else {
        $routes[$pid]['kr']        = $kr;
        $routes[$pid]['placement'] = $placement;
        global $wp_rewrite;
        $rewrite = $wp_rewrite->wp_rewrite_rules();
        $wp_rewrite->add_rule($kr . "([^?]*)/?",
          'index.php?page_id=' . $pid . '&' . self::ATTR_KOHANA_QUERY_MARKER . '=$matches[1]', 'top');
        foreach ($rewrite as $regex => $query) {
          $wp_rewrite->add_rule($regex, $query, 'top');
        }
        $wp_rewrite->flush_rules(FALSE);
      }
      $this->update_msg = 'Page Routes Updated.';
      $this->set('kohana_routes', $routes);
    }
  }

  /**
   *
   * @param Kadapter $plugin
   * @param array $params
   */
  protected function delete_page_mapping(Kadapter $plugin, $params)
  {
    global $wp_rewrite;
    $rewrite = $wp_rewrite->wp_rewrite_rules();
    $pid     = $params['route'];
    $routes  = $this->option_values['kohana_routes'];
    $kr      = $routes[$pid]['kr'];
    foreach ($rewrite as $regex => $query) {
      if ($regex != $kr . "([^?]*)/?")
        $wp_rewrite->add_rule($regex, $query, 'top');
    }
    $wp_rewrite->flush_rules(FALSE);
    unset($routes[$pid]);
    $this->update_msg = 'Page Routes Deleted.';
    $this->set('kohana_routes', $routes);
  }

  /**
   *
   * @param Kadapter $plugin
   * @param array $params
   */
  protected function register_kohana_plugin(Kadapter $plugin, $params)
  {
    $sid = $params['plugin_name'];
    if ($this->_register($sid)) {
      $this->update_msg = 'Plugins Registered Successfull.';
    }
    else  $this->error_msg = 'Plugins Register Failed.';
  }

  /**
   *
   * @param Kadapter $plugin
   * @param array $params
   */
  protected function add_plugin(Kadapter $plugin, $params)
  {
    $sid     = $params['plugin'];
    $plugins = $this->option_values['kohana_plugins'];
    if (!is_null($plugins) && array_key_exists($sid, $plugins)) {
      $plugins[$sid] = self::ATTR_INSTALL;
      $this->set('kohana_plugins', $plugins);
      $this->update_msg = 'Plugins Installed Successfull.';
    }
    else  $this->error_msg = 'Plugins Install Failed.';
  }

  /**
   *
   * @param Kadapter $plugin
   * @param array $params
   */
  protected function delete_plugin(Kadapter $plugin, $params)
  {
    $sid     = $params['plugin'];
    $plugins = $this->option_values['kohana_plugins'];
    if (!is_null($plugins) && array_key_exists($sid, $plugins)) {
      $plugins[$sid] = self::ATTR_NOTINSTALL;
      $this->set('kohana_plugins', $plugins);
      $this->update_msg = 'Plugins Uninstalled Successfull.';
    }
    else  $this->error_msg = 'Plugins Uninstall Failed.';
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_WPPlugin::activate()
   */
  protected function activate()
  {
    // Create a page in word press to act as the kohana frontloader
    $my_post                 = array();
    $my_post['post_title']   = 'Kohana';
    $my_post['post_content'] = '';
    $my_post['post_status']  = 'publish';
    $my_post['post_type']    = 'page';

    // Insert the post into the database
    $kohana_front_loader = wp_insert_post($my_post);

    $defaults                            = $this->option_defaults;
    $defaults['kohana_system_path']      = SYSPATH;
    $defaults['kohana_module_path']      = MODPATH;
    $defaults['kohana_application_path'] = APPPATH;
    $defaults['kohana_bootstrap_path']   = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'kohana-bootstrap.php';
    $defaults['kohana_front_loader']     = $kohana_front_loader;

    $modnames                   = array_keys(Kohana::modules());
    $defaults['kohana_modules'] = implode(',', $modnames);
    $this->option_defaults      = $defaults;
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_WPPlugin::deactivate()
   */
  protected function deactivate()
  {
    if (isset($this->option_values['kohana_front_loader']))
      wp_delete_post($this->option_values['kohana_front_loader']);
    add_filter('pre_update_option_active_plugins', array($this, '_deactivate_children'), 10, 2);
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_WPPlugin::block_options()
   */
  protected function block_options(View $template, $sid)
  {
    switch ($sid) {
      case 'Kohana Options':
        /**
         * Determine the Kohana Front Loader URL
         */
        $my_kohana_front = get_option('siteurl');
        global $wpdb;

        if (!get_option('permalink_structure')) {
          $my_kohana_front .= '/?page_id=' . $this->option_values['kohana_front_loader'];
        } else {
          $my_kohana_front .= '/' . $wpdb->get_var("SELECT post_name FROM $wpdb->posts WHERE ID = " . $this->option_values['kohana_front_loader']);
        }

        $template->my_kohana_front = $my_kohana_front;
        break;
      case 'Page Routing':
        $routes           = $this->option_values['kohana_routes'];
        $template->routes = $routes;

        $pages  = get_pages();
        $option = array();
        foreach ($pages as $pagg) {
          if ($pagg->ID === $this->option_values['kohana_front_loader']) continue;
          $option [] = array('value' => $pagg->ID,
                             'title' => $pagg->post_title);
        }
        $template->option_pages = $option;
        break;
      case 'Plugins':
        $plugins           = $this->option_values['kohana_plugins'];
        $template->plugins = $plugins;
        break;
    }
  }

  /**
   * Deactivation children plugin
   *
   * @param array $new_active_plugin
   * @param array $old_active_plugin
   */
  public function _deactivate_children($new_active_plugin, $old_active_plugin)
  {
    if ($this->deactivated_lock) return $old_active_plugin;
    $this->deactivated_lock = TRUE;
    $plugins                = $this->option_values['kohana_plugins'];
    if ($plugins) {
      foreach ($plugins as $name => $plugin) {
        if ($plugin == self::ATTR_INSTALL) {
          try {
            $method = new ReflectionMethod($name, 'getInstance');
            $result = $method->invoke(NULL);
            deactivate_plugins($result->base_name);
            $key = array_search(trim($result->base_name), $new_active_plugin);
            if (FALSE !== $key) {
              array_splice($new_active_plugin, $key, 1);
            }
          }
          catch (Exception $e) {
          }
        }
      }
    }
    $this->deactivated_lock = FALSE;
    return $new_active_plugin;
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::action_setup_theme()
   */
  function action_setup_theme()
  {

    global $wp;
    global $wpdb;

    // Get the wordpress page_name of our kohana front loader
    $wp->kohana->front_loader_slug = $wpdb->get_var("SELECT post_name FROM $wpdb->posts WHERE ID = " . $this->option_values['kohana_front_loader']);

    // attempt to validate the request by looking for a post or page id
    $requested_post_id = $this->validate_wp_request();

    // Look for Kohana Routing Option
    $routes = $this->option_values['kohana_routes'];

    if (isset($routes[$requested_post_id])) {
      $kohana_request = $this->parse_request();
      $arr            = $routes[$requested_post_id];
      if (strpos($kohana_request, $arr['kr']) === 0) {
        $wp->kohana->request   = $kohana_request;
        $wp->kohana->placement = $arr['placement'];
      }
      else {
        $wp->kohana->request   = $arr['kr'];
        $wp->kohana->placement = $arr['placement'];
      }
    }
    elseif ($requested_post_id == $this->option_values['kohana_front_loader']) {
      $kohana_request  = $this->parse_request();
      $default_request = '';
      $dc              = $this->option_values['kohana_default_controller'];
      $da              = $this->option_values['kohana_default_action'];
      $di              = $this->option_values['kohana_default_id'];
      if (!empty($dc)) $default_request .= $dc;
      if (!empty($da)) $default_request .= '/' . $da;
      if (!empty($di)) $default_request .= '/' . $di;
      if (!empty($default_request) && strpos($kohana_request, $default_request) !== 0)
        $kohana_request = $default_request;
      $wp->kohana->request   = $kohana_request;
      $wp->kohana->placement = $this->option_values['kohana_default_placement'];

      // Just because we found the front loader, wp may still think this is a 404
      // Force page_id into the request array.
      //$request = array();
      //$request['page_id'] = $this->option_values['kohana_front_loader'];
    }

    // If request is not for a valid word press page. Look for valid kohana request
    elseif (!$requested_post_id && $this->option_values['kohana_process_all_uri']) {
      // Parse query string and look for kohana type requests
      $kohana_request        = $this->parse_request();
      $wp->kohana->request   = $kohana_request;
      $wp->kohana->placement = $this->option_values['kohana_default_placement'];
    }

    if (isset($wp->kohana->request) && $wp->kohana->placement == self::ATTR_REPLACE) {
      echo $this->page_request($wp->kohana->request)
        ->send_headers()
        ->body();
      die('');
    }
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::filter_template_include()
   */
  function filter_template_include($template)
  {
    global $wp;

    if (isset($wp->kohana->request)) {
      try {
        $wp->kohana->content = $this->page_request($wp->kohana->request);
      }
      catch (Exception $e) {
        unset($wp->kohana->content);
        return $template;
      }
      if ($wp->kohana->placement == 'replace') {
        echo $wp->kohana->content
          ->send_headers()
          ->body();
        die('');
      }
    }
    return $template;

  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::filter_the_title()
   */
  function filter_the_title($title)
  {

    global $wp;
    global $post;
    if (!empty($wp->kohana->title) && $title == $post->post_title) {
      $title = $wp->kohana->title;
    }
    return $title;
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::filter_single_post_title()
   */
  function filter_single_post_title($title)
  {
    return $this->filter_the_title($title);
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::filter_get_pages()
   */
  function filter_get_pages($pages)
  {
    // if we are in the dashboard skip this filter
    if (is_admin()) return $pages;

    foreach ($pages as $i=> $page) {
      if ($page->ID == $this->option_values['kohana_front_loader'] && !$this->option_values['kohana_front_loader_in_nav']) {
        unset($pages[$i]);
      }
    }
    return $pages;
  }

  /**
   * (non-PHPdoc)
   *
   * @see Kohana_Base_WPPlugin::action_init()
   */
  public function action_init()
  {
    add_rewrite_tag('%' . self::ATTR_KOHANA_QUERY_MARKER . '%', '([^&]+)');
  }

  /**
   *
   * @param array $args
   * @param array $instance
   */
  public function widget_kadapter($args, $instance)
  {
    extract($instance);
    extract($args);
    $response = $this->page_request($request);
    return (string)$response;
  }

}