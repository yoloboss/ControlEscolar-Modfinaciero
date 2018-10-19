<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCyclesActlevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cycles_actlevs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cycle_id')->unsigned()->nullable();
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->integer('actlevel_id')->unsigned()->nullable();
            $table->foreign('actlevel_id')->references('id')->on('act_levels');
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
        Schema::dropIfExists('cycles_actlevs');
    }
}
