<?php

namespace App\Http\Controllers;

use App\Models\Allergy;
use Illuminate\Http\Request;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allergies = Allergy::all();
        return response()->json($allergies);
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
        $allergies = new Allergy;
        $var = (array)($request->get('allergies'));
        $allergies->allergies = serialize($var);
    
        $allergies->save();
  
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\surgeries  $allergies
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allergy  $Allergy
     * @return \Illuminate\Http\Response
     */
    public function edit(Allergy $Allergy)
    {
        $allergies = Allergy::find($Allergy);
        return response()->json($allergies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergy  $Allergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allergy $Allergy)
    {
        $allergies = Allergy::find($allergies);
        $allergies->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergy  $Allergy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allergy $Allergy)
    {
        $allergies = Allergy::find($Allergy);
        $allergies->delete();

        return response()->json('successfully deleted');
    }
}
