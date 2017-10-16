<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Book_Room;
use App\Room;
use Illuminate\Support\Facades\Input;

use Cart;

use Illuminate\Pagination\Paginator;


class BookingController extends Controller
{
   public function getBooking()
   {
   		$dem = 1;
   		$bookings = Book_Room::all();
   		return view('admins.bookings.view_booking' ,compact('bookings', 'dem'));
   }
   public function detailBooking(Book_room $booking)
   {
      return view('admins.bookings.detail',compact('booking'));
   }

   //function search from - to date
  public function search(Request $request)
  {  	
  		$data = Input::all();
  		$arrival = $data['arrival']; 
		  $from = date("Y-m-d", strtotime($arrival));
  		$departure = $data['departure'];
  		$to = date("Y-m-d", strtotime($departure));

  		$rooms = Room::where('room_status', '=', 1 )
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

  //shoping
  public function shop()
  {
     return view('hotels.bookings.shopping_cart');
  }
  //shopping cart
  public function add($id)
  {
      $room = Room::find($id);
      Cart::add(['id' => $room->id, 'name' => $room->room_types->type_of_bed, 'qty' => 1, 'price' => $room->room_price]);

      return redirect('/cart');

  }

  //delete 1 order
  public function delete($id)
  {
      Cart::remove($id);
      return redirect('/cart');
  }

  public function destroy()
  {
      Cart::destroy();
      return redirect('/cart');
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

  			