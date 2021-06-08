<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::get();
        return view('admin.fact.index', compact('facts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fact $fact)
    {
        $fact->icon     = $request->icon;
        $fact->number   = $request->number;

        if($request->title1){
            $fact->title1 = $request->title1;
        }
        if($request->title2){
            $fact->title2 = $request->title2;
        }
        $fact->save();

        return redirect()->route('admin.fact.index')->withSuccess('New Fact created successfully');
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
        $fact = Fact::find($id);
        return view('admin.fact.edit', compact('fact'));
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
        $fact = Fact::find($id);

        $fact->icon     = $request->icon;
        $fact->number   = $request->number;

        if($request->title1){
            $fact->title1 = $request->title1;
        }
        if($request->title2){
            $fact->title2 = $request->title2;
        }

        $fact->save();

        return redirect()->route('admin.fact.index')->withSuccess('Fact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fact = Fact::find($id);
        $fact->delete();

        return redirect()->route('admin.fact.index')->withSuccess('Fact deleted successfully!');
    }
}
