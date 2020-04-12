<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('airline');
            $table->dateTime('date_from', 0);
            $table->dateTime('date_to', 0);
            $table->double('price', 8, 2);
            $table->integer('city_id_from')->unsigned();
            $table->foreign('city_id_from')->references('id')->on('cities');
            $table->integer('city_id_to')->unsigned();
            $table->foreign('city_id_to')->references('id')->on('cities');
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
        Schema::dropIfExists('flights');
    }
}
