<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Emp</title>
</head>
<body>
    <center>
       <?php
        $mycon=mysqli_connect("localhost","root","","mynewdata");
        // echo "Connection Sucess<br>";
        $sql="select * from emp";
        $record=$mycon->query($sql);
        $n=mysqli_num_rows($record);
        // echo "Total record: ".$n;
        if($n>0)
        {
        echo "<table border=1>";
        echo "<tr><th>Emp Id</th><th>Emp Name</th><th>Emp Salary</th><th>Emp Department</th></tr>";
            //  while($row=mysqli_fetch_row($record))  
             while($row=mysqli_fetch_assoc($record))  
             {
                echo "<tr>";
                echo "<td>".$row['empid']."</td>";
                echo "<td>".$row['empname']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "<td>".$row['department']."</td>";
                //    echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
                //    echo $row['empid']." ".$row['empname']." ".$row['salary']." ".$row['department'];
                // echo "<br>";
                echo "</tr>";
             }
        echo "</table>";
        }
        else
        echo "Record Not Found";
        $mycon->close();
       ?>
    </center>
</body>
</html>