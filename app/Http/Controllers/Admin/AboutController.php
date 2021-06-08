<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
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
            'description'=>'required|string'
        ]);

        $about = About::find($id);
        $about->description = $request->description;

        if($request->file('image')){
            $img_file = $request->file('image');
            $img_file->storeAs('/public/img/','about-image.'.$img_file->getClientOriginalExtension());
            $about->image = 'storage/img/about-image.'.$img_file->getClientOriginalExtension();
        }

        if($request->file('resume')){
            $pdf_file = $request->file('resume');
            $pdf_file->storeAs('/public/pdf/','resume.'.$pdf_file->getClientOriginalExtension());
            $about->resume = 'storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();
        }

        $about->save();

        return redirect()->route('admin.about.index')->withSuccess('About data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
