<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carbrand;


class CarbrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/carbrand');
        $carbrands = Carbrand::latest()->paginate(5);
        return view('frontend/carbrand',compact('carbrands'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carbrands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id' => 'required',
            'name' => 'required',
            'slug' => 'required',
            'image' => 'required',


        ]);
        Carbrand::create($request->all());

        return redirect()
        ->route('carbrand.index')
        ->with('success','carbrand created Successfully..' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carbrand.show',compact('carbrands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carbrand $carbrand)
    {
        return view('carbrand.edit',compact('carbrands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carbrand $carbrand)
    {
        $request->validate([

        ]);

        $carbrand->update($request->all());
        $carbrand->name = $request->input('name');
        $carbrand->slug = $request->input('slug');
        $carbrand->image = $request->input('image');

        return redirect()
        ->route('carbrand.index')
        ->with('success','carbrand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carbrand $carbrand)
    {
        $carbrand->delete();

        return redirect()
        ->route('carbrand.index')
        ->with('success','Carbrand deleted successfully');
    }
}
