<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class Alumnocontroller extends Controller
{
	//ver listado de alumnos
    public function index()
    {

        $students = student::where('baja','=','Alta')->get();
        
    	return view('Usuario.alumnos.index',compact('students')); 

    }
    public function indexbaja()
    {
        $students = student::where('baja','=','Baja')->get();
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
        $messages=[
            'nombre.required' =>'Es necesario el nombre el alumno.',
            'nombre.alpha' =>'El nombre debe de ser alfabetico.',
            'apellido_P.required' =>'Es necesario el apellido paterno el alumno.',
            'apellido_P.alpha' =>'El apellido paterno debe de ser alfabetico.',
            'apellido_M.required' =>'Es necesario el apellido materno el alumno.',
            'apellido_M.alpha' =>'El apellido materno debe de ser alfabetico.',
            'fecha_nacimineto.required' =>'Es necesario la fecha de naciminto del el alumno.',
            'fecha_nacimineto.date' =>'LA fecha debe de llever el siguiente formato AA/MM/DD.',
            'estado.required' =>'Es necesario el estado de nacimineto el alumno.',
            'Nacionalidad.required' =>'Es necesario la nacionalidad de el alumno.',
            'telefono.required' =>'Es necesario el telefono de casa de el alumno.',
            'telefono.required' =>'El telefono debe de ser numerico',
            'telefono.min' =>'El telefono debe de contar con 10 digitos.',
            'direccion.required' =>'Es necesario la dirrecion de el alumno.',
            'colonia.required' =>'Es necesario la colonia de el alumno.',
            'c_p.required' =>'Es necesario el codigo podtal de el alumno.',
            'c_p.integer' =>'El codigo postal debe de ser numerico.',
            'c_p.max' =>'El codigo postal debe de tener maximo 5 digitos.',
            'numre_casa.required' =>'Es necesario el numero de casa de el alumno.',
            'numre_casa.integer' =>'El numero de casa debe de ser numerico.',
            'nombre_p.required' =>'Es necesario el nombre del padre el alumno.',
            'nombre_p.alpha' =>'Es necesario el nombre del padre el alumno sea alfabetico.',
            'apellidos_P.required' =>'Es necesario el apellido del padre de el alumno.',
            'apellidos_P.alpha' =>'Es necesario el apellido del padre de el alumno sea alfabetico.',
            'direccion_p.required' =>'Es necesario la direccion del padre de el alumno.',
            'Telefono_p.required' =>'Es necesario el telefono del padre de el alumno.',
            'Telefono_p.integer' =>'Es necesario el telefono del padre de el alumno sea numerico.',
            'Telefono_p.required' =>'Es necesario el telefono del padre de el alumno enga 10 digitos.',
            'nombre_m.required' =>'Es necesario el nombre de la madre de el alumno.',
            'nombre_m.alpha' =>'Es necesario el nombre de la madre de el alumno sea alfabetico.',
            'direccion_m.required' =>'Es necesario la dirrecion de la madre de el alumno.',
            'Telefono_m.required' =>'Es necesario el telefono de la madre el alumno.',
            'Telefono_m.integer' =>'Es necesario el telefono de la madre el alumno sea numerico.',
            'Telefono_m.min' =>'Es necesario el telefono de la madre de el alumno enga 10 digitos..',
            'apellidos_m.required' =>'Es necesario el apellido de la madre de el alumno.',
            'apellidos_m.alpha' =>'Es necesario el apellido de la madre de el alumno sea alfabetico.',
            'baja.required' =>'Es necesario el asignar el estado de el alumno.',
            'level_id.required' =>'Es necesario el nivel del el alumno.'
        ];
        $rules=[ 
            'nombre'=>'required|alpha',
            'apellido_P'=>'required|alpha',
            'apellido_M'=>'required|alpha',
            'genero'=>'required',
            'fecha_nacimineto'=>'required|date',
            'estado'=>'required',
            'Nacionalidad'=>'required',
            'telefono'=>'required|integer|min:10',
            'direccion'=>'required',
            'colonia'=>'required',
            'c_p'=>'required|integer|max:5',
            'numre_casa'=>'required|integer',
            'nombre_p'=>'required|alpha',
            'apellidos_P'=>'required|alpha',
            'direccion_p'=>'required',
            'Telefono_p'=>'required|integer|min:10',
            'nombre_m'=>'required|alpha',
            'direccion_m'=>'required',
            'Telefono_m'=>'required|integer|min:10',
            'apellidos_m'=>'required|alpha',
            'baja'=>'required',
            'level_id'=>'required',

        ];
        $this->validate($request,$rules,$messages);
    	
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

        //guardar imagen en el proyecto
        $file =$request->file('imagen');
        $path = public_paht() . 'img/imagenes_estudiantes';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path,$fileName);
        //guardar el nombre de la imagen en la base de datos
        $student->imagen = $fileName;
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

        $messages=[
            'nombre.required' =>'Es necesario el nombre el alumno.',
            'nombre.alpha' =>'El nombre debe de ser alfabetico.',
            'apellido_P.required' =>'Es necesario el apellido paterno el alumno.',
            'apellido_P.alpha' =>'El apellido paterno debe de ser alfabetico.',
            'apellido_M.required' =>'Es necesario el apellido materno el alumno.',
            'apellido_M.alpha' =>'El apellido materno debe de ser alfabetico.',
            'fecha_nacimineto.required' =>'Es necesario la fecha de naciminto del el alumno.',
            'fecha_nacimineto.date' =>'LA fecha debe de llever el siguiente formato AA/MM/DD.',
            'estado.required' =>'Es necesario el estado de nacimineto el alumno.',
            'Nacionalidad.required' =>'Es necesario la nacionalidad de el alumno.',
            'telefono.required' =>'Es necesario el telefono de casa de el alumno.',
            'telefono.required' =>'El telefono debe de ser numerico',
            'telefono.min' =>'El telefono debe de contar con 10 digitos.',
            'direccion.required' =>'Es necesario la dirrecion de el alumno.',
            'colonia.required' =>'Es necesario la colonia de el alumno.',
            'c_p.required' =>'Es necesario el codigo podtal de el alumno.',
            'c_p.integer' =>'El codigo postal debe de ser numerico.',
            'c_p.max' =>'El codigo postal debe de tener maximo 5 digitos.',
            'numre_casa.required' =>'Es necesario el numero de casa de el alumno.',
            'numre_casa.integer' =>'El numero de casa debe de ser numerico.',
            'nombre_p.required' =>'Es necesario el nombre del padre el alumno.',
            'nombre_p.alpha' =>'Es necesario el nombre del padre el alumno sea alfabetico.',
            'apellidos_P.required' =>'Es necesario el apellido del padre de el alumno.',
            'apellidos_P.alpha' =>'Es necesario el apellido del padre de el alumno sea alfabetico.',
            'direccion_p.required' =>'Es necesario la direccion del padre de el alumno.',
            'Telefono_p.required' =>'Es necesario el telefono del padre de el alumno.',
            'Telefono_p.integer' =>'Es necesario el telefono del padre de el alumno sea numerico.',
            'Telefono_p.required' =>'Es necesario el telefono del padre de el alumno enga 10 digitos.',
            'nombre_m.required' =>'Es necesario el nombre de la madre de el alumno.',
            'nombre_m.alpha' =>'Es necesario el nombre de la madre de el alumno sea alfabetico.',
            'direccion_m.required' =>'Es necesario la dirrecion de la madre de el alumno.',
            'Telefono_m.required' =>'Es necesario el telefono de la madre el alumno.',
            'Telefono_m.integer' =>'Es necesario el telefono de la madre el alumno sea numerico.',
            'Telefono_m.min' =>'Es necesario el telefono de la madre de el alumno enga 10 digitos..',
            'apellidos_m.required' =>'Es necesario el apellido de la madre de el alumno.',
            'apellidos_m.alpha' =>'Es necesario el apellido de la madre de el alumno sea alfabetico.',
            'baja.required' =>'Es necesario el asignar el estado de el alumno.',
            'level_id.required' =>'Es necesario el nivel del el alumno.'
        ];
        $rules=[ 
            'nombre'=>'required|alpha',
            'apellido_P'=>'required|alpha',
            'apellido_M'=>'required|alpha',
            'genero'=>'required',
            'fecha_nacimineto'=>'required|date',
            'estado'=>'required',
            'Nacionalidad'=>'required',
            'telefono'=>'required|integer|min:10',
            'direccion'=>'required',
            'colonia'=>'required',
            'c_p'=>'required|integer|max:5',
            'numre_casa'=>'required|integer',
            'nombre_p'=>'required|alpha',
            'apellidos_P'=>'required|alpha',
            'direccion_p'=>'required',
            'Telefono_p'=>'required|integer|min:10',
            'nombre_m'=>'required|alpha',
            'direccion_m'=>'required',
            'Telefono_m'=>'required|integer|min:10',
            'apellidos_m'=>'required|alpha',
            'baja'=>'required',
            'level_id'=>'required',

        ];
        $this->validate($request,$rules,$messages);
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
        //guardar imagen en el proyecto
        $file =$request->file('imagen');
        $path = public_paht() . 'img/imagenes_estudiantes';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path,$fileName);
        //guardar el nombre de la imagen en la base de datos
        $student->imagen = $fileName;
        $student->save();

        return redirect('/Usuario/alumno/');
    }

    public function destroy( $id)
    {
        
        //$request->all();
        $student = student::find($id);
        $student->baja = 'baja';


        $student->save();

        return back();
    }

}
