<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
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
    
    public function login(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = Hash::make($request->password);
            $users = User::where('email', 'minar.barc@gmail.com')->first();
           
            $session = session()->put('user_data', $users);
            // dd(session()->get('user_data')->name);
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
        $users = User::all();
        $user_count = $users->count();
        $orders = Order::where('status', 2)->count();
        return view('admin.dashboard', compact('user_count', 'orders'));
    }
    public function adminDashboardUser(Request $request)
    {
        $users = User::get();
        
        return view('admin.all_user', compact('users'));
    }
    public function adminDashboardPurchase(Request $request)
    {
        $orders = Order::with('user')->get();
        // dd($orders);
        return view('admin.all_purchase', compact('orders'));
    }
    public function adminDashboardPurchaseSubmit(Request $request, $id)
    {
        $order = Order::updateOrCreate([
            'user_id' => $id,
        ],
        [
            'status' => $request->input('purchase_status'),
        ]);
        $fetch_user = User::where('id', $id)->first();
        $user_email = $fetch_user->email;
        $fetch_order = Order::where('user_id', $id)->first();
        $purchaseMail = Mail::to($user_email)->send(new PurchaseConfirmationMail($fetch_order,"Bootcamp Purchase Confirmation mail"));
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login.control');
    }

}
