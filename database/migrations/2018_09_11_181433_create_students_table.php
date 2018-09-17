<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido_P');
            $table->string('apellido_M');
            $table->string('genero');
            $table->date('fecha_nacimineto');
            $table->string('estado');
            $table->string('Nacionalidad');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('colonia');
            $table->string('c_p');
            $table->string('numre_casa');
            $table->string('nombre_p');
            $table->string('apellidos_P');
            $table->string('direccion_p');
            $table->string('nombre_m');
            $table->string('direccion_m');
            $table->string('apellidos_m');
            $table->string('imagen')->nullable();
            $table->boolean('baja'); //baja logica
            
            $table->integer('level_id')->unsigned();
            //$table->foreign('niveledu_id')->references('id')->on('levels');

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
        Schema::dropIfExists('students');
    }
}
