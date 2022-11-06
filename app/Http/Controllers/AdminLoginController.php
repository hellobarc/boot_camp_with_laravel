<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session;

class AdminLoginController extends Controller
{
    public function login(Request $request)
    {
        $method = $request->method();

        if ($request->isMethod('post')) {
            $email = $request->email;
            $password = $request->password;
            $users = Admin::where('email', $email)->first();
           
            $session = session()->put('user_data', $users);
            // dd(session()->get('user_data')->name);
            if($users->email == $email && $users->password == $password){
                return redirect()->route('admin.dashboard');
            }
            else{
                return 'Error';
            }
           
        }else{
            return view('admin.login');
        }
    }
}
