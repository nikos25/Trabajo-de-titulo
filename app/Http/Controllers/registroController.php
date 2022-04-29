<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class registroController extends Controller
{
    public function registro(){
        $registro = Registro::all();
        return view('registro.registro');
    }
    public function store(request $request){
        $registro = new Registro();
        $registro->nombre = $request->nombre;
        $registro->apellido = $request->apellido;
        $registro->nomUsuario = $request->nomUsuario;
        $registro->rut = $request->rut;
        $registro->password = $request->password;
        $registro->email = $request->email;
        $registro->save();
        return redirect()->route('registro');
    }
}
