<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 *@name wordpressCache.php
 *@packages Wordpress/Plugin
 *@subpackage Plugin
 *@category Plugin
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright 
 *
 *
 */

abstract class Kohana_WordpressCache extends WPPlugin {
  const ATTR_INVALIDATE_POST                                    = 'post';
  const ATTR_INVALIDATE_DISABLED                                = 'none';
  const ATTR_INVALIDATE_FULL                                    = 'all';
  const OPT_INVALIDATED                                         = 'invalidated';
  const OPT_INVALIDATED_POST_ID                                 = 'invalidated_post_id';
  const OPT_FOUND_TAGS                                          = 'found_tags';
  const OPT_CONTENT                                             = 'content';
  
  const VAR_PATH						                        = 'path';
  const VAR_CHARSET						                        = 'charset';
  const VAR_COMMENT                  						    = 'comment';
  const VAR_ARCHIVE						                        = 'archive';
  const VAR_TIMEOUT      						                = 'timeout';
  const VAR_FEED						                        = 'feed';
  const VAR_MOBILE                						        = 'mobile';
  const VAR_PLUGIN_MOBILE_PACK									= 'plugin_mobile_pack';
  const VAR_MOBILE_AGENTS        								= 'mobile_agents';
  const VAR_GZIP                    	                    	= 'gzip';
  const VAR_GZIP_ON_THE_FLY              	                    = 'gzip_on_the_fly';
  const VAR_STORE_COMPRESSED        		                    = 'store_compressed';
  const VAR_REDIRECTS                		                    = 'redirects';
  const VAR_NOTFOUND                		                    = 'notfound';
  const VAR_HOME                    		                    = 'home';
  const VAR_CACHE_QS                		                    = 'cache_qs';
  const VAR_STRIP_QS                		                    = 'strip_qs';
  const VAR_LASTMODIFIED            		                    = 'lastmodified';
  const VAR_BROWSERCACHE            		                    = 'browsercache';
  const VAR_NOCACHE                  		                    = 'nocache';
  const VAR_REJECT                  		                    = 'reject';
  const VAR_REJECT_AGENTS            		                    = 'reject_agents';
  const VAR_REJECT_COOKIES          		                    = 'reject_cookies';
  const VAR_CLEAN_INTERVAL          		                    = 'clean_interval';
  const VAR_EXPIRE_TYPE              		                    = 'expire_type';
  const VAR_COUNT                    		                    = 'count';
  const VAR_NOTRANSLATION            		                    = 'notranslation';	
  const VAR_HAS_CACHE_TAG                                       = 'has_cache_tag';
  const VAR_CACHE_TAG                                           = 'cache_tag';
  const VAR_KOHANA_VIEWS_PREFIX                                 = 'kohana_views_prefix';
  
  
  /**
   * @return WordpressCache
   */
  public static function getInstance(){
    return parent::getInstance();
  }
  
