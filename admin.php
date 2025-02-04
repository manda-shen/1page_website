<?php 
include_once "api/db.php";
// if(!isset($_SESSION['login'])){
//     echo "請從登入頁面登入<a href='index.php?do=login'>管理登入</a>";
//     exit();
// }
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>天空小品-療愈農場</title>
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;    700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/    all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/    bootstrap-icons.css" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"     rel="stylesheet" />
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <script src="./js/jquery-1.9.1.min.js"></script>
        <script src="./js/js.js"></script>
</head>

<body>
    <div style="display:none; ">
        <div>
            <a onclick="cl('#cover')">X</a>
            <div id="cvr"></div>
        </div>
    </div>
    <div id="main">
        <a title="<?=$Title->find(['sh'=>1])['text'];?>" href="index.php">
            <div style="background:url('./upload/<?=$Title->find(['sh'=>1])['img'];?>'); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div id="ms">
            <div id="lf" style="float:left;">
                <div id="menuput" class="card" style="width: 18rem;">
                    <!--主選單放此-->
                    <span class="card-header">後台管理選單</span>
                    <a href="?do=title">
                        <div type="button" class="btn btn-light">
                            LOGO </div>
                    </a>
                    <a href="?do=ad">
                        <div type="button" class="btn btn-light">
                            動態文字廣告管理 </div>
                    </a>
                    <a href="?do=mvim">
                        <div type="button" class="btn btn-light">
                            動畫圖片管理 </div>
                    </a>
                    <a href="?do=image">
                        <div type="button" class="btn btn-light">
                            校園映象資料管理 </div>
                    </a>
                    <a href="?do=total">
                        <div type="button" class="btn btn-light">
                            進站總人數管理 </div>
                    </a>
                    <a href="?do=bottom">
                        <div type="button" class="btn btn-light">
                            頁尾版權資料管理 </div>
                    </a>
                    <a href="?do=news">
                        <div type="button" class="btn btn-light">
                            最新消息資料管理 </div>
                    </a>
                    <a href="?do=admin">
                        <div type="button" class="btn btn-light">
                            管理者帳號管理 </div>
                    </a>
                    <a href="?do=menu">
                        <div type="button" class="btn btn-light">
                            選單管理 </div>
                    </a>


                </div>
                <div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
                    <span class="t">進站總人數 :
                    <?=$Total->find(1)['total'];?></span>
                </div>
            </div>

            <?php
			
			$do=$_GET['do']??'title';
			$file="./backend/{$do}.php";

			if(file_exists($file)){
				include $file;
			}else{
				include "./backend/title.php";
			}

			?>

        </div>
        <div style="clear:both;"></div>
        <div
            style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
            <span class="t" style="line-height:123px;"><?=$Bottom->find(1)['bottom'];?></span>
        </div>
    </div>

</body>

</html>