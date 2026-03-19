<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;
class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $artists=[
        ['nombre'=>'The Beatles','pais'=>'Reino Unido'],
        ['nombre'=>'Pink Floyd','pais'=>'Reino Unido'],
        ['nombre'=>'Led Zeppelin','pais'=>'Reino Unido'],
        ['nombre'=>'Queen','pais'=>'Reino Unido'],
        ['nombre'=>'The Rolling Stones','pais'=>'Reino Unido'],
        ['nombre'=>'AC/DC','pais'=>'Australia'],
        ['nombre'=>'Nirvana','pais'=>'Estados Unidos'],
        ['nombre'=>'Metallica','pais'=>'Estados Unidos'],
        ['nombre'=>'U2','pais'=>'Irlanda'],
        ['nombre'=>'Radiohead','pais'=>'Reino Unido']
       ];
       foreach($artists as $artist){
           Artist::create($artist);
       }
}
}
