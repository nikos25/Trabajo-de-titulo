<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};
use phpDocumentor\Reflection\PseudoTypes\True_;




class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $usuario = new Usuario();
         $usuario->Email = $request->email;
         $usuario->password = Hash::make($request->password);
         $usuario->Nombre = $request->nombre;
         $usuario->Apellido = $request->apellido;
         $usuario->nombre_usuario = $request->nomUsuario;
         $usuario->rol_id = $request->rol;
         $usuario->save();
         return redirect()->route('registro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function login(Request $request){
          $credenciales = [
             'email' => $request['email'],
             'password' => $request['password'],
         ];

        // $credenciales = $request->only('email','password');

        if(Auth::attempt($credenciales)){
            //Credenciales correctas ingresadas
            $usuario = Usuario::where('Email', $request->email)->first();
            return redirect()->route('inicio');
        }else{
            //credenciales incorrectas
            return back()->withErrors('Datos incorrectos');
        }
    }

    public function logout(){
        
        Auth::logout();
        return redirect()->route('inicio');
    }

    public function registro()
    {
        return view('Registro.registro');
    }
}
