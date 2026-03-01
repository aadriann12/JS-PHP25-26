<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pilot;
class PilotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   $pilots=[
    ['nombre'=>'Lewis Hamilton','nacionalidad'=>'Reino Unido','puntos'=>0],
    ['nombre'=>'Max Verstappen','nacionalidad'=>'Países Bajos','puntos'=>0],
    ['nombre'=>'Charles Leclerc','nacionalidad'=>'Mónaco','puntos'=>0],
    ['nombre'=>'Lando Norris','nacionalidad'=>'Reino Unido','puntos'=>0],
    ['nombre'=>'Fernando Alonso','nacionalidad'=>'España','puntos'=>0]
   ];
   foreach($pilots as $pilot){
    Pilot::create($pilot);
   }
    }}
