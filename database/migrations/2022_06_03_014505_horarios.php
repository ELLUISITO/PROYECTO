<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Horarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function(Blueprint $table){
           
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');     
            $table->unsignedBigInteger('id_restaurantes');

            $table->string('dia_semana');
            $table->string('hora_apertura');
            $table->string('hora_cierre');
 /*
            $table->string('dia_semana_LV');
            $table->string('hora_apertura_LV');
            $table->string('hora_cierre_LV');

            $table->string('dia_semana_S');
            $table->string('hora_apertura_S');
            $table->string('hora_cierre_S');

            $table->string('dia_semana_DF');
            $table->string('hora_apertura_DF');
            $table->string('hora_cierre_DF');
     */

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
