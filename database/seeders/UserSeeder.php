<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Leandro Gonçalves',
                'email' => 'leandro@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'João Pedro',
                'email' => 'joao@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('123456789'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'José Carlos',
                'email' => 'jose@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('abc123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Carla Santos',
                'email' => 'carla@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('carla123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Thaynara Almeida',
                'email' => 'thaynara@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('thaynara123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
