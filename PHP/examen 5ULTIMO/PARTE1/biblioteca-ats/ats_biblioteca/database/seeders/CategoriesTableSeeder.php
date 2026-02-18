<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('categories')->insert([
            [
                'name' => 'Ficción clásica',
                'slug' => 'ficcion-clasica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ciencia ficción',
                'slug' => 'ciencia-ficcion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novela romántica',
                'slug' => 'novela-romantica',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Literatura rusa',
                'slug' => 'literatura-rusa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Realismo mágico',
                'slug' => 'realismo-magico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sátira',
                'slug' => 'satira',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drama',
                'slug' => 'drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Aventura',
                'slug' => 'aventura',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
