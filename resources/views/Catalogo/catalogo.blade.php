@extends('welcome')
@section('contenido-principal')
@if(Auth::user()->rol_id == 1)
dd("funcionando");
@else
dd('aqui va la lista');
@endif
@endsection