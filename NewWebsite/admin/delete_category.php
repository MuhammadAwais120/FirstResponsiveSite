<?php
include "db.php";
// var_dump($_GET);
// die();
// if (isset($_GET['id'])) {

    $category_id = $_GET['id'];
    // echo $category_id ;
    $sql = "DELETE FROM `post_categories` WHERE id = $category_id ";
    $result = mysqli_query($con , $sql) ;
    if ($result == 'true') {
        echo 'success' ;
    }else{
        echo 'error' ;
    }
    // header("location:catagories.php?deleted_successfully");
// }