<div class="di"
    style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <!--正中央-->
    
    <div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
        <p class="t cent botli">動態文字廣告管理</p>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="70%">動態文字廣告</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <?php
                    $rows=$Ad->all();
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td>
                            <input type="text" name="text[]" value="<?=$row['text']; ?>" style="width:95%;"></td>
                        <td>
                            <input type="checkbox" name="sh[]" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
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
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button"
                                onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                value="新增動態文字廣告">
                        </td>
                        <td class="cent">
                            <input type="hidden" name="table" value="<?=$do;?>">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>

        </form>
    </div>
</div>