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
        \App\Models\Users::factory(10)->create();

        \App\Models\Users::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Characters::factory(100)->create();
        \App\Models\Easter_eggs::factory(100)->create();
        \App\Models\Initial_items::factory(100)->create();
        \App\Models\Enemys::factory(100)->create();
        \App\Models\Endings::factory(100)->create();
        \App\Models\Challenges::factory(100)->create();
        \App\Models\Unlockable_items::factory(100)->create();
        //\App\Models\User_characters::factory(10)->create();
        //\App\Models\User_endings::factory(10)->create();
        //\App\Models\User_challenges::factory(10)->create();
        //\App\Models\User_items::factory(10)->create();
        //\App\Models\User_initial_items::factory(10)->create();
        //\App\Models\User_easter_eggs::factory(10)->create();
    }
}
