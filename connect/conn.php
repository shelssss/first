<?php

  $conn = mysqli_connect('localhost', 'root', '', 'students');

  if(!$conn){
    echo 'connection Error '.mysqli_connect_error();
  }
?>