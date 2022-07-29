
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="<?php echo e(asset('images/Especie.png')); ?>">
            <form action="<?php echo e(route('crearEspecie')); ?>" class="col-12" method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Especie" name="Especie" maxlength="10">
                </div>
                <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <br>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/CrearEspecie.blade.php ENDPATH**/ ?>