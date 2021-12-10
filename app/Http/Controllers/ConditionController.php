<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;

class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions = Condition::all();
        return response()->json($conditions);
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
        $conditions = new Condition;
        $var = (array)($request->get('conditions'));
        $conditions->conditions = serialize($var);
        $conditions->UUID = $request->get('UUID');


        $conditions->save();
  
        return response()->json('successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conditions  $conditions
     * @return \Illuminate\Http\Response
     */
    public function show(Conditions $conditions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conditions  $Conditions
     * @return \Illuminate\Http\Response
     */
    public function edit(Conditions $Conditions)
    {
        $conditions = Conditions::find($Conditions);
        return response()->json($conditions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conditions  $Conditions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conditions $Conditions)
    {
        $conditions = Conditions::find($conditions);
        $conditions->update($request->all());

        return response()->json('successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conditions  $Conditions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conditions $Conditions)
    {
        $conditions = Conditions::find($Conditions);
        $conditions->delete();

        return response()->json('successfully deleted');
    }
}
