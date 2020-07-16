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
                    ->select('add_inspection_custos.*', 'add_inspection_cars.carregnum', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model', 'mile.id_car')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->where([['mile.status', '=', '0'], ['num.status', '=', '0'], ['mile.type_image', '=', '0'], ['num.type_image', '=', '1']])
                    ->paginate(10);

        return view('tablepending_approve', compact('datas'));
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
        $datas = DB::table('add_inspection_custos')
                    ->select('add_inspection_custos.*', 'add_inspection_cars.*', 'add_inspection_dates.*', 'dealers.dealer_name', 'brands.name_brand', 'models.name_model', 'technicians.name_tech','mile.id_images as id_images', 'mile.name_image as mile_img', 'mile.status as mile_status', 'num.name_image as num_img', 'num.status as num_status', 'mile.id_car')
                    ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                    ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
                    ->join('dealers', 'add_inspection_cars.fromtent', '=', 'dealers.id_dealer')
                    ->join('brands', 'add_inspection_cars.carbrand', '=', 'brands.id_brand')
                    ->join('models', 'add_inspection_cars.carmodel', '=', 'models.id_model')
                    ->join('technicians', 'add_inspection_dates.inspector', '=', 'technicians.id_tech')
                    ->join('images_mns as mile', 'add_inspection_custos.id', '=', 'mile.id_car')
                    ->join('images_mns as num', 'add_inspection_custos.id', '=', 'num.id_car')
                    ->where([['mile.status', '=', '0'], ['num.status', '=', '0'], ['mile.type_image', '=', '0'], ['num.type_image', '=', '1'], ['mile.id_car', '=', $id]])
                    ->paginate(10);
        return view('approvement', compact('datas'));
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
    public function update(Request $request, $id_car)
    {
        $status_mile = $request->get('mile_img');
        $status_num = $request->get('num_img');

        //Type 0 -> mile
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '0']])
        ->update(['status' => $status_mile]);

        //Type 1 -> num
        $update = DB::table('images_mns')
        ->where([['id_car', '=', $id_car], ['type_image', '=', '1']])
        ->update(['status' => $status_num]);

        return redirect('pending');
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
