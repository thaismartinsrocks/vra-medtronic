<div class="container-fluid">
  <div class="row-fluid">
      <div class="span12">
          <div class="row-fluid">
              <div class="widget container-narrow">
                  <div style="padding: 25px 0; margin: 0 auto;">
                      <img style="margin: 0 auto; width: 60%; display: block;" src="<?php echo BASE_PATH; ?>assets/images/logo.png" alt="Painel Administrativo" title="Painel Administrativo">
                  </div>
                  <div class="widget-header">
                      <i class="icon-user"></i>
                      <h5>Acesse sua conta</h5>
                  </div>
                  <div class="widget-body clearfix" style="padding:25px;">
                      <form method="post" id="loginForm">

                          <p class="alert alert-danger" id="loginError" style="display: none;">
                              <strong>ERRO:</strong> <span>fefefe</span>
                          </p>

                          <div class="control-group">
                              <div class="controls">
                                  <input class="btn-block " type="text" id="inputUser" placeholder="Usuário">
                              </div>
                          </div>

                          <div class="control-group">
                              <div class="controls">
                                  <input class="btn-block" type="password" id="inputPass" placeholder="Senha">
                              </div>
                          </div>

                          <button type="submit" class="btn pull-right">Entrar </button>
                      </form>
                  </div>
              </div>
          </div>
  </div>
</div>