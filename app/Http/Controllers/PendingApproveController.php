<?php

namespace App\Http\Controllers;

use DB;
use App\PendingApprove;
use Illuminate\Http\Request;

class PendingApproveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('add_inspection_custos')
                    ->select('add_inspection_custos.*', 'add_inspection_cars.carregnum', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->where([['mile.status', '=', '0'], ['num.status', '=', '0'], ['mile.type_image', '=', '0'], ['num.type_image', '=', '1']])
                    ->paginate(10);

        return view('pending_approve', compact('datas'));
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
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function edit(PendingApprove $pendingApprove)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PendingApprove $pendingApprove)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PendingApprove  $pendingApprove
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendingApprove $pendingApprove)
    {
        //
    }
}
