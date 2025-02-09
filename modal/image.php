<h3 class="cent">輪播圖管理</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>輪播圖片</td>
            <td>文字標題</td>
            <td>文字說明</td>
        </tr>
        <tr>
            <td><input type="file" name="img" id="img"></td>
            <td><input type="text" name="text" id="text"></td>
            <td><input type="text" name="text2" id="text2"></td>
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