<?php

use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('room_types')->insert([
        	['type_of_bed' => 'Standard Room', 'description' => 'This is 1 bed'],
        	['type_of_bed' => 'Couple Room', 'description' => 'This is 2 bed'],
        	['type_of_bed' => 'Family Room', 'description' => 'This is >3 bed'],
        	['type_of_bed' => 'Deluxe Room', 'description' => 'This is vip bed']
        ]);

    }
}
