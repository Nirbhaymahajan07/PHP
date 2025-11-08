<!DOCTYPE html>
<html>
<head>
    <title>Strings</title>
</head>
<body>
 <center>
        <?php
        $str1="HANUMN"; //strcasecmp Not Case Sensitive
        $str2="HANUMAN";
        if (strcmp($str1,$str2)==0) //Case Sensitive Ahe
            echo"Equal Strings";
        else
            echo"Not Equal Strings";
        echo"<br>";
        //-------------------------------------------------
        $mystr="I Love UHH";
        $n=strlen($mystr);
        echo"Length Of string is: ".$n;
        echo"<br>";
        //-------------------------------------------------
        $mystr="I Love UHH";
        $n=str_word_count($mystr);
        echo"Word Count of string is: ".$n;
        echo"<br>";
        //-------------------------------------------------
        $mystr="ILoveUHH";
        $new=chunk_split($mystr,2,"*");
        echo"Chunk Split Of string is: ".$new;
        echo"<br>";
        //-------------------------------------------------
        $mystr="ILoveUHH";
        $arr=str_split($mystr,4);
        print_r($arr);
        echo"<br>";
        //-------------------------------------------------
        $mystr="I Love uHH";
        $new=strtoupper($mystr); //lower Same
        echo"Uppercase Of string is: ".$new;
        echo"<br>";
        //-------------------------------------------------
        $mystr="ILoveUHH CRICKET,DAD,MOM,DAD,BROTHER";
        $new=substr_count($mystr,"DAD"); //Case Sensitive
        echo"Count Of Specific Word From string: ".$new;
        echo"<br>";
        //-------------------------------------------------
        $mystr="i love cricket, i love kabbadi";
        $new=ucwords($mystr);//lcfirst ucfirst etc:-
        echo"Capitalize First Word Of string: ".$new;
        echo"<br>";
        
?>  
 </center>
</body>
</html>