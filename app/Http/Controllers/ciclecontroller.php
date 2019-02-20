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


 public function mostrarpagos()
 {

     $actlevels = \DB::table('payments')
       ->join('students','payments.student_id','=','students.id')
       ->join('act_levels','payments.actlevel_id','=','act_levels.id')
       ->join('payment_concepts','payments.paymentconceps_id','=','payment_concepts.id')
       ->where('payments.estatus','=','activo ')
       ->select('payments.id as folio','payment_concepts.nombre as nombre','payments.Fecha_venciminto as grado','groups.fecha as grupo','payments.monto as monto')
       ->orderBy('id','DESC')->paginate(10);
 }

/* public function  AddPayment(Request $request)
  {
        
        
        $cycles = cycle::find($id);
        if ($cycles->status = "activo") {$id

          foreach ($request as $requests => $request) {
            $pago = new payments();

            $pago->paymentconceps_id =$id->id;
            $pago->student_id =
            $pago->actlevel_id =
            $pago->monto = payment_concepts::where('precio',$id->precio x 'numero de veces que se cobrara ' );

            foreach ($request as $requests => $request) {
              $pago->Fecha_creacion
              $pago->Fecha_venciminto
              $pago->estatus
            }
          }
          
          

        }

        
        return back();                                        
  }*/
     
}
