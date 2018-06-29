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
            $table->foreign('pais_id')->references('id')->on('pais')->onDelete('cascade');            
            $table->string('nombre');
            $table->string('imagen');
            $table->integer('rareza');
            $table->string('tipo');
            $table->double('altura',4,2);
            $table->integer('posicion');
            $table->integer('edad');
            $table->integer('valoracion');
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
        Schema::dropIfExists('figuritas');
    }
}
