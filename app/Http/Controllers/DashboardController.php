<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function manage_goods(){
        $categories = Category::all();

        $products = Product::all();

        return view('dashboardlayouts.manage_goods')->with([
            'categories' => $categories,
            'products' => $products
        ]);
    }
    public function manage_users(){
        $users = User::all();

        return view('dashboardlayouts.manage_users')->with([
            'users' => $users
        ]);
    }
    public function manage_trucks(){
        $users = User::all();

        return view('dashboardlayouts.manage_trucks')->with([
            'users' => $users
        ]);
    }
    public function manage_orders(){
        $users = User::all();

        return view('dashboardlayouts.manage_orders')->with([
            'users' => $users
        ]);
    }
}
