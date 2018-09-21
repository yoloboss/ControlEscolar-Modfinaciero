<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class Alumnocontroller extends Controller
{
	//ver listado de alumnos
    public function index()
    {

        $students = student::where('baja','=',1)->get();
        
    	return view('Usuario.alumnos.index',compact('students')); 

    }
    public function indexbaja()
    {
        $students = student::where('baja','=',0);
        return view('Usuario.alumnos.index',compact('students')); 
    }
    //crear un nuevo alumno
    public function create()
    {
    	return view('Usuario.alumnos.registro'); 													
    }
    //guardar un nuevo alumno
    public function store(Request $request)
    {
        $rules=[ 
            'nombre'=>'required',
            'apellido_P'=>'required',
            'apellido_M'=>'required',
            'genero'=>'required',
            'fecha_nacimineto'=>'required',
            'estado'=>'required',
            'Nacionalidad'=>'required',
            'telefono'=>'required|min:10',
            'direccion'=>'required',
            'colonia'=>'required',
            'c_p'=>'required',
            'numre_casa'=>'required',
            'nombre_p'=>'required',
            'apellidos_P'=>'required',
            'direccion_p'=>'required',
            'Telefono_p'=>'required|min:10',
            'nombre_m'=>'required',
            'direccion_m'=>'required',
            'Telefono_m'=>'required|min:10',
            'apellidos_m'=>'required',
            'baja'=>'required',
            'level_id'=>'required',

        ];
    	
        //$request->all();
        $student = new student();
        $student->nombre = $request->input('nombre');
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
        $student->level_id = $request->input('level_id');

        $student->save();

        return redirect('/Usuario/alumno/');
    }

    public function edit($id)
    {
        $student = student::find($id);
        return view('Usuario.alumnos.edit')->with(compact('student'));                                                    
    }
    //guardar un nuevo alumno
    public function update(Request $request, $id)
    {
        $rules=[ 
            'nombre'=>'required',
            'apellido_P'=>'required',
            'apellido_M'=>'required',
            'genero'=>'required',
            'fecha_nacimineto'=>'required',
            'estado'=>'required',
            'Nacionalidad'=>'required',
            'telefono'=>'required|min:10',
            'direccion'=>'required',
            'colonia'=>'required',
            'c_p'=>'required',
            'numre_casa'=>'required',
            'nombre_p'=>'required',
            'apellidos_P'=>'required',
            'direccion_p'=>'required',
            'Telefono_p'=>'required|min:10',
            'nombre_m'=>'required',
            'direccion_m'=>'required',
            'Telefono_m'=>'required|min:10',
            'apellidos_m'=>'required',
            'baja'=>'required',
            'level_id'=>'required',

        ];
        //$request->all();
        $student = student::find($id);
        $student->nombre = $request->input('nombre');
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
        $student->level_id = $request->input('level_id');

        $student->save();

        return redirect('/Usuario/alumno/');
    }

}
