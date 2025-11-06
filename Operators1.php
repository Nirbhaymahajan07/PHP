<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators</title>
</head>
<body>
    <?php
    // +, -, /, %, *, **:- Arithmatic operator
    print(10+10)."<br>";
    print(10-10)."<br>";
    print(10/2)."<br>";
    print(10%2)."<br>";
    print(10*10)."<br>";
    print(10**2)."<br><br><br>";
    // ----------------------------------------------------------
    // >, <, >=,<=, ==, !=, ===, !==, <>, <=> Realational Operator
    // $a=50;
    // $b=30;
    // echo($a>$b)."<br>";

    // $a=50; //int
    // $b='50'; //string
    // echo($a==$b)."<br>"; //Ans. True krn te fkt values bgt.

    // $a=50; //int
    // $b='50'; //string
    // echo($a===$b); //Ans. False krn te fkt values bgt+data-types pn.

    $a=5; //int
    $b=50; //int
    echo($a<=>$b)."<br><br><br>"; //+1, 0, -1.
    // ----------------------------------------------------------
    // ++ inc, --dec. Increment/Decrement Operator.
    // $a=50;
    // ++$a;//Increment by 1 Pre-Increment
    // $a++;//Both are Correct Post-Increment
    // echo($a)."<br>";

    // $a=50;
    // echo $a."<br>";
    // $b=++$a; //Pre
    // echo $b."<br>"; 

    $a=50; 
    $b=$a++; //Post
    echo $a."<br>";
    echo $b."<br>";
    ?>
</body>
</html> 