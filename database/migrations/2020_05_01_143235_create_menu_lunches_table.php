<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuLunchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_lunches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('food_name', 100);
            $table->float('food_price');
            $table->string('food_description', 500);
            $table->string('food_image')->nullable();
            $table->unsignedBigInteger('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_lunches');
    }
}
