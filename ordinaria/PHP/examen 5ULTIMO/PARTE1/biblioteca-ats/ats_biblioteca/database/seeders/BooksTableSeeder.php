<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('books')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('books')->insert([
            [
                'title' => 'To Kill a Mockingbird',
                'isbn' => '978-0-06-112008-4',
                'published_year' => 1960,
                'author_id' => 1,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'isbn' => '978-0-452-28423-4',
                'published_year' => 1949,
                'author_id' => 2,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Great Gatsby',
                'isbn' => '978-0-7432-7356-5',
                'published_year' => 1925,
                'author_id' => 3,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pride and Prejudice',
                'isbn' => '978-0-14-143951-8',
                'published_year' => 1813,
                'author_id' => 4,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'One Hundred Years of Solitude',
                'isbn' => '978-0-06-085052-4',
                'published_year' => 1967,
                'author_id' => 5,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Don Quixote',
                'isbn' => '978-0-14-044913-3',
                'published_year' => 1605,
                'author_id' => 6,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'War and Peace',
                'isbn' => '978-0-14-303943-3',
                'published_year' => 1869,
                'author_id' => 7,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Crime and Punishment',
                'isbn' => '978-0-14-118584-1',
                'published_year' => 1866,
                'author_id' => 8,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
