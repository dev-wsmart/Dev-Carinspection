@extends('layouts.admin_layout')
@section('title', 'Inspection Report')
@section('content')
<div class="col-md-3"></div>
<div class="col-md-8" style="margin-top:2%;">

<script>
        // search ***************
        // $(document).ready(function(){
        // $("#search_car").on("keyup", function() {
        //     var value = $(this).val().toLowerCase();
        //     $("#search a").filter(function() {
        //     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //      });
        // });
        // });

</script>

    <div class="row">
        {{-- @if (session('status'))
            {{ session('status') }}
        @endif --}}
        <div class="col-12">
            <h1 class="title">Car Show</h1>
        </div>
        <hr noshade>
    </div>
    <div class="contenner" style="margin-left:3%;">
        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปด้านหน้ารถยนต์
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปด้านหลังรถยนต์
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปเครื่องยนต์
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปเลขไมลล์
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปเลขตัวถัง
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "car-show">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail">
                    รูปเลขเครื่องยนต์
                </button>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
            </div>
        </div>

        <div class = "check-table">
            <div class="d-flex justify-content-center" >
                <button class="minimal-indent" class="img-thumbnail" style="margin-bottom: 20px;">
                    สรุปสถานะรวม
                </button>
            </div>
            <div class = "row">
                <div class = "col-6">
                    <table class="table table-bordered overall-table">
                        <tr>
                            <td class = "table-secondary">1.สถานะเครื่องยนต์</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">2.สถานะเกียร์</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">3.สถานะ ECU, ECM</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">4.สถานะระบบเบรค</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr >
                            <td class = "table-secondary">5.สถานะชุดส่งกำลังเพลาหน้าและท้าย</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">
                                6.รถเลขเครื่องตรง
                                <div class="table-description">(รถเลขเครื่องยนต์ตรงตามเล่มทะเบียนรถ)</div>
                            </td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">
                                7.รถเลขตัวถังตรง
                                <div class="table-description">(รถเลขตัวถังตรงตามเล่มทะเบียนรถยนต์)</div>
                            </td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">
                                8.รถสภาพสีเดิม
                                <div class="table-description">(รถสีสภาพเดิมจากโรงงานและตรงตามเล่มทะเบียนรถยนต์)</div>
                            </td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">
                                9.เลขไมล์แท้
                                <div class="table-description">(เลขไมล์แท้เป็นไมล์ที่เปรียบเทียบจากไมล์ล่าสุดที่อยู่ในประวัติของศูนย์บริการของรถยนต์แต่ละยี่ห้อ)</div>
                            </td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>

                    </table>
                </div>
                <div class = "col-6">
                    <table class="table table-bordered overall-table" textalign=center>
                        <tr>
                            <td class = "table-secondary">10.ระบบระบายความร้อนเครื่องยนต์</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">11.ระบบกันสะเทือนหน้าและหลัง</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">12.ระบบปรับอากาศ และทำความร้อน</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">13.ระบบความปลอดภัย Airbag</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">14.ระบบบังคับเลิ้ยว</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">15.ระบบ Security System</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">16.ระบบ Turbo</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">17.รูปยางอะไหล่</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>
                        <tr>
                            <td class = "table-secondary">18.รูปกุญแจสำรอง</td>
                            <td class = "table-check">ผ่าน</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>

    </div><br><br>
    {{-- <div class="row">
        <div class="col-4"></div>
        <div class="col-4">{{ $data->onEachSide(1)->links() }}</div>
        <div class="col-4"></div>
    </div> --}}

</div>

@endsection
