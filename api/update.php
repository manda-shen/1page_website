<?php
include_once "db.php";

$table=$_POST['table'];
$db=ucfirst($table);

if(!isset($_POST['id'])){
    exit();
}

if(isset($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['name']);

    $row=$$db->find($_POST['id']);
    $row['img']=$_FILES['img']['name'];
    $$db->save($row);
}

if(isset($_FILES['img2']['tmp_name'])){
    move_uploaded_file($_FILES['img2']['tmp_name'],"../upload/".$_FILES['img2']['name']);  // 修正：img -> img2

    $row=$$db->find($_POST['id']);
    $row['img2']=$_FILES['img2']['name'];
    $$db->save($row);
}

if(isset($_FILES['img3']['tmp_name'])){
    move_uploaded_file($_FILES['img3']['tmp_name'],"../upload/".$_FILES['img3']['name']);

    $row=$$db->find($_POST['id']);
    $row['img3']=$_FILES['img3']['name'];
    $$db->save($row);
}

if(isset($_FILES['img4']['tmp_name'])){
    move_uploaded_file($_FILES['img4']['tmp_name'],"../upload/".$_FILES['img4']['name']);

    $row=$$db->find($_POST['id']);
    $row['img4']=$_FILES['img4']['name'];
    $$db->save($row);
}


to("../admin.php?do=$table");

?>