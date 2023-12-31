<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\santehnica>
 */
class santehnicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'denumire' => fake()->name(),
            'descriere' => fake()->name(),
            'made_in' => fake()->country(),
            'cantitate' => fake()->randomNumber(2,true),
            'pret' => fake()->randomNumber(3,false),
        ];
    }
}
