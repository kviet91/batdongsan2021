<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable(false);
            $table->smallInteger('type')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->integer('area')->nullable(false);
            $table->integer('provinces_id')->nullable(false);
            $table->integer('districts_id')->nullable(false);
            $table->integer('wards_id')->nullable(false);
            $table->smallInteger('number_of_bedroom')->nullable(true);;
            $table->smallInteger('number_of_restroom')->nullable(true);
            $table->smallInteger('number_of_floor')->nullable(true);
            $table->string('address',250)->nullable(false);
            $table->text('content')->nullable(false);
            $table->integer('image_id')->nullable(true);
            $table->text('slug')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
