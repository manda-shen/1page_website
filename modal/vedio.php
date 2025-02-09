<h3 class="cent">廣告影片管理</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>影片網址</td>
            <td><input type="text" name="href" id="href"></td>
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