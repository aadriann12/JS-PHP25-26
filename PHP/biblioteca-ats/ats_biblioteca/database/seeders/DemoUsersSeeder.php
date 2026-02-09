<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@biblioteca.com'],
            [
                'name' => 'Admin Biblioteca',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]
        );

        User::firstOrCreate(
            ['email' => 'bibliotecario@biblioteca.com'],
            [
                'name' => 'Juan Bibliotecario',
                'password' => Hash::make('password'),
                'role' => 'librarian',
            ]
        );

        User::firstOrCreate(
            ['email' => 'socio@biblioteca.com'],
            [
                'name' => 'María Socio',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        User::firstOrCreate(
            ['email' => 'usuario1@biblioteca.com'],
            [
                'name' => 'Pedro Usuario',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        User::firstOrCreate(
            ['email' => 'usuario2@biblioteca.com'],
            [
                'name' => 'Ana Lectora',
                'password' => Hash::make('password'),
                'role' => 'user',
            ]
        );

        User::firstOrCreate(
            ['email' => 'supervisor@biblioteca.com'],
            [
                'name' => 'Carlos Supervisor',
                'password' => Hash::make('password'),
                'role' => 'librarian',
            ]
        );
    }
}
