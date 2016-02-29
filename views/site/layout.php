<?php echo $head; ?>
<?php echo $menuMobile; ?>
<div id="wrap">
    <?php if(isset($header)) { ?>
        <?php echo $header; ?>
    <?php } ?>

    <?php echo $content; ?>

    <?php if(isset($footer)) { ?>
        <?php echo $footer; ?>
    <?php } ?>
</div>
<?php echo $bottom; ?>