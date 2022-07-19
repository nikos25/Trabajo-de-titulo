
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Patrocinador.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Nombre del patrocinador" name="Nombre">
                </div>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="rrss-group">
                    <input type="text" class="form-control" placeholder="Facebook" name="Facebook">
                </div>
                <div class="form-group" id="rrss-group">
                    <input type="text" class="form-control" placeholder="Instagram" name="Instagram">
                </div>
                <div class="form-group" id="email-group">
                    <input type="text" class="form-control" placeholder="Email" name="Email">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear patrocinador</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Patrocinadores/crearPatro.blade.php ENDPATH**/ ?>