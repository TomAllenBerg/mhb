<?php

namespace App\Http\Controllers;

use App\Models\Medical_histroy;
use Illuminate\Http\Request;

class MedicalHistroyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medHistory = Medical_histroy::all();
        return response()->json($medHistory);
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
        $medHistory = new Medical_histroy([
            'name' => $request->get('name'),
            'condition' => $request->get('condition')
            
        ]);
    
        $medHistory->save();
    
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medical_histroy  $medical_histroy
     * @return \Illuminate\Http\Response
     */
    public function show(Medical_histroy $medical_histroy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medical_histroy  $medical_histroy
     * @return \Illuminate\Http\Response
     */
    public function edit(Medical_histroy $medical_histroy)
    {
        $medHistory = Medical_histroy::find($medical_histroy);
        return response()->json($medHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medical_histroy  $medical_histroy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medical_histroy $medical_histroy)
    {
        $medHistory = Medical_histroy::find($medical_histroy);
        $medHistory->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medical_histroy  $medical_histroy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medical_histroy $medical_histroy)
    {
        $medHistory = Medical_histroy::find($medical_histroy);
        $medHistory->delete();

        return response()->json('successfully deleted');
    }
}
