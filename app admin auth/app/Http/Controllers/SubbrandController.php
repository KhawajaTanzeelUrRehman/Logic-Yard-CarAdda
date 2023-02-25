<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carsubbrand;

class SubbrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/subbrand');
        $carsubbrands = Carsubbrand::latest()->paginate(5);
        return view('frontend/subbrand',compact('carsubbrands'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carsubbrand.create');
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
            'brandname' => 'required',
            'subbrandname' => 'required',
            'slug' => 'required',
            'image' => 'required',


        ]);
        Carsubbrand::create($request->all());

        return redirect()
        ->route('carsubbrand.index')
        ->with('success','Car sub brand created Successfully..' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carsubbrand.show',compact('carsubbrands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carsubbrand $carsubbrand)
    {
        return view('carsubbrand.edit',compact('carsubbrands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carsubbrand $carsubbrand)
    {
        $request->validate([

        ]);

        $carsubbrand->update($request->all());
        $carsubbrand->name = $request->input('brandname');
        $carsubbrand->name = $request->input('subbrandname');
        $carsubbrand->slug = $request->input('slug');
        $carsubbrand->image = $request->input('image');

        return redirect()
        ->route('carsubbrand.index')
        ->with('success','Car sub brand Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carsubbrand $carsubbrand)
    {
        $carsubbrand->delete();

        return redirect()
        ->route('carsubbrand.index')
        ->with('success','Car sub brand deleted successfully');
    }
}
