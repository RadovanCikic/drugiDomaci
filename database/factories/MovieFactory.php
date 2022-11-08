<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase,
            'plot' => $this->faker->realText,
            'release_year' => $this->faker->numberBetween(1990, 2022),
            'genre' => $this->faker->word,
            'duration' => $this->faker->numberBetween(100, 250)
        ];
    }
}
