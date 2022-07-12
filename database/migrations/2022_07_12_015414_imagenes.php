<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function(Blueprint $table){
           
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');     
            $table->unsignedBigInteger('id_restaurantes');
            $table->string('res_ruta');
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
