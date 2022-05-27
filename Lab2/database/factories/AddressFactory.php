<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'city' => $this->faker->city(),
            'street' => $this->faker->streetAddress(),
            'home' => $this->faker->randomDigitNot(0),
            'floor' => $this->faker->randomDigitNot(0),
            'apartment' => $this->faker->randomDigitNot(0),
            'code' => $this->faker->postcode(),
            'registr' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
        ];
    }
}
