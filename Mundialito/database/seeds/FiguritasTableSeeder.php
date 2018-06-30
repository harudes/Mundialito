<?php

use Illuminate\Database\Seeder;

class FiguritasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

/*Schema::create('figuritas', function (Blueprint $table) {
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
            $table->timestamps();
        });*/

    public function run()
    {
        DB::table('figuritas')->insert([
            'pais_id' => 1,
            'nombre'=> 'Akinfeev',
            'imagen'=> '1-Rusia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 2,
            'nombre'=> 'Musiera',
            'imagen'=> '1-Uruguay',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>87,
        ]);
    }
}
