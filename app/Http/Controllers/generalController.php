<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{

    public function inicio(){
        return view('general.index');
    }
}
