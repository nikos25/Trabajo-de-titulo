
<?php $__env->startSection('contenido-principal'); ?>
    <div class="container">
        <div class="column">
          <div class="row" align = "center">
            <?php if(Auth::user()->rol_id == 1): ?>
            <a href="<?php echo e(route('crearEspecie')); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear especie</a>
            <a href="<?php echo e(route('crearFotografia')); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear fotografia</a>
            <?php endif; ?>
          </div>
        </div>
    </div>
    <br>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">N°</th>
            <th scope="col">Especie</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <?php $__currentLoopData = $especies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num=>$especies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <tr>
                <td><?php echo e($num + 1); ?></td>
                <td><?php echo e($especies->nom_especie); ?></td>
                <td>
                  <a href="<?php echo e(route('fotografia', $especies ->id)); ?>" class="btn btn-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i></a>
                  <?php if(Auth::user()->rol_id == 1): ?>
                    <a class="btn btn-info" href="<?php echo e(route('editEspecie', $especies ->id)); ?>" type="button"><i class="far fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger" form="delete_<?php echo e($especies -> id); ?>" onclick="return" confirm('¿Seguro quiere eliminar?')>
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    <form action="<?php echo e(route('borrarEspecie', $especies -> id)); ?>" id="delete_<?php echo e($especies -> id); ?>" method="POST" enctype="multipart/form-data" hidden>
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('DELETE'); ?>
                    </form>
                  <?php endif; ?>
                </td>
                </tr>
            </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/catalogo.blade.php ENDPATH**/ ?>