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
}

