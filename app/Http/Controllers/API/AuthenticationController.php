<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Order;
use Auth;
use Illuminate\Support\Facades\Validator;
class AuthenticationController extends Controller
{
    public function register(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password'=> 'required',
            'confirm_password' => 'required|same:password',
        ]);

        if( $validation->fails())
        {
            $response = [
                'success' => false,
                'message' => $validation->errors(),
            ];
            
            return response()->json($response, 400);
        }

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        $response = [
            'success' => true,
            'data' => $success,
            'message' => 'User Registered Successfully',
        ];
        return response()->json($response, 200);

    }
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            $success['user_id'] = $user->id;
    
            $response = [
                'success' => true,
                'data' => $success,
                'message' => 'User Login Successfully',
            ];
            return response()->json($response, 200);
        }else{
            $response = [
                'success' => false,
                'message' => 'Unauthorises',
            ];
            return response()->json($response);
        }
    }
    public function logout(Request $request)
    {
        auth('sanctum')->user()->currentAccessToken()->delete();
        $response = [
            'success' => true,
            'message' => 'User logout Successfully',
        ];
        return response()->json($response);
    }

    public function order(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'payment_type' => 'required',
            'phone' => 'required|max:15',
            'transaction'=> 'required',
        ]);

        if( $validation->fails())
        {
            $response = [
                'success' => false,
                'message' => $validation->errors(),
            ];
            
            return response()->json($response, 400);
        }

        $input =  $request->input();

        $user = auth('sanctum')->user();        

       // dd($user);
           

       $order = Order::create([
                 'payment_type'=>   $input['payment_type'] ,
                 'phone'=>   $input['phone'],
                 'transaction'=>  $input['transaction']  ,
                 'product_id'=> $input['product_id'],
                 'user_id'=>   $user->id, 
                 'status'=>    $input['status']
        ]);

        $response = [
            'success' => true,
            'data' =>  $order ,
            'message' => 'Order stored Successfully',
        ];
        return response()->json($response, 200);

    }
}
