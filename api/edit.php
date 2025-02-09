<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);



if(isset($_POST['id'])){
    foreach($_POST['id'] as $idx => $id){
        if(isset($_POST['del']) && in_array($id,$_POST['del'])){
            $$db->del($id);
        }else{
            $row=$$db->find($id);
            switch($table){
                case "logo":
                case "map":
                    $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;

                    break;
                case "admin":
                    $row['acc']=$_POST['acc'][$idx];
                    $row['pw']=$_POST['pw'][$idx];
                    break;

                case "list":
                    $row['text']=$_POST['text'][$idx];
                    $row['href']=$_POST['href'][$idx];
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;

                case "image":
                    $row['text']=$_POST['text'][$idx];
                    $row['text2']=$_POST['text2'][$idx];
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;

                case "room":
                    $row['text']=$_POST['text'][$idx];
                    $row['price']=$_POST['price'][$idx];
                    $row['beds']=$_POST['beds'][$idx];
                    $row['people']=$_POST['people'][$idx];
                    $row['info']=$_POST['info'][$idx];
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    var_dump($_POST['info']);
                    break;

                case "vedio":
                    $row['text']=$_POST['text'][$idx];
                    $row['text2']=$_POST['text2'][$idx];
                    $row['text3']=$_POST['text3'][$idx];
                    $row['href']=$_POST['href'][$idx];
                    $row['sh']=(isset($_POST['sh']) && $_POST['sh']==$id)?1:0;
                    break;

                case "service":
                    // 儲存選擇的 Font Awesome 圖示類別
                    if (!empty($_POST['icon_class'][$idx])) {
                        $row['icon_class'] = $_POST['icon_class'][$idx];  
                    } else {
                        // 如果 `icon_class` 為空，則記錄錯誤以便偵錯
                        error_log("icon_class is missing for ID: " . $id);
                    }
                    $row['text']=$_POST['text'][$idx];
                    $row['text2']=$_POST['text2'][$idx];
                    $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                    break;

                default:
                $row['sh']=(isset($_POST['sh']) && in_array($id,$_POST['sh']))?1:0;
                if(isset($_POST['text'])){
                    $row['text']=$_POST['text'][$idx];
                }
            }
            $$db->save($row);
        }
    }
}

to("../admin.php?do=$table");
?>