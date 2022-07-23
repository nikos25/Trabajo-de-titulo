@extends('welcome')
@section('contenido-principal')
<div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
        <div class="modal-content">
            <div class="col-12 user-image">
                <img src="images\Imagen.png">
            </div>
            <form action="{{route('crearFoto')}}" class="col-12" method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group" id="image-group">
                    <input type="file" class="form-control" placeholder="Fotografia" name="Fotografia" accept="image/*">
                </div>
                <div class="form-group" id="-group">
                    <input type="text" class="form-control" placeholder="Nombre" name="Nombre">
                </div>
                <div class="form-group" id="descripcion-group">
                    <input type="text" class="form-control" placeholder="Descripcion" name="Descripcion">
                </div>
                <div class="form-group" id="valor-group">
                    <input type="text" class="form-control" placeholder="Valor" name="Valor">
                </div>
                <div class="form-group">
                    <label for="especie" placeholder="Especie"></label>
                    <select class="form-control"  name='id_especie'>
                        @foreach ($especies as $especies)
                            <option value="{{$especies->id}}">{{$especies->id}} - {{$especies->nom_especie}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-sign-in-alt"></i>  Crear especie</button>
            </form>
            <div class="col-12 forgot">
              
            </div>
        </div>
    </div>
</div>
@endsection