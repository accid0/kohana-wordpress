<?php 
/**
 * @package WordPress
 * @subpackage Sommerce
 * @since 1.0
 */
 
if ( $core->is_empty() )
    return;
?>
 
                <div id="slider" class="inner flash">
                	<div id="piecemaker"></div>
                </div>               
    
                <script type="text/javascript">
                    var flashvars = {};
                    flashvars.cssSource = "<?php echo $uri_theme ?>/css/piecemaker.css";
                    flashvars.xmlSource = "<?php echo $uri_theme ?>/piecemaker.php";

                    var flash_params = {};
                    flash_params.play = "true";
                    flash_params.menu = "false";
                    flash_params.scale = "showall";
                    flash_params.wmode = "transparent";
                    flash_params.allowfullscreen = "true";
                    flash_params.allowscriptaccess = "always";
                    flash_params.allownetworking = "all";

                    swfobject.embedSWF('<?php echo $uri_theme ?>/swf/piecemaker.swf', 'piecemaker', '960', '390', '10', null, flashvars, flash_params, null);

                </script>