<!DOCTYPE html>
<html>
<head>
    <title>Array2 PHP</title>
</head>
<body>
    <center>
    <?php
        $arr1=array("mon","wed","thu","sat",);
        $arr2=array("mon","tue","thu","fri",);
        $arr3=array("mon","wed","thu","sat",);
        $newarray=array_intersect($arr1,$arr2); //Gives Commom Values
        print_r($newarray);
        echo"<br>";
    //---------------------------------------------
        $arr1=array("mon","wed","fri","thu","tue");
        $arr2=array("mon","wed","thu","fri","sat");
        $arr3=array("mon","wed","fri","thu");
        $newarray=array_diff($arr1,$arr2,$arr3); //Gives Absent Values From arr1
        print_r($newarray);
        echo"<br>";
    //---------------------------------------------
        //$newarray=array_unique // Gives Uniquen Values From array
        //$newarray=array_map // Gives Multiple Values Multi,Add,Even,Odd Etc:-
    //---------------------------------------------
        $newarray=range(1,15,2);
        for($i=0;$i<count($newarray);$i++)
                {
                    echo $newarray[$i]; //Sequence Ne Print Krt
                    echo"<br>";
                }
    ?>
    </center>
</body>
</html>