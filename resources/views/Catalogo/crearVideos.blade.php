@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="{{Route('video.store')}}" class="col-12" method="POST">
                @csrf
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Link" name="Link">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection