<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UserTableSeeder::class);
        // $this->call(RoomTypesTableSeeder::class);
        //  $this->call(ServiceHotelTableSeeder::class);
=======
        // $this->call(UserTableSeeder::class);
        // $this->call(RoomTypesTableSeeder::class);
         $this->call(ServiceHotelTableSeeder::class);
>>>>>>> 8a4e7fd1cfcf3be247a432dfc265311085b17130
        // $this->call(ImagesTableSeeder::class);
    }
}