  /**
   * 
   * @var array
   */
  protected $_options = array(
        self::OPT_NAME 				                            => 'Kohana Cache',
		self::OPT_PLUGIN_NAME                                   => 'Kohana Cache',
		self::OPT_HAS_SHORTCODE			                        => FALSE,
		self::OPT_HAS_TOPLEVEL_MENU                             => FALSE,
		self::OPT_HAS_TRANSLATION                               => TRUE,
		self::OPT_TPL_TDOMAIN                                   => 'kohana-cache',
		self::OPT_HAS_CRON                                      => TRUE,
		self::OPT_CRONTAB                                       => array(
		                'hourly'								=> array( self::ATTR_THIS, '_clear_cache')
		),
		self::OPT_HAS_WIDGET                                    => TRUE,
		self::OPT_WIDGETS                                       => array(
		  array(
		    self::OPT_WIDGET_TDOMAIN		                        => 'kohana-cache',
		    self::OPT_WIDGET_CLASS		                          => 'Widget_WordpressCacheWidget',
		    self::OPT_WIDGET_NAME                               => 'Kohana Cache',
		    self::OPT_WIDGET_OPTIONS_LABELS                     => array(
						'title'                                         => 'Title'
		    )
		  ),
		),
		self::OPT_OPTION_FORM_BLOCKS                            => array(
						'Config'                                => array(
		                    self::VAR_COUNT						=> self::ATTR_TEXT,
		                	self::VAR_PATH						=> self::ATTR_TEXT,
		                    self::VAR_CHARSET				    => self::ATTR_TEXT,
		                    self::VAR_COMMENT				    => self::ATTR_BOOL,
		                    self::VAR_EXPIRE_TYPE				=> self::ATTR_TEXT,
		                    self::VAR_ARCHIVE				    => self::ATTR_BOOL,
		                    self::VAR_TIMEOUT					=> self::ATTR_TEXT,
		                    self::VAR_BROWSERCACHE				=> self::ATTR_BOOL,
		                    self::VAR_FEED						=> self::ATTR_BOOL,
			            ),
			            'Mobile'							    => array(
		                    self::VAR_MOBILE				    => self::ATTR_BOOL,
		                    self::VAR_PLUGIN_MOBILE_PACK		=> self::ATTR_BOOL,
		                    self::VAR_MOBILE_AGENTS		        => self::ATTR_BOOL,
			            ),
			            'Compress'								=> array(
		                    self::VAR_GZIP						=> self::ATTR_BOOL,
		                    self::VAR_GZIP_ON_THE_FLY		    => self::ATTR_BOOL,
		                    self::VAR_STORE_COMPRESSED			=> self::ATTR_BOOL,
			            ),
			            'Advanced'								=> array(
			                self::VAR_NOTRANSLATION				=> self::ATTR_BOOL,
		                    self::VAR_NOCACHE				    => self::ATTR_BOOL,
		                    self::VAR_REDIRECTS				    => self::ATTR_BOOL,
		                    self::VAR_NOTFOUND					=> self::ATTR_BOOL,
		                    self::VAR_HOME						=> self::ATTR_BOOL,
		                    self::VAR_CACHE_QS					=> self::ATTR_BOOL,
		                    self::VAR_STRIP_QS					=> self::ATTR_BOOL,
		                    self::VAR_LASTMODIFIED				=> self::ATTR_BOOL,
		                    self::VAR_CLEAN_INTERVAL		    => self::ATTR_TEXT
			            ),
			            'Filters'								=> array(
		                    self::VAR_REJECT				    => self::ATTR_BOOL,
		                    self::VAR_REJECT_AGENTS				=> self::ATTR_BOOL,
		                    self::VAR_REJECT_COOKIES		    => self::ATTR_BOOL
			            ),
			            'Tags'									=> array(
			                self::VAR_HAS_CACHE_TAG             => self::ATTR_BOOL,
			                self::VAR_CACHE_TAG                 => self::ATTR_TEXT,
			                self::VAR_KOHANA_VIEWS_PREFIX       => self::ATTR_TEXT,
			            )
		),
		self::OPT_OPTION_FIELD_LABELS                           => array(
		                	self::VAR_PATH						=> 'Path to Cache Files',
		                    self::VAR_CHARSET				    => 'Charser for Cache',
		                    self::VAR_COMMENT				    => 'Disable Cache for Commenters',
		                    self::VAR_ARCHIVE  			        => 'Invalidate home, archives, categories on single post invalidation',
		                    self::VAR_TIMEOUT				    => 'Cached Pages Timeout',
		                    self::VAR_FEED				        => 'Feeds Caching',
		                    self::VAR_MOBILE				    => 'Detect Mobile Devices',
		                    self::VAR_PLUGIN_MOBILE_PACK        => 'WordPress Mobile Pack',
		                    self::VAR_MOBILE_AGENTS             => 'Mobile Agent List',
		                    self::VAR_GZIP				        => 'Send Compressed Pages',
		                    self::VAR_GZIP_ON_THE_FLY		    => 'On-The-Fly Compression',
		                    self::VAR_STORE_COMPRESSED	        => 'Store Compressed Pages',
		                    self::VAR_REJECT	                => 'Redirect Caching',
		                    self::VAR_NOTFOUND		            => 'Page Not Found Caching (HTTP 404)',
		                    self::VAR_HOME					    => 'Home Caching',
		                    self::VAR_CACHE_QS		            => 'URL With Parameters',
		                    self::VAR_STRIP_QS		            => 'Strip Query String',
		                    self::VAR_LASTMODIFIED              => 'Disable Last-Modified Header',
		                    self::VAR_BROWSERCACHE		        => 'Allow Browser Caching',
		                    self::VAR_NOCACHE	                => 'Allow Browser to Bypass Cache',
		                    self::VAR_REJECT			        => 'URI to Reject',
		                    self::VAR_REJECT_AGENTS             => 'Agents to Reject',
		                    self::VAR_REJECT_COOKIES	        => 'Cookies Matching',
		                    self::VAR_CLEAN_INTERVAL            => 'Clean Interval',
		                    self::VAR_EXPIRE_TYPE				=> 'Cache Invalidation Mode',
		                    self::VAR_COUNT			            => 'Files in Cache (Valid and Expired)',
		                    self::VAR_NOTRANSLATION		        => 'Translation',
		                    self::VAR_HAS_CACHE_TAG             => 'Enabled Tag',
			                self::VAR_CACHE_TAG                 => 'Cache Tag',
			                self::VAR_KOHANA_VIEWS_PREFIX       => 'Prefix to Views Kohanas Files'
		),
		self::OPT_OPTION_STATIC                                 => array( 'clean_interval', 'count'),
		self::OPT_OPTION_DEFAULTS                               => array(
		                	self::VAR_PATH		                => 'cache/kohana/',
		                    self::VAR_CHARSET				    => 'UTF-8',
		                    self::VAR_COMMENT					=> TRUE,
		                    self::VAR_ARCHIVE				    => TRUE,
		                    self::VAR_TIMEOUT					=> 0,
		                    self::VAR_FEED				        => TRUE,
		                    self::VAR_MOBILE			        => FALSE,
		                    self::VAR_PLUGIN_MOBILE_PACK        => FALSE,
		                    self::VAR_MOBILE_AGENTS             => "elaine/3.0\niphone\nipod\npalm\neudoraweb\nblazer\navantgo\nwindows ce\ncellphone\nsmall\nmmef20\ndanger\nhiptop\nproxinet\nnewt\npalmos\nnetfront\nsharp-tq-gx10\nsonyericsson\nsymbianos\nup.browser\nup.link\nts21i-10\nmot-v\nportalmmm\ndocomo\nopera mini\npalm\nhandspring\nnokia\nkyocera\nsamsung\nmotorola\nmot\nsmartphone\nblackberry\nwap\nplaystation portable\nlg\nmmp\nopwv\nsymbian\nepoc",
		                    self::VAR_GZIP				        => TRUE,
		                    self::VAR_GZIP_ON_THE_FLY           => FALSE,
		                    self::VAR_STORE_COMPRESSED	        => TRUE,
		                    self::VAR_REDIRECTS	                => TRUE,
		                    self::VAR_NOTFOUND	                => TRUE,
		                    self::VAR_HOME		                => FALSE,
		                    self::VAR_CACHE_QS                  => FALSE,
		                    self::VAR_STRIP_QS		            => TRUE,
		                    self::VAR_LASTMODIFIED              => FALSE,
		                    self::VAR_BROWSERCACHE	            => TRUE,
		                    self::VAR_NOCACHE                   => FALSE,
		                    self::VAR_REJECT			        => FALSE,
		                    self::VAR_REJECT_AGENTS             => FALSE,
		                    self::VAR_REJECT_COOKIES            => FALSE,
		                    self::VAR_CLEAN_INTERVAL            => 60,
		                    self::VAR_EXPIRE_TYPE			    => self::ATTR_INVALIDATE_POST,
		                    self::VAR_NOTRANSLATION		        => FALSE,
		                    self::VAR_HAS_CACHE_TAG             => FALSE,
			                self::VAR_CACHE_TAG                 => 'kohana',
			                self::VAR_KOHANA_VIEWS_PREFIX       => 'cache/'
		),
		self::OPT_FORM_ADD_ACTIONS                              => array(
		                    'Clear'								=> array( self::ATTR_THIS, 'clear')
		),
		self::OPT_OPTION_PAGE_TITLE	                            => 'Kohana Cache Control Panel',
		self::OPT_OPTION_PAGE_TEXT	                            => 'Cache module for Kohana, allows you adds Kohana request into page.',
		self::OPT_INVALIDATED                                   => FALSE,
		self::OPT_INVALIDATED_POST_ID                           => NULL,
		self::OPT_FOUND_TAGS                                    => FALSE,
		self::OPT_CONTENT                                       => array()
  );
  
