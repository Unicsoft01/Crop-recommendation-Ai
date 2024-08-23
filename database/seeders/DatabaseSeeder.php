<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Crops;
use App\Models\Recommendations;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Unicorn Crows',
            'email' => 'yakubmuhammed51@gmail.com',
        ]);

        // seed crops table
        Crops::factory(10)->create();

        // 34 56 11 10
        // Recommendations::factory()->create([
        //     'potassium' => 34,
        //     'nitrogen' => 56,
        //     'phosphorus' => 11,
        //     'pH' => 10,
        // ]);

    }
}
