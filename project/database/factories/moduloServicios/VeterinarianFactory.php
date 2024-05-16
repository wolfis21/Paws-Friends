<?php

namespace Database\Factories\moduloServicios;

use App\Models\moduloServicios\Veterinarian;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veterinarian>
 */


class VeterinarianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Veterinarian::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'address' => $this->faker->streetAddress,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'link_ref' => Str::random(10), // Genera un link_ref aleatorio
            'img_ref' => Str::random(10), // Genera un img_ref aleatorio
            'specialist_animals' => $this->faker->word, // Puedes ajustar esto según sea necesario
            'puntuation' => rand(0, 5), // Genera una puntuación aleatoria entre 0 y 100
        ];
    }
}
