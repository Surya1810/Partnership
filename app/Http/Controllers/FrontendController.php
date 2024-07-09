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

    //Workshop
    public function workshop()
    {
        $projects = Project::all();

        return view('frontend.project.index', compact('projects'));
    }
    //K9 Vision
    public function k9_vision()
    {
        $projects = Project::all();

        return view('frontend.project.index', compact('projects'));
    }
    //RFID
    public function rfid()
    {
        $projects = Project::all();

        return view('frontend.project.index', compact('projects'));
    }
    //High Risk
    public function high_risk()
    {
        $projects = Project::all();

        return view('frontend.project.index', compact('projects'));
    }
}
