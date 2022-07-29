@extends('welcome')
@section('contenido-principal')
@php

@endphp
<div class="row">
    <div class="col d-flex">
        <form action="{{route('comentarios.store', $idfoto)}}" class="col-12 text-center" method="POST">
            @csrf
            <div class="card-title">
                <div class="row">
                    <div class="col">
                        <input type="text" placeholder="Comentario" name="comentario" style="height: 3cm">
                        <div class="form-group" style="padding: 3px">
                            <select class="" name="clasificacion">
                                <option selected>10</option>
                                <option>9</option>
                                <option>8</option>
                                <option>7</option>
                                <option>6</option>
                                <option>5</option>
                                <option>4</option>
                                <option>3</option>
                                <option>2</option>
                                <option>1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 forgot">
                    @if ($errors->any())
                    <div class="col-12 alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-comment"></i>  Comentar</button>
            </div>
            <div class="column div-noticia">
                <div class="row div-contenido">
                    @foreach ($comentario->all() as $comentario )
                        <div class="row div-contenido">
                            <div class="col">
                                <p>{{$comentario-> comentario}}</p>
                            </div>
                            <div class="col">
                                <p>Calificacion: {{$comentario-> clasificacion}}/10</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
        {{--  <div class="card body">
            <div class="card-title">
                @foreach ($comentarios as $comentarios)
                    <div class="row">
                        <p>{{$comentarios -> comentario}}</p>
                    </div>
                @endforeach
            </div>
        </div>  --}}
    </div>
</div>
@endsection