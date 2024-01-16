<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $train = new Train();
        // $train->company = 'trenitalia';
        // $train->from = 'milan';
        // $train->to = 'rome';
        // $train->departure_time = '16:55:11';
        // $train->arrivals_time = '20:45:12';
        // $train->code_train = 9887;
        // $train->carriages_number = 34;
        // $train->delay = 0;
        // $train->cancelled = 1;
        // $train->save();

        for($i = 0; $i < 20; $i++){
            $train = new Train();
            $train->company = $faker->company();
            $train->from = $faker->city() ;
            $train->to = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrivals_time = $faker->time();
            $train->code_train = $faker->numberBetween(1000, 9999);
            $train->carriages_number = $faker->numberBetween(0, 50);
            $train->delay = 0;
            $train->cancelled = 1;
            $train->save();
        }
        
    }
}
