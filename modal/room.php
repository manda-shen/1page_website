<style>
    input[type="file"] {
    width: 100%;
}

input[type="text"],
input[type="number"],
textarea {
    width: 80%;
    height: 90%;
}
</style>

<h3 class="cent">房間資訊管理</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td width="25%">客房圖片</td>
        <td width="10%">房名/價格</td>
        <td width="10%">床位/人數</td>
        <td width="50%">客房介紹</td>
        </tr>
        <tr>
            <td rowspan="2"><input type="file" name="img" id="img"></td>
            <td>
                <input type="text" name="text" id="text" placeholder="房名"></td>
            <td>
                <input type="number" name="beds" placeholder="床位" value="<?=$row['beds']; ?>"></td>
            <td rowspan="2">
                <textarea name="info" id="info"></textarea>
            </td>
        </tr>
        <tr>
            <!-- <td></td> -->
            <td>
                <input type="text" name="price" id="text" placeholder="價格"></td>
            <td>
                <input type="number" name="people" id="people" placeholder="人數"></td>
            <!-- <td></td> -->
            <!-- <td></td> -->
            <!-- <td></td> -->
        </tr>
    </table>
    <div class="cent">
    <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" value="新增">
        <input type="reset" value="重置">
    </div>
</form>
<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
            onclick="cl('#cover')">X</a>