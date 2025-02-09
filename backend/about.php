<?php include_once "api/db.php";?>
<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-12">
    <p class="blockquote" style="text-align:center;">最新消息資料管理</p>
    <hr>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="80%">最新消息資料內容</td>
                        <td width="10%">顯示</td>
                        <td width="10%">刪除</td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php 

                    $div=2;
                    $total=$About->count();
                    $pages=ceil($total/$div);
                    $now=$_GET['p']??1;
                    $start=($now-1)*$div;

                    $rows=$About->all(" limit $start,$div");
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td>
                            <textarea name="text[]" style="width:95%;height:100px"><?=$row['text']; ?></textarea>
                        </td>
                        <td>
                            <input type="radio" name="sh[]" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
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
                                value="新增最新消息資料">
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