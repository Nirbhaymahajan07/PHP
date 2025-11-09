<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Page 1</title>
</head>
<body>
    <center>
    <?php
       $user=$_POST['txtuser'];
       $pass=$_POST['txtpass'];

       session_start();
       $_SESSION['username']=$user;
       $_SESSION['userpass']=$pass;

       echo "User Name: ".$user;
       echo "<br>";
       echo "Password: ".$pass;
    ?>
    <form method=post action="SessionPage2.php">
    <input type="submit" name="submitbtn">
    </form>
    </center>
</body>
</html>