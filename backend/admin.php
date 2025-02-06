<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-10">
        <p class="blockquote" style="text-align:center;">管理者帳號管理</p>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="45%">帳號</td>
                        <td width="45%">密碼</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <?php
                    $rows=$Admin->all();
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td>
                            <input type="text" name="acc[]" value="<?=$row['acc']; ?>"></td>
                        <td>
                            <input type="password" name="pw[]" value="<?=$row['pw']; ?>">
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?=$row['id']; ?>">
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
                                value="新增管理者帳號">
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