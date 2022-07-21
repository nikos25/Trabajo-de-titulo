@extends('welcome')
@section('contenido-principal')
<div class="container">
    <div class="row" align = "center">
        @if(Auth::user()->rol_id == 1)
        <a href="{{route('crearNoticia')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear Noticia</a>
        @endif
    </div>
</div>
<br>
<div class="container-fluid"></div>
  <div class="row">
    <div class="card-body d-flex flex-column">
      @foreach ($noticias as $num=>$noticias)
      <div  class="container">
        <div class="column div-noticia">
          <div class="row div-contenido">
            <h3>{{$noticias -> titulo}}</h3>
          </div>
          <div class="row div-contenido">
            <h6>{{$noticias -> descripcion}}</h6>
          </div>
          <div class="container">
            <div class="row div-contenido-fecha">
              <h8>Fecha de creacion: {{$noticias -> fecha}}</h8>
            </div>
            <div class="row div-botones">
              <a class="btn btn-danger" href="#" type="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
              <a class="btn btn-info" href="{{route('editarNoticia', $noticias -> id)}}" type="button"><i class="far fa-edit"></i></a>
            </div>
          </div>
        </div>
      </div>
      <br>
      @endforeach
    </div>
  </div>
</div>
@endsection