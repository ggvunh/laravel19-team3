<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBookRoomServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_room_services', function (Blueprint $table) {
            $table->dropForeign('book_room_services_service_food_id_foreign');
            $table->dropColumn('service_food_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_room_services', function (Blueprint $table) {
            $table->integer('service_food_id')->unsigned();
            $table->foreign('service_food_id')->references('id')->on('service_foods')->onDelete('cascade');
        });
    }
}
