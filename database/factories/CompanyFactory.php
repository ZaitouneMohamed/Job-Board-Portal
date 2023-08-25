<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(4, 5),
            'name' => fake()->company(),
            'description' => fake()->text(),
            'location' => fake()->city(),
            'start_date' => fake()->date(),
            'site_url' => fake()->url(),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
