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
        <p class="blockquote" style="text-align:center;">服務項目</p>
        <hr>
        <form method="post" target="back" action="./api/edit.php">
            <table width="100%">
                <tbody>
                <tr class="bg-white rounded">
                        <td width="18%">icon圖示</td>
                        <td width="23%">服務項目</td>
                        <td width="40%">說明</td>
                        <td width="7%">顯示</td>
                        <td width="7%">刪除</td>
                    </tr>
                    <tr height="10px"></tr>
                    <?php
                    $rows=$Service->all();
                    foreach($rows as $row){
                    ?>
                    <tr>
                    <td>
                        <!-- 顯示當前選擇的 Font Awesome 圖示 -->
                        <label for="icon_class">目前選擇：</label>                    
                        <!-- 下拉選單：存入 class，顯示 Emoji + 文字 -->
                        <select name="icon_class[]">
                        <?php
                        $icons = [
                                "fa fa-hotel" => "🏨 旅館",
                            "fa fa-home" => "🏠 房屋",
                            "fa fa-campground" => "🏕️ 露營地",
                            "fa fa-concierge-bell" => "🛎️ 鈴鐺",
                            "fa fa-bed" => "🛏️ 床",
                            "fa fa-parking" => "🚗 停車場",
                            "fa fa-suitcase-rolling" => "🛄 行李",
                            "fa fa-car" => "🚗 車子",
                            "fa fa-taxi" => "🚖 計程車",
                            "fa fa-shopping-cart" => "🛒 購物車",
                            "fa fa-seedling" => "🌱 幼苗",
                            "fa fa-tree" => "🌳 樹木",
                            "fa fa-flower" => "🌷 花",
                            "fa fa-sun" => "🌻 向日葵",
                            "fa fa-house-user" => "🏡 庭院",
                            "fa fa-tractor" => "🏡 農場、園藝機械",
                            "fa fa-wine-glass" => "🍷 酒杯",
                            "fa fa-utensils" => "🍽️ 刀叉",
                            "fa fa-hotpot" => "🍲 火鍋",
                            "fa fa-coffee" => "☕ 咖啡",
                            "fa fa-beer" => "🍺 啤酒",
                            "fa fa-user" => "👤 用戶"
                        ];
                        ?>
                        <?php foreach ($icons as $class => $label): ?>
                            <option value="<?= $class; ?>" <?= ($row['icon_class'] == $class) ? 'selected' : ''; ?>>
                                <?= $label; ?>
                            </option>
                        <?php endforeach; ?>
                        </select>
                    </td>

                        <td>
                            <input type="text" name="text[]" value="<?=$row['text']; ?>" style="width:95%;">
                        </td>
                        <td>
                            <textarea name="text2[]"><?=$row['text2']; ?></textarea>
                        </td>
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
                        <input type="hidden" name="id[]" value="<?=$row['id']; ?>">
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table style="margin-top:40px; width:95%;">
                <tbody>
                    <tr>
                        <td width="200px">
                            <input type="button" class="btn btn-primary rounded-pill" 
                                onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')"
                                value="新增動態文字廣告">
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