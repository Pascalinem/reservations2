<?php

namespace App\Http\Controllers;


use App\Models\Locality;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $localities = Locality::all();
        return view( 'locality.index',[
            'localities'=>$localities,
            'resource'=>'localités'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $locality = Locality::find($id);
        
        return view('locality.show',[
            'locality'=>$locality,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $locality=Locality::find($id);

        return view('locality.edit',[
            'locality'=>$locality,
        ]); 
    
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
        //
        $validated= $request->validate([
            'postal_code'=>'required|max:6',
            'locality'=>'required|max:60',
           
         ] );
         //
         $locality=Locality::find($id);

         //mise à jour
         $locality->update($validated);
         return view('locality.show',[
                'locality'=>$locality,
            ]

         );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
