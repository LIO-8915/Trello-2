<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'texto' => fake()->paragraph(),
            'fecha' => fake()->dateTimeBetween('-1 month', 'now'),
            'id_tarjeta' => \App\Models\Tarjeta::all()->random()->id_tarjeta,
            'user_id' => \App\Models\User::all()->random()->id_usuario,
        ];
    }
}
