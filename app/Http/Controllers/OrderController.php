<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function place_order(Request $request, $id){

        $user_id = Auth::user()->id;


        $order = Order::where('user_id', $user_id)->first();


        if(!$order){
            $order = new Order();
            $order->user_id = Auth::user()->id;
            $order->save();
        }

        $product = Product::find($id);
        $quantity = $request->input('quantity_input');

        // Check if the product is already in the order
        $existingProduct = $order->products()->where('product_id', $product->id)->first();

        // $order->products()->attach($product, ['quantity' => $quantity, 'user_id' => Auth::user()->id]);
        // If the product is already in the order, update the quantity
        if ($existingProduct) {
            $existingQuantity = $existingProduct->pivot->quantity;
            $order->products()->updateExistingPivot($product->id, ['quantity' => $existingQuantity + $quantity]);
        } else {
            // If the product is not in the order, attach it with the specified quantity
            $order->products()->attach($product, ['quantity' => $quantity]);
        }

        // Response in success

        // return response()->json(['message' => 'Product added to the order successfully']);
        return redirect(route('home'));
    }
}
