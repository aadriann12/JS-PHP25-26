<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('authors')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('authors')->insert([
            [
                'name' => 'Harper Lee',
                'country' => 'American',
                'birth_date' => '1926-04-28',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'George Orwell',
                'country' => 'British',
                'birth_date' => '1903-06-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'F. Scott Fitzgerald',
                'country' => 'American',
                'birth_date' => '1896-09-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Austen',
                'country' => 'British',
                'birth_date' => '1775-12-16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gabriel García Márquez',
                'country' => 'Colombian',
                'birth_date' => '1927-03-06',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Miguel de Cervantes',
                'country' => 'Spanish',
                'birth_date' => '1547-09-29',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Leo Tolstoy',
                'country' => 'Russian',
                'birth_date' => '1828-09-09',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fyodor Dostoevsky',
                'country' => 'Russian',
                'birth_date' => '1821-11-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
