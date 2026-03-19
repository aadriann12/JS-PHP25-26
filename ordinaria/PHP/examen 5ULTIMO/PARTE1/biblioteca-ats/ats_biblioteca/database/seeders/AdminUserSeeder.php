<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  User::firstOrCreate(
  ['email' => 'admin@biblioteca.com'],
  ['name' => 'Admin', 'password' => Hash::make('password'), 'role' => 'admin']
);

User::firstOrCreate(
  ['email' => 'aterans03@educantabria.es'],
  ['name' => 'Bibliotecario', 'password' => Hash::make('password'), 'role' => 'librarian']
);
    }

}
