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
//Page room guest
Route::get('/', 'RoomController@view_room');
Route::get('/hotels', 'RoomController@view_room');
Route::get('/hotels/{id}', 'RoomController@view_detail_room');
Route::get('/hotels/type/{name}', 'RoomController@view_room_by_type');
//Page admin
Route::get('/admins', 'RoomController@listall_room');
Route::get('admins/search','RoomController@search_room');
Route::get('/admins/{room}','RoomController@detail_room');
