<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Note;
class notas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    $notas = [
        ['title' => 'Nota 1', 'description' => 'Descripción de la nota 1'],
        ['title' => 'Nota 2', 'description' => 'Descripción de la nota 2'],
        ['title' => 'Nota 3', 'description' => 'Descripción de la nota 3'],
    ];

    foreach ($notas as $nota) {
      Note::create($nota);
    }
}

}
