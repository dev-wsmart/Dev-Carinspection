<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Http\Request;
use App\brand;
use App\add_inspection_car;
use App\images_mn;
use DB;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // $inputAll = $request->all();
        // var_dump($inputAll);

        $id_car = $request->input('id_car');
        $id_detail = $request->input('id_detail');

        if($id_detail == '' && $id_car != ''){

        $inputdetail = new detail([

            'id_car' => $request->input('id_car'),

            'carrs01' => $request->input('carrs01'),
            'carrs02' => $request->input('carrs02'),
            'carrs03' => $request->input('carrs03'),
            'carrs04' => $request->input('carrs04'),
            'carrs05' => $request->input('carrs05'),
            'carrs06' => $request->input('carrs06'),
            'carrs07' => $request->input('carrs07'),
            'carrs08' => $request->input('carrs08'),
            'carrs09' => $request->input('carrs09'),
            'carrs10' => $request->input('carrs10'),
            'carrs11' => $request->input('carrs11'),
            'carrs12' => $request->input('carrs12'),

            'carin01' => $request->input('carin01'),
            'carin02' => $request->input('carin02'),
            'carin03' => $request->input('carin03'),
            'carin04' => $request->input('carin04'),
            'carin05' => $request->input('carin05'),
            'carin06' => $request->input('carin06'),
            'carin07' => $request->input('carin07'),
            'carin08' => $request->input('carin08'),

            'exterior_01' => $request->input('exterior_01'),
            'exterior_02' => $request->input('exterior_02'),
            'exterior_03' => $request->input('exterior_03'),
            'exterior_04' => $request->input('exterior_04'),
            'exterior_05' => $request->input('exterior_05'),
            'exterior_06' => $request->input('exterior_06'),
            'exterior_07' => $request->input('exterior_07'),
            'exterior_08' => $request->input('exterior_08'),
            'exterior_09' => $request->input('exterior_09'),
            'exterior_10' => $request->input('exterior_10'),
            'exterior_11' => $request->input('exterior_11'),
            'exterior_12' => $request->input('exterior_12'),
            'exterior_13' => $request->input('exterior_13'),
            'exterior_14' => $request->input('exterior_14'),
            'exterior_15' => $request->input('exterior_15'),
            'exterior_16' => $request->input('exterior_16'),
            'exterior_17' => $request->input('exterior_17'),
            'exterior_18' => $request->input('exterior_18'),
            'exterior_19' => $request->input('exterior_19'),
            'exterior_20' => $request->input('exterior_20'),

            'interior_01' => $request->input('interior_01'),
            'interior_02' => $request->input('interior_02'),
            'interior_03' => $request->input('interior_03'),
            'interior_04' => $request->input('interior_04'),
            'interior_05' => $request->input('interior_05'),
            'interior_06' => $request->input('interior_06'),
            'interior_07' => $request->input('interior_07'),
            'interior_08' => $request->input('interior_08'),
            'interior_09' => $request->input('interior_09'),
            'interior_10' => $request->input('interior_10'),
            'interior_11' => $request->input('interior_11'),
            'interior_12' => $request->input('interior_12'),
            'interior_13' => $request->input('interior_13'),
            'interior_14' => $request->input('interior_14'),
            'interior_15' => $request->input('interior_15'),

            'chasis_01' => $request->input('chasis_01'),
            'chasis_02' => $request->input('chasis_02'),
            'chasis_03' => $request->input('chasis_03'),

            'comment' => $request->input('comment')

        ]);


        $inputdetail->save();

        }

        // else
        // {
        //     $data = detail::find($id_detail);

        //     $data->id_car = $request->get('id_car');

        //     $data->carrs01 = $request->get('carrs01');
        //     $data->carrs02 = $request->get('carrs02');
        //     $data->carrs03 = $request->get('carrs03');
        //     $data->carrs04 = $request->get('carrs04');
        //     $data->carrs05 = $request->get('carrs05');
        //     $data->carrs06 = $request->get('carrs06');
        //     $data->carrs07 = $request->get('carrs07');
        //     $data->carrs08 = $request->get('carrs08');
        //     $data->carrs09 = $request->get('carrs09');
        //     $data->carrs10 = $request->get('carrs10');
        //     $data->carrs11 = $request->get('carrs11');
        //     $data->carrs12 = $request->get('carrs12');

        //     $data->carin01 = $request->get('carin01');
        //     $data->carin02 = $request->get('carin02');
        //     $data->carin03 = $request->get('carin03');
        //     $data->carin04 = $request->get('carin04');
        //     $data->carin05 = $request->get('carin05');
        //     $data->carin06 = $request->get('carin06');
        //     $data->carin07 = $request->get('carin07');
        //     $data->carin08 = $request->get('carin08');

        //     $data->exterior_01 = $request->get('exterior_01');
        //     $data->exterior_02 = $request->get('exterior_02');
        //     $data->exterior_03 = $request->get('exterior_03');
        //     $data->exterior_04 = $request->get('exterior_04');
        //     $data->exterior_05 = $request->get('exterior_05');
        //     $data->exterior_06 = $request->get('exterior_06');
        //     $data->exterior_07 = $request->get('exterior_07');
        //     $data->exterior_08 = $request->get('exterior_08');
        //     $data->exterior_09 = $request->get('exterior_09');
        //     $data->exterior_10 = $request->get('exterior_10');
        //     $data->exterior_11 = $request->get('exterior_11');
        //     $data->exterior_12 = $request->get('exterior_12');
        //     $data->exterior_13 = $request->get('exterior_13');
        //     $data->exterior_14 = $request->get('exterior_14');
        //     $data->exterior_15 = $request->get('exterior_15');
        //     $data->exterior_16 = $request->get('exterior_16');
        //     $data->exterior_17 = $request->get('exterior_17');
        //     $data->exterior_18 = $request->get('exterior_18');
        //     $data->exterior_19 = $request->get('exterior_19');
        //     $data->exterior_20 = $request->get('exterior_20');

        //     $data->interior_01 = $request->get('interior_01');
        //     $data->interior_02 = $request->get('interior_02');
        //     $data->interior_03 = $request->get('interior_03');
        //     $data->interior_04 = $request->get('interior_04');
        //     $data->interior_05 = $request->get('interior_05');
        //     $data->interior_06 = $request->get('interior_06');
        //     $data->interior_07 = $request->get('interior_07');
        //     $data->interior_08 = $request->get('interior_08');
        //     $data->interior_09 = $request->get('interior_09');
        //     $data->interior_10 = $request->get('interior_10');
        //     $data->interior_11 = $request->get('interior_11');
        //     $data->interior_12 = $request->get('interior_12');
        //     $data->interior_13 = $request->get('interior_13');
        //     $data->interior_14 = $request->get('interior_14');
        //     $data->interior_15 = $request->get('interior_15');

        //     $data->chasis_01 = $request->get('chasis_01');
        //     $data->chasis_02 = $request->get('chasis_02');
        //     $data->chasis_03 = $request->get('chasis_03');

        //     $data->comment = $request->get('comment');

        //     $data->save();
        // }


        // $images = DB::table('add_inspection_cars')
        // ->select(
        //          'add_inspection_cars.id','add_inspection_cars.fromtent','im0.name_image as image_mile',
        //          'im1.name_image as image_num','im2.name_image as image_2','im3.name_image as image_3',
        //          'im4.name_image as image_4','im5.name_image as image_5','im6.name_image as image_6',
        //          'im7.name_image as image_7','imA.name_image as image_A','imB.name_image as image_B',
        //          'imC.name_image as image_C','imD.name_image as image_D','imV.name_image as file_vdo',
        //          'im2.id_images as id_2','im3.id_images as id_3',
        //          'im4.id_images as id_4','im5.id_images as id_5','im6.id_images as id_6',
        //          'im7.id_images as id_7','imA.id_images as id_A','imB.id_images as id_B',
        //          'imC.id_images as id_C','imD.id_images as id_D','imV.id_images as id_vdo'
        //          )

        // ->join('images_mns as im0','add_inspection_cars.id','=','im0.id_car')
        // ->join('images_mns as im1','add_inspection_cars.id','=','im1.id_car')
        // ->join('images_mns as im2','add_inspection_cars.id','=','im2.id_car')
        // ->join('images_mns as im3','add_inspection_cars.id','=','im3.id_car')
        // ->join('images_mns as im4','add_inspection_cars.id','=','im4.id_car')
        // ->join('images_mns as im5','add_inspection_cars.id','=','im5.id_car')
        // ->join('images_mns as im6','add_inspection_cars.id','=','im6.id_car')
        // ->join('images_mns as im7','add_inspection_cars.id','=','im7.id_car')
        // ->join('images_mns as imA','add_inspection_cars.id','=','imA.id_car')
        // ->join('images_mns as imB','add_inspection_cars.id','=','imB.id_car')
        // ->join('images_mns as imC','add_inspection_cars.id','=','imC.id_car')
        // ->join('images_mns as imD','add_inspection_cars.id','=','imD.id_car')
        // ->join('images_mns as imV','add_inspection_cars.id','=','imV.id_car')

        // ->where([
        //             ['im0.type_image', '=', '0'],['im1.type_image', '=', '1'],['im2.type_image', '=', '2'],
        //             ['im3.type_image', '=', '3'],['im4.type_image', '=', '4'],['im5.type_image', '=', '5'],
        //             ['im6.type_image', '=', '6'],['im7.type_image', '=', '7'],['imA.type_image', '=', 'A'],
        //             ['imB.type_image', '=', 'B'],['imC.type_image', '=', 'C'],['imD.type_image', '=', 'D'],
        //             ['imV.type_image', '=', 'V']
        //         ])
        // ->where('add_inspection_cars.id', '=', $id_car)
        // ->get();


        // return view('upimages',compact('images'));



        $datas = DB::table('add_inspection_custos')
        ->select('add_inspection_custos.*','add_inspection_cars.*','add_inspection_dates.*',
                 'provinces.name_th','amphures.name_th as name_am','districts.name_th as name_dis',
                 'brands.name_brand','models.name_model','n.car_color as color_n','ccs.cc',
                 'sub_models.sub_model','b.car_color as color_b','dealers.dealer_name','packages.package_name',
                 'technicians.name_tech','details.*')

        ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
        ->join('add_inspection_dates', 'add_inspection_custos.id', '=', 'add_inspection_dates.id')
        ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
        ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
        ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
        ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
        ->join('models','add_inspection_cars.carmodel','=','models.id_model')
        ->join('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
        ->join('colors as b','add_inspection_cars.oldcolor','=','b.id_color')
        ->join('colors as n','add_inspection_cars.newcolor','=','n.id_color')
        ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
        ->join('dealers','add_inspection_cars.fromtent','=','dealers.id_dealer')
        ->join('packages','add_inspection_dates.package','=','packages.id_package')
        ->join('technicians','add_inspection_dates.inspector','=','technicians.id_tech')
        ->leftjoin('details','add_inspection_custos.id','=','details.id_car')

        ->where('add_inspection_custos.id', '=', $id_car)
        ->groupBy('add_inspection_custos.id')
        ->get();

    //   return view('views_ins', compact('datas'));


      return view('addreport', compact('datas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(detail $detail)
    {
        //
    }
}
