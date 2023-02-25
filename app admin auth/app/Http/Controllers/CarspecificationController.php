<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carspecification;


class CarspecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/carspecification');
        $carspecifications = Carspecification::latest()->paginate(5);
        return view('frontend/carspecification',compact('carspecifications'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carspecifications.create');
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
        Carspecification::create($request->all());

        return redirect()
        ->route('carspecification.index')
        ->with('success','carspecification created Successfully..' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carspecifications.show',compact('carspecification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carspecification $carspecification)
    {
        return view('carspecifications.edit',compact('carspecification'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carspecification $carspecification)
    {
        $request->validate([

        ]);

        $carspecification->update($request->all());
        $carspecification->name = $request->input('name');
        $carspecification->slug = $request->input('slug');
        $carspecification->image = $request->input('image');



        return redirect()
        ->route('carspecification.index')
        ->with('success','carspecification Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carspecification $carspecification)
    {
        $carspecification->delete();

        return redirect()
        ->route('carspecification.index')
        ->with('success','Carspecification deleted successfully');
    }
}
