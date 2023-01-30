<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@empresa.com',
            'password' => bcrypt('password'),
        ])->assignRole('Admin');
        ;
        
        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@empresa.com',
            'password' => bcrypt('password'),
        ])->assignRole('Usuario');

        User::factory(20)->create();
    }
}
