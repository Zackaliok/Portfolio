<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TechsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'url' => $this->faker->randomElement(["logo-python", "logo-laravel"]).".png"
        ];
    }
}
