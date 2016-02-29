<div class="container-fluid">
    <div class="main_container" id="dashboard_page">
        <div class="row-fluid"></div>
        <div class="row-fluid">
            <div class="widget widget-padding span12">
                <div class="widget-header">
                    <i class="icon-list-alt"></i>
                    <h5>Médicos</h5>
                </div>
                <form class="form-horizontal" method="post">
                <div class="widget-body">
                    <div class="widget-forms clearfix">

                            <div class="control-group">
                                <label class="control-label">Nome do Médico</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Nome do Médico" name="name" value="<?php echo $item->name; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">CRM</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="CRM" name="crm" value="<?php echo $item->crm; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Nome da Clínica</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Nome da Clínica" name="clinic" value="<?php echo $item->clinic; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Telefone</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Telefone" name="phone" value="<?php echo $item->phone; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Site</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Site" name="site" value="<?php echo $item->site; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Endereço</label>
                                <div class="controls">
                                    <input class="span7" type="text" placeholder="Endereço" name="address" value="<?php echo $item->address; ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Cidade/Estado</label>
                                <div class="controls">
                                    <select tabindex="1" data-placeholder="Selecione..." class="span7" name="city_id">
                                        <option value=""></option>
                                        <?php if($cities) { ?>
                                            <?php foreach($cities as $city) { ?>
                                                <option value="<?php echo $city->id; ?>"
                                                    <?php echo ($city->id == $item->city_id) ? 'selected' : '' ; ?>>
                                                    <?php echo City::getFullName($city->id); ?>
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