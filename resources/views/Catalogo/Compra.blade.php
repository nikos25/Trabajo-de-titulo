@extends('welcome')
@section('contenido-principal')
    <div class="container-flex">
        <div class="column text-center">
            <div class="col">
                <h3>Datos de transferencia</h3>
            </div>
            <div class="col">
                Nombre 
            </div>
            <div class="col">
                Rut
            </div>
            <div class="col">
                banco
            </div>
            <div class="col">
                Tipo de cuenta
            </div>
            <div class="col">
                Numero de cuenta
            </div>
            <div class="col">
                Email de cuenta
            </div>
            <form action="{{Route('compra.store', ['foto' => $idfoto, 'valor' => $cantvalor, 'usuario' => $idusuario])}}" class="col-12" method="POST">
                <div class="form-group" id="transaccion-group">
                    <input type="text" placeholder="Numero de transaccion" name="transaccion" class="">
                </div>
                <button type="submit" class="btn btn-dark"><i class="fas fa-check-circle"></i> Confirmar Transaccion</button>
            </form>
        </div>
    </div>
@endsection