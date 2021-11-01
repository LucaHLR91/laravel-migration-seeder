<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 100; $i++){
          $new_travel = new Travel();
          $new_travel->reference = $faker-> bothify('??-##-##');
          $new_travel->location = $faker->city();
          $new_travel->country = $faker->country();
          $new_travel->days = $faker->numberBetween(4,10);
          $new_travel->price = $faker->randomFloat(2, 300, 1500);
          $new_travel->description = $faker->paragraphs(5, true);
          $new_travel->save();
      }  
    }
}
