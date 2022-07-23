
<?php $__env->startSection('contenido-principal'); ?>
    <div class="row">
        <div class="col d-flex">
            <?php $__currentLoopData = $fotografias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fotografias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card m-2 p-3 " style="width: 15rem ">
                    <img class="card-img-top" src="<?php echo e(Storage::url($fotografias->imagen)); ?>" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h3><?php echo e($fotografias->nombre); ?></h3>
                            <br>
                            <p class="card-text">
                                <?php echo e($fotografias->descripcion); ?>

                            </p>
                            <div class="row">
                                <div class="col">
                                    $<?php echo e($fotografias->valor); ?>

                                </div>
                                <div class="col">
                                    <?php if(Auth::user()->rol_id == 1): ?>
                                        <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i> Ver</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/fotografia.blade.php ENDPATH**/ ?>