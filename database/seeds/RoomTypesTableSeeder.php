<?php

use Illuminate\Database\Seeder;

class RoomTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_types')->insert([
        	['type_of_bed'=>'Standard Room', 'description' => '1 Bed'],
        	['type_of_bed'=>'Couple Room', 'description' => ' 2 Bed'],
        	['type_of_bed'=>'Deluxe Room', 'description' => '1 Bed'],
        	['type_of_bed'=>'Family Room', 'description' => '3 Bed'],
        	['type_of_bed'=>'Luxury Room', 'description' => '1 Bed']
        ]);    }
}
