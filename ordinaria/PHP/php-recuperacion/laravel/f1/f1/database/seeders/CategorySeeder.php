<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $categories=[
        ['nombre'=>'F1'],
        ['nombre'=>'F2'],
        ['nombre'=>'F3'],
       ];
       foreach($categories as $category){
        Category::create($category);
       }
    }}
