<meta charset="utf8">

<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $pwd = $_GET["pwd"];
    $gender = $_GET["gender"];
    $city = $_GET["city"];

    echo "ID：" . $id . "<br>";
    echo "pwd：" . $pwd . "<br>";

    if ($gender == "male") {
        echo "性別：男<br>";
    } else {
        echo "性別：女<br>";
    }

    if (isset($_GET["cook"])) {
        $cook = $_GET["cook"];
        echo "興趣：做甜點";
    }
    if (isset($_GET["ball"])) {
        $cook = $_GET["ball"];
        echo "興趣：打球";
    }
    if (isset($_GET["read"])) {
        $cook = $_GET["read"];
        echo "興趣：看書";
    }
    echo "<br>";
    echo "居住地：";
    foreach ($city as $value) {
        echo $value . " ";
    }
    echo "<br>";
    $comment = $_GET["comment"];
    echo "意見：" . $comment . "<br>";
} else {
    echo "資料輸入錯誤";
}
?>