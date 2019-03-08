<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cycle;
use App\ActLevel;
use App\cycles_actlevs;
use App\student;
use App\student_actlevel;
use App\grade;
use App\level;
use App\payment_concept;
use App\payment;
use Carbon\Carbon;
 


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
                    $actlevels->estado = 'activo';
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


    public function  updatestudents($id)
    {
        $cycles = cycle::find($id);
        if ($cycles->status = "activo") {
         $alumnosAct = student::where('baja', 'alta')->get();
         foreach ($alumnosAct as $alumno) {
            $salonact = student_actlevel::where('student_id',$alumno->id)->Where('status','cursando')->get();
            foreach ($salonact as $salon) {
                $salon->status = 'cursado';
                $grupoAct = ActLevel::where('id',$salon->actlevel_id) ->Where('estado','activo')->get();
                foreach ($grupoAct as $grupo) {
                 $ultimonivel = level::find($grupo->level_id);
                 $ultimogrado= grade::find($grupo->grado_id);
                  //dd($ultimonivel);
                  if ($ultimonivel->nivel_educativo == 'Prescolar' ) {
                    $ultimogrado= grade::find($grupo->grado_id);

                    $gradoreal = grade::where('grado',$ultimogrado->grado)->first();
                    if ($ultimogrado->grado < 3) {


                        $gradoreal = grade::where('grado',$ultimogrado->grado+1)->first();
                   
                    }
                     dd($gradoreal);
                   if ($gradoreal->grado <= 3) {
                       $siguientenivel = level::where('nivel_educativo','Primaria')->first();
                      // dd($siguientenivel);
                       $grupoAc = ActLevel::where('grado_id', $siguientenivel->id)->Where('estado','activo')->first();
                      // dd($grupoAc);
                       $studen_actl = new Student_actLevel();  
                       $studen_actl->student_id = $alumno->id;
                       $studen_actl->actlevel_id = $grupoAc->id;
                       $studen_actl->status ="cursando";
                       $studen_actl->save(); 
                       
                   }else  {
                       $grupoAc = ActLevel::where('grado_id', $gradoreal->id)->Where('estado','activo')->first();
                       $studen_actl = new Student_actLevel();  
                       $studen_actl->student_id = $alumno->id;
                       $studen_actl->actlevel_id = $grupoAc->id;
                       $studen_actl->status ="cursando";
                       $studen_actl->save(); 
                   }
                    
                  }
                  if ($ultimonivel->nivel_educativo == 'Primaria' ) {
                    $ultimogrado= grade::find($grupo->grado_id);

                    $gradoreal = grade::where('grado',$ultimogrado->grado)->first();
                    if ($ultimogrado->grado < 6) {


                        $gradoreal = grade::where('grado',$ultimogrado->grado+1)->first();
                   
                    }

                     if ($gradoreal->grado <= 6) {
                        
                       $siguientenivel = level::where('nivel_educativo','Secundaria')->first();
                       $grupoAc = ActLevel::where('grado_id', $siguientenivel->id)->Where('estado','activo')->first();
                      // dd($grupoAc);
                       $studen_actl = new Student_actLevel();  
                       $studen_actl->student_id = $alumno->id;
                       $studen_actl->actlevel_id = $grupoAc->id;
                       $studen_actl->status ="cursando";
                       $studen_actl->save(); 
                       
                   }else {
                       $grupoAc = ActLevel::where('grado_id', $gradoreal->id)->Where('estado','activo')->first();
                       $studen_actl = new Student_actLevel();  
                       $studen_actl->student_id = $alumno->id;
                       $studen_actl->actlevel_id = $grupoAc->id;
                       $studen_actl->status ="cursando";
                       $studen_actl->save();  
                   }
                   
                  } 
                  
                  if ($ultimonivel->nivel_educativo == 'Secundaria' ) {
                    $ultimogrado= grade::find($grupo->grado_id);

                    $gradoreal = grade::where('grado',$ultimogrado->grado)->first();
                    if ($ultimogrado->grado < 3) {


                        $gradoreal = grade::where('grado',$ultimogrado->grado+1)->first();
                   
                    }
                    if ($gradoreal->grado <= 3) {
                        $siguientenivel = level::where('nivel_educativo','Secundaria')->first();
                       $grupoAc = ActLevel::where('grado_id', $siguientenivel->id)->Where('estado','activo')->first();
                       //dd($grupoAc);
                       $studen_actl = new Student_actLevel();  
                       $studen_actl->student_id = $alumno->id;
                       $studen_actl->actlevel_id = $grupoAc->id;
                       $studen_actl->status ="cursando";
                       $studen_actl->save();
                    }else{
                   $grupoAc = ActLevel::where('grado_id', $gradoreal->id)->Where('estado','activo')->first();
                   $studen_actl = new Student_actLevel();  
                   $studen_actl->student_id = $alumno->id;
                   $studen_actl->actlevel_id = $grupoAc->id;
                   $studen_actl->status ="cursando";
                   $studen_actl->save(); 
                  }
                     
                  }
                                 
               
               $salon->save();
            }
         }

        }
    }
    return back();  
 }




