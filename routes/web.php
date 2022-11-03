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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\ViewController::class, 'index'])->name('index');
Route::get('/login/page', [App\Http\Controllers\ViewController::class, 'loginPage'])->name('login.page');
Route::get('/register/page', [App\Http\Controllers\ViewController::class, 'registerPage'])->name('registeration.page');
Route::get('/payment/page/{id?}', [App\Http\Controllers\ViewController::class, 'payment'])->name('payment.page');
Route::get('/payment-history_2', [App\Http\Controllers\ViewController::class, 'paymentHistory_2'])->name('payment.history.2');

Route::controller(AuthController::class)->group(function(){
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin-dashboard', [App\Http\Controllers\ViewController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin-dashboard-user', [App\Http\Controllers\ViewController::class, 'adminDashboardUser'])->name('admin.dashboard.user');
Route::get('/admin-dashboard-purchase', [App\Http\Controllers\ViewController::class, 'adminDashboardPurchase'])->name('admin.dashboard.purchase');

Route::match(['GET', 'POST'], '/admin-login', [App\Http\Controllers\ViewController::class, 'login'])->name('login.control');

