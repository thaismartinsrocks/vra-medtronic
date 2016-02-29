<header class="col-xs-12 nospacing">

    <div class="menu-mobile visible-xxs">
        <ul>
            <li class="first"></li>
            <li class="center"></li>
            <li class="last"></li>
        </ul>
    </div>

    <div class="logo">
        <a href="<?php echo BASE_URL; ?>">
            <img src="<?php BASE_URL; ?>assets/images/logo.png" alt="Medtronic" title="Medtronic">
        </a>
    </div>

    <nav class="menu hidden-xxs">
        <ul>
            <?php Menu::generateMenu(); ?>
        </ul>
    </nav>
</header>