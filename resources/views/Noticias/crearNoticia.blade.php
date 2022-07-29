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
                    <input type="text" class="form-control" placeholder="titulo" name="titulo" maxlength="25">
                </div>
                <div class="form-group div-descripcion">
                    <input type="text" class="form-control" placeholder="descripcion" name="descripcion" style="height: 3cm" maxlength="1000">
                </div>
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
                <br>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear</button>
            </form>
        </div>
    </div>
</div>
@endsection