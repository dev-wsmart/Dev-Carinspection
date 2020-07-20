<?php

namespace App\Http\Controllers;

use App\cr;
use Illuminate\Http\Request;
use DB;
use App\images_mn;
use App\brand;
use App\add_inspection_car;

class car_showController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('car_show');
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
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr, $id)
    {
        //
        // echo $id;
        $datas = DB::table('details')
        ->select('details.*')
        ->where('details.id_car', '=', $id)
        ->first();


        // $images = DB::table('add_inspection_cars')
        // ->select('add_inspection_cars.id','im0.name_image as im_0')
        // ->leftjoin('images_mns as im0','add_inspection_cars.id','=','im0.id_car')
        // ->where('add_inspection_cars.id', '=', $id)
        // ->orwhere([['im0.id_car', '=', $id],['im0.type_image', '=', '0']])
        // ->get();


        return view('car_show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
