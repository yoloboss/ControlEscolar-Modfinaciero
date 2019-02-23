<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment_concept;
use App\levels;

class paymentconceptscontroller extends Controller
{
    public function index()
    {

       $concepts = \DB::table('payment_concepts')
       ->join('levels','payment_concepts.nivel_id','=','levels.id')
       ->where('payment_concepts.status','=','Activo ')
       ->select('payment_concepts.id','payment_concepts.nombre as nombre','payment_concepts.concepto as concepto','payment_concepts.precio as precio','payment_concepts.status as estado','levels.nivel_educativo as nivel')
       ->get();

       return view('Usuario.conceptos_pagos.index',compact('concepts')); 

    }

    public function create()
    {

        return view('Usuario.conceptos_pagos.registro');

    }

    public function store(Request $request)
    {

        $concept = new payment_concept();
        $concept->nombre = $request->input('nombre');
        $concept->precio = $request->input('precio');
        $concept->concepto = $request->input('concepto');
        $concept->status = $request->input('status'); 
        $concept->nivel_id = $request->input('nivel'); 
        $concept->save();
        return redirect('/Usuario/concepto_pago/');

    }

    public function edit($id)
    {
        $concept = payment_concept::find($id);
        return view('Usuario.conceptos_pagos.edit')->with(compact('concept'));                                                    
    }

    public function  update(Request $request, $id)
    {
    	$concepts = payment_concept::find($id);
    	
        $concepts->nombre = $request->input('nombre');
        $concepts->precio = $request->input('precio');
        $concepts->concepto = $request->input('concepto');
        $concepts->status = $request->input('status');
        $concept->nivel_id = $request->input('nivel'); 
        $concepts->save();
        
        return redirect('/Usuario/concepto_pago/');											
    }

    public function destroy( $id)
    {
        
        $concept = payment_concept::find($id);
        $concept->status = 'Inactivo';


        $concept->save();

        return back();
    }
}
