<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteForeignUserDetailsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_user_detail_id_foreign');
            $table->dropColumn('user_detail_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('user_detail_id')->unsigned();
            $table->foreign('user_detail_id')->references('id')->on('user_details')->onDelete('cascade');            
        });
    }
}
