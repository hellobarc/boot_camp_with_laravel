<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Session;
use Mail;
use App\Mail\PurchaseConfirmationMail;

class AdminController extends Controller
{
    
    public function adminDashboard(Request $request)
    {
        $users = User::all();
        $user_count = $users->count();
        $orders = Order::where('status', 2)->count();
        $pending_orders = Order::where('status', 1)->count();
        return view('admin.dashboard', compact('user_count', 'orders', 'pending_orders'));
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
