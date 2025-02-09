<?php include_once "api/db.php";?>

<form>
    <input type="text" placeholder="帳號">
    <input type="password" placeholder="密碼">
    <button type="submit">登入</button>
</form>

<div id="main">
        <div id="top">
            <div style="padding:10px;display:inline-block;vertical-align:top;">
                <?php 
                if(empty($_SESSION['Mem'])){
                ?>
                <a href="?do=login">會員登入</a> |
                <?php
                }else{
                    ?>
                <a href="./api/logout.php?table=Mem">登出</a> |
                <?php 
                    }
                ?>
                <?php 
                if(empty($_SESSION['Admin'])){
                ?>
                <a href="?do=admin">管理登入</a> |
                <?php
                }else{
                    ?>
                <a href="back.php">返回管理</a> |
                <?php 
                    }
                ?>
            </div>

           
    </div>
</div>


<a style="position:absolute; right:8px; top:8px; cursor:pointer; z-index:9999;"
onclick="cl('#cover')">X</a>
