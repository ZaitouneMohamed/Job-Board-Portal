<?php

namespace Database\Factories\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user\Education>
 */
class EducationFactory extends Factory
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
            "certificate_name" => fake()->sentence(),
            "major" => fake()->word(),
            "university" => fake()->company(),
            "start_date" => fake()->date(),
            "end_date" => fake()->date(),
            "percentage" => fake()->numberBetween(50, 100)
        ];
    }
}
