<?php ob_start(); ?> //啟用輸出緩存區
<?php
session_start();

if ($_SESSION["login"] == "No") {
} else {
    header("Location:ex_0316_error.php"); //轉址
}
?>

<html>

<head>
    <meta charset="utf8">
</head>

<body>
    登入失敗!<br>
    網頁將在三秒後跳轉至登入頁面或<br>
    <a href="ex_0316_index.php">點選這裡</a>
    <?php
    header("Refresh:3;url=ex_0316_index.php")
    ?>
</body>

</html>
<?php ob_flush(); ?> //送出輸出緩存區內容到瀏覽器
