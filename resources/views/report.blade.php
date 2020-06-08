@extends('layouts.admin_layout')
@section('title', 'Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-12">
            <h1 class="title">Inspection Report</h1>
        </div>
        <hr noshade>
        <div class="col-12 mb-3">
            <div class="title-search">ค้นหา</div>
            <form class="form-inline">
                <div class="form-group col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <input class="col-12 form-control form-control-sm" type="input" name="brand" id="brand" placeholder="ยี่ห้อรถ">
                </div>
                <div class="form-group col-12 col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <input class="col-12 form-control form-control-sm" type="input" name="model" id="model" placeholder="รุ่นรถ">
                </div>
                <div class="form-group col-12 col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <input class="col-12 form-control form-control-sm" type="input" name="carID" id="carID" placeholder="เลขทะเบียน">
                </div>
                <div class="form-group col-12 col-md-6 col-lg-3 mb-2 mb-lg-0">
                    <input class="col-12 form-control form-control-sm" type="input" name="inspectionID" id="inspectionID" placeholder="เลขที่ตรวจสภาพรถ">
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <?php for($i=0; $i<6; $i++){ ?>
            <div class="col-md-6 col-lg-4 my-2">
                <a href="">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="100%">
                        </div>
                        <div class="card-header"><b>2020 Audi TTS</b></div>
                        <div class="card-body py-2">
                            <div class="row">
                                <div class="col-5 font-weight-bold">รุ่น</div>
                                <div class="col-7">TTS</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">ปี</div>
                                <div class="col-7">2020</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">ระบบเกียร์</div>
                                <div class="col-7">Auto</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">สี</div>
                                <div class="col-7">ดำ</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">เลขทะเบียน</div>
                                <div class="col-7">9กฬ3677</div>
                            </div>
                            <div class="row">
                                <div class="col-5 font-weight-bold">เลขไมล์ (กม.)</div>
                                <div class="col-7">100,000</div>
                            </div>
                        </div>
                        <div class="card-header" style="border: none;">ราคาขาย <b>XXX</b> บาท</div>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>

    <nav class="mt-3" aria-label="Page navigation">
        <ul class="pagination justify-content-center mb-0">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">First</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Last</a></li>
        </ul>
    </nav>
<br>
<br>
<br>
<br>
<br>
</div>

@endsection