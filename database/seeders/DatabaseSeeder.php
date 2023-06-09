<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // $users = \App\Models\User::factory(3)->create();
       // $servicio = \App\Models\Servicio::factory(5)->create();
        $especi = \App\Models\especialidad::factory(5)->create();
        $this->call(RoleSeeder::class); //LLama al seeder de roles
        $this->call(UserSeeder::class);
        //$this->call(EspecialidadSeeder::class);
        
    }
}
