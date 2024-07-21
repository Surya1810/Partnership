<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();

        return view('backend.client.index', compact('clients'));
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
            'year' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $image = $request->file('logo');

        if (isset($image)) {
            if (!Storage::disk('public')->exists('client')) {
                Storage::disk('public')->makeDirectory('client');
            }

            $manager = new ImageManager(new Driver());
            $imageName  = $request->name . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->toWebp(90)->save(base_path('public/storage/client/' . $imageName));
            $save_url = 'client/' . $imageName;

            $client = new Client();
            $client->name = $request->name;
            $client->logo = $save_url;
            $client->start_from = $request->year;
            $client->desc = $request->desc;
            $client->save();

            return redirect()->route('client.index')->with(['pesan' => 'Client created successfully', 'level-alert' => 'alert-success']);
        } else {
            return redirect()->route('client.index')->with(['pesan' => 'Client not created', 'level-alert' => 'alert-danger']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
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
            'year' => 'bail|required',
        ]);

        $image = $request->file('logo');

        if (isset($image)) {
            if (!Storage::disk('public')->exists('client')) {
                Storage::disk('public')->makeDirectory('client');
            }

            $manager = new ImageManager(new Driver());
            $imageName  = $request->name . '.' . $image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->toWebp(90)->save(base_path('public/storage/client/' . $imageName));
            $save_url = 'client/' . $imageName;

            $client = Client::find($id);

            $client->name = $request->name;
            $client->logo = $save_url;
            $client->start_from = $request->year;
            $client->desc = $request->desc;
            $client->update();

            return redirect()->route('client.index')->with(['pesan' => 'Client updated successfully', 'level-alert' => 'alert-success']);
        } else {
            $client = Client::find($id);

            $client->name = $request->name;
            $client->start_from = $request->year;
            $client->desc = $request->desc;
            $client->update();

            return redirect()->route('client.index')->with(['pesan' => 'Client updated successfully', 'level-alert' => 'alert-success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        Storage::disk('public')->delete($client->logo);

        $client->delete();

        return redirect()->route('client.index')->with(['pesan' => 'Project deleted successfully', 'level-alert' => 'alert-danger']);
    }
}
