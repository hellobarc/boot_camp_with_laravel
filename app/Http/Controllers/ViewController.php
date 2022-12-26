<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use App\Models\Admin;
use App\Models\UserContactList;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\PurchaseConfirmationMail;

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
    public function paymentHistory_2(Request $request)
    {
        $orders = Order::where('user_id', 15)->get();
        return view('frontend.order.user_order', compact('orders'));
    }
    public function contactWithUs(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'contact' => 'required|min:11',
            'user_message' => 'nullable|string',
 
        ],
        [
            'email.required' => 'Please enter a vaild email address',
            'contact.required' => 'Please Provide valid phone number',        
        ]);
        UserContactList::insert([
            'email' => $request->email,
            'contact' => $request->contact,
            'user_message' => $request->user_message,
        ]);
        return redirect()->back()->with('success', 'We will connect with you soon');
    }
    

}
