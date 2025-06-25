<div class="container mt-5" style="max-width: 800px; overflow: hidden;">
  <div class="card">
    <div class="card-header text-center">
      <h4>Registrarse</h4>
        </div>  
    <?php $validation = \config\Services::validation(); ?>

    <div class="card-body">
      <?php if(!empty (session()->getFlashdata('fail'))):?>
            <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
            <?php endif?>
              <?php if(!empty (session()->getFlashdata('success'))):?>
                <div class="alert alert-success"><?=session()->getFlashdata('success');?></div>
                <?php endif?>
      <form method="post" action="<?php echo base_url('/enviar-form')?>">
        <?=csrf_field();?>
          <?=csrf_field();?>
          

        <div class="mb-2 mt-1">
          <div class="form">
          <label for="nombre" class="form-label">Nombre</label>
          <input name="nombre" type="text" class="form-control" placeholder="Nombre">
          <!--Error-->
            <?php if($validation->getError('nombre')) {?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('nombre'); ?>
          </div>
            <?php }?>
          </div>
        </div>
      
        <div class="mb-2 mt-1">
          <label for="apellido" class="form-label">Apellido</label>
          <input name="apellido" type="text" class="form-control" placeholder="Apellido">
          <!--Error-->
            <?php if($validation->getError('apellido')) {?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('apellido'); ?>
          </div>
            <?php }?>
        </div>

        <div class="mb-2 mt-1">
         <label for="usuario" class="form-label">Usuario</label>
         <input type="text" class="form-control" name="usuario" placeholder="Usuario">
         <!--Error-->
            <?php if($validation->getError('usuario')) {?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('usuario'); ?>
          </div>
            <?php }?>
        </div>

        <div class="mb-2 mt-1">
          <label for="email" class="form-label">Correo</label>
          <input type="email" class="form-control" name="email" placeholder="Correo">
          <!--Error-->
            <?php if($validation->getError('email')) {?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('email'); ?>
          </div>
            <?php }?>
        </div>

        <div class="mb-3 mt-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="pass" placeholder="Contraseña (minimo 8 caracteres)">
          <!--Error-->
            <?php if($validation->getError('pass')) {?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('pass'); ?>
          </div>
            <?php }?>
        </div>

        <div class="mb-3 d-flex gap-2">
          <input type="submit" value="guardar" class="btn btn-success">
          <input type="reset" value="cancelar" class="btn btn-danger">
        </div>

      </form>
    
      </div>
    </div>
  </div>