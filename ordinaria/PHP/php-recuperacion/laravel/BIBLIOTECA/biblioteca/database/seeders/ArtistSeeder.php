<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors=[[
            'name'=>'J.K. Rowling'
        ],[
            'name'=>'George R.R. Martin'
        ],[
            'name'=>'J.R.R. Tolkien'
        ],[
            'name'=>'Agatha Christie'
        ],[
            'name'=>'Stephen King'
        ]];
        foreach($authors as $artist){
            Author::create($artist);
        }
    }
}
