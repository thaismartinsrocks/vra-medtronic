<div class="container-fluid">
    <div class="main_container" id="dashboard_page">
        <div class="row-fluid"></div>
        <div class="row-fluid">
            <div class="widget widget-padding span12">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h5>Emails Cadastrados</h5>
                </div>
                <form class="form-horizontal" method="post">

                    <?php if(!$item->created_at) { ?>
                        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s', time()); ?>">
                    <?php } ?>

                    <div class="widget-body">
                        <div class="widget-forms clearfix">
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Email" name="email" value="<?php echo $item->email; ?>">
                                </div>
                            </div>
                        </div>

                        <?php if($item->created_at) { ?>
                            <div class="control-group">
                                <label class="control-label">Data de Cadastro</label>
                                <div class="controls">
                                    <input class="span7" name="created_at" disabled="" type="text" placeholder="<?php echo Text::getDateFormatted($item->created_at); ?>">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="widget-footer">
                        <input class="btn btn-success" type="submit" value="Salvar">
                        <a href="<?php echo $link; ?>" class="btn" type="submit">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>