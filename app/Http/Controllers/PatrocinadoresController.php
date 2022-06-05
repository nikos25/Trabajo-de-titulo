<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatrocinadoresController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('login');
    }

    public function patro(){
        return view('Patrocinadores.patro');
    }
}
