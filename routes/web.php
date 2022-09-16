<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [App\Http\Controllers\ViewController::class, 'index']);
Route::get('/login/page', [App\Http\Controllers\ViewController::class, 'loginPage'])->name('login.page');
Route::get('/register/page', [App\Http\Controllers\ViewController::class, 'registerPage'])->name('registeration.page');
Route::get('/payment/page', [App\Http\Controllers\ViewController::class, 'payment'])->name('payment.page');
// Route::get('/payment/store', [App\Http\Controllers\ViewController::class, 'order'])->name('order');

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
});