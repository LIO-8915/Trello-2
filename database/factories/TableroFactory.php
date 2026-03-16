<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tablero>
 */
class TableroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => fake()->word(),
            'fondo' => fake()->hexColor(),
            'id_espacio' => \App\Models\Espacio::all()->random()->id_espacio, // Selecciona un ID existente
        ];
    }
}
