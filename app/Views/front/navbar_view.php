<?php
$session = session();
$nombre = $session->get('nombre') ?? ''; // Usa una cadena vacía si el nombre no está disponible
$perfil = $session->get('perfil_id') ?? 0; // Usa 0 como valor predeterminado si el perfil no está disponible
?>


<nav class="navbar navbar-expand-lg bg-body-green">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
    <!--logo/marca de la empresa -->
    <img src="<?php echo base_url('assets/img/logo.png')?>" alt="marca" width="75" height="30" class="img-fluid"/>
    </a> 
  </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <?php if(session()->perfil_id == 1): ?>
      <div class="btn btn-secondary active btnUser btn-sm">
        <a href="">ADMIN: <?php echo session('nombre'); ?></a>
      </div>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Editar Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('acercade'); ?>">Editar Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Administrar Obras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/admin-Usuario'); ?>">Administrar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sessión</a>
        </li>
      </ul>
    </div>

    <?php elseif(session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?></a>
      </div>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('acercade'); ?>">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Obras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sessión</a>
        </li>
      </ul>
    </div>

    <?php else: ?>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('acercade'); ?>">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
        </li>
      </ul>
    </div>
    



      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <?php endif;?>
    </div>
  </div>
</nav>