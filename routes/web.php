<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact_us', function () {
    return view('contact');

});
Route::get('/about_us', function () {
    return view('about');

});

Route::get('/goods', function (){
    return view('goods');
});

Route::get('/dashboard', function (){
    return view('dashboard');
});

Route::get('/manage_goods', function(){
    return view('dashboardlayouts.manage_goods');
});

Route::get('/manage_users', function (){
    return view('dashboardlayouts.manage_users');
});
Route::get('/manage_trucks', function (){
return view('dashboardlayouts.manage_trucks');
});

Route::get('/manage_orders', function(){
    return view('dashboardlayouts.manage_orders');
});

// <li><a href="{{ url('/manage_users') }}">Manage Users</a></li>
//                             <li><a href="{{ url('manage_trucks') }}">Manage Trucks</a></li>
//                             <li><a href="{{ url('/manage_orders') }}">Manage Orders</a></li>

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
