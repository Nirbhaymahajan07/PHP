<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators</title>
</head>
<body>
    <?php
    /*
    &&,||,! logical Operator
    */
    $a=50;
    $b=20;
     if($a>55 && $b>10)//Both True Needed
        echo"Hello"."<br>";
    else
        echo"Bye"."<br>";
    $a=50;
    $b=20;
     if($a>55 || $b>10) //1 True Is  Also Ok 
        echo"Hello"."<br>";
    else
        echo"Bye"."<br>";
    $a=50;
    $b=20;
     if(!($a>55 || $b>10)) //True Value False Zali
        echo"Hello"."<br>";
    else
        echo"Bye"."<br>";
        
    ?>
</body>
</html>