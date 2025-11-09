<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page 1</title>
</head>
<body>
    <center>
    <?php
       $user=$_POST['txtuser'];
       $pass=$_POST['txtpass'];


        $ckname="username";
        $ckvalue=$user;
        $ckpass="password";
        $ckpassvalue=$pass;
        setcookie($ckname,$ckvalue);
        setcookie($ckpass,$ckpassvalue);


       echo "User Name: ".$user;
       echo "<br>";
       echo "Password: ".$pass;
    ?>
    <form method=post action="Page2.php">
    <input type="submit" name="submitbtn">
    </form>
    </center>
</body>
</html>