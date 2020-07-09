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
            <h3 class="title">แก้ไขข้อมูลนัดตรวจรถ</h3>
        </div>
        <hr noshade>
        <div class="col-12">

            @foreach($datas as $data)

            {{-- <form action="" method='POST'> --}}

            <form action="{{ route('appointment.update',$data->id) }}" method='POST'>
                @method('PATCH')
                @csrf
                <div class="form-title">ข้อมูลลูกค้า</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="nameTitle">คำนำหน้า</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="nametitle" id="nameTitle" required>
                            <option disabled selected>---  กรุณาเลือก  ---</option>
                            <option value="นาย" {{($data->nametitle ==='นาย') ? 'selected' : ''}}>นาย</option>
                            <option value="นาง" {{($data->nametitle ==='นาง') ? 'selected' : ''}}>นาง</option>
                            <option value="นางสาว" {{($data->nametitle ==='นางสาว') ? 'selected' : ''}}>นางสาว</option>
                            <option value="บริษัท" {{($data->nametitle ==='บริษัท') ? 'selected' : ''}}>บริษัท</option>
                            <option value="เต๊นท์" {{($data->nametitle ==='เต๊นท์') ? 'selected' : ''}}>เต็นท์</option>
                        </select>

                        <label class="col-lg-1" for="firstname">ชื่อ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="firstname" id="firstname" value="{{$data->firstname}}" required>

                        <label class="col-lg-1" for="lastname">นามสกุล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="lastname" id="lastname" value="{{$data->lastname}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="address">ที่อยู่</label>
                        <input class="col-lg-6 form-control form-control-sm form-border" type="text" name="address" id="address" value="{{$data->address}}" required>

                        <label class="col-lg-1" for="province">จังหวัด</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="province" id="province" value="{{$data->province}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id }}" disabled selected>{{ $data->name_th }}</option>
                            @foreach($province as $key => $datas)
                            <option value="{{ $datas->id }}">{{ $datas->name_th }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="district">เขต/อำเภอ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="district" id="district" value="{{$data->district}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id }}">{{ $data->name_am }}</option>
                        </select>

                        <label class="col-lg-2" for="subDistrict">แขวง/ตำบล</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="subdistrict" id="subDistrict" value="{{$data->subdistrict}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id }}">{{ $data->name_dis }}</option>
                        </select>

                        <label class="col-lg-2" for="postalCode">รหัสไปรษณีย์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="postalcode" id="postalCode" value="{{$data->postalcode}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idcard" id="idCard" value="{{$data->idcard}}">

                        <label class="col-lg-2" for="tel">เบอร์โทรศัพท์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" value="{{$data->tel}}" required>

                        <label class="col-lg-2" for="customerType">ประเภทสมาชิก</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="customertype" id="customerType" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="สมาชิกทั่วไป" {{($data->customertype ==='สมาชิกทั่วไป') ? 'selected' : ''}}>สมาชิกทั่วไป</option>
                            <option value="สมาชิกรูปแบบเต๊นท์" {{($data->customertype ==='สมาชิกรูปแบบเต๊นท์') ? 'selected' : ''}}>สมาชิกรูปแบบเต็นท์</option>
                        </select>
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">ข้อมูลรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="carbrand" id="carBrand" value="{{$data->carbrand}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_brand }}" disabled selected>{{ $data->name_brand }}</option>
                            @foreach($brand as $key => $datas)
                            <option value="{{ $datas->id_brand }}">{{ $datas->name_brand }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="carModel">รุ่น</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carmodel" id="carModel" value="{{$data->carmodel}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_model }}">{{ $data->name_model }}</option>
                        </select>

                        <label class="col-lg-1" for="subModel">รุ่นย่อย</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="submodel" id="subModel" value="{{$data->submodel}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_sub_model }}">{{ $data->sub_model }}</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="oldColor">สีเดิม</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="oldcolor" id="oldColor" value="{{$data->oldcolor}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_b }}" disabled selected>{{ $data->n_b }}</option>
                            @foreach($col as $key => $datas)
                            <option value="{{ $datas->id_color }}">{{ $datas->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="newColor">สีปัจจุบัน</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newcolor" id="newColor" value="{{$data->newcolor}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_n }}" disabled selected>{{ $data->n_n }}</option>
                            @foreach($col as $key => $datas)
                            <option value="{{ $datas->id_color }}">{{ $datas->car_color }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="year">ปี</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="year" id="year" value="{{$data->year}}" required>

                        <label class="col-lg-1 pr-0" for="seatNum">จำนวนที่นั่ง</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatnum" id="seatNum" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="2" {{($data->seatnum ==='2') ? 'selected' : ''}}>2</option>
                            <option value="4" {{($data->seatnum ==='4') ? 'selected' : ''}}>4</option>
                            <option value="5" {{($data->seatnum ==='5') ? 'selected' : ''}}>5</option>
                            <option value="6" {{($data->seatnum ==='6') ? 'selected' : ''}}>6</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="place" id="place" value="{{$data->place}}" required>
                            <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="registerType">ประเภทจดทะเบียน</label>
                        <div class="col-lg-4 btnCustom">
                            <input type="radio" name="registertype" id="registerType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}}>
                            <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                            <input type="radio" name="registertype" id="registerType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}}>
                            <label for="registerType2">จดในนามบริษัท</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carregnum" id="carRegNum" value="{{$data->carregnum}}" required>

                        <label class="col-lg-2 pl-lg-5" for="mileage">เลขไมล์ปัจจุบัน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" value="{{$data->mileage}}" required>

                        <label class="col-lg-2 pl-lg-5" for="dateRegister">วันที่จดทะเบียนรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateregister" id="dateRegister" value="{{$data->dateregister}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                        <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="numowners" id="numOwners" value="{{$data->numowners}}" required>

                        <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                        {{-- <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" required> --}}
                        <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->cc }}" disabled selected>{{ $data->cc }}</option>
                            @foreach($cc as $key => $datas)
                            <option value="{{ $datas->cc }}">{{ $datas->cc }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1 pr-lg-1" for="gearType">ระบบเกียร์</label>
                        <div class="col-lg-4 btnCustom">
                            <input class="form-control" type="radio" name="geartype" id="gearType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}}>
                            <label for="gearType1">เกียร์ธรรมดา</label>

                            <input type="radio" name="geartype" id="gearType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}}>
                            <label for="gearType2">เกียร์อัตโนมัติ</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" value="{{$data->engine}}" required>

                        <label class="col-lg-2 pl-lg-5" for="vin">หมายเลขตัวถัง</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" value="{{$data->vin}}" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                        <div class="col-lg-10 btnCustom">
                            <input type="checkbox" name="benzine" id="benzine" value="1" {{ $data->benzine == '1' ? 'checked' : ''}}>
                            <label for="benzine">เบนซิน</label>
                            <input type="checkbox" name="diesel" id="diesel" value="1" {{ $data->diesel == '1' ? 'checked' : ''}}>
                            <label for="diesel">ดีเซล</label>
                            <input type="checkbox" name="hybrid" id="hybrid" value="1" {{ $data->hybrid == '1' ? 'checked' : ''}}>
                            <label for="hybrid">ไฮบริด</label>
                            <input type="checkbox" name="electric" id="electric" value="1" {{ $data->electric == '1' ? 'checked' : ''}}>
                            <label for="electric">ไฟฟ้า</label>
                            <input type="checkbox" name="lpg" id="lpg" value="1" {{ $data->lpg == '1' ? 'checked' : ''}}>
                            <label for="lpg">LPG</label>
                            <input type="checkbox" name="ngv" id="ngv" value="1" {{ $data->ngv == '1' ? 'checked' : ''}}>
                            <label for="ngv">NGV</label>
                            <input type="checkbox" name="cng" id="cng" value="1" {{ $data->cng == '1' ? 'checked' : ''}}>
                            <label for="cng">CNG</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="carinsurance" id="carInsurance1" value="0" {{ $data->carinsurance == '0' ? 'checked' : ''}}>
                            <label for="carInsurance1">มี</label>
                            <input type="radio" name="carinsurance" id="carInsurance2" value="1" {{ $data->carinsurance == '1' ? 'checked' : ''}}>
                            <label for="carInsurance2">ไม่มี</label>
                        </div>

                        <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expinsurance" id="expInsurance"  value="{{$data->expinsurance}}">

                        <label class="col-lg-2 pl-lg-5" for="insurance">บริษัทประกันภัย</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance"  value="{{$data->insurance}}">
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-1" for="tent">รถเต็นท์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="tent" id="tent1" value="0" {{ $data->tent == '0' ? 'checked' : ''}}>
                            <label for="tent1">ใช่</label>
                            <input type="radio" name="tent" id="tent2" value="1" {{ $data->tent == '1' ? 'checked' : ''}}>
                            <label for="tent2">ไม่ใช่</label>
                        </div>

                        <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="fromtent" id="fromTent">
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_dealer }}" disabled selected>{{ $data->dealer_name }}</option>
                            @foreach($dealer as $key => $datas)
                            <option value="{{ $datas->id_dealer }}">{{ $datas->dealer_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-1" for="price">ราคา</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price"  value="{{$data->price}}">

                        <label class="col-lg-1 pr-lg-0" for="payment">ผ่อนงวดละ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" value="{{$data->payment}}">
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">วันนัดตรวจรถ</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionType">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-2 form-control form-control-sm form-border" name="inspectiontype" id="inspectionType" value="{{$data->inspectiontype}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="0" {{($data->inspectiontype ==='0') ? 'selected' : ''}}>Full Inspection</option>
                            <option value="1" {{($data->inspectiontype ==='1') ? 'selected' : ''}}>Warranty</option>
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="inspector">ช่างที่ไปตรวจรถ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspector" id="inspector" value="{{$data->inspector}}" required>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_tech }}" disabled selected>{{ $data->name_tech }}</option>
                            @foreach($tech as $key => $datas)
                            <option value="{{ $datas->id_tech }}">{{ $datas->name_tech }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionDate">วันที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="inspectiondate" id="inspectionDate" value="{{$data->inspectiondate}}" required>

                        <label class="col-lg-2 pl-lg-5" for="inspectionTime">เวลาที่นัดตรวจรถ</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="time" name="inspectiontime" id="inspectionTime" value="{{$data->inspectiontime}}" required>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-1" for="package">แพคเกจ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="package" id="package" value="{{$data->package}}">
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="{{ $data->id_package }}" disabled selected>{{ $data->package_name }}</option>
                            @foreach($pac as $key => $datas)
                            <option value="{{ $datas->id_package }}">{{ $datas->package_name }}</option>
                            @endforeach
                        </select>

                        <label class="col-lg-2 pl-lg-5" for="remark">Remark</label>
                        <textarea class="col-lg-5 form-control form-control-sm form-border" name="remark" id="remark" onKeyPress class="form-control">
                            {{$data->remark}}
                        </textarea>
                    </div>
                </div>

                <div class="col-12 pt-2 pt-lg-4 text-center">
                    <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>บันทึกการแก้ไข</button>
                    <a href="{{ route('appointment.index')}}"> <button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>
                </div>
            </form>

            @endforeach

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
               url:"{{url('get-districte-list')}}?province_id="+provinceID,
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
               url:"{{url('get-subdise-list')}}?amphure_id="+districtID,
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

    </script>


@endsection
