<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiguritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figuritas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pais_id');                        
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');            
            $table->string('nombre');
            $table->string('imagen');
            $table->integer('rareza');
            $table->string('tipo');
            $table->double('altura',4,2)->default(0.00);
            $table->integer('posicion')->default(0);
            $table->integer('edad')->default(0);
            $table->integer('valoracion')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figuritas');
    }
}
