<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingSource;
use App\Models\IncomeSource;

class SourceController extends Controller
{
    
    public function index(Request $request ) {
        $data = BookingSource::all();        
        return view("templates.Source.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }

    public function incomeIndex(Request $request ) {
        $data = IncomeSource::all();        
        return view("templates.Source.Income.index", ['data'=>$data]);
       // session()->flash('success','Invoice created successfully..!!');      
        //return redirect()->back();        
    }
    
    public function createSource(Request $request) {
        $data = $request->all();        
        BookingSource::create($data);
        session()->flash('success','New Source created successfully..!!');
        return redirect()->back(); 

    }

    public function createIncomeSource(Request $request) {
        $data = $request->all();        
        IncomeSource::create($data);
        session()->flash('success','New Income Source created successfully..!!');
        return redirect()->back(); 

    }
}