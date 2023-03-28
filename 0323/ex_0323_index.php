<meta charset="utf8">



<!-- <?php
    echo time();
    echo "<br>";
    date_default_timezone_set('Asia/Taipei');
    echo date("Y-m-d H:i:s",time()),"<br>";
    echo mktime(0,0,0,4,1,2023),"<br>";
    echo $nM=strtotime("next month"),"<br   >";
    echo date("Y-m-d H:i:s",$nM);
?> -->

<form action="ex_0323_check.php" method="post" enctype="multipart/form-data">
    <?php
    if(isset($_COOKIE["myID"])){
        echo $_COOKIE["myID"]."早安午安晚安！<br>";
        echo "<input type='text' name='ID' value='".$_COOKIE["myID"]."'><br>";
    }
    ?>
    <input type="password" name="PWD"><br>
    <input type="file" name="myfile" accept=""><br>
    <input type="submit">
</form>
