@extends('welcome')
@section('contenido-principal')
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="{{ asset('images\usuario.png') }}">
                </div>
                <form action="" class="col-12" method="POST" action="">
                    @csrf
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de usuario" name="nomUsuario" maxlength="50">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" maxlength="50">
                    </div>
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" maxlength="50">
                    </div>
                    <div class="form-group" id="email-group">
                        <input type="email" class="form-control" placeholder="Correo electronico" name="email">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" placeholder="Contraseña" name="password">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" placeholder="Confirme Contraseña" name="cpassword">
                    </div>
                    
                    <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Registrarse</button>
                </form>
                <div class="col-12 forgot">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif 
                </div>
            </div>
        </div>
    </div>
@endsection