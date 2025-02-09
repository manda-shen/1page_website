<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-8">
        <p class="blockquote" style="text-align:center;">導覽圖管理</p>
        <hr>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                    <tr class="bg-white rounded">
                        <td class="bg-white rounded">導覽圖</td>
                        <td >顯示</td>
                        <td >刪除</td>
                        <td></td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php
                    $rows=$Map->all();
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td width="45%"><img src="./upload/<?=$row['img']; ?>" class="m-10" style="width:300px;height:100px"></td>
                        <td width="7%">
                            <input type="radio" class="form-check-input" name="sh" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
                        </td>
                        <td width="7%">
                            <input type="checkbox" class="form-check-input" name="del[]" value="<?=$row['id']; ?>"></td>
                        <td class="text-end">
                            <input type="button" class="btn btn-primary rounded-pill" onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id']; ?>&table=<?=$do;?>')" value="更新圖片">
                        </td>
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
                                value="新增導覽圖">
                        </td>
                        <td class="end text-end">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" class="btn btn-secondary rounded-pill" value="修改確定">
                            <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
        
    </div>
</div>