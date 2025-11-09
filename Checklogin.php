<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checklogin</title>
</head>
<body>
    <center>
        <?php
    //    $user=$_POST['txtuser'];
    //    $pass=$_POST['txtpass'];
    //    echo $user;
    //    echo "<br>";
    //    echo $pass;
    //---------------------------------------------------------------
    //    if mule vivek kach takayla lagel
       $user=$_POST['txtuser'];
       $pass=$_POST['txtpass'];
    if(strcmp($user,"vivek")==0 and strcasecmp($pass,"indore")==0)
        echo "<font color=green size=5>Valid User</font>";
    else
        echo "<font color=red size=5>Invalid User</font>";
       ?>
    </center>
</body>
</html>