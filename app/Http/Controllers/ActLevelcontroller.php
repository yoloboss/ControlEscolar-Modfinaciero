<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActLevel;
use app\cycles_actlevs;

class ActLevelcontroller extends Controller
{
    public function index()
    {
        $actlevels = ActLevel::where('eliminarlogica','=','alta')->get();
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
        $turnos = $request->turnos;
        $grados = $request->grados;
        $grupos = $request->grupos;
        $tr=0;
        $grado=0;
        $grupo=0;
        while ($tr < count($turnos)) {
            while ($grado < count($grados)) {
                while ($grupo < count($grupos)) {
                    $actlevels = new ActLevel();
                    $actlevels->level_id = $request->input('level_id');
                    $actlevels->turno_id = $turnos[$tr];
                    $actlevels->grado_id = $grados[$grado];
                    $actlevels->grupo_id = $grupos[$grupo];
                    $actlevels->eliminarlogica = 'alta';
                    $actlevels->save();

                    $grupo=$grupo+1;
                }
                $grupo=0;
                $grado=$grado+1;
            }
            $grado=0;
            $tr=$tr+1;
        }
        
        return back();											
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