  /**
   * 
   * Enter description here ...
   * @param string $string
   * @return string
   */
  private function strToArray( $string){
    $buffer = '';
    $string = str_replace(' ', "\n", $string);
    $string = str_replace("\r", "\n", $string);
    $buffer .= 'array(';
    $array = explode("\n", $string);
    foreach ($array as $item)
    {
      $item = trim($item);
      if ($item == '') continue;
      $buffer .= "\"" . addslashes($item) . "\", ";
    }
    $buffer = rtrim($buffer, ',');
    $buffer .= ");";
    if ( $buffer == 'array();') $buffer = 'FALSE;';
    return $buffer;
  }
  
  /**
   * 
   * Enter description here ...
   * @param array $options
   * @return string
   */
  private function generate_config( $options){
    $reject = $this->strToArray( $options[self::VAR_REJECT]);
    $reject_agents = $this->strToArray( $options[self::VAR_REJECT_AGENTS]);
    $reject_cookies = $this->strToArray( $options[self::VAR_REJECT_COOKIES]);
    if (isset($options[self::VAR_MOBILE]) && $options[self::VAR_MOBILE])
    {
      $mobile_agents = '$hyper_cache_mobile_agents = ' . $this->strToArray( $options[self::VAR_MOBILE_AGENTS]);
    }
    else $mobile_agents = '';
    $plugin_dir = PLUGINDIR . DIRECTORY_SEPARATOR . $this->plugin_dir . DIRECTORY_SEPARATOR;
    $kohana_dir = WP_PLUGIN_DIR . '/kadapter/';
    $comment = ($options[self::VAR_COMMENT])? 'TRUE':'FALSE';
    $archive = ($options[self::VAR_ARCHIVE])? 'TRUE':'FALSE';
    $timeout = ($options[self::VAR_TIMEOUT] != 0)? $options[self::VAR_TIMEOUT]:2000000000;
    $redirects = ($options[self::VAR_REDIRECTS])? 'TRUE':'FALSE';
    $notfound = ($options[self::VAR_NOTFOUND])? 'TRUE':'FALSE';
    $mobile = ($options[self::VAR_MOBILE])? 'TRUE':'FALSE';
    $plugin_mobile_pack = ($options[self::VAR_PLUGIN_MOBILE_PACK])? 'TRUE':'FALSE';
    $feed = ($options[self::VAR_FEED])? 'TRUE':'FALSE';
    $cache_qs = ($options[self::VAR_CACHE_QS])? 'TRUE':'FALSE';
    $strip_qs = ($options[self::VAR_STRIP_QS])? 'TRUE':'FALSE';
    $home = ($options[self::VAR_HOME])? 'TRUE':'FALSE';
    $lastmodified = ($options[self::VAR_LASTMODIFIED])? 'TRUE':'FALSE';
    $browsercache = ($options[self::VAR_BROWSERCACHE])? 'TRUE':'FALSE';
    $nocache = ($options[self::VAR_NOCACHE])? 'TRUE':'FALSE';
    $gzip = ($options[self::VAR_GZIP])? 'TRUE':'FALSE';
    $gzip_on_the_fly = ($options[self::VAR_GZIP_ON_THE_FLY])? 'TRUE':'FALSE';
    $store_compressed = ($options[self::VAR_STORE_COMPRESSED])? 'TRUE':'FALSE';
    $has_tag = ($options[self::VAR_HAS_CACHE_TAG])? 'TRUE' :'FALSE';
    $tag = "'" . $options[self::VAR_CACHE_TAG] . "'";
    $path = $options[self::VAR_PATH];
    $charset = $options[self::VAR_CHARSET];
    $views_prefix = trim( $options[self::VAR_KOHANA_VIEWS_PREFIX], '\\/') . '/';
    $views_dir = APPPATH . 'views/' . $views_prefix;
    $ext = EXT;
    $code = <<<EOF
<?php
\$hyper_cache_path = '$path';
\$hyper_cache_charset = '$charset';
\$hyper_cache_comment = $comment;
\$hyper_cache_archive = $archive;
\$hyper_cache_timeout = $timeout;
\$hyper_cache_redirects = $redirects;
\$hyper_cache_notfound = $notfound;
\$hyper_cache_mobile = $mobile;
\$hyper_has_tag = $has_tag;
\$hyper_cache_tag = $tag;
\$hyper_kohana_ext = '$ext';
\$hyper_kohana_dir = '$kohana_dir';
\$hyper_kohana_views_prefix = '$views_prefix';
\$hyper_kohana_views_dir = '$views_dir';
\$hyper_cache_plugin_mobile_pack = $plugin_mobile_pack;
\$hyper_cache_feed = $feed;
\$hyper_cache_cache_qs = $cache_qs;
\$hyper_cache_strip_qs = $strip_qs;
\$hyper_cache_home = $home;
\$hyper_cache_lastmodified = $lastmodified;
\$hyper_cache_browsercache = $browsercache;
\$hyper_cache_nocache = $nocache;
\$hyper_cache_gzip = $gzip;
\$hyper_cache_gzip_on_the_fly = $gzip_on_the_fly;
\$hyper_cache_store_compressed = $store_compressed;
\$hyper_cache_reject = $reject
\$hyper_cache_reject_agents = $reject_agents
\$hyper_cache_reject_cookies = $reject_cookies
$mobile_agents
include( '{$plugin_dir}cache.php');
EOF;
    $file = new SplFileObject(ABSPATH . 'wp-content/advanced-cache.php', 'w');
    $file->fwrite( (string)$code);
    $file->fflush();
    
  }
  
