<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-8">
    <p class="blockquote" style="text-align:center;">選單管理</p>
    <hr>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="30%">主選單名稱</td>
                        <td width="30%">選單連結網址</td>
                        <td width="10%">次選單數</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                        <td></td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php
                    $rows=$List->all(['main_id'=>0]);
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td>
                            <input type="text" name="text[]" value="<?=$row['text']; ?>"></td>
                        <td>
                            <input type="text" name="href[]" value="<?=$row['href']; ?>"></td>
                        <td><?=$List->count(['main_id'=>$row['id']]);?></td>
                        <td>
                        <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sh[]" role="switch"
                                    id="flexSwitchCheckChecked" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id']; ?>">
                        </td>
                        <td>
                            <input type="button" class="btn btn-primary rounded-pill" value="編輯次選單"
                            onclick="op('#cover','#cvr','./modal/submenu.php?id=<?=$row['id'];?>')">
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
                                value="新增主選單">
                        </td>
                        <td class="cent text-end">
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