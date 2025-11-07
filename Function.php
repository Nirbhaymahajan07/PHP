<!DOCTYPE html>
<html lang>
<head>
    <title>Function PHP</title>
</head>
<body>
    <?php
    function swap(&$a,&$b)//& Mola Swap Zala krn "Copy by reference"
    {
        $c=$a;
        $a=$b;
        $b=$c;
    }
    $a=50;
    $b=10;
    echo"Before Swaping: ".$a."  "."$b"."<br>";
    swap($a,$b);
    echo"After Swaping: ".$a."  "."$b"."<br>"."<br>";



    function sum1(...$a)//Parameter Varags fun.
    {
        $sum=0;
        foreach($a as $m)
        {
            $sum=$sum+$m;
        }
        echo"Sum1 is:".$sum."<br>"."<br>";
    }
    //Main
    sum1(20,50);
    sum1(50,50,1000);
    sum1(20,150);
    sum1(20,500);



    function sum($a,$b)//Parameterised fun.
    {
    $c=$a+$b;
    echo "Sum is: ".$c."<br>";
    }
    //Main
    sum(20,50);
    sum(50,50);
    sum(20,150);
    sum(20,500);



    function display() //fun. defined
    {
        echo "<br>This is function code";
    }
    //Main
    display();//calling Many Times
    display();//calling
    echo"<br>"."End";//Only Text 
    ?>
</body>
</html>