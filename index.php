<?php include_once "api/db.php";
// $do = $_GET['do'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>天空小品-療愈農場</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="js/js.js"></script>
</head>

<body>
    <div class="row bg-white p-0">

        <!-- 彈出視窗 -->
        <div id="cover" style="display:none; ">
            <div id="coverr">
                <div id="cvr" class="modal" style="width:30% !important; height:40%;">

                </div>
            </div>
        </div>

        <!-- Header Start -->
        <div class="container-fluid sticky-top">
            <div class="nav-logo">
                <a class="navbar-brand" href="#">
                    <img src="./upload/<?=$Logo->find(['sh'=>1])['img'];?>" alt="">
                </a>
            </div>
            <nav class="navbar navbar-expand-sm navbar-dark text-hover">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <?php 
                        // 使用 $List 取代 $Menu
                        $mains = $List->all(['sh'=>1]);  // 移除 main_id 條件，因為目前不需要子選單
                        foreach($mains as $main){
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=$main['href']?>">
                                    <?=$main['text']?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                        </ul>
                    </div>
                    <div class="navbar-nav align-items-center ms-auto">
                        <?php 
                    if(empty($_SESSION['login'])){
                    ?>
                        <button class="btn btn-outline-light text-light w-100 m-2"
                            onclick="op('#cover','#cvr','./modal/login.php')">管理登入</button>
                        <?php
                    } else {
                    ?>
                        <button class="btn btn-outline-light text-light w-100 m-2">
                            <a href="admin.php" class="text-light">返回管理</a>
                        </button>
                        <button class="btn btn-outline-light text-light w-100 m-2">
                            <a href="./api/logout.php" class="text-light">管理登出</a>
                        </button>
                        <?php 
                    }
                    ?>
                    </div>
                </div>
            </nav>
        </div>

        <?php if(isset($_GET['login'])): ?>
        <script>
        $(document).ready(function() {
            // 自動開啟登入 modal
            $('#cover').show();
            // 載入登入表單
            $('#cvr').load("modal/login.php");
        });
        </script>
        <?php endif; ?>
        <!-- Header End -->



        <!-- Carousel Start -->
        <?php
    $images = $Image->all(['sh' => 1]);  // 取得所有啟用的輪播圖
    $count = count($images);  // 計算輪播圖數量
    ?>
        <section id="lokiSlider" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2800">
            <!-- 輪播指示器 -->
            <div class="carousel-indicators">
                <?php
        for($i = 0; $i < $count; $i++){
        ?>
                <button type="button" data-bs-target="#lokiSlider" data-bs-slide-to="<?=$i;?>"
                    class="<?=($i==0)?'active':'';?>">
                </button>
                <?php
        }
        ?>
            </div>

            <!-- 輪播內容 -->
            <div class="carousel-inner">
                <?php
            $first = true;
            foreach($images as $image){
            ?>
                <div class="carousel-item vh-100 <?=$first?'active':'';?>">
                    <img src="./upload/<?=$image['img'];?>" class="b-block w-100 h-100">
                    <div class="carousel-caption top-0 bottom-0 d-flex flex-column justify-content-center">
                        <h1><?=$image['text'];?></h1>
                        <p class="d-none d-md-block"><?=$image['text2'];?></p>
                    </div>
                </div>
                <?php
                $first = false;
            }
            ?>
            </div>

            <!-- 輪播控制按鈕 -->
            <button class="carousel-control-prev" type="button" data-bs-target="#lokiSlider" data-bs-slide="prev">
                <i class="fas fa-angle-double-left fa-2x"></i>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lokiSlider" data-bs-slide="next">
                <i class="fas fa-angle-double-right fa-2x"></i>
            </button>
        </section>
        <!-- Carousel End -->


        <!-- About Start -->
        <?php
        $about = $About->find(1);
        ?>
        <div id="about_us" class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase"><?=$about['title'];?></h6>
                        <h1 class="mb-4"><?=$about['title2'];?> <span
                                class="text-primary text-uppercase"><?=$about['title3'];?></span></h1>
                        <pre class="mb-4"><?=$about['text'];?></pre>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">5</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">8</h2>
                                        <p class="mb-0">Staffs</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">12</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s"
                                    src="./upload/<?=$about['img'];?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="./upload/<?=$about['img2'];?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="./upload/<?=$about['img3'];?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="./upload/<?=$about['img4'];?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <div id="room" class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <?php
            $rooms = $Room->all(['sh' => 1]);  // 取得所有啟用的房間資料
            $delay = 0.1;  // 初始動畫延遲
            foreach($rooms as $room){
            ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?=$delay;?>s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="./upload/<?=$room['img'];?>" alt="<?=$room['text'];?>">
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">
                                    NT$ <?=$room['price'];?>/Night
                                </small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?=$room['text'];?></h5>
                                    <div class="ps-2">
                                        <?php
                                    // 顯示五顆星星
                                    for($i=0; $i<5; $i++){
                                        echo '<small class="fa fa-star text-primary"></small>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa fa-bed text-primary me-2"></i><?=$room['beds'];?> Bed
                                    </small>
                                    <small class="border-end me-3 pe-3">
                                        <i class="fa fa-bath text-primary me-2"></i><?=$room['people'];?> people
                                    </small>
                                    <small>
                                        <i class="fa fa-wifi text-primary me-2"></i>Wifi
                                    </small>
                                </div>
                                <p class="text-body mb-3"><?=$room['info'];?></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                $delay += 0.2;  // 每個房間增加延遲時間
            }
            ?>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <?php
// 取得啟用的影片資料（只取一筆）
$video = $Vedio->find(['sh' => 1]);  // 注意：資料表名稱是 Vedio
?>

        <!-- Video Start -->
        <div id="farming" class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-light d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3"><?=$video['text'];?></h6>
                        <h1 class="text-white mb-4"><?=$video['text2'];?></h1>
                        <p class="text-white mb-4"><?=$video['text3'];?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="<?=$video['href'];?>"
                            data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 彈出視窗 -->
        <div id="videoModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                </div>
                <div class="row g-4">
                    <?php
            $services = $Service->all(['sh' => 1]);
            $delay = 0.1;  // 初始動畫延遲
            foreach($services as $service){
            ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?=$delay;?>s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div
                                    class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="<?=$service['icon_class'];?> fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3"><?=$service['text'];?></h5>
                            <p class="text-body mb-0"><?=$service['text2'];?></p>
                        </a>
                    </div>
                    <?php
                $delay += 0.1;  // 每個服務增加延遲時間
            }
            ?>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Testimonial Start -->
        <div class="container-xxl testimonial my-5 py-5 bg-light wow zoomIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel testimonial-carousel py-5">
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                            diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                            diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                    <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                        <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet
                            diam stet. Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                                style="width: 45px; height: 45px;">
                            <div class="ps-3">
                                <h6 class="fw-bold mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                        <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Map Start -->
        <div id="map" class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class=" wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <?php $map=$Map->find(['sh'=>1]); ?>
                                <img class="img-fluid" src="./upload/<?=$map['img']??'no-image.jpg';?>" alt="農場地圖">
                                <div
                                    class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">導覽</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map End -->




        <!-- Footer Start -->


        <footer class="bg-light text-muted py-3 text-center">
            <small>
                <br>copyright &copy; <span class="text-warning">Manda Studio</span>. all rights reserved
            </small>

        </footer>

        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/js.js"></script>
</body>

</html>