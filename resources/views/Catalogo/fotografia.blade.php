@extends('welcome')
@section('contenido-principal')
    <div class="row">
        <div class="col d-flex">
            @foreach ($fotografias as $fotografias)
                <div class="card m-2 p-3 " style="width: 15rem ">
                    <img class="card-img-top" src="{{Storage::url($fotografias->imagen)}}" alt="">
                    <div class="card-body">
                        <div class="card-title">
                            Nombre
                            <br>
                            <p class="card-text">
                                {{$fotografias->descripcion}}
                            </p>
                            <div class="row">
                                <div class="col">
                                    ${{$fotografias->valor}}
                                </div>
                                <div class="col">
                                    botones
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection