<div class="container-fluid">
    <div class="main_container" id="dashboard_page">
        <div class="row-fluid"></div>
        <div class="row-fluid">
            <div class="widget widget-padding span12">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h5>Cidades</h5>
                </div>
                <form class="form-horizontal" method="post">
                    <div class="widget-body">
                        <div class="widget-forms clearfix">

                            <div class="control-group">
                                <label class="control-label">Nome da Cidade</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Nome da Cidade" name="name" value="<?php echo $item->name; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Cidade/Estado</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Selecione..." class="span7" name="state_id">
                                        <option value=""></option>
                                        <?php if($states) { ?>
                                            <?php foreach($states as $state) { ?>
                                                <option value="<?php echo $state->id; ?>"
                                                    <?php echo ($state->id == $item->state_id) ? 'selected' : '' ; ?>>
                                                    <?php echo $state->abbreviation; ?>
                                                </option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        </div>
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
