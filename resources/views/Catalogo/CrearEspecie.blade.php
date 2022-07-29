@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="{{ asset('images/Especie.png') }}">
            <form action="{{route('crearEspecie')}}" class="col-12" method="POST" action="">
                @csrf
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Especie" name="Especie" maxlength="10">
                </div>
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <br>
        </div>
    </div>
</div>
@endsection