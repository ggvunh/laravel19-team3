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
use Illuminate\Support\Facades\Mail;
use Cart;
use App\User;
use App\Mail\SendMailController;
use Twilio;
use App\Promotion;


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
      $booking=Booking::where('id',$booking_id)->first();
      return view('admins.bookings.detail', compact('bookroom','booking'));
   }

   public function detailRoom($booking_id, $room_id)
   {
      $bookroom=Book_Room::where('booking_id',$booking_id)->where('room_id',$room_id)->first();
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
      return redirect('admins/bookings/'.$bookroom->booking_id)->withSuccess('Service has been added');
   }
   public function deleteService($booking_id, $room_id, Book_Room_Service $service)
   {
      $service->delete();
      return redirect('admins/bookings/'.$booking_id)->withSuccess('Service has been deleted');
   }
   public function checkoutAdmin($booking_id, Book_Room_Service $service)
   {
    $booking=Booking::where('id',$booking_id)->first();
    $bookroom=Book_Room::where('booking_id',$booking_id)->get();
    $roomtotal = 0 ;
    $servicetotal= 0 ;
    foreach ($bookroom as $br) {
      $roomtotal += $br->room->room_price;
      foreach ($br->services as $service) {
              $servicetotal += $service->service_price * $service->pivot->unit;
            }      
    }
    return view('admins.bookings.checkout',compact('booking','bookroom','roomtotal','servicetotal'));
   }
   public function searchbyUser()
   {
    $data= Input::all();
    $search=$data['key_search'];
    $bookings=Booking::whereHas('user', function($query) use($search){
        $query->where('last_name', 'like',"%$search%")->orWhere('booking_code','like',"$search")->orWhere('first_name','like',"%$search%");
    })->get();
    return view('admins.bookings.search_user',compact('bookings'));
   }

   public function detail_room(Room $room)
   {
      return view('hotels.bookings.detail_room', compact('room'));
   }

   //function search from - to date----------------------------------------------------
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
          ->where('amount_people','=',$request->person)        
          ->whereDoesntHave('bookings', function($query) use($from){
            $query->where('check_in_date', '<=', $from)->where('check_out_date', '>=', $from);  
          })
          ->whereDoesntHave('bookings', function($query) use($to){
            $query->where('check_in_date', '<=', $to)->where('check_out_date', '>=', $to);
          })
          ->whereDoesntHave('bookings', function($query) use($from, $to){
            $query->where('check_in_date', '>=', $from)->where('check_out_date', '<=', $to);
          })
          ->take(5)->paginate(5);
          if(count($rooms) == 0)
          {
            return redirect('/message');
          }
          else
    		  return view('hotels.bookings.search_booking', compact('rooms'));
  }

  //------------------------------shoping--------------------------------------
  public function shop(Request $request)
  {
    $dem = 0;
    $arrival = $request->session()->get('arrival');
    $departure = $request->session()->get('departure');
    $person = $request->session()->get('person');
    return view('hotels.bookings.shopping_cart', compact('arrival', 'departure', 'person', 'dem'));
  }

  //shopping cart
  public function add(Request $request,$id)
  {
          $arrival = strtotime($request->session()->get('arrival'));
          $departure = strtotime($request->session()->get('departure'));
          $room = Room::find($id);
          $price = (double)$room->room_price;
          // var_dump($price); exit();
          Cart::add(
          [
            'id' => $room->id,
            'name' => $room->room_types->type_of_bed,
            'qty' => ($departure - $arrival)/3600/24,
            'price' => $price, 
            'options' => 
              [
                'id' => $room->id,
                'qty' => ($departure - $arrival)/3600/24,
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

  //delete 1 order in checkout
  public function delete_in_payment($id)
  {
      Cart::remove($id);
      return redirect('/checkout');
  }

  public function destroy()
  {
      Cart::destroy();
      return redirect('/');
  }

  //checkout
  public function checkout(Request $request)
  {
      if(!Auth::check())
      {
          return redirect('/register');
      }
      else
      {
        if(count(Cart::content()) == 0)
          return redirect('/cart');
        else
        return view('hotels.bookings.checkout');
      }
      
  }

  //
  public function review()
  {
      if(Auth::check())
      {
        $bookings = Booking::where('user_id', Auth::id())->get();

        foreach ($bookings as $bk)
        {
           if($bk->user_id == Auth::id())
          {
           return view('hotels.bookings.review_booking', compact('bookings'));
          }
        }       
      }
      else
      {
        return redirect('/login');
      }
  }

  public function cancel($id)
  {
      $booking = Booking::find($id);
      $booking->status = 0;
      $admin = User::where('role','=' ,1)->first();
      $deposit = $admin->deposit - ( $booking->total - $booking->total*0.2);
      $admin->deposit = $deposit;
      $admin->save();
      $user = $booking->user;
      $user->deposit = $user->deposit + $booking->total - $booking->total*0.2;
      $user->save(); 
      $booking->save();
      Session::forget('/cart');
      Auth::logout();
      return redirect('/');
  }

  public function message_room()
  {
    return view('hotels.bookings.message');
  }

  public function message_deposit()
  {
    return view('hotels.bookings.check_deposit');
  }
  //payment
  public function payment(Request $request)
  {
        $data = Input::all();
        $arrival = date("Y-m-d",strtotime($request->session()->get('arrival')));
        $departure = date("Y-m-d",strtotime($request->session()->get('departure')));

        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->check_in_date =  $arrival;
        $booking->check_out_date = $departure;
     
        $promotion = Promotion::where('code', $data['promotion_code'])->first();
        $request->session()->put('promotion_code', $data['promotion_code']);
        if(count($promotion) > 0)
        {
          $booking->promotion_id = $promotion->id;
          $booking->total = (double)Cart::total() + ((double)Cart::total())*$promotion->discount;
        }
        else
        {
            
            $booking->total = (double)Cart::total();
        }
        
        $user = User::where('role',1)->first();
          $user->deposit =  $user->deposit + $booking->total;
          $user->save();

        if(Auth::user()->deposit < $booking->total)
        {
           return redirect('check_deposit');
        }
        $booking->booking_code = (strtoupper(str_random(6)));
        $code = $booking->booking_code;
        $booking->status = 1;
        $booking->save();
        
        foreach (Cart::content() as $row) 
        {
          $book_room = new Book_Room();
          $book_room->room_id = $row->id;
          $book_room->booking_id = $booking->id;
          $book_room->save();
        }

        $usermail = User::findOrFail(Auth::id());
        $bookingmail = Booking::findOrFail($booking->id);
        Mail::to($usermail)->send(new SendMailController($bookingmail));
        Twilio::message('+84'.Auth::user()->phone_number,'Code Booking of '.$code);
        Session::forget('/cart');
      return redirect('/review');

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

  			