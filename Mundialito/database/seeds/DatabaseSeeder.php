<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(FiguritasTableSeeder::class);
        $this->call(TipoPaqueteSeeder::class);
        $this->call(PaquetesTableSeeder::class);
    }
}
