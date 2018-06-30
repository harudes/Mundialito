<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiguritasXUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('figuritas_x_usuario', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');             
            $table->unsignedInteger('figurita_id');            
            $table->foreign('figurita_id')->references('id')->on('figuritas')->onDelete('cascade');             
            $table->integer('cantidad');
            $table->boolean('pegada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('figuritas_x_usuario');
    }
}
