@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Patrocinador.png">
            </div>
            <form action="" class="col-12" method="POST" action="">
                @csrf
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Nombre del patrocinador" name="Nombre">
                </div>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="rrss-group">
                    <input type="text" class="form-control" placeholder="Facebook" name="Facebook">
                </div>
                <div class="form-group" id="rrss-group">
                    <input type="text" class="form-control" placeholder="Instagram" name="Instagram">
                </div>
                <div class="form-group" id="email-group">
                    <input type="text" class="form-control" placeholder="Email" name="Email">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear patrocinador</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>

@endsection