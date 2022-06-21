@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Especie.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                @csrf
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="Especie" name="Especie">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection