<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|numeric', // Adjust this according to your form
            'description' => 'required|string',
            'image' => 'required|file',
        ]);
        $uploadedFile = $request->file('image');
        $filename = time().$uploadedFile->getClientOriginalName();
        $request->file('image')->storeAs("public/uploads", $filename);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->location = $validatedData['location'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->category_id = $validatedData['category_id'];
        $product->description = $validatedData['description'];
        $product->image_url = "uploads/".$filename;
        $product->save();

        dd("Product Saved");

        // return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
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
        //
    }
}
