<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $films = [
            ['titulo' => 'Jurassic Park', 'anio' => 1993, 'director_id' => 1, 'precio_alquiler' => 3.99],
            ['titulo' => 'Inception', 'anio' => 2010, 'director_id' => 2, 'precio_alquiler' => 4.99],
            ['titulo' => 'Pulp Fiction', 'anio' => 1994, 'director_id' => 3, 'precio_alquiler' => 2.99],
        ];

        foreach ($films as $film) {
            Movie::create($film);
        }
    }
}
