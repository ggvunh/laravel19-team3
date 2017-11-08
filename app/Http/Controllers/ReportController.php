<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Booking;
use App\Book_Room;
use App\book_room_service;
use App\Service_Hotel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\DATEDIFF;
class ReportController extends Controller
{
	public function getBooking(){
		$data = input::all();
		$arrival = $data['arrival']; 
  		$from = date("Y-m-d", strtotime($arrival));
    	$departure = $data['departure'];
    	$to = date("Y-m-d", strtotime($departure));
	    	$book_room_service1 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*',  'service_hotels.*')
	    	->where('bookings.check_in_date', '>=', $from)
	    	->where('bookings.check_out_date', '<=', $to)
	    	->get();
	    	$count = 0;
	    	$count = count($book_room_service1) + $count;
	    	$days1=0;
	    	$days2=0;
	    	$days3=0;
	    	$days4=0;
	    	$room_price1 = 0;
	    	$service_price1 = 0;
	    	foreach ($book_room_service1 as  $value) {
	    	$room_price1 = $room_price1 + $value->room_price;
	    	$service_price1 = $service_price1 + $value->room_price;
	    	$days1= $days1 + ((strtotime($value->check_out_date) - strtotime($value->check_in_date)) / (60 * 60 * 24));
	   		}
	   		$room_price1 = $room_price1*$days1;
	    	$book_room_service2 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '>=', $from)
	    	->where('bookings.check_out_date', '>', $to)
	    	->get();
	    	$room_price2 = 0;
	    	$service_price2 = 0;
	    	foreach ($book_room_service2 as  $value) {
	    	$room_price2 = $room_price2 + $value->room_price;
	    	$service_price2 = $service_price2 + $value->room_price;
	    	$days2= $days2 + ((strtotime($value->check_out_date) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		$room_price2 = $room_price2*$days2;
	   		$count = count($book_room_service2) + $count;
	    	$book_room_service3 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '<', $from)
	    	->where('bookings.check_out_date', '>=', $from)
	    	->where('bookings.check_out_date', '<=', $to)
	    	->get();
	    	$room_price3 = 0;
	    	$service_price3 = 0;
	    	foreach ($book_room_service3 as  $value) {
	    	$room_price3 = $room_price3 + $value->room_price;
	    	$service_price3 = $service_price3 + $value->room_price;
	    	$days3= $days3 + ((strtotime($value->check_out_date) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		$room_price3 = $room_price3*$days3;
	   		$count = count($book_room_service3) + $count;
	    	$book_room_service4 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '<', $from)
	    	->where('bookings.check_out_date', '>', $to)
	    	->get();
	    	$room_price4 = 0;
	    	$service_price4 = 0;
	    	foreach ($book_room_service4 as  $value) {
	    	$room_price4 = $room_price4 + $value->room_price;
	    	$service_price1 = $service_price1 + $value->room_price;
	    	$days4= $days4 + ((strtotime($to) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		
	   		$room_price4 = $room_price4*$days4;
	   		$count = count($book_room_service4) + $count;
	   		$service_price = $service_price1 + $service_price2 + $service_price3 + $service_price4;
	   		$room_price = $room_price1 + $room_price2 + $room_price3 + $room_price4;
	   		$total = $service_price + $room_price;
	    
	    return view('admins.report.get', compact('book_room', 'book_room2', 'book_room3', 'book_room4', 'from', 'to', 'total', 'count', 'service_price', 'room_price', 'book_room_service1', 'book_room_service2', 'book_room_service3', 'book_room_service4'));
		}
			
		
	public function setBookingAdmin(){
		$data = input::all();
		$arrival = $data['arrival']; 
  		$from = date("Y-m-d", strtotime($arrival));
    	$departure = $data['departure'];
    	$to = date("Y-m-d", strtotime($departure));
	    	$book_room_service1 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*',  'service_hotels.*')
	    	->where('bookings.check_in_date', '>=', $from)
	    	->where('bookings.check_out_date', '<=', $to)
	    	->get();
	    	$count = 0;
	    	$count = count($book_room_service1) + $count;
	    	$days1=0;
	    	$days2=0;
	    	$days3=0;
	    	$days4=0;
	    	$room_price1 = 0;
	    	$service_price1 = 0;
	    	foreach ($book_room_service1 as  $value) {
	    	$room_price1 = $room_price1 + $value->room_price;
	    	$service_price1 = $service_price1 + $value->room_price;
	    	$days1= $days1 + ((strtotime($value->check_out_date) - strtotime($value->check_in_date)) / (60 * 60 * 24));
	   		}
	   		$room_price1 = $room_price1*$days1;
	    	$book_room_service2 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '>=', $from)
	    	->where('bookings.check_in_date', '<=', $to)
	    	->where('bookings.check_out_date', '>', $to)
	    	->get();
	    	$room_price2 = 0;
	    	$service_price2 = 0;
	    	foreach ($book_room_service2 as  $value) {
	    	$room_price2 = $room_price2 + $value->room_price;
	    	$service_price2 = $service_price2 + $value->room_price;
	    	$days2= $days2 + ((strtotime($value->check_out_date) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		$room_price2 = $room_price2*$days2;
	   		$count = count($book_room_service2) + $count;
	    	$book_room_service3 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '<', $from)
	    	->where('bookings.check_out_date', '>=', $from)
	    	->where('bookings.check_out_date', '<=', $to)
	    	->get();
	    	$room_price3 = 0;
	    	$service_price3 = 0;
	    	foreach ($book_room_service3 as  $value) {
	    	$room_price3 = $room_price3 + $value->room_price;
	    	$service_price3 = $service_price3 + $value->room_price;
	    	$days3= $days3 + ((strtotime($value->check_out_date) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		$room_price3 = $room_price3*$days3;
	   		$count = count($book_room_service3) + $count;
	    	$book_room_service4 = DB::table('book_room_services')
	    	->join('book_rooms', 'book_room_services.book_room_id', '=', 'book_rooms.id')
	    	->join('service_hotels', 'service_hotels.id', '=', 'book_room_services.service_id')
	    	->join('bookings', 'book_rooms.booking_id', '=', 'bookings.id')
	    	->join('rooms', 'rooms.id', '=', 'book_rooms.room_id')
	    	->select('book_room_services.*', 'book_rooms.*', 'bookings.*','rooms.*', 'service_hotels.*')
	    	->where('bookings.check_in_date', '<', $from)
	    	->where('bookings.check_out_date', '>', $to)
	    	->get();
	    	$room_price4 = 0;
	    	$service_price4 = 0;
	    	foreach ($book_room_service4 as  $value) {
	    	$room_price4 = $room_price4 + $value->room_price;
	    	$service_price1 = $service_price1 + $value->room_price;
	    	$days4= $days4 + ((strtotime($to) - strtotime($from)) / (60 * 60 * 24));
	   		}
	   		
	   		$room_price4 = $room_price4*$days4;
	   		$count = count($book_room_service4) + $count;
	   		$service_price = $service_price1 + $service_price2 + $service_price3 + $service_price4;
	   		$room_price = $room_price1 + $room_price2 + $room_price3 + $room_price4;
	   		$total = $service_price + $room_price;
	    
	    return view('admins.report.admin_get', compact('book_room', 'book_room2', 'book_room3', 'book_room4', 'from', 'to', 'total', 'count', 'service_price', 'room_price', 'book_room_service1', 'book_room_service2', 'book_room_service3', 'book_room_service4'));}
}