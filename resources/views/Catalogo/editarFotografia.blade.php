@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="" class="col-12" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group" id="-group">
                    <input type="text" class="form-control" value="{{$fotografias -> nombre}}" name="Nombre">
                </div>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" value="{{$fotografias -> descripcion}}" name="Descripcion">
                </div>
                <div class="form-group" id="valor-group">
                    <input type="text" class="form-control" value="{{$fotografias -> valor}}" name="Valor">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection