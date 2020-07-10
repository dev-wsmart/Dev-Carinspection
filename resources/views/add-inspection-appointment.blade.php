@extends('layouts.admin_layout')
@section('title', 'Inspection Appointment')
@section('content')
<div class="col-md-2"></div>
<div class="col-md-9" style="margin-top:2%; margin-left:5%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h3 class="title">เพิ่มข้อมูลนัดตรวจรถ</h3>
        </div>
        <hr noshade><br>
        <a style="margin-right:3%">
            @foreach($id_max as $key => $id_maxs)
            {{-- {{ $idmax = $id_maxs->id }} --}}

                    <?php
                        $idmax = $id_maxs->id;
                        $id_maxins = 'inspec-'.str_pad(($idmax+1),6,'0',STR_PAD_LEFT);
                        echo 'เลขที่ตรวจสภาพรถ : '.$id_maxins;

                    ?>
            @endforeach
        </a>
        <br><br>
        <div class="col-12">
            <form action='{{ route('add-inspection-appointment.store') }}' method='POST' enctype='multipart/form-data' name="add_inspection">
                @csrf
                <div class="form-title">ข้อมูลลูกค้า</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="nameTitle">คำนำหน้า</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="nametitle" id="nameTitle" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="บริษัท">บริษัท</option>
                            <option value="เต๊นท์">เต็นท์</option>
                        </select>

                        <label class="col-lg-1" for="firstname">ชื่อ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="firstname" id="firstname" required>

                        <label class="col-lg-1" for="lastname">นามสกุล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="lastname" id="lastname" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="address">ที่อยู่</label>
                        <input class="col-lg-6 form-control form-control-sm form-border" type="text" name="address" id="address" required>

                        <label class="col-lg-1" for="province">จังหวัด</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="province" id="province" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($province as $key => $data)
                            <option value="{{ $data->id }}">{{ $data->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="district">เขต/อำเภอ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="district" id="district" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-2" for="subDistrict">แขวง/ตำบล</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="subdistrict" id="subDistrict" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-2" for="postalCode">รหัสไปรษณีย์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="postalcode" id="postalCode" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idcard" id="idCard">

                        <label class="col-lg-2" for="tel">เบอร์โทรศัพท์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" required>

                        <label class="col-lg-2" for="customerType">ประเภทสมาชิก</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="customertype" id="customerType" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            <option value="สมาชิกทั่วไป">สมาชิกทั่วไป</option>
                            <option value="สมาชิกรูปแบบเต๊นท์" selected>สมาชิกรูปแบบเต็นท์</option>
                        </select>
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">ข้อมูลรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="carbrand" id="carBrand" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($brand as $key => $brands)
                            <option value="{{ $brands->id_brand }}">{{ $brands->name_brand }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="carModel">รุ่น</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carmodel" id="carModel" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                        </select>

                        <label class="col-lg-1" for="subModel">รุ่นย่อย</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="submodel" id="subModel" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="oldColor">สีเดิม</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="oldcolor" id="oldColor" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($col as $key => $cols)
                            <option value="{{ $cols->id_color }}">{{ $cols->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="newColor">สีปัจจุบัน</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newcolor" id="newColor" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($col as $key => $cols)
                            <option value="{{ $cols->id_color }}">{{ $cols->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="year">ปี</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="year" id="year" required>

                        <label class="col-lg-1 pr-0" for="seatNum">จำนวนที่นั่ง</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatnum" id="seatNum" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            <option value="2">2</option>
                            <option value="4" selected>4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="11">11</option>
                            <option value="12">12</option>

                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="place" id="place" required>
                            <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="registerType">ประเภทจดทะเบียน</label>
                        <div class="col-lg-4 btnCustom">
                            <input type="radio" name="registertype" id="registerType1" value="0" checked>
                            <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                            <input type="radio" name="registertype" id="registerType2" value="1">
                            <label for="registerType2">จดในนามบริษัท</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carregnum" id="carRegNum" required>

                        <label class="col-lg-2 pl-lg-5" for="mileage">เลขไมล์ปัจจุบัน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" required>

                        <label class="col-lg-2 pl-lg-5" for="dateRegister">วันที่จดทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateregister" id="dateRegister" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="numowners" id="numOwners" required>

                        {{-- <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" required> --}}

                        <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="cc" id="cc" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($cc as $key => $ccs)
                            <option value="{{ $ccs->id_cc }}" {{ ($ccs->cc == '1.8' ? 'selected' : '')}}>{{ $ccs->cc }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2" for="gearType" align="right">ระบบเกียร์</label>
                        <div class="col-lg-3 btnCustom">
                            <input class="form-control" type="radio" name="geartype" id="gearType1" value="0">
                            <label for="gearType1">เกียร์ธรรมดา</label>

                            <input type="radio" name="geartype" id="gearType2" value="1">
                            <label for="gearType2">เกียร์อัตโนมัติ</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" required>

                        <label class="col-lg-2 pl-lg-5" for="vin">หมายเลขตัวถัง</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                        <div class="col-lg-10 btnCustom">
                            <input type="checkbox" name="benzine" id="benzine" value="1">
                            <label for="benzine">เบนซิน</label>
                            <input type="checkbox" name="diesel" id="diesel" value="1">
                            <label for="diesel">ดีเซล</label>
                            <input type="checkbox" name="hybrid" id="hybrid" value="1">
                            <label for="hybrid">ไฮบริด</label>
                            <input type="checkbox" name="electric" id="electric" value="1">
                            <label for="electric">ไฟฟ้า</label>
                            <input type="checkbox" name="lpg" id="lpg" value="1">
                            <label for="lpg">LPG</label>
                            <input type="checkbox" name="ngv" id="ngv" value="1">
                            <label for="ngv">NGV</label>
                            <input type="checkbox" name="cng" id="cng" value="1">
                            <label for="cng">CNG</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carinsurance" id="carInsurance1" value="0">
                            <label for="carInsurance1">มี</label>
                            <input type="radio" name="carinsurance" id="carInsurance2" value="1">
                            <label for="carInsurance2">ไม่มี</label>
                        </div>

                        <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expinsurance" id="expInsurance">

                        <label class="col-lg-2 pl-lg-5" for="insurance">บริษัทประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="tent">รถเต็นท์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="tent" id="tent1" value="0">
                            <label for="tent1">ใช่</label>
                            <input type="radio" name="tent" id="tent2" value="1">
                            <label for="tent2">ไม่ใช่</label>
                        </div>

                        <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="fromtent" id="fromTent">
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($dealer as $key => $dealers)
                                <option value="{{ $dealers->id_dealer }}">{{ $dealers->dealer_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="price">ราคา</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price">

                        <label class="col-lg-1 pr-lg-0" for="payment">ผ่อนงวดละ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment">
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">วันนัดตรวจรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionType">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="inspectiontype" id="inspectionType" required>
                            <option>---  กรุณาเลือก  ---</option>
                            <option value="0">Full Inspection</option>
                            <option value="1">Warranty</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="inspector">ช่างที่ไปตรวจรถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspector" id="inspector" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($tech as $key => $techs)
                            <option value="{{ $techs->id_tech }}">{{ $techs->name_tech }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionDate">วันที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="inspectiondate" id="inspectionDate" required>

                        <label class="col-lg-2 pl-lg-5" for="inspectionTime">เวลาที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="time" name="inspectiontime" id="inspectionTime" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-1" for="package">แพคเกจ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="package" id="package">
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            @foreach($pac as $key => $pacs)
                            <option value="{{ $pacs->id_package }}">{{ $pacs->package_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="remark">Remark</label>
                        <textarea class="col-lg-5 form-control form-control-sm form-border" name="remark" id="remark"></textarea>
                    </div>
                    <br>
                </form>
                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปเลขไมล์รถ</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">รูปเล่มทะเบียนรถ</label>

                            {{-- if images --}}
                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                {{-- <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data" id="image_mile">
                                    @csrf --}}
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" name="image_mile" class="form-control" height="2%">
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-success">ADD</button>
                                        </div>
                                    </div>

                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images_test/{{ Session::get('image') }}" style="width:100%">
                                            </div>
                                        </div>
                                        @endif
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger col-md-6">
                                                <strong>Whoops!</strong> There were some problems with your input.
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                {{-- </form> --}}
                            </div>
                            {{-- <div class="col-md-1"></div> --}}
                            <div class="col-md-6 list-group-item">
                                {{-- <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data" id="image_num">
                                @csrf --}}
                                    <div class="row">
                                        <div class="col-md-10">
                                            <input type="file" name="image_num" class="form-control" height="2%">
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" class="btn btn-success">ADD</button>
                                        </div>
                                    </div>

                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="images_test/{{ Session::get('image') }}" style="width:100%">
                                            </div>
                                        </div>
                                        @endif
                                        @if (count($errors) > 0)
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                {{-- </form> --}}
                            </div>
                        </div>
                            {{-- end if images --}}
                     </div>
                </div>
        <form action='{{ route('add-inspection-appointment.store') }}' method='POST' enctype='multipart/form-data' name="add_inspection">
            @csrf
                <div class="col-12 pt-2 pt-lg-4 text-center">
                    <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button>
                   <a href="{{ route('appointment.index')}}"> <button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>
                </div>
        </form>

            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
</div>
</div>


<script type="text/javascript">

$('#province').change(function(){
    var provinceID = $(this).val();
    if(provinceID){
        $.ajax({
           type:"GET",
           url:"{{url('get-district-list')}}?province_id="+provinceID,
           success:function(res){
            if(res){
                $("#district").empty();
                $("#district").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#district").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#district").empty();
            }
           }
        });
    }else{
        $("#district").empty();
        $("#subDistrict").empty();
    }
});
$('#district').on('change',function(){
    var districtID = $(this).val();
    if(districtID){
        $.ajax({
           type:"GET",
           url:"{{url('get-subdis-list')}}?amphure_id="+districtID,
           success:function(res){
            if(res){
                $("#subDistrict").empty();
                $("#subDistrict").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#subDistrict").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#subDistrict").empty();
            }
           }
        });
    }else{
        $("#subDistrict").empty();
    }
    // alert(districtID);
   });


//  brand - model - sub_model
$('#carBrand').change(function(){
    var carBrandID = $(this).val();
    if(carBrandID){
        $.ajax({
           type:"GET",
           url:"{{url('get-model-list')}}?carBrand_id="+carBrandID,
           success:function(res){
            if(res){
                $("#carModel").empty();
                $("#carModel").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#carModel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#carModel").empty();
            }
           }
        });
    }else{
        $("#carModel").empty();
        $("#subModel").empty();
    }
});
$('#carModel').on('change',function(){
    var carModelID = $(this).val();
    if(carModelID){
        $.ajax({
           type:"GET",
           url:"{{url('get-submodel-list')}}?id_model="+carModelID,
           success:function(res){
            if(res){
                $("#subModel").empty();
                $("#subModel").append('<option disabled selected>---  กรุณาเลือก  ---</option>');
                $.each(res,function(key,value){
                    $("#subModel").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#subModel").empty();
            }
           }
        });
    }else{
        $("#subModel").empty();
    }
    // alert(carModelID);
   });

   //  images mile
   $(document).ready(function(){

        $('#upload_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
            url:"{{ route('ajaxupload.action') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
                {
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $('#uploaded_image').html(data.uploaded_image);
                }
            })
        });

});

</script>


@endsection
