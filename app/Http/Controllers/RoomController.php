<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_Type;
use App\Service_Hotel;


class RoomController extends Controller
{
    public function listall_room()
    {
    	$dem = 1;
    	$rooms = Room::all();
    	return view('admins.rooms.list_all_room',compact('rooms', 'dem'));
    }
    public function detail_room(Room $room)
    {
    	return view('admins.rooms.detail_room', compact('room')); 
    }
    public function search_room(Request $search)
    {
        $dem = 1;
        $rooms = Room::where('room_name', 'like', '%'.$search->key_search.'%')
                        ->Orwhere('room_price', '=', $search->key_search)
                        ->Orwhere('description', 'like', '%'.$search->key_search.'%')
                        ->Orwhere('amount_people', '=', $search->key_search)
                        ->OrwhereHas('room_types', function($query) use($search){
                            $query->where('type_of_bed', 'like', '%'.$search->key_search.'%');
                        })
                        ->OrwhereHas('service_hotels', function($query) use($search){
                            $query->where('service_name', 'like', '%'.$search->key_search.'%');
                        })
                        ->get();
        return view('admins.rooms.search_room', compact('rooms', 'dem', 'search'));
    }
}

