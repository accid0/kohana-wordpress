<?php
/** SLIDERS
 -------------------------------------------------------------------- */


/**
 * vars for elegant slider
 */
if ( is_admin() )
return;
?>
<script type="text/javascript"> 
<?php
switch ($this->get_var( WordpressTheme::OPT_SLIDER_TYPE )):
  case WordpressTheme::ATTR_ELEGANT :
    $easing = ( $eas = $this->get_option( WordpressTheme::VAR_SLIDER_ELEGANT_EASING) ) ? "'$eas'" : 'null';
?>  
  var  yiw_slider_type = 'elegant',
       yiw_slider_elegant_easing = <?php echo $easing ?>,
       yiw_slider_elegant_fx = '<?php echo $this->get_option( WordpressTheme::VAR_SLIDER_ELEGANT_EFFECT) ?>',
       yiw_slider_elegant_speed = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_ELEGANT_SPEED) * 1000 ?>,
       yiw_slider_elegant_timeout = <?php echo $this->get_option(WordpressTheme::VAR_SLIDER_ELEGANT_TIMEOUT) * 1000 ?>,
       yiw_slider_elegant_caption_speed = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_ELEGANT_CAPTION_SPEED) * 1000 ?>;
<?php 
    break;
  case WordpressTheme::ATTR_THUMBNAILS:
?>
  var  yiw_slider_type = 'thumbnails',
       yiw_slider_thumbnails_fx = '<?php $this->slide_the('effect') ?>',
       yiw_slider_thumbnails_speed = <?php echo $this->slide_get('speed') * 1000 ?>, 
       yiw_slider_thumbnails_timeout = <?php echo $this->slide_get('timeout') * 1000 ?>,
       yiw_slider_thumbnails_width = <?php echo apply_filters( 'slider_thumbnails_width', 960 ); ?>,
       yiw_slider_thumbnails_height = <?php echo apply_filters( 'slider_thumbnails_height', 308 ); ?>;
<?php 
    break;
  case WordpressTheme::ATTR_NIVO :
?>
  var  yiw_slider_type = 'nivo',
       yiw_slider_nivo_timeout = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_NIVO_PAUSE, 4) ?>  * 1000,
       yiw_slider_nivo_animspeed = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_NIVO_SPEED, 0.5) ?> * 1000,
       yiw_slider_nivo_effect = '<?php echo $this->get_option( WordpressTheme::VAR_SLIDER_NIVO_EFFECT, WordpressTheme::ATTR_FADE) ?>';
<?php 
    break;
  case WordpressTheme::ATTR_CYCLE :
    $easing = ( $eas = $this->get_option( WordpressTheme::VAR_SLIDER_CYCLE_EASING) ) ? "'$eas'" : 'null';
?>
  var  yiw_slider_type = 'cycle',
       yiw_slider_cycle_easing = <?php echo $easing ?>,
       yiw_slider_cycle_fx = '<?php echo $this->get_option( WordpressTheme::VAR_SLIDER_CYCLE_EFFECT, WordpressTheme::ATTR_FADE) ?>',
       yiw_slider_cycle_speed = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_CYCLE_SPEED, 0.5) * 1000 ?>,
       yiw_slider_cycle_timeout = <?php echo $this->get_option( WordpressTheme::VAR_SLIDER_CYCLE_TIMEOUT, 5) * 1000 ?>;
