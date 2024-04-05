<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $uploadedFile = $request->file('image');
        $filename = time() . $uploadedFile->getClientOriginalName();
        $request->file('image')->storeAs("public/uploads", $filename);

        Product::create([
            'name' => $request->input('name'),
            "location" => $request->input('location'),
            "price" => $request->input('price'),
            "quantity" => $request->input('quantity'),
            "category_id" => $request->input('category_id'),
            "description" => $request->input('description'),
            "image_url" => "uploads/" . $filename,
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $related_products = Product::where('category_id', $product->category_id)
            ->where('id', "!=", $product->id)
            ->limit(3)
            ->get();
        return view('single_product')->with([
            'product' => $product,
            'related_products' => $related_products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::delete('public/uploads/' . basename($product->image_url));
        $product->delete();
        return redirect()->back();
    }
}
