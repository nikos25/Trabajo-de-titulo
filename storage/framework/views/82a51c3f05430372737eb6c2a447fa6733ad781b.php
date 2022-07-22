
<?php $__env->startSection('contenido-principal'); ?>
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                <?php echo csrf_field(); ?>
                <div class="form-group" id="image-group">
                    <input type="file" class="form-control" placeholder="Fotografia" name="Fotografia" accept="image/*">
                </div>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="valor-group">
                    <input type="text" class="form-control" placeholder="Valor" name="Valor">
                </div>
                <div class="form-group">
                    <label for="especie" placeholder="Especie"></label>
                    <select class="form-control">
                        <?php $__currentLoopData = $especies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $especies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($especies->id); ?>"><?php echo e($especies->nom_especie); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/crearFotografia.blade.php ENDPATH**/ ?>