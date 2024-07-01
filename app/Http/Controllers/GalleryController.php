<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

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
            'project_id' => 'bail|required',
            'name' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $image = $request->file('file');

        if (isset($image)) {
            if (!Storage::disk('public')->exists('gallery')) {
                Storage::disk('public')->makeDirectory('gallery');
            }

            $manager = new ImageManager(new Driver());
            $imageName  = uniqid() . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->toWebp(90)->save(base_path('public/storage/gallery/' . $imageName));
            $save_url = 'gallery/' . $imageName;

            $project = Project::find($request->input('project_id'));
            $gallery = $project->image()->create([
                'project_id' => $request->input('project_id'),
                'file_name' => $imageName,
                'file_size' => $img->size(),
                'file_path' => $save_url,
            ]);

            return redirect()->route('client.index')->with(['pesan' => 'Client created successfully', 'level-alert' => 'alert-success']);
        } else {
            return redirect()->route('client.index')->with(['pesan' => 'Client not created', 'level-alert' => 'alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
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
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
