<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-10">
        <p class="blockquote" style="text-align:center;">輪播圖管理</p>
        <hr>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="25%">輪播圖片</td>
                        <td width="25%">文字標題</td>
                        <td width="25%">文字說明</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php 

                    $div=3;
                    $total=$Image->count();
                    $pages=ceil($total/$div);
                    $now=$_GET['p']??1;
                    $start=($now-1)*$div;

                    $rows=$Image->all(" limit $start,$div");
                    foreach($rows as $row){
                    ?>
                    <tr>
                    <td width="25%"><img src="./upload/<?=$row['img']; ?>" style="width:250px;height:150px"></td>
                        <td width="25%">
                            <input type="text" name="text[]" value="<?=$row['text']; ?>"></td>
                        <td width="25%">
                            <input type="text" name="text2[]" value="<?=$row['text2']; ?>"></td>
                        <td width="7%">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sh[]" role="switch"
                                    id="flexSwitchCheckChecked" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </td>
                        <td width="7%">
                            <input type="checkbox" name="del[]" value="<?=$row['id']; ?>"></td>
                        <td>
                            <input type="button" class="btn btn-primary rounded-pill" onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id']; ?>&table=<?=$do;?>')" value="更新圖片">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id']; ?>">
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="">

            </a>
            <div class="cent">
                <?php    

                if($now-1>0){
                    $prev=$now-1;
                    echo "<a href='?do=$do&p=$prev'>";
                    echo "<";
                    echo "</a>";
                }
                for($i=1;$i<=$pages;$i++){
                    echo "<a href='?do=$do&p=$i'>";
                    echo "$i";
                    echo "</a>";

                }
                if(($now+1)<=$pages){
                    $next=$now+1;
                    echo "<a href='?do=$do&p=$next'>";
                    echo ">";
                    echo "</a>";
                }

                ?>
            </div>
            <table style="margin-top:40px; width:100%;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button" class="btn btn-primary rounded-pill" 
                                onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                value="新增輪播圖">
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