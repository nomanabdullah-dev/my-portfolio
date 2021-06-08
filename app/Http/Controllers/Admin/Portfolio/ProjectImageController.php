<?php

namespace App\Http\Controllers\Admin\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio_Project;
use App\Models\Project_Image;
use Illuminate\Http\Request;

class ProjectImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Project_Image::get();
        return view('admin.portfolio.image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Portfolio_Project::all();
        return view('admin.portfolio.image.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project_Image $image)
    {
        $this->validate($request, [
            'project_id'=> 'required',
            'image'     => 'required'
        ]);
        $image->project_id  = $request->project_id;

        if($request->file('image')){
            $img = $request->file('image');
            $img_name = 'project-image-'.time().'-.';
            $img->storeAs('/public/img/project/',$img_name.'.'.$img->getClientOriginalExtension());
            $image->image = 'storage/img/project/'.$img_name.'.'.$img->getClientOriginalExtension();
        }
        $image->save();

        return redirect()->route('admin.image.index')->withSuccess('Project image added successfully!');

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
        $image = Project_Image::find($id);
        $projects = Portfolio_Project::all();
        return view('admin.portfolio.image.edit', compact('image', 'projects'));
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
        $this->validate($request, [
            'project_id'=> 'required',
            'image'     => 'required'
        ]);

        $image = Project_Image::find($id);
        $image->project_id  = $request->project_id;

        if($request->file('image')){
            unlink(public_path($image->image));
            $img = $request->file('image');
            $img_name = 'project-image-'.time().'-.';
            $img->storeAs('/public/img/project/',$img_name.$img->getClientOriginalExtension());
            $image->image = 'storage/img/project/'.$img_name.$img->getClientOriginalExtension();
        }
        $image->save();

        return redirect()->route('admin.image.index')->withSuccess('Project image added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Project_Image::find($id);
        unlink(public_path($image->image));
        $image->delete();

        return redirect()->route('admin.image.index')->withSuccess('Project image deleted successfully!');
    }
}
