<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function loginPage()
    {
        return view('frontend.login.login');
    }
    public function registerPage()
    {
        return view('frontend.register.registration');
    }
    public function payment()
    {
        return view('frontend.payment.payment');
    }
    public function order(Request $request)
    {
        $request->validate([
            'payment_type' => 'required',
            'phone' => 'required|max:11',
            'transaction' => 'required',
 
        ],
        [
            'payment_type.required' => 'Please select Category',
            'phone.required' => 'Please Provide valid phone number',
            'transaction.required' => 'Please Provide your tranx id',
            
        ]);
        $input = $request->all();
  
       $orders =  Order::create($input);

    }

}
