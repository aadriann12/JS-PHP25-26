<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$authors=[
    [
        'name'=>'Gabriel Garcia Marquez',
        'biography'=>'Escritor colombiano',
    ],
    [
        'name'=>'Gabriel Garcia Marquez',
        'biography'=>'Escritor colombiano',
    ],
];
foreach($authors as $author){
    Author::create($author);
}
    }
}
