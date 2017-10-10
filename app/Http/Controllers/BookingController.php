<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;

class BookingController extends Controller
{
   public function getBooking()
   {
   		$dem = 1;
   		$bookings = Booking::all();
   		return view('admins.bookings.view_booking' ,compact('bookings', 'dem'));
   }
}
