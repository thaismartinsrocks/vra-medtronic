
    <div class="container-fluid">

        <!-- Main window -->
        <div class="main_container" id="dashboard_page">

            <div class="row-fluid"></div>

            <div class="row-fluid">

                <div class="widget span6">
                    <div class="widget-header">
                        <i class="icon-envelope"></i>
                        <h5>Emails Cadastrados</h5>
                    </div>
                    <div class="widget-header-under">Os últimos emails cadastrados no site</div>
                    <div class="widget-body clearfix" style="min-height: 250px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Data de Cadastro</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($emails) { ?>
                                <?php foreach($emails as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td>
                                            <a href="<?php echo ADMIN_URL ?>emails/edit/<?php echo $item->id; ?>">
                                                <?php echo $item->email; ?>
                                            </a>
                                        </td>
                                        <td><?php echo Text::getDateFormatted($item->created_at); ?></td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="3" style="text-align: center; padding: 50px 0;"> Nenhum item cadastrado</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="widget-footer">
                        <a class="btn btn-success" href="<?php echo ADMIN_URL ?>emails/new">
                            <i class="icon-plus"></i> Adicionar Email
                        </a>
                        <a class="btn pull-right" href="<?php echo ADMIN_URL ?>emails/">
                            <i class="icon-list-ul"></i> Ver Todos
                        </a>
                    </div>
                </div>

                <div class="widget span6">
                    <div class="widget-header">
                        <i class="icon-user-md"></i>
                        <h5>Médicos</h5>
                    </div>
                    <div class="widget-header-under">Os últimos médicos adicionados na lista</div>
                    <div class="widget-body clearfix" style="min-height: 250px;">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome do Médico</th>
                                    <th>Nome da Clinica</th>
                                    <th>Cidade/Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if($doctors) { ?>
                                <?php foreach($doctors as $item) { ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td>
                                            <a href="<?php echo ADMIN_URL; ?>medicos/edit/<?php echo $item->id; ?>">
                                                <?php echo $item->name; ?>
                                            </a>
                                        </td>
                                        <td><?php echo $item->clinic; ?></td>
                                        <td>
                                            <?php echo City::getFullName($item->city_id); ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" style="text-align: center; padding: 50px 0;"> Nenhum item cadastrado</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="widget-footer">
                        <a class="btn btn-success" href="<?php echo ADMIN_URL ?>medicos/new">
                            <i class="icon-plus"></i> Adicionar Médico
                        </a>
                        <a class="btn pull-right" href="<?php echo ADMIN_URL ?>medicos/">
                            <i class="icon-list-ul"></i> Ver Todos
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Main window -->

    </div><!--/.fluid-container-->
</div><!-- wrap ends-->


<!-- example modal -->
<div id="example_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Support Ticket</h3>
    </div>
    <div class="modal-body">
        <p>Here you can view and manage this support ticket.</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>

<!-- example modal -->
<div id="example_modal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Example Modal</h3>
    </div>
    <div class="modal-body">
        <p>Here you can write more information about the object you clicked</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>



<!-- task_modal modal -->
<div id="task_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Task info example</h3>
    </div>
    <div class="modal-body">
        <div class="clearfix">
            <img src="assets/img/avatars/11.jpg" class="img-circle" style="float: left; width: 65px; margin-right: 20px;">
            <h3 style="margin:0">John</h3>
            <p class="muted">Marketing</p>
        </div>
        <hr>
        <h5>Task</h5>
        <p>Create a marketing plan for the new campaign</p>
        <h5>status&nbsp;&nbsp;<small>60%</small></h5>
        <div class="progress">
            <div class="bar" style="width: 60%;"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>