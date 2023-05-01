<?php
  include("connect/conn.php");
  include("insert.php");
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
    <title>Add A Student</title>
    <link rel="icon" href="imgs/logo.PNG" type="image/x-icon">

</head>
<html>

<body>
<a href="homepage.php">
<h1 class="p-4 bg-dark text-white text-center"> STUDENT REGISTRATION FORM</h1>
</a>

<form class="row g-3 p-4" action="formgetwelcome.php" method="post">

  <div class="col-md-8">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Full Name" name="name" id="name" required>
  </div>
  <div class="col-md-12"></div>
  <div class="col-md-4">
    <label for="address" class="form-label">Email Address</label>
    <input type="email" class="form-control" placeholder="Your Address" name="email" id="email" required>
  </div>
  <div class="col-md-4">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" placeholder="Your Address" name="address" id="address" required>
  </div>

 
  <div class="col-md-12"></div>
  <div class="col-md-3">
    <label for="course" class="form-label">Current Course</label>
    <input type="text" class="form-control" placeholder="Course" name="course" id="course" required>
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
  <div class="col-md-3">
  <select class="form-select" name="gender" >
      <option selected disabled>Gender...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
<div class="col-12">
    <button type="submit" name ="submit" id ="submitform"class="btn btn-primary">Submit</button>
    
 
</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
