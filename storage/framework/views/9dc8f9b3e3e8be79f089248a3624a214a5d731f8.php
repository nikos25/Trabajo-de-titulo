
<?php $__env->startSection('contenido-principal'); ?>
<div class="container">
    <div class="row carrusel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/Fotografias/Loro.jpg" alt="First slide" >
                <div class="carousel-caption d-none d-md-block">
                    <h5>Especie</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/Fotografias/Coipo.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Especie</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/Fotografias/Picurio.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Especie</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\TT\Trabajo-de-titulo\resources\views/Fotos/catalogo.blade.php ENDPATH**/ ?>