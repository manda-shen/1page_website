<?php
include_once "./api/db.php";
// 確保 $do 變數獲取 GET 參數，未設置時預設為 'home'
$do = $_GET['do'] ?? 'home';
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>天空小品 - 後台管理</title>
    
    <!-- Bootstrap 5 Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/css.css" rel="stylesheet"> -->
    <script src="./js/jquery-1.9.1.min.js"></script>
    <script src="./js/js.js"></script>


    <style>




    </style>
</head>
<body>
    <div id="cover" style="display:none; ">
        <div id="coverr">
            
            <div id="cvr" class="modal">

            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="d-flex flex-grow-1">
            <!-- Sidebar -->
            <nav class="bg-light bg-gradient p-3 sidebar" style="width: 250px; --bs-bg-opacity: .1;">
                <h2 class="h5">後台管理</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="?do=logo" class="nav-link text-muted"><i class="bi bi-house"></i> Logo 管理</a></li>
                    <li class="nav-item"><a href="?do=list" class="nav-link text-muted"><i class="bi bi-list"></i> 導覽選單管理</a></li>
                    <li class="nav-item"><a href="?do=admin" class="nav-link text-muted"><i class="bi bi-people"></i> 會員帳號管理</a></li>
                    <li class="nav-item"><a href="?do=image" class="nav-link text-muted"><i class="bi bi-images"></i> 輪播圖管理</a></li>
                    <li class="nav-item"><a href="?do=about" class="nav-link text-muted"><i class="bi bi-file-text"></i> 關於我內容管理</a></li>
                    <li class="nav-item"><a href="?do=room" class="nav-link text-muted"><i class="bi bi-building"></i> 客房圖文管理</a></li>
                    <li class="nav-item"><a href="?do=mvim" class="nav-link text-muted"><i class="bi bi-camera-video"></i> 影片廣告管理</a></li>
                    <li class="nav-item"><a href="?do=ad" class="nav-link text-muted"><i class="bi bi-fonts"></i> 文字廣告管理</a></li>
                    <li class="nav-item"><a href="?do=comment" class="nav-link text-muted"><i class="bi bi-star"></i> 好評管理</a></li>
                    <li class="nav-item"><a href="?do=map" class="nav-link text-muted"><i class="bi bi-geo-alt"></i> 地圖管理</a></li>
                    <li class="nav-item"><a href="?do=footer" class="nav-link text-muted"><i class="bi bi-file-earmark"></i> 頁尾管理</a></li>
                </ul>
            </nav>



            <!-- Main Content -->
            <main class="flex-grow-1 p-4 bg-body content">
                <div class="container">
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
            </main>
        </div>
        
        <footer class="bg-light text-muted py-3 text-center mt-auto">
            <small>
                <br>copyright &copy; <span class="text-warning">Manda Studio</span>. all rights reserved
            </small>
        </footer>
    </div>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>