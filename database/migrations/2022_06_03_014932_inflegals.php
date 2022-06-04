<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inflegals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inflegals', function(Blueprint $table){
           
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');     
            $table->unsignedBigInteger('id_restaurantes');
            $table->string('regimen_tributario');
            $table->string('tipo_persona');
            $table->string('tipo_documento');
            $table->string('numero_documento');
            $table->string('razon_social');
            $table->timestamps();
            $table->foreign('id_restaurantes')->references('id')->on('restaurantes')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
