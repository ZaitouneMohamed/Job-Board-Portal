<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnonceFavoriteFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'annonce_favorite';

        // Generate and insert 10 fake records
        $faker = \Faker\Factory::create();
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' => $faker->numberBetween(2, 3),
                'annonce_id' => $faker->numberBetween(1,20),
            ];
        }

        DB::table($table)->insert($data);
    }
}
