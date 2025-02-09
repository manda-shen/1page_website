<?php
include_once "db.php";  // 這裡已包含 session_start()

$acc = $_GET['acc'];
$pw = $_GET['pw'];

// 檢查帳號密碼
$result = $Admin->count(['acc'=>$acc, 'pw'=>$pw]);

if($result > 0){
    // 登入成功時設置 session
    $_SESSION['login'] = $acc;  // 儲存登入的帳號
    $_SESSION['admin'] = true;  // 設置管理員標記
}

echo $result;
?>