<h3 class="cent">新增導覽圖</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>導覽圖</td>
            <td><input type="file" name="img" id="img"></td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" class="btn btn-secondary rounded-pill" value="新增">
        <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
    </div>
</form>
<a style="position:absolute; right:8px; top:8px; cursor:pointer; z-index:9999;"
            onclick="cl('#cover')">X</a>