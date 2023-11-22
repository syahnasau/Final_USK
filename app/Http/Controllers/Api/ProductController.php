<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return response()->json([
            "message" => "Success, Get Data!",
            "data" => $products
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kantin.add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        if($product){
            return response()->json([
                "message" => "Success, Create Data!",
                "data" => $product
            ],200);
        }
        // return redirect()->back()->with("status","Failed Add product");
        return response()->json([
            "message" => "Failed, Create Data!",
            "data" => $product
        ],404);
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
        return view('kantin.edit-product', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        if($product){
            return response()->json([
                "message" => "Success, Update Data!",
                "data" => $product
            ],200);
        }
        // return redirect()->back()->with("status","Failed Add product");
        return response()->json([
            "message" => "Failed, Update Data!",
            "data" => $product
        ],404);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        if($product){
            return response()->json([
                "message" => "Success, Delete Data!",
                "data" => $product
            ],200);
        }
        // return redirect()->back()->with("status","Failed Add product");
        return response()->json([
            "message" => "Failed, Delete Data!",
            "data" => $product
        ],404);

    }
}
