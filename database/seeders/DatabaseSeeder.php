<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'ADMIN',
            'email' => 'zizah@firdaus.com',
            'password' => bcrypt('password123'),
        ]);
    \App\Models\User::factory()->create([
        'name' => 'Syahrur',
        'email' => 'syahrur@firdaus.com',
        'password' => bcrypt('password123'),
    ]);
    
    \App\Models\User::factory()->create([
        'name' => 'arya',
        'email' => 'arya@firdaus.com',
        'password' => bcrypt('password123'),
    ]);
    }
}
