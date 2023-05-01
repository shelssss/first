<?php
include("connect/conn.php");

?>
<?php
if(isset($_POST['submit'])){
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$gender = $conn->real_escape_string($_POST['gender']);
$course = $conn->real_escape_string($_POST['course']);
$year = $conn->real_escape_string($_POST['year']);
$status="Active";

$query="INSERT INTO student (name, email, address, gender, course, year, status)
VALUES ('$name', '$email','$address','$gender', '$course', '$year', '$status')";
$execute=mysqli_query($conn, $query);



  if($execute=== true){
   
   $conn->close(); 
  }else{
    $msg= mysqli_error($conn);
  }
  header("Location: formgetwelcome.php");
}


?>
