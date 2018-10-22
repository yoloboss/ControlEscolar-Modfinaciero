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
            $table->integer('monto')->unsigned()->nullable();
            $table->date('Fecha_creacion');
            $table->date('Fecha_venciminto');
            $table->string('estatus');
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
