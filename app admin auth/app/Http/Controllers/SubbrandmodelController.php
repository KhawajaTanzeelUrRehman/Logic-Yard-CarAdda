<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carsubbrandmodel;

class SubbrandmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/subbrandmodel');
        $carsubbrandmodels = Carsubbrandmodel::latest()->paginate(5);
        return view('frontend/subbrandmodel',compact('carsubbrandmodels'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carsubbrandmodels.create');
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
            'nextbrandname' => 'required',
            'slug' => 'required',
            'image' => 'required',

        ]);
        Carsubbrandmodel::create($request->all());

        return redirect()
        ->route('carsubbrandmodel.index')
        ->with('success','subbrandmodel created Successfully..' );
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('carsubbrandmodel.show',compact('carsubbrandmodels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( carsubbrandmodel $carsubbrandmodel)
    {
        return view('carsubbrandmodel.edit',compact('carsubbrandmodels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carsubbrandmodel $carsubbrandmodel)
    {
        $request->validate([

        ]);

       $carsubbrandmodel->update($request->all());
       $carsubbrandmodel->brandname = $request->input('brandname');
       $carsubbrandmodel->subbrsndname = $request->input('subbrandname');
       $carsubbrandmodel->nextbrandname = $request->input('nextbrandname');
       $carsubbrandmodel->slug = $request->input('slug');
       $carsubbrandmodel->image = $request->input('image');
        
        return redirect()
        ->route('carsubbrandmodel.index')
        ->with('success','subbrandmodel Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carsubbrandmodel $carsubbrandmodel)
    {
        
        $carsubbrandmodel->delete();

        return redirect()
        ->route('carsubbrandmodel.index')
        ->with('success','Subbrandmodel deleted successfully');
    }
}
