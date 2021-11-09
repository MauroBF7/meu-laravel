<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor' => $this->faker->name,
            'isbn' => $this->faker->ean13(),
        ];
    }
}
