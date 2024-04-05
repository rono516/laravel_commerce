<?php

namespace App\Http\Controllers;

use App\Models\Product;

class FrontendController extends Controller
{
    public function goods()
    {
        $products = Product::all();
        return view('goods')->with([
            'products' => $products,
        ]);
    }
}
