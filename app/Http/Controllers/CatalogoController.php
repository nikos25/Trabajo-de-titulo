<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('login');
    }

    public function fotos(){
        return view('Fotos.catalogo');
    }
}
