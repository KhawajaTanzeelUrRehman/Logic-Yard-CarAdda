<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carfeature;

class CarfeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/carfeature');
        $carfeatures = Carfeature::latest()->paginate(5);
        return view('frontend/carfeature',compact('carfeatures'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carfeatures.create');
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
        Carfeature::create($request->all());

        return redirect()
        ->route('carfeature.index')
        ->with('success','carfeature created Successfully..' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carfeature.show',compact('carfeatures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carfeature $carfeature)
    {
        return view('carfeature.edit',compact('carfeatures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carfeature $carfeature)
    {
        $request->validate([

        ]);

        $carfeature->update($request->all());
        $carfeature->name = $request->input('name');
        $carfeature->slug = $request->input('slug');

        return redirect()
        ->route('carfeature.index')
        ->with('success','carfeature Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carfeature $carfeature)
    {
        $carfeature->delete();

        return redirect()
        ->route('carfeature.index')
        ->with('success','carfeature deleted successfully');
    }
}
