<?php defined('SYSPATH') or die('No direct script access.');
/**
 *
 *
 *@name option.php
 *@packages Wordpress/Plugin/Option
 *@subpackage Option
 *@category Option
 *@author Andrew Scherbakov
 *@version 1.0
 *@copyright created  2012 - 06 Jun - 07 Thu
 *
 *
 */
?>
<style>
#navmenu {
	padding: 0px;
}

#navmenu > ul {
	margin: 0px;
	padding: 4px 0px 4px 0px;
	list-style-type: none;
	list-style-image: none;
	border-bottom: solid thin #CCCCCC;
}

#navmenu > ul > li {
	margin: 0px;
	display: inline;
	border-top: solid thin #CCCCCC;
	border-left: solid thin #CCCCCC;
	border-right: solid thin #CCCCCC;
	padding: 5px 0px 5px 0px;
}

#navmenu > ul > li > a {
	text-decoration: none;
	margin: 0px;
	padding: 5px 10px 5px 10px;
	background: #EEEEEE;
}

#navmenu > ul > li > a:hover {
	background: #FFFFFF;
}

#navmenu > li a .active {
	text-decoration: none;
	margin: 0px;
	padding: 5px 10px 5px 10px;
	background: #6b6b6b;
}

div.postbox {
	position: relative;
}

table.widefat {
	clear: none;
}
<?php if ( !$donate_block && !$credit_block && !$support_block):?>
.has-right-sidebar #post-body-content {
  margin-right: 0px;
}
<?php endif?>
.form-wrap > div {
  display: none;
  position: relative;
  top: 0;
  left: 0;
}
label.iPhoneCheckLabelOn{
  width: 42px;
}
label.iPhoneCheckLabelOff{
  width: 59px;
}
</style>
<script type="text/javascript">
  <!--
  var optionsTab;
  function donatemsg( value ) {
    if( value ) { alert( '<?php echo $jstext ?>' ); }
  }
  (function($) {

      $.organicTabs = function(el, options) {

          var base = this;
          base.$el = $(el);
          base.$nav = base.$el.find(".navmenu");
          base.$listBox = base.$el.find(".form-wrap");



          base.redraw = function (){
            var base = this;
            base.$listBox.css({
              height: base.$currentBox.height()
            });
          };

          base.init = function() {
              base.listID = base.$nav.find("li > a:first").attr("href").substring(1);
              base.$currentBox = base.$listBox.children("#" + base.listID);
              base.options = $.extend({},$.organicTabs.defaultOptions, options);

              base.$nav.find("li > a:first").addClass("active");
              base.$currentBox.fadeIn(base.options.speed, function (){
                base.$listBox.animate({
                    height: base.$currentBox.height()
                 });
              });
              // Accessible hiding fix

              base.$nav.find("li > a").each( function() {
                $(this).click( function(){
                	var newList = $(this);
                  base.listID = newList.attr("href").substring(1);
                    var curHeight = base.$listBox.height();
                    var $newBox = base.$listBox.children("#" + base.listID);
                    
                    
                    base.$nav.find("li a").removeClass("active");
                    newList.addClass("active");

                    base.$currentBox.fadeOut(base.options.speed, function(){
                      base.$currentBox = $newBox;
                    	$newBox.fadeIn(base.options.speed, function(){
                			var newHeight = $newBox.height();
                			base.$listBox.animate({
                                height: newHeight
                             });
                        });
                    });
                	
                    
                	 
                    // Don't behave like a regular link
                    // Stop propegation and bubbling
                    return false;
                });
              });
          };
          base.init();
      };

      $.organicTabs.defaultOptions = {
          "speed": 300
      };
      
      $.fn.organicTabs = function(options) {
          return this.each(function() {
            optionsTab = (new $.organicTabs(this, options));
          });
      };
      
  })(jQuery);

  jQuery(document).ready(function(){
  	jQuery("#navmenu").organicTabs({
          "speed": 200
      });
    jQuery("form#kohana_form").submit( function () {
      jQuery(this).find("input").each(function(){

        if( (  jQuery(this).is(':checkbox')   && !jQuery(this).is(':checked') ) )
        {
          jQuery(this).attr('value',0).attr('checked','checked');
        }
      });

    } );
  });
  function delete_route(route){
      var del = jQuery('.delete-all-mapping');
    document.getElementById('route').value = route;
    del.trigger('click');
  }
  function install_plugin(plugin){
      var plg = jQuery('.install-all-plugin');
    document.getElementById('plugin').value = plugin;
    plg.trigger('click');
  }
  function uninstall_plugin(plugin){
      var plg = jQuery('.uninstall-all-plugin');
    document.getElementById('plugin').value = plugin;
    plg.trigger('click');
  }
  //-->
