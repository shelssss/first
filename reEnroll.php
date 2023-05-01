<?php
include("connect/conn.php");
$studid=$_GET['id'];
$sql1=mysqli_query($conn, "SELECT * from droppedstudents where ID = '$studid'");
$row=mysqli_num_rows($sql1);

if($row > 0){
    $studid=$_GET['id'];
    $status="Active";
    $sql2=mysqli_query($conn, "INSERT INTO student(ID,name,email,address,gender,course,year) SELECT ID, name, email,address,gender,course,year FROM droppedstudents WHERE ID=$studid");
    $sql3=mysqli_query($conn, "UPDATE student set status ='$status' where ID= '$studid'");
    $sql4=mysqli_query($conn,"DELETE from droppedstudents WHERE ID='$studid'");
    header("Location: displayDrop.php");
}else{
    echo mysqli_error();
}

?>