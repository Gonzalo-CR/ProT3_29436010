<section class="container fondo container-principal">
    <div class="container mt-5">
        <h1>Registrarse</h1>

        <?php $validation = \Config\Services::validation(); ?>
        <form method="post" action="<?php echo base_url('/enviar-form') ?>" >
            <?=csrf_field();?>
            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('fail');?>
                </div>
            <?php endif?>
            <?php if (!empty(session()->getFlashdata('success'))): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success');?>
                </div>
            <?php endif?>

            <div class="mb-3">
                <label for="inputNombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputNombre" name="nombre" placeholder="Ingresa tu nombre" required autocomplete="nombre">
                <?php if(isset($validation) && $validation->hasError('nombre')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('nombre');?>
                    </div>
                <?php endif?>
            </div>
            <div class="mb-3">
                <label for="inputApellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="inputApellido" name="apellido" placeholder="Ingresa tu apellido" required autocomplete="apellido">
                <?php if(isset($validation) && $validation->hasError('apellido')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('apellido');?>
                    </div>
                <?php endif?>
            </div>
            <div class="mb-3">
                <label for="inputUsuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="inputUsuario" name="usuario" placeholder="Ingresa tu usuario" required autocomplete="usuario">
                <?php if(isset($validation) && $validation->hasError('usuario')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('usuario');?>
                    </div>
                <?php endif?>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Ingresa tu email" required autocomplete="email">
                <?php if(isset($validation) && $validation->hasError('email')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('email');?>
                    </div>
                <?php endif?>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="inputPassword" name="pass" placeholder="Ingresa tu contraseña" required autocomplete="new-password">
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword">Mostrar</button>
                </div>
                <?php if(isset($validation) && $validation->hasError('pass')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('pass');?>
                    </div>
                <?php endif?>
            </div>
            <div class="mb-3">
                <label for="inputConfirmPassword" class="form-label">Confirme Contraseña</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="inputConfirmPassword" name="confirm_password" placeholder="Vuelve a ingresar tu contraseña" required autocomplete="new-password">
                    <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">Mostrar</button>
                </div>
                <?php if(isset($validation) && $validation->hasError('confirm_password')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $error = $validation->getError('confirm_password');?>
                    </div>
                <?php endif?>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <input type="reset" value="Cancelar" class="btn btn-danger">
        </form>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#togglePassword').on('click', function(){
            const passwordField = $('#inputPassword');
            const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);
            $(this).text($(this).text() === 'Mostrar' ? 'Ocultar' : 'Mostrar');
        });

        $('#toggleConfirmPassword').on('click', function(){
            const confirmPasswordField = $('#inputConfirmPassword');
            const type = confirmPasswordField.attr('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.attr('type', type);
            $(this).text($(this).text() === 'Mostrar' ? 'Ocultar' : 'Mostrar');
        });
    });
</script>

<script>
    function validatePassword() {
        const password = document.getElementById('inputPassword').value;
        const confirmPassword = document.getElementById('inputConfirmPassword').value;

        if (password !== confirmPassword) {
            alert('Las contraseñas no coinciden. ¡Vuelve a intentarlo!');
            return false;
        }

        return true;
    }

    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', (event) => {
            if (!validatePassword()) {
                event.preventDefault();
            }
        });
    }
</script>
