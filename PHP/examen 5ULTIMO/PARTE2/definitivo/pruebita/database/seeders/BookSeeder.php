<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
    
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'El principito',
            'author' => 'Antoine de Saint-Exupéry'
        ]);
        Book::create([
            'title' => 'Don Quijote de la Mancha',
            'author' => 'Miguel de Cervantes'
        ]);
        Book::create([
            'title' => 'Cien años de soledad',
            'author' => 'Gabriel García Márquez'
        ]);
    }
}
