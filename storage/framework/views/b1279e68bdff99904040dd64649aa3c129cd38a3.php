<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Animalitos V Region</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/fotografias.css">

    <style>
        h1 { color: #D18E41; }
        p { color: #D18E41 }
      </style>
    
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('index')); ?>">Inicio</a>
                </li>
                
                <a class="nav-link dropdown-toggle" href="" role="button" id="btn-catalogo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catalogo
                  </a>
                
                  <ul class="dropdown-menu" aria-labelledby="btn-catalogo">
                    <a class="dropdown-item" href="<?php echo e(route('fotos')); ?>">Fotografias</a>
                    <a class="dropdown-item" href="#">Videos</a>
                  </ul>
                
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Chat</a>
                </li>
                
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Noticias</a>
                </li>
                
                <li class="nav-item active" href="">
                    <a class="nav-link" href="">Patrocinadores</a>
                </li>
            </ul>
            
            <ul class="navbar-nav">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Busqueda">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
                  
                <li class="nav-item active" href="">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>">iniciar sesion</a>
                </li>
                
                <li class="nav-item active" href="">
                    <a class="nav-link" href="<?php echo e(route('registro')); ?>">registrarse</a>
                </li>
            </ul>
        </div>
    </nav> 
    <div class="p-2">
        <?php echo $__env->yieldContent('contenido-principal'); ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\seba1\OneDrive\Escritorio\seba U\Trabajo de titulo\Animalitos V\Trabajo de titulo\resources\views/welcome.blade.php ENDPATH**/ ?>