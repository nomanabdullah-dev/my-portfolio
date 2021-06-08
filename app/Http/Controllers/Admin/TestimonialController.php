<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Testimonial $testimonial)
    {
        $testimonial->name          = $request->name;
        $testimonial->designation   = $request->designation;
        $testimonial->comment       = $request->comment;

        if($request->file('image')){
            $img = $request->file('image');
            $img_name = 'testimonial-'.time().'-.';
            $img->storeAs('/public/img/testimonial/',$img_name.'.'.$img->getClientOriginalExtension());
            $testimonial->image = 'storage/img/testimonial/'.$img_name.'.'.$img->getClientOriginalExtension();
        }

        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->withSuccess('New testimonial created successfully!');
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit', compact('testimonial'));
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
        $testimonial                = Testimonial::find($id);
        $testimonial->name          = $request->name;
        $testimonial->designation   = $request->designation;
        $testimonial->comment       = $request->comment;

        if($request->file('image')){
            unlink(public_path($testimonial->image));
            $img = $request->file('image');
            $img_name = 'testimonial-'.time().'-.';
            $img->storeAs('/public/img/testimonial/',$img_name.'.'.$img->getClientOriginalExtension());
            $testimonial->image = 'storage/img/testimonial/'.$img_name.'.'.$img->getClientOriginalExtension();
        }

        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->withSuccess('estimonial edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        unlink(public_path($testimonial->image));

        return redirect()->route('admin.testimonial.index')->withSuccess('Testimonial deleted successfully!');
    }
}
