<?php 
$con = mysqli_connect("localhost","root","","newwebsite");

// Check connection
if ( $con->connect_error ) {
  echo "Failed to connect to MySQL: " . $con->connect_error;
  exit();
}
?>