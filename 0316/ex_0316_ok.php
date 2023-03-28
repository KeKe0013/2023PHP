<?php
session_start();

if ($_SESSION["login"] == "Yes") {
    
} else {
    header("Location:ex_0316_error.php");
}
?>

<html>

<head>
    <meta charset="utf8">
</head>

<body>
    機密資訊<br>
    <a href="ex_0316_logout.php">Logout</a>
</body>

</html>
