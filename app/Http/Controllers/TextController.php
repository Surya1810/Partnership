<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = Text::where('category', 'about')->first();
        $rekening = Text::where('category', 'rekening')->get();
        $sosmed = Text::where('category', 'sosmed')->get();
        $contact = Text::where('category', 'contact')->get();
        $tagline = Text::where('category', 'tagline')->first();

        return view('backend.text.index', compact('about', 'rekening', 'sosmed', 'contact', 'tagline'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Text $text)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Text $text)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Text $text)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Text $text)
    {
        //
    }
}
