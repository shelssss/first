<?php
include("connect/conn.php");
?>
  
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href ="style.css">
    <title>Update Records</title>
    <link rel="icon" href="imgs/logo.PNG" type="image/x-icon">
</head>
<body>
<a href="homepage.php">
<h1 class="p-4 bg-dark text-white text-center">STUDENT RECORDS</h1>
</a>
<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Student ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Course</th>
      <th scope="col">Year</th>
      <th scope ="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $status="Active";
    $sql = mysqli_query($conn, "SELECT * from student ");
    $row=mysqli_num_rows($sql);
    if($row > 0){
      while($row=mysqli_fetch_array($sql)){

      
    
    ?>
 
    <tr>
      <th scope="row"><?php echo $row['ID'];?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['course']; ?></td>
      <td><?php echo $row['year']; ?></td>
      <td>
        <a href="update.php?editid=<?php echo htmlentities($row['ID']);?>" class="btn btn-warning btn-sm">EDIT</a>
        <a href="drop.php?delid=<?php echo htmlentities($row['ID']);?>" onClick="return confirm('Do you want to Drop this student?');" class="btn btn-danger btn-sm">DROP</a>
      </td>
    
    </tr>
    <?php

      }}
    ?>
  </tbody>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>