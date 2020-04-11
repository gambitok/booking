<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('seat_id');
            $table->integer('flight_id')->unsigned();
            $table->foreign('flight_id')->references('flight_id')->on('flights');
            $table->integer('seat_number');
            $table->bigInteger('user_id')->default(0);
            $table->tinyInteger('type_id')->default(0);
            $table->tinyInteger('booked_status')->default(0);
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
        Schema::dropIfExists('seats');
    }
}
