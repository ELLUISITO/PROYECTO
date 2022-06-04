<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tiposcomidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiposcomidas', function(Blueprint $table){
           
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');     
            $table->unsignedBigInteger('id_restaurantes');
            $table->string('tipos_comida');
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
