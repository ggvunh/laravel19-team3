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
        $rooms = Room::OrderBy('id' , 'desc')->paginate(9);
        return view('index', compact('rooms'));

    }

    public function viewDetailRoom(Room $room)
    {
        return view('hotels.view_detail_room', compact('room'));
    }

    public function search(Request $search)
    {
        $rooms = Room::where('room_price', '=', $search->key_search)
            ->orwhereHas('room_types', function($query) use($search){
                $query->where('type_of_bed', 'like', '%'.$search->key_search.'%');
            })->get();
        return view('hotels.view_search', compact('rooms', 'search'));
    }


    //----------------------------------admin-------------------------------------------
    public function listall_room()
    {
    	$dem = 1;
    	$rooms = Room::OrderBy('id' , 'desc')->paginate(9);
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
            ->Orwhere('room_status', '=', $search->key_search)
            ->Orwhere('description', 'like', '%'.$search->key_search.'%')
            ->Orwhere('amount_people', '=', $search->key_search)
            ->OrwhereHas('room_types', function($query) use($search){
                $query->where('type_of_bed', 'like', '%'.$search->key_search.'%');
            })
            ->get();
        return view('admins.rooms.search_room', compact('rooms', 'dem', 'search'));
    }

    public function createRoom()
    {
        $roomTypes = Room_type::all()->pluck('type_of_bed','id');
        return view('admins.rooms.createRoom',compact('roomTypes'));
    }

    public function saveRoom(roomRequest $request)
    {
        $data = Input::all();
        if($request->hasFile('images'))
        {
            //<input type="file" name="images">
            $file = $request->file('images');
            $filename = $file->getClientOriginalExtension();
            $request->file = $filename;
            $images = time().".".$filename;
            $destinationPath = public_path('/images/upload/rooms');
            $file->move($destinationPath, $images);
            $data['images'] = $images;
        }
        else
        {
            $request->file = "";
        }
        $room = Room::create($data);
        return redirect('admins/')->withSuccess('Room has been created');
    }
    public function editRoom(Room $room)
    {
        $roomTypes=Room_type::all()->pluck('type_of_bed','id');
        $images=Image::all()->pluck('url','id');
        $serviceHotels=Service_Hotel::all()->pluck('service_name','id');
        return view('admins.rooms.editRoom',compact('roomTypes', 'images', 'serviceHotels','room'));
    }
    public function updateRoom(Room $room, roomRequest $request)
    {
        $data=Input::all();
         if($request->hasFile('images'))
        {
            //<input type="file" name="images">
            $file = $request->file('images');
            $filename = $file->getClientOriginalExtension();
            $request->file = $filename;
            $images = time().".".$filename;
            $destinationPath = public_path('/images/upload/rooms');
            $file->move($destinationPath, $images);
            $data['images'] = $images;
        }
        else
        {
            $request->file = "";
        }
        $room->update($data);

        return redirect('admins/')->withSuccess('Room has been updated');
    }
    public function deleteRoom(Room $room)
    {
        $room->delete();
        return redirect('admins/')->withSuccess('Room has been deleted');
    }
}

