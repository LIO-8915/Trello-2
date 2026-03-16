<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lista>
 */
class ListaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $posicion = 1;
        return [
            'titulo' => fake()->word(),
            'posicion' => $posicion++,
            'id_tableros' => \App\Models\Tablero::all()->random()->id_tableros,
        ];
    }
}
