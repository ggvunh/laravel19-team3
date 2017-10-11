<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CombineColumnsIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->string('first_name')->after('id');
            $table->string('last_name')->after('first_name');
            $table->string('address')->after('last_name');
            $table->string('email')->after('last_name');
            $table->integer('phone')->after('email');
            $table->string('city')->after('password');
            $table->string('province')->after('city');
            $table->string('country')->after('province');
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
            $table->string('username');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('address');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('city');
            $table->dropColumn('province');
            $table->dropColumn('country');
        });
    }
}
