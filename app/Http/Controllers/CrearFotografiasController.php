<?php

namespace App\Http\Controllers;

use App\Models\{Catalogo, Fotografia, Especie};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrearFotografiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function crearFotografia(){
        $especies = Especie::all();
        return view('Catalogo.crearFotografia', compact('especies'));
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
        $fotografia = new Fotografia();
        $fotografia -> id_admin = Auth::user()->rol_id;
        $fotografia -> id_especie = $request -> id_especie;
        $fotografia -> imagen = $request -> Fotografia->store('public/Fotografias');
        $fotografia -> descripcion = $request -> Descripcion;
        $fotografia -> valor = $request -> Valor;
        $fotografia -> save();
        $especies = Especie::all();
        return view('Catalogo.crearFotografia', compact('especies'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function show(Fotografia $fotografia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Fotografia $fotografia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fotografia $fotografia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fotografia  $fotografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fotografia $fotografia)
    {
        //
    }
}
