<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nota;
class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $notes=[
    [
        'titulo'=>'estudiar para el examen',
        'contenido'=>'estudiar para el examen de php'

    ],
    [
        'titulo'=>'hacer la tarea',
        'contenido'=>'hacer la tarea de php'
    ]
      ];
      foreach ($notes as $note) {
        Nota::create($note);

      }
    }
}
