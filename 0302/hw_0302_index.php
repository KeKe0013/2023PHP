<html>

<head>
    <style>
        body {
            background-size: 1920px 940px;
            background-position: center 0;
        }
    </style>
    <meta charset="UTF-8">
    <title>系烤意願調查2.0</title>
</head>

<body background="image/BBQ.png" background-size="100% 100%">
    <h1>系烤意願調查問卷2.0</h1>
    <p>
    <h3>時間：3/22(三) 17:00<br>地點：宿舍烤肉區<br>費用：$100（有繳系費），$150（未繳系費）</h3>
    </p>
    <form method="GET" action="hw_0302_result.php">

        姓名：
        <input type="text" name="name" placeholder="柯宜萱" required><br><br>
        學號：
        <input type="text" name="number" placeholder="A1103353"><br><br>
        參與意願：
        <input type="radio" name="will" value="gogogo"> 去挖
        <input type="radio" name="will" value="nonono">這次先pass<br><br>
        有無繳系費：
        <input type="radio" name="money" value="yes"> 有
        <input type="radio" name="money" value="no"> 無<br><br>
        葷素：
        <input type="radio" name="eat" value="meat">葷
        <input type="radio" name="eat" value="vegetable">素<br><br>
        葷：<br>
        <input type="checkbox" name="no" value="no">無
        <input type="checkbox" name="beef" value="beef">不吃牛
        <input type="checkbox" name="pork" value="pork">不吃豬
        <input type="checkbox" name="chicken" value="chicken">不吃雞
        <input type="checkbox" name="seafood" value="seafood">不吃海鮮<br>
        素：<br>
        <select name="vegetables"><br>
            <option value="null">無
            <option value="all">全素
            <option value="seafood">海鮮素
            <option value="pot">鍋邊素
        </select><br><br>
        意見調查：<br>
        <textarea name="comment" cols="50" rows="10" placeholder="想吃的食材or想玩的遊戲"></textarea><br><br>
        <input type="submit">
        <input type="reset"><br>
    </form>
</body>

</html>