public function  AddPayment(Request $request, $id)
  {
    $date = new Carbon($Primerafecha);
    $turnos = $request->turnos;
    $grados = $request->grados;
    $grupos = $request->grupos;
    $periodicidad = $request->periodicidad;
    $Primerafecha = $request->pfecha;
    $cycles = cycle::find($id);
    if ($cycles->status = "activo"){
      $cobro = new payment();
      $grupos = student_actlevel::where('status', 'cursando')->get();
      foreach ($grupos as $grupo ) {
        $cobro->student_id = $grupos->student_id;
        $pagos = payment_concepts::where('status', 'Activo')->get();
        foreach ($pagos as $pago) {
          $cobro ->paymentconceps_id = $pagos->id;
          if ($periodicidad = 1) {

            $cobro -> Fecha_creacion1 = $date;
            $cobro -> Fecha_venciminto1 =  $date-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago1= $pago->precio;
            $cobro ->monto = $pago1;
            $cobro -> save();
          }
          elseif(periodicidad = 3){
            $cobro -> Fecha_creacion1 = $date;
            $cobro -> Fecha_venciminto1 =  $date-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago1= $pago->precio;

            $cobro -> Fecha_creacion2 = $Fecha_venciminto1;
            $cobro -> Fecha_venciminto2 =  $Fecha_venciminto1-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago2= $pago->precio;

            $cobro -> Fecha_creacion3 = $Fecha_venciminto2;
            $cobro -> Fecha_venciminto3 =  $Fecha_venciminto2-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago3= $pago->precio;

            $cobro ->monto = $pago1 + $pago2 + $pago3;
            $cobro -> save();
          }
          elseif (periodicidad = 6) {
            $cobro -> Fecha_creacion1 = $date;
            $cobro -> Fecha_venciminto1 =  $date-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago1= $pago->precio;

            $cobro -> Fecha_creacion2 = $Fecha_venciminto1;
            $cobro -> Fecha_venciminto2 =  $Fecha_venciminto1-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago2= $pago->precio;

            $cobro -> Fecha_creacion3 = $Fecha_venciminto2;
            $cobro -> Fecha_venciminto3 =  $Fecha_venciminto2-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago3= $pago->precio;

            $cobro -> Fecha_creacion4 = $Fecha_venciminto3s;
            $cobro -> Fecha_venciminto4 =  $Fecha_venciminto3s-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago4= $pago->precio;

            $cobro -> Fecha_creacion5 = $Fecha_creacion4;
            $cobro -> Fecha_venciminto5 =  $Fecha_creacion4-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago5= $pago->precio;

            $cobro -> Fecha_creacion6 = $Fecha_creacion5;
            $cobro -> Fecha_venciminto6 =  $Fecha_creacion5-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago6= $pago->precio;

             $cobro ->monto = $pago1 + $pago2 + $pago3 + $pago4 + $pago5 + $pago6;
             $cobro -> save();
          }
          elseif (periodicidad = 12) {
            $cobro -> Fecha_creacion1 = $date;
            $cobro -> Fecha_venciminto1 =  $date-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago1= $pago->precio;

            $cobro -> Fecha_creacion2 = $Fecha_venciminto1;
            $cobro -> Fecha_venciminto2 =  $Fecha_venciminto1-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago2= $pago->precio;

            $cobro -> Fecha_creacion3 = $Fecha_venciminto2;
            $cobro -> Fecha_venciminto3 =  $Fecha_venciminto2-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago3= $pago->precio;

            $cobro -> Fecha_creacion4 = $Fecha_venciminto3s;
            $cobro -> Fecha_venciminto4 =  $Fecha_venciminto3s-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago4= $pago->precio;

            $cobro -> Fecha_creacion5 = $Fecha_creacion4;
            $cobro -> Fecha_venciminto5 =  $Fecha_creacion4-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago5= $pago->precio;

            $cobro -> Fecha_creacion6 = $Fecha_creacion5;
            $cobro -> Fecha_venciminto6 =  $Fecha_creacion5-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago6= $pago->precio;

            $cobro -> Fecha_creacion7 = $Fecha_creacion6;
            $cobro -> Fecha_venciminto7 =  $Fecha_creacion6-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago7= $pago->precio;

            $cobro -> Fecha_creacion8 = $Fecha_creacion7;
            $cobro -> Fecha_venciminto8 =  $Fecha_creacion7-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago8= $pago->precio;

            $cobro -> Fecha_creacion9 = $Fecha_creacion8;
            $cobro -> Fecha_venciminto9 =  $Fecha_creacion8-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago9= $pago->precio;

            $cobro -> Fecha_creacion10 = $Fecha_creacion9;
            $cobro -> Fecha_venciminto10 =  $Fecha_creacion9-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago10= $pago->precio;

            $cobro -> Fecha_creacion11 = $Fecha_creacion10;
            $cobro -> Fecha_venciminto11 =  $Fecha_creacion10-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago11= $pago->precio;

            $cobro -> Fecha_creacion12 = $Fecha_creacion11;
            $cobro -> Fecha_venciminto12 =  $Fecha_creacion11-> addMonth(1);
            $cobro -> status= "pendiente";
            $cobro -> pago12= $pago->precio;

            $cobro ->monto = $pago1 + $pago2 + $pago3 + $pago4 + $pago5 + $pago6 + $pago7 + $pago8 + $pago9 + $pago10 + $pago11 + $pago12 ;
            $cobro -> save();
          }
        }
      }
      


    }

        return back();                                        
  }
     
}
