<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carcities;

class CarcitiesController extends Controller
{
    public function index()
    {
        // return view('frontend/carbodies');
        $carcitiess = Carcities::latest()->paginate(5);
        return view('frontend/carcities',compact('carcitiess'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carcitiess.create');
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


        ]);
        Carcities::create($request->all());

        return redirect()
        ->route('carcities.index')
        ->with('success','carcities created Successfully..' );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carcities.show',compact('carcitiess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carcities $carcities)
    {
        return view('carcitiess.edit',compact('carcities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carcities $carcities)
    {
        $request->validate([

        ]);

        $carcities->update($request->all());
        $carcities->countryname = $request->input('countryname');
        $carcities->statename = $request->input('statename');
        $carcities->city = $request->input('city');
        $carcities->slug = $request->input('slug');


        return redirect()
        ->route('carcities.index')
        ->with('success','carcities Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carcities $carcities)
    {
        $carcities->delete();

        return redirect()
        ->route('carcities.index')
        ->with('success','carcities deleted successfully');
    }
}
