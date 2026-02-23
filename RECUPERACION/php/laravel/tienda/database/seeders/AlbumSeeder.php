<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;
class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $albums=[
        ['titulo'=>'Abbey Road','anio'=>1969,'artist_id'=>1,'precio'=>10.99],
        ['titulo'=>'The Dark Side of the Moon','anio'=>1973,'artist_id'=>2,'precio'=>12.99],
        ['titulo'=>'Led Zeppelin IV','anio'=>1971,'artist_id'=>3,'precio'=>11.99],
        ['titulo'=>'The Rolling Stones','anio'=>1964,'artist_id'=>4,'precio'=>9.99],
        ['titulo'=>'The Who','anio'=>1965,'artist_id'=>5,'precio'=>10.99],
        ['titulo'=>'The Kinks','anio'=>1964,'artist_id'=>6,'precio'=>9.99],
        ['titulo'=>'The Animals','anio'=>1964,'artist_id'=>7,'precio'=>9.99],
        ['titulo'=>'The Yardbirds','anio'=>1964,'artist_id'=>8,'precio'=>9.99],
        ['titulo'=>'The Zombies','anio'=>1964,'artist_id'=>9,'precio'=>9.99],
        ['titulo'=>'The Beatles','anio'=>1963,'artist_id'=>1,'precio'=>9.99],
      ];
      foreach($albums as $album)
      {
        Album::create($album);
      } 
    }
}
