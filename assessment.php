<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Departments</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Give a satisfaction rating</h1>
                    <h4>ระบบให้คะแนนความพึงพอใจในการใช้บริการ</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <!-- <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="assets/images/feature1.png" alt="">
                        <h3>advance technology</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="assets/images/feature2.png" alt="">
                        <h3>comfortable place</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature3.png" alt="">
                        <h3>quality equipment</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature4.png" alt="">
                        <h3>friendly staff</h3>
                        <p class="pt-3">Creeping for female light years that lesser can't evening heaven isn't bearing tree appear</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Feature Area End -->

    <!-- Department Area Starts -->
    <section class="department-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top text-center">
                        <h2>กรุณาให้คะแนนความพึงพอใจในการใช้บริการ</h2>
                        <p>เพื่อนำไปปรับปรุงและพัฒนาการให้บริการของโรงพยาบาล ให้มีการบริการที่ดีที่สุดสำหรับทุกคน</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <table width="100%" border='0'>
                    <tr style="text-align:center;">
                        <td><a onclick="check_alert();"><img src="assets/img/level-0-0.jpg" width="150px"></a></td>
                        <td><a onclick="check_alert();"><img src="assets/img/level2.jpg" width="120px"></a></td>
                        <td><a onclick="check_alert();"><img src="assets/img/level3.jpg" width="150px"></a></td>
                    </tr>
                    <tr style="text-align:center;">
                        <td><a>ไม่พอใจ</a></td>
                        <td><a>ปกติ</a></td>
                        <td><a>ดีมาก</a></td>
                    </tr>
                    <tr>
                        <td colspan="3" height="100px"></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <h5>กรอกแบบสอบถามความพึงพอใจ -> <a onclick="window.open('assessment_from.php', '_blank', 'location=yes,height=770,width=1220,scrollbars=yes,status=yes');">Click!</a></h5>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area Starts -->

    <!-- Hotline Area Starts -->
    <!-- <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 256 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Hotline Area End -->
    
    <?php include('include/footer.php'); ?>


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>



</body>
</html>
<script>
    function check_alert() {
        if (confirm('ยืนยันการให้คะแนนใช่หรือไม่?')){
            return true;
        }else{
            return false;
        }
    }
    function gohome(){
        window.close();
    }
</script>