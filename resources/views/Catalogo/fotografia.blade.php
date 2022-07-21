@extends('welcome')
@section('contenido-principal')
<div class="container">
    <div class="column">
      <div class="row" align = "center">
        @if(Auth::user()->rol_id == 1)
        <a href="{{route('crearFotografia')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear fotografia</a>
        @endif
      </div>
    </div>
</div>
<br>
@endsection