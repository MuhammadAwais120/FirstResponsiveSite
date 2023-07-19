<?php
include "db.php";
$post_name = $_POST['post_name'];
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];
    $publisher = 0;
    if($post_name != ""){
        $insert_query = "INSERT INTO `posts`(`user_id`, `post_name`, `category_id`, `post_description`) VALUES ('$publisher','$post_name','$catagory' ,'$description') ";
        $result_query = mysqli_query($con,$insert_query); 
        if ($result_query == 'true') {
            echo 'success';
        }      
}else {
    echo 'error';
}

