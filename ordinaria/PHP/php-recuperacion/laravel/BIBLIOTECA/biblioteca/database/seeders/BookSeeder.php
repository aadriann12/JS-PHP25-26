<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $books=[
    [
        'title'=>'Harry Potter y la piedra filosofal',
        'author'=>'J.K. Rowling',
        'published_year'=>1997,
        'artist_id'=>1
    ],[
        'title'=>'Juego de Tronos',
        'author'=>'George R.R. Martin',
        'published_year'=>1996,
        'artist_id'=>2
    ],[
        'title'=>'El Señor de los Anillos',
        'author'=>'J.R.R. Tolkien',
        'published_year'=>1954,
        'artist_id'=>3
    ]];
    foreach($books as $book){
        // Ensure the author exists and set author_id to match the books table schema
        if(isset($book['author'])){
            $author = Author::firstOrCreate(['name' => $book['author']]);
            $book['author_id'] = $author->id;
            unset($book['author']);
        }
        // Remove keys that don't exist on the books table to avoid mass-assignment into invalid columns
        unset($book['published_year'], $book['artist_id']);

        \App\Models\Book::create($book);
    }
}}
