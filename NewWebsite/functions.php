<?php
include 'db.php';
  $data = $_POST['data'];
  $sql3 = " SELECT * FROM `post_categories` WHERE `category_name` = '$data'";
  $result3 = mysqli_query($con,$sql3);
  if (mysqli_num_rows($result3) > 0) {
    echo 'error';
  }else {
    $sql = " INSERT INTO `post_categories` (`category_name`) VALUES ('$data')";
    $result = mysqli_query($con,$sql);
    echo 'success';
    
    
    
  }