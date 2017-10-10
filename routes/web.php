<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//--------------------------Home Page-------------------------
Route::get('/', 'RoomController@listAll');

Route::get('/lotus/', 'RoomController@listAll');

Route::get('/lotus/type/{type}', 'RoomTypeController@getRoomType');

Route::get('/lotus/search','RoomController@search');

Route::get('/lotus/{room}', 'RoomController@viewDetailRoom');

//----------------------------Admin----------------------------

Route::get('/admins', 'RoomController@listall_room'); ///List All Room

Route::get('admins/service','ServiceFoodController@viewService');// List All Service


Route::get('admins/search','RoomController@search_room');// Search Room

//-----Room Management-----

Route::get('admins/create','RoomController@createRoom');

Route::post('admins','RoomController@saveRoom');


//-----Booking Room-----
Route::get('/admins/bookings', 'BookingController@getBooking');

//-----Room Management-----



Route::get('admins/{room}/edit','RoomController@editRoom');

Route::put('admins','RoomController@updateRoom');

Route::get('admins/{room}/delete','RoomController@deleteRoom');

Route::get('/admins/{room}','RoomController@detail_room');

//-----Service Management-----


Route::get('admins/service/create','ServiceFoodController@createService');

Route::post('admins/service','ServiceFoodController@saveService');

Route::get('admins/service/{service}/edit','ServiceFoodController@editService');

Route::put('admins/service/{service}','ServiceFoodController@updateService');

Route::get('admins/service/{service}/delete','ServiceFoodController@deleteService');

Route::get('admins/service/{service}','ServiceFoodController@detailService');

