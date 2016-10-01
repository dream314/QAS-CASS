<?php

$con=mysqli_connect("localhost","QAS-CASS","QAS-CASS!","med_base");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
