<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Book_Room;
use App\Room;

use App\Room_Type;

use App\Book_Room_Service;
use App\Service_Hotel;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Cart;
use App\User;


class BookingController extends Controller
{
   public function getBooking()
   {
   		$bookings = Booking::all();
   		return view('admins.bookings.view_booking' ,compact('bookings'));
   }
   public function detailBooking($booking_id)
   {
      $bookroom=Book_Room::where('booking_id', $booking_id)->get();
      // dd($bookroom);
      return view('admins.bookings.detail', compact('bookroom'));
   }

   public function detailRoom($booking_id, $room_id)
   {
      $bookroom=Book_Room::where('booking_id',$booking_id)->where('room_id',$room_id)->first();
      // dd($bookroom);
      return view('admins.bookings.detailRoom',compact('bookroom'));
   }
   public function addService($booking_id, $room_id)
   {
      $bookroom=Book_Room::where('booking_id',$booking_id)->where('room_id',$room_id)->first();
      $services=Service_Hotel::all()->pluck('service_name','id');
      return view('admins.bookings.addService',compact('bookroom','services'));
   }
   public function saveService($booking_id, $room_id)
   {
      $bookroom=Book_Room::where('booking_id',$booking_id)->where('room_id',$room_id)->first();
      $data=Input::all();
      $data['book_room_id']=$bookroom->id;
      $bookroomservice=Book_Room_Service::create($data);
      return redirect('admins/bookings/'.$bookroom->booking_id.'/'.$bookroom->room_id)->withSuccess('Service has been added');
   }

   public function detail_room(Room $room)
   {
      return view('hotels.bookings.detail_room', compact('room'));
   }

   //function search from - to date
  public function search(Request $request)
  {  	
    		$data = Input::all();
    		$arrival = $data['arrival']; 
  		  $from = date("Y-m-d", strtotime($arrival));
    		$departure = $data['departure'];
    		$to = date("Y-m-d", strtotime($departure));
        $person = $data['person'];

        $request->session()->put('arrival', $arrival);
        $request->session()->put('departure', $departure);
        $request->session()->put('person', $person);

    		$rooms = Room::where('room_status', '=', 1 )
    			->where('amount_people', $request->person)        
          ->whereDoesntHave('bookings', function($query) use($from){
            $query->where('check_in_date', '<=', $from)->where('check_out_date', '>=', $from);  
          })
          ->whereDoesntHave('bookings', function($query) use($to){
            $query->where('check_in_date', '<=', $to)->where('check_out_date', '>=', $to);;
          })
          ->ORwhereDoesntHave('bookings', function($query) use($from, $to){
            $query->where('check_in_date', '>=', $from)->where('check_out_date', '>=', $to);
          })

  			->get();
    		  return view('hotels.bookings.search_booking', compact('rooms'));
  }

  //shoping
  public function shop(Request $request)
  {
    $arrival = $request->session()->get('arrival');
    $departure = $request->session()->get('departure');
    $person = $request->session()->get('person');
    return view('hotels.bookings.shopping_cart', compact('arrival', 'departure', 'person'));
  }

  //shopping cart
  public function add(Request $request,$id)
  {

      $arrival = strtotime($request->session()->get('arrival'));
      $departure = strtotime($request->session()->get('departure'));
      $room = Room::find($id);
        Cart::add(
          [
            'id' => $room->id,
            'name' => $room->room_types->type_of_bed,
            'qty' => ($departure - $arrival)/3600/24,
            'price' => $room->room_price, 
            'options' => 
              [
                'room_name' => $room->room_name,
                'person' => $room->amount_people,
                'images' => $room->images            
              ]
          ]);
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
      return redirect('/');
  }

  //checkout
  public function checkout(Request $request)
  {

      return view('hotels.bookings.checkout');
  }

  //payment
  public function payment(Request $request)
  {
    $arrival = date("Y-m-d",strtotime($request->session()->get('arrival')));
    $departure = date("Y-m-d",strtotime($request->session()->get('departure')));

    $user = new User();
    $user->first_name = $request->txtFirst_name;
    $user->last_name = $request->txtLast_name;
    $user->address = $request->txtAddress;
    $user->city = $request->txtCity;
    $user->province = $request->txtProvince;
    $user->country = $request->txtCountry;
    $user->email = $request->txtEmail;
    $user->phone_number = $request->txtPhone;
    $user->password = $request->txtPassword;
    $user->role = 0;
    $user->deposit = 0;
    $user->save();

    $booking = new Booking();
    $booking->user_id = $user->id;
    $booking->check_in_date =  $arrival;
    $booking->check_out_date = $departure;
    $booking->total = (float)(Cart::total());
    $booking->booking_code = str_random(6);
    $booking->status = 1;
    $booking->save();

    foreach (Cart::content() as $row) 
    {
      $book_room = new Book_Room();
      $book_room->room_id = $row->id;
      $book_room->booking_id = $booking->id;
      $book_room->save();
    }

    Session::forget('cart');
    return redirect('/');
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

  			