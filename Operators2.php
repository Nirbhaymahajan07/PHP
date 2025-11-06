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
        echo"Bye"."<br>"."<br>"."<br>";
    // ----------------------------------------------------------
    /*
    .,.= String Operator
    */
    $a=500;
    echo"Value is:-"."$a"."<br>";
    $a=100;
    $str="Value is: ";
    $str.=$a;
    echo $str."<br>"."<br>"."<br>";
    // ----------------------------------------------------------
    /*
    ?: Conditional Assignment Operator
    */
    $a=500;
    $b=2000;
    $str=$a>$b?"First Is Greater!":"Second Is Greater!!";
    echo $str;
    ?>
</body>
</html>