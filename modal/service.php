<h3 class="cent">新增動態文字廣告</h3>
<hr>
<form action="api/insert.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>icon圖示：</td>
            <td>服務項目：</td>
            <td>說明：</td>
        </tr>
        <tr>
            <td>
            <label for="icon_class">目前選擇：</label>
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
                    <option value="<?= $class; ?>">
                        <?= $label; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </td>
            <td>
                <input type="text" name="text" style="width:95%;">
            </td>
            <td>
                <textarea name="text2"></textarea>
            </td>
        </tr>
    </table>
    <div class="cent">
        <input type="hidden" name="table" value="<?=$_GET['table'];?>">
        <input type="submit" class="btn btn-secondary rounded-pill" value="新增">
        <input type="reset" class="btn btn-secondary rounded-pill" value="重置">
    </div>
</form>
<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
            onclick="cl('#cover')">X</a>