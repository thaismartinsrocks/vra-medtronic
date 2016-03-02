<footer>
    <div class="bg-secondary col-xs-8 col-xxs-12">
        <p>RFG2&trade; - reg ANVISA: 10349000391, ClosureFast&trade; - reg ANVISA: 10349000418 e ClosureRFS&trade; - reg ANVISA: 10349000417</p>
    </div>
    <div class="bg-primary col-xs-4 col-xxs-12">
        <img src="<?php echo BASE_URL; ?>assets/images/logo-white.png" alt="Medtronic" title="Medtronic">
    </div>
    <div class="col-xs-12">
        <div class="col-xs-6 col-xxs-12">
            <nav class="menu">
                <ul>
                    <?php Menu::generateMenu(); ?>
                </ul>
            </nav>
        </div>
        <div class="col-xs-6 col-xxs-12">
            <div class="share">
                <p>Conecte-se</p>
                <a href="#"><i class="fa fa-facebook"></i> </a>
                <a href="#"><i class="fa fa-twitter"></i> </a>
            </div>
            <div class="newsletter">
                <p>Mantenha-se atualizado</p>
                <form class="form-inline" method="post">
                    <input name="newsletter"type="text" placeholder="entre seu email">
                    <button type="submit"><i class="fa fa-angle-right"></i></button>
                </form>

            </div>
        </div>
    </div>
</footer>