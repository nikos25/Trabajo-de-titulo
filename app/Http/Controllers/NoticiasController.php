<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('login');
    }

    public function Noticia(){
        return view('Noticias.noticia');
    }
}
