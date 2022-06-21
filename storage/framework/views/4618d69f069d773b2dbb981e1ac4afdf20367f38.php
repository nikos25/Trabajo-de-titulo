
<?php $__env->startSection('contenido-principal'); ?>
<div class="container">
    <div class="row" align = "center">
        <?php if(Auth::user()->rol_id == 1): ?>
        <a href="<?php echo e(route('crearNoticia')); ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear Noticia</a>
        <?php endif; ?>
    </div>
</div>
<br>
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Titulo</th>
        <th scope="col">Entrada</th>
      </tr>
    </thead>
    <?php $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $num=>$noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
            <td><?php echo e($num + 1); ?></td>
            <td><?php echo e($noticia->titulo); ?></td>
            <td><a href="#" class="btn btn-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i>  Ver</a></td>
            </tr>
        </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\Trabajo de titulo\Animalitos V\Trabajo-de-titulo\resources\views/Noticias/noticia.blade.php ENDPATH**/ ?>