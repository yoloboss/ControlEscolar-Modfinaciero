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
    public function store(Request $request)
    {
    	//
        //$request->all();
        $student = new student();
        $student->name = $request->input('nombre');
        $student->apellido_P = $request->input('apellido_P');
        $student->apellido_M = $request->input('apellido_M');
        $student->genero = $request->input('genero');
        $student->fecha_nacimineto = $request->input('fecha_nacimineto');
        $student->estado = $request->input('estado');
        $student->Nacionalidad = $request->input('Nacionalidad');
        $student->telefono = $request->input('telefono');
        $student->direccion = $request->input('direccion');
        $student->colonia = $request->input('colonia');
        $student->c_p = $request->input('c_p');
        $student->numre_casa = $request->input('numre_casa');
        $student->nombre_p = $request->input('nombre_p');
        $student->apellidos_P = $request->input('apellidos_P');
        $student->direccion_p = $request->input('direccion_p');
        $student->Telefono_p = $request->input('Telefono_p');
        $student->nombre_m = $request->input('nombre_m');
        $student->direccion_m = $request->input('direccion_m');
        $student->apellidos_m = $request->input('apellidos_m');
        $student->Telefono_m = $request->input('Telefono_m');
        $student->baja = $request->input('baja');
        //$student->name = $request->input('nombre');

        $student->save();

        return redirect('/Usuario/alumno/');
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('Usuario.alumnos.edit')->with(compact('student'));                                                    
    }
    //guardar un nuevo alumno
    public function update(Request $request)
    {
        //
        //$request->all();
        $student = new student();
        $student->name = $request->input('nombre');
        $student->apellido_P = $request->input('apellido_P');
        $student->apellido_M = $request->input('apellido_M');
        $student->genero = $request->input('genero');
        $student->fecha_nacimineto = $request->input('fecha_nacimineto');
        $student->estado = $request->input('estado');
        $student->Nacionalidad = $request->input('Nacionalidad');
        $student->telefono = $request->input('telefono');
        $student->direccion = $request->input('direccion');
        $student->colonia = $request->input('colonia');
        $student->c_p = $request->input('c_p');
        $student->numre_casa = $request->input('numre_casa');
        $student->nombre_p = $request->input('nombre_p');
        $student->apellidos_P = $request->input('apellidos_P');
        $student->direccion_pame = $request->input('direccion_pbre');
        $student->Telefono_p = $request->input('Telefono_p');
        $student->nombre_m = $request->input('nombre_m');
        $student->direccion_m = $request->input('direccion_m');
        $student->apellidos_m = $request->input('apellidos_m');
        $student->Telefono_m = $request->input('Telefono_m');
        $student->baja = $request->input('baja');
        //$student->name = $request->input('nombre');

        $student->save();

        return redirect('/Usuario/alumno/');
    }

}
