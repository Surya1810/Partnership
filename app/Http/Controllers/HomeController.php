<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

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
        $client = Client::all()->count();
        $product = Product::all()->count();
        $project = Project::all()->count();
        $photos = Gallery::all()->count();

        return view('backend.dashboard.index', compact('client', 'product', 'project', 'photos'));
    }
}
