<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\collection;
use App\Models\Package;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{
    public function index(Request $request) { 
        $data = Package::where('user_id',Auth::user()->id)->get();        
       
     return view("templates.Payment.index",['data'=>$data]);
 }

    public function paymentCheckout(Request $request) { 
        $checkout = Package::where('user_id', Auth::user()->id)->get();  
        
        return view("templates.Payment.checkout",['checkout'=>$checkout]);
 }

    public function paymentConfirm(Request $request) { 
        $paymentConfirm = $request->all();
        Payment::create($paymentConfirm);
        
        session()->flash('success','Payment success..!!');  
        return redirect()->route('payment-list');
        //return view("templates.Payment.checkout",['checkout'=>$checkout]);
 }

    public function paymentList(Request $request) { 
        $data = Payment::where('user_id', Auth::user()->id)->get(); 
        
        return view("templates.Payment.list",['data'=>$data]);
 }
 
    public function paymentDetails(Request $request, $id) {          
        $data = Payment::find($id);
        
        return view("templates.Payment.details",['data'=>$data]);
    }

}