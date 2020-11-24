<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
        	'name'=> 'Nhà đất bán',
        	'parent_id'=> '0',
        	'slug' => 'nha-dat-ban',
        	'order'=> 1,
        	'type' => 'header-main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cho thuê',
        	'parent_id'=> '0',
        	'slug' => 'nha-dat-cho-thue',
        	'order'=> 2,
        	'type' => 'header-main'
        ]);
        
        DB::table('menus')->insert([
        	'name'=> 'Cần mua - Cần thuê',
        	'parent_id'=> '0',
        	'slug' => 'can-mua-can-thue',
        	'order'=> 3,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cần mua',
        	'parent_id'=> '3',
        	'slug' => 'nha-dat-can-mua',
        	'order'=> 1,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Nhà đất cần thuê',
        	'parent_id'=> '3',
        	'slug' => 'nha-dat-can-thue',
        	'order'=> 2,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Mua căn hộ chung cư',
        	'parent_id'=> '4',
        	'slug' => 'mua-can-ho-chung-cu',
        	'order'=> 1,
        	'type' => 'header_main'
        ]);

        DB::table('menus')->insert([
        	'name'=> 'Mua nhà riêng',
        	'parent_id'=> '4',
        	'slug' => 'mua-nha-rieng',
        	'order'=> 2,
        	'type' => 'header_main'
        ]);


        
    }
           







}
