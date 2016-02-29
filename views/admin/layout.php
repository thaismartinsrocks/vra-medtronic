<?php echo $head; ?>

<div id="wrap">
    <?php if(isset($header)) { ?>
        <?php echo $header; ?>
    <?php } ?>

    <?php if(isset($sidemenu)) { ?>
        <?php echo $sidemenu; ?>
    <?php } ?>

    <?php echo $content; ?>

    <?php if(isset($footer)) { ?>
        <?php echo $footer; ?>
    <?php } ?>
</div>

<?php echo $bottom; ?>