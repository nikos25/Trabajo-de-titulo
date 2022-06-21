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
<table class="table table-striped table-dark">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Titulo</th>
        <th scope="col">Entrada</th>
      </tr>
    </thead>
    @foreach ($noticias as $num=>$noticia)
        <tbody>
            <tr>
            <td>{{$num + 1}}</td>
            <td>{{$noticia->titulo}}</td>
            <td><a href="#" class="btn btn-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i>  Ver</a></td>
            </tr>
        </tbody>
    @endforeach
  </table>
</div>
@endsection