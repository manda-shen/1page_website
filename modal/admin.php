<h3 class="cent">新增管理者帳號</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>帳號：</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td>密碼：</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>確認密碼：</td>
            <td><input type="password" name="pw2" id="pw2"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" class="btn btn-secondary rounded-pill" value="新增">
        <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
    </div>
</form>
<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
            onclick="cl('#cover')">X</a>