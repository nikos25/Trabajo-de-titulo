
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Noticia.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="noticia-group">
                    <input type="text" class="form-control" placeholder="titulo" name="titulo">
                </div>
                <div class="form-group div-descripcion">
                    <input type="text" class="form-control" placeholder="descripcion" name="descripcion" style="height: 3cm" maxlength="1000">
                </div>
                <br>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Noticias/crearNoticia.blade.php ENDPATH**/ ?>