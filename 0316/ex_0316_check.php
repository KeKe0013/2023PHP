<?php
    session_start();

    $myID="keke";
    $myPWD="123";

    $id=$_POST["id"];
    $pwd=$_POST["pwd"];

    if(($myID==$id)&&($myPWD == $pwd)){
        $_SESSION["login"]="Yes";
        header("Location:ex_0316_ok.php");
    }else{
        $_SESSION["login"]="No";
        header("Location:ex_0316_fail.php");
    }
?>
