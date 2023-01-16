<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;
class TshirtController extends Controller
{
    public function index(Request $request ) {
        $data = Tshirt::all();        
        return view("templates.Tshirt.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }
    public function store(Request $request ) {
        $data = $request->all();
        Tshirt::create($data);
        
        session()->flash('success','T-shirt created successfully..!!');  
        return redirect()->back();                 
    }
    public function edit(Request $request, $id) {
        $data = Tshirt::findOrFail($id);
        return $data;               
    }
    public function fetchTshirts(Request $request) {
        $data = Tshirt::all();
        return response()->json($data);              
    }
    public function fetchTshirtsData(Request $request, $id) {
        $data = Tshirt::findOrFail($id);
        return response()->json($data);              
    }
}
