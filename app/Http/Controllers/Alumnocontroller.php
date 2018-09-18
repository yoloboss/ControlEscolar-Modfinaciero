<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class Alumnocontroller extends Controller
{
	//ver listado de alumnos
    public function index()
    {
        $students = student::paginate(15);
    	return view('Usuario.alumnos.index')->with(compact('students')); 
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
