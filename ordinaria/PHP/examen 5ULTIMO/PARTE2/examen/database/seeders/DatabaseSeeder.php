<?php

namespace Database\Seeders;
use App\Models\Videogame;
use App\Models\Platform;
use App\Models\Studio;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>bcrypt('password')
        ]);
        Studio::create(['name'=>'nintendo','country'=>'japon']);
        Platform::create(['name'=>'swich']);
                Platform::create(['name'=>'pc']);

    }
}
