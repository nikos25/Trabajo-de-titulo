@extends('welcome')
@section('contenido-principal')
<div class="container">
    <div class="row" align = "center">
        @if(Auth::user()->rol_id == 1)
        <a href="{{route('crearPatrocinador')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear Patrcinador</a>
        @endif
    </div>
</div>
<br>
<div class="container-fluid"></div>
  <div class="row">
    <div class="card-body d-flex flex-column">
      @foreach ($patrocinadores as $num=>$patrocinadores)
      <div  class="container">
        <div class="column div-noticia">
          <div class="row div-contenido">
            <h3>{{$patrocinadores -> nombre}}</h3>
          </div>
          <div class="row div-contenido">
            <h6>{{$patrocinadores -> descripcion}}</h6>
          </div>
          <div class="row div-contenido">
            <h6>{{$patrocinadores -> facebook}}</h6>
          </div>
          <div class="row div-contenido">
            <h6>{{$patrocinadores -> instagram}}</h6>
          </div>
          <div class="row div-contenido">
            <h6>{{$patrocinadores -> email}}</h6>
          </div>
        </div>
      </div>
      <br>
      @endforeach
    </div>
  </div>
</div>
@endsection