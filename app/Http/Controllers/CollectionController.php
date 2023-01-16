<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\BookingSource;
use App\Models\IncomeSource;
class CollectionController extends Controller
{
    // total Romm collectioin
    public function index(Request $request ) {
        $rooms = Room::all();
        $bookingSource = BookingSource::all();
        $incomeSource = IncomeSource::all();        
        return view("templates.Invoice.create", ['rooms'=>$rooms, 'bookingSource'=>$bookingSource, 'incomeSource'=>$incomeSource]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function test(Request $request ) {
        $rooms = Room::all();
        $bookingSource = BookingSource::all();
        $incomeSource = IncomeSource::all();        
        return view("templates.Invoice.test", ['rooms'=>$rooms, 'bookingSource'=>$bookingSource, 'incomeSource'=>$incomeSource]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function fetchRooms() {
        $rooms = Room::all();
            
        return response()->json([
            'rooms'=>$rooms,
        ]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }
}
