<?php

namespace App\Http\Controllers;

use App\Models\Medical_history;
use Illuminate\Http\Request;

class MedicalHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medHistory = Medical_history::all();
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
        $medHistory = new Medical_history([
            'name' => $request->get('name'),
            'condition' => $request->get('condition')
            
        ]);
    
        $medHistory->save();
    
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medical_history  $medical_history
     * @return \Illuminate\Http\Response
     */
    public function show(Medical_history $medical_history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medical_history  $medical_history
     * @return \Illuminate\Http\Response
     */
    public function edit(Medical_history $medical_history)
    {
        $medHistory = Medical_history::find($medical_history);
        return response()->json($medHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medical_history  $medical_history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medical_history $medical_history)
    {
        $medHistory = Medical_history::find($medical_history);
        $medHistory->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medical_history  $medical_history
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medical_history $medical_history)
    {
        $medHistory = Medical_history::find($medical_history);
        $medHistory->delete();

        return response()->json('successfully deleted');
    }
}
