<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nivelcontroller extends Controller
{
    	//ver listado de alumnos
    public function index()
    {
    	return view('Usuario.nivel.index'); 
    }
    //crear un nuevo alumno
    public function create()
    {
    	return view('Usuario.nivel.registre'); 													
    }
    //guardar un nuevo alumno
    public function store()
    {
    	//
    }
}
