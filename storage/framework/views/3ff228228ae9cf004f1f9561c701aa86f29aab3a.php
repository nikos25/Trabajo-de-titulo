
<?php $__env->startSection('contenido-principal'); ?>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="images\usuario.png">
                </div>
                <form action="" class="col-12" method="POST" action="">
                    <?php echo csrf_field(); ?>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="nomUsuario">
                    </div>
                    <div class="form-group" id="rut-group">
                        <input type="text" class="form-control" placeholder="Rut" name="rut">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    </div>
                    <div class="form-group" id="email-group">
                        <input type="email" class="form-control" placeholder="Correo electronico" name="email">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
                </form>
                <div class="col-12 forgot">
                  
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\seba U\Trabajo de titulo\Animalitos V\Trabajo de titulo\resources\views/registro/registro.blade.php ENDPATH**/ ?>