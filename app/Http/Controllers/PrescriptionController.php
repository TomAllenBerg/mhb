<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prescription = Prescription::all();
        return response()->json($prescription);
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
        //$prescript = Prescription::create($request->all());
        // header("HTTP/1.0 600 Test string");
        // exit();
        $prescription = new Prescription;
        //'user_id' => $request->get('user_id'),
        $prescription->name = $request->get('name');
        $prescription->dosage_amt = $request->get('dosage_amt');
        $prescription->dosage_unit = $request->get('dosage_unit');
        $prescription->route = $request->get('route');
        $prescription->instructions = $request->get('instructions');
        $prescription->side_effects = $request->get('side_effects');
        
    
        $prescription->save();
    
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show(Prescription $prescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
        $prescript = Prescription::find($prescription);
        return response()->json($prescript);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        $prescript = Prescription::find($prescription);
        $prescript->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        $prescript = Prescription::find($prescription);
        $prescript->delete();

        return response()->json('successfully deleted');
    }
}
