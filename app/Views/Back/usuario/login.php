<section class="container fondo container-principal">
    <div class="container mt-5">
      <h1>Login</h1>

      <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-warning">
          <?= session()->getFlashdata('msg')?>
        </div>
      <?php endif;?>

      <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
        
        <div class="mb-3">
          <label for="inputEmailLogin" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="inputEmailLogin" placeholder="Ingresa tu email" required autocomplete="email">
        </div>
        
        <div class="mb-3">
          <label for="inputPasswordLogin" class="form-label">Contraseña</label>
            <div class="input-group">
                <input name="pass" type="password" class="form-control" id="inputPasswordLogin" placeholder="Ingresa tu contraseña" required autocomplete="current-password">
                <button class="btn btn-outline-secondary" type="button" id="togglePasswordLogin">Mostrar</button>
            </div>
        </div>
        
        <input type="submit" value="Ingresar" class="btn btn-success">
        <a href="<?php echo base_url('login'); ?>" class="btn btn-danger">Cancelar</a>
        <br><span>¿Aún no se ha registrado? <a href="<?php echo base_url('/registro'); ?>">Registrarse aquí</a> </span>
        
        <!-- <button type="submit" class="btn btn-primary">Login</button> -->
      
    
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#togglePasswordLogin').on('click', function(){
        const passwordField = $('#inputPasswordLogin');
        const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);
        $(this).text($(this).text() === 'Mostrar' ? 'Ocultar' : 'Mostrar');
      });
    });
  </script>