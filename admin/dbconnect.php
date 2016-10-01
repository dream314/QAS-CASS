<?php

$con=mysqli_connect("localhost","root","W3rth3B0rg!","med_base");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
