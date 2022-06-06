@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="images\usuario.png">
                    <div class="col-12 forgot">
                        <h5>{{Auth::user()->nombre_usuario}}</h5>
                    </div>
                    <div class="col-12 forgot">
                        <h5>{{Auth::user()->Nombre}} {{Auth::user()->Apellido}}</h5>
                    </div>
                    <div class="col-12 forgot">
                        <h5>{{Auth::user()->Email}}</h5>
                    </div>
                    @if (Auth::user()->rol_id == 1)
                        <a href="{{route('registro')}}">Crear administrador</a>
                    @endif
                    <br>
                    <a href="{{route('logout')}}">Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
@endsection