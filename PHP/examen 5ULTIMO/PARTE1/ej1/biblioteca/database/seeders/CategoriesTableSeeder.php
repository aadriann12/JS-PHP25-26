<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    public function run(): void
    {
        $names = [
            'Novela',
            'Ciencia Ficción',
            'Fantasía',
            'Clásicos',
            'Misterio',
            'Historia',
        ];

        foreach ($names as $name) {
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}