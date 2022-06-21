@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Noticia.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                @csrf
                <div class="form-group" id="noticia-group">
                    <input type="text" class="form-control" placeholder="titulo" name="titulo">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="descripcion" name="descripcion" style="height: 3cm" maxlength="200">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection