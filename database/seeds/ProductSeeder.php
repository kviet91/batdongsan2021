<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i<50; $i++) {
        $faker = Faker\Factory::create();
        DB::table('products')->insert ([
        'title' => $faker->sentence,
        'type' => rand(0,2),
        'price' => rand(1000000, 1000000000),
        'area' => rand(20, 200),
        'image' => ('http://lorempixel.com/640/480/'),
        'number_of_bedroom' => rand(1, 5),
        'number_of_restroom' => rand(1, 3),
        'number_of_floor' => rand(1, 5),
        'address' => $faker->address,
        'content' => $faker->paragraph($nbSentences = 40, $variableNbSentences = true),
        'city_id' => rand(1, 64),
        'district_id' => rand(1, 100),
        'street_id' => rand(1, 200),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
}
