<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinadoresController extends Controller
{
    public function patro(){
        return view('Patrocinadores.patro');
    }
}
