<?php

namespace Database\Seeders;
use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $artistas=[
        ['nombre'=>'The Beatles','pais'=>'Reino Unido'],
        ['nombre'=>'Queen','pais'=>'Reino Unido'],
        ['nombre'=>'Pink Floyd','pais'=>'Reino Unido'],
        ['nombre'=>'Led Zeppelin','pais'=>'Reino Unido'],
        ['nombre'=>'The Rolling Stones','pais'=>'Reino Unido'],
        ['nombre'=>'The Who','pais'=>'Reino Unido'],
        ['nombre'=>'The Kinks','pais'=>'Reino Unido'],
        ['nombre'=>'The Animals','pais'=>'Reino Unido'],
        ['nombre'=>'The Yardbirds','pais'=>'Reino Unido'],
        ['nombre'=>'The Zombies','pais'=>'Reino Unido'],
      ];
      foreach($artistas as $artist)
      {
        Artist::create($artist);
      } 
    }
}
