<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 *@name kohana/WPWidget.php
 *@packages Wordpress/Widget
 *@subpackage Widget
 *@category Widget
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright
 *
 *
 */
class Kohana_WPWidget extends WP_Widget {
  /**
   * 
   * Enter description here ...
   * @var WPPlugin
   */
  protected $_plugin = NULL;
  
  /**
   * 
   * @var array
   */
  protected $_meta = array();
  /**
   * 
   * Enter description here ...
   * @var WPPlugin
   */
  protected static $plugin = NULL;
  
  /**
   * 
   * Enter description here ...
   * @var array
   */
  protected static $meta = array();

  /**
   * 
   * @param WPPlugin $plugin
   */
  public static function factory( $plugin){
    self::$plugin = $plugin;
    foreach ( $plugin->get_var(WPPlugin::OPT_WIDGETS) as $widget){
      self::$meta = $widget;
      register_widget( $widget[ WPPlugin::OPT_WIDGET_CLASS]);
    }
  }
  /** constructor */
  function __construct( $id_base = FALSE, $widget_options = array(), $control_options = array() ) {
    $this->_plugin = self::$plugin;
    $this->_meta = self::$meta;
    parent::__construct( $id_base, __( $this->_meta[ WPPlugin::OPT_WIDGET_NAME], $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ), $widget_options, $control_options );
  }

  

  /** @see WP_Widget::widget */
  function widget( $args, $instance ) {
    extract( $instance);
    extract( $args );
    $title = isset( $title) ? $title : '';
    $title = apply_filters( 'widget_title', $title );
    ?>
    <?php echo $before_widget; ?>
    <?php if ( !empty($title) )
    echo $before_title . $title . $after_title; ?>
    <?php echo call_user_func( 
      array( $this->_plugin, 'widget_' .URL::title( $this->_meta[ WPPlugin::OPT_WIDGET_NAME], '_')),
      $args, $instance ) ?>
    <?php echo $after_widget; ?>
    <?php
  }

  /** @see WP_Widget::update */
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    foreach( $this->_meta[ WPPlugin::OPT_WIDGET_OPTIONS_LABELS] as $field => $label ) {
      if ( isset($new_instance[ $field ]))
        $instance[ $field ] = strip_tags( $new_instance[ $field ] );
    }
    return $instance;
  }

  /** @see WP_Widget::form */
  function form( $instance ) {
    
    $filename = $this->_plugin->widget_dir . DIRECTORY_SEPARATOR 
        . URL::title($this->_meta[ WPPlugin::OPT_WIDGET_NAME]);
    $rows = '';
    $meta = array();
    
    foreach( $this->_meta[ WPPlugin::OPT_WIDGET_OPTIONS_LABELS] as $field => $label ) {
      $value = isset( $instance[ $field ]) ? esc_attr( $instance[ $field ] ) : NULL;
      $label = __( $label, $this->_meta[ WPPlugin::OPT_WIDGET_TDOMAIN] ); //translation is applied here!
      $field_id = $this->get_field_id( $field );
      $name = $this->get_field_name( $field );
      $meta ['name_' . $field]= $name;
      $meta ['id_' . $field]= $field_id;
      $meta ['label_' . $field]= $label;
      $meta ['value_' . $field]= $value;
      
       
      $rows .= <<<EOL
      
      <p>
        <label for="<?php echo \$name_$field; ?>"><?php echo \$label_$field; ?> </label> 
        <input class="widefat" id="<?php echo \$id_$field; ?>" name="<?php echo \$name_$field; ?>" type="text" value="<?php echo \$value_$field; ?>" 
        />
      </p>  
  
EOL;
    }
    
    if ( Kohana::find_file('views', $filename) === FALSE){
      $file = new SplFileInfo( APPPATH . 'views' 
        . DIRECTORY_SEPARATOR . $filename . EXT);
      $date = date(" Y - m M - d D");
      $ext = EXT;
      $code =<<<EOF
<?php defined('SYSPATH') or die('No direct script access.');
/**
 *@name $filename$ext
 *@packages Wordpress/Widget/Form
 *@subpackage Widget
 *@category Widget
 *@author Andrew Scherbakov
 *@copyright created $date
 */?>
 
$rows

EOF;

      if ( !is_dir($file->getPath()))
        @mkdir($file->getPath(), 0777, true);
      $fs = $file->openFile('a');
      $fs->fwrite( $code);
      $fs->fflush();
    }
    
    $template = View::factory( $filename);
    foreach ( $meta as $sid => $value){
      $template->bind( $sid, $meta[$sid]);
    }
    echo $template;
  }
}