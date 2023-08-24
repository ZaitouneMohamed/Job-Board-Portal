<?php

namespace Database\Factories\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user\Experience>
 */
class ExperienceFactory extends Factory
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
            "is_current" => fake()->numberBetween(0,1),
            "start_date" => fake()->date(),
            "end_date" => fake()->date(),
            "title" => fake()->title(),
            "company_name"=>fake()->company(),
            "city"=>fake()->city(),
            "description"=>fake()->text()
        ];
    }
}
