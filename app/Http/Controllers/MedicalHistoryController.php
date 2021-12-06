<?php

namespace App\Http\Controllers;

use App\Models\MedicalHistory;
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
        $medHistory = MedicalHistory::all();
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
        $medHistory = new MedicalHistory;
        $medHistory->name = $request->get('name');
        $medHistory->DOB = $request->get('DOB');
        $medHistory->bloodType = $request->get('bloodtype');
        $medHistory->allergies = $request->get('allergies');
        $medHistory->conditions = $request->get('conditions');
        $medHistory->surgeryName = $request->get('surgery_name');
        $medHistory->surgeon = $request->get('surgeon_name');
        $medHistory->surgeryDate = $request->get('surgery_date');
        $medHistory->surgeryDesc = $request->get('surgery_description');

  
        $medHistory->save();
  
        return response()->json('successfully added');
    
        $medHistory->save();
    
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalHistory  $MedicalHistory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalHistory $MedicalHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalHistory  $MedicalHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalHistory $MedicalHistory)
    {
        $medHistory = MedicalHistory::find($MedicalHistory);
        return response()->json($medHistory);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalHistory  $MedicalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalHistory $MedicalHistory)
    {
        $medHistory = MedicalHistory::find($MedicalHistory);
        $medHistory->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalHistory  $MedicalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalHistory $MedicalHistory)
    {
        $medHistory = MedicalHistory::find($MedicalHistory);
        $medHistory->delete();

        return response()->json('successfully deleted');
    }
}
