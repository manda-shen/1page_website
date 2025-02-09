<?php
include_once "./api/db.php";

if(!isset($_SESSION['login'])){
    echo "<script>
            alert('請先登入');
            location.href='index.php?login=1';
          </script>";
    exit();
}

// 確保 $do 變數獲取 GET 參數，未設置時預設為 'home'
$do = $_GET['do'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style_backend.css" rel="stylesheet">
</head>

<body>

<div id="cover" style="display:none; ">
        <div id="coverr">
            
            <div id="cvr" class="modal">

            </div>
        </div>
    </div>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- 彈出視窗 -->
        <div id="cover" style="display:none; ">
            <div id="coverr">
                <div id="cvr" class="modal">
                    
                </div>
            </div>
        </div>


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="admin.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">後臺管理</h3>
                </a>
                <div class="navbar-nav w-100">
                    <li class="nav-item"><a href="?do=logo" class="nav-link text-muted"><i class="bi bi-badge-tm"></i> Logo 管理</a></li>
                    <li class="nav-item"><a href="?do=list" class="nav-link text-muted"><i class="bi bi-list"></i> 導覽選單管理</a></li>
                    <li class="nav-item"><a href="?do=admin" class="nav-link text-muted"><i class="bi bi-people"></i> 會員帳號管理</a></li>
                    <li class="nav-item"><a href="?do=image" class="nav-link text-muted"><i class="bi bi-images"></i> 輪播圖管理</a></li>
                    <li class="nav-item"><a href="?do=about" class="nav-link text-muted"><i class="bi bi-file-text"></i> 關於我內容管理</a></li>
                    <li class="nav-item"><a href="?do=room" class="nav-link text-muted"><i class="bi bi-building"></i> 客房圖文管理</a></li>
                    <li class="nav-item"><a href="?do=vedio" class="nav-link text-muted"><i class="bi bi-camera-video"></i> 影片廣告管理</a></li>
                    <li class="nav-item"><a href="?do=service" class="nav-link text-muted"><i class="bi bi-link-45deg"></i> 服務項目</a></li>
                    <!-- <li class="nav-item"><a href="?do=comment" class="nav-link text-muted"><i class="bi bi-star"></i> 好評管理</a></li> -->
                    <li class="nav-item"><a href="?do=map" class="nav-link text-muted"><i class="bi bi-geo-alt"></i> 導覽圖管理</a></li>
                    <!-- <li class="nav-item"><a href="?do=footer" class="nav-link text-muted"><i class="bi bi-file-earmark"></i> 頁尾管理</a></li> -->

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                <button class="btn btn-outline-primary w-100 m-2"><a href="./api/logout.php?table=Admin">管理登出</a></button>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                <?php if ($do === 'home'): ?>
                        <h1 class="h4">後台主頁</h1>
                        <p class="text-muted">選擇左側選單進入管理頁面。</p>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">歡迎來到後台</h5>
                                <p class="card-text">這裡是你的後台控制台，請選擇一個管理項目開始編輯。</p>
                            </div>
                        </div>
                    <?php else: ?>
                        <?php
                        $do=$_GET['do']??'home';
			            $file="./backend/{$do}.php";
            
			            if(file_exists($file)){
			            	include $file;
			            }else{
			            	echo "<p class='text-danger'>找不到該頁面</p>";
			            }
            
			            ?>

                    <?php endif; ?>
                </div>
            </div>
            <!-- Form End -->


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Manda</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main_backend.js"></script>
    <script src="js/js.js"></script>
</body>

</html>