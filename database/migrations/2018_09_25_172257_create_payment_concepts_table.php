<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_concepts', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio',8,3);
            $table->string('nombre');
            $table->text('concepto');
            $table->text('status');
            $table->integer('nivel_id')->unsigned()->nullable();
            $table->foreign('nivel_id')->references('id')->on('levels');
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
        Schema::dropIfExists('payment_concepts');
    }
}
