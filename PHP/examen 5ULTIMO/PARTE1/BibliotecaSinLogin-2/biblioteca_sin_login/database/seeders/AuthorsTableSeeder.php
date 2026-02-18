<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Autor;
class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $autores=[
[
            'name' => 'Harper Lee',
            'country' => 'American',
            'birth_date' => '1926-04-28',
            'created_at' => now(),
            'updated_at' => now(),
],[
    'name'=>'adrian',
    'country'=>'colombiano',
    'birth_date'=>'1990-01-01',
    'created_at'=>now(),
    'updated_at'=>now(),
]

       ];

foreach ($autores as $autor)
{
    Autor::create($autor);
}
}}
