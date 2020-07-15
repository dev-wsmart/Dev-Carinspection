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
            <h3 class="title">อัพโหลดรูปภาพ</h3>
        </div>
        <hr noshade><br>
        <a style="margin-right:3%">
            @foreach($images as $key => $id_maxs)
            {{-- {{ $idmax = $id_maxs->id }} --}}

                    <?php
                        $idmax = $id_maxs->id;
                        $fromtent = $id_maxs->fromtent;
                        $id_car = $idmax;
                        $id_maxins = 'inspec-'.str_pad(($idmax),6,'0',STR_PAD_LEFT);
                        echo 'เลขที่ตรวจสภาพรถ : '.$id_maxins;

                    ?>
            @endforeach
        </a>
        <br><br>
        <div class="col-12">

        {{-- images full start --}}
        <form action='{{ route('upimages.store') }}' method='POST' enctype='multipart/form-data' id="images_full">
            @csrf

            <input type="hidden" name="id_car" value="{{ $id_car }}">
            <input type="hidden" name="fromtent" value="{{ $fromtent }}">
            <input type="hidden" name="userID" value="{{ $userID = Auth::user()->id }}">
@foreach($images as $image)
            <div class="form-title">images</div>
                <div class="col-12 pt-lg-3 box-form tab-pane" id="picture" role="tabpanel" aria-labelledby="pills-picture-tab">
                            {{-- 0-1 --}}
                            <div class="list-group-item">

                                <label class="col-lg-5" for="package">รูปเลขไมล์</label>
                                <label class="col-lg-1" for="package"></label>
                                <label class="col-lg-5" for="package">รูปเล่มทะเบียน</label>

                                <div class="row">
                                    <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->image_mile}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->image_num}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                             </div>

                        {{-- 2-3 --}}
                        {{-- <form action='{{ route('upimages.store') }}' method='POST' enctype='multipart/form-data' id="images_full">
                            @csrf --}}
                        <div class="list-group-item">

                            <label class="col-lg-5" for="package">รูปด้านหน้ารถยนต์</label>
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">รูปด้านหลังรถยนต์</label>

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
                                            <div class="col-md-12" align="center">
                                                <img src="/images/{{$image->image_2}}" class="img-thumbnail" width="80%" align="center" />
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6 list-group-item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_3" class="form-control" height="2%" value="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_3" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_3"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </form> --}}
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

                        <label class="col-lg-5" for="package">รูปเครื่องยนต์</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">ผลตรวจสอบ ODB</label>

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
                    {{--  --}}
                    <br><br>
                        {{-- A-B --}}
                        <div class="list-group-item">

                            <label class="col-lg-5" for="package">รูปล้อซ้ายด้านหน้ารถยนต์</label>
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">รูปล้อขวาด้านหน้ารถยนต์</label>

                            <div class="row">
                                <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_A" class="form-control" height="2%" value="0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_A" style="display: none;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_A"></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-6 list-group-item">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <input type="file" name="image_B" class="form-control" height="2%" value="1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="alert col-md-11" id="message_B" style="display: none"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" align="center">
                                                <span id="uploaded_image_B"></span>
                                            </div>
                                        </div>
                                </div>
                            </div>
                         </div>

                    {{-- C-D --}}

                    <div class="list-group-item">

                        <label class="col-lg-5" for="package">รูปล้อซ้ายด้านหลังรถยนต์</label>
                        <label class="col-lg-1" for="package"></label>
                        <label class="col-lg-5" for="package">รูปล้อขวาด้านหลังรถยนต์</label>

                        <div class="row">
                            <div class="col-md-6 list-group-item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_C" class="form-control" height="2%" value="0">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_C" style="display: none;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_C"></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6 list-group-item">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <input type="file" name="image_D" class="form-control" height="2%" value="1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="alert col-md-11" id="message_D" style="display: none"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" align="center">
                                            <span id="uploaded_image_D"></span>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
    @endforeach
                <br>

                        <div class="row">
                            <label class="col-lg-1" for="package"></label>
                            <label class="col-lg-5" for="package">ชื่อไฟล์ VDO</label>

                            <div class="col-md-12 list-group-item">
                                <div class="row">
                                    <div class="col-md-9">
                                        <input class="form-control form-control-sm form-border" type="text" name="file_vdo" id="file_vdo">
                                    </div>
                                    <div class="col-md-3">
                                        <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>บันทึกการอัพโหลดภาพ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
        </form>

        {{-- form images full end --}}
        </div>
    </div>
</div>


<script>

    // upload images full

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action2') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_2').css('display', 'block');
                        $('#message_2').html(data.message_2);
                        $('#message_2').addClass(data.class_name);
                        $('#uploaded_image_2').html(data.uploaded_image_2);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action3') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_3').css('display', 'block');
                        $('#message_3').html(data.message_3);
                        $('#message_3').addClass(data.class_name);
                        $('#uploaded_image_3').html(data.uploaded_image_3);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action4') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_4').css('display', 'block');
                        $('#message_4').html(data.message_4);
                        $('#message_4').addClass(data.class_name);
                        $('#uploaded_image_4').html(data.uploaded_image_4);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action5') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_5').css('display', 'block');
                        $('#message_5').html(data.message_5);
                        $('#message_5').addClass(data.class_name);
                        $('#uploaded_image_5').html(data.uploaded_image_5);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action6') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_6').css('display', 'block');
                        $('#message_6').html(data.message_6);
                        $('#message_6').addClass(data.class_name);
                        $('#uploaded_image_6').html(data.uploaded_image_6);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.action7') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_7').css('display', 'block');
                        $('#message_7').html(data.message_7);
                        $('#message_7').addClass(data.class_name);
                        $('#uploaded_image_7').html(data.uploaded_image_7);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionA') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_A').css('display', 'block');
                        $('#message_A').html(data.message_A);
                        $('#message_A').addClass(data.class_name);
                        $('#uploaded_image_A').html(data.uploaded_image_A);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionB') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_B').css('display', 'block');
                        $('#message_B').html(data.message_B);
                        $('#message_B').addClass(data.class_name);
                        $('#uploaded_image_B').html(data.uploaded_image_B);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionC') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_C').css('display', 'block');
                        $('#message_C').html(data.message_C);
                        $('#message_C').addClass(data.class_name);
                        $('#uploaded_image_C').html(data.uploaded_image_C);
                    }
                })
        });

    });

    $(document).ready(function(){
        $('#images_full').on('change', function(event){
            event.preventDefault();
                $.ajax({
                url:"{{ route('ajaxupload.actionD') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                    {
                        $('#message_D').css('display', 'block');
                        $('#message_D').html(data.message_D);
                        $('#message_D').addClass(data.class_name);
                        $('#uploaded_image_D').html(data.uploaded_image_D);
                    }
                })
        });

    });



</script>




@endsection
