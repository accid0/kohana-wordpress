<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s"><?php _e( 'Search for', $tpl_tdomain ) ?>:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="<?php _e( 'Search', $tpl_tdomain ) ?>" />
        <input type="hidden" name="post_type" value="post" />
    </div>
</form>