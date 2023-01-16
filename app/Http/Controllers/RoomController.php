<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    
    public function index(Request $request ) {
        $data = Room::all();        
        return view("templates.Rooms.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function createRoom(Request $request) {
        $data = $request->all();        
        Room::create($data);
        session()->flash('success','Room-type created successfully..!!');
        return redirect()->back(); 

    }
}
