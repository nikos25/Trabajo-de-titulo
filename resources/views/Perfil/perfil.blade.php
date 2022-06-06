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
                        <a href="{{route('registro')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i>  Crear administrador</a>
                    @endif
                    <br>
                        <a href="{{route('registro')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i>  Cerrar sesion</a>
                </div>
            </div>
        </div>
    </div>
@endsection