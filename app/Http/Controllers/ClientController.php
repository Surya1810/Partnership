<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
            'start_from' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $client = new Client();
        $client->name = $request->name;
        $client->logo = $request->logo;
        $client->start_from = $request->start_from;
        $client->save();

        return redirect()->route('client.index')->with(['pesan' => 'Client created successfully', 'level-alert' => 'alert-success']);
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
            'logo' => 'bail|required',
            'start_from' => 'bail|required',
        ]);

        $client = Client::find($id);

        $client->name = $request->name;
        $client->logo = $request->logo;
        $client->start_from = $request->start_from;
        $client->save();

        return redirect()->route('client.index')->with(['pesan' => 'Client updated successfully', 'level-alert' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Client::find($id);
        $project->delete();

        return redirect()->route('client.index')->with(['pesan' => 'Project deleted successfully', 'level-alert' => 'alert-danger']);
    }
}
