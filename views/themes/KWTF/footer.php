                <div class="clear"></div>
                <?php
                    if( strpos($footer_type, "big") !== false )
                        get_footer('big');
                ?>
                
                <!-- START FOOTER -->
                <div id="copyright" class="group">
                    <div class="inner group">
                        <?php if( $footer_type == 'normal' || $footer_type == 'big-normal' ) : ?>
                        <div class="left">
                            <?php echo $copyright_text_left ?>
                        </div>
                        <div class="right">
                            <?php echo $copyright_text_right ?>
                        </div>
                        <?php elseif( $footer_type == 'centered' || $footer_type == 'big-centered' ) : ?>
                        <div class="center">
                            <?php echo $footer_text_centered ?>
                        </div>
                    <?php endif ?>
                    </div>
                </div>
                <!-- END FOOTER -->     
            </div>     
            <!-- END WRAPPER -->        
        </div>     
        <!-- END SHADOW WRAPPER -->     
    
    <?php wp_footer(); ?>   
    </body>
</html>