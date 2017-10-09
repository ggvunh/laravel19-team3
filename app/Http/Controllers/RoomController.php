<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Room;
use App\Room_Type;
use App\Service_Hotel;
use App\Image;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\roomRequest;

class RoomController extends Controller
{
    //-----------------------------------page home--------------------------------------
    //list all room
    public function listAll()
    {
        $rooms = Room::paginate(9);
        return view('index', compact('rooms'));

    }

    public function viewDetailRoom(Room $room)
    {
        return view('hotels.view_detail_room', compact('room'));
    }

    public function listRoomTypeByName($name)
    {
        $roomType = Room_Type::with('rooms')->where('type_of_bed',$name)->first();
        $rooms = $roomType->rooms;
        return redirect('hotels.view_by_typeRoom', compact('rooms', 'roomType'));
    }

    //----------------------------------admin-------------------------------------------
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

    public function createRoom()
    {
        $roomTypes = Room_type::all()->pluck('type_of_bed','id');
        $images = Image::all()->pluck('url','id');
        $serviceHotels = Service_Hotel::all()->pluck('service_name','id');
        return view('admins.createRoom',compact('roomTypes', 'images', 'serviceHotels'));
    }

    public function saveRoom(roomRequest $requuest)
    {
        $data = Input::all();
        $room = Room::create($data);
        return redirect('admins/')->withSuccess('Room has been created');
    }
    public function editRoom(Room $room)
    {
        $roomTypes=Room_type::all()->pluck('type_of_bed','id');
        $images=Image::all()->pluck('url','id');
        $serviceHotels=Service_Hotel::all()->pluck('service_name','id');
        return view('admins.editRoom',compact('roomTypes', 'images', 'serviceHotels','room'));
    }
    public function updateRoom(Room $room, roomRequest $requuest)
    {
        $data=Input::all();
        $room->update($data);
        return redirect('admins/')->withSuccess('Room has been updated');
    }
    public function deleteRoom(Room $room)
    {
        $room->delete();
        return redirect('admins/')->withSuccess('Room has been deleted');
    }
}

