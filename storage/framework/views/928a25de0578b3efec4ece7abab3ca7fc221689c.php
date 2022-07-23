
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="<?php echo e(Route('video.store')); ?>" class="col-12" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Link" name="Link">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/crearVideos.blade.php ENDPATH**/ ?>