<?php include_once "api/db.php";?>
<style>

input[type="text"] {
    width: 90%;
    height: 90%;
}
</style>

<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-12">
        <p class="blockquote" style="text-align:center;">廣告影片管理</p>
        <hr>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="bg-white rounded">
                        <td width="22%">第一行文字</td>
                        <td width="22%">中間醒目文字</td>
                        <td width="22%">第三行文字</td>
                        <td width="22%">影片網址</td>
                        <td width="6%">顯示</td>
                        <td width="6%">刪除</td>
                        <td></td>
                    </tr>
                    <tr height="20px"></tr>
                    <?php
                    $rows=$Vedio->all();
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td><input type="text" name="text[]" value="<?=$row['text']; ?>"></td>
                        <td><input type="text" name="text2[]" value="<?=$row['text2']; ?>"></td>
                        <td><input type="text" name="text3[]" value="<?=$row['text3']; ?>"></td>
                        <td><input type="text" name="href[]" value="<?=$row['href']; ?>"></td>
                        <td>
                            <input type="radio" class="form-check-input" name="sh" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id']; ?>"></td>
                        <input type="hidden" name="id[]" value="<?=$row['id']; ?>">
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            
            <table style="margin-top:40px; width:100%;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button" class="btn btn-primary rounded-pill" 
                                onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                value="新增廣告影片">
                        </td>
                        <td class="cent text-end">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input class="btn btn-secondary rounded-pill" type="submit" value="修改確定">
                            <input class="btn btn-secondary rounded-pill" type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>