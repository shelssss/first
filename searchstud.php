<?php
include("connect/conn.php");

$id="";
$name="";
$email ="";
$address="";
$gender="";
$course="";
$year="";
$status="";


if(isset($_POST['search'])){
  $studid=$_POST['searchID'];
  $sql="SELECT * from student where ID = '$studid'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    ?>
   
        <?php 
      while($row = $result->fetch_assoc()) {
          $id=$row["ID"];
          $name=$row["name"];
          $email= $row["email"];
          $address=$row["address"];
          $gender=$row["gender"];
          $course=$row["course"];
          $year=$row["year"];
          $status=$row["status"];
      }
    } else {
      echo "<script>alert('ID Not found...')</script>";
    }
    }
?>