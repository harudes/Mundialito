<?php

use Illuminate\Database\Seeder;

class TipoPaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_paquete')->insert([
            'precio' => 100,
            'imagen' => 'paquete-1',
            'nombre' => 'Paquetes de bronce',
        ]);
        DB::table('tipo_paquete')->insert([
            'precio' => 200,
            'imagen' => 'paquete-2',
            'nombre' => 'Paquetes de plata',
        ]);
        DB::table('tipo_paquete')->insert([
            'precio' => 500,
            'imagen' => 'paquete-3',
            'nombre' => 'Paquetes de oro',
        ]);
        DB::table('tipo_paquete')->insert([
            'precio' => 1000,
            'imagen' => 'paquete-4',
            'nombre' => 'Paquetes especiales',
        ]);
    }
}
