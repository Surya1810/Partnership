<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageController extends Controller
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
        $request->validate([
            'gallery_id' => 'bail|required',
        ]);
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $galleryCode = Gallery::find($request->gallery_id)->kode;

            if (!Storage::disk('public')->exists('gallery/' . $galleryCode)) {
                Storage::disk('public')->makeDirectory('gallery/' . $galleryCode);
            }

            $manager = new ImageManager(new Driver());
            $imageName  = uniqid() . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->toWebp(90)->save(base_path('public/storage/gallery/' . $galleryCode . '/' . $imageName));
            $save_url = 'gallery/' . $galleryCode . '/' . $imageName;

            Image::create([
                'gallery_id' => $request->input('gallery_id'),
                'file_name' => $imageName,
                'file_path' => $save_url,
            ]);

            return redirect()->route('gallery.show', $request->gallery_id)->with(['pesan' => 'Image uploaded successfully', 'level-alert' => 'alert-success']);
        } else {
            return redirect()->route('gallery.show', $request->gallery_id)->with(['pesan' => 'Image upload failed', 'level-alert' => 'alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gallery = Gallery::find($id);

        return view('backend.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
