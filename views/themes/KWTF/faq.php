<?php
/*
Template Name: Faq
*/                   

echo $header;?>

        <div id="primary" class="layout-<?php echo $layout_page ?>">
            <div class="inner group">

                <!-- START CONTENT -->
            <?php echo $slogan; ?>
                <div id="content" class="group">

                <?php $core->breadcrumb(); ?>

                <?php echo $content;?>

                <?php echo $faq;?>
                </div>
                <!-- END CONTENT -->

              <!-- START SIDEBAR -->
              <?php echo $sidebar; ?>
              <!-- END SIDEBAR -->

              <!-- START EXTRA CONTENT -->
              <?php echo $extra_content; ?>
              <!-- END EXTRA CONTENT -->

            </div>
        </div>

<?php echo $footer;