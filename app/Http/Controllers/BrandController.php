<?php

namespace App\Http\Controllers;

use App\brand;
use App\add_inspection_car;
use App\images_mn;
use Illuminate\Http\Request;
use DB;
use Validator;

class BrandController extends Controller
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

    public function imageUpload()
    {
        // $data = carregnum::all();
        return view('upload-img');
    }

    function action2(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_2');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'FI-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_2'   => $new_name_car,
                'uploaded_image_2' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_2'   => $validation->errors()->all(),
                    'uploaded_image_2' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action3(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_3');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BI-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_3'   => $new_name_car,
                'uploaded_image_3' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_3'   => $validation->errors()->all(),
                    'uploaded_image_3' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action4(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_4');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'CN-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_4'   => $new_name_car,
                'uploaded_image_4' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_4'   => $validation->errors()->all(),
                    'uploaded_image_4' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action5(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_5' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_5');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'EN-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_5'   => $new_name_car,
                'uploaded_image_5' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_5'   => $validation->errors()->all(),
                    'uploaded_image_5' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action6(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_6' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_6');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'EI-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_6'   => $new_name_car,
                'uploaded_image_6' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_6'   => $validation->errors()->all(),
                    'uploaded_image_6' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function action7(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_7' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_7');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'ODB-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_7'   => $new_name_car,
                'uploaded_image_7' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_7'   => $validation->errors()->all(),
                    'uploaded_image_7' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionA(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_A' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_A');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'FL-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_A'   => $new_name_car,
                'uploaded_image_A' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_A'   => $validation->errors()->all(),
                    'uploaded_image_A' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionB(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_B' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_B');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'FR-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_B'   => $new_name_car,
                'uploaded_image_B' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_B'   => $validation->errors()->all(),
                    'uploaded_image_B' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionC(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_C' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_C');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BL-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_C'   => $new_name_car,
                'uploaded_image_C' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_C'   => $validation->errors()->all(),
                    'uploaded_image_C' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
    }

    function actionD(Request $request)
    {
        $validation = Validator::make($request->all(), [
                'image_D' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            if($validation->passes())
            {
                $image = $request->file('image_D');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $new_name_car = 'BR-'.$new_name;
                $image->move(public_path('images_test'), $new_name_car);
                return response()->json([
                // 'message_num'   => 'Image Upload Successfully / image - name : '.$new_name_car,
                'message_D'   => $new_name_car,
                'uploaded_image_D' => '<img src="/images_test/'.$new_name_car.'" class="img-thumbnail" width="80%" align="center" />',
                'class_name'  => 'alert-success'
                ]);
            }
            else
            {
                return response()->json([
                    'message_D'   => $validation->errors()->all(),
                    'uploaded_image_D' => '',
                    'class_name'  => 'alert-success'
                    // 'class_name'  => 'alert-danger'
                ]);
            }
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

                        $inputAll = $request->all();
                        var_dump($inputAll);

                        // "<br><br>";

                        $image2 = $request->file('image_2');
        if($image2 != ''){
                        $new_name_2 = rand() . '.' . $image2->getClientOriginalExtension();
                        $new_name_im2 = 'FI-'.$new_name_2;
                        // $image2->move(public_path('images'), $new_name_im2);
                        $input2 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im2,
                            'type_image' => '2',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input2;
                            // $input2->save();
                        }

                        // "<br>";

                        $image3 = $request->file('image_3');
        if($image3 != ''){
                        $new_name_3 = rand() . '.' . $image3->getClientOriginalExtension();
                        $new_name_im3 = 'BI-'.$new_name_3;
                        // $image3->move(public_path('images'), $new_name_im3);
                        $input3 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im3,
                            'type_image' => '3',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input3;
                            // $input3->save();

                        }

                        // "<br>";

                        $image4 = $request->file('image_4');
        if($image4 != ''){
                        $new_name_4 = rand() . '.' . $image4->getClientOriginalExtension();
                        $new_name_im4 = 'CN-'.$new_name_4;
                        // $image4->move(public_path('images'), $new_name_im4);
                        $input4 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im4,
                            'type_image' => '4',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input4;
                            // $input4->save();

                        }

                        // "<br>";

                        $image5 = $request->file('image_5');
        if($image5 != ''){
                        $new_name_5 = rand() . '.' . $image5->getClientOriginalExtension();
                        $new_name_im5 = 'EN-'.$new_name_5;
                        // $image5->move(public_path('images'), $new_name_im5);
                        $input5 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im5,
                            'type_image' => '5',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input5;
                            // $input5->save();

                        }

                        // "<br>";

                        $image6 = $request->file('image_6');
        if($image6 != ''){
                        $new_name_6 = rand() . '.' . $image6->getClientOriginalExtension();
                        $new_name_im6 = 'EI-'.$new_name_6;
                        // $image6->move(public_path('images'), $new_name_im6);
                        $input6 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im6,
                            'type_image' => '6',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input6;
                            // $input6->save();

                        }

                        // "<br>";

                        $image7 = $request->file('image_7');
        if($image7 != ''){
                        $new_name_7 = rand() . '.' . $image7->getClientOriginalExtension();
                        $new_name_im7 = 'ODB-'.$new_name_7;
                        // $image7->move(public_path('images'), $new_name_im7);
                        $input7 = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_im7,
                            'type_image' => '7',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$input7;
                            // $input7->save();

                        }

                        // "<br>";

                        $imageA = $request->file('image_A');
        if($imageA != ''){
                        $new_name_A = rand() . '.' . $imageA->getClientOriginalExtension();
                        $new_name_imA = 'FL-'.$new_name_A;
                        // $imageA->move(public_path('images'), $new_name_imA);
                        $inputA = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_imA,
                            'type_image' => 'A',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$inputA;
                            // $inputA->save();

                        }

                        // "<br>";

                        $imageB = $request->file('image_B');
        if($imageB != ''){
                        $new_name_B = rand() . '.' . $imageB->getClientOriginalExtension();
                        $new_name_imB = 'FR-'.$new_name_B;
                        // $imageB->move(public_path('images'), $new_name_imB);
                        $inputB = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_imB,
                            'type_image' => 'B',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$inputB;
                            // $inputB->save();

                        }

                        // "<br>";

                        $imageC = $request->file('image_C');
        if($imageC != ''){
                        $new_name_C = rand() . '.' . $imageC->getClientOriginalExtension();
                        $new_name_imC = 'BL-'.$new_name_C;
                        // $imageC->move(public_path('images'), $new_name_imC);
                        $inputC = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_imC,
                            'type_image' => 'C',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$inputC;
                            // $inputC->save();
                        }
                        // "<br>";

                        $imageD = $request->file('image_D');
        if($imageD != ''){
                        $new_name_D = rand() . '.' . $imageD->getClientOriginalExtension();
                        $new_name_imD = 'BR-'.$new_name_D;
                        // $imageD->move(public_path('images'), $new_name_imD);
                        $inputD = new images_mn([

                            'id_car' => $request->input('id_car'),
                            'name_image' => $new_name_imD,
                            'type_image' => 'D',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')

                            ]);
                            echo "<br>".$inputD;
                            // $inputD->save();
                        }

                        // "<br>";

                        $vdo = $request->input('file_vdo');
                        $id_vdo = $request->input('id_vdo');
        if($vdo != '' && $id_vdo != ''){
                        $inputVDO = new images_mn([

                            'id_images' => $id_vdo,
                            'id_car' => $id_vdo,
                            'id_car' => $request->input('id_car'),
                            'name_image' => $request->input('file_vdo'),
                            'type_image' => 'V',
                            'id_dealer' => $request->input('fromtent'),
                            'status' => '1',
                            'confirm' => $request->input('userID')
                            // $data->nametitle = $request->get('nametitle');

                            ]);
                            echo "<br><br>".$inputVDO.' - '.$id_vdo;
                            // $inputVDO->save();

                        }


                    // return redirect('/upload-img')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // var_dump($id);
        $images = DB::table('add_inspection_cars')
        ->select(
                 'add_inspection_cars.id','add_inspection_cars.fromtent','im0.name_image as image_mile',
                 'im1.name_image as image_num','im2.name_image as image_2','im3.name_image as image_3',
                 'im4.name_image as image_4','im5.name_image as image_5','im6.name_image as image_6',
                 'im7.name_image as image_7','imA.name_image as image_A','imB.name_image as image_B',
                 'imC.name_image as image_C','imD.name_image as image_D','imV.name_image as file_vdo',
                 'im2.id_images as id_2','im3.id_images as id_3',
                 'im4.id_images as id_4','im5.id_images as id_5','im6.id_images as id_6',
                 'im7.id_images as id_7','imA.id_images as id_A','imB.id_images as id_B',
                 'imC.id_images as id_C','imD.id_images as id_D','imV.id_images as id_vdo'
                 )

        ->join('images_mns as im0','add_inspection_cars.id','=','im0.id_car')
        ->join('images_mns as im1','add_inspection_cars.id','=','im1.id_car')
        ->join('images_mns as im2','add_inspection_cars.id','=','im2.id_car')
        ->join('images_mns as im3','add_inspection_cars.id','=','im3.id_car')
        ->join('images_mns as im4','add_inspection_cars.id','=','im4.id_car')
        ->join('images_mns as im5','add_inspection_cars.id','=','im5.id_car')
        ->join('images_mns as im6','add_inspection_cars.id','=','im6.id_car')
        ->join('images_mns as im7','add_inspection_cars.id','=','im7.id_car')
        ->join('images_mns as imA','add_inspection_cars.id','=','imA.id_car')
        ->join('images_mns as imB','add_inspection_cars.id','=','imB.id_car')
        ->join('images_mns as imC','add_inspection_cars.id','=','imC.id_car')
        ->join('images_mns as imD','add_inspection_cars.id','=','imD.id_car')
        ->join('images_mns as imV','add_inspection_cars.id','=','imV.id_car')

        ->where([
                    ['im0.type_image', '=', '0'],['im1.type_image', '=', '1'],['im2.type_image', '=', '2'],
                    ['im3.type_image', '=', '3'],['im4.type_image', '=', '4'],['im5.type_image', '=', '5'],
                    ['im6.type_image', '=', '6'],['im7.type_image', '=', '7'],['imA.type_image', '=', 'A'],
                    ['imB.type_image', '=', 'B'],['imC.type_image', '=', 'C'],['imD.type_image', '=', 'D'],
                    ['imV.type_image', '=', 'V']
                ])
        ->where('add_inspection_cars.id', '=', $id)
        ->get();


        return view('upimages',compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        //                 // upload images full

        //                 $inputAll = $request->all();
        //                 var_dump($inputAll);

        //                 // "<br><br>";

        //                 $image2 = $request->file('image_2');
        // if($image2 != ''){
        //                 $new_name_2 = rand() . '.' . $image2->getClientOriginalExtension();
        //                 $new_name_im2 = 'FI-'.$new_name_2;
        //                 // $image2->move(public_path('images'), $new_name_im2);
        //                 $input2 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im2,
        //                     'type_image' => '2',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input2;
        //                 }

        //                 // "<br>";

        //                 $image3 = $request->file('image_3');
        // if($image3 != ''){
        //                 $new_name_3 = rand() . '.' . $image3->getClientOriginalExtension();
        //                 $new_name_im3 = 'BI-'.$new_name_3;
        //                 // $image3->move(public_path('images'), $new_name_im3);
        //                 $input3 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im3,
        //                     'type_image' => '3',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input3;

        //                 }

        //                 // "<br>";

        //                 $image4 = $request->file('image_4');
        // if($image4 != ''){
        //                 $new_name_4 = rand() . '.' . $image4->getClientOriginalExtension();
        //                 $new_name_im4 = 'CN-'.$new_name_4;
        //                 // $image4->move(public_path('images'), $new_name_im4);
        //                 $input4 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im4,
        //                     'type_image' => '4',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input4;

        //                 }

        //                 // "<br>";

        //                 $image5 = $request->file('image_5');
        // if($image5 != ''){
        //                 $new_name_5 = rand() . '.' . $image5->getClientOriginalExtension();
        //                 $new_name_im5 = 'EN-'.$new_name_5;
        //                 // $image5->move(public_path('images'), $new_name_im5);
        //                 $input5 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im5,
        //                     'type_image' => '5',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input5;

        //                 }

        //                 // "<br>";

        //                 $image6 = $request->file('image_6');
        // if($image6 != ''){
        //                 $new_name_6 = rand() . '.' . $image6->getClientOriginalExtension();
        //                 $new_name_im6 = 'EI-'.$new_name_6;
        //                 // $image6->move(public_path('images'), $new_name_im6);
        //                 $input6 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im6,
        //                     'type_image' => '6',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input6;

        //                 }

        //                 // "<br>";

        //                 $image7 = $request->file('image_7');
        // if($image7 != ''){
        //                 $new_name_7 = rand() . '.' . $image7->getClientOriginalExtension();
        //                 $new_name_im7 = 'ODB-'.$new_name_7;
        //                 // $image7->move(public_path('images'), $new_name_im7);
        //                 $input7 = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_im7,
        //                     'type_image' => '7',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$input7;

        //                 }

        //                 // "<br>";

        //                 $imageA = $request->file('image_A');
        // if($imageA != ''){
        //                 $new_name_A = rand() . '.' . $imageA->getClientOriginalExtension();
        //                 $new_name_imA = 'FL-'.$new_name_A;
        //                 // $imageA->move(public_path('images'), $new_name_imA);
        //                 $inputA = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_imA,
        //                     'type_image' => 'A',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$inputA;

        //                 }

        //                 // "<br>";

        //                 $imageB = $request->file('image_B');
        // if($imageB != ''){
        //                 $new_name_B = rand() . '.' . $imageB->getClientOriginalExtension();
        //                 $new_name_imB = 'FR-'.$new_name_B;
        //                 // $imageB->move(public_path('images'), $new_name_imB);
        //                 $inputB = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_imB,
        //                     'type_image' => 'B',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$inputB;

        //                 }

        //                 // "<br>";

        //                 $imageC = $request->file('image_C');
        // if($imageC != ''){
        //                 $new_name_C = rand() . '.' . $imageC->getClientOriginalExtension();
        //                 $new_name_imC = 'BL-'.$new_name_C;
        //                 // $imageC->move(public_path('images'), $new_name_imC);
        //                 $inputC = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_imC,
        //                     'type_image' => 'C',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$inputC;
        //                 }
        //                 // "<br>";

        //                 $imageD = $request->file('image_D');
        // if($imageD != ''){
        //                 $new_name_D = rand() . '.' . $imageD->getClientOriginalExtension();
        //                 $new_name_imD = 'BR-'.$new_name_D;
        //                 // $imageD->move(public_path('images'), $new_name_imD);
        //                 $inputD = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $new_name_imD,
        //                     'type_image' => 'D',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$inputD;
        //                 }

        //                 // "<br>";

        //                 $vdo = $request->input('file_vdo');
        // if($vdo != ''){
        //                 $inputVDO = new images_mn([

        //                     'id_car' => $request->input('id_car'),
        //                     'name_image' => $request->input('file_vdo'),
        //                     'type_image' => 'V',
        //                     'id_dealer' => $request->input('fromtent'),
        //                     'status' => '1',
        //                     'confirm' => $request->input('userID')

        //                     ]);
        //                     echo "<br>".$inputVDO;

        //                 }

                    //     $input2->save();
                    //     $input3->save();
                    //     $input4->save();
                    //     $input5->save();
                    //     $input6->save();
                    //     $input7->save();
                    //     $inputA->save();
                    //     $inputB->save();
                    //     $inputC->save();
                    //     $inputD->save();
                    //     $inputVDO->save();

                    // return redirect('/upload-img')->with('success', 'ได้ทำการเพิ่ม การประชุมย่อย เรียบร้อยแล้ว');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(brand $brand)
    {
        //
    }
}
