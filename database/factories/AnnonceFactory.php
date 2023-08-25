<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $numItems = rand(3, 8);

        // Generate fake <ul> and <li> elements
        $fakeList = '<ul>';
        for ($i = 0; $i < $numItems; $i++) {
            $fakeList .= '<li>' . fake()->sentence() . '</li>';
        }
        $fakeList .= '</ul>';
        return [
            "title" => fake()->jobTitle(),
            "type" => fake()->numberBetween(1, 2),
            'user_id' => fake()->numberBetween(3, 4),
            'salary' => fake()->numberBetween(1000, 1500) . '-' . fake()->numberBetween(1500, 2000),
            'company_id' => $this->faker->randomElement([Company::factory()]),
            'categorie_id' => $this->faker->randomElement([Categorie::factory()]),
            "description" => $fakeList,
            "requirement" => $fakeList,
            "location" => fake()->city(),
            "statue" => 1,

        ];
    }
}
