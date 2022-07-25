@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="" class="col-12" method="POST">
                @csrf
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" value="{{$videos -> nombre}}" name="Nombre" maxlength="20">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" value="{{$videos -> descripcion}}" name="Descripcion" maxlength="200">
                </div>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" value="{{$videos -> link}}" name="Link">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i> Editar video</button>
            </form>
            <div class="col-12 forgot">
                @if ($errors->any())
                <div class="col-12 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection