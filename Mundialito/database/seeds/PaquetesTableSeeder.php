<?php

use Illuminate\Database\Seeder;

class PaquetesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paquetes')->insert([
            'user_id' => 1,
            'rareza' => 1,
        ]);
        DB::table('paquetes')->insert([
            'user_id' => 1,
            'rareza' => 2,
        ]);
        DB::table('paquetes')->insert([
            'user_id' => 1,
            'rareza' => 3,
        ]);
        DB::table('paquetes')->insert([
            'user_id' => 1,
            'rareza' => 4,
        ]);
    }
}
