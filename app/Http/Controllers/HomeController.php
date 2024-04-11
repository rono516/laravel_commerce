<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $open_order = Order::where('user_id', Auth::user()->id)->where('placed', false)->first();
        $order = Order::where('user_id', Auth::user()->id)->where('placed', false)->first();
        $my_orders = Order::where('user_id', Auth::user()->id)->get();
        $order_products = DB::table('order_product')->where('order_id', '=', $open_order->id)->get();
        $sum_of_all_products = DB::table('order_product')->sum('quantity');

        // $users = DB::table('users')->get();
        return view('home')->with([
            'order_products' => $order_products,
            'sum_of_all_products' => $sum_of_all_products,
            'my_orders' => $my_orders,
            'order' => $order
        ]);
    }
}
