<?php
include("connect/conn.php");
include ("searchstud.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel ="stylesheet" href ="style.css">
    <title>Search A Student</title>
    <link rel="icon" href="imgs/logo.PNG" type="image/x-icon">
</head>
<body>
<a href="homepage.php">
<h1 class="p-4 bg-dark text-white text-center"> SEARCH A STUDENT</h1>
</a>
<nav class="navbar bg-light">
  <div class="container-fluid">
    <form class="d-flex" method="post">
      <input class="form-control me-2" name = "searchID" placeholder="Enter Student ID" >
      <button class="btn btn-outline-dark" name ="search" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="vh-100">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 text-center"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="imgs/person.png"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
              <h5 class="text-dark"><?php echo $name ?></h5>
              <p  class="text-dark"><?php echo $year ?></p>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Student ID: <?php echo $id?> &emsp;&emsp;&emsp;&emsp;&emsp;Status: <?php echo $status?></h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-8 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $email ?></p>
                  </div>
                  <div class="col-4 mb-3">
                    <h6>Gender</h6>
                    <p class="text-muted"><?php echo $gender ?></p>
                  </div>
                </div>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-8 mb-3">  
                    <h6>Address</h6>
                    <p class="text-muted"><?php echo $address ?></p>
                  </div>
                  <div class="col-4 mb-3">
                    <h6>Course</h6>
                    <p class="text-muted"><?php echo $course ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>