<?php

namespace Database\Seeders;
use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  $cars=[[
    'modelo'=>'Mercedes W13',
    'chasis'=>'W13',
    'category_id'=>1
  ],[
    'modelo'=>'Red Bull RB19',
    'chasis'=>'RB19',
    'category_id'=>1
  ],[
    'modelo'=>'Ferrari SF-23',
    'chasis'=>'SF-23',
    'category_id'=>1
  ],[
    'modelo'=>'McLaren MCL60',
    'chasis'=>'MCL60',
    'category_id'=>1
  ],[
    'modelo'=>'Alpine A523',
    'chasis'=>'A523',
    'category_id'=>1
  ]];
  foreach($cars as $car){
    Car::create($car);
  }
    }
}
