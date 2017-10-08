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

Route::get('/', function () {
    return view('index');
});
Route::get('/admins', 'RoomController@listall_room');
Route::get('admins/search','RoomController@search_room');
Route::get('admins/create','RoomController@createRoom');
Route::post('admins','RoomController@saveRoom');
Route::get('/admins/{room}','RoomController@detail_room');
