<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio_Category;
use App\Models\Portfolio_Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Portfolio_Project::get();
        return view('admin.portfolio.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Portfolio_Category::all();
        return view('admin.portfolio.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Portfolio_Project $project)
    {
        $this->validate($request,[
            'project_name' => 'required'
        ]);

        $project->category_id   = $request->category_id;
        $project->project_name  = $request->project_name;
        $project->description   = $request->description;
        $project->url           = $request->url;
        $project->date          = $request->date;
        $project->client_name   = $request->client_name;

        if($request->file('thumbnail')){
            $img = $request->file('thumbnail');
            $img_name = 'project-thumbnail-'.time().'-.';
            $img->storeAs('/public/img/project/',$img_name.'.'.$img->getClientOriginalExtension());
            $project->thumbnail = 'storage/img/project/'.$img_name.'.'.$img->getClientOriginalExtension();
        }

        $project->save();
        return redirect()->route('admin.project.index')->withSuccess('New project created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Portfolio_Project::find($id);
        $categories = Portfolio_Category::all();
        return view('admin.portfolio.project.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'project_name' => 'required'
        ]);

        $project = Portfolio_Project::find($id);
        $project->category_id   = $request->category_id;
        $project->project_name  = $request->project_name;
        $project->description   = $request->description;
        $project->url           = $request->url;
        $project->date          = $request->date;
        $project->client_name   = $request->client_name;

        if($request->file('thumbnail')){
            unlink(public_path($project->thumbnail));
            $img = $request->file('thumbnail');
            $img_name = 'project-thumbnail-'.time().'-.';
            $img->storeAs('/public/img/project/',$img_name.$img->getClientOriginalExtension());
            $project->thumbnail = 'storage/img/project/'.$img_name.$img->getClientOriginalExtension();
        }

        $project->save();
        return redirect()->route('admin.project.index')->withSuccess('Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Portfolio_Project::find($id);
        unlink(public_path($project->thumbnail));
        $project->delete();

        return redirect()->route('admin.project.index')->withSuccess('Project deleted successfully!');
    }
}
