<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection Details</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('flexslider/flexslider.css')}}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
        .title{
            font-size: 1.1rem;
            color: #ffffff;
            padding: 4px 30px;
            background-color: #052744;
            border-radius: 20px 20px 0 0;
        }
        .box{
            border-radius: 0 0 20px 20px;
            border: 1px solid #052744;
            padding-bottom: 10px;
            margin-bottom: 13px;
        }
        .nav-tabs{ border-bottom: 1px solid #a3a3a3;}
        .nav-item{
            color: #000000;
            padding: 4px 6px;
        }
        .nav-item:hover{
            color: #000000;
            border-color: #052744 !important;
        }
        .nav-item.active{ border-color: #052744 #052744 #ffffff #052744 !important; }
        .tab-pane{ padding-top: 10px; }
        .btn-report{
            position: absolute;
            top: -10px;
            right: 20px;
            color: #6b6b6b  ;
            background-color: #FFCA07;
        }
        .btn-report:hover{ font-weight: 600; }

        .flex-direction-nav a::before{
            font-size: 30px;
        }
        #slider, #carousel{
            margin-bottom: 0px;
        }
        #slider img{
            object-fit: cover;
            height: 400px;
        }
        #carousel img{
            object-fit: cover;
            cursor: pointer;
            opacity: 0.5;
            width: 120px;
            height: 100px;
        }

        #carousel .flex-active-slide img, #carousel img:hover{
            opacity: 1;
        }

        #carousel{
            height: 100px;
        }

        .de-title{
            width: 95%;
            margin: 0 auto;
            padding: 2px 8px;
            font-weight: 300;
            border-bottom: 1px solid #a3a3a3;
        }
        .detail{
            float: right;
            font-weight: 600;
        }
        .insp-result > div{ padding-top: 3px; }
        .insp-result > div > table{ border-bottom: 1px solid #a3a3a3; }
        @media only screen and (max-width: 420px){
            #slider img{
                object-fit: cover;
                height: 220px;
            }

        }
    </style>
</head>
<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-12 title">
                ชื่อรถ
            </div>
        </div>
        <div class="row box pt-4">
            <div class="col-lg-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-picture-o" aria-hidden="true"></i> Picture</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-camera" aria-hidden="true"></i> Pic 360</a>
                        <a href="{{ route('car_show') }}" class="btn btn-sm btn-report">Inspection Report</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <!-- สไลด์รูปภาพ -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('images/car1.jpg') }}">
                                </li>
                                <li>
                                    <img src="{{ asset('images/car.jpg') }}">
                                </li>
                            </ul>
                        </div>
                        <div id = "carousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="{{ asset('images/car1.jpg') }}">
                                </li>
                                <li>
                                    <img src="{{ asset('images/car.jpg') }}">
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- รูป 360 -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">ยังไม่มีไฟล์ภาพ 360</div>
                </div>
            </div>

            <!-- ข้อมูลรถ -->
            <div class="col-lg-4 mt-3 m-lg-auto pl-lg-0">
                <div class="col-12 title">ข้อมูลรถ</div>
                <div class="de-title">
                    <i class="fa fa-car" aria-hidden="true"></i> ยี่ห้อ
                    <span class="detail">Audi</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-cab" aria-hidden="true"></i> รุ่นย่อย
                    <span class="detail">A5</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-calendar" aria-hidden="true"></i> วันจดทะเบียนรถ
                    <span class="detail">00/00/0000</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> ปีที่ผลิต
                    <span class="detail">2020</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/gear.png') }}" height="15px" class="mb-1"> ระบบเกียร์
                    <span class="detail">เกียร์อัตโนมัติ</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-paint-brush" aria-hidden="true"></i> สีปัจจุบัน
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/cc.png') }}" height="15px" class="mb-1"> ความจุเครื่องยนต์
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-user" aria-hidden="true"></i> จำนวนเจ้าของเดิม
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> เลขไมล์ปัจจุบัน
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/seat.png') }}" height="15px" class="mb-1"> จำนวนที่นั่ง
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/fuel.png') }}" height="14px" class="mb-1"> ประเภทเชื้อเพลิง
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/car-plate.png') }}" height="15px" class="mb-1"> ทะเบียนรถ
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                <img src="{{ asset('images/icon/car-regis.png') }}" height="15px" class="mb-1"> ประเภทจดทะเบียน
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/engine.png') }}" height="15px" class="mb-1"> หมายเลขเครื่องยนต์
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/chassis.png') }}" height="15px" class="mb-1"> หมายเลขตัวถัง
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <img src="{{ asset('images/icon/insurance.png') }}" height="15px" class="mb-1"> รถมีประกันหรือไม่
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-calendar-times-o" aria-hidden="true"></i> วันหมดอายุประกันภัย
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-building-o" aria-hidden="true"></i> บริษัทประกันภัย
                    <span class="detail">เทา</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-wrench" aria-hidden="true"></i> ผลตรวจสภาพประกันอะไหล่
                    <span class="detail">ผ่าน</span>
                </div>
            </div>

            <!-- ความคิดเห็นจากผู้ตรวจสภาพรถ -->
            <div class="col-12 mt-3">
                <div class="col-12 title">ความคิดเห็นจากผู้ตรวจสภาพรถ</div>
                <div class="de-title">xxxxx</div>
            </div>

            <!-- ผลตรวจเช็คสภาพรถยนต์ -->
            <div class="col-12 my-3">
                <div class="col-12 title">ผลตรวจเช็คสภาพรถยนต์</div>
                <div class="insp-result row mx-auto mx-lg-3">
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">1.</td>
                                <td>ไมล์แท้</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">2.</td>
                                <td>รถไม่เคยประสบภัยน้ำท่วมจมน้ำ</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">3.</td>
                                <td>รถไม่เคยประสบภัยไฟไหม้</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="insp-result row mx-auto mx-lg-3">
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">4.</td>
                                <td>รถสภาพสีเดิม</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">5.</td>
                                <td>รถเลขเครื่องตรง</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">6.</td>
                                <td>รถเลขตัวถังตรง</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="insp-result row mx-auto mx-lg-3">
                    <div class="col-lg-4">
                        <table width="100%">
                            <tr>
                                <td width="25px">7.</td>
                                <td>รถไม่เคยเกิดอุบัติเหตุรุนแรงชนหนัก จนทำให้โครงสร้างรถมีปัญหาความปลอดภัย</td>
                                <td width="20px"><i class="fa fa-check" aria-hidden="true"></i></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('flexslider/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 120,
            itemMargin: 5,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
  </script>
</html>
