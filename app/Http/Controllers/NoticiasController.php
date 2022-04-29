<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function Noticia(){
        return view('Noticias.noticia');
    }
}
