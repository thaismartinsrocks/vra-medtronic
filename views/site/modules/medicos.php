<div class="container-fluid" id="doctors">

    <div class="top">
        <div class="image col-xs-offset-3 col-xs-9">
            <img src="<?php echo BASE_URL; ?>assets/images/home/home-1.jpg" alt="Medtronic" title="Medtronic">
        </div>
    </div>

    <div class="content col-xs-10 col-xs-offset-1">

        <h1>Encontre um médico</h1>
        <p>Maecenas ipsum velit, <strong>consectetuer eu</strong>, lobortis ut, dictum at, dui. In rutrum. Maecenas ipsum velit, <strong>consectetuer eu</strong>, dictum at, dui. In rutrum. </p>

        <form class="form-horizontal">
                <div class="inputs col-xs-10">
                    <div class="form-group">
                        <label for="state" class="control-label">Estado</label>
                        <select id="state" name="state">
                            <option value=""></option>
                            <option value="teste">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="clinic" class="control-label">Nome da Clínica</label>
                        <input type="text" class="form-control" id="clinic" name="clinic">
                    </div>
                    <div class="form-group">
                        <label for="doctor" class="control-label">Nome do Médico</label>
                        <input type="text" class="form-control" id="doctor" name="doctor">
                    </div>
                    <div class="form-group">
                        <label for="crm" class="control-label">CRM</label>
                        <input type="text" class="form-control" id="crm" name="crm">
                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label">Endereço</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="city" class="control-label">Cidade</label>
                        <select id="city" name="city">
                            <option value=""></option>
                            <option value="teste">1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label">Telefone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="site" class="control-label">Site</label>
                        <input type="text" class="form-control" id="site" name="site">
                    </div>
                </div>
                <div class="buttons col-xs-2">
                    <input type="submit" class="form-control btn btn-primary" value="Busca">
                </div>
        </form>
    </div>
</div>