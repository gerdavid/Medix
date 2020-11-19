<?php
$conn = mysqli_connect("localhost","medixcok_ger","makeit2018","medixcok_medic");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>