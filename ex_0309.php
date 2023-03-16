<html>

<head>
    <title>ex_0309</title>
    <meta charset="utf8">
</head>

<body>

    <?php
    include "ex_0309_header.txt";
    require "ex_0309_img.txt";
    ?>
    <form method="POST" action="">
        m：<input type="text" name="m"><br>
        n：<input type="text" name="n"><br>
        <input type="submit">
        <input type="reset">
    </form>
    <hr>
    <?php
    $m = $_POST["m"];
    $n = $_POST["n"];
    echo "<table border='1'>";
    for ($i = 1; $i <= $m; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $n; $j++) {
            echo "<td>";
            echo $i . "x" . $j . "=" . $i * $j . "  ";
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    $grade = array("math" => 96, "chinese" => 88);
    echo $grade["chinese"] . "<br>";

    $grade2 = array(100, 50, 70, 60);
    echo $grade2[0] . "<br>";
    print_r($grade2);
    sort($grade2);
    echo "<br>";
    print_r($grade2);
    echo "<br>";

    foreach ($grade2 as $element) {
        echo $element . "<br>";
    }
    print_r($grade2);
    echo "<br>";
    print_r($grade);
    echo "<br>";

    $test = "yes,no,jkf,iii";
    $arr1 = explode(",", $test);
    print_r($arr1);
    echo "<br>";

    $newstring = implode("#", $grade2);
    echo $newstring;

    ?>

</body>

</html>