  /**
   * @param string $msg
   * @todo logs cache operations
   */
  private function log( $msg){
    
  }
  
  /**
   * 
   * @param int $post_id
   */
  private function invalidate_post( $post_id){
    $this->log("invalidate_post(" . $post_id . ")> Called");

    if ($this->invalidated_post_id == $post_id)
    {
      $this->log("invalidate_post(" . $post_id . ")> Post was already invalidated");
      return;
    }

    $options = $this->option_values;

    if ($options[self::VAR_EXPIRE_TYPE] == self::ATTR_INVALIDATE_DISABLED)
    {
      $this->log("invalidate_post(" . $post_id . ")> Invalidation disabled");
      return;
    }

    if ($options[self::VAR_EXPIRE_TYPE] == self::ATTR_INVALIDATE_POST)
    {
      $post = get_post($post_id);

      $link = get_permalink($post_id);
      $this->log('Permalink to invalidate ' . $link);
      // Remove 'http://', and for wordpress 'pretty URLs' strip trailing slash (e.g. 'http://my-site.com/my-post/' -> 'my-site.com/my-post')
      // The latter ensures existing cache files are still used if a wordpress admin just adds/removes a trailing slash to/from the permalink format
      $link = substr($link, 7);
      $this->log('Corrected permalink to invalidate ' . $link);
      $file = md5($link);
      $this->log('File basename to invalidate ' . $file);

      $path = $options[self::VAR_PATH];
      $handle = @opendir($path);
      if ($handle)
      {
        while ($f = readdir($handle))
        {
          if (substr($f, 0, 32) == $file)
          {
            if (unlink($path . $f)) {
              $this->log('Deleted ' . $path . $f);
            }
            else {
              $this->log('Unable to delete ' . $path . $f);
            }
          }
        }
        closedir($handle);
      }

      $this->invalidated_post_id = $post_id;

      $this->log("invalidate_post(" . $post_id . ")> Post invalidated");

      if ($options[self::VAR_ARCHIVE])
      {

        $this->log("invalidate_post(" . $post_id . ")> Archive invalidation required");

        if (!@touch( $path . '_archives.dat'))
        {
          $this->log("invalidate_post(" . $post_id . ")> Unable to touch cache/_archives.dat");
        }
        else
        {
          $this->log("invalidate_post(" . $post_id . ")> Touched cache/_archives.dat");
        }
      }
      return;
    }

    if ($options[self::VAR_EXPIRE_TYPE] == self::ATTR_INVALIDATE_FULL)
    {
      $this->log("invalidate_post(" . $post_id . ")> Full invalidation");
      $this->action_switch_theme('');
      return;
    }
  }
  
