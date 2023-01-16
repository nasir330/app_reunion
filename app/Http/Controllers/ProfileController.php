<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //index
    public function index(Request $request) {
        $profiles = Profile::where('user_id',Auth::user()->id)->first();       
               
        return view("templates.Users.profile", ['profiles'=>$profiles]);
    }
    public function store(Request $request) {
        $data = $request->all();
        Profile::create($data);
        session()->flash('success','Submission success..!!');
        return redirect()->back(); 
    }
}
