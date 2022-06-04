<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Restaurantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('restaurantes', function(Blueprint $table){
           
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');     
            $table->unsignedBigInteger('id_usuarios');
            $table->string('nombre_restauarante');
            $table->string('descripcion');
            $table->string('telefono');
            $table->string('pagina_web');
            $table->timestamps();
            $table->foreign('id_usuarios')->references('id')->on('users')->onDelete("cascade");

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
