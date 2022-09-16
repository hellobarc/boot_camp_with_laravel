<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Products;

class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('frontend.index', compact('products'));
    }

    public function loginPage()
    {
        return view('frontend.login.login');
    }
    public function registerPage()
    {
        return view('frontend.register.registration');
    }
    public function payment($id)
    {
        $products =  Products::find($id);
        return view('frontend.payment.payment', compact('products'));
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
