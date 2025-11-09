<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cookie Page 2</title>
</head>
<body>
    <center>
    <?php
    $user=$_COOKIE['username'];
    $pass=$_COOKIE['password'];
    echo "User Name In Second Page: ".$user;
    echo "<br>";
    echo "Password In Second Page: ".$pass;
    ?>
    </center>
</body>
</html>