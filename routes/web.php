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

Route::get('/lotus/type/{name}', 'RoomController@listRoomTypeByName');

Route::get('/lotus/{room}', 'RoomController@viewDetailRoom');

//----------------------------Admin----------------------------

Route::get('/admins', 'RoomController@listall_room');

Route::get('admins/search','RoomController@search_room');

Route::get('admins/create','RoomController@createRoom');

Route::post('admins','RoomController@saveRoom');
<<<<<<< HEAD

=======
Route::get('admins/{room}/edit','RoomController@editRoom');
Route::put('admins','RoomController@updateRoom');
Route::get('admins/{room}/delete','RoomController@deleteRoom');
>>>>>>> 1f19475b3605d6a08b5d25d031298b3c9f0c12dd
Route::get('/admins/{room}','RoomController@detail_room');
