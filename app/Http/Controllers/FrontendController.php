<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Project;
use App\Models\Text;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    //Landing
    public function landing()
    {
        $tagline = Text::where('category', 'tagline')->first();
        $products = Product::all();

        return view('frontend.home.index', compact('tagline', 'products'));
    }

    //Contact
    public function contact()
    {
        $rekening = Text::where('category', 'rekening')->get();
        $contact = Text::where('category', 'contact')->get();
        $sosmed = Text::where('category', 'sosmed')->get();
        $email = Text::where('category', 'email')->get();

        return view('frontend.contact.index', compact('rekening', 'contact', 'email', 'sosmed'));
    }

    //Client
    public function client()
    {
        $clients = Client::all();

        return view('frontend.client.index', compact('clients'));
    }

    //Company
    public function about()
    {
        $about = Text::where('category', 'about')->get();

        return view('frontend.about.index', compact('about'));
    }
    public function product()
    {
        $products = Product::all();

        return view('frontend.product.index', compact('products'));
    }

    public function procurement()
    {
        $products = Product::find('1');

        return view('frontend.product.detail.procurement', compact('products'));
    }
    public function workshop()
    {
        $products = Product::find('2');

        return view('frontend.product.detail.workshop', compact('products'));
    }
    public function workshop_iklan()
    {
        return view('frontend.workshop.index');
    }
    public function contractor()
    {
        $products = Product::find('3');

        return view('frontend.product.detail.contractor', compact('products'));
    }
    public function law()
    {
        $products = Product::find('4');

        return view('frontend.product.detail.law', compact('products'));
    }
    public function technology()
    {
        $products = Product::find('5');

        return view('frontend.product.detail.technology', compact('products'));
    }
    public function informasi()
    {
        $products = Product::find('6');

        return view('frontend.product.detail.informasi', compact('products'));
    }
    public function eo()
    {
        $products = Product::find('7');

        return view('frontend.product.detail.eo', compact('products'));
    }

    //Project
    public function project_references()
    {
        $projects = Project::all();

        return view('frontend.project.index', compact('projects'));
    }
    public function project_gallery()
    {
        $galleries = Gallery::all();

        return view('frontend.gallery.index', compact('galleries'));
    }

    //K9 Vision
    public function k9_vision()
    {
        $projects = Project::all();

        return view('frontend.product.k9', compact('projects'));
    }
    //RFID
    public function securetag()
    {
        $projects = Project::all();

        return view('frontend.product.securetags', compact('projects'));
    }

    public function building()
    {
        $products = Product::find('8');

        return view('frontend.product.building', compact('products'));
    }
}
