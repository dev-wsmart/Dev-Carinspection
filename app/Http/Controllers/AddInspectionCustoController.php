<?php

namespace App\Http\Controllers;

use App\add_inspection_custo;
use App\add_inspection_car;
use App\add_inspection_date;
use App\Province;
use App\district;
use App\subdistrict;
use App\package;
use App\color;
use App\brand;
use App\dealer;
use App\technician;
use App\cc;
use DB;
use Illuminate\Http\Request;
use App\user;

class AddInspectionCustoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // id max
        $id_max = add_inspection_custo::whereRaw('id = (select max(`id`) from add_inspection_custos)')->get();

        // data cc
        $tech = technician::all()->sortBy("name_tech");
        // data cc
        $cc = cc::all()->sortBy("cc");
        // data dealer
        $dealer = dealer::all()->sortBy("dealer_name");
        // data brand
        $brand = brand::all()->sortBy("name_brand");
        // data color
        $col = color::all()->sortBy("car_color");
        // data package
        $pac = package::all()->sortBy("package_name");
        // data province
        $province = Province::all()->sortBy("name_th");
        // show data to add-inspection-appointment
        return view('add-inspection-appointment',compact('province','pac','col','brand','dealer','cc','tech','id_max'));

    }
    public function getdistrictList(Request $request)
    {
        $states = DB::table("amphures")
        ->where("province_id",$request->province_id)
        ->pluck("name_th","id");
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = DB::table("districts")
        ->where("amphure_id",$request->amphure_id)
        ->pluck("name_th","id");
        return response()->json($cities);
    }

    public function getmodelList(Request $request)
    {
        $mode = DB::table("models")
        ->where("id_brand",$request->carBrand_id)
        ->pluck("name_model","id_model");
        return response()->json($mode);
    }
    public function getsubmodelList(Request $request)
    {
        $submode = DB::table("sub_models")
        ->where("id_model",$request->id_model)
        ->pluck("sub_model","id_sub_model");
        return response()->json($submode);
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

        $inputAll = $request->all();
        var_dump($inputAll);
        // $input = new add_inspection_custo([
        //     'nametitle' => $request->input('nametitle'),
        //     'firstname' => $request->input('firstname'),
        //     'lastname' => $request->input('lastname'),
        //     'address' => $request->input('address'),
        //     'province' => $request->input('province'),
        //     'district' => $request->input('district'),
        //     'subdistrict' => $request->input('subdistrict'),
        //     'postalcode' => $request->input('postalcode'),
        //     'idcard' => $request->input('idcard'),
        //     'tel' => $request->input('tel'),
        //     'customertype' => $request->input('customertype'),
        // ]);
        //      //
        // $input1 = new add_inspection_car([
        //     'carbrand' => $request->input('carbrand'),
        //     'carmodel' => $request->input('carmodel'),
        //     'submodel' => $request->input('submodel'),
        //     'oldcolor' => $request->input('oldcolor'),
        //     'newcolor' => $request->input('newcolor'),
        //     'year' => $request->input('year'),
        //     'seatnum' => $request->input('seatnum'),
        //     'place' => $request->input('place'),
        //     'registertype' => $request->input('registertype'),
        //     'carregnum' => $request->input('carregnum'),
        //     'mileage' => $request->input('mileage'),
        //     'dateregister' => $request->input('dateregister'),
        //     'numowners' => $request->input('numowners'),
        //     'cc' => $request->input('cc'),
        //     'geartype' => $request->input('geartype'),
        //     'engine' => $request->input('engine'),
        //     'vin' => $request->input('vin'),
        //     'benzine' => $request->input('benzine'),
        //     'diesel' => $request->input('diesel'),
        //     'hybrid' => $request->input('hybrid'),
        //     'electric' => $request->input('electric'),
        //     'lpg' => $request->input('lpg'),
        //     'ngv' => $request->input('ngv'),
        //     'cng' => $request->input('cng'),
        //     'carinsurance' => $request->input('carinsurance'),
        //     'expinsurance' => $request->input('expinsurance'),
        //     'insurance' => $request->input('insurance'),
        //     'tent' => $request->input('tent'),
        //     'fromtent' => $request->input('fromtent'),
        //     'price' => $request->input('price'),
        //     'payment' => $request->input('payment'),

        //     ]);

        //     $input2 = new add_inspection_date([

        //         'inspectiontype' => $request->input('inspectiontype'),
        //         'inspector' => $request->input('inspector'),
        //         'inspectiondate' => $request->input('inspectiondate'),
        //         'inspectiontime' => $request->input('inspectiontime'),
        //         'package' => $request->input('package'),
        //         'remark' => $request->input('remark')

        //         ]);
        //     // echo $input;
        //     $input->save();
        //     $input1->save();
        //     $input2->save();


        // return redirect('/appointment')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function edit(add_inspection_custo $add_inspection_custo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add_inspection_custo $add_inspection_custo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\add_inspection_custo  $add_inspection_custo
     * @return \Illuminate\Http\Response
     */
    public function destroy(add_inspection_custo $add_inspection_custo)
    {
        //
    }
}
