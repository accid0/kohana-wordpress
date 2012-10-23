<?php echo $header; ?>

<div id="primary" class="layout-<?php echo $layout_page ?>">
    <div class="inner group">
        <!-- START CONTENT -->
        <div id="content" class="group">

            <?php $core->breadcrumb(); ?>

            <?php $content; ?>
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
