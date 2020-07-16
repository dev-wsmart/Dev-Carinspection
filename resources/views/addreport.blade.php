@extends('layouts.admin_layout')
@section('title', 'ข้อมูลตรวจสภาพรถยนต์')
@section('content')

{{-- <!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{asset('dropzone/dist/min/dropzone.min.css')}}">

<!-- JS -->
<script src="{{asset('dropzone/dist/min/dropzone.min.js')}}" type="text/javascript"></script>

    <!-- Script -->
    <script>
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone",{
            maxFilesize: 3,  // 3 mb
            acceptedFiles: ".jpeg,.jpg,.png,.pdf",
        });
        myDropzone.on("sending", function(file, xhr, formData) {
           formData.append("_token", CSRF_TOKEN);
        });
    </script> --}}

<div class="col-md-2"></div>
<div class="col-md-9" style="margin-left:5%; margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h3 class="title">ข้อมูลตรวจสภาพรถยนต์</h3>
        </div>
        <hr noshade>
        <div class="col-12">
            @foreach($datas as $data)

                    <?php
                        $idins = $data->id;
                        $idinspec = 'inspec-'.str_pad(($idins),6,'0',STR_PAD_LEFT);

                    ?>

            <form>
                <div class="form-title">ข้อมูลทั่วไป</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row">
                        <label class="col-lg-2" for="custName">ชื่อลูกค้า</label>
                        <input class="col-lg-5 form-control form-control-sm form-border" type="text" name="custName" id="custName" value="{{$data->firstname}}&emsp;{{$data->lastname}}" required disabled>

                        <label class="col-lg-2" for="date-time">วันและเวลาที่ลงข้อมูล</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="date-time" id="date-time" value="<?php date_default_timezone_set("Asia/Bangkok"); echo date("d-m-Y h:i A"); ?>" required disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="idCard">เลขประจำตัวประชาชน</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="idCard" id="idCard" value="{{$data->idcard}}" disabled>

                        <label class="col-lg-2 pl-lg-5" for="tel">เบอร์โทรศัพท์</label>
                        <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="tel" id="tel" value="{{$data->tel}}" disabled>

                        <label class="col-lg-1" for="email">Email</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="email" id="email" disabled>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspectionNo">เลขที่ตรวจสภาพรถ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="inspectionNo" id="inspectionNo" value="{{$idinspec}}" disabled>

                        <label class="col-lg-2" for="inspectionType">ประเภทการตรวจสภาพ</label>
                        <select class="col-lg-3 form-control form-control-sm form-border" name="inspectionType" id="inspectionType" disabled>
                            {{-- <option>---  กรุณาเลือก  ---</option> --}}
                            <option value="0" {{($data->inspectiontype ==='0') ? 'selected' : ''}}>Full Inspection</option>
                            <option value="1" {{($data->inspectiontype ==='1') ? 'selected' : ''}}>Warranty</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-2" for="inspector">ผู้ตรวจสภาพรถ</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="inspector" id="inspector" value="{{$data->name_tech}}" disabled>

                        <label class="col-lg-2" for="checkedby">ตรวจสอบโดย</label>
                        <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="checkedby" id="checkedby" value="{{$data->name_tech}}" disabled>
                    </div>
                </div>

                <div class="form-title mt-3 mt-lg-0">การบริการตรวจเช็คระบบขับเคลื่อน</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS01">1. สถานะเครื่องยนต์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS01" id="CarRS01_1" value="0">
                            <label for="CarRS01_1">ผ่าน</label>

                            <input type="radio" name="CarRS01" id="CarRS01_2" value="1">
                            <label for="CarRS01_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS02">2. สถานะเกียร์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS02" id="CarRS02_1" value="0">
                            <label for="CarRS02_1">ผ่าน</label>

                            <input type="radio" name="CarRS02" id="CarRS02_2" value="1">
                            <label for="CarRS02_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS03">3. สถานะ ECU, ECM</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS03" id="CarRS03_1" value="0">
                            <label for="CarRS03_1">ผ่าน</label>

                            <input type="radio" name="CarRS03" id="CarRS03_2" value="1">
                            <label for="CarRS03_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS04">4. สถานะระบบเบรค</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS04" id="CarRS04_1" value="0">
                            <label for="CarRS04_1">ผ่าน</label>

                            <input type="radio" name="CarRS04" id="CarRS04_2" value="1">
                            <label for="CarRS04_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS05">5. ระบบปรับอากาศและทำความร้อน</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS05" id="CarRS05_1" value="0">
                            <label for="CarRS05_1">ผ่าน</label>

                            <input type="radio" name="CarRS05" id="CarRS05_2" value="1">
                            <label for="CarRS05_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS06">6. ชุดส่งกำลังเพลาหน้าและท้าย</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS06" id="CarRS06_1" value="0">
                            <label for="CarRS06_1">ผ่าน</label>

                            <input type="radio" name="CarRS06" id="CarRS06_2" value="1">
                            <label for="CarRS06_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS07">7. ระบบระบายความร้อนเครื่องยนต์</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS07" id="CarRS07_1" value="0">
                            <label for="CarRS07_1">ผ่าน</label>

                            <input type="radio" name="CarRS07" id="CarRS07_2" value="1">
                            <label for="CarRS07_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS08">8. ระบบกันสะเทือนหน้าและหลัง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS08" id="CarRS08_1" value="0">
                            <label for="CarRS08_1">ผ่าน</label>

                            <input type="radio" name="CarRS08" id="CarRS08_2" value="1">
                            <label for="CarRS08_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS09">9. ระบบความปลอดภัย Airbag</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS09" id="CarRS09_1" value="0">
                            <label for="CarRS09_1">ผ่าน</label>

                            <input type="radio" name="CarRS09" id="CarRS09_2" value="1">
                            <label for="CarRS09_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS10">10. ระบบบังคับเลี้ยว</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS10" id="CarRS10_1" value="0">
                            <label for="CarRS10_1">ผ่าน</label>

                            <input type="radio" name="CarRS10" id="CarRS10_2" value="1">
                            <label for="CarRS10_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarRS11">11. Security System</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS11" id="CarRS11_1" value="0">
                            <label for="CarRS11_1">ผ่าน</label>

                            <input type="radio" name="CarRS11" id="CarRS11_2" value="1">
                            <label for="CarRS11_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarRS12">12. Turbo</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarRS12" id="CarRS12_1" value="0">
                            <label for="CarRS12_1">ผ่าน</label>

                            <input type="radio" name="CarRS12" id="CarRS12_2" value="1">
                            <label for="CarRS12_2">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>

        <?php

                // check inspaction

                $inspec = $data->inspectiontype;
                // echo $inspec;
            if($inspec == '0'){

             ?>
                <div class="form-title mt-3 mt-lg-0">การบริการตรวจเช็คสภาพรถยนต์</div>
                <div class="col-12 pt-lg-3 box-form">
                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn01">1. ไมล์แท้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn01" id="CarIn01_1" value="0">
                            <label for="CarIn01_1">ผ่าน</label>

                            <input type="radio" name="CarIn01" id="CarIn01_2" value="1">
                            <label for="CarIn01_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn02">2. รถไม่เคยประสบภัยน้ำท่วมจมน้ำ</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn02" id="CarIn02_1" value="0">
                            <label for="CarIn02_1">ผ่าน</label>

                            <input type="radio" name="CarIn02" id="CarIn02_2" value="1">
                            <label for="CarIn02_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn03">3. รถไม่เคยประสบภัยไฟไหม้</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn03" id="CarIn03_1" value="0">
                            <label for="CarIn03_1">ผ่าน</label>

                            <input type="radio" name="CarIn03" id="CarIn03_2" value="1">
                            <label for="CarIn03_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn04">4. รถไม่เคยเกิดอุบัติเหตุรุนแรงชนหนัก จนทำให้โครงสร้างรถมีปัญหาความปลอดภัย</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn04" id="CarIn04_1" value="0">
                            <label for="CarIn04_1">ผ่าน</label>

                            <input type="radio" name="CarIn04" id="CarIn04_2" value="1">
                            <label for="CarIn04_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn05">5. รถเลขเครื่องตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn05" id="CarIn05_1" value="0">
                            <label for="CarIn05_1">ผ่าน</label>

                            <input type="radio" name="CarIn05" id="CarIn05_2" value="1">
                            <label for="CarIn05_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn06">6. รถเลขตัวถังตรง</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn06" id="CarIn06_1" value="0">
                            <label for="CarIn06_1">ผ่าน</label>

                            <input type="radio" name="CarIn06" id="CarIn06_2" value="1">
                            <label for="CarIn06_2">ไม่ผ่าน</label>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <label class="col-lg-4" for="CarIn07">7. รถสภาพสีเดิม</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn07" id="CarIn07_1" value="0">
                            <label for="CarIn07_1">ผ่าน</label>

                            <input type="radio" name="CarIn07" id="CarIn07_2" value="1">
                            <label for="CarIn07_2">ไม่ผ่าน</label>
                        </div>

                        <label class="col-lg-4" for="CarIn08">8. แบตเตอรี่ทำงานปกติ</label>
                        <div class="col-lg-2 btnCustom">
                            <input type="radio" name="CarIn08" id="CarIn08_1" value="0">
                            <label for="CarIn08_1">ผ่าน</label>

                            <input type="radio" name="CarIn08" id="CarIn08_2" value="1">
                            <label for="CarIn08_2">ไม่ผ่าน</label>
                        </div>
                    </div>
                </div>
            <?php  } ?>

                <div class="form-title mt-3 mt-lg-0">รายละเอียดรถยนต์</div>
                <div class="mt-3 mt-lg-0 p-0" style="background-color: #00385B; border-top: 0.5px solid #ffffff;">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#cardetails" id="pills-cardetails-tab" data-toggle="pill" role="tab" aria-controls="pills-cardetails" aria-selected="true">ข้อมูลรถ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#exterior" id="pills-exterior-tab" data-toggle="pill" role="tab" aria-controls="pills-exterior" aria-selected="false">Exterior Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#interior" id="pills-interior-tab" data-toggle="pill" role="tab" aria-controls="pills-interior" aria-selected="false">Interior Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#chasis" id="pills-chasis-tab" data-toggle="pill" role="tab" aria-controls="pills-chasis" aria-selected="false">Chasis Plan</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#picture" id="pills-picture-tab" data-toggle="pill" role="tab" aria-controls="pills-picture" aria-selected="false">อัพโหลดรูปภาพ</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#inspectorcomment" id="pills-inspectorcomment-tab" data-toggle="pill" role="tab" aria-controls="pills-inspectorcomment" aria-selected="false">ความเห็นจากผู้เช็ครถ</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#history" id="pills-history-tab" data-toggle="pill" role="tab" aria-controls="pills-history" aria-selected="false">ประวัติรถ</a>
                        </li> -->
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="col-12 pt-lg-3 box-form tab-pane show active" id="cardetails" role="tabpanel" aria-labelledby="pills-cardetails-tab">
                        <div class="form-group row">
                            <label class="col-lg-1" for="carBrand">ยี่ห้อ</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" name="carBrand" id="carBrand" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_brand }}</option>
                            </select>

                            <label class="col-lg-1" for="carModel">รุ่น</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="carModel" id="carModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->name_model }}</option>
                            </select>

                            <label class="col-lg-1" for="subModel">รุ่นย่อย</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" type="text" name="subModel" id="subModel" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->sub_model }}</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="oldColor">สีเดิม</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="oldColor" id="oldColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_b }}</option>
                            </select>

                            <label class="col-lg-1" for="newColor">สีปัจจุบัน</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="newColor" id="newColor" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->color_n }}</option>
                            </select>

                            <label class="col-lg-1" for="year">ปี</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="year" id="year" value="{{$data->year}}" disabled>

                            <label class="col-lg-1 pr-lg-0" for="seatNum">จำนวนที่นั่ง</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="seatNum" id="seatNum" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option value="2" {{($data->seatnum ==='2') ? 'selected' : ''}}>2</option>
                                <option value="4" {{($data->seatnum ==='4') ? 'selected' : ''}}>4</option>
                                <option value="5" {{($data->seatnum ==='5') ? 'selected' : ''}}>5</option>
                                <option value="5" {{($data->seatnum ==='6') ? 'selected' : ''}}>6</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="place">สถานที่ตรวจเช็ครถ</label>
                            <select class="col-lg-3 form-control form-control-sm form-border" name="place" id="place" value="{{$data->place}}" disabled>
                                <option value="ดับเบิ้ลยู สมาร์ท">ดับเบิ้ลยู สมาร์ท</option>
                            </select>

                            <label class="col-lg-2 pl-lg-5" for="registerType">ประเภทจดทะเบียน</label>
                            <div class="col-lg-4 btnCustom">
                                <input type="radio" name="registerType" id="registerType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="registerType1">รถยนต์ส่วนบุคคล</label>

                                <input type="radio" name="registerType" id="registerType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="registerType2">จดในนามบริษัท</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carRegNum">ทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="carRegNum" id="carRegNum" value="{{$data->carregnum}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="mileage">เลขไมล์ปัจจุบัน</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="mileage" id="mileage" value="{{$data->mileage}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="dateRegister">วันที่จดทะเบียนรถ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="dateRegister" id="dateRegister" value="{{$data->dateregister}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="numOwners">จำนวนเจ้าของเดิม</label>
                            <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="numOwners" id="numOwners" value="{{$data->numowners}}" disabled>

                            <label class="col-lg-2" for="cc">ความจุเครื่องยนต์ (CC)</label>
                            {{-- <input class="col-lg-1 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled> --}}
                            <select class="col-lg-2 form-control form-control-sm form-border" type="text" name="cc" id="cc" value="{{$data->cc}}" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->cc }}</option>
                            </select>

                            <label class="col-lg-1 pr-0" for="gearType">ระบบเกียร์</label>
                            <div class="col-lg-4 btnCustom">
                                <input type="radio" name="gearType" id="gearType1" value="0" {{ $data->geartype == '0' ? 'checked' : ''}} disabled>
                                <label for="gearType1">เกียร์ธรรมดา</label>

                                <input type="radio" name="gearType" id="gearType2" value="1" {{ $data->geartype == '1' ? 'checked' : ''}} disabled>
                                <label for="gearType2">เกียร์อัตโนมัติ</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="engine">หมายเลขเครื่องยนต์</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="engine" id="engine" value="{{$data->engine}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="vin">หมายเลขตัวถัง</label>
                            <input class="col-lg-3 form-control form-control-sm form-border" type="text" name="vin" id="vin" value="{{$data->vin}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="fuelType">ประเภทเชื้อเพลิง</label>
                            <div class="col-lg-10 btnCustom">
                                <input type="checkbox" name="benzine" id="benzine" value="1" {{ $data->benzine == '1' ? 'checked' : ''}} disabled>
                                <label for="benzine">เบนซิน</label>
                                <input type="checkbox" name="diesel" id="diesel" value="1" {{ $data->diesel == '1' ? 'checked' : ''}} disabled>
                                <label for="diesel">ดีเซล</label>
                                <input type="checkbox" name="hybrid" id="hybrid" value="1" {{ $data->hybrid == '1' ? 'checked' : ''}} disabled>
                                <label for="hybrid">ไฮบริด</label>
                                <input type="checkbox" name="electric" id="electric" value="1" {{ $data->electric == '1' ? 'checked' : ''}} disabled>
                                <label for="electric">ไฟฟ้า</label>
                                <input type="checkbox" name="lpg" id="lpg" value="1" {{ $data->lpg == '1' ? 'checked' : ''}} disabled>
                                <label for="lpg">LPG</label>
                                <input type="checkbox" name="ngv" id="ngv" value="1" {{ $data->ngv == '1' ? 'checked' : ''}} disabled>
                                <label for="ngv">NGV</label>
                                <input type="checkbox" name="cng" id="cng" value="1" {{ $data->cng == '1' ? 'checked' : ''}} disabled>
                                <label for="cng">CNG</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2" for="carInsurance">รถมีประกันหรือไม่</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="carInsurance" id="carInsurance1" value="0" {{ $data->carinsurance == '0' ? 'checked' : ''}} disabled>
                                <label for="carInsurance1">มี</label>
                                <input type="radio" name="carInsurance" id="carInsurance2" value="1" {{ $data->carinsurance == '1' ? 'checked' : ''}} disabled>
                                <label for="carInsurance2">ไม่มี</label>
                            </div>

                            <label class="col-lg-2" for="expInsurance">วันหมดอายุประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="date" name="expInsurance" id="expInsurance" value="{{$data->expinsurance}}" disabled>

                            <label class="col-lg-2 pl-lg-5" for="insurance">บริษัทประกันภัย</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="insurance" id="insurance" value="{{$data->expinsurance}}" disabled>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1" for="tent">รถเต็นท์</label>
                            <div class="col-lg-2 btnCustom">
                                <input type="radio" name="tent" id="tent1" value="0" {{ $data->tent == '0' ? 'checked' : ''}} disabled>
                                <label for="tent1">ใช่</label>
                                <input type="radio" name="tent" id="tent2" value="1" {{ $data->tent == '1' ? 'checked' : ''}} disabled>
                                <label for="tent2">ไม่ใช่</label>
                            </div>

                            <label class="col-lg-1 pl-lg-0" for="fromTent">รถจากเต็นท์</label>
                            <select class="col-lg-2 form-control form-control-sm form-border" name="fromTent" id="fromTent" disabled>
                                {{-- <option>---  กรุณาเลือก  ---</option> --}}
                                <option>{{ $data->dealer_name }}</option>
                            </select>

                            <label class="col-lg-1" for="price">ราคา</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="price" id="price" value="{{$data->price}}" disabled>

                            <label class="col-lg-1 pr-lg-0" for="payment">ผ่อนงวดละ</label>
                            <input class="col-lg-2 form-control form-control-sm form-border" type="text" name="payment" id="payment" value="{{$data->payment}}" disabled>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="exterior" role="tabpanel" aria-labelledby="pills-exterior-tab">
                        <div class="position-absolute">
                            <table class="table table-sm">
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">O</td>
                                    <!-- <td>Original</td> -->
                                    <td>ดั้งเดิม</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">N</td>
                                    <!-- <td>New Parts</td> -->
                                    <td>ชิ้นส่วนใหม่</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">BP</td>
                                    <!-- <td>New Body Paint Job</td> -->
                                    <td>ทำสีใหม่</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">D</td>
                                    <!-- <td>Dent Mark</td> -->
                                    <td>มีรอยบุบ</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">S</td>
                                    <!-- <td>Scrated Mark</td> -->
                                    <td>มีรอยขีดข่วน</td>
                                </tr>
                            </table>
                        </div>
                        <table cellspacing="0" style="margin: 0 auto; background-image: url('{{ asset('images/exterior/exterior.png') }}'); background-repeat: no-repeat; background-size: auto 600px;">
                            <tr>
                                <!-- left -->
                                <td style="height: 600px; width: 125px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="บังโคลนหน้าซ้าย" style="margin-top: 30px; width: 115px; height: 55px;">
                                        <select name="exterior_01" id="exterior_01">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ล้อหน้าซ้าย" style="width: 82px; height: 61px;">
                                        <select name="exterior_19" id="exterior_19">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="สเกิ้ตซ้าย" style="width: 24px; height: 240px; float: left;">
                                        <select name="exterior_18" id="exterior_18" style="margin-top: 30px; margin-left: -15px;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหน้าซ้าย" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_20" id="exterior_20" style="display: flex; margin: 50px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหลังซ้าย" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_16" id="exterior_16" style="display: flex; margin: 40px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ล้อหลังซ้าย" style="width: 75px; height: 61px; clear: both;">
                                        <select name="exterior_17" id="exterior_17">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ซุ้มล้อซ้าย" style="width: 105px; height: 85px;">
                                        <select name="exterior_15" id="exterior_15" style="margin-top: 40px;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- middle -->
                                <td style="height: 600px; width: 202px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กันชนหน้า" style="width: 202px; height: 44px; float: left;">
                                        <select name="exterior_03" id="exterior_03" style="display: flex; margin: 7px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ฝากระโปรงหน้า" style="width: 202px; height: 103px; float: left;">
                                        <select name="exterior_02" id="exterior_02" style="display: flex; margin: 36px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div style="width: 202px; height: 94px; clear: both;">&nbsp;</div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="หลังคา" style="width: 202px; height: 151px; float: left;">
                                        <select name="exterior_14" id="exterior_14" style="display: flex; margin: 60px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กระจกหลัง" style="width: 202px; height: 95px; float: left;">
                                        <select name="exterior_11" id="exterior_11" style="display: flex; margin: 35px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ฝากระโปรงหลัง" style="width: 202px; height: 65px; float: left;">
                                        <select name="exterior_13" id="exterior_13" style="display: flex; margin: 15px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="กันชนหลัง" style="width: 202px; height: 42px; float: left;">
                                        <select name="exterior_12" id="exterior_12" style="display: flex; margin: 5px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>
                                </td>

                                <!-- right -->
                                <td style="height: 600px; width: 125px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="บังโคลนหน้าขวา" style="margin-top: 30px; width: 115px; height: 55px; float: right;">
                                        <select name="exterior_04" id="exterior_04" style="float: right;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ล้อหน้าขวา" style="width: 82px; height: 61px; float: right;">
                                        <select name="exterior_06" id="exterior_06" style="float: right;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหน้าขวา" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_05" id="exterior_05" style="display: flex; margin: 50px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="สเกิ้ตขวา" style="width: 24px; height: 240px; float: right;">
                                        <select name="exterior_07" id="exterior_07" style="margin-top: 30px;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="top" title="ประตูหลังขวา" style="width: 98px; height: 120px; float: left;">
                                        <select name="exterior_09" id="exterior_09" style="display: flex; margin: 40px auto;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ล้อหลังขวา" style="width: 75px; height: 61px; float: right;">
                                        <select name="exterior_08" id="exterior_08" style="float: right;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="right" title="ซุ้มล้อขวา" style="width: 105px; height: 85px; float: right;">
                                        <select name="exterior_10" id="exterior_10" style="float: right; margin-top: 40px;">
                                            <option value="O">O</option>
                                            <option value="N">N</option>
                                            <option value="BP">BP</option>
                                            <option value="D">D</option>
                                            <option value="S">S</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="interior" role="tabpanel" aria-labelledby="pills-interior-tab">
                        ภายใน
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="chasis" role="tabpanel" aria-labelledby="pills-chasis-tab">
                        <div class="position-absolute">
                            <table class="table table-sm">
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">NH</td>
                                    <!-- <td>Non Heavy Accident</td> -->
                                    <td>ไม่ประสบอุบัติเหตุหนัก</td>
                                </tr>
                                <tr>
                                    <td style="border-right: 1px solid #d9d9d9;">H</td>
                                    <!-- <td>Heavy Accident</td> -->
                                    <td>ประสบอุบัติเหตุหนัก</td>
                                </tr>
                            </table>
                        </div>
                        <table cellspacing="0" style="margin: 0 auto; background-image: url('{{ asset('images/chassis/chassis.png') }}'); background-repeat: no-repeat; background-size: auto 600px;">
                            <tr>
                                <td style="height: 600px; width: 390px; vertical-align: top;">
                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องเครื่องยนต์" style="width: 390px; height: 171px; float: left;">
                                        <select name="chasis_01" id="chasis_01" style="display: flex; margin: 60px auto;">
                                            <option value="NH">NH</option>
                                            <option value="H">H</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องโดยสาร" style="width: 390px; height: 320px; float: left;">
                                        <select name="chasis_02" id="chasis_02" style="display: flex; margin: 50px auto;">
                                            <option value="NH">NH</option>
                                            <option value="H">H</option>
                                        </select>
                                    </div>

                                    <div class="carplan-img" data-toggle="tooltip" data-placement="left" title="ห้องเก็บสัมภาระ" style="width: 390px; height: 108px; float: left;">
                                        <select name="chasis_03" id="chasis_03" style="display: flex; margin: 40px auto;">
                                            <option value="NH">NH</option>
                                            <option value="H">H</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-12 pt-lg-3 box-form tab-pane" id="inspectorcomment" role="tabpanel" aria-labelledby="pills-inspectorcomment-tab">
                        <label for="comment">ความคิดเห็นจากผู้ตรวจสภาพรถ</label>
                        <textarea class="form-control form-border mb-3" rows="5" name="comment" id="comment">This Vehicle, {{$data->year}} {{$data->name_brand}} {{ $data->name_model }} with Chassis number {{$data->engine}} was Inspected on the <?php date_default_timezone_set("Asia/Bangkok"); echo date("d F Y"); ?> by Mr. Wasawad Wasuthasawat. The Inspector did not find irregularities with the 16 Inspection Details stated in this report. It can be concluded that at the time of Inspection, the said Inspection Analysis has passed the Inspection standard of Mittare Insurance Public Co., LTD.</textarea>
                    </div>

                    <!-- <div class="col-12 pt-lg-3 box-form tab-pane" id="history" style="max-height: 550px; overflow: auto;" role="tabpanel" aria-labelledby="pills-history-tab">
                        <div class="col-lg-12 mb-2">
                            <form>
                                <div class="row upload-box">
                                    <table align="center">
                                        <tbody>
                                            <tr>
                                                <td width="100px">วันที่ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="date" name="hisdate" id="hisdate" style="width: 160px;"></td>
                                            </tr>
                                            <tr>
                                                <td>เลขไมล์ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hismileage" id="hismileage" style="width: 160px;"></td>
                                            </tr>
                                            <tr>
                                                <td>รายละเอียด :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hisdetails" id="hisdetails" style="width: 300px;"></td>
                                            </tr>
                                            <tr>
                                                <td>สถานที่ :</td>
                                                <td><input class="form-control form-control-sm form-border" type="text" name="hisplace" id="hisplace" style="width: 300px;"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" style="text-align: center; padding-top: 5px;"><button type="button" class="btn btn-success btn-sm">ADD</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <form>
                                <table class="table table-bordered table-hover table-sm text-center bg-white">
                                    <thead>
                                        <tr>
                                            <th width="10px">ลำดับ</th>
                                            <th width="60px">วันที่</th>
                                            <th width="50px">เลขไมล์</th>
                                            <th width="200px">รายละเอียด</th>
                                            <th width="120px">สถานที่</th>
                                            <th width="10px">ลบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align: middle;">1</td>
                                            <td style="vertical-align: middle;">02-06-2020</td>
                                            <td style="vertical-align: middle;">111</td>
                                            <td style="vertical-align: middle;"></td>
                                            <td style="vertical-align: middle;"></td>
                                            <td style="vertical-align: middle;">
                                                <a href="" style="color: red; font-weight: 800;">&#10007;</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div> -->
                </div>

                <div class="col-12 pt-2 pt-lg-3 pb-lg-4">
                    <div class="col-12 text-center">
                        <a href="{{ route('edit.index') }}"><button class="btn btn-danger" type="button"><i class="fa fa-times" aria-hidden="true"></i> ยกเลิก</button></a>
                        <a href="{{ url('upload-img') }}"><button class="btn btn-success" type="button" ><i class="fa fa-arrow-right" aria-hidden="true"></i> ถัดไป</button></a>
                    </div>
                    <!-- <div class="col-12 text-center my-3">
                        <a href=""></a><button class="btn btn-purple" type="button"><i class="fa fa-car" aria-hidden="true"></i> พิมพ์ใบตรวจสภาพรถ</button>
                        <a href=""></a><button class="btn btn-primary" type="button"><i class="fa fa-certificate" aria-hidden="true"></i> พิมพ์ใบรับรอง</button>
                    </div> -->
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>

<script type="text/javascript">

$(document).ready(function(){
        // $('#images_full').on('change', function(){
        $("#images_full").change(function() {
            // event.preventDefault();
            // var imagesD = $(this).val();
            alert('1234');
            $.ajax({
            url:"{{ route('upload.action') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
                {
                    $('#message_0').css('display', 'block');
                    $('#message_0').html(data.message_0);
                    $('#message_0').addClass(data.class_name);
                    $('#uploaded_image_0').html(data.uploaded_image_0);
                }
            })
        });
        // alert('1234');
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

</script>


@endsection
