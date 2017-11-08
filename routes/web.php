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
route::get('/index/', 'RoomController@listAll')->name('index');
Route::get('/lotus/', 'RoomController@listAll');

//------------------------Booking-------------------------
//load luon danh sach rooms de booking
Route::get('/lotus/bookings/search/', 'BookingController@search')->name('search');

//--------------------Shopping Cart----------------------------

Route::group(['prefix' => 'cart'], function(){

	Route::get('/', 'BookingController@shop');

	Route::get('/destroy', 'BookingController@destroy');

	Route::get('/{room}', 'BookingController@detail_room');

	Route::get('/{id}/add', 'BookingController@add');

	Route::get('/{id}/delete', 'BookingController@delete');
	
	Route::get('/{id}/delete_in_payment', 'BookingController@delete_in_payment');

});

Route::get('/checkout', 'BookingController@checkout');

Route::post('/checkout', 'BookingController@payment');

//--------------Review Booking of customer--------------------------

Route::get('/review', 'BookingController@review');

Route::get('/review/cancel/{id}', 'BookingController@cancel');

Route::get('/message', 'BookingController@message_room');

Route::get('/check_deposit', 'BookingController@message_deposit');
//-------------------------------------------------------------------

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

Route::group(['middleware' => ['auth']], function () {
Route::group(['middleware' => ['isadmin']], function (){

    Route::group(['prefix' => 'admins'], function(){

    	Route::get('/', 'RoomController@listall_room'); ///List All Room

    	Route::get('/service','ServiceHotelController@viewService');// List All Service

		Route::get('/roomtypes','RoomTypeController@viewRoomType');// List All Room Type

		Route::get('/search','RoomController@search_room');// Search Room

		Route::get('/bookings/search','BookingController@searchbyUser');

		Route::get('/bookings','BookRoomConbtroller@view');

		//-----Room Management-----

		Route::get('create','RoomController@createRoom');

		Route::post('/','RoomController@saveRoom');

		Route::get('{room}/edit','RoomController@editRoom');

		Route::put('/{room}','RoomController@updateRoom');

		Route::get('/{room}/delete','RoomController@deleteRoom');

		Route::get('/{room}','RoomController@detail_room');

				//-----Booking Room-----
		Route::group(['prefix' => 'bookings'], function(){

			Route::get('/', 'BookingController@getBooking');

			Route::get('/{booking_id}','BookingController@detailBooking');

			Route::get('/{booking_id}/{room_id}/addservice','BookingController@addService');

			Route::post('/{booking_id}/{room_id}','BookingController@saveService');

			Route::get('/{booking_id}/{room_id}/{service}/delete','BookingController@deleteService');

			Route::get('/{booking_id}/checkout','BookingController@checkoutAdmin');

		});
	
		//-----Room Type Management-----

		Route::group(['prefix' => 'roomtypes'], function(){

			Route::get('/create','RoomTypeController@createRoomType');

			Route::post('/','RoomTypeController@saveRoomType');

			Route::get('/{roomtype}/edit','RoomTypeController@editRoomType');

			Route::put('/{roomtype}','RoomTypeController@updateRoomType');

			Route::get('/{roomtype}/delete','RoomTypeController@deleteRoomType');

			Route::get('/{roomtype}','RoomTypeController@detailRoomType');

		});

		//-----Service Management-----

		Route::group(['prefix' => 'service'], function(){

			Route::get('/create','ServiceHotelController@createService');

			Route::post('/','ServiceHotelController@saveService');

			Route::get('/{service}/edit','ServiceHotelController@editService');

			Route::put('/{service}','ServiceHotelController@updateService');

			Route::get('/{service}/delete','ServiceHotelController@deleteService');

			Route::get('/{service}','ServiceHotelController@detailService');
		});

		//route promotion
		Route::group(['prefix' => 'promotions'], function(){

			Route::get('/', 'PromotionController@get');

			Route::get('/index', 'PromotionController@get')->name('admins/promotions/index');
			Route::get('/show/{id}', 'PromotionController@show')->name('admins.promotions.show');

			Route::get('/create', 'PromotionController@create');

			 Route::get('/{id}', 'PromotionController@show');

			Route::get('/{id}/delete', 'PromotionController@delete')->name('admins/promotions/delete');

			Route::post('/', 'PromotionController@save');

			Route::get('/edit/{id}', 'PromotionController@edit')->name('admins/promotions/edit');
			Route::get('/update/{id}', 'PromotionController@update')->name('admins/promotions/update');

			Route::put('/{promotion}', 'PromotionController@update');
		});


		//route user management
		Route::group(['prefix' => 'user_management'], function(){
			Route::get('/', 'UserController@index')->name('admins/user_management');
			Route::get('/index', 'UserController@index')->name('admins/user_management/index');

			Route::get('/create', 'UserController@create')->name('admins/user_management/create');
			Route::post('/', 'UserController@save');

			Route::get('/show/{id}', 'UserController@show')->name('admins/user_management/show');

			Route::get('/{id}/delete', 'UserController@delete')->name('admins/user_management/delete');
			Route::get('/edit/{id}', 'UserController@edit')->name('admins/user_management/edit');
			Route::get('/update/{id}', 'UserController@update')->name('admins/user_management/update');

			Route::put('/{user}', 'UserController@update');
		});

		//route report
		Route::group(['prefix' => 'report'], function(){
			route::get('/admin', function(){
			return view('admins.report.admin');
										})->name('admins/report/admin');
		route::get('/get/', 'ReportController@setBookingAdmin')->name('admins/report/get');

		});
    });
});
});

		Auth::routes();

		Route::get('/home', 'HomeController@index')->name('home');

//route report
		route::get('/report/', function(){
			return view('admins.report.user');
		})->name('report');
		route::get('report/get/', 'ReportController@getBooking')->name('report/get');

//route user management

		route::get('user_management/profile/{id}', 'UserController@getprofile')->name('user/profile');
		route::get('user_management/editprofile/{id}', 'UserController@editProfile')->name('user_management/editprofile');
		Route::get('user_management/update/{id}', 'UserController@updateProfile');
		Route::put('user_management/{id}', 'UserController@updateProfile')->name('user_management/update');

