@extends('layouts.admin_layout')

@section('title', 'อัพโหลดรูปภาพ')

@section('content')
<div class="col-md-2"></div>
<div class="col-md-9" style="margin-left:5%; margin-top:2%;">
    <div class="form-title mt-3 mt-lg-0">อัพโหลดรูปภาพ</div>
    {{-- images full start --}}
    <form method="post" id="images_full" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-12 pt-lg-3 box-form" id="picture">
            <div class="mb-2">
                {{-- 0-1 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปด้านหน้ารถยนต์</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูปด้านหลังรถยนต์</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_0" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_0" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_0"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_1" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_1" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_1"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 2-3 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปเครื่องยนต์</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูปเลขไมล์</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_2" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_2" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_3" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_3" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_3"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 4-5 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปเลขตัวถัง</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูปเลขเครื่องยนต์</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_4" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_4" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_4"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_5" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_5" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_5"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 6-7 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปเล่มทะเบียนรถ</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูป ODB Analysis</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_6" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_6" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_6"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_7" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_7" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_7"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 8-9 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปล้อหน้าซ้าย</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูปล้อหน้าขวา</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_8" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_8" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_8"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_9" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_9" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_9"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 10-11 --}}
                <div class="list-group-item">
                    <label class="col-lg-5" for="package">รูปล้อหลังซ้าย</label>
                    <label class="col-lg-1" for="package"></label>
                    <label class="col-lg-5" for="package">รูปล้อหลังขวา</label>

                    <div class="row">
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_10" class="form-control" height="2%" value="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_10" style="display: none;"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_10"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 list-group-item">
                            <div class="row">
                                <div class="col-md-11">
                                    <input type="file" name="image_11" class="form-control" height="2%" value="1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="alert col-md-11" id="message_11" style="display: none"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <span id="uploaded_image_11"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <div class="row">
                    <!-- <label class="col-lg-5" for="package">เลือกไฟล์ภาพ 360</label>
                    <label class="col-lg-1" for="package"></label> -->
                    <label class="col-lg-5" for="package">ชื่อไฟล์ VDO</label>

                    {{-- <div class="col-md-6 list-group-item">
                        <div class="row">
                            <div class="col-md-11">
                                <input type="file" name="image_8" class="form-control" height="2%" value="1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="alert col-md-11" id="message_8" style="display: none"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <span id="uploaded_image_8"></span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-md-12 list-group-item">
                        <div class="row">
                            <div class="col-md-9">
                                <input class="form-control form-control-sm form-border" type="text" name="file_vdo" id="file_vdo">
                            </div>
                            <!-- <div class="col-md-3">
                                <button type="button" class="btn btn-success btn-sm" type="submit">
                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>บันทึกการอัพโหลดภาพ
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    {{-- 111111 --}}

    {{-- form images full end --}}

    <div class="col-12 py-2 pt-lg-3 pb-lg-4">
        <div class="col-12 text-center">
            <a href=""><button class="btn btn-danger" type="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
            <a href="{{ url('upload-img') }}"><button class="btn btn-success" type="button" ><i class="fa fa-floppy-o" aria-hidden="true"></i> บันทึก</button></a>
        </div>
    </div>
</div>
@endsection