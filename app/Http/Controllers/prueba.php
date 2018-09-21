<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prueba extends Controller
{
     public function index()
    {

        $students = student::ALL();
    	return view('Usuario.alumnos.index')->compact('students'); 

    }
}
