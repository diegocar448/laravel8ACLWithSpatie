<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Diego Cardoso',
            'email' => 'diegocar448@hotmail.com',
            'password' => 123456,
        ])->roles()->attach(1);

        User::create([
            'name' => 'Taylor B. Otwell',
            'email' => 'taylor@laravel.com',
            'password' => 123456,
        ])->roles()->attach(2);
    }
}
