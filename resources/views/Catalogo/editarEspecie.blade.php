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
                <h3>Editar especie</h3>
                <div class="form-group" id="user-group">
                    <input type="text" class="form-control" placeholder="" name="Especie" value="{{$especies->nom_especie}}">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Editar especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection