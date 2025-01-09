<?php
//$connect = mysqli_connect("localhost","root","","pmc");
$connect = mysqli_connect("localhost","pmcuser","Admin123##","pmc");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>