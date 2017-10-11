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
//-----------------About------------
Route::get('about', function(){
	return view('hotels.about');
});

Route::get('contact', function(){
	return view('hotels.contact');
});
//----------------------------Admin----------------------------

Route::get('/admins', 'RoomController@listall_room'); ///List All Room

Route::get('admins/service','ServiceHotelController@viewService');// List All Service


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


Route::get('admins/service/create','ServiceHotelController@createService');

Route::post('admins/service','ServiceHotelController@saveService');

Route::get('admins/service/{service}/edit','ServiceHotelController@editService');

Route::put('admins/service/{service}','ServiceHotelController@updateService');

Route::get('admins/service/{service}/delete','ServiceHotelController@deleteService');

Route::get('admins/service/{service}','ServiceHotelController@detailService');

