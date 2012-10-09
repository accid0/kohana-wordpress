                    <?php if( $pagination) : echo $pagination; else : ?>
            
                        <div class="navigation group">
                            <div class="alignleft"><?php next_posts_link(__('Next &raquo;', $tpl_tdomain)) ?></div>
                            <div class="alignright"><?php previous_posts_link(__('&laquo; Back', $tpl_tdomain)) ?></div>
                        </div>
                    
                    <?php endif; ?>  