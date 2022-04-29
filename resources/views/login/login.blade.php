@extends('welcome')
@section('contenido-principal')
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-image">
                    <img src="images\usuario.png">
                </div>
                <form action="" class="col-12">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nombre de Usuario">
                    </div>
                    <div class="form-group" id="pass-group">
                        <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Iniciar sesion</button>
                </form>
                <div class="col-12 forgot">
                    <a href="#" >Recordar contraseña</a>
                </div>
            </div>
        </div>
    </div>
@endsection