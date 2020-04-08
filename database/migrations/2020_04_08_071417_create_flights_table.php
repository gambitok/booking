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
            $table->increments('flight_id');
            $table->string('name');
            $table->string('airline');
            $table->dateTime('date_from', 0);
            $table->dateTime('date_to', 0);
            $table->double('price', 8, 2);
            $table->integer('city_id_from');
            $table->integer('city_id_to');
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
