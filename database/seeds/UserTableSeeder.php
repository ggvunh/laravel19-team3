<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	['username'=>'tien', 'email'=>'tien@gmail.com', 'password'=>'123456789', 'phone_number'=>'915121', 'role'=>'1', 'deposit'=>'23120'],
        	['username'=>'linh', 'email'=>'linh@gmail.com', 'password'=>'123456789', 'phone_number'=>'715131', 'role'=>'1', 'deposit'=>'232022'],
        	['username'=>'luan', 'email'=>'luan234@gmail.com', 'password'=>'123456789', 'phone_number'=>'771', 'role'=>'1', 'deposit'=>'42340']
        ]);
    }
}
