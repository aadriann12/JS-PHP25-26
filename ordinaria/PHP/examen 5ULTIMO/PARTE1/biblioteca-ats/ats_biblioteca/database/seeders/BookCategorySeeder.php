<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('book_category')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('book_category')->insert([
            // To Kill a Mockingbird
            ['book_id' => 1, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 1, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],

            // 1984
            ['book_id' => 2, 'category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 2, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],

            // The Great Gatsby
            ['book_id' => 3, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 3, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // Pride and Prejudice
            ['book_id' => 4, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 4, 'category_id' => 3, 'created_at' => now(), 'updated_at' => now()],

            // One Hundred Years of Solitude
            ['book_id' => 5, 'category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 5, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],

            // Don Quixote
            ['book_id' => 6, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 6, 'category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 6, 'category_id' => 8, 'created_at' => now(), 'updated_at' => now()],

            // War and Peace
            ['book_id' => 7, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 7, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 7, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],

            // Crime and Punishment
            ['book_id' => 8, 'category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 8, 'category_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['book_id' => 8, 'category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
