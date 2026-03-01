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
$books=[[
    'title'=>'El principito',
    'description'=>'Un libro corto pero muy profundo',
    'publication_year'=>1943,
    'author_id'=>1,
    'category_id'=>1,
],
[   
    'title'=>'El principito',
    'description'=>'Un libro corto pero muy profundo',
    'publication_year'=>1943,
    'author_id'=>1,
    'category_id'=>1,
]];
foreach($books as $book){
    Book::create($book);
}   
    }
}
