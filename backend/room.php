<?php include_once "api/db.php";?>
<style>
    input[type="file"] {
    width: 100%;
}

input[type="text"],
input[type="number"] {
    width: 60%;
    height: 90%;
}

textarea{
    width: 90%;
    margin:5px;
}
</style>

<div class="col-sm-12 col-xl-12">
    <!--正中央-->

    <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-10">
        <p class="blockquote" style="text-align:center;">客房圖文管理</p>
        <hr>
        <form method="post" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="25%">客房圖片</td>
                        <td width="18%">房名/價格</td>
                        <td width="10%">床位/人數</td>
                        <td width="30%">客房介紹</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                        <td></td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php 

                    $div=3;
                    $total=$Room->count();
                    $pages=ceil($total/$div);
                    $now=$_GET['p']??1;
                    $start=($now-1)*$div;

                    $rows=$Room->all(" limit $start,$div");
                    foreach($rows as $row){
                    ?>
                    <tr>
                        <td rowspan="2"><img src="./upload/<?=$row['img']; ?>" style="width:250px;height:150px"></td>
                        <td>
                            <input type="text" name="text[]" value="<?=$row['text']; ?>"></td>
                        <td>
                            <input type="number" name="beds[]" value="<?=$row['beds']; ?>"></td>
                        <td rowspan="2">
                            <textarea name="info[]"><?=$row['info']; ?></textarea>
                        </td>
                        <td rowspan="2">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="sh[]" role="switch"
                                id="flexSwitchCheckChecked" value="<?=$row['id']; ?>" <?=($row['sh']==1)?'checked':''; ?>>
                                <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                        </td>
                        <td rowspan="2">
                            <input type="checkbox" name="del[]" value="<?=$row['id']; ?>"></td>
                        <td rowspan="2">
                            <input type="button" class="btn btn-primary rounded-pill" 
                            onclick="op('#cover','#cvr','./modal/update_<?=$do;?>.php?id=<?=$row['id']; ?>&table=<?=$do;?>')" value="更新圖片">
                        </td>
                        <input type="hidden" name="id[]" value="<?=$row['id']; ?>">
                    </tr>
                    <tr>
                        <!-- <td></td> -->
                        <td>
                            <input type="text" name="price[]" value="<?=$row['price']; ?>">元</td>
                        <td>
                            <input type="number" name="people[]" value="<?=$row['people']; ?>">人</td>
                        <!-- <td></td> -->
                        <!-- <td></td> -->
                        <!-- <td></td> -->
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <hr>
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
                                value="新增房間圖片">
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