<html>

<head>

</head>

<body>
    <form method="GET" action="ex_0302_result.php">
        id：<input type="text" name="id"><br>
        pwd：<input type="password" name="pwd"><br>

        性別：<input type="radio" name="gender" value="male">男
        <input type="radio" name="gender" value="female">女<br>
        興趣：<input type="checkbox" name="cook">做甜點
        <input type="checkbox" name="ball">打球
        <input type="checkbox" name="read">看書<br>
        居住地：<br>
        <select name="city[]" multiple><br>
            <option value="Taipei">Taipei
            <option value="Taichung">Taichung
            <option value="Kaohsiung">Kaohsiung
            <option value="Hualien">Hualien
            <option value="Penghu">Penghu
        </select><br>


        意見：<br>
        <textarea name="comment" cols="30" rows="10"></textarea>
        <input type="submit">
        <input type="reset">
    </form>
</body>


</html>
