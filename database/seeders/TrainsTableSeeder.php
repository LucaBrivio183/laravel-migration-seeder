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
        for ($i = 0; $i < 20; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->randomElement(['Frecciarossa', 'Trenord', 'Trenitalia']);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $newTrain->arrival_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $newTrain->train_code = $faker->bothify('?#?#?#?#?#');
            $newTrain->wagons = $faker->numberBetween(1, 10);
            $newTrain->on_time = $faker->boolean();
            $newTrain->cancelled = $faker->boolean();
            $newTrain->save();
        }
    }
}
