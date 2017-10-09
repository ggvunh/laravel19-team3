<?php

use Illuminate\Database\Seeder;

class ServiceHotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_hotels')->insert([
        	['service_name'=>'Breakfeast','service_price'=>'240000','description'=>'Breakfeast Buffet per person at Hotel'],
        	['service_name'=>'Rent Motor','service_price'=>'100000','description'=>'Rent a Motorbike for a day'],
        	['service_name'=>'Rent Car','service_price'=>'400000','description'=>'Rent a Car for a day'],
        	['service_name'=>'Shuttle Airport','service_price'=>'180000','description'=>'From Airport to Hotel and vice versa'],
        ]);
    }
}
