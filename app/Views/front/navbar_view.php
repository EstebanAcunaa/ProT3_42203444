<!--inicio de la barra-->
<?php 
  $session= session();
  $nombre= $session->get('nombre');
  $perfil =$session->get('perfil_id');
  ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <img src="<?php echo base_url('assets/img/logoempresa.jpg')?>" alt="marca" width="75" height="30" class="img-fluid" style="border: none;">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secundary active btnUser btn-sm">
      <a href="">ADMIN: <?php echo session('nombre');?></a>
      </div>
      <!-- NAVBAR PARA ADMIN que pueden comprar -->

      <a class="navbar-brand" href="#" ></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="registro">Registrarse</a>
          </li>
          <li>
            <a class="nav-link" href="Login">Login</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
          </li>
        </ul>
      </div>

      <?php elseif(session()->perfil_id == 2): ?>
  <div class="btn btn-info active btnUser btn-sm">
    <a href="#">CLIENTE: <?php echo session('nombre'); ?> </a>
  </div>
  <!-- NAVBAR PARA CLIENTES que pueden comprar -->

  <a class="navbar-brand" href="#"></a>
  <div class="collapse navbar-collapse" id="">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Reloj Mesa</a></li>
            <li><a class="dropdown-item" href="#">Reloj Pared</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
      </li>
    </ul>
  </div>
<?php else: ?>

    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="quiensomos">Quienes somos</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de nosotros</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Reloj Mesa</a></li>
            <li><a class="dropdown-item" href="#">Reloj Pared</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <?php endif;?>
    </div>
  </div>
</nav>