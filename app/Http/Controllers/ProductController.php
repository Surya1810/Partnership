<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('backend.product.index', compact('products'));
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

        $request->validate([
            'name' => 'bail|required',
            'logo' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $product = new Product();
        $product->name = $request->name;
        $product->logo = $request->logo;
        $product->save();

        return redirect()->route('product.index')->with(['pesan' => 'Product created successfully', 'level-alert' => 'alert-success']);
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'bail|required',
            'logo' => 'bail|required',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->logo = $request->logo;
        $product->update();

        return redirect()->route('product.index')->with(['pesan' => 'Product updated successfully', 'level-alert' => 'alert-warning']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with(['pesan' => 'Product deleted successfully', 'level-alert' => 'alert-danger']);
    }
}
