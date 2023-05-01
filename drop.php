<?php
include("connect/conn.php");
$studid=$_GET['delid'];
$sql1=mysqli_query($conn, "SELECT * from student where ID = '$studid'");
$row=mysqli_num_rows($sql1);

if($row > 0){
    $studid=$_GET['delid'];
    $date=date("Y/m/d");
    $status="Dropped";
    $sql2=mysqli_query($conn, "INSERT INTO droppedstudents(ID,name,email,address,gender,course,year,status) SELECT ID, name, email,address,gender,course,year,status FROM student WHERE ID=$studid;");
    $sql3=mysqli_query($conn, "UPDATE droppedstudents set status = '$status' where ID = '$studid'");
    $sql4=mysqli_query($conn,"UPDATE droppedstudents set dateDropped = '$date' where ID = '$studid'");
    $sql5=mysqli_query($conn,"DELETE from student WHERE ID='$studid'");
    header("Location: formgetpost.php");
}else{
    echo mysqli_error();
}

?>