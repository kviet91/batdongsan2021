<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i<1000; $i++) {
        DB::table('posts')->insert([
            'product_id' => rand(1,1000),
            'category_id' => rand(1,4),
            'start' => date('Y-m-d'),
            'finish' => date('Y-m-d'),
        ]);
        $timestamps = true;
        }
    }
}
