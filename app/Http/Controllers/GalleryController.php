<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();

        return view('backend.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all(['id', 'name']);
        return view('backend.gallery.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_name' => 'bail|required',
            'year' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $gallery = new Gallery();
        $gallery->name = $request->input('gallery_name');
        $gallery->tahun = $request->input('year');
        $gallery->kode = uniqid(5);
        $gallery->save();

        return redirect()->route('gallery.index')->with(['pesan' => 'Gallery created successfully', 'level-alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('backend.gallery.create', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gallery_name' => 'bail|required',
            'year' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $gallery = Gallery::find($id);
        $gallery->name = $request->input('gallery_name');
        $gallery->tahun = $request->input('year');
        $gallery->update();

        return redirect()->route('gallery.index')->with(['pesan' => 'Gallery updated successfully', 'level-alert' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $image = Image::where('gallery_id', $id);
        $image->delete();
        $gallery = Gallery::find($id);
        Storage::deleteDirectory('public/gallery/' . $gallery->kode);
        $gallery->delete();

        return redirect()->route('gallery.index')->with(['pesan' => 'Gallery deleted successfully', 'level-alert' => 'alert-success']);
    }
}
