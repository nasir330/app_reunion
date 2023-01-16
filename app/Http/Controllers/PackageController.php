<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tshirt;
use App\Models\Package;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    //
    public function index(Request $request) {          
           $data = Tshirt::all();             
           $participants = Package::where('user_id',Auth::user()->id)->get();
           //$package = Package::find($package->tShirt_id)->getTshirt; 
           //return $package;
        return view("templates.Package.index",['data'=>$data,'participants'=>$participants]);
    }
    public function submitParticipant(Request $request) {          
           $data = $request->all();           
          //return $data;
           Package::create($data);
        
           session()->flash('success','Participant add success..!!');  
           return redirect()->back();  
    }
    public function packageEdit(Request $request, $id) {          
          $data = Package::where('user_id',$id)->get();
          
          return view("templates.Package.edit",['data'=>$data]);
    }
    public function fetchPackage(Request $request, $id) {          
          $data = Package::where('user_id',$id)->get();
          
          return view("templates.Package.edit",['data'=>$data]);
    }
    public function packageDelete($id) {          
       $delete = Package::find($id)->delete();
       session()->flash('success','Record Deleted!!');  
       return redirect()->back(); 
    }
}
