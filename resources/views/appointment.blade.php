@extends('layouts.admin_layout')
@section('title', 'Inspection Appointment')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Inspection Appointment</h1>
        </div>
        <hr noshade>
        <div class="col-lg-12 clearfix">
            <div class="col-lg-9 mt-lg-1 float-left">
                <form>
                    <div class="form-row">
                        <label class="col-lg-1 mt-0 mt-lg-auto title-search" for="search">ค้นหา</label>
                        <input class="col-lg-5 form-control form-control-sm" type="text" name="search" id="search" placeholder="ชื่อลูกค้า, ID Card, เบอร์โทร, วันนัดตรวจรถ">
                    </div>
                </form>
            </div>
            <div class="col-lg-3 mt-3 mt-lg-auto float-right text-right">
                <a href="{{ route('add-inspection-appointment.index') }}"><button class="btn btn-warning px-4 btn-add-appoint"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข้อมูลนัดตรวจรถ</button></a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table class="table table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อลูกค้า</th>
                        <th>เลขประจำตัวประชาชน</th>
                        <th>เบอร์โทร</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>วันนัดตรวจรถ</th>
                        <th>ช่าง</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1; $i<=10; $i++){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>Test Testttttttttttt</td>
                        <td>1234567890123</td>
                        <td>0123456789</td>
                        <td>Audi</td>
                        <td>TTS</td>
                        <td>22-05-2020</td>
                        <td>Technician</td>
                        <td width="100px" style="text-align: center; vertical-align: middle;">
                            <a href="" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a>
                            <a href="" title="แก้ไขข้อมูล"><button class="btn btn-success py-0 px-1"><i class="fa fa-pencil"></i></button></a>
                            <a href="" title="ลบข้อมูล"><button class="btn btn-danger py-0 px-1"><i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <nav class="mt-3" aria-label="Page navigation">
        <ul class="pagination justify-content-center my-0">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">First</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Last</a></li>
        </ul>
    </nav>

</div>

@endsection