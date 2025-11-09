<!DOCTYPE html>
<html>
<head>
    <title>Array1 PHP</title>
</head>
<body>
    <center>
        <?php
        $arr=array("Pune","Delhi","Mumbai");
        print_r($arr); //Array Print Krt
        echo"<br>";
    //------------------------------------------------------
        $arr=array("Pune","Indore","Mumbai");
        for($i=0;$i<count($arr);$i++)
            {
                echo $arr[$i]; //Sequence Ne Print Krt
                echo"<br>";
            }
    //------------------------------------------------------
        $arr=array("Manipur","Jaipur","Patna");
        $i=0;
        while($i<count($arr))
            {
                echo $arr[$i]; //Sequence Ne Print Krt
                echo"<br>";
                $i++;
            }
    //------------------------------------------------------
            //Array Slice
    //------------------------------------------------------
        $arr1=["a"=>"Mumbai","b"=>"Delhi","c"=>"Pune"]; //Associative Array
        print_r($arr1);
        echo"<br>";
        // print_r($arr);
        // echo"<br>";
    ?>
    </center>
</body>
</html>