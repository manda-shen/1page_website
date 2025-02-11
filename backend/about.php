<style>
input[type="file"] {
    width: 100%;
}

input[type="text"],
input[type="number"] {
    width: 90%;
    height: 90%;
}

textarea {
    width: 95%;
    height: 250px;
    margin: 5px;
}
</style>
<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-12">
        <p class="blockquote" style="text-align:center;">關於我們管理</p>
        <hr>
        <form method="post" action="./api/edit.php" enctype="multipart/form-data">
            <table width="90%">
                <tbody>
                    <?php 
                $row=$About->find(1);  // 直接獲取第一筆資料
                ?>
                    <tr>
                        <td width="15%">輔助標題<input type="text" name="title[]" value="<?=$row['title'];?>"
                                placeholder="輔助標題">
                        </td>
                        <td width="15%">淺色標題<input type="text" name="title2[]" value="<?=$row['title2'];?>"
                                placeholder="淺色標題"></td>
                        <td width="15%">大標題<input type="text" name="title3[]" value="<?=$row['title3'];?>"
                                placeholder="大標題">
                        </td>
                        <td rowspan="2" style="padding-left:30px; text-align:center;">
                            <div id="preview1" style="margin:10px">
                                <?php if(!empty($row['img'])): ?>
                                <img src="./upload/<?=$row['img'];?>" style="width:80%">
                                <?php endif; ?>
                            </div>
                            <div>
                                <input type="button" class="btn btn-primary rounded-pill"
                                    onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&img=1')"
                                    value="上傳/更換圖片">
                            </div>
                        </td>
                        <td rowspan="2" style="text-align:center;">
                            <div id="preview2" style="margin:10px">
                                <?php if(!empty($row['img2'])): ?>
                                <img src="./upload/<?=$row['img2'];?>" style="width:80%">
                                <?php endif; ?>
                            </div>
                            <div>
                                <input type="button" class="btn btn-primary rounded-pill"
                                    onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&img=2')"
                                    value="上傳/更換圖片">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" colspan="3">關於我內容<textarea name="text"><?=$row['text']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td rowspan="2" style="padding-left:30px; text-align:center;">
                            <div id="preview3" style="margin:10px">
                                <?php if(!empty($row['img3'])): ?>
                                <img src="./upload/<?=$row['img3'];?>" style="width:80%">
                                <?php endif; ?>
                            </div>
                            <div>
                                <input type="button" class="btn btn-primary rounded-pill"
                                    onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&img=3')"
                                    value="上傳/更換圖片">
                            </div>
                        </td>
                        <td rowspan="2" style="text-align:center;">
                            <div id="preview4" style="margin:10px">
                                <?php if(!empty($row['img4'])): ?>
                                <img src="./upload/<?=$row['img4'];?>" style="width:80%">
                                <?php endif; ?>
                            </div>
                            <div>
                                <input type="button" class="btn btn-primary rounded-pill"
                                    onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id'];?>&table=<?=$do;?>&img=4')"
                                    value="上傳/更換圖片">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>rooms<input type="number" name="nb[]" value="<?=$row['nb']; ?>"></td>
                        <td>staffs<input type="number" name="nb2[]" value="<?=$row['nb2']; ?>"></td>
                        <td>clients<input type="number" name="nb3[]" value="<?=$row['nb3']; ?>"></td>
                    </tr>
                </tbody>
            </table>
            <table style="margin-top:40px; width:200px;">
                <tbody>
                    <tr>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="hidden" name="id" value="<?=$row['id'];?>">
                            <input type="submit" class="btn btn-secondary rounded-pill" value="修改確定">
                            <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<script>
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId);
    preview.innerHTML = ''; // 清空預覽區域

    if (input.files && input.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '100px';
            img.style.height = '100px';
            preview.appendChild(img);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
</script>