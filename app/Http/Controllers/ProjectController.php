<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Imports\ProjectImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('backend.project.index', compact('projects'));
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
            'company' => 'bail|required',
            'year' => 'bail|required',
        ]);

        $old = session()->getOldInput();

        $project = new Project();
        $project->name = $request->name;
        $project->company = $request->company;
        $project->year = $request->year;
        $project->desc = $request->desc;
        $project->save();

        return redirect()->route('project.index')->with(['pesan' => 'Project created successfully', 'level-alert' => 'alert-success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
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
            'company' => 'bail|required',
            'year' => 'bail|required',
        ]);

        $project = Project::find($id);

        $project->name = $request->name;
        $project->company = $request->company;
        $project->year = $request->year;
        $project->desc = $request->desc;
        $project->update();

        return redirect()->route('project.index')->with(['pesan' => 'Project updated successfully', 'level-alert' => 'alert-success']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('project.index')->with(['pesan' => 'Project deleted successfully', 'level-alert' => 'alert-danger']);
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ],
        ]);

        Excel::import(new ProjectImport, $request->file('import_file'));

        return redirect()->route('project.index')->with(['pesan' => 'Project imported successfully', 'level-alert' => 'alert-success']);
    }
}
