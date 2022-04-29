
<?php $__env->startSection('contenido-principal'); ?>
<div class="container">
    <div class="row carrusel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Fotografias/Picurio.jpg" class="d-block w-100" alt="banner 1">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Especie</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/Fotografias/Coipo.jpg" class="d-block w-100" alt="banner 2">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Especie</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/Fotografias/Loro.jpg" class="d-block w-100" alt="banner 3">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Especie</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
    <div class="row">

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\seba U\Trabajo de titulo\Animalitos V\Trabajo de titulo\resources\views/Fotografias/fotografias.blade.php ENDPATH**/ ?>