<?php
session_start();

if (($_SESSION["p_login"] == "Yes") || ($_SESSION["t_login"] == "Yes") || $_SESSION["s_login"] == "Yes") {
} else {
    header("Location:hw_0316_error.php");
}
?>

<html>

<head>
    <meta charset="utf8">
</head>

<body>
    <b>機密資訊</b><br><br>
    <?php
    if ($_SESSION["p_login"] == "Yes") {
        echo "校長" . "<br>" . "id：president" . "<br>" . "pwd：123" . "<br>" . "<br>";
        echo "老師" . "<br>" . "id：teacher" . "<br>" . "pwd：456" . "<br>" . "<br>";
    } elseif ($_SESSION["t_login"] == "Yes") {
        echo "老師" . "<br>" . "id：teacher" . "<br>" . "pwd：456" . "<br>" . "<br>";
        echo "學生" . "<br>" . "id：student" . "<br>" . "pwd：789" . "<br>" . "<br>";
    } elseif ($_SESSION["s_login"] == "Yes") {
        echo "學生" . "<br>" . "id：student" . "<br>" . "pwd：789" . "<br>" . "<br>";
    }
    ?>
    <a href="hw_0316_logout.php">登出</a>
</body>

</html>
