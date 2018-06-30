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
            'pais_id' => 17,
            'nombre'=> 'Alisson',
            'imagen'=> '1-Brasil',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 6,
            'nombre'=> 'De Gean',
            'imagen'=> '1-España',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 10,
            'nombre'=> 'Lloris',
            'imagen'=> '1-Francia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 2,
            'nombre'=> 'Godin',
            'imagen'=> '2-Uruguay',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>2,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 13,
            'nombre'=> 'Rojo',
            'imagen'=> '3-Argentina',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>3,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 13,
            'nombre'=> 'Tagliafico',
            'imagen'=> '4-Argentina',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>4,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 25,
            'nombre'=> 'Nainggolan',
            'imagen'=> '4-Belgica',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>4,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 14,
            'nombre'=> 'Rakitic',
            'imagen'=> '4-Croacia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>4,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 26,
            'nombre'=> 'Jones',
            'imagen'=> '4-Inglaterra',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>4,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 31,
            'nombre'=> 'Honda',
            'imagen'=> '4-Japon',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>4,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 25,
            'nombre'=> 'Fellaini',
            'imagen'=> '6-Belgica',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>6,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 10,
            'nombre'=> 'Pogba',
            'imagen'=> '6-Francia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>6,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 24,
            'nombre'=> 'Son',
            'imagen'=> '7-CoreaSur',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>7,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 5,
            'nombre'=> 'Ronaldo',
            'imagen'=> '7-Portugal',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>7,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 26,
            'nombre'=> 'Henderson',
            'imagen'=> '8-Inglaterra',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>8,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 25,
            'nombre'=> 'Lukaku',
            'imagen'=> '9-Belgica',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>9,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 13,
            'nombre'=> 'Messi',
            'imagen'=> '10-Argentina',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>10,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 32,
            'nombre'=> 'Mane',
            'imagen'=> '10-Senegal',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>1,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 21,
            'nombre'=> 'Klose',
            'imagen'=> '11-Alemania',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>11,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 3,
            'nombre'=> 'Salah',
            'imagen'=> '11-Egipto',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>11,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 10,
            'nombre'=> 'Martial',
            'imagen'=> '11-Francia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>11,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 15,
            'nombre'=> 'Finnbogason',
            'imagen'=> '17-Islandia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>17,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 18,
            'nombre'=> 'Shaqiri',
            'imagen'=> '17-Suiza',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>17,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 9,
            'nombre'=> 'Carrillo',
            'imagen'=> '18-Peru',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>18,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 11,
            'nombre'=> 'Poulse',
            'imagen'=> '19-Dinamarca',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>19,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 26,
            'nombre'=> 'Rashford',
            'imagen'=> '19-Inglaterra',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>19,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 26,
            'nombre'=> 'Alli',
            'imagen'=> '20-Inglaterra',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>20,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 9,
            'nombre'=> 'Flores',
            'imagen'=> '20-Peru',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>20,
            'edad'=>32,
            'valoracion'=>87,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 22,
            'nombre'=> 'Lozano',
            'imagen'=> '22-Mexico',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.86,
            'posicion'=>22,
            'edad'=>32,
            'valoracion'=>85,
        ]);
        DB::table('figuritas')->insert([
            'pais_id' => 20,
            'nombre'=> 'Matic',
            'imagen'=> '31-Serbia',
            'rareza'=>1,
            'tipo'=>'Jugador',
            'altura'=>1.90,
            'posicion'=>31,
            'edad'=>32,
            'valoracion'=>87,
        ]);
    }
}
