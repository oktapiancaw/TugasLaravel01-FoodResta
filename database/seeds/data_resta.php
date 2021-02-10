<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class data_resta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        for ($i = 0; $i < 30; $i++) {
            DB::table('data_resta')->insert([
                'name' => $faker->foodName(),
                'type' => 'Foods',
                'price' => rand(1, 75) * 1000,
                'stock' => rand(10, 100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
