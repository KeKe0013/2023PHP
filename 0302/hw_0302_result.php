<meta charset="utf8">
<title>系考意願調查2.0回覆</title>
<html>

<head>
    <style>
        body {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center 0;
        }
    </style>
</head>

<body background="image/BBQ2.jpg" background-size=100% 100%></body>
<?php
print ("下列為您的回覆") . "<br>" . "<br>";
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $number = $_GET["number"];
    $will = $_GET["will"];
    $money = $_GET["money"];
    $eat = $_GET["eat"];

    echo "姓名:" . $name . "<br>";
    echo "學號：" . $number . "<br>";

    if ($will == "gogogo") {
        echo "參與意願：去啊<br>";
    } else {
        echo "參與意願：這次先pass<br>";
    }

    if ($money == "yes") {
        echo "有無繳系費：有<br>";
        print "要繳交的費用：$100" . "<br>";
    } else {
        echo "有無繳系費：無<br>";
        print "要繳交的費用：$150" . "<br>";
    }

    if ($eat == "meat") {
        echo "葷素：葷<br>";
    } else {
        echo "葷素：素<br>";
    }

    print "飲食習慣(葷)：";
    if (isset($_GET["no"])) {
        $no = $_GET["no"];
        echo "無&nbsp&nbsp";
    }
    if (isset($_GET["beef"])) {
        $beef = $_GET["beef"];
        echo "不吃牛&nbsp&nbsp";
    }
    if (isset($_GET["pork"])) {
        $pork = $_GET["pork"];
        echo "不吃豬&nbsp&nbsp";
    }
    if (isset($_GET["chicken"])) {
        $chicken = $_GET["chicken"];
        echo "不吃雞&nbsp&nbsp";
    }
    if (isset($_GET["seafood"])) {
        print "不吃海鮮&nbsp&nbsp";
    }

    echo "<br>";
    echo "飲食習慣(素)：";
    $vegetables = $_GET["vegetables"];

    switch ($vegetables) {
        case "null":
            print "無<br>";
            break;
        case "all":
            print "全素<br>";
            break;
        case "seafood":
            print "海鮮素<br>";
            break;
        case "pot":
            print "鍋邊素<br>";
            break;
    }


    $comment = $_GET["comment"];
    echo "想吃的食材or想玩的遊戲：";
    echo nl2br($comment);
} else {
    echo "資料輸入錯誤";
}
?>
