
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="images\usuario.png">
                    <div class="col-12 forgot">
                        <h5><?php echo e(Auth::user()->nombre_usuario); ?></h5>
                    </div>
                    <div class="col-12 forgot">
                        <h5><?php echo e(Auth::user()->Nombre); ?> <?php echo e(Auth::user()->Apellido); ?></h5>
                    </div>
                    <div class="col-12 forgot">
                        <h5><?php echo e(Auth::user()->Email); ?></h5>
                    </div>
                    <a href="<?php echo e(route('logout')); ?>">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Perfil/perfil.blade.php ENDPATH**/ ?>