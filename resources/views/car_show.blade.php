{{-- @extends('layouts.admin_layout')
@section('content') --}}
{{-- <div class="col-md-3"></div> --}}
@section('title', 'Inspection Report')
<html>

<div class="col-md-8" style="margin-top:2%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="{{ asset('css/carshow.css')}}" rel="stylesheet">


  <script>
    function printdiv(){
        var newstr=document.getElementById("printpage").innerHTML;
        var footer ="";

        //You can set height width over here
        var popupWin = window.open('', '_blank', 'width=1100,height=600');
        popupWin.document.open();
        popupWin.document.write('<html> <body>'+ newstr + '</html>');
        window.resizeTo(960, 600);
        popupWin.document.close();
        return false;
    }
</script>

</head>
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

{{-- <body onload="window.print()"> --}}
<body>
    <div class="printpage" align="center">
        <div class = "page-container">
            <!--PAGE 1-->
            <div class="page">
                <div class="head-title">
                    USED Car Inspection Report
                </div>
                <div class="head-description">
                    รายงานผลการตรวจเช็คสภาพรถยนต์
                </div>

            </div>
            <!--PAGE 2-->
            <div class="page">

            </div>
            <!--PAGE 3-->
            <div class="page">
                <div class="page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            รูปด้านหน้ารถยนต์
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title">
                                รูปด้านหลังรถยนต์
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 4 -->
            <div class = "page">
                <div class = "page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            รูปเครื่องยนต์
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                    <div class = "car-show">
                        <div class="topic-title" >
                            รูปเลขไมลล์
                        </div>
                        <br>
                        <div class="">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 5 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "car-show">
                        <div class="topic-title">
                            รูปเลขตัวถัง
                        </div>
                        <br>
                        <div class="">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title" >
                            รูปเลขเครื่องยนต์
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 6 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "check-table">
                        <div class="topic-title" >
                            สรุปสถานะรวม
                        </div>
                        <div class = "grid-container">
                            <div class = "grid-item">
                                <table class="overall-table" border="1">
                                    <tr>
                                        <td class = "table-title">1.สถานะเครื่องยนต์</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">2.สถานะเกียร์</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">3.สถานะ ECU, ECM</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">4.สถานะระบบเบรค</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr >
                                        <td class = "table-title">5.สถานะชุดส่งกำลังเพลาหน้าและท้าย</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            6.รถเลขเครื่องตรง
                                            <div class="table-description">(รถเลขเครื่องยนต์ตรงตามเล่มทะเบียนรถ)</div>
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            7.รถเลขตัวถังตรง
                                            <div class="table-description">(รถเลขตัวถังตรงตามเล่มทะเบียนรถยนต์)</div>
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            8.รถสภาพสีเดิม
                                            <div class="table-description">(รถสีสภาพเดิมจากโรงงานและตรงตามเล่มทะเบียนรถยนต์)</div>
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            9.เลขไมล์แท้
                                            <div class="table-description">(เลขไมล์แท้เป็นไมล์ที่เปรียบเทียบจากไมล์ล่าสุดที่อยู่ในประวัติของศูนย์บริการของรถยนต์แต่ละยี่ห้อ)</div>
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">10.ระบบระบายความร้อนเครื่องยนต์</td>
                                        <td class = "table-check">N</td>
                                    </tr>

                                </table>
                            </div>
                            <div class = "grid-item">
                                <table class="table table-bordered overall-table" textalign=center>
                                    <tr>
                                        <td class = "table-title">11.ระบบกันสะเทือนหน้าและหลัง</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">12.ระบบปรับอากาศ และทำความร้อน</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">13.ระบบความปลอดภัย Airbag</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">14.ระบบบังคับเลิ้ยว</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">15.ระบบ Security System</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">16.ระบบ Turbo</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">17.รูปยางอะไหล่</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">18.รูปกุญแจสำรอง</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">19.Dock Service</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">20.พรบ.</td>
                                        <td class = "table-check">N</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 7 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ผลการตรวจภายนอก</div>
                    <div class="car-layout">
                        <!--บังโคลน-->
                        <img id="A1" class="car-component" src="{{ asset('car_structure/A1.png')}}" style="visibility: visible">
                        <img id="A2" class="car-component" src="{{ asset('car_structure/A2.png')}}" style="visibility: visible">
                        <img id="B1" class="car-component" src="{{ asset('car_structure/B1.png')}}" style="visibility: visible">
                        <img id="B2" class="car-component" src="{{ asset('car_structure/B2.png')}}" style="visibility: visible">
                        <img id="FS" class="car-component" src="{{ asset('car_structure/FS.png')}}" style="visibility: visible">

                        <!--ส่วนหน้า-->
                        <img id="CH" class="car-component" src="{{ asset('car_structure/CH.png')}}" style="visibility: visible">
                        <img id="WS" class="car-component" src="{{ asset('car_structure/WS.png')}}" style="visibility: hidden">
                        <!--หลังคา-->
                        <img id="Roof" class="car-component" src="{{ asset('car_structure/Roof.png')}}" style="visibility: visible">

                        <!--กระจกท้าย-->
                        <img id="WSR" class="car-component" src="{{ asset('car_structure/WSR.png')}}" style="visibility: visible">

                        <!--ประตู-->
                        <img id="C1" class="car-component" src="{{ asset('car_structure/C1.png')}}" style="visibility: visible">
                        <img id="C2" class="car-component" src="{{ asset('car_structure/C2.png')}}" style="visibility: visible">
                        <img id="D1" class="car-component" src="{{ asset('car_structure/D1.png')}}" style="visibility: visible">
                        <img id="D2" class="car-component" src="{{ asset('car_structure/D2.png')}}" style="visibility: visible">

                        <!--ล้อ-->
                        <img id="W1" class="car-component" src="{{ asset('car_structure/W1.png')}}" style="visibility: visible">
                        <img id="W2" class="car-component" src="{{ asset('car_structure/W2.png')}}" style="visibility: visible">
                        <img id="W3" class="car-component" src="{{ asset('car_structure/W3.png')}}" style="visibility: visible">
                        <img id="W4" class="car-component" src="{{ asset('car_structure/W4.png')}}" style="visibility: visible">

                        <!--บันได-->
                        <img id="LS" class="car-component" src="{{ asset('car_structure/LS.png')}}" style="visibility: visible">
                        <img id="RS" class="car-component" src="{{ asset('car_structure/RS.png')}}" style="visibility: visible">

                        <!--หลัง-->
                        <img id="RH" class="car-component" src="{{ asset('car_structure/RH.png')}}" style="visibility: visible">
                    </div>
                </div>
            </div>
            <!-- PAGE 8 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ยางล้อ และเบรก</div>
                    <table class="overall-table" style="margin-top: 20px;">
                        <tr>
                            <td class="table-title">ล้อหน้าซ้าย</td>
                            <td class = "table-detail">ยางสภาพปกติ</td>
                        </tr>
                        <tr>
                            <td class="table-title">ล้อหน้าขวา</td>
                            <td class = "table-detail">ยางสภาพปกติ</td>
                        </tr>
                        <tr>
                            <td class="table-title">ล้อหลังซ้าย</td>
                            <td class = "table-detail">ยางสภาพปกติ</td>
                        </tr>
                        <tr>
                            <td class="table-title">ล้อหลังขวา</td>
                            <td class = "table-detail">ยางสภาพปกติ</td>
                        </tr>
                    </table>
                    <div class="wheel-grid-container">
                        <img src="{{ url('images/car1.jpg') }}" class="wheel-img" >
                        <img src="{{ url('images/car1.jpg') }}" class="wheel-img" >
                        <img src="{{ url('images/car1.jpg') }}" class="wheel-img" >
                        <img src="{{ url('images/car1.jpg') }}" class="wheel-img" >
                    </div>
                </div>
            </div>
            <!-- PAGE 9 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ผลตรวจโครงสร้างรถ</div>
                    <table class="overall-table" style="margin-top: 20px;">
                        <tr>
                            <td class="table-title">ห้องเครื่อง</td>
                            <td class="table-detail">ปกติ</td>
                        </tr>
                        <tr>
                            <td class="table-title">ห้องโดยสาร</td>
                            <td class="table-detail">ปกติ</td>
                        </tr>
                        <tr>
                            <td class="table-title">ห้องเครื่อง</td>
                            <td class="table-detail">ปกติ</td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- PAGE 10 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ภายใน</div>
                </div>
            </div>
            <!-- PAGE 11 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">ข้อตกลงและเงื่อนไขการให้บริการ</div>
                    <div class="condition-bg">

                    </div>
                    <div class ="sign-grid-container">
                        <div class="">
                            ____________________<br>
                            ช่าง
                        </div>
                        <div class="">
                            ____________________<br>
                            หัวหน้าช่าง
                        </div>
                        <div class="">
                            ____________________<br>
                            ผู้มีอำนาจลงนาม
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</body>
</html>
{{-- @endsection --}}
