<?php

namespace App\Http\Controllers;

use App\add_inspection_car;
use Illuminate\Http\Request;
use App\province;

class AddInspectionCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users');
    }

    public function imagesUpload()
    {
        return view('addreport');
    }

    public function imagesUploadPost(Request $request)
    {
        request()->validate([
            'uploadFile' => 'required',
        ]);

        foreach ($request->file('uploadFile') as $key => $value) {
            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('images'), $imageName);
        }

        return response()->json(['success'=>'Images Uploaded Successfully.']);

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
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function show(add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function edit(add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_inspection_car $add_inspection_car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_inspection_car  $add_inspection_car
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_inspection_car $add_inspection_car)
    {
        //
    }
}
