<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker): void
    {
        for ($i=0; $i<50; $i++){
            $newTrain = new Train();
            $newTrain->company = $faker->name;
            $newTrain->departure_station = $faker->word;
            $newTrain->arrival_station = $faker->word;
            $newTrain->departure_date = $faker->date;
            $newTrain->departure_time = $faker->time;
            $newTrain->arrival_date = $faker->date;
            $newTrain->arrival_time = $faker->time;
            $newTrain->train_code = $faker->ean8;
            $newTrain->wagons_no = $faker->boolean;
            $newTrain->on_time = $faker->boolean;
            $newTrain->suspended = $faker->boolean;
            $newTrain->save();
        }
    }
}
