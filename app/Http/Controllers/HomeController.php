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
        // $my_order = Order::where('user_id', Auth::user()->id);
        $order_products = DB::table('order_product')->get();

        // $users = DB::table('users')->get();
        return view('home')->with([
            'order_products' => $order_products
        ]);
    }
}
