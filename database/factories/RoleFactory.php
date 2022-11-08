<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'movie_id' => $this->faker->numberBetween(1, 15),
            'actor_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