<?php 
    break;
  case WordpressTheme::ATTR_UNOSLIDER :
    $next = __( 'Next', $this->plg_tdomain );
    $prev = __( 'Prev', $this->plg_tdomain );
    $play = __( 'Play', $this->plg_tdomain );
    $stop = __( 'Stop', $this->plg_tdomain );

    $responsive = $this->get_option( WordpressTheme::VAR_RESPONSIVE, 0);
    $use_preset = $this->slide_get('use_preset');
    $presets = $this->slide_get('preset');
    $interval = $this->slide_get('interval');

    if ( is_serialized( $presets ) )
      $presets = unserialize( $presets );
    else if ( ! is_array( $presets ) )
      $presets = explode( ',', $presets );

    $unoslider_animations = $this->get_var( WordpressTheme::OPT_UNOSLIDER_ANIMATIONS);

    if ( empty( $presets ) )
      $presets = json_encode( array_values( $unoslider_animations ) );
    elseif ( count($presets) == 1 )
      $presets = "'" . $presets[0] . "'";
    else
      $presets = json_encode($presets);

    $booleans = array( 'autohide_indicator', 'autohide_navigation', 'autostart', 'timebar', 'pause_on_mouseover', 'continuous', 'infinite_loop' );
    foreach ( $booleans as $id )
    ${$id} = $this->slide_get( $id ) ? 'true' : 'false';
?>
  var yiw_slider_type = 'unoslider',
      yiw_slider_unoslider_theme               = '<?php $this->slide_the('theme') ?>',
      yiw_slider_unoslider_responsive          = <?php echo $responsive ? 'true' : 'false' ?>, 
      yiw_slider_unoslider_width               = <?php $this->slide_the('width') ?>, 
      yiw_slider_unoslider_height              = <?php $this->slide_the('height') ?>, 
      yiw_slider_unoslider_indicator           = <?php echo ( ! $this->slide_get('indicator' ) ) ? 'false' : '{ autohide: ' . $autohide_indicator . ' }'  ?>, 
      yiw_slider_unoslider_navigation          = <?php echo ( ! $this->slide_get('navigation' ) ) ? 'false' : '{ autohide: ' . $autohide_navigation . ", prev: '$prev', next: '$next', play: '$play', stop: '$stop' }"  ?>, 
      yiw_slider_unoslider_slideshow           = <?php echo ( ! $this->slide_get('enable_slideshow' ) ) ? 'false' : '{ autostart: ' . $autostart . ', speed: ' . $interval . ', timer: ' . $timebar . ', hoverPause: ' . $pause_on_mouseover . ', continuous: ' . $continuous . ', infinite: ' . $infinite_loop . ' }'  ?>, 
      yiw_slider_unoslider_interval            = <?php $this->slide_the('interval') ?>,
      yiw_slider_unoslider_block               = { vertical: <?php $this->slide_the('vertical_blocks') ?>, horizontal: <?php $this->slide_the('horizontal_blocks') ?> }, 
      yiw_slider_unoslider_preset              = <?php if ( $use_preset ) echo $presets; else echo 'false' ?>, 
      yiw_slider_unoslider_animation           = { speed : <?php $this->slide_the('speed') ?>, delay : <?php $this->slide_the('delay_blocks') ?><?php if ( ! $use_preset ) : ?>, transition : '<?php $this->slide_the('transition') ?>', variation : '<?php $this->slide_the('variation') ?>', pattern : '<?php $this->slide_the('pattern') ?>', direction : '<?php $this->slide_the('direction') ?>'<?php endif; ?> };
<?php 
    break;
  case WordpressTheme::ATTR_ELASTIC :
?>
  var yiw_slider_type = 'elastic',
      yiw_slider_elastic_speed = <?php echo $this->slide_get('speed') * 1000 ?>,
      yiw_slider_elastic_timeout = <?php echo $this->slide_get('timeout') * 1000 ?>,
      yiw_slider_elastic_autoplay = <?php echo $this->slide_get('autoplay') ? 'true' : 'false' ?>,
      yiw_slider_elastic_animation = '<?php $this->slide_the('animation') ?>';
<?php endswitch;?>
  var yiw_prettyphoto_style = '<?php echo $this->get_option( WordpressTheme::VAR_PORTFOLIO_SKIN_LIGHTBOX) ?>';
<?php
$sec = $this->get_option( WordpressTheme::VAR_SHOP_PRODUCT_SLIDER_INTERVAL, 6);
if ( ! $this->get_option( WordpressTheme::VAR_SHOP_PRODUCT_SLIDER_AUTOPLAY) )
  $sec = 0;
?>     
  var yiw_product_slider_interval = <?php echo $sec; ?>;
</script>
