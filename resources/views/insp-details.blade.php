<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspection Details</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        .nav-tabs{ border-bottom: 1px solid #052744;}
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
        .de-title{
            width: 95%;
            margin: 0 auto;
            padding: 2px 8px;
            font-weight: 300;
            border-bottom: 1px solid #052744;
        }
        .detail{
            float: right;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 title">
                ชื่อรถ
            </div>
        </div>
        <div class="row box py-4">
            <div class="col-lg-8">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-picture-o" aria-hidden="true"></i> Picture</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-camera" aria-hidden="true"></i> Pic 360</a>
                        <a href="#" class="btn btn-sm btn-report">Inspection Report</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">ยังไม่มีไฟล์ภาพ 360</div>
                </div>
            </div>
            <div class="col-lg-4 pl-lg-0">
                <div class="col-12 title">ข้อมูลรถ</div>
                <div class="de-title">
                    <i class="fa fa-car" aria-hidden="true"></i> ยี่ห้อ
                    <span class="detail">Audi</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-car" aria-hidden="true"></i> รุ่นย่อย
                    <span class="detail">A5</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-car" aria-hidden="true"></i> วันจดทะเบียนรถ
                    <span class="detail">00/00/0000</span>
                </div>
                <div class="de-title">
                    <i class="fa fa-car" aria-hidden="true"></i> ปีที่ผลิต
                    <span class="detail">2020</span>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
</html>