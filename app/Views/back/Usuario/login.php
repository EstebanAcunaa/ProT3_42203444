<div class="container mt-5" style="max-width: 800px;">
  <div class="card">
    <div class="card-header text-center">
      <h4>Iniciar sesión</h4>
    </div>
      <!--Mensaje Error-->
      <?php if(session()->getFlashdata('msg')):?>
          <div class="alert alert-warning">
            <?= session()->getFlashdata('msg')?>
          </div>
      <?php endif;?>

    <div class="card-body">
      <form method="post" action="<?php echo base_url('/enviarlogin')?>">
        <div class="mb-2 mt-1">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" name="email" placeholder="Correo">
        </div>

        <div class="mb-3 mt-2">
          <label for="pass" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="contraseña">
        </div>

        <div class="mb-3 d-flex gap-2">
          <input type="submit" value="Ingresar" class="btn btn-success">
          <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
        </div>

        <p class="mt-3 text-muted">
          ¿No esta registrado? <a href="<?php echo base_url('/registro');?>" class="text-primary">Registrese aquí</a>
        </p>
      </form>
    </div>
  </div>
</div>

