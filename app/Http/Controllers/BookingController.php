<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Room;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;

class BookingController extends Controller
{
   public function getBooking()
   {
   		$dem = 1;
   		$bookings = Booking::all();
   		return view('admins.bookings.view_booking' ,compact('bookings', 'dem'));
   }

   //function search from - to date
  public function search(Request $request)
  {  	
  		$data = Input::all();
  		$arrival = $data['arrival']; 
		$from = date("Y-m-d", strtotime($arrival));
  		$departure = $data['departure'];
  		$to = date("Y-m-d", strtotime($departure));

  		$rooms = Room::where('room_status', '=', 1)
  			->where('amount_people', '=', $request->person)
  			->whereDoesntHave('booking', function($query) use($from){
  				$query->where('check_in_date', '>=', $from);	
			})
  			->whereDoesntHave('booking', function($query) use($from){
  				$query->where('check_out_date', '<=', $from);
  			})
  			->whereDoesntHave('booking', function($query) use($to){
  				$query->where('check_in_date', '>=', $to);
  			})
  			->whereDoesntHave('booking', function($query) use($to){
  				$query->where('check_out_date', '<=', $to);
  			})
			->get();
  		return view('hotels.bookings.search_booking', compact('rooms'));
  }
  public function searchName()
  {
        $data = Input::all();        
        if($data['key_search'] != '')
        {
            $dem = 1;
            $bookings = Booking::where('bookings.user_id', 'like', $search->key_search)
                ->paginate(4);
            return view('admins.bookings.search', compact('bookings', 'dem'));
        }
        else
            return redirect('/admins');
  }
}

  			