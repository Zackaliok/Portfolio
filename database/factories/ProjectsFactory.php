<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsFactory extends Factory
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
            'url' => $this->faker->randomElement(["https://blablabla", 'ZUTFLUTE']),
            'link' => $this->faker->randomElement(["youtube.com"]),
            'resume' => $this->faker->randomElement(["LOREM IPSUM", 'CACA'])
        ];
    }
}
