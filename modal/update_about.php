<h3 class="cent">上傳/更換圖片</h3>
<hr>
<form action="api/update.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>圖片</td>
            <td style="display:flex; flex-direction:row;">
                <div id="preview" style="width:250px; margin-right:15px;"></div>
                <?php 
                $imgNo = $_GET['img'] ?? '1';
                $imgField = 'img' . ($imgNo == '1' ? '' : $imgNo);
                ?>
                <input type="file" name="<?=$imgField;?>" onchange="previewImage(this, 'preview')">

            </td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" class="btn btn-secondary rounded-pill" value="更新">
        <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
    </div>
</form>
<a style="position:absolute; right:8px; top:8px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>