<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cuenta'=>fake()->Unique()->numerify('###########'),
            'nombre' =>fake()->name(), 
            'nota' =>fake()->numberBetween(0, 100), 
            'carrera' =>fake()->randomElement(['Informatica Administrativa', 'Cafetal', 'Enfermería', 'Administración de Empresa', 'Ingeniería']),
        ];
    }
}
