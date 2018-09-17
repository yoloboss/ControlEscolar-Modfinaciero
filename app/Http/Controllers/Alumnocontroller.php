<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Alumnocontroller extends Controller
{
	//ver listado de alumnos
    public function index()
    {
    	return view('Usuario.alumnos.index'); 
    }
    //crear un nuevo alumno
    public function create()
    {
    	return view('Usuario.alumnos.registro'); 													
    }
    //guardar un nuevo alumno
    public function store()
    {
    	//
    }

}
