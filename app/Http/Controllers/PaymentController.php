<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
}