</script>
<div class="wrap">
  <div id="icon-edit-pages" class="icon32">
    <br>
  </div>
  <h2>
  <?php echo $title?>
  </h2>

  <?php if ( !empty($update_msg)):?>
  <div class="updated">
  <p>
    <?php echo __($update_msg, $plg_tdomain)?></p>
  </div>
  <?php endif;?>

  <?php if ( !empty($error_msg)):?>
  <div class="error">
  <p>
    <?php echo __( $error_msg, $plg_tdomain)?></p>
  </div>
  <?php endif;?>

  <div class="metabox-holder has-right-sidebar">
    <div class="inner-sidebar">
      <div class="meta-box-sortabless ui-sortable">

      <?php if ( $donate_block):?>
        <div class="postbox">
          <h3 class="hndle">
          <?php echo __( 'Considered donating?', $plg_tdomain )?>
          </h3>

          <div class="inside" style="text-align: center">
            <br /> <a href="<?php echo $support_url?>" target="_blank"
              title="Plugin FAQ"> <img
              src="<?php echo $plugin_url . $wpp_logo?>" alt="WPP logo" />
            </a> <br /> <small><?php echo __( 'Enjoy this plugin?', $plg_tdomain )?><br />
            <?php echo __( 'Help me improve it!', $plg_tdomain )?> </small><br />
            <form action="https://www.paypal.com/cgi-bin/webscr"
              method="post">
              <input type="hidden" name="cmd" value="_s-xclick" /> <input
                type="hidden" name="encrypted"
                value="-----BEGIN PKCS7----------END PKCS7-----" 
                /> <input type="image"
                src="https://www.paypal.com/<?php echo __( 'en_US', $plg_tdomain )?>/i/btn/btn_donateCC_LG.gif"
                name="submit"
                alt="PayPal - The safer, easier way to pay online!" /> <img
                alt="" border="0"
                src="https://www.paypal.com/<?php echo __( 'en_US', $plg_tdomain )?>/i/scr/pixel.gif"
                width="1" height="1" />
            </form>
            <small><strong><?php echo __( 'Thanks', $plg_tdomain )?> -
                Andrew.</strong> </small><br /> <br />
          </div>
        </div>
        <?php endif?>

        <?php if ( $credit_block):?>
        <div class="postbox">
          <h3 class="hndle">
          <?php echo __( 'Credits', $plg_tdomain )?>
          </h3>
          <div class="inside" style="padding: 10px ?&amp; gt;">
            v.
            <?php echo $version ?>
            <br /> <b><?php echo __( 'Funding', $plg_tdomain ) ?> </b>
            <ul>
              <li><?php echo __( 'Initial:', $plg_tdomain )?> <a
                href="<?php echo $initial_funding[1]?>"><?php echo $initial_funding[0]?>
              </a>
              </li>
              <?php if( !empty( $additional_funding) ): ?>
              <?php foreach( $additional_funding as $funding ):?>
              <li><?php echo __( 'Additional:', $plg_tdomain )?> <a
                href="<?php echo $funding[1]?>"><?php echo $funding[0]?>
              </a>
              </li>
              <?php endforeach?>
              <?php endif?>

            </ul>
            <?php if( !empty($translations) ):?>
            <b><?php echo __( 'Translations', $plg_tdomain )?> </b>
            <ul>
            <?php foreach( $translations as $translation ) :?>
              <li><?php echo __( $translation[0].':', $plg_tdomain )?><a
                href="<?php echo $translation[2]?>"><?php echo $translation[1]?>
              </a>
              </li>
              <?php endforeach?>

            </ul>
            <?php endif?>
            <?php echo __( 'If you want to contribute to a translation of this plugin, please drop me a line by ', $plg_tdomain )?>
            <a href="mailto:<?php echo $support_email?>"><?php echo __('e-mail', $plg_tdomain )?>
            </a>
            <?php echo __( 'or leave a comment on the ', $plg_tdomain )?>
            <a href="<?php echo $support_url?>"><?php echo __( 'plugin\'s page', $plg_tdomain )?>
            </a>
            <?php echo __( 'You will get credit for your translation in the plugin file and the documentation page, ', $plg_tdomain )?>
            <?php echo __( 'as well as a link on this page and on my developers\' blog.', $plg_tdomain )?>

          </div>
        </div>
        <?php endif?>

        <?php if ( $support_block):?>
        <div class="postbox">
          <h3 class="hndle">
          <?php echo __( 'Support',$plg_tdomain )?>
          </h3>
          <div class="inside" style="padding: 10px ?&amp; gt;">
            <b><?php echo __( 'Free support', $plg_tdomain )?> </b>
            <ul>
              <li><?php echo __( 'Support page:', $plg_tdomain )?> <a
                href="<?php echo $support_url?>"><?php echo __( 'here.', $plg_tdomain )?>
              </a> <?php echo __( '(use comments!)', $plg_tdomain )?></li>
            </ul>
            <p>
              <b><?php echo __( 'Professional consulting', $plg_tdomain )?>
              </b><br /> <a href="http://www.yann.com/en/about"> <img
                src="<?php echo $plugin_url . $option_contact_img?>"
                style="width: 80px; height: 80px; float: left; margin-right: 4px"
                alt="WPP" /> </a>
                <?php echo __( 'I am available as an experienced free-lance Wordpress plugin developer and web consultant. ', $plg_tdomain )?>
                <?php echo __( 'Please feel free to ')?>
              <a href="mailto:<?php echo $support_email?>"> <?php echo __('check with me</a> for any adaptation or specific implementation of this plugin. ', $plg_tdomain )?>
                <a href="<?php echo $support_profile?>"> <?php echo __( 'Or for any WP-related custom development or consulting work. Hourly rates available.', $plg_tdomain )?>
              </a>
            
            </p>
          </div>
        </div>
        <?php endif;?>

      </div>
    </div>

    <div class="has-sidebar sm-padded">
      <div id="post-body-content" class="has-sidebar-content">
        <div class="meta-box-sortabless">
          <p>
          <?php echo __( $option_page_text, $plg_tdomain )?>
          </p>
          <div id="navmenu" class="rm_opts">
            <ul class="navmenu">
            <?php echo $navmenu?>
            </ul>
            <form id="kohana_form" method="<?php echo $form_method ?>"
              style="display: inline;" action="">
              <?php settings_fields( $sanitized_name); ?>

              <div class="form-wrap">
              <?php echo $blocks?>
              </div>

              <p class="submit">

              <?php foreach ( $form_add_actions as $name => $action):?>
                <input class="submit" type="submit"
                  class="action <?php echo sanitize_title( $name ) . ' ' . $action[1]?>"
                  name="do"
                  value="<?php echo __( $name, $plg_tdomain )?>" />
                  <?php endforeach;?>
                <input type="submit" class="default" name="do"
                  value="<?php echo __('Update', $tpl_tdomain)?>" />
                <input type="hidden" name="page"
                  value="<?php echo $_GET["page"]?>" /> <input
                  type="hidden" name="time" value="<?php echo time()?>" />
                <input type="submit" class="reset" name="do"
                  value="<?php echo __('Reset', $plg_tdomain)?>" />
                  <?php if( $has_cache ):?>
                <input type="submit" name="do"
                  value="<?php echo __('Clear cache', $plg_tdomain)?>" /><br />
                  <?php endif;?>
              </p>
            </form>

          </div>
        </div>
      </div>
    </div>

    <?php  if ( $has_cron):?>
    <div class="crontab_status">
    <?php foreach( $crontab as $sched => $entry ) :
    $name = join( '->', $entry );
    if ( $entry[0] === 'THIS')  $entry[0] = $this;
    $event = "wpp_{$sched}_{$sanitized_name}_event";
    if( $next = wp_next_scheduled( $event ) ) :
     
    if( has_action( $event, FALSE ) ) :?>
      <p>
      <?php echo $name?>
        is hooked to:
        <?php echo $event?>
        <br />
        <?php echo $name?>
        is scheduled to run next at:
        <?php echo date( DATE_RSS, $next )?>
      </p>
      <?php else :?>
      <p>
        Crontab warning:
        <strong>(<?php echo $event?>::<?php echo $name?>)</strong>
        is currently not registered.
      </p>
      <?php global $wp_filter;?>
      <pre>
      <?php var_dump( $wp_filter );?>
          </pre>
          <?php endif;?>
          <?php else:?>
      <p>
        Crontab warning:
        <?php echo $name?>
        is currently not scheduled.
      </p>
      <?php endif;?>
      <?php endforeach;?>
    </div>
    <?php endif;?>
  </div>
</div>
