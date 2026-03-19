<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trainer;
use App\Models\Member;
use App\Models\GymClass;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     

$trainers=Trainer::factory(5)->create();
$members=Member::factory(10)->create();
$gymClasses=GymClass::factory(5)->create();

    }
}
