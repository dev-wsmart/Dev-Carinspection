@extends('layouts.admin_layout')
@section('title', 'Service Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

    <div class="row">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="col-lg-12">
            <h1 class="title">Service Report</h1>
        </div>
        <hr noshade>
    </div>
    
    <div class="row">
        <div class="col-lg-12 mt-3 table-responsive">
            <table class="table table-hover table-sm bg-white">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>วันที่ตรวจรถ</th>
                        <th>วันออกรถ</th>
                        <th>วันเปิดกรมธรรม์</th>
                        <th>ยี่ห้อ</th>
                        <th>รุ่น</th>
                        <th>ทะเบียนรถ</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=1; $i<=10; $i++){ ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td>22-05-2020</td>
                        <td>25-05-2020</td>
                        <td>25-05-2020</td>
                        <td>Audi</td>
                        <td>TTS</td>
                        <td>กก 2222</td>
                        <td width="40px" style="text-align: center; vertical-align: middle;">
                            <a href="" title="ดูข้อมูล"><button class="btn btn-primary py-0 px-1"><i class="fa fa-search"></i></button></a>
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