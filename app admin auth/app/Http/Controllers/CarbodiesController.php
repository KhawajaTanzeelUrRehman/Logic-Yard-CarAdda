<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carbodies;
use DB;

class CarbodiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/carbodies');
        $carbodiess = Carbodies::latest()->paginate(5);
        return view('frontend/carbodies',compact('carbodiess'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carbodiess.create');
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
        Carbodies::create($request->all());

        return redirect()
        ->route('carbodies.index')
        ->with('success','carbodies created Successfully..' );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carbodies.show',compact('carbodiess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carbodies $carbodies)
    {
        return view('carbodiess.edit',compact('carbodies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carbodies $carbodies)
    {
        $request->validate([

        ]);

        $carbodies->update($request->all());
        $carbodies->name = $request->input('name');
        $carbodies->slug = $request->input('slug');


        return redirect()
        ->route('carbodies.index')
        ->with('success','carbodies Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Carbodies $carbodies)
    public function destroy($id)
    {
        
    //   echo $id;die;
        // $id->delete();
        DB::table('carbodies')->where('id', $id)->delete();

        return redirect()
        ->route('carbodies.index')
        ->with('success','Carbodies deleted successfully');
    }
}
