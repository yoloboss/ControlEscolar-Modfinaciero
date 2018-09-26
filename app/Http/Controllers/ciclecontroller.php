<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;

class ciclecontroller extends Controller
{
        public function index()
    {

        $cycles = cycle::all();
        return view('Usuario.Ciclos.index',compact('cycles'));

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
}
