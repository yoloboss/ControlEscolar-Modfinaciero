<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;

class ciclecontroller extends Controller
{
        public function index()
    {

        $cycles = cycle:::all();
        return view('Usuario.Ciclos.index',compact('cycles'));

    }
}
