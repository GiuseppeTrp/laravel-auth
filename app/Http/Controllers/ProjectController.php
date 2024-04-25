<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }
    public function create()
    {
        return view('admin.projects.create');

    }


    public function store(StoreProjectRequest $request)

    {
        $request->validated();
        

        if($request->hasFile('cover_image')){
            $path = Storage::disk('public')->put('projects_images', $request->cover_image);


        }
        
    

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->types = $request->types;
        $project->img = $request->img;
        $project->link = $request->link;
        $project->cover_image = $path;
        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project created');
    }
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));

    }
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $request->validated();
        

        if($request->hasFile('cover_image')){
            $path = Storage::disk('public')->put('projects_images', $request->cover_image);


        }
        
    

        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->img = $request->img;
        $project->types = $request->types;
        $project->link = $request->link;
        $project->cover_image = $path;
        $project->save();

    // Reindirizza alla visualizzazione del progetto aggiornato
    return redirect()->route('admin.projects.show', $project->id);
}


    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index');
    }






}

