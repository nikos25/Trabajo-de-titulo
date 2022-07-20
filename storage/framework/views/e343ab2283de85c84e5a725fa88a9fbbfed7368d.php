
<?php $__env->startSection('contenido-principal'); ?>
<div class="container">
    <div class="row" align = "center">
        <?php if(Auth::user()->rol_id == 1): ?>
        <a href="<?php echo e(route('crearPatrocinador')); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear Patrcinador</a>
        <?php endif; ?>
    </div>
</div>
<br>
<div class="container-fluid"></div>
  <div class="row">
    <div class="card-body d-flex flex-column">
      <?php $__currentLoopData = $patrocinadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num=>$patrocinadores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div  class="container">
        <div class="column div-noticia">
          <div class="row div-contenido">
            <h3><?php echo e($patrocinadores -> nombre); ?></h3>
          </div>
          <div class="row div-contenido">
            <h6><?php echo e($patrocinadores -> descripcion); ?></h6>
          </div>
          <div class="row div-contenido">
            <h6><?php echo e($patrocinadores -> facebook); ?></h6>
          </div>
          <div class="row div-contenido">
            <h6><?php echo e($patrocinadores -> instagram); ?></h6>
          </div>
          <div class="row div-contenido">
            <h6><?php echo e($patrocinadores -> email); ?></h6>
          </div>
        </div>
      </div>
      <br>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Patrocinadores/patrocinadores.blade.php ENDPATH**/ ?>