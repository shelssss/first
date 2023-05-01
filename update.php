<?php
include("connect/conn.php");

if(isset($_POST['update'])){
    $studid=$_GET['editid'];
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $course = $conn->real_escape_string($_POST['course']);
    $year = $conn->real_escape_string($_POST['year']);
    $status="Active";

    $sql=mysqli_query($conn, "UPDATE student set name ='$name', email='$email', address='$address', course='$course', year='$year', status='$status' where ID='$studid'");
    if($sql){
        header("Location: formgetpost.php");
    }else{
        echo mysqli_error();
    }
}
?>  

<!DOCTYPE html>
<head>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel ="stylesheet" href ="style.css">
    <link rel="icon" href="imgs/logo.PNG" type="image/x-icon">

</head>
<html>

<body>
<a href="homepage.php">
<h1 class="p-4 bg-dark text-white text-center"> UPDATE STUDENT INFORMATION</h1>
</a>

<form class="row g-3 p-4" method="post">
    <?php
    $studid=$_GET['editid'];
    $sql=mysqli_query($conn, "SELECT * from student where ID='$studid'");
    while($row = mysqli_fetch_array($sql)){

    
    ?>

  <div class="col-md-8">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control"  value="<?php echo $row['name'];?>" name="name" id="name">
  </div>
  <div class="col-md-12"></div>
  <div class="col-md-4">
    <label for="address" class="form-label">Email Address</label>
    <input type="email" class="form-control" value="<?php echo $row['email'];?>"  name="email" id="email">
  </div>
  <div class="col-md-4">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address" id="address">
  </div>

 
  <div class="col-md-12"></div>
  <div class="col-md-3">
    <label for="course" class="form-label">Current Course</label>
    <input type="text" class="form-control" value="<?php echo $row['course']; ?>" name="course" id="course">
  </div>
  <div class="col-md-3">
    <label for="year" class="form-label">Year Level</label>
    <select class="form-select" name="year" >
      <option selected disabled>Year...</option>
      <option value="1st Year">1st Year</option>
      <option value="2nd Year">2nd Year</option>
      <option value="3rd Year">3rd Year</option>
      <option value="4th Year">4th Year</option>
    </select>
  </div>
  <div class="col-md-12"></div>
 
  <?php
  }?>
<div class="col-12">
    <button type="submit" name ="update" id ="updateform"class="btn btn-primary">Update</button>
  </div>
  
</form>