<?php

namespace App\Http\Controllers;

use App\edit;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('edit');
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
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function show(edit $edit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function edit(edit $edit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, edit $edit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\edit  $edit
     * @return \Illuminate\Http\Response
     */
    public function destroy(edit $edit)
    {
        //
    }
}
