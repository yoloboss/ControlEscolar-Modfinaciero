<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;
use App\ActLevel;
use App\cycles_actlevs;

class ciclecontroller extends Controller
{
        public function index()
    {

        $cycles = cycle::all();
        return view('Usuario.Ciclos.index',compact('cycles'));

    }
        public function indexp($id)
    {

        $cycles = cycle::find($id);
        return view('Usuario.Ciclos.steps',compact('cycles'));

    }
    public function create()
    {

        return view('Usuario.Ciclos.registro');

    }

    public function store(Request $request)
    {

        $cycle = new cycle();
        $cycle->ciclo = $request->input('ciclo');
        $cycle->status = $request->input('status');
        $cycle->save();
        return redirect('/Usuario/ciclo_escolar/');

    }

    public function storeActGrp(Request $request,$id)
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


                    $cycle_actlevel = new cycles_actlevs();
                    $cycle= cycle::find($id);
                    $cycle_actlevel->cycle_id = $cycle->id;
                    $cycle_actlevel->actlevel_id =  $actlevels->id;

                    $cycle_actlevel->save();

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
        $cycle = cycle::find($id);
        return view('Usuario.Ciclos.edit')->with(compact('cycle'));                                                    
    }

    public function  update(Request $request, $id)
    {
        $cycles = cycle::find($id);
        
        $cycles->ciclo = $request->input('ciclo');
        $cycles->status = $request->input('status');
        
        $cycles->save();
        
        return redirect('/Usuario/ciclo_escolar/');                                         
    }


    public function  updatestudents()
    {
        
        
        return back();                                         
    }
}
