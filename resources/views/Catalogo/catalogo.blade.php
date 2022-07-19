@extends('welcome')
@section('contenido-principal')
    <div class="container">
        <div class="column">
          <div class="row" align = "center">
            @if(Auth::user()->rol_id == 1)
            <a href="{{route('crearEspecie')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear especie</a>
            <a href="{{route('crearFotografia')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Crear fotografia</a>
            @endif
          </div>
        </div>
    </div>
    <br>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">N°</th>
            <th scope="col">Especie</th>
            <th scope="col">Entrada</th>
          </tr>
        </thead>
        @foreach ($especies as $num=>$especie)
            <tbody>
                <tr>
                <td>{{$num + 1}}</td>
                <td>{{$especie->nom_especie}}</td>
                <td><a href="{{route('fotografia')}}" class="btn btn-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i>  Ver</a></td>
                </tr>
            </tbody>
        @endforeach
      </table>
</div>
@endsection