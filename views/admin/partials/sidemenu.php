<div class="sidebar-nav nav-collapse collapse">
    <div class="user_side clearfix">
        <img src="<?php echo BASE_PATH; ?>assets/images/admin/user-icon.png" alt="<?php echo Oauth::getUserName(); ?>" title="<?php echo Oauth::getUserName(); ?>">
        <h5><?php echo Oauth::getUserName(); ?></h5>
        <p><?php echo Oauth::getUserGroup(); ?></p>
    </div>
    <div class="accordion" id="accordion2">

        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle active b_F79999" href="<?php echo ADMIN_URL; ?>">
                    <i class="icon-home"></i> <span>Dashboard</span>
                </a>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle b_C3F7A7 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse1">
                    <i class="icon-user-md"></i> <span>Lista de Médicos</span>
                </a>
            </div>
            <div id="collapse1" class="accordion-body collapse">
                <div class="accordion-inner">
                    <a class="accordion-toggle" href="<?php echo ADMIN_URL; ?>medicos">
                        <i class="icon-user-md"></i> Médicos
                    </a>
                    <a class="accordion-toggle" href="<?php echo ADMIN_URL; ?>cidades">
                        <i class="icon-map-marker"></i> Cidades
                    </a>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle b_F6F1A2" href="<?php echo ADMIN_URL; ?>emails">
                    <i class="icon-envelope"></i> <span>Emails Cadastrados</span>
                </a>
            </div>
        </div>
    </div>
</div>