<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries = Surgery::all();
        return response()->json($surgeries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $surgeries = new Surgery;
        $surgeries->surgeryName = $request->get('surgeryName');
        $surgeries->surgeon = $request->get('surgeon');
        $surgeries->surgeryDate = $request->get('surgeryDate');
        $surgeries->surgeryDesc = $request->get('surgeryDesc');

  
        $surgeries->save();
  
        return response()->json('successfully added');
    
        $surgeries->save();
    
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\surgeries  $surgeries
     * @return \Illuminate\Http\Response
     */
    public function show(Surgery $surgeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surgery  $Surgery
     * @return \Illuminate\Http\Response
     */
    public function edit(Surgery $Surgery)
    {
        $surgeries = Surgery::find($Surgery);
        return response()->json($surgeries);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surgery  $Surgery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surgery $Surgery)
    {
        $surgeries = Surgery::find($surgeries);
        $surgeries->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surgery  $Surgery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surgery $Surgery)
    {
        $surgeries = Surgery::find($Surgery);
        $surgeries->delete();

        return response()->json('successfully deleted');
    }
}
