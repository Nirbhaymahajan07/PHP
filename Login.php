<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <!-- Get kela ki user_id ane password url madhe dist  -->
    <!-- USE Post kela ki user_id ane password url madhe dist Nahi -->
<form method=post action='Login.php'>
    User Name: <input type="text" placeholder="Enter User Name" name=txtuser><br><br>
    Password: <input type="password" placeholder="Enter Password" required="true" name=txtpass><br><br>
    <input type="submit" name="submitbtn">
</form>
    <?php
    if(isset($_POST['submitbtn']))
    {
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        if(strcmp($user,"abhay")==0 and strcasecmp($pass,"123")==0)
            // echo "<font color=green size=5>Valid User</font>";
            Header("Location:add.php");
        else
            echo "<font color=red size=5>Invalid User</font>";
    }
    ?>
</body>
</html>