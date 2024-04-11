<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact_us', function () {
    return view('contact');

});
Route::get('/about_us', function () {
    return view('about');

});

Route::get('/product/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::post('/products/{product}', [ProductController::class, 'destroy'])->name('products.delete');

Route::get('/goods', [FrontendController::class, 'goods']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/manage_goods', [DashboardController::class, 'manage_goods']);
Route::get('/manage_users', [DashboardController::class, 'manage_users']);
Route::get('/manage_users', [DashboardController::class, 'manage_users']);
Route::get('/manage_trucks', [DashboardController::class, 'manage_trucks']);
Route::get('/manage_orders', [DashboardController::class, 'manage_orders']);

Route::get('/order/{product}', [OrderController::class, 'place_order'])->name('place.order');
Route::get('/confirm/{order}', [OrderController::class, 'confirm_order'])->name('confirm.order');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
