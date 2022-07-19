<?php

namespace App\Http\Controllers;

use App\Models\Patrocinador;
use Illuminate\Http\Request;

class CrearPatroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crearPatrocinador(){
        return view('Patrocinadores.crearPatro');
    }

    public function index()
    {
        //
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
        $patrocinador = new Patrocinador();
        $patrocinador-> nombre = $request->Nombre;
        $patrocinador-> descripcion = $request -> Descripcion;
        $patrocinador-> facebook = $request -> Facebook;
        $patrocinador-> instagram = $request -> Instagram;
        $patrocinador-> email = $request -> Email;
        $patrocinador->save();
        return redirect()->route('patro');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function show(Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function edit(Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patrocinador $patrocinador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patrocinador  $patrocinador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patrocinador $patrocinador)
    {
        //
    }
}
