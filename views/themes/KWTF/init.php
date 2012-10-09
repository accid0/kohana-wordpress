    <script type="text/javascript">
    
    jQuery(document).ready(function(){
    	
    	<?php foreach($slides as $key => $val) : ?>
    	jQuery("#layerslider_<?php echo ($key+1) ?>").layerSlider({    		
   			autoStart			    : <?php echo $val['properties']['autostart']?>,
   			pauseOnHover		  : <?php echo $val['properties']['pauseonhover']?>,
			  firstLayer			  : <?php echo $val['properties']['firstlayer']?>,
			  twoWaySlideshow		: <?php echo $val['properties']['twowayslideshow']?>,
    		keybNav				    : <?php echo $val['properties']['keybnav']?>,
    		imgPreload			  : <?php echo $val['properties']['imgpreload']?>,
    		navPrevNext			  : <?php echo $val['properties']['navprevnext']?>,
    		navStartStop		  : <?php echo $val['properties']['navstartstop']?>,
    		navButtons			  : <?php echo $val['properties']['navbuttons']?>,
    		skin				      : '<?php echo $val['properties']['skin']?>',
    		skinsPath			    : '<?php echo $uri_slider?>/skins/'
    		<?php if($val['properties']['backgroundcolor']!='false' || $val['properties']['backgroundimage']!='false') : ?>,<?php endif; ?>
    		<?php if($val['properties']['backgroundcolor']!='false') : ?>
    		globalBGColor		: '<?php echo $val['properties']['backgroundcolor']?>'
 			<?php if($val['properties']['backgroundimage']!='false') : ?>,<?php endif; ?>
    		<?php endif; ?>
    		<?php if($val['properties']['backgroundimage']!='false') : ?>
    		globalBGImage		: '<?php echo $val['properties']['backgroundimage']?>'
    		<?php endif; ?>
    	});
    	<?php endforeach; ?>
    });
    
    </script>
    