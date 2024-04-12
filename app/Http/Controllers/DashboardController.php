<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Truck;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function manage_goods()
    {
        $categories = Category::all();

        $products = Product::all();

        return view('dashboardlayouts.manage_goods')->with([
            'categories' => $categories,
            'products' => $products,
        ]);
    }
    public function edit_good(Product $product)
    {
        $categories = Category::all();

        return view('dashboardlayouts.edit_good')-> with([
            'categories' => $categories,
            'product' => $product
        ]);
    }
    public function manage_users()
    {
        $users = User::all();

        return view('dashboardlayouts.manage_users')->with([
            'users' => $users,
        ]);
    }
    public function manage_trucks()
    {
        $trucks = Truck::all();

        return view('dashboardlayouts.manage_trucks')->with([
            'trucks' => $trucks,
        ]);
    }
    public function manage_orders()
    {
        $orders = Order::all()->where('placed', "=", true);

        return view('dashboardlayouts.manage_orders')->with([
            'orders' => $orders,
        ]);
    }
    public function truck_store(Request $request)
    {

        $longitude = $request->input('longitude');
        $latitude = $request->input('latitude');
        $location = ['latitude' => $latitude, 'longitude' => $longitude];

        Truck::create([
            'location' => $location,
            'registration' => $request->input('registration'),
            'driver_name' => $request->input('driver_name'),
        ]);

        return redirect()->back();

    }
}
