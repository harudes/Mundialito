<?php

use Illuminate\Database\Seeder;
use Mundialito\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Paulo Rodriguez',
            'nickname' => 'Paulox',
            'email' => 'paulocrr@gmail.com',
            'edad' => 22,
            'password' => Hash::make('luchito'),
        ]);
    }
}
