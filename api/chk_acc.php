<?php
include_once "db.php";

$acc = $_GET['acc'];

// 直接使用 DB 類的 count 方法
$result = $Admin->count(['acc'=>$acc]);

// 添加除錯信息
error_log("檢查帳號: acc=$acc, result=$result");

// 輸出結果
echo $result;
?>