@extends('welcome')
@section('contenido-principal')
<div class="row">
    <div class="col d-flex">
        <form action="" class="col-12 text-center" method="POST">
            <div class="card-title">
                <input type="text" placeholder="Comentario" name="comentario">
                <a href="#" class="btn btn-dark"><i class="fas fa-comment"></i> comentar</a>
            </div>
            <div class="card-title">
                <a class="btn btn-success" href="#"><i class="fas fa-thumbs-up"></i></a>
                <a class="btn btn-danger" href="#"><i class="fas fa-thumbs-down"></i></a>
            </div>
        </form>
    </div>
</div>
@endsection