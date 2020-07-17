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
                <div class="page-contain">
                    <div class="head-logo">
                        <img src= "{{ asset('images/logo-1.png') }}">
                    </div>
                    <div class="head-title">
                        Preowned Vehicle Inspection Report
                    </div>
                    <div class="head-description">
                        Premium Inspection Analysis
                    </div>
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
                            {{-- รูปด้านหน้ารถยนต์ --}}
                            Vehicle Front Image
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รูปด้านหลังรถยนต์ --}}
                            Vehicle Back Image
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
                            {{-- รูปเครื่องยนต์ --}}
                            Vehicle Engine Image
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                    <div class = "car-show">
                        <div class="topic-title" >
                            {{-- รูปเลขไมลล์ --}}
                            Vehicle Odometer Image
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
                            {{-- รูปเลขตัวถัง --}}
                            Vehicle Chassis Number
                        </div>
                        <br>
                        <div class="">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title" >
                            {{-- รูปเลขเครื่องยนต์ --}}
                           Vehicle Engine Number
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
                    <div class = "car-show">
                        <div class="topic-title">
                            {{-- รายการจดทะเบียน --}}
                            Vehicle Registration Book
                        </div>
                        <br>
                        <div class="">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>

                    <div class = "car-show">
                        <div class="topic-title" >
                            ODB Analysis
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <img src="{{ url('images/car1.jpg') }}" height="auto" width="500px" class="img-thumbnail" style="border: 20px inset #a38175;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 7 -->
            <div class="page">
                <div class="page-contain">
                    <div class = "check-table">
                        <div class="topic-title" >
                            Exterior Report
                        </div>
                        <div class = "grid-container">
                            <div class = "grid-item">
                                <table class="overall-table conclude-table" border="1">
                                    <tr>
                                        <td class = "table-title">1.Front Left Fender</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">2.Bonnet</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">3.Front bumper/td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">4.Front right fender</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr >
                                        <td class = "table-title">5.Front right door</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            6.Front right alloy wheel
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            7.Right side step/side spoiler
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            8.Back Right alloy wheel
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">
                                            9.Rear right door
                                        </td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">10.Right wheel well(outer)</td>
                                        <td class = "table-check">N</td>
                                    </tr>

                                </table>
                            </div>
                            <div class = "grid-item">
                                <table class="overall-table conclude-table" textalign=center>
                                    <tr>
                                        <td class = "table-title">11.Back panel</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">12.Back rear spoiler & under spoiler</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">13.Truck bed</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">14.Roof</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">15.Left wheel well(outer)</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">16.Rear left door</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">17.Back Left alloy wheel</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">18.Left side step/side spoiler</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">19.Front Left alloy wheel</td>
                                        <td class = "table-check">N</td>
                                    </tr>
                                    <tr>
                                        <td class = "table-title">20.Front left door.</td>
                                        <td class = "table-check">N</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="detail-description">
                            <table class="table-report">
                                <thead>
                                    <th colspan="2">Exterior Report</th>
                                </thead>
                                <tr>
                                    <td class="char-col">N</td>
                                    <td>New Parts</td>
                                </tr>
                                <tr>
                                    <td class="char-col">BP</td>
                                    <td>New Body Paint Job</td>
                                </tr>
                                <tr>
                                    <td class="char-col">D</td>
                                    <td>Dent Mark</td>
                                </tr>
                                <tr>
                                    <td class="char-col">S</td>
                                    <td>Scated Mark</td>
                                </tr>
                                <tr>
                                    <td class="char-col">O</td>
                                    <td>Original</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PAGE 8 -->
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

                        <!--Mark-->
                        <span id="W1-mark" class="mark-component">N</span>
                        <span id="W2-mark" class="mark-component">N</span>
                        <span id="W3-mark" class="mark-component">N</span>
                        <span id="W4-mark" class="mark-component">N</span>
                        <span id="CH-mark" class="mark-component">D</span>
                        <span id="Roof-mark" class="mark-component">BP</span>
                        <span id="A1-mark" class="mark-component">N</span>
                        <span id="A2-mark" class="mark-component">N</span>
                        <span id="B1-mark" class="mark-component">N</span>
                        <span id="B2-mark" class="mark-component">N</span>
                        <span id="C1-mark" class="mark-component">S</span>
                        <span id="D1-mark" class="mark-component">S</span>
                        <span id="C2-mark" class="mark-component">BP</span>
                        <span id="D2-mark" class="mark-component">BP</span>
                        <span id="LS-mark" class="mark-component">N</span>
                        <span id="RS-mark" class="mark-component">N</span>
                        <span id="WSR-mark" class="mark-component">N</span>
                        <span id="RH-mark" class="mark-component">N</span>
                    </div>
                    <div class="detail-description">
                        <table class="table-report">
                            <thead>
                                <th colspan="2">Exterior Report</th>
                            </thead>
                            <tr>
                                <td class="char-col">N</td>
                                <td>New Parts</td>
                            </tr>
                            <tr>
                                <td class="char-col">BP</td>
                                <td>New Body Paint Job</td>
                            </tr>
                            <tr>
                                <td class="char-col">D</td>
                                <td>Dent Mark</td>
                            </tr>
                            <tr>
                                <td class="char-col">S</td>
                                <td>Scated Mark</td>
                            </tr>
                            <tr>
                                <td class="char-col">O</td>
                                <td>Original</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE 9 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Tire Condition Report</div>
                    <table id="tire-table" class="overall-table" style="margin-top: 20px;">
                        <tr>
                            <td class="table-title">Front Left Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Front Right Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Back Right Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                        <tr>
                            <td class="table-title">Back Left Tire Condition</td>
                            <td class = "table-detail">Normal</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item" >
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item" >
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item" >
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item" >
                    </div>
                    <div id="battery-condition" style="margin-top: 23px;">
                        <div class="topic-title">Battery Condition Report</div>
                        <table class="table-battery" border="1">
                            <tr>
                                <td rowspan="0">Battery Test</td>
                                <td colspan="2">Battery Condition Report</td>
                                <td colspan="2">Charge System test at 2000 rpm</td>
                            </tr>
                            <tr>
                                <td>Voltage</td>
                                <td></td>
                                <td>Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Current</td>
                                <td></td>
                                <td colspan="2">Start System Test</td>
                            </tr>
                            <tr>
                                <td>Current</td>
                                <td></td>
                                <td>Start of Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>State of Charge</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>State of Health</td>
                                <td></td>
                                <td colspan="2">Max. Load Test at 200 rpm</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td></td>
                                <td>Max. Load Voltage</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Test Date</td>
                                <td></td>
                                <td>Status</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- PAGE 10 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Chassis Report</div>
                    <div class="grid-container">
                        <table id="chassis-table" class="overall-table">
                            <tr>
                                <td class="table-title">Engine Compartment</td>
                                <td class="table-detail">NH</td>
                            </tr>
                            <tr>
                                <td class="table-title">Passenger Compartment</td>
                                <td class="table-detail">NH</td>
                            </tr>
                            <tr>
                                <td class="table-title">Trunk Compartment</td>
                                <td class="table-detail">NH</td>
                            </tr>
                        </table>
                        <div>
                            <table class="table-report">
                                <thead>
                                    <th colspan="2">Chassis Report</th>
                                </thead>
                                <tr>
                                    <td class="char-col">NH</td>
                                    <td>Non heavy accident</td>
                                </tr>
                                <tr>
                                    <td class="char-col">H</td>
                                    <td>Heavy accident</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="chassis-report">
                        <img id="engine" class="chassis-component" src="{{ asset('chassis_structure/ห้องเครื่อง.png')}}">
                        <img id="carbin" class="chassis-component" src="{{ asset('chassis_structure/ห้องโดยสาร.png')}}">
                        <img id="cargo" class="chassis-component" src="{{ asset('chassis_structure/ห้องเก็บของ.png')}}">
                    </div>
                </div>
            </div>
            <!-- PAGE 11 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Interior Report</div>
                    <table class="overall-table" textalign=center style="margin-top: 30px; width: 85%;">
                        <tr>
                            <td class = "table-title">Steering wheel</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 100%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Dashboard</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Front Left Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 25%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Front Right Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Rear Seat</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Console</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Left Door Trim</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Right Door Trim</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Roof Fabric</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Airconditioning</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Internal Lighting System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">External Lighting</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Radio System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Window System</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Abnormal Smell</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class = "table-title">Luggage Area</td>
                            <td class = "table-progress">
                                <div class="progress-bar">
                                    <div class="progress-bar-bar" style="width: 50%"></div>
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- PAGE 12 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Interior Report</div>
                </div>
            </div>
            <!-- PAGE 13-->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Flood Report</div>
                    <table id="flood-table" class="overall-table" style="width: 70%; margin-top: 20px;">
                        <tr>
                            <td class="table-title">Evidence of Flood</td>
                            <td class="table-detail">No</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item-xl" >
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item-xl" >
                    </div>
                    <div class="topic-title" style="margin-top: 50px;">Fire Report</div>
                    <table id="fire-table" class="overall-table" style="width: 70%; margin-top: 20px;">
                        <tr>
                            <td class="table-title">Evidence of Fire</td>
                            <td class="table-detail">No</td>
                        </tr>
                    </table>
                    <div class="image-grid-container">
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item-xl" >
                        <img src="{{ url('images/car1.jpg') }}" class="img-grid-item-xl" >
                    </div>
                </div>
            </div>
            <!-- PAGE 14-->
            <div class="page">

                <div class="page-contain">
                    <div class="topic-title">Vehicle Overview</div>
                    <div class = "grid-container">
                        <div class = "grid-item">
                            <table class="vehicle-overview-table" textalign=center>
                                <tr>
                                    <td class = "table-title">1.Engine System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">2.Gear System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">3.ECU, ECM System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">4.Brake System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">5.Drive Axie System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">6.Genuine Engine number</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">7.Genuine Chassis number</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">8.Original OEM Colours</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">9.Genuine Mileage</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">10.Engine Cooling System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">11.Suspension System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>

                            </table>
                        </div>
                        <div class = "grid-item">
                            <table class="vehicle-overview-table" textalign=center>
                                <tr>
                                    <td class = "table-title">12.Air Conditioning and Heating System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">13.Safety system</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">14.Stearing System</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">15.Security system</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">16.Turbo system</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">17.Flood Incident Report</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">18.Fire incident Report</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">19.Battery Condition Report</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">20.Tire Condition Report</td>
                                    <td class = "table-check">Pass</td>
                                </tr>
                                <tr>
                                    <td class = "table-title">21.Chassis Report</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-bar" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "table-title">22.Exterior Report</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-bar" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class = "table-title">23.Interior</td>
                                    <td class = "table-progress">
                                        <div class="progress-bar">
                                            <div class="progress-bar-bar" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="topic-title" style="margin-top: 20px;">Inspector Note</div>
                    <div id="inspector-note">
                        This Vehicle, 2020 TOYOTA YARIS with Chassis number Fxtig123654 was Inspected on the 17 July 2020 by Mr. Wasawad Wasuthasawat. The Inspector did not find irregularities with the 16 Inspection Details stated in this report. It can be concluded that at the time of Inspection, the said Inspection Analysis has passed the Inspection standard of Mittare Insurance Public Co., LTD.
                    </div>
                </div>
            </div>
            <!-- PAGE 15 -->
            <div class="page">
                <div class="page-contain">
                    <div class="topic-title">Term and Condition</div>
                    <div class="condition-bg">
                        <table border="1">
                            <tr align="center">
                                <th colspan="2" style="padding: 15px;">ข้อตกลงและเงื่อนไขการให้บริการ</th>
                            </tr>
                            <tr>
                                <td>
                                    1.หน้าที่การให้บริการต่อผู้ใช้บริการในฐานะผู้ขาย ในการให้บริการให้ข้อมูลหรือตอบคำถามต่อผู้ใช้งานในเรื่องที่เกี่ยวกับการตรวจสภาพรถโดย Goo Inspection ที่ได้ขายให้แก่ผู้ใช้งานซึ่งเป็นผู้ซื้อ
                                </td>
                                <td>
                                    1. service  condition to the customer,as seller who provides services, information or provide answer to the user which related to car inspection by Goo Inspection , which sell to user as buyer.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2.เงื่อนไขการเรียกร้องค่าเสียหาย และอื่นๆที่เกี่ยวข้อง  ผู้ใช้บริการยอมรับข้อตกลงที่ว่า  car  credo (thailand) และ JAAA ไม่มีส่วนรับผิดชอบใดๆ ต่อความเสียหายที่เกิดขึ้นแก่บริษัทสมาชิกและไม่มีหน้าที่หรือความรับผิดชอบใดๆ กรณีถูกเรียกร้องค่าเสียหาย และค่าชดเชยต่างๆ กรณีเกิดความเสียหายต่อบุคคลที่สาม อันเนื่องมาจากการให้ข้อมูลการตรวจสอบสภาพรถ บริษัทสมาชิกต้องรับผิดชอบดำเนินการแก้ไขความเสียหายนั้น และรับผิดชอบค่าใช้จ่ายที่เกิดขึ้นเองทั้งหมด
                                </td>
                                <td>
                                    2. Claiming condition, customer agree and accept that car  credo (thailand) and JAAA do not have responsibility for any lost  or  damage to member  company that happen after the inspection. In the event of third party claim or prosecute for lost or damage in any kinds that related to our  inspection, the member company shall lake full responsibility and lake action to solve problems for third party.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3.การตรวจสอบโดย Goo Inspection จะไม่รับผิดชอบต่อเงื่อนไขของการกระทำธุรกรรมใดๆ ระหว่างบุคคลใดๆที่เกี่ยวข้องกับยานพหนะใดๆการแก้ไขข้อพิพาทระหว่างบุคคลใดๆ เกี่ยวกับการทำธุรกรรมใดๆทั้งสิ้น
                                </td>
                                <td>
                                    3.Goo Inspection will not be responsible for the tems of any transaction between any persons in relation to any vehicle inspection by Goo Inspection for resolving any dispute between  any person redarding any transition
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4. ระเบียบและการใช้ใบรับรองของการตรวจสภาพรถ และแผ่นตรวจสอบ(check sheet) บริษัทสมาชิกยอมรับในการถูกระงับสิทธิ์การใช้ใบรับรอง ในกรณีที่เข้าข้อหนึ่งดังต่อไปนี้<br>
                                    (1)ระยะทางวิ่งของรถเพิ่มขึ้นมากกว่า 50 ก.ม. นับจากวันตรวจสภาพรถครั้งสุดท้าย<br>
                                    (2)รถมีสภาพต่างจากเนื้อหาที่ระบุในใบรับรองหรือแผ่นตรวจสอบ<br>
                                    (3)ขายรถที่ผ่านการรับรองโดย  Goo Inspection  และทำการเปลี่ยนแปลงชื่อบริษัทหรือสาขา<br>

                                </td>
                                <td>
                                    4.Procedure and usage of inspection certificate and check sheet member  company accept to suspension the right of certificate and check sheet in the  following  condition;<br>
                                    (1)car  mileage has increase more than 50 km. since the last date of inspection<br>
                                    (2)car condition has changed from the imformation in certificate and check sheet<br>
                                    (3)change company name or branch name after selling car that has goo inspection certified
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    5. รถที่ไม่เข้าข่ายได้รับการตรวจสภาพโดยทาง Goo Inspection ไม่มีหน้าที่ต้องตรวจสภาพรถที่มีลักษณะข้อใดข้อหนึ่ง ดังต่อไปนี้ ซึ่งต่อไปนี้ จะเรียกว่า"รถที่ไม่เข้าข่ายได้รับการตรวจสภาพ" JAAA หรือเจ้าหน้าที่ตรวจสภาพรถเป็นผู้พิจารณาว่ารถคันดังกล่าว เป็นรถที่ไม่เข้าข่ายได้รับการสภาพหรือไม่ และบริษัทสมาชิกยอมรับในผลพิจารณาดังกล่าว<br>
                                    (1)รถที่มีการดัดแปลงมาตรวัดระยะทางวิ่ง<br>
                                    (2)รถที่มีการปลอมแปลงหมายเลขตัวถัง รถที่หมายเลขตัวถังไม่ตรงกับความจริง หมายเลขถังซ้ำกับรถคันอื่นหรือมีการเปลี่ยนแปลงแก้ไขหมายเลข<br>
                                    (3)รถที่ถูกโจรกรรมมา รถติดจำนอง รถที่ถูกยึด หรือรถใดๆ ก็ตามซึ่งมีข้อพิพาททางกฎหมาย<br>
                                    (4)รถที่ตรวจสอบแล้วว่าเครื่องยนต์หรือระบบขับเคลื่อนส่วนสำคัญเสื่อมสภาพ<br>
                                    (5)รถที่มีสภาพเสียหายจากอุบัติเหตุ<br>
                                    (6)รถที่  car  credo (thailand) และ JAAA พิจารณาแล้วว่าเป็นรถที่เข้าข่ายได้รับการตรวจสภาพ

                                </td>
                                <td>
                                    5.car that not in the scope of inspection policy. Goo Inspection shall not inspect car that have condition that meet the following  criteria which in this document will called"car that not in the scope of inspection" JAAA or inspector will judge whether car condition is in the scope of inspection or not  and member accept the judgement result; <br>
                                    (1)car that has been altered car's mileage meter<br>
                                    (2)car that has alteration chassis number,car that chassis number not mach with  the original  number  or duplicate with other car's  number<br>
                                    (3)car that has been stolen , detained , or any kinds of legal dispute<br>
                                    (4)car that main engine or main part has deteriorate or unable to function property<br>
                                    (5)car that has been damage from accident<br>
                                    (6)car that car credo  thailand)  or  JAAA have concluded that not in the scope of inspection policy
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6.ผลการตรวจสภาพรถ และการไม่รับประกันถึงผลในอนาคต ทั้งนี้บริษัทสมาชิกยอมรับในข้อเท็จจริงที่ว่า ผลการตรวจสภาพรถหมายถึงสภาพรถในช่วงเวลาที่ เจ้าหน้าที่ปฎิบัติการตรวจสภาพเท่านั้นและไม่ได้รับประกัน ถึงผลการตรวจสภาพรถในช่วงเวลาอื่นๆ ในอนาคต รวมถึงไม่สามารถใช้เป็นหลักฐานเพื่อการรับประกันใดๆทั้งสิ้น
                                </td>
                                <td>
                                    6.Inspection result and non-warranty for the future effect, member company accept the term and condition that;inspection  result is represent the condition of the car during the inspection period only,  inspection result  shall not carry warranty in the future event, also cannot use as evident for any mean of warranty
                                </td>
                            </tr>
                            <tr>
                                <td>
                                7. ข้อตกลงและยอมรับการใช้รายงานตรวจสภาพ  ผู้ใช้บริการตกลงและยอมรับว่าการใช้รายงานการตรวจสภาพฉบับนี้ต้องเป็นไปตามข้อกำหนดของ Goo Inspection  เท่านั้น
                                </td>
                                <td>
                                7.Term and condition of usage for Goo Inspection report. Customer agree and accept in term and condition   of usage of Goo Inspection's report and shall follow accordingly
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class ="sign-grid-container">
                        <div class="">
                            <div class="sign-block"></div>
                            Name Of Junior Inspector
                        </div>
                        <div class="">
                            <div class="sign-block"></div>
                            Name Of Senior Inspector
                        </div>
                        <div class="">
                            <div class="sign-block"></div>
                            Authorized Director
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
