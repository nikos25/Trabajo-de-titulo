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
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        @foreach ($especies as $num=>$especies)
            <tbody>
                <tr>
                <td>{{$num + 1}}</td>
                <td>{{$especies->nom_especie}}</td>
                <td>
                  <a href="{{route('fotografia', $especies ->id)}}" class="btn btn-secondary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i></a>
                  @if(Auth::user()->rol_id == 1)
                    <a class="btn btn-info" href="{{route('editEspecie', $especies ->id)}}" type="button"><i class="far fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger" form="delete_{{$especies -> id}}">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    <form action="{{route('borrarEspecie', $especies -> id)}}" id="delete_{{$especies -> id}}" method="POST" enctype="multipart/form-data" hidden>
                      @csrf
                      @method('DELETE')
                    </form>
                  @endif
                </td>
                </tr>
            </tbody>
        @endforeach
      </table>
@endsection

