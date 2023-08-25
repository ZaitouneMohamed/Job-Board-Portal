<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => "admin",
            'email' => "admin@admin.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('admin');
        User::create([
            'username' => "user",
            'email' => "user@user.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('user');
        User::create([
            'username' => "fournisseur",
            'email' => "fournisseur@email.com",
            'email_verified_at' => now(),
            'password' => Hash::make("password"),
        ])->assignRole('fournisseur');
    }
}
