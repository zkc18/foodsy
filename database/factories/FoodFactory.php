<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 1, 60)
        ];
    }
}
