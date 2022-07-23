@extends('welcome')
@section('contenido-principal')
<div class="container">
    <div class="column">
      <div class="row" align = "center">
        @if(Auth::user()->rol_id == 1)
        <a href="{{route('crearVideo')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear video</a>
        @endif
      </div>
    </div>
</div>
@endsection