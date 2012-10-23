<!-- START SLIDER -->
<div id="slider" class="minilayers-slider group inner mobile">      
    <div class="slider-images">
        <?php echo $slider_body; ?>
    </div>
    <div class="slider-minilayers-static">
        <h3>
        <?php echo $static_title; ?>
        </h3>
        <p><?php $core->slide_the( 'static_text' ); ?></p>
        <?php
        if( !empty( $short_text ) ) {
            echo '<p class="short-text">', $short_text, '</p>';
        }
        ?>
    </div>
</div>
<!-- END SLIDER -->