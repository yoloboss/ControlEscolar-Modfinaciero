<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActLevel;

class ActLevelcontroller extends Controller
{
    public function index()
    {
        $actlevels = ActLevel::where('eliminarlogica','=','Alta')->get();
        return view('Usuario.Nivel.index',compact('actlevels')); 

    }

    public function indexbaja()
    {
        $actlevels = ActLevel::where('eliminarlogica','=','Baja')->get();
        return view('Usuario.Nivel.index',compact('actlevels')); 
    }

    public function create()
    {
    	return view('Usuario.nivel.registre'); 													
    }

    public function store(Request $request)
    {
    	$actlevels = new ActLevel();
    	
        $actlevels->level_id = $request->input('level_id');
        $actlevels->grado_id = $request->input('grado_id');
        $actlevels->grupo_id = $request->input('grupo_id');
        $actlevels->turno_id = $request->input('turno_id');
        
        $actlevels->save();
        
        return redirect('/Usuario/Nivel/');											
    }

    public function edit($id)
    {
        $actlevel = ActLevel::find($id);
        return view('Usuario.nivel.edit')->with(compact('actlevel'));                                                    
    }
    public function  update(Request $request, $id)
    {
        $actlevel = ActLevel::find($id);
        
        $actlevel->level_id = $request->input('level_id');
        $actlevel->grado_id = $request->input('grado_id');
        $actlevel->grupo_id = $request->input('grupo_id');
        $actlevel->turno_id = $request->input('turno_id');
        
        $actlevel->save();
        
        return redirect('/Usuario/Nivel/');                                         
    }

    public function destroy( $id)
    {
        
        //$request->all();
        $actlevel = ActLevel::find($id);
        $actlevel->eliminarlogica = 'baja';


        $actlevel->save();

        return back();
    }
}
