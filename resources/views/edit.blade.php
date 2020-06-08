@extends('layouts.admin_layout')
@section('title', 'Edit Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Edit Inspection Report</h1>
        </div>
        <hr noshade>
    </div>
    
    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table class="table table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อลูกค้า</th>
                        <th>เบอร์โทร</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>ประเภทการตรวจ</th>
                        <th>วันนัดตรวจรถ</th>
                        <th>เวลานัดตรวจรถ</th>
                        <th>Remark</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1; $i<=5; $i++){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>Test Testttttttttttt</td>
                        <td>0123456789</td>
                        <td>Audi</td>
                        <td>TTS</td>
                        <td>Full Inspection</td>
                        <td>22-05-2020</td>
                        <td>16:00</td>
                        <td width="200px">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                        <td width="40px" style="text-align: center; vertical-align: middle;">
                            <a href="{{ url('/add-report') }}" title="เพิ่มข้อมูลตรวจสภาพรถ"><button class="btn btn-success py-0 px-1"><i class="fa fa-plus"></i></button></a>
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