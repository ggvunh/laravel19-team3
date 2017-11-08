<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Room;
use App\Room_Type;
use App\Service_Hotel;
use App\Image;
use App\Book_Room;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\roomRequest;
use App\Http\Requests\editRoomRequest;

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
        $data = Input::all();
        if($data['key_search'] != '')
        {
              $rooms = Room::where('room_price', '=', $search->key_search)
                 ->orwhereHas('room_types', function($query) use($search){
                    $query->where('type_of_bed', 'like', '%'.$search->key_search.'%');
                 })->paginate(6);
            return view('hotels.view_search', compact('rooms', 'search'));
        }
        else
        {
            return redirect('/');
        }
      
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
        $calendar=Book_Room::where('room_id',$room->id)->get();
        // dd($calendar);
    	return view('admins.rooms.detail_room', compact('room','calendar')); 
    }

    public function search_room(Request $search)
    {
        $data = Input::all();
        
        if($data['key_search'] != '')
        {
            $dem = 1;
            $rooms = Room::where('rooms.room_name', 'like', $search->key_search)
                ->Orwhere('room_price', '=', $search->key_search)
                ->Orwhere('room_status', 'like', $search->key_search)          
                ->Orwhere('amount_people', '=', $search->key_search)
                ->OrwhereHas('room_types', function($query) use($search){
                    $query->where('type_of_bed', 'like', '%'.$search->key_search.'%');
                })
                ->paginate(4);
            return view('admins.rooms.search_room', compact('rooms', 'dem', 'search'));
        }
        else
            return redirect('/admins');
    }

    public function createRoom()
    {
        $roomTypes = Room_type::all()->pluck('type_of_bed','id');
        return view('admins.rooms.createRoom',compact('roomTypes'));
    }

    public function saveRoom(roomRequest $request)
    {
        $data = Input::except('images','images1','images2');
        $file = $request->file('images');
        $filename = $file->getClientOriginalExtension();
        $request->file = $filename;
        $images = time().".".$filename;
        $destinationPath = public_path('/images/upload/rooms');
        $file->move($destinationPath, $images);
        $data['images'] = $images;
        if ($request->hasFile('images1') )
        {    
            $file1 = $request->file('images1');
            $filename1 = $file1->getClientOriginalExtension();
            $request->file = $filename1;
            $images1 = time().".".$filename;
            $destinationPath1 = public_path('/images/upload/rooms');
            $file1->move($destinationPath1, $images1);
            $data['images1'] = $images1;
        }

        if ($request->hasFile('images2') )
        {    
            $file2 = $request->file('images2');
            $filename2 = $file2->getClientOriginalExtension();
            $request->file = $filename2;
            $images2 = time().".".$filename;
            $destinationPath2 = public_path('/images/upload/rooms');
            $file2->move($destinationPath2, $images2);
            $data['images2'] = $images2;
        }

        $room = Room::create($data);
        return redirect('admins/')->withSuccess('Room has been created');
    }
    public function editRoom(Room $room)
    {
        $roomTypes=Room_type::all()->pluck('type_of_bed','id');
        $serviceHotels=Service_Hotel::all()->pluck('service_name','id');
        return view('admins.rooms.editRoom',compact('roomTypes','serviceHotels','room'));
    }
    public function updateRoom(Room $room, editRoomRequest $request)
    {
        $data=Input::all();
        
        if ($request->hasFile('images') )
        {
            $file = $request->file('images');
            $filename = $file->getClientOriginalExtension();
            $request->file = $filename;
            $images = time().".".$filename;
            $destinationPath = public_path('/images/upload/rooms');
            $file->move($destinationPath, $images);
            $data['images'] = $images;
        }
        if ($request->hasFile('images1') )
        {    
            $file1 = $request->file('images1');
            $filename1 = $file1->getClientOriginalExtension();
            $request->file = $filename1;
            $images1 = time().".".$filename;
            $destinationPath1 = public_path('/images/upload/rooms');
            $file1->move($destinationPath1, $images1);
            $data['images1'] = $images1;
        }

        if ($request->hasFile('images2') )
        {    
            $file2 = $request->file('images2');
            $filename2 = $file2->getClientOriginalExtension();
            $request->file = $filename2;
            $images2 = time().".".$filename;
            $destinationPath2 = public_path('/images/upload/rooms');
            $file2->move($destinationPath2, $images2);
            $data['images2'] = $images2;
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

