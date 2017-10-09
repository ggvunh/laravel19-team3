<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
           ['id' => '1', 'url' => 'img-1.jpg'],
           ['id' => '2', 'url' => 'img-2.jpg'],
           ['id' => '3', 'url' => 'img-3.jpg'],
           ['id' => '4', 'url' => 'img-4.jpg'],
           ['id' => '5', 'url' => 'img-5.jpg'],
           ['id' => '6', 'url' => 'img-6.jpg'],
           ['id' => '7', 'url' => 'img-7.jpg'],
           ['id' => '8', 'url' => 'img-8.jpg'],
           ['id' => '9', 'url' => 'img-9.jpg'],
           ['id' => '10', 'url' => 'img-10.jpg'],
           ['id' => '11', 'url' => 'img-11.jpg'],
           ['id' => '12', 'url' => 'img-12.jpg']
       ]);    }
}
