<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caja extends Controller
{
    public function index()
    {
        
        return view('Usuario.Caja.index'); 

    }
}
