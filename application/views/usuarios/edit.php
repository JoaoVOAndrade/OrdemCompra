  <?php $this->load->view('layout/sidebar');  ?>

      <!-- Main Content -->
      <div id="content">

        <?php $this->load->view('layout/navbar');?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=base_url('Usuarios')?>">Usuários</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $titulo; ?></li>
          </ol>
        </nav>
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a title="Voltar" href="<?=base_url('Usuarios')?>" class ="btn btn-success btn-sm float-right"><i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <form method="POST" name="form_edit">
                <div class="form-group row">
                  <div class = "col-md-4">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Nome do usuário" value="<?= $usuario->first_name?>">
                    <?= form_error('first_name', '<small class="form-text text-danger">', '</small>')?>
                  </div>

                  <div class = "col-md-4">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Sobrenome do usuário" value="<?= $usuario->last_name?>">
                    <?= form_error('last_name', '<small class="form-text text-danger">', '</small>')?>
                  </div>

                  <div class = "col-md-4">
                    <label>E-mail</label>
                    <input type="email" class="form-control" name="email" placeholder="E-mail do usuário" value="<?= $usuario->email?>">
                    <?= form_error('email', '<small class="form-text text-danger">', '</small>')?>
                  </div>
                  
                </div>

                <div class="form-group row">

                  <div class = "col-md-4">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="username" placeholder="Usuário" value="<?= $usuario->username?>">
                    <?= form_error('username', '<small class="form-text text-danger">', '</small>')?>
                  </div>

                  <div class="col-md-4">
                    <label>Ativo</label>
                    <select class="form-control" name="active">
                      <option value="0" <?= ($usuario->active == 0) ? 'selected' : '' ?>>Não</option>
                      <option value="1" <?= ($usuario->active == 1) ? 'selected' : '' ?>>Sim</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label>Perfil</label>
                    <select class="form-control" name="perfil_usuario">
                      <option value="2" <?= ($perfil_usuario->id == 2) ? 'selected' : '' ?>>Vendedor</option>
                      <option value="1" <?= ($perfil_usuario->id == 1) ? 'selected' : '' ?>>Administrador</option>
                    </select>
                  </div>
                  
                </div>

                <div class="form-group row">

                  <div class = "col-md-6">
                    <label>Senha</label>
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                    <?= form_error('password', '<small class="form-text text-danger">', '</small>')?>
                  </div>

                  <div class = "col-md-6">
                    <label>Confirmar Senha</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirme a Senha">
                    <?= form_error('confirm_password', '<small class="form-text text-danger">', '</small>')?>
                  </div>

                  <input type="hidden" name="usuario_id" value="<?= $usuario->id?>">
                  
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
     