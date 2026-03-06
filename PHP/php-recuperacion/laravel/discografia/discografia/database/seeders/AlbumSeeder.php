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
            ['titulo'=>'Abbey Road','anio'=>1969,'artist_id'=>1,'precio'=>19.99],
            ['titulo'=>'The Dark Side of the Moon','anio'=>1973,'artist_id'=>2,'precio'=>14.99],
            ['titulo'=>'Led Zeppelin IV','anio'=>1971,'artist_id'=>3,'precio'=>17.99],
            ['titulo'=>'A Night at the Opera','anio'=>1975,'artist_id'=>4,'precio'=>16.99],
            ['titulo'=>'Sticky Fingers','anio'=>1971,'artist_id'=>5,'precio'=>15.99],
            ['titulo'=>'Back in Black','anio'=>1980,'artist_id'=>6,'precio'=>18.99],
            ['titulo'=>'Nevermind','anio'=>1991,'artist_id'=>7,'precio'=>13.99],
            ['titulo'=>'Master of Puppets','anio'=>1986,'artist_id'=>8,'precio'=>17.49],
            ['titulo'=>'The Joshua Tree','anio'=>1987,'artist_id'=>9,'precio'=>16.49],
            ['titulo'=>'OK Computer','anio'=>1997,'artist_id'=>10,'precio'=>14.49]
        ];
        foreach($albums as $album){
            Album::create($album);
        }
    }
}
