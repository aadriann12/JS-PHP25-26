<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BooksTableSeeder extends Seeder
{
    public function run(): void
    {
        // Cargar ids para no hardcodear números a lo loco
        $authors = Author::pluck('id', 'name');        // ['George Orwell' => 1, ...]
        $categories = Category::pluck('id', 'slug');   // ['novela' => 1, ...]

        $books = [
            [
                'title' => '1984',
                'isbn' => '9780452284234',
                'author_name' => 'George Orwell',
                'published_at' => '1949-06-08',
                'pages' => 328,
                'price' => 9.99,
                'category_slugs' => ['novela', 'ciencia-ficcion', 'clasicos'],
            ],
            [
                'title' => 'Harry Potter y la piedra filosofal',
                'isbn' => '9788478884452',
                'author_name' => 'J.K. Rowling',
                'published_at' => '1997-06-26',
                'pages' => 223,
                'price' => 12.50,
                'category_slugs' => ['fantasia', 'novela'],
            ],
            [
                'title' => 'Fundación',
                'isbn' => '9780553293357',
                'author_name' => 'Isaac Asimov',
                'published_at' => '1951-01-01',
                'pages' => 255,
                'price' => 10.00,
                'category_slugs' => ['ciencia-ficcion', 'clasicos'],
            ],
            [
                'title' => 'Don Quijote de la Mancha',
                'isbn' => '9788424921819',
                'author_name' => 'Miguel de Cervantes',
                'published_at' => '1605-01-16',
                'pages' => 863,
                'price' => 14.95,
                'category_slugs' => ['clasicos', 'novela', 'historia'],
            ],
            [
                'title' => 'Orgullo y prejuicio',
                'isbn' => '9780141199078',
                'author_name' => 'Jane Austen',
                'published_at' => '1813-01-28',
                'pages' => 432,
                'price' => 11.90,
                'category_slugs' => ['clasicos', 'novela'],
            ],
        ];

        foreach ($books as $b) {
            $book = Book::create([
                'title' => $b['title'],
                'isbn' => $b['isbn'],
                'author_id' => $authors[$b['author_name']] ?? null,
                'published_at' => $b['published_at'],
                'pages' => $b['pages'],
                'price' => $b['price'],
            ]);

            // Convertir slugs a IDs y sincronizar pivot
            $catIds = collect($b['category_slugs'])
                ->map(fn ($slug) => $categories[$slug] ?? null)
                ->filter()
                ->values()
                ->all();

            $book->categories()->sync($catIds);
        }
    }
}