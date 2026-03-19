<?php

namespace Database\Seeders;
use App\Models\Director;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $directors = [
            ['nombre' => 'Steven Spielberg', 'biografia' => 'Director de cine estadounidense conocido por sus películas de aventuras y ciencia ficción.', 'fecha_nacimiento' => '1946-12-18'],
            ['nombre' => 'Christopher Nolan', 'biografia' => 'Director británico-estadounidense famoso por sus películas de suspenso y ciencia ficción.', 'fecha_nacimiento' => '1970-07-30'],
            ['nombre' => 'Quentin Tarantino', 'biografia' => 'Director estadounidense conocido por su estilo único y diálogos memorables.', 'fecha_nacimiento' => '1963-03-27'],
        ];

        foreach ($directors as $director) {
            Director::create($director);
        }
    }
}
