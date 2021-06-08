<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social_Icon;
use Illuminate\Http\Request;

class SocialIconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icons = Social_Icon::get();
        return view('admin.social.index', compact('icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Social_Icon $icon)
    {
        $icon->icon = $request->icon;
        $icon->link = $request->link;
        $icon->save();

        return redirect()->route('admin.social.index')->withSuccess('New Icon created successfully!');
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
        $icon = Social_Icon::find($id);
        return view('admin.social.edit', compact('icon'));
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
        $social          = Social_Icon::find($id);
        $social->icon    = $request->icon;
        $social->link    = $request->link;
        $social->save();

        return redirect()->route('admin.social.index')->withSuccess('Icon updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $icon = Social_Icon::find($id);
        $icon->delete();

        return redirect()->route('admin.social.index')->withSuccess('Icon deleted successfully!');
    }
}
