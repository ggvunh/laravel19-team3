<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room_Type as RoomType;
use App\Room;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\roomTypeRequest;
use Illuminate\Support\Facades\Input;

class RoomTypeController extends Controller
{
	public function getRoomType($type)
	{
		$rooms = Room::where('room_type_id', $type)->paginate(3);
		return view('hotels.view_by_type_room', compact('rooms'));
	}
	public function viewRoomType()
	{
		$dem=1;
		$roomtypes=RoomType::all();
		return view('admins.roomtypes.index',compact('roomtypes','dem'));
	}
	public function detailRoomType(RoomType $roomtype)
	{
		return view('admins.roomtypes.detail',compact('roomtype'));
	}
	public function createRoomType()
	{
		return view('admins.roomtypes.create');
	}
	public function saveRoomType(roomTypeRequest $request)
	{
		$data=Input::all();
		$roomtype=RoomType::create($data);
		return redirect('admins/roomtypes')->withSuccess('New room type has been created.');
	}
	public function editRoomType(RoomType $roomtype)
	{
		return view('admins.roomtypes.edit',compact('roomtype'));
	}
	public function updateRoomType(RoomType $roomtype,roomTypeRequest $request)
	{
		$data=Input::all();
		$roomtype->update($data);
		return redirect('admins/roomtypes/'.$roomtype->id)->withSuccess('Room type has been updated.');
	}
	public function deleteRoomType(RoomType $roomtype)
	{
		$roomtype->delete();
		return redirect('admins/roomtypes')->withSuccess('Room type has been deleted.');
	}
 
}
