<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Emp</title>
</head>
<body>
    <center>
    <form method=post action="InsertEmp.php">
    Id:<input type="text" name=txtid><br>
    name:<input type="text" name=txtname><br><br>
    salary:<input type="text" name=txtsal><br><br>
    Department:<input type="text" name=txtdept><br><br>
    <input type="submit" value=submit name="submitbtn">
</form>
    <?php
    // $eid=501;
    // $ename="Abhay Mahajan";
    // $esal=50000;
    // $edept="IT";
     if(isset($_POST['submitbtn']))
     {
     $eid=$_POST['txtid'];
     $ename=$_POST['txtname'];
     $esal=$_POST['txtsal'];
     $edept=$_POST['txtdept'];

        $mycon=mysqli_connect("localhost","root","","mynewdata");
        echo "Connection Sucess";
        $sql="insert into emp values(?,?,?,?)";
        $ps=$mycon->prepare($sql);
        $ps->bind_param("isis",$eid,$ename,$esal,$edept);
        $ps->execute();
        echo "Record Inserted Sucessfully";
     }
    ?>
</center>
</body>
</html>
<!-- //1. connection
//2. query (CURD)
//3. close -->