<meta charset="utf8">
<?php
    $ID=$_POST["ID"];
    $PWD=$_POST["PWD"];

    $id="ke";
    $pwd="123";

    if(($ID==$id)&&($PWD==$pwd)){
        echo "登入成功"."<br>";
        setcookie("myID",$ID);
    }else{
        echo "登入失敗" . "<br>";
    }

    echo "檔案名稱: " . $_FILES["myfile"]["name"] . "<br/>";
    echo "暫存檔名: " . $_FILES["myfile"]["tmp_name"] . "<br/>";
    echo "檔案尺寸: " . $_FILES["myfile"]["size"] . "<br/>";
    echo "檔案種類: " . $_FILES["myfile"]["type"] . "<hr/>";

    copy($_FILES["myfile"]["tmp_name"],"pic\myPic.webp");
    //unlink($_FILES["myfile"]["tmp_name"]);
?>
