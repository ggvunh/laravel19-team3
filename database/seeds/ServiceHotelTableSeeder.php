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
        	[
        		'service_name' => 'sapa',
        		'service_price' => '400000',
        		'description' => 'This is service massage'
        	],
        	[
        		'service_name' => 'rent a motorcycle',
        		'service_price' => '100000',
        		'description' => 'Rent for a day'
        	],
        	[
        		'service_name' => 'rent a car',
        		'service_price' => '1000000',
        		'description' => 'Rent for a day'
        	],
        	[
        		'service_name' => 'shuttle airport',
        		'service_price' => '400000',
        		'description' => 'from airport to hotel or from hotel to airport'
        	],
        	[
        		'service_name' => 'None',
        		'service_price' => '0',
        		'description' => 'from airport to hotel or from hotel to airport'
        	]

        ]);
    }
}
