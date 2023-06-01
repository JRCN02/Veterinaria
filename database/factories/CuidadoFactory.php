<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cuidado>
 */
class CuidadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'tipo' => fake()->name(),
            'fecha' => fake()->date(),
            'descripcion_recetario' => fake()->text(),
            'prox_fecha' => fake()->date(),
            'descripcion_observacion' => fake()->text(),
            
        ];
    }
}
