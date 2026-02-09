<?php

namespace Database\Seeders;
use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$books=[
    [
        'title' => 'The Great Gatsby',
        'author' => 'F. Scott Fitzgerald',
        'published_year' => 1925,
        'genre' => 'Novel'
    ],
    [
        'title' => 'To Kill a Mockingbird',
        'author' => 'Harper Lee',
        'published_year' => 1960,
        'genre' => 'Fiction'
    ],
    [
        'title' => '1984',
        'author' => 'George Orwell',
        'published_year' => 1949,
        'genre' => 'Dystopian'
    ],

    ];

    foreach ($books as $book) {
        Book::create($book);
    };

}}

