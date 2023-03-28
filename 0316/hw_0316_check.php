<?php
session_start();

$p_ID = "president";
$p_PWD = "123";
$t_ID = "teacher";
$t_PWD = "456";
$s_ID = "student";
$s_PWD = "789";

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if (($p_ID == $id) && ($p_PWD == $pwd)) {
    $_SESSION["p_login"] = "Yes";
    $_SESSION["t_login"] = "No";
    $_SESSION["s_login"] = "No";
    header("Location:hw_0316_ok.php");
} elseif (($t_ID == $id) && ($t_PWD == $pwd)) {
    $_SESSION["p_login"] = "No";
    $_SESSION["t_login"] = "Yes";
    $_SESSION["s_login"] = "No";
    header("Location:hw_0316_ok.php");
} elseif (($s_ID == $id) && ($s_PWD == $pwd)) {
    $_SESSION["p_login"] = "No";
    $_SESSION["t_login"] = "No";
    $_SESSION["s_login"] = "Yes";
    header("Location:hw_0316_ok.php");
} else {
    $_SESSION["p_login"] = "No";
    $_SESSION["t_login"] = "No";
    $_SESSION["s_login"] = "No";
    header("Location:hw_0316_fail.php");
}
