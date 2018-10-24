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
            $table->foreign('level_id')->references('id')->on('levels');
            $table->integer('grado_id')->unsigned()->nullable();
            $table->foreign('grado_id')->references('id')->on('grades');
            $table->integer('grupo_id')->unsigned()->nullable();
            $table->foreign('grupo_id')->references('id')->on('groups');
            $table->integer('turno_id')->unsigned()->nullable();
            $table->foreign('turno_id')->references('id')->on('turns');
            $table->string('estado')->nullable();
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
