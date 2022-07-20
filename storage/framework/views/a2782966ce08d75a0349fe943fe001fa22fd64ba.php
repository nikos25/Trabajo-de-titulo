
<?php $__env->startSection('contenido-principal'); ?>
<div class="container">
    <div class="column">
      <div class="row" align = "center">
        <?php if(Auth::user()->rol_id == 1): ?>
        <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear video</a>
        <?php endif; ?>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Catalogo/videos.blade.php ENDPATH**/ ?>