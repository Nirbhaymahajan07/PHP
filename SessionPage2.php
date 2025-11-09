<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Page 2</title>
</head>
<body>
    <center>
    <?php
    session_start();

    $user=$_SESSION['username'];
    $pass=$_SESSION['userpass'];
    echo "User Name In Next Page: ".$user;
    echo "<br>";
    echo "User Password In Next Page: ".$pass;
    
    session_unset();
    session_destroy();
    ?>
    </center>
</body>
</html>