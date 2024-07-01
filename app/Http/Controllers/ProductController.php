<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $users = User::all();

        return view('backend.product.index', compact('products', 'users'));
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
            'desc' => 'bail|required',
            'pic_id' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $image = $request->file('logo');

        if (isset($image)) {
            if (!Storage::disk('public')->exists('logo')) {
                Storage::disk('public')->makeDirectory('logo');
            }

            $manager = new ImageManager(new Driver());
            $imageName  = $request->name . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->toWebp(90)->save(base_path('public/storage/logo/' . $imageName));
            $save_url = 'logo/' . $imageName;

            $product = new Product();
            $product->name = $request->name;
            $product->logo = $save_url;
            $product->desc = $request->desc;
            $product->pic_id = implode(",", $request->pic_id);;
            $product->save();

            return redirect()->route('product.index')->with(['pesan' => 'Product created successfully', 'level-alert' => 'alert-success']);
        } else {
            return redirect()->route('product.index')->with(['pesan' => 'Product not created', 'level-alert' => 'alert-danger']);
        }
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

        Storage::disk('public')->delete($product->logo);

        $product->delete();

        return redirect()->route('product.index')->with(['pesan' => 'Product deleted successfully', 'level-alert' => 'alert-danger']);
    }
}
