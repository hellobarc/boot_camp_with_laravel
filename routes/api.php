<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthenticationController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthenticationController::class)->group(function(){
    Route::post('login', 'login')->name('loginAuth');
    Route::post('register', 'register')->name('registrationAuth');
    Route::post('logout', 'logout')->name('logoutAuth');
    Route::post('payment/store', 'order')->name('order');
    Route::post('discount', 'discountEmail')->name('discount');
    Route::get('user-info', 'userInfo')->name('user_info');
    Route::get('discount-email', 'is_exist')->name('discount_email');
    Route::get('payment-history', 'paymentHistory')->name('payment.history');
});
