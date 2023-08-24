<?php

namespace Database\Factories\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "user_id" => 2,
            "first_name" => fake()->firstName(),
            "last_name" => fake()->lastName(),
            "description" => fake()->text(),
            "gender" => fake()->numberBetween(1, 2),
            "phone" => fake()->phoneNumber(),
        ];
    }
}
