<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birth_year' => $this->faker->firstName,
            'gender' => $this->faker->numberBetween(1980, 2000),
            'email' => $this->faker->email,
            'instagram' => $this->faker->url,
            'personal_site' => $this->faker->url
        ];
    }
}
