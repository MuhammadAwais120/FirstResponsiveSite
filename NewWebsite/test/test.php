<?php
include "db.php";
include "header.php";
if (isset($_POST['submit'])) {
    if (isset($_FILES['file'])) {
        $new = "";
        $target_dir = "uploaded_images/";
        $uniq = uniqid();
        $old_name = $_FILES["file"]["name"];
        $ext = explode(".",$old_name);
        $ext = end($ext);
        $new = $uniq . "." . $ext; 
    }
    $post_name = $_POST['post_name'];
    $catagory = $_POST['catagory'];
    $description = $_POST['description'];
    $publisher = $_SESSION['user_id'];
    $insert_query = " INSERT INTO `posts`(`user_id`, `post_name`, `category_id`, `linked_image` , `post_description`) VALUES ('$publisher','$post_name','$catagory', '$new' ,'$description') ";
    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir . $new);
    }
}




?>
<main>
        <div class="container">
                    
        <form method="post" class="row justify-content-center border shadow m-5" enctype="multipart/form-data">
            <input type="text" name="post_name" id="post_name" placeholder="Post Name:" class="col-8 p-1 m-1">
            <?php
            $sql1 = " SELECT * FROM `post_categories`";
            $result1 = mysqli_query($con,$sql1);
            $a = mysqli_num_rows($result1);
            ?>
            <select id="catagory" name="catagory" class="col-8 p-1 m-2">
                <option value="0" selected>Select Category Option</option> 
                <?php
                if ($a > 1) {
                  $b = 1;
                  while ($fetch = mysqli_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $fetch['id'] ?>"><?php echo $fetch['category_name'] ?></option>
                <?php
                  }
                }
                ?>
            </select>
                <input type="file" name="file" id="file" class="col-8 p-1 m-2">
                <textarea name="description" id="description" placeholder="Post Description:" class="col-8 p-1 m-1" value=""></textarea><br>
                <input type="submit" name="submit" value="Submit" class="col-5 btn btn-group border text-center">
        </form>
        </div>





    
    
    
        <div class="container">
    <?php
        $sql1 = " SELECT * FROM `posts`";
        $result1 = mysqli_query($con,$sql1);
        $a = mysqli_num_rows($result1);
        if ($a > 1) {
        while ($fetch = mysqli_fetch_assoc($result1)) {
    ?>
        <div class="row mx-0 my-5 shadow">
            <div class="col-4 p-0"><img src="<?php if($fetch['linked_image'] != ''){
                echo 'uploaded_images/'. $fetch['linked_image'] ;
            }else{
                echo 'images/no_image.png';
            } ?>" alt="" style="width:50%; height:auto"></div>
            <div class="col-4">
                <div class="row h-100 align-content-center justify-content-left">
                    <div class="col-8"><?php echo $fetch['post_name']; ?></div>
                    <div class="col-8 py-3"><?php
                    $id = $fetch['category_id'];
                    $sql2 = " SELECT * FROM `post_categories` WHERE id = $id";
                    $result2 = mysqli_query($con,$sql2);
                    $fetch2 = mysqli_fetch_assoc($result2);
                
                echo $fetch2['category_name']; ?>
                    </div>
                    <div class="col-8"><?php
                echo $fetch['post_description']; ?></div>
                </div>
            </div>
            <div class="col-2">
                <?php
                $id = $fetch['user_id'];
                $sql5 = " SELECT * FROM `user_login` WHERE id = $id ";
                $result5 = mysqli_query($con,$sql5);
                $fetch5 = mysqli_fetch_assoc($result5);
                ?>

                <div class="row h-100 align-content-center">
                <?php
                echo $fetch5['fname']; ?>
                </div>    
            </div>
            <div class="col-2">
            <div class="row h-100 align-content-center">
                <?php echo " Date Created " . $fetch['post_date_created']; ?></div>    
                </div>    
        </div>
        <?php
        }
    }

        ?>
    </div>
</main>