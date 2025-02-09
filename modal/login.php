<h2 class='ct'>管理者登入</h2>
<table class="all">
    <tr>
        <td>帳號</td>
        <td><input type="text" name="acc" id="acc"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="password" name="pw" id="pw"></td>
    </tr>
</table>
<div class="ct"><button id="loginBtn">確認</button></div>
<a style="position:absolute; right:8px; top:8px; cursor:pointer; z-index:9999;"
            onclick="cl('#cover')">X</a>
            <script>
$(document).ready(function(){
    $("#loginBtn").on("click", function(){
        let acc = $("#acc").val();
        let pw = $("#pw").val();

        if(acc === "" || pw === ""){
            alert("請輸入帳號和密碼");
            return;
        }

        $.get("./api/chk_acc.php", { acc: acc, table: "admin" })
         .done(function(res){
            if (parseInt(res) > 0) {
                $.get("./api/chk_pw.php", { acc: acc, pw: pw, table: "admin" })
                 .done(function(res){
                    if(parseInt(res) > 0){
                        // 登入成功，直接轉向 admin.php
                        location.href = 'admin.php';
                    } else {
                        alert("帳號或密碼錯誤");
                    }
                });
            } else {
                alert("此帳號不存在");
            }
        });
    });
});
</script>