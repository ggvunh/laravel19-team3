<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookRoomServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_room_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_food_id')->unsigned();
            $table->foreign('service_food_id')->references('id')->on('service_foods')->onDelete('cascade');
            $table->integer('book_room_id')->unsigned();
            $table->foreign('book_room_id')->references('id')->on('book_rooms')->onDelete('cascade');
            $table->integer('unit');
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
        Schema::dropIfExists('book_room_services');
    }
}
