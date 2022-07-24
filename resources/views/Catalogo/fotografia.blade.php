@extends('welcome')
@section('contenido-principal')
    <div class="row">
        <div class="col d-flex">
            @foreach ($fotografias as $fotografias)
                <div class="card m-2 p-3 " style="width: 15rem ">
                    <img class="card-img-top" src="{{Storage::url($fotografias->imagen)}}" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>{{$fotografias->nombre}}</h3>
                            <br>
                            <p class="card-text">
                                {{$fotografias->descripcion}}
                            </p>
                            <div class="row">
                                <div class="col">
                                    ${{$fotografias->valor}}
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i> Ver</a>
                                </div>
                                <div class="col">
                                    @if(Auth::user()->rol_id == 1)
                                        <a class="btn btn-info" href="{{route('editFotografia', $fotografias ->id)}}" type="button"><i class="far fa-edit"></i></a>
                                        <button type="submit" class="btn btn-danger" form="delete_{{$fotografias -> id}}" onclick="return" confirm('¿Seguro quiere eliminar?')>
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                        <form action="{{route('borrarFoto', $fotografias -> id)}}" id="delete_{{$fotografias -> id}}" method="POST" enctype="multipart/form-data" hidden>
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection