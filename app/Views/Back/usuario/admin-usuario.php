<section class="container fondo container-principal">
    <div class="container mt-5">
        <h1>Administrar Usuarios</h1>

        <?php $validation = \Config\Services::validation(); ?>
        
        <form method="post" action="<?php echo base_url('/buscar-usuario') ?>">
            <?=csrf_field();?>
            <div class="mb-3">
                <label for="inputIdUsuario" class="form-label">ID Usuario</label>
                <input type="number" class="form-control" id="inputIdUsuario" name="id_usuario" placeholder="Ingresa el ID del usuario" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <?php if (isset($usuario)): ?>
            <form method="post" action="<?php echo base_url('/actualizar-usuario/' . $usuario['id_usuario']) ?>">
                <?=csrf_field();?>
                <div class="mb-3">
                    <label for="inputNombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="inputNombre" name="nombre" value="<?= $usuario['nombre'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="inputApellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="inputApellido" name="apellido" value="<?= $usuario['apellido'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="inputUsuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="inputUsuario" name="usuario" value="<?= $usuario['usuario'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $usuario['email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="inputPerfilId" class="form-label">Perfil ID</label>
                    <input type="number" class="form-control" id="inputPerfilId" name="perfil_id" value="<?= $usuario['perfil_id'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="inputBaja" class="form-label">Baja</label>
                    <input type="text" class="form-control" id="inputBaja" name="baja" value="<?= $usuario['baja'] ?>" required>
                </div>
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" class="btn btn-danger" onclick="confirmDelete(<?= $usuario['id_usuario'] ?>)">Eliminar</button>
            </form>
        <?php endif; ?>
    </div>
</section>

<script>
    function confirmDelete(id) {
        if (confirm('¿Estás seguro de que quieres eliminar al usuario con ID: ' + id + '?')) {
            window.location.href = '<?php echo base_url('/eliminar-usuario/') ?>/' + id;
        }
    }
</script>
