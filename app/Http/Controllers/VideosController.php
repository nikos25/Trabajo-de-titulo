<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('login');
    }

    public function video(){
        return view('Fotos.videos');
    }
}
