<div class="header-map hide-if-no-js">
        
            <div id="map-wrap"<?php if ( $opened == 'yes' ) : ?> class="opened"<?php endif ?>>
                <div id="map"><iframe 
                width="100%" 
                height="400" 
                frameborder="0" 
                scrolling="no" 
                marginheight="0" 
                marginwidth="0" 
                src="<?php echo $src; ?>&amp;output=embed">
            </iframe></div></div>
            
            <div id="map-text">
                <?php _e('Where we are? Find us in this great google map', $tpl_tdomain)?>
            </div>
            <a href="#" class="tab-label<?php if ( $opened == 'yes' ) : ?> opened<?php else : ?> closed<?php endif; ?>"><?php if ( $opened == 'yes' ) _e( 'Close', $tpl_tdomain ); else _e( 'Open', $tpl_tdomain ); ?></a>
            <a href="#" class="tab-label<?php if ( $opened == 'yes' ) : ?> opened<?php else : ?> closed<?php endif; ?>"><?php if ( $opened == 'yes' ) _e( 'Close', $tpl_tdomain ); else _e( 'Open', $tpl_tdomain ); ?></a>

        </div>   