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
        return [
            "title" => fake()->title(),
            "type" => fake()->numberBetween(1,2),
            'user_id' =>3 ,
            'companie_id' =>$this->faker->randomElement([Company::factory()]) ,
            'categorie_id' =>$this->faker->randomElement([Categorie::factory()]) ,
            "description" => fake()->text(),
            "location" => fake()->city(),
            "statue" => 1,

        ];
    }
}
