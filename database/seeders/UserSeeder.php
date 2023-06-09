<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => fake()->name(),
            'apellido' => fake()->name(),
            'user' => fake()->name(),
            'password' => Hash::make('admin'),
            'ci' => fake()->numerify(),
            'direccion' => fake()->address(),
            'celular' => fake()->numerify(),
            'email' => fake()->unique()->safeEmail(),
            'fNacimiento' => fake()->date(),
            'estado' => fake()->numberBetween(0,1),
            'email_verified_at' => now(),
            
            'remember_token' => Str::random(10),
               
        ])->assignRole('Admin');
//        User::factory(3)->create();
    }
}
