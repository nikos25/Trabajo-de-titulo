
<?php $__env->startSection('contenido-principal'); ?>
<div class="row">
    <div class="col d-flex">
        <form action="" class="col-12 text-center" method="POST">
            <div class="card-title">
                <input type="text" placeholder="Comentario" name="comentario">
                <a href="#" class="btn btn-dark"><i class="fas fa-comment"></i> comentar</a>
            </div>
            <div class="card-title">
                <a class="btn btn-success" href="#"><i class="fas fa-thumbs-up"></i></a>
                <a class="btn btn-danger" href="#"><i class="fas fa-thumbs-down"></i></a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/comentarios.blade.php ENDPATH**/ ?>