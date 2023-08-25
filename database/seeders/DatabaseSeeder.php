<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        // \App\Models\user\Profile::factory(1)->create();
        \App\Models\user\Education::factory(5)->create();
        \App\Models\user\Experience::factory(5)->create();
        \App\Models\user\Skill::factory(15)->create();
        \App\Models\Company::factory(5)->create();
        \App\Models\Categorie::factory(10)->create();
        \App\Models\Annonce::factory(20)->create();
        $this->call(AnnonceAplliedFaker::class);
        $this->call(AnnonceFavoriteFaker::class);
    }
}
