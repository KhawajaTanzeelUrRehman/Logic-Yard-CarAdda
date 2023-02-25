<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cartype;

class CartypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('frontend/cartype');
         $cartypes = Cartype::latest()->paginate(5);
        return view('frontend/cartype',compact('cartypes'))
            ->with('i', (request()->input('page',1) - 1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('cartypes.create');
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
        Cartype::create($request->all());

        return redirect()
        ->route('cartype.index')
        ->with('success','cartype created Successfully..' );
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             return view('cartype.show',compact('cartypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartype $cartype)
    {
        return view('cartype.edit',compact('cartypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartype $cartype)
    {
        $request->validate([

        ]);

        $cartype->update($request->all());
        $cartype->name = $request->input('name');
        $cartype->slug = $request->input('slug');

        return redirect()
        ->route('cartype.index')
        ->with('success','cartype Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartype $cartype)
    {
      $cartype->delete();

        return redirect()
        ->route('cartype.index')
        ->with('success','cartype deleted successfully');
    }
}
