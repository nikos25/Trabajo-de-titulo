@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="{{ asset('images\Noticia.png') }}">
            </div>
            <form action="" class="col-12" method="POST" action="">
                @csrf
                <h3>Editar noticia</h3>
                <div class="form-group" id="noticia-group">
                    <input type="text" class="form-control" value="{{$noticias -> titulo}}" name="titulo" maxlength="25">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control div-descripcion" value="{{$noticias -> descripcion}}" name="descripcion" style="height: 3cm" maxlength="1000">
                </div>
                <button type="submit" class="btn btn-dark"><i class="far fa-save"></i>  Guardar</button>
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