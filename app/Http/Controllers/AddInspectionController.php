<?php

namespace App\Http\Controllers;

use App\add_inspection;
use Illuminate\Http\Request;

class AddInspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('add-inspection-appointment');
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
     * @param  \App\add_inspection  $add_inspection
     * @return \Illuminate\Http\Response
     */
    public function show(add_inspection $add_inspection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_inspection  $add_inspection
     * @return \Illuminate\Http\Response
     */
    public function edit(add_inspection $add_inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_inspection  $add_inspection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_inspection $add_inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_inspection  $add_inspection
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_inspection $add_inspection)
    {
        //
    }
}
