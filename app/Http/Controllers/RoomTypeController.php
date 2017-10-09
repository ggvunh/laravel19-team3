<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_Type;
use App\Room;
use Illuminate\Pagination\Paginator;

class RoomTypeController extends Controller
{
	public function getRoomType($type)
	{
		$rooms = Room::where('room_type_id', $type)->paginate(3);
		return view('hotels.view_by_type_room', compact('rooms'));
	}
 
}
