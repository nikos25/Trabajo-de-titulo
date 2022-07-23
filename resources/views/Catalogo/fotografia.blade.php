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
                                    @if(Auth::user()->rol_id == 1)
                                        <a href="#" class="btn btn-primary" role="button" aria-pressed="true"><i class="fas fa-sign-in-alt"></i> Ver</a>
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