  /**
   * @return int
   */
  private function count(){
    $count = 0;
    //if (!is_dir(ABSPATH . 'wp-content/hyper-cache')) return 0;
    if ($handle = @opendir( $this->option_values[self::VAR_PATH]))
    {
      while ($file = readdir($handle))
      {
        if ($file != '.' && $file != '..')
        {
          $count++;
        }
      }
      closedir($handle);
    }
    return $count;
  }

  /**
   * 
   */
  private function cache_write() {
    global $hc_file;
    $content = $this->content;
    $content['uri'] = $_SERVER['REQUEST_URI'];

    // Look if we need the compressed version
    if ( $this->option_values[self::VAR_STORE_COMPRESSED] 
      && isset($content['html']) && function_exists('gzencode')) {
      $content['gz'] = gzencode($content['html']);
      if ($content['gz']) unset($content['html']);
    }
    $file = fopen($hc_file, 'w');
    fwrite($file, serialize($content));
    fclose($file);
    $this->content = $content;
  }

  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::activate()
   */
  protected function activate(){
    $defaults = $this->option_defaults;
    $defaults[self::VAR_PATH] = WP_CONTENT_DIR . '/' . trim( $defaults[self::VAR_PATH], '/\\') . '/';     
	$this->option_defaults = $defaults;
	$this->generate_config( $defaults);
    wp_mkdir_p( $defaults[self::VAR_PATH]);
    wp_mkdir_p( APPPATH . 'views/' . trim( $defaults[self::VAR_KOHANA_VIEWS_PREFIX], '/\\') . '/');
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::deactivate()
   */
  protected function deactivate(){
    // burn the file without delete it so one can rewrite it
    $file = @unlink(ABSPATH . 'wp-content/advanced-cache.php');
  }

  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::block_options()
   */
  protected function block_options( View $template, $sid){
    switch ($sid){
      case 'Config':
        $count = $this->count();
        $template->count = $count;
    }
  }
  
  /**
   * 
   * @param WordpressCache $plugin
   * @param array $params
   */
  protected function clear( WordpressCache $plugin, $params){
    $path = $params[self::VAR_PATH];
    if ($path == NULL) return;
    $handle = @opendir($path);
    if ($handle)
    {
      while ($file = readdir($handle))
      {
        if ($file != '.' && $file != '..')
        {
          @unlink($path . $file);
        }
      }
      closedir($handle);
    }
    $this->update_msg = 'Cache are cleaned.';
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_WPPlugin::update_options()
   */
  protected function update_options( &$options){
    $this->clear( $this, $options);
    // When the cache does not expire
    if ( $options[self::VAR_EXPIRE_TYPE] == self::ATTR_INVALIDATE_DISABLED )
    {
      @unlink( $options[self::VAR_PATH] . '_global.dat');
      @unlink( $options[self::VAR_PATH] . '_archives.dat');
    }
    $this->generate_config( $options);
  }
  
  protected function _initialize($file){
    parent::_initialize($file);
    if ( !defined('WP_CACHE')){
      $this->error_msg = __('You must add to the file wp-config.php (at its beginning after the &lt;?php) the line of code: <code>define(\'WP_CACHE\', true);</code>.', $this->tpl_rdomain);
    }
    if ( $this->option_values[self::VAR_NOTRANSLATION])  $this->has_translation = FALSE;
    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1);
  }

  /**
   * 
   * Enter description here ...
   * @param array $matches
   * @return string
   */
  public function tag_replace( $matches){
    if ( $this->option_values[self::VAR_HAS_CACHE_TAG]){
      $this->found_tags = TRUE;
      return '<?php echo $' . $matches[1] . ' ?>';
    }
    else return '';
  }
  
  /**
   * 
   */
  public function _clear_cache(){

    // Latest global invalidation (may be false)
    $invalidation_time = @filemtime(WP_CONTENT_DIR . '/cache/kohana/_global.dat');

    $this->log('start cleaning');

    $options = $this->option_values;

    $timeout = $options[self::VAR_TIMEOUT]*60;
    if ($timeout == 0) return;

    $path = $options[self::VAR_PATH];
    $time = time();

    $handle = @opendir($path);
    if (!$handle) {
      $this->log('unable to open cache dir');
      return;
    }

    while ($file = readdir($handle)) {
      if ($file == '.' || $file == '..' || $file[0] == '_') continue;

      $this->log('checking ' . $file . ' for cleaning');
      $t = @filemtime($path . $file);
      $this->log('file time ' . $t);
      if ($time - $t > $timeout || ($invalidation_time && $t < $invalidation_time)) {
        @unlink($path . $file);
        $this->log('cleaned ' . $file);
      }
    }
    closedir($handle);

    $this->log('end cleaning');
  }

  /**
   * 
   * @param array $args
   * @param array $instance
   */
  public function widget_wordpresscachewidget( $args, $instance){
    
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_shutdown()
   */
  public function action_shutdown(){
    global $view_file, $view_template;

    $levels = ob_get_level();
    for ($i=0; $i<$levels; $i++){
      if ( $i == $levels-1)
      $cnt = ob_get_clean();
      else
      ob_end_flush();
    }

    $content = $this->content;

    if ( empty( $content)){
      echo $cnt;
      return ;
    }
    if ( isset( $content['html'])){
      $_cache_tag = $this->option_values[self::VAR_CACHE_TAG];
      $regex = "#
    	<!-- \s* <{$_cache_tag} \s++ var=(?: ' | \" )([a-zA-Z_0-9]*)(?: ' | \" ) \s* /> \s* -->
    	#xs";
      $content['html'] = preg_replace_callback( $regex, array( $this, 'tag_replace'), $content['html']);

      if ( $this->option_values[self::VAR_HAS_CACHE_TAG] && $this->found_tags){
        $file = fopen($view_file, 'w');
        fwrite( $file, $content['html']);
        fclose($file);

        $view = View::factory( $view_template);
        Manager::execute( Request::detect_uri(), $view);
        $content['html'] = (string)$view;
      }
      $this->content = $content;
    }
    $this->cache_write();

    $content = $this->content;


    if (($this->option_values[self::VAR_GZIP] && isset($content['gz']))
    || ($this->option_values[self::VAR_GZIP_ON_THE_FLY] && isset($content['html'])
    && function_exists('gzencode'))) {

      header('Content-Encoding: gzip');
      header('Vary: Accept-Encoding');
      if (!isset($content['gz'])) {
        $content['gz'] = gzencode($content['html']);
      }

      echo $content['gz'];
    }
    elseif ( isset( $content['html']))  echo $content['html'];
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_switch_theme()
   */
  public function action_switch_theme($theme_name){

    $this->log("action_switch_theme> Called");

    if ($this->invalidated)
    {
        $this->log("action_switch_theme> Cache already invalidated");
        return;
    }

    if (!@touch( $this->option_values[self::VAR_PATH] . '_global.dat'))
    {
        $this->log("action_switch_theme> Unable to touch cache/_global.dat");
    }
    else
    {
        $this->log("action_switch_theme> Touched cache/_global.dat");
    }
    @unlink( $this->option_values[self::VAR_PATH] . '_archives.dat');
    $this->invalidated = true;
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_edit_post()
   */
  public function action_edit_post( $postpage_id){
    $this->invalidate_post( $postpage_id);
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_publish_post()
   */
  public function action_publish_post( $post_id){
    $this->invalidate_post( $post_id);
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::action_delete_post()
   */
  public function action_delete_post( $postpage_id){
    $this->invalidate_post( $postpage_id);
  }
  
  /**
   * (non-PHPdoc)
   * @see Kohana_Base_WPPlugin::filter_redirect_canonical()
   */
  public function filter_redirect_canonical($redirect_url, $requested_url){
    global $hyper_redirect;

    $hyper_redirect = $redirect_url;
    return $redirect_url;
  }
}