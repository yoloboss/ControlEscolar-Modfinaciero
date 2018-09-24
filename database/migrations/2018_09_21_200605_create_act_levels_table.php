<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_id')->unsigned()->nullable();
            $table->integer('grado_id')->unsigned()->nullable();
            $table->integer('grupo_id')->unsigned()->nullable();
            $table->integer('turno_id')->unsigned()->nullable();
            $table->string('eliminarlogica')->nullable();
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
        Schema::dropIfExists('act_levels');
    }
}
