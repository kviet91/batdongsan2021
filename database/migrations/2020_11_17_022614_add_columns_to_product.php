<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->integer('city_id')->nullable(false)->after('content');
            $table->integer('district_id')->nullable(false)->after('city_id');
            $table->integer('street_id')->nullable(false)->after('district_id');
            $table->smallInteger('number_of_bedroom')->nullable(false)->after('area');
            $table->smallInteger('number_of_restroom')->nullable(false)->after('number_of_bedroom');
            $table->smallInteger('number_of_floor')->nullable(false)->after('number_of_restroom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
