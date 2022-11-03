<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
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
    
    public function login(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = Hash::make($request->password);
            $users = User::where('email', 'minar.barc@gmail.com')->first();
           
            // $session = Session::set('user_data', $users);
            if($users->email == $email){
                return redirect()->route('admin.dashboard');
            }
            else{
                return 'Error';
            }
           
        }else{
            return view('admin.login');
        }
    }
    public function adminDashboard(Request $request)
    {
        return view('admin.dashboard');
    }
    public function adminDashboardUser(Request $request)
    {
        $users = User::get();
        // dd($users);
        return view('admin.all_user', compact('users'));
    }
    public function adminDashboardPurchase(Request $request)
    {
        $orders = Order::with('user')->get();
        // dd($orders);
        // foreach($orders as $order)
        // {
        //     $user_name = User::where('id',)
        // }
        return view('admin.all_purchase', compact('orders'));
    }

}
