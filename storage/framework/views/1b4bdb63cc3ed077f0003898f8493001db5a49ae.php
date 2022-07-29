
<?php $__env->startSection('contenido-principal'); ?>
<?php

?>
<div class="row">
    <div class="col d-flex">
        <form action="<?php echo e(route('comentarios.store', $idfoto)); ?>" class="col-12 text-center" method="POST">
            <?php echo csrf_field(); ?>
            <div class="card-title">
                <div class="row">
                    <div class="col">
                        <input type="text" placeholder="Comentario" name="comentario" style="height: 3cm">
                        <div class="form-group" style="padding: 3px">
                            <select class="" name="clasificacion">
                                <option selected>10</option>
                                <option>9</option>
                                <option>8</option>
                                <option>7</option>
                                <option>6</option>
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 forgot">
                    <?php if($errors->any()): ?>
                    <div class="col-12 alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-comment"></i>  Comentar</button>
            </div>
            <div class="column div-noticia">
                <div class="row div-contenido">
                    <?php $__currentLoopData = $comentario->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row div-contenido">
                            <div class="col">
                                <p><?php echo e($comentario-> comentario); ?></p>
                            </div>
                            <div class="col">
                                <p>Calificacion: <?php echo e($comentario-> clasificacion); ?>/10</p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </form>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/comentarios.blade.php ENDPATH**/ ?>