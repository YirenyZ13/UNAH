<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefono>
 */
class TelefonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telefono' =>fake()->unique()->phoneNumber, 
            'tipo' => fake()->randomElement(['Celular', 'Casa', 'Trabajo']), 
            'alumno_id' => Alumno::all()->random()->id,
        ];
    }
}
