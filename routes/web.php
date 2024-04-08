<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
