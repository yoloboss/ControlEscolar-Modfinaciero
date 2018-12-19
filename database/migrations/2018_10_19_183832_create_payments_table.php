<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned()->nullable();
            $table->foreign('student_id')->references('id')->on('students');
            $table->integer('actlevel_id')->unsigned()->nullable();
            $table->foreign('actlevel_id')->references('id')->on('act_levels');
            $table->integer('paymentconceps_id')->unsigned()->nullable();
            $table->foreign('paymentconceps_id')->references('id')->on('payment_concepts');
            $table->double('monto')->unsigned()->nullable();
            $table->date('Fecha_creacion');
            $table->date('Fecha_venciminto');
            $table->string('estatus');
            $table->date('Fecha_creacion1');
            $table->date('Fecha_venciminto1');
            $table->string('estatus1');
            $table->date('Fecha_creacion2');
            $table->date('Fecha_venciminto2');
            $table->string('estatus2');
            $table->date('Fecha_creacion3');
            $table->date('Fecha_venciminto3');
            $table->string('estatus3');
            $table->date('Fecha_creacion4');
            $table->date('Fecha_venciminto4');
            $table->string('estatus4');
            $table->date('Fecha_creacion5');
            $table->date('Fecha_venciminto5');
            $table->string('estatus5');
            $table->date('Fecha_creacion6');
            $table->date('Fecha_venciminto6');
            $table->string('estatus6');
            $table->date('Fecha_creacion7');
            $table->date('Fecha_venciminto7');
            $table->string('estatus7');
            $table->date('Fecha_creacion8');
            $table->date('Fecha_venciminto8');
            $table->string('estatus8');
            $table->date('Fecha_creacion9');
            $table->date('Fecha_venciminto9');
            $table->string('estatus9');
            $table->date('Fecha_creacion10');
            $table->date('Fecha_venciminto10');
            $table->string('estatus10');
            $table->date('Fecha_creacion11');
            $table->date('Fecha_venciminto11');
            $table->string('estatus11');
            $table->date('Fecha_creacion12');
            $table->date('Fecha_venciminto12');
            $table->string('estatus12');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
