<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_Type;
use App\Room;

class RoomTypeController extends Controller
{
    public function list_room_type()
    {	
    	$roomType = Room_Type::all();
    	return view('hotels.room_types.list_room_type', compact('roomType'));
    }
